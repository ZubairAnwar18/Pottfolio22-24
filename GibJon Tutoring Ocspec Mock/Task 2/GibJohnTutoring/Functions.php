<?php

function check_login($con)
{
    if(isset($_session['user_id']))

    {

        $id = $_session['user_id'];
        $query = "select * from user where user_id = '$id' limit 1";

        $result = mys1li_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {

            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("location: login.php");
    die;
}

function random_num(length)
{

    $text = "";
    if($length < 5)
    {
        $length = 5;
    }   

    $len = rand(4,$length);
    for ($i=0; $i < ; $i++) {
        
    }
}

