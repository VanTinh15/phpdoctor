<?php
    // function check_use($email,$password){
    //     $conn= connectdb();
    //     $sql = "SELECT * FROM user WHERE email = '".$email."' AND password='".$password."' ";

    //     $stmt = $conn->prepare($sql);
    //     $stmt->execute();
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     $kqtaikhoan= $stmt->fetchAll();
        
    //     return $kqtaikhoan;
        
    // }
    function check_use($email,$password){
        $conn= connectdb();
        $sql = "SELECT 
            u.*, 
            p.patient_id, 
            d.doctor_id
        FROM user u
        LEFT JOIN patient_record p ON u.user_id = p.user_id
        LEFT JOIN doctor d ON u.user_id = d.user_id
        WHERE u.email = '".$email."' AND u.password = '".$password."' ";
        
        $result = $conn->query($sql);
        $kqtaikhoan = $result->fetchAll(PDO::FETCH_ASSOC);
        
        return $kqtaikhoan;
    }
    
    

    function update_taikhoan($user_id,$user_name,$password,$email,$user_role){
        $conn =connectdb();

        $sql = "UPDATE user SET user_name='".$user_name."',password='".$password."', email='".$email."',
                user_role = '".$user_role."' WHERE user_id=".$user_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function get_taikhoan($user_id){
        $conn =connectdb();

        $sql = "SELECT * FROM user WHERE user_id=".$user_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $tkone= $stmt->fetchAll();

        return $tkone;
    }

    function them_taikhoan($user_name,$password,$email,$user_role){
        $conn =connectdb();
        $sql = "INSERT INTO user (user_name,password,email,user_role)
                VALUES ('$user_name', '$password', '$email', '$user_role')";
       
        $conn->exec($sql);
    }


    function del_taikhoan($id){
        $conn = connectdb();
        $sql = "DELETE FROM user WHERE user_id=".$id;
        $conn->exec($sql);
    }

    function hienthi_taikhoan(){
        $conn= connectdb();
        $sql = "SELECT * FROM user 
        ORDER BY user_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqtaikhoan= $stmt->fetchAll();



        return $kqtaikhoan;
    }

?>