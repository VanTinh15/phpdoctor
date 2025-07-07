<?php

    function update_lichhen($appointment_id,$patient_id,$doctor_id,$appointment_date,$appointment_time,$appointment_status,$created_at,$app_describe,$hospital_id,$specializations_id){
        $conn =connectdb();

        $sql = "UPDATE appointments SET patient_id='".$patient_id."',doctor_id='".$doctor_id."', appointment_date='".$appointment_date."',
                appointment_time = '".$appointment_time."', appointment_status = '".$appointment_status."', 
                created_at = '".$created_at."', app_describe = '".$app_describe."',
                hospital_id = '".$hospital_id."', specializations_id = '".$specializations_id."' WHERE appointment_id=".$appointment_id;

        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function get_lichhen($appointment_id){
        $conn =connectdb();

        $sql = "SELECT * FROM appointments WHERE appointment_id=".$appointment_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $lichhen_one= $stmt->fetchAll();

        return $lichhen_one;
    }

    function them_lichhen($patient_id,$doctor_id,$appointment_date,$appointment_time,$created_at,$app_describe,$hospital_id,$specializations_id){
        $conn =connectdb();
        $sql = "INSERT INTO appointments (patient_id,doctor_id,appointment_date,appointment_time,created_at,app_describe,hospital_id,specializations_id)
                VALUES ( '$patient_id', '$doctor_id', '$appointment_date', '$appointment_time', '$created_at','$app_describe','$hospital_id','$specializations_id')";
        
        $conn->exec($sql);
    }


    function del_lichhen($id){
        $conn = connectdb();
        $sql = "DELETE FROM appointments WHERE appointment_id=".$id;
        $conn->exec($sql);
    }

    function hienthi_lichhen(){
        $conn= connectdb();
        $sql = "SELECT * FROM appointments a 
                INNER JOIN patient_record p ON a.patient_id = p.patient_id
                INNER JOIN doctor d ON a.doctor_id = d.doctor_id
                INNER JOIN hospital ho ON a.hospital_id = ho.hospital_id
                INNER JOIN specializations spe ON a.specializations_id = spe.specializations_id
        ORDER BY appointment_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqlichhen= $stmt->fetchAll();
        return $kqlichhen;
    }

    function loc_ngay_kham(){
        $conn= connectdb();
        $sql = "SELECT * FROM appointments a 
                INNER JOIN patient_record p ON a.patient_id = p.patient_id
                INNER JOIN doctor d ON a.doctor_id = d.doctor_id
                INNER JOIN hospital ho ON a.hospital_id = ho.hospital_id
                INNER JOIN specializations spe ON a.specializations_id = spe.specializations_id
        ORDER BY appointment_time DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }

    function huy_lichcho($id){
        $conn= connectdb();
        $sql = "UPDATE appointments 
                SET appointment_status = 'Huỷ lịch khám' 
                WHERE appointment_status = 'Đang chờ' AND appointment_id = ".$id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
    function chapnhan_lichkham($id){
        $conn= connectdb();
        $sql = "UPDATE appointments 
                SET appointment_status = 'Chấp nhận lịch khám' 
                WHERE appointment_status = 'Đang chờ' AND appointment_id = ".$id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();
        return $kq;
    }
   
    function total_status(){
        
        $conn= connectdb();
        $sql = "SELECT appointment_status, COUNT(*) AS total_appointments
        FROM appointments
        GROUP BY appointment_status";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $kq= $stmt->fetchAll();
        return $kq;

    }
    function tong_lichhen(){
        
        $conn= connectdb();
        $sql = "SELECT COUNT(*) AS total_appointments FROM appointments";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $kq= $stmt->fetch(PDO::FETCH_ASSOC);
        return $kq['total_appointments'];

    }

    function thongke_trangthai(){
            
        $conn= connectdb();
        $sql = "SELECT appointment_status, COUNT(*) AS thongke
                FROM appointments
                GROUP BY appointment_status";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $kq= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $kq;

    }

?>