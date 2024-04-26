<?php

    define('TITLE', 'Delete a Quote');

    include('templates/header.html');

    print '<h2>Delete a Quotation</h2>';

    if (!is_administrator()) {
        print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page</p>';
        include('templates/footer.html');
        exit();
    }

    // Include database connection
    include('mysql_connect.php');

    if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) {
        $query = "SELECT quote, source, favorite FROM quotes WHERE id={$_GET['id']}";

        if ($result = mysqli_query($dbc, $query)) {
            // Retrieve the information.
            $row = mysqli_fetch_array($result);

            print '<form action="delete_quote.php" method="post">
            <p>Are you sure you want to delete this quote?</p>
            <div><blockquote>' . $row['quote'] . '</blockquote> - ' . $row['source'];

            if ($row['favorite'] == 1) {
                print ' <strong>Favorite!</strong>';
            }

            print '</div><br><input type="hidden" name="id" value="' . $_GET['id'] . '">
            <p><input type="submit" name="submit" value="Delete This Quote"></p>
            </form>';
        } else {
            // show  database error message
            print '<p class="error">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
        }

    } elseif ((isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0))) {
        // Define query to delete the quote
        $query = "DELETE from quotes WHERE id={$_POST['id']} LIMIT 1";
        $result = mysqli_query($dbc, $query); // Execute the query.

        // check for deletion
        if (mysqli_affected_rows($dbc) == 1) {
            print '<p class="success">The quote entry has been deleted.</p>';
        } else {

            // show error message
            print '<p class="error">Could not delete the blog entry  because:<br>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
        }
    } else {
        mysqli_close($dbc);

        include ('templates/footer.html');
    } 


?>