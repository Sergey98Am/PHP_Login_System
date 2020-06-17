<?php

if(isset($_POST['submit'])){
    include_once 'db.php';

    $uid = mysqli_real_escape_string($connect, $_POST['uid']);
    $pwd = mysqli_real_escape_string($connect, $_POST['pwd']);

    //Error handlers
    //Check if inputs are empty

    if(empty($uid) || empty($pwd)){
        header('location: ../index.php?login=empty');
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
        $result = mysqli_query($connect,$sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header('location: ../index.php?login=error');
            exit();
        }else{
            $row = mysqli_fetch_assoc($result);
                //De-hashing the password
                $hashed_pwd_check = password_verify($pwd, $row['user_pwd']);
                if($hashed_pwd_check == false){
                    header('location: ../index.php?login=error');
                    exit();
                }else{
                    session_start();
                    //Log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header('location: ../index.php?login=success');
                    exit();
                } 
        }
    }

}else{
    header('location: ../index.php?login=error');
    exit();
}