<?php 

    function calAverage($totalMarks, $noOfSubjects){
        if($noOfSubjects == 0){
            // trigger an error
            trigger_error("calAverage(): The number of subjects cannot be zero", E_USER_WARNING);
            return false;
        } else {
            return $totalMarks / $noOfSubjects;
        }
    }

    echo calAverage(410, 0);

?>