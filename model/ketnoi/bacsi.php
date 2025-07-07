<?php

    function update_bacsi($doctor_id,$doctor_name,$image,$department,$profile_description,$experience,$degree,$awards_certifications,$user_id, $specializations_id,$hospital_id){

        $conn =connectdb();
        if($image != ""){
                $sql = "UPDATE doctor SET  doctor_name='".$doctor_name."', image='".$image."',department = '".$department."', 
                profile_description = '".$profile_description."', experience = '".$experience."', degree = '".$degree."',
                awards_certifications = '".$awards_certifications."',user_id = '".$user_id."',specializations_id = '".$specializations_id."',
                hospital_id = '".$hospital_id."'
                WHERE doctor_id=".$doctor_id;
        }else{
            $sql = "UPDATE doctor SET  doctor_name='".$doctor_name."',department = '".$department."', 
                profile_description = '".$profile_description."', experience = '".$experience."', degree = '".$degree."',
                awards_certifications = '".$awards_certifications."',user_id = '".$user_id."',specializations_id = '".$specializations_id."',
                hospital_id = '".$hospital_id."'
                WHERE doctor_id=".$doctor_id;
        }
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function get_onebacsi($doctor_id){
        $conn =connectdb();

        $sql = "SELECT * FROM doctor WHERE doctor_id=".$doctor_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bsgetone= $stmt->fetchAll();

        return $bsgetone;
    }

    function them_bacsi($doctor_name,$image,$department,$profile_description,$experience,$degree,$awards_certifications,$user_id, $specializations_id,$hospital_id){
        $conn =connectdb();
        $sql = "INSERT INTO doctor (doctor_name,image,department,profile_description,experience,degree,awards_certifications,user_id, specializations_id,hospital_id)
                VALUES ('$doctor_name', '$image', '$department', '$profile_description','$experience','$degree','$awards_certifications','$user_id', '$specializations_id','$hospital_id')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }


    function del_bacsi($id){
        $conn = connectdb();
        $sql = "DELETE FROM doctor WHERE doctor_id=".$id;
        $conn->exec($sql);
    }

    function hienthi_bacsi(){
        $conn= connectdb();
        $sql = "SELECT * FROM doctor doc INNER JOIN specializations sp ON doc.specializations_id = sp.specializations_id
	            INNER JOIN hospital ho ON  doc.hospital_id=ho.hospital_id 
	            ORDER BY doctor_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbacsi= $stmt->fetchAll();
        return $kqbacsi;
    }
    function hienthi_bacsi_benhvien(){
        
        $conn= connectdb();
        $sql = "SELECT * FROM doctor doc INNER JOIN hospital ho ON doc.hospital_id = ho.hospital_id
        ORDER BY doctor_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq= $stmt->fetchAll();



        return $kq;
    }

    function tong_bacsi(){
        
        $conn= connectdb();
        $sql = "SELECT COUNT(*) AS total_doctor FROM doctor";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $kq= $stmt->fetch(PDO::FETCH_ASSOC);
        return $kq['total_doctor'];

    }
?>