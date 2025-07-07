<?php


    function update_status($contactId){
        $conn= connectdb();
        $sql = "UPDATE contact SET replied = 1 WHERE contact_id = $contactId";

        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function xoa_lienhe($id){
        $conn =connectdb();
        $sql = "DELETE FROM contact WHERE contact_id=".$id;
        $conn->exec($sql);
        
    }


    function them_lienhe($contact_name,$contact_email,$subject,$message){
        $conn =connectdb();
        $sql = "INSERT INTO contact ( contact_name,contact_email,subject,message)
                VALUES ( '$contact_name', '$contact_email', '$subject', '$message')";
        
        $conn->exec($sql);
    }
    
    function hienthi_lienhe(){
        $conn= connectdb();
        $sql = "SELECT * FROM  contact 
        ORDER BY contact_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqlienhe= $stmt->fetchAll();



        return $kqlienhe;
    }
    
    

?>