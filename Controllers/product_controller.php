<?php 

require('../Classes/product_class.php');

function get_brands(){
    $brand = new Productclass;
    $run_query = $brand->get_brands(); //the actual execution of the query 

    if ($run_query) {
        $data = array();

        foreach ($run_query as $key => $values) {
            
            $data[] = $values;
        }
    }



    return $data; 
}
//print_r(get_brands());

function add_brand($brand_name) {
    $brand = new Productclass; 

    $run_query = $brand->add_brand($brand_name);

    if ($run_query) {
        return $run_query;
    } else {
        return false; 
    }
}

function update_brand_name($brand_id, $update_brand_name) {
    $brand= new Productclass;
    
    $run_query = $brand->update_brand($brand_id, $update_brand_name); 

    if ($run_query) {
        return $run_query;
    } else {
        return false; 
    }

   
}


function delete_brand_name($brand_id) {
    $brand = new Productclass; 

    $run_query = $brand->delete_brand($brand_id);

    if($run_query) {
        return $run_query;
    } else {
        return false;
    }

    function get_categories(){
        $categories = new Productclass;
        $run_query = $categories->get_categories(); //the actual execution of the query 
    
        if ($run_query) {
            $data = array();
    
            foreach ($run_query as $key => $values) {
                
                $data[] = $values;
            }
        }
    
    
    
        return $data; 
    }
    //print_r(get_brands());
    
    function add_categories($cat_name) {
        $categories = new Productclass; 
    
        $run_query = $categories->add_categories($cat_name);
    
        if ($run_query) {
            return $run_query;
        } else {
            return false; 
        }
    }
    
    function update_category_name($cat_id, $update_category_name) {
        $categories= new Productclass;
        
        $run_query = $categories->update_categories($cat_id, $update_category_name); 
    
        if ($run_query) {
            return $run_query;
        } else {
            return false; 
        }
    
       
    }
    
    
    function delete_category_name($cat_id) {
        $categories = new Productclass; 
    
        $run_query = $categories->delete_categories($cat_id);
    
        if($run_query) {
            return $run_query;
        } else {
            return false;
        }
    }
    
}


