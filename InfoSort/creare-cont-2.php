<?php
session_start();
?>
<?php
$servername ="sql309.byethost18.com";
$username="b18_17476840";
$password="schmatze55";
$ubname="b18_17476840_informatica";
$conn=mysqli_connect($servername,$username,$password,$ubname);
if(!$conn)
{
echo("Connection failed".mysqli_connect_error());
}
$sql ="SELECT ID_Client,Nume,Prenume,Userlevel FROM wp_useri";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
   if($row['ID_Client']==$_SESSION['userindex'])
  {
     $nume_autentif=$row['Nume'];
     $prenume_autentif=$row['Prenume'];
     $userlevel=$row['Userlevel'];
     $userlevell=$row['Userlevel'];
     break;
  }
}
switch ($userlevel){
  case(1):$userlevel="Profesor";
    break;
 case(2):$userlevel="Admin";
   break;
 default:
   break;
}
?>
<head>
    <link rel="icon" type="image/png" href="POZE/logo.png">
    <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="/CSS/styles.css">
   <link rel="stylesheet" type="text/css" href="/CSS/mystyle.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="/JS/script.js"></script>
   <title>Informatica Bucuresti</title>
   <link rel="stylesheet" href="CSS/slicknav.css" />
   <script src="JS/jquery.slicknav.min.js"></script>
</head>
<script>
	$(function(){
		$('#menu').slicknav({label: '',duration:500});
	});
</script>
<div id="page" class="hfeed site">
	<div id="sidebar" class="sidebar" style="position: fixed;">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<font size="3"><?php  echo "$nume_autentif $prenume_autentif "; if($userlevell==2){ echo"<a href=\"admin.php\">$userlevel</a><br>";} else{echo" $userlevel<br>";}
                                   if($userlevell==0)
{
   echo '<a href="autentificare.php">Autentificare</a>';
} 
else
{
  echo'<a href="deconectare.php">Deconectare</a>';
} ?></font><br><br>
                                  						<p class="site-title"><a href="/" rel="home">Informatica Bucuresti</a></p>
									
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

			<div id="secondary" class="secondary">

		<nav id="site-navigation" class="main-navigation" role="navigation">
<ul id="menu">
        <?php 
        if($_SESSION['userlevel']==0){echo"<li><a href='autentificare.php'><span>Autentificare</span></a></li>";}
        if($_SESSION['userlevel']>=1){
        echo"<li>$nume_autentif $prenume_autentif $userlevel </li>";
        echo"<li><a href='/deconectare.php'>Deconectare </li>";
        echo"<li><span>Admin</span>
      <ul>
         <li><a href='/creare-cont-2.php'><span>Creare cont pentru profesor</span></a></li>
         <li><a href='/administrare-conturi.php'><span>Administrare conturi</span></a></li>
         <li><a href='/transferare-elevi-sector-municipiu.php'><span>Transfer Sector->Municipiu</span></a></li>
         <li><a href='/upload-excel.php'><span>Upload Excel</span></a></li>
         <li><a href='/import-excel.php'><span>Import Excel</span></a></li>
         <li><a href='/export-excel.php'><span>Export Excel</span></a></li>
      </ul>
   </li>";}           ?>
        <?php if($_SESSION['userlevel']==2||$_SESSION['userlevel']==1){echo"<li ><a href='/informatica-incarcare-candidati.php'><span>Incarcare Candidati</span></a></li>";}           ?>
       <li class='has-sub'><a href='#'><span>Sector</span></a>
      <ul>
<?php if($_SESSION['userlevel']==2){echo"<li><a href='informatica-introducere-rezultate.php'><span>Introducere rezultate</span></a></li>";}           ?>
         <li><a href='informatica-vizualizare-candidati.php'><span>Candidati</span></a></li>
         <li class='last'><a href='informatica-vizualizare-rezultate.php'><span>Rezultate</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Municipiu</span></a>
      <ul>
<?php    if($_SESSION['userlevel']==2||$_SESSION['userlevel']==1){echo"<li><a href='informatica-introducere-rezultate-municipiu.php'><span>Introducere rezultate</span></a></li>";}  ?>
         <li><a href='informatica-vizualizare-candidati-municipiu.php'><span>Candidati</span></a></li>
         <li class='last'><a href='informatica-vizualizare-rezultate-2.php'><span>Rezultate</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Export</span></a></li>
</ul>
                                    <div id='cssmenu'>
<ul>
        <?php if($_SESSION['userlevel']==2){echo"
       <li class='has-sub'><a href='#'><span>Admin</span></a>
      <ul>
         <li><a href='/creare-cont-2.php'><span>Creare cont pentru profesor</span></a></li>
         <li><a href='/administrare-conturi.php'><span>Administrare conturi</span></a></li>
         <li><a href='/transferare-elevi-sector-municipiu.php'><span>Transfer Sector->Municipiu</span></a></li>
         <li><a href='/upload-excel.php'><span>Upload Excel</span></a></li>
         <li><a href='/import-excel.php'><span>Import Excel</span></a></li>
         <li class='last'><a href='/export-excel.php'><span>Export Excel</span></a></li>
      </ul>
   </li>";}           ?>
        <?php if($_SESSION['userlevel']==2||$_SESSION['userlevel']==1){echo"<li ><a href='/informatica-incarcare-candidati.php'><span>Incarcare Candidati</span></a></li>";}           ?>
       <li class='has-sub'><a href='#'><span>Sector</span></a>
      <ul>
<?php if($_SESSION['userlevel']==2){echo"<li><a href='informatica-introducere-rezultate.php'><span>Introducere rezultate</span></a></li>";}           ?>
         <li><a href='informatica-vizualizare-candidati.php'><span>Candidati</span></a></li>
         <li class='last'><a href='informatica-vizualizare-rezultate.php'><span>Rezultate</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Municipiu</span></a>
      <ul>
<?php    if($_SESSION['userlevel']==2||$_SESSION['userlevel']==1){echo"<li><a href='informatica-introducere-rezultate-municipiu.php'><span>Introducere rezultate</span></a></li>";}  ?>
         <li><a href='informatica-vizualizare-candidati-municipiu.php'><span>Candidati</span></a></li>
         <li class='last'><a href='informatica-vizualizare-rezultate-2.php'><span>Rezultate</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='#'><span>Export</span></a></li>
</ul>
</div>
	</nav><!-- .main-navigation -->
		
		
		
	</div><!-- .secondary -->
	</div><!-- .sidebar -->
                                                                                            <!-- AICI INCEPE PAGINA PRINCIPALA -->
	<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
<article id="post-6" class="post-6 page type-page status-publish hentry">
	
	<header class="entry-header"><!-- .TITLUL -->
		<h2 class="entry-title"><a href="/" rel="bookmark">Olimpiada de Informatica - 2016</a></h2>	</header><!-- .entry-header -->
	<div class="entry-content"><!-- .CONTINUT-->
	<?php
$nume=$_POST['nume'];
if($nume)
{
$servername ="sql309.byethost18.com";
$username="b18_17476840";
$password="schmatze55";
$ubname="b18_17476840_informatica";
$conn=mysqli_connect($servername,$username,$password,$ubname);
if(!$conn)
{
echo("Connection failed".mysqli_connect_error());
}
$sql ="SELECT User,Email FROM wp_useri";
$result = mysqli_query($conn,$sql);
$user=$_POST['user'];
$email=$_POST['email'];
$exista=false;
while($row=mysqli_fetch_assoc($result))
{
  if($row['User']==$user)
  {
     echo"Acest nume de utilizator exista deja.<br>";
     $exista=true;
     break;
  }
  if($row['Email']==$email)
  {
     echo"Acest email este deja in baza noastra e date.<br>";
     $exista=true;
     break;
  }
}
$prenume= $_POST['prenume'];
$user= $_POST['user'];
$parola= $_POST['parola'];
$email=$_POST['email'];
$sector=$_POST['sector'];
$unitate=$_POST['unitate'];
if($prenume!=""&&$user!=""&&$parola!=""&&$email!=""&&$sector!=""&&$unitate!="")
{
  if(!$exista)
 {
   $sql ="INSERT INTO wp_useri (Nume , Prenume , User , Parola , Email , Sector , Unitate) VALUES ('$nume','$prenume','$user','$parola','$email','$sector','$unitate')";
   if ($conn->query($sql) === TRUE) 
   {
      echo "<script>window.location = 'finalizare-cont.php';</script>";
   } 
   else 
   {
      echo "Error: " . $sql . "<br>" . $conn->error;
   }
 }
}
else
{
  echo'Toate campurile trebui completate';
}

}


echo "<form action=\"creare-cont-2.php";
echo"\" method=\"post\">
<table style=\"height: 167px;\" border=\"0\" width=\"659\">
<tbody>
<tr>
<td>
<p style=\"text-align: left;\">Nume:    <input name=\"nume\" type=\"text\" value=$nume ></p>
<p style=\"text-align: left;\">Prenume: <input name=\"prenume\" type=\"text\" value=$prenume ></p>
<p style=\"text-align: left;\">User:     <input name=\"user\" type=\"text\" value=$user ></p>
<p style=\"text-align: left;\">Parola:     <input name=\"parola\" type=\"password\" value=$parola ></p>
<p style=\"text-align: left;\">Email:      <input name=\"email\" type=\"text\" value=$email ></p>
<p style=\"text-align: left;\">Sector:     <input name=\"sector\" type=\"text\" value=$sector ></p>
<p style=\"text-align: left;\">Unitate de invatamant:        <input name=\"unitate\" type=\"text\" value=$unitate ></p>
</td>
</tr>
<tr>
<td style=\"text-align: center;\" align=\"left\"><input type=\"submit\" value=\"Trimitere\" /></td>
</tr>
</tbody>
</table>
</form>";
?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div><!-- .site-content -->
	
</div><!-- .site -->
	
</body>