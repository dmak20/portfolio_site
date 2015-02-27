<?php

include ('db_connect.php');

// portfolio.php
// Loads and displays the details for a portfolio entry

if ($_GET['project'] != "") {
    $project = htmlspecialchars($_GET['project']);
    // get all the details from the project
    $sql = "select * from portfolio where id = ".$project;
    $result = $conn->query($sql);

    header("content-type:application/json");
    
    $json = array();
    while ($row = $result->fetch_assoc()) {
        $json = array(
            array
            (
                'title'=>$row['name'],
                'description'=>$row['description'],
                'date'=>$row['date'],
                'tags'=>$row['tags']
            )
        );
        
        $sql2 = "select * from portfolio_images where project_id='".$row['id']."'";
        $result2 = $conn->query($sql2);
        
        $imgArr = array();
        while ($row1 = $result2->fetch_assoc()) {
            array_push($imgArr, array(
                'image'=>$row1['img'],
                'caption'=>$row1['caption']
            ));
        }
        //echo json_encode($imgArr);
        $json = array_merge($json, $imgArr);
        
        echo json_encode($json);
        
    }
    
}


?>