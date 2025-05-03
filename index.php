<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>تمؤين</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php   echo'hello';
//variables


$isfiled=function(string $name,string |int $tel,string|int $phone,string $password):string{
if(empty($name))
return $name . ' Name Field Is Empty';
};

$var1; 
$var2=10; 
$var4=10.6; 
$var3='php' ;
echo $var2 . '<br>';
//calc operations 
echo '$var+$var = ' . ($var2+$var4) . '<br>';
//converting values
echo '(double)$var2' . (double)$var2. '<br>';
echo '(int)$var' . (int)$var4. '<br>';
echo '(int)$var3' . (int)$var3. '<br>';
//constant variables
const varx='Rami';
define('varx2','sadeq');
echo 'varx = ' . varx. '<br>';
echo 'varx2 = ' . varx2. '<br>';
// if .. if else
$v=true;
if($v==true)
{
    echo 'insid if = ' . true. '<br>';
}else
echo 'else = ' . false. '<br>';


///switch
$varcase=400;
switch($varcase)
{
    case 100:
        echo "<h3><a href='page1.php'> 100 </a></h3>";
        break;
     case 200:
        echo "<h3><a href='page1.php'> 200 </a></h3>";
        break;
    case 300:
         echo "<h3><a href='page1.php'> 300 </a></h3>";
         break; 
    default:
        echo "<h3><a href='page1.php'> default </a></h3>";
         
}
//for loop
for($i=0;$i<=10;$i++)
{
    echo $i .'<br>';
}
//
//continue to skip on specfic condition and Break to break llop like C#
//while
$count =0;
while($count<10)
{
    echo $count . '<br>';
    $count++;
}
//do ... while
$countx = 0;
do
{
echo '<h3>$count = '.++$countx.'</h3>';
}while($countx < 10);
$c=2;
if ($c==0):
echo 0;
    endif;
  //  الحالة المتعدده //
    if($c==0):
    echo 0;
    elseif($c==1):
    echo 1;
    elseif($c==2):
    echo 2;
    endif;
    
    
    while($c<4):
    echo  $c;
    $c++;
    endwhile;
    
    
    for($i=0;$i<=10;$i++):
    echo $i .'<br>';
    endfor;
    /*
    switch(/* :(/*القيمة
    case "":
    // ...
    break;
    case "":
    // ...
    break;
    default:
    //...
    endswitch;
   */

   $myArr = array('Suppliers','Users','Costemers', "Category", 'SubCategory');
   for($i = 0; $i < count($myArr); $i++)
        {
            echo "<h3>{$myArr[$i]}</h3>";
        }


 $cardArray=array('id'=>4,'name'=>'rami');
 foreach($cardArray as $item)
 echo   $item .'<br>';

 foreach($cardArray as  $key=> $item)
 echo  $key.'   '. $item .'<br>';
$id='';$name='';
if(isset($_GET['id']))
$id=$_GET['id'];
if(isset($_GET['name']))
$name=$_GET['name'];
echo 'Get Method id = '.$id .'  name = '.$name .'<br>';
foreach($_GET as $key=>$vale)
echo $vale . '<br>' 

?>

<form action="postfile.php" method="POST">
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="">
                      
                        
                       
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control " value="">
                       
                      
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" id="phone" name="phone" class="form-control " value="">
                       
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Tel</label>
                        <input type="text" id="tel" name="tel" class="form-control " value="">
                       
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                        </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>    
</body>
</html>
