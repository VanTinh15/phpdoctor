<?php
function hienthi_giokham(){
    $conn= connectdb();
    $sql = "SELECT * FROM schedule 
    ORDER BY schedule_id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt->fetchAll();
    return $kq;
}
?>