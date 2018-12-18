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
if($_SESSION['userlevel']==2){
$clasa =$_POST['clasa'];                                 /*CELE DOUA VARIABILE PRIMESC DATELE IN FUNCTIE DE PAGINA ANTERIOARA*/
$scoala=$_POST['scoala'];
if($_POST['search']=="da")
{
$clasa =$_POST['clasa_mem'];
$scoala=$_POST['scoala_mem'];
}
echo'<form method="post">
<p style="text-align: left;">Clasa:<select name="clasa" type="integer" >
<option value=" "';if($clasa==" "){echo"selected";}echo'>-</option>               /*STIU CA ARATA CA NAIBA... NU STIU ALTA METODA ... DE CAUTAT SI SCHIMBAT.*/
<option value="5"';if($clasa=="5"){echo"selected";}echo'>V</option>
<option value="6"';if($clasa=="6"){echo"selected";}echo'>VI</option>
<option value="7"';if($clasa=="7"){echo"selected";}echo'>VII</option>
<option value="8"';if($clasa=="8"){echo"selected";}echo'>VIII</option>
<option value="9"';if($clasa=="9"){echo"selected";}echo'>IX</option>
<option value="10"';if($clasa=="10"){echo"selected";}echo'>X</option>
<option value="11"';if($clasa=="11"){echo"selected";}echo'>XI</option>
<option value="12"';if($clasa=="12"){echo"selected";}echo'>XII</option>
</select></p>';


$nr=0;
$servername ="sql309.byethost18.com";
$username="b18_17476840";
$password="schmatze55";
$ubname="b18_17476840_informatica";
$conn=mysqli_connect($servername,$username,$password,$ubname);
if(!$conn)
{
echo("Connection failed".mysqli_connect_error());
}
$sql ="SELECT Unitate FROM wp_useri";
$result = mysqli_query($conn,$sql);
echo'<p style="text-align: left;">Unitatea de invatamant:<select name="scoala" type="varchar">
<option value=" ">-</option>';
while($row=mysqli_fetch_assoc($result))
{
echo'<option value="'; echo"{$row['Unitate']}"; echo'"';if($scoala==$row['Unitate']){echo" selected";}echo'>'; echo"{$row['Unitate']}"; echo "</option>";
}
echo'</select></p>';

echo'<input type="submit" value="Trimitere" />
</form>';
$sql ="SELECT * FROM  `Elevi_Municipiu` 
ORDER BY  `Elevi_Municipiu`.`Media` DESC ";
$result = mysqli_query($conn,$sql);
if($clasa)
{echo '<form method="post" action="/incarcare-candidati.php"><table style="font-size:80%">';
echo "<tr><td><b> Nume </b></td><td ><b> Prenume </b></td><td style=\"width:10%\"><b>ID</b></td><td style=\"width:10%\"><b> Nota 1 </b></td><td style=\"width:10%\"><b> Nota 2 </b></td><td><b> Media </b></td><td><b> Premiul </b></td><td><b> Admis/ Respins </b></td></tr>"; 
while($row=mysqli_fetch_assoc($result))
{
  if($row['Clasa']==$clasa||$clasa==" ")
  {
     if($row['Scoala']==$scoala||$scoala==" ")
     {
            
            echo "<tr><td> {$row['Nume']} </td><td> {$row['Prenume']} </td><td> <input size ='2' name='ID_Elev[{$nr}]' value='{$row['ID_Elev']}'> </td><td> <input size ='2' name='Nota1[{$nr}]' value='{$row['Nota1']}'> </td>
<td> <input  size='2' name='Nota2[{$nr}]' value='{$row['Nota2']}'> </td><td> <input size ='3' readonly='true' name='Media' value='{$row['Media']}'> </td>
<td> <input size ='3' name='Premiul[{$nr}]' value='{$row['Premiul']}'> </td><td> <select name='Adm_Resp[{$nr}]'>
                                                     <option value=\"0\""; if($row['Adm_Resp'] == '0'){echo"selected";}echo">Admis</option> 
                                                     <option value=\"1\""; if($row['Adm_Resp'] == '1'){echo"selected";}echo">Respins</option> 
                                                     <option value=\"2\""; if($row['Adm_Resp'] == '2'){echo"selected";}echo">Absent</option> 
                                                     </select></td>";
            echo "<input type='hidden' name='Index[{$nr}]' value='{$row['ID']}'><input type='hidden' name='page' value='Elevi_Municipiu'></tr>";
            
        $nr=$nr+1;
     } 
  }
}
$_SESSION['numar_randuri']=$nr;
echo'</table><input type="submit" value="Salveaza">';echo"<input type='hidden' name='scoala_mem' value='{$scoala}'><input type='hidden' name='clasa_mem' value='{$clasa}'> ";echo'</form>';
}
}else{echo"Nu aveti nivelul necesar";}
?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div><!-- .site-content -->
	
</div><!-- .site -->
	
</body>