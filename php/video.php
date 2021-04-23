<?php
include 'DataBase.php';

function getVidsbySeason($season){
    $db = DataBase::getInstance();
    $sql = "SELECT * FROM seasons Where season='$season'";
    $result = $db->query($sql);
    while($season = $result->fetch(PDO::FETCH_ASSOC)){
        $seasonArray[] = $season;
    }
    return $seasonArray;
}
?>