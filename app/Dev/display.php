



<?php




function IsModelEmpty($items) {

    if (count($items) == 0) {

        echo "<h1>No data to display!!</h1>";
        return true;
    }

    else {
        return false;
    }


}