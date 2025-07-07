<?php
include '../connectDB.php';

$hospital_id = intval($_GET['hospital_id']);   // lấy giá tri id của bệnh viện trên url và chuyển giá trị đó sang số nguyên

$conn = connectDB();

$sql = "SELECT * FROM hospital_specializations hosp 
		    INNER JOIN specializations sp ON hosp.specializations_id = sp.specializations_id
		    INNER JOIN hospital ho ON ho.hospital_id = hosp.hospital_id
		
        WHERE ho.hospital_id = :hospital_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':hospital_id', $hospital_id, PDO::PARAM_INT);
$stmt->execute();

echo "<option value=''>Chọn chuyên khoa</option>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  echo "<option value='".$row['specializations_id']."'>".$row['specialization_name']."</option>";
}

$conn = null;
?>
