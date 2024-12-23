<?php
$users = 'pages/users.txt';
function register($name, $pass, $email)
{
    //data validation block
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    $email=trim(htmlspecialchars($email));
    if($name ==''|| $pass ==''|| $email =='')
    {
        echo "<h3/><span style='color:red;'>
            Fill All Required Fields!</span><h3/>";
        return false;
    }
    if(strlen($name) < 3|| strlen($name) > 30||
       strlen($pass) < 3 || strlen($pass) > 30)
    {
        echo "<h3/><span style='color:red;'>
            Values Length Must Be Between 3 And 30!</span><h3/>";
        return false;
    }
    //login uniqueness check block
    global $users;
    $file=fopen($users,'a+');
    while($line=fgets($file, 128))
    {
        $readname=substr($line,0,strpos($line,':'));
        if($readname == $name)
        {
            echo "<h3/><span style='color:red;'>
            Such Login Name Is Already Used!</span><h3/>";
            return false;
        }
    }
    //new user adding block
    $line=$name.':'.md5($pass).':'.$email."\r\n";
    fputs($file,$line);
    fclose($file);
    return true;
}

function login($name, $pass)
{
    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    global $users;
    $file = fopen($users, 'r');

    if (!$file) {
        echo "<h3/><span style='color:red;'>
            Users file not found!</span><h3/>";
        return false;
    }

    while ($line = fgets($file, 128)) {
        $data = explode(':', trim($line));

        $readname = $data[0];
        $readpass = $data[1];

        if ($readname === $name && $readpass === md5($pass)) {
            fclose($file);
            $_SESSION['registered_user'] = $name;
            return true;
        }
    }

    fclose($file);
    echo "<h3/><span style='color:red;'>
        Invalid Login or Password!</span><h3/>";
    return false;
}
