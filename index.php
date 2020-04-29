<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ATM KARAR DESTEK SİSTEMİ</title>
<style type="text/css">




.div1{
height: 200px;
width: 300px;
background-color: #c62d1f;
color: #fff;
padding:10px;
display: table;
margin:200px;
position: absolute;
top: 65%;
left: 50%;
margin-left: -160px;
margin-top: -70px;
}


#paragraf{
height: 200px;
width: 300px;
background-color: #ff1a1a;
color: #fff;
padding:30px;

}


#giris{
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	color:#f24537;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:10px 24px;
	margin-left:10px;
	font-family:Arial;
}





	

</style>

</head>
<body>
<form action="login.php" method="POST">
<div class="div" style="text-align:center">
<body style="background:url(akbank.jpg) top center no-repeat;">
	
	
    <div class="container" style="width:300px;height:50px;">

</div>
<div class="div1">
<div id="paragraf" style="text-align:center">
<br><br><label><b>Kullanıcı Adı:</b></label><input type="text" placeholder="Kullanıcı Adınızı Giriniz" name="kullanici_adi"><br><br>
<br><label><b>Şifre:</b></label><input type="password" placeholder="Şifrenizi Giriniz" name="sifre"><br><br>
<button id="giris">Giriş</button>
<br><br><label><b>Kullanıcı Adınız "@" şeklinde olmalıdır!</i></label><br><br>

</div>
</div>
</form>


</body>
</html>
