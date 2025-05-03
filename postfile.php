<?php
declare(strict_types=1);
$isfiled=function(string $name,string |int $tel,string|int $phone,string $password,string $email):string{
if(empty($name))
return $name . ' Name Field Is Empty';
if(!filter_var($email,FILTER_SANITIZE_EMAIL))
return 'IS email not Valid';
if(!is_integer($tel))
 var_dump($tel);
};
function Valid(string $name,string |int $tel,string|int $phone,
string $password,string $email)
{
    if(empty($name))
    echo $name . ' Name Field Is Empty';
    if(!filter_var($email,FILTER_SANITIZE_EMAIL))
    echo 'IS email not Valid';
    if(!is_integer($tel))
    echo var_dump($tel);
    };
//echo $isfiled($_POST['name'],$_POST['tel'],$_POST['phone'],$_POST['password'],$_POST['email']);
Valid($_POST['name'],$_POST['tel'],$_POST['phone'],$_POST['password'],$_POST['email']);

/*$name=$_POST['name'];
$tel=$_POST['tel'];
$password=$_POST['password'];
echo 'name = ' .$name .'<br>';  
echo 'tel = ' .$tel .'<br>';
echo 'password = ' .$password .'<br>';
*/?>