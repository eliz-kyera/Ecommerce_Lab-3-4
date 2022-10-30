<?php 

require('../Settings/db_class.php');


class Productclass extends Connection {

    //SELECT
    function get_brands() {
        $sql = "SELECT * FROM `brands`";

        return $this->fetch($sql); 
    }
// INSERT 
    function add_brand($brand_name){

        $sql = "INSERT INTO `brands` (`brand_name`) VALUES ('$brand_name')";


        return $this->query($sql); 
    }

    function update_brand($brand_id, $brand_name) {

        $sql= "UPDATE `brands` SET `brand_name`= '$brand_name' WHERE `brand_id`= $brand_id";
    
        return $this->query($sql);
    }

    // detele
    function delete_brand($brand_id)
    {
        $sql= "DELETE FROM `brands` WHERE `brand_id`= $brand_id";
        return $this->query($sql);
    }

    //SELECT

    function get_categories() {
        $sql = "SELECT * FROM `categories`";

        return $this->fetch($sql); 
    }
// INSERT 
    function add_categories($cat_name){

        $sql = "INSERT INTO `categories` (`cat_name`) VALUES ('$cat_name')";


        return $this->query($sql); 
    }

    function update_categories($cat_id, $cat_name) {

        $sql= "UPDATE `categories` SET `cat_name`= '$cat_name' WHERE `cat_id`= $cat_id";
    
        return $this->query($sql);
    }

    // detele
    function delete_categories($cat_id)
    {
        $sql= "DELETE FROM `categories` WHERE `cat_id`= $cat_id";
        return $this->query($sql);
    }
}










?>