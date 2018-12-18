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
$centru=$_POST['centru'];
$clasa =$_POST['clasa'];
$scoala=$_POST['scoala'];
if($_POST['search']=="da")
{
$clasa =$_POST['clasa_mem'];
$scoala=$_POST['scoala_mem'];
$centru=$_POST['centru_mem'];
}
echo'<form method="post">
<p style="text-align: left;">Clasa:     <select name="clasa" type="integer" >
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
echo'"Connection failed".mysqli_connect_error()';
}
$sql ="SELECT Unitate FROM wp_useri";
$result = mysqli_query($conn,$sql);
echo'<p style="text-align: left;">Unitatea de invatamant:       <select name="scoala" type="varchar">
<option value=" ">-</option>';
$licee = array();
$adresa=0;
while($row=mysqli_fetch_assoc($result))
{
if (!in_array($row['Unitate'], $licee)) {
    echo'<option value="'; echo"{$row['Unitate']}"; echo'"';if($scoala==$row['Unitate']){echo" selected";}echo'>'; echo"{$row['Unitate']}"; echo "</option>";
    $licee[$adresa] = $row['Unitate'];
    $adresa = $adresa + 1;
}
}
echo'</select></p>';
echo'
<p style="text-align: left;">Centrul de examen:     <select name="centru" type="varchar">
<option value=" ">-</option>';
$sql ="SELECT Centru_examen FROM Elevi_Municipiu";
$result = mysqli_query($conn,$sql);
$liceecentru = array();
$adresa=0;
while($row=mysqli_fetch_assoc($result))
{
if (!in_array($row['Centru_examen'], $liceecentru)) {
    echo'<option value="'; echo"{$row['Centru_examen']}"; echo'"';if($centru==$row['Centru_examen']){echo" selected";}echo'>'; echo"{$row['Centru_examen']}"; echo "</option>";
    $liceecentru[$adresa] = $row['Centru_examen'];
    $adresa = $adresa + 1;
}
}echo'</select></p>
<input type="submit" value="Trimitere" /></form><br/>';
$sql ="SELECT * 
FROM  `Elevi_Municipiu` 
ORDER BY  `Elevi_Municipiu`.`Nume` ASC ";
$result = mysqli_query($conn,$sql);
$numar=0;
if($clasa)
{
  echo '<form name="update" action="/update-candidati.php" method="post"><table style="font-size:70%" >'; //-------------------------------- nu ai inchis
  echo "<tr><td style=\"width:13%\"> <b>Nume</b> </td><td style=\"width:15%\"> <b>Prenume</b> </td><td style=\"width:8%\"><b> Sector </b></td><td><b> Profesorul indrumator </b></td><td><b> Scoala de provenienta </b></td><td><b> Centrul de examen </b></td></tr>";
  while($row=mysqli_fetch_assoc($result))
  {
    if($row['Clasa']==$clasa||$clasa==" ")
    {
       if(($row['Scoala']==$scoala)||($scoala==" "))
       {
          if(($row['Centru_examen']==$centru)||($centru==" "))
          {
              $numar=$numar+1;
              echo "<tr><td> {$row['Nume']} </td><td> {$row['Prenume']} </td><td align='center'> {$row['Sector']}  </td><td align='center'> {$row['Profesor']} </td><td> {$row['Scoala']} </td><td>";    
              if($_SESSION['userlevel']==2)
 {	 	 
 echo "<input size='30' name='Centru_examen[{$nr}]' value='{$row['Centru_examen']}'> ";	 	 
 echo "<input type='hidden' name='Index[{$nr}]' value='{$row['ID']}'> ";	 	
 } 	 	 
 else{	 	
 echo "{$row['Centru_examen']}";} 	 	
              $nr=$nr+1;
              echo"<input type='hidden' name='scoala_mem' value='{$scoala}'><input type='hidden' name='clasa_mem' value='{$clasa}'><input type='hidden' name='centru_mem' value='{$centru}'>";
             echo " </td></tr>";
          } // end if $row[cnetru de examen]
       }// end if$row[scoala]
    }//end if$row[clasa]
  }//end while
   echo "<input type='hidden' name='page' value='Elevi_Municipiu'> ";
  echo'</table>';
  $_SESSION['numar_randuri']=$numar;
  if($_SESSION['userlevel']==2){echo'<input type="submit" value="Salveaza" >';}
echo'</form>';
}// end if($clasa)
?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div><!-- .site-content -->
	
</div><!-- .site -->
	
</body>