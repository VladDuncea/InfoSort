<style>
#ceva{
  font-weight:bold;
  font-size:100;

}
</style>
<?php

$servername ="sql309.byethost18.com";
$username="b18_17476840";
$password="schmatze55";
$ubname="b18_17476840_informatica";
$conn=mysqli_connect($servername,$username,$password,$ubname);

//citire
$contor=1;
$vector;
$sql ="SELECT * FROM Multe_coloane";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
for($a=1;$a<=62;$a++) 
    {
        //echo $row[$a];
        $vector [$a] = $row[$a]+$_POST[$a]; 
    }
$vector[$a]=$row[$a] +1;
}

//update

$sql ="UPDATE Multe_coloane SET ";
for($a=1;$a<63;$a++) 
{$sql=$sql."`".$a."`='".$vector[$a]."',";}
$sql=$sql."`".$a."`='".$vector[$a]."'";
//echo $sql;
$result = mysqli_query($conn,$sql);

?>

<div id="ceva">
<center>Multumim pentru participare!</center>	
</div>