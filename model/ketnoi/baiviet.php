<?php

    function update_baiviet($article_id,$category_id,$title,$content,$image,$doctor_id){

        $conn =connectdb();
        if($image != ""){
                $sql = "UPDATE article SET  category_id='".$category_id."', title='".$title."',content = '".$content."', image='".$image."',
                doctor_id = '".$doctor_id."' WHERE article_id=".$article_id;
        }else{
            $sql = "UPDATE article SET  category_id='".$category_id."', title='".$title."',content = '".$content."',
                doctor_id = '".$doctor_id."' WHERE article_id=".$article_id;
        }
        

        $stmt = $conn->prepare($sql);

        $stmt->execute();
    }

    function get_onebaiviet($article_id){
        $conn =connectdb();

        $sql = "SELECT * FROM article WHERE article_id=".$article_id;

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $bvgetone= $stmt->fetchAll();

        return $bvgetone;
    }

    function them_baiviet($category_id,$title,$content,$image,$doctor_id){
        $conn =connectdb();
        $sql = "INSERT INTO article (category_id,title,content,image,doctor_id)
                VALUES ('$category_id','$title', '$content', '$image', '$doctor_id')";
        
        $conn->exec($sql);
    }


    function del_baiviet($article_id){
        $conn = connectdb();
        $sql = "DELETE FROM article WHERE article_id=".$article_id;
        $conn->exec($sql);
    }

    function hienthi_baiviet(){
        $conn= connectdb();
        $sql = "SELECT * FROM article 
        ORDER BY article_id DESC";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kqbaiviet= $stmt->fetchAll();



        return $kqbaiviet;
    }
?>