<?php
require("vt.php");

/*if(!@$baglanti){
	die("Bağlantı başarısız".mysqli_connect_error());
}
else
{
	echo "Bağlantı başarılı";
}*/
?>

<?php
if(isset($_POST['soru'])){

    $cevap = $_POST['soru'];

$sorgu="INSERT INTO `anket` (`soru`, `cevap_1`, `kullanici_id` ,` ilce_id`  , ` bolge_id` ) VALUES ( 'Hizmetimizden Memnun Musunuz?', 'Evet', '1')";
$a=mysqli_query(@$baglanti,$sorgu); 
}
mysqli_close(@$baglanti);


echo "Cevabınız Sistemimize Eklenmiştir."


?>
