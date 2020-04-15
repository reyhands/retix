<?php

include 'config.php';

$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

$query = mysqli_query($knk, "select * from user WHERE username = '$usr' AND password = '$pwd' LIMIT 1");
$cek1 = mysqli_query($knk, "select tingkatan from user where username = '$usr' AND password = '$pwd' LIMIT 1");



if(mysqli_fetch_array($query)==true)
    {
        $cek = mysqli_fetch_array($cek1);
        if(($cek['tingkatan'])==0)
            {
                session_start();
            $_SESSION['user'] = $usr;
            $_SESSION['login'] = true;
            $_SESSION['tingkat'] = "admin";
            header("location:../admin/index.php");
            }
        else
            {
                $_SESSION['user'] = $usr;
                $_SESSION['login'] = true;
                $_SESSION['tingkatan'] = "pengguna";
                header("location:../");
            }
        }
    else
    {
    $salah = "Maaf Email/Username Atau Password anda salah";
    echo "<script type='text/javascript'>confirm('$salah');window.location='../index.html'</script>";
   

    }

