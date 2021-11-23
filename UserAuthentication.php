<?php

include_once 'template/header.php';
session_start();
 
class Userauthenticator{

    public $loggedIn = true;

    function isLoggedIn(){
        
        return $this -> loggedIn;
    }
    function authenticate($username, $password){
        
        $usr = "ISTHISSAFE?!";
        $psw = "noabsolutelynot!";

        if($username == $usr && $password == $psw){
        
            $this -> logUserIn($username);
            return true;
        }
        else{
            echo "I gave you the username and password"
            . "<br> How did you get it wrong :(";
            return false;
        }
    }
    function logUserIn($username){
        $_SESSION['login_user'] = $username;
        header("Location: index.php");
        exit;
    }
    function logout(){
        session_destroy();
        $this -> redirectToLogin();
    }
    function redirectToLogin(){
        header("Location: Login.php");
        exit;
    }

}
