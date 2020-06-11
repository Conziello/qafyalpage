<?php
include 'db_fns.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $location = $_POST['location'];
    $business = $_POST['business'];
    // $description = $_POST['description'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
}
//echo var_dump($_POST);
    $result = mysql_query('insert into landing_data (email, location, business, phone, name, stamp, date ,time,status) 
    values("'.$email.'", "'.$location.'", "'.$business.'", "'.$phone.'", "'.$name.'", "'.date('YmdHi').'", "'.date('d/m/Y').'","'.date('H:i').'", 1)');

    if($result){
        $response = array(
            'message' => 'Save Successfully',
            'data' => array('name'=>$name, 'email'=>$email)
        );
        
    }else{
        $response = array(
            'error' => 'failed to save data',
            'data' => array('name'=>$name, 'email'=>$email)
        );
    }

    echo json_encode($response);

    header('Location:thank-you.html');
    
