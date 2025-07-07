<?php

    function update_chuyenmuc($category_id,$image,$title,$content,$sponsor){

        $conn =connectdb();
        if($image != ""){
                $sql = "UPDATE category SET  image='".$image."',title='".$title."', content='".$content."',sponsor = '".$sponsor."' WHERE category_id=".$category_id;
        }else{
            $sql = "UPDATE category SET  title='".$title."', content='".$content."',sponsor = '".$sponsor."' WHERE category_id=".$category_id;
        }
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }

    function get_onechuyenmuc($category_id){
        $conn =connectdb();

        $sql = "SELECT * FROM category WHERE category_id=".$category_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $cmgetone= $stmt->fetchAll();

        return $cmgetone;
    }

    function them_chuyenmuc($image,$title,$content,$sponsor){
        $conn =connectdb();
        $sql = "INSERT INTO category (image,title,content,sponsor)
                VALUES ('$image', '$title', '$content', '$sponsor')";
       
        $conn->exec($sql);
    }


    function del_chuyenmuc($id){
        $conn = connectdb();
        $sql = "DELETE FROM category WHERE category_id=".$id;
        $conn->exec($sql);
    }

    function hienthi_chuyenmuc(){
        $conn= connectdb();
        $sql = "SELECT * FROM category 
        ORDER BY category_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqchuyenmuc= $stmt->fetchAll();



        return $kqchuyenmuc;
    }
?>