<?php
include '../connectDB.php';


if (isset($_GET['specialization_id']) && isset($_GET['hospital_id'])) {
    $specialization_id = intval($_GET['specialization_id']); 
    $hospital_id = intval($_GET['hospital_id']);
} else {
    echo "Tham số không hợp lệ!";
    exit;
}

$conn = connectDB();

$sql = "SELECT DISTINCT dc.doctor_id, dc.doctor_name
        FROM doctor dc
        INNER JOIN hospital_specializations hosp 
            ON dc.hospital_id = hosp.hospital_id
        INNER JOIN specializations sp 
            ON dc.specializations_id = sp.specializations_id
        WHERE hosp.hospital_id = :hospital_id
          AND sp.specializations_id = :specialization_id";

$stmt = $conn->prepare($sql);


$stmt->bindParam(':specialization_id', $specialization_id, PDO::PARAM_INT);
$stmt->bindParam(':hospital_id', $hospital_id, PDO::PARAM_INT);
$stmt->execute();

echo "<option value=''>Chọn bác sĩ</option>";
if ($stmt->rowCount() > 0) {     //rowCount là trả về số lượng dòng
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {           // lấy môt dong dữ liệu từ kết quả truy vấn
        echo "<option value='".$row['doctor_id']."'>".$row['doctor_name']."</option>";
    }
} else {
    echo "No doctors found."; 
}

$conn = null;
?>
