<?php    if(isset($_POST["submit"]))    {        $userName = $_POST["userID"];        $pass  = $_POST["pwd"];        if($userName == "Hari" && $pass == "Hari")        {            echo "Welcome " . $userName;        }        else        {            echo "Dear ".$userName." you dont have account with us ! So, unable to login";        }    }    else    {        echo "Illegal Access, Internal Server Error ! ";    }?>