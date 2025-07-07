<?php
function hienthi_benhvien(){
    $conn= connectdb();
    $sql = "SELECT * FROM hospital 
    ORDER BY hospital_id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt->fetchAll();
    return $kq;
}

?>