<?php

    function update_benhnhan($patient_id,$patient_name,$pa_address,$date_of_birth,$gender,$phone_number,$user_id){
        $conn =connectdb();

        $sql = "UPDATE patient_record SET patient_name='".$patient_name."',pa_address='".$pa_address."', date_of_birth='".$date_of_birth."',
                gender = '".$gender."', phone_number = '".$phone_number."', user_id = '".$user_id."' WHERE patient_id=".$patient_id;

        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
    }

    function get_benhnhan($patient_id){
        $conn =connectdb();

        $sql = "SELECT * FROM patient_record WHERE patient_id=".$patient_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bnone= $stmt->fetchAll();

        return $bnone;
    }

    function them_benhnhan($patient_name,$pa_address,$date_of_birth,$gender,$phone_number,$user_id){
        $conn =connectdb();
        $sql = "INSERT INTO patient_record (patient_name,pa_address,date_of_birth,gender,phone_number,user_id)
                VALUES ('$patient_name', '$pa_address', '$date_of_birth', '$gender', '$phone_number', '$user_id')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }


    function del_benhnhan($id){
        $conn = connectdb();
        $sql = "DELETE FROM patient_record WHERE patient_id=".$id;
        $conn->exec($sql);
    }

    function hienthi_benhnhan(){
        $conn= connectdb();
        $sql = "SELECT * FROM patient_record 
        ORDER BY patient_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbenhnhan= $stmt->fetchAll();
        return $kqbenhnhan;
    }

    function tong_benhnhan(){
        
        $conn= connectdb();
        $sql = "SELECT COUNT(*) AS total_patient FROM patient_record";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $kq= $stmt->fetch(PDO::FETCH_ASSOC);
        return $kq['total_patient'];

    }

?>