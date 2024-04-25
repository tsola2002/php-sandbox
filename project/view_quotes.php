<?php 

    // Include the header
    define('TITLE', 'View All Quotes');
    include('templates/header.html');
    print '<h2>All Quotes</h2>';

    if (!is_administrator()) {
        print '<h2>Access Denied!</h2><p class="error">You do not have permission to access this page</p>';
        include('templates/footer.html');
        exit();
    }

    // Include database connection
    include('mysql_connect.php');

    // Define query to retrieve Quotes
    $query = 'SELECT id, quote, source, favorite FROM quotes ORDER BY date_entered DESC';

    // run the query
    if($result = mysqli_query($dbc, $query)) {
        // retrieve returned records
        while($row = mysqli_fetch_array($result)){
            // print the records
            print "<div>
                <blockquote>
                    {$row['quote']}
                </blockquote> - {$row['source']}\n";

            if($row['favorite'] == 1){
                print '<strong>Favorite</strong>';
            }

            // Add Administratvie Links
            print "<p>
                    <b>
                        Quote Admin: 
                    </b>
                    <a href=\"edit_quote.php?id={$row['id']}\">Edit</a>
                    < - >
                    <a href=\"delete_quote.php?id={$row['id']}\">Delete</a>
                    </p></div>\n";

        } // end of the loop
    } else {
        // show error message
        print '<p class="error">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '</p><p>The query being run was: ' . $query . '</p>';
    }

    // close database connection
    mysqli_close($dbc);

include ('templates/footer.html');

?>