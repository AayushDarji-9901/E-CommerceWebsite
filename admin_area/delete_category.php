<?php

if(isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];
    //echo $delete_category;

    $delete_query="Delete from `categories` where category_id=$delete_category";
    

}


?>