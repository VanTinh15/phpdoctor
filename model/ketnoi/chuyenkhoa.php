<?php 
 function hienthi_chuyenkhoa(){
    $conn= connectdb();
    $sql = "SELECT * FROM specializations 
    ORDER BY specializations_id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq= $stmt->fetchAll();
    return $kq;
}
?>