<?php
include_once 'includes/header.php';
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();

include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();

include_once 'includes/rangking.inc.php';


$menu = isset ($_GET['m']) ? $_GET['m'] : '' ;

if ($menu == 'kriteria')
{
	include 'kriteria/kriteria.php';
} 
elseif ($menu == 'nilai') 
{
	include 'nilai/nilai.php';
} 
elseif ($menu == 'alternatif') 
{
	include 'alternatif/alternatif.php';
} 
elseif ($menu == 'rangking') 
{
	include 'rangking/rangking.php';
} 
elseif ($menu == 'laporan') 
{
	include 'laporan/laporan.php';
} 
elseif ($menu == 'profil') 
{
	include 'profil/profil.php';
} 
elseif ($menu == 'user') 
{
	include 'user/user.php';
} 
elseif ($menu == 'logout') 
{
	include 'include/logout.php';
} 
else {
	echo '<div class="well"><div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div></div>';
}
?>
		

	
<?php include 'includes/footer.php' ?>
