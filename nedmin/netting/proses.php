<?php 
ob_start();
session_start();

include 'baglan.php';


if(isset($_POST['loggin'])){

	$user_name=$_POST['user_name'];
	$user_password=md5($_POST['user_password']);


	if($user_name && $user_password){


		$user_sor=$db->prepare("SELECT * from user where user_name=:name and user_password=:password");
		$user_sor->execute(array(
			'name'=>$user_name,
			'password'=>$user_password
		));

		$say=$user_sor->rowCount();


		if($say>0){
			$_SESSION['user_name']=$user_name;

			header("Location:../production/index.php");
		}
		else{
			header("Location:../production/login.php?status=no");
		}
	}

}




if (isset($_POST['umumiparametrsaxla'])) {
	
	$parametrsaxla=$db->prepare("UPDATE ayar SET
		ayar_siteurl=:siteurl,
		ayar_title=:title,
		ayar_description=:description,
		ayar_keywords=:keywords,
		ayar_author=:author,
		ayar_slider=:slider
		WHERE ayar_id=0");

	$update=$parametrsaxla->execute(array(
		'siteurl' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'author' => $_POST['ayar_author'],
		'slider' => $_POST['ayar_slider']
	));

	if ($update) {

		Header("Location:../production/umumi-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/umumi-parametr.php?vəziyyət=no");

	}

}



if (isset($_POST['elaqeparametrsaxla'])) {
	
	$parametrsaxla=$db->prepare("UPDATE ayar SET
		ayar_tel=:tel,
		ayar_gsm=:gsm,
		ayar_faks=:faks,
		ayar_mail=:mail,
		ayar_adres=:adres,
		ayar_ilce=:ilce,
		ayar_il=:il,
		ayar_mesai=:mesai
		WHERE ayar_id=0");

	$update=$parametrsaxla->execute(array(
		'tel' => $_POST['ayar_tel'],
		'gsm' => $_POST['ayar_gsm'],
		'faks' => $_POST['ayar_faks'],
		'mail' => $_POST['ayar_mail'],
		'adres' => $_POST['ayar_adres'],
		'ilce' => $_POST['ayar_ilce'],
		'il' => $_POST['ayar_il'],
		'mesai' => $_POST['ayar_mesai']
	));

	if ($update) {

		Header("Location:../production/elaqe-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/elaqe-parametr.php?vəziyyət=no");

	}

}


if (isset($_POST['apiparametrsaxla'])) {
	
	$parametrsaxla=$db->prepare("UPDATE ayar SET
		ayar_recapctha=:recapctha,
		ayar_googlemap=:googlemap,
		ayar_analystic=:analystic
		WHERE ayar_id=0");

	$update=$parametrsaxla->execute(array(
		'recapctha' => $_POST['ayar_recapctha'],
		'googlemap' => $_POST['ayar_googlemap'],
		'analystic' => $_POST['ayar_analystic']
	));

	if ($update) {

		Header("Location:../production/api-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/api-parametr.php?vəziyyət=no");

	}

}


if (isset($_POST['sosialparametrsaxla'])) {
	
	$parametrsaxla=$db->prepare("UPDATE ayar SET
		ayar_facebook=:facebook,
		ayar_twitter=:twitter,
		ayar_youtube=:youtube,
		ayar_google=:google
		WHERE ayar_id=0");

	$update=$parametrsaxla->execute(array(
		'facebook' => $_POST['ayar_facebook'],
		'twitter' => $_POST['ayar_twitter'],
		'youtube' => $_POST['ayar_youtube'],
		'google' => $_POST['ayar_google']
	));

	if ($update) {

		Header("Location:../production/sosial-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/sosial-parametr.php?vəziyyət=no");

	}

}


if (isset($_POST['mailparametrsaxla'])) {
	
	$parametrsaxla=$db->prepare("UPDATE ayar SET
		ayar_smtphost=:smtphost,
		ayar_smtpuser=:smtpuser,
		ayar_smtppassword=:smtppassword,
		ayar_smtpport=:smtpport
		WHERE ayar_id=0");

	$update=$parametrsaxla->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']
	));

	if ($update) {

		Header("Location:../production/mail-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/mail-parametr.php?vəziyyət=no");

	}

}


if (isset($_POST['haqqimizdasaxla'])) {
	
	$haqqimizdasaxla=$db->prepare("UPDATE haqqimizda SET
		haqqimizda_baslig=:baslig,
		haqqimizda_mezmun=:mezmun,
		haqqimizda_video=:video,
		haqqimizda_vizyon=:vizyon,
		haqqimizda_missiya=:missiya
		WHERE haqqimizda_id=0");

	$update=$haqqimizdasaxla->execute(array(
		'baslig' => $_POST['haqqimizda_baslig'],
		'mezmun' => $_POST['haqqimizda_mezmun'],
		'video' => $_POST['haqqimizda_video'],
		'vizyon' => $_POST['haqqimizda_vizyon'],
		'missiya' => $_POST['haqqimizda_missiya']
	));

	if ($update) {

		Header("Location:../production/haqqimizda.php?vəziyyət=ok");

	} else {

		Header("Location:../production/haqqimizda.php?vəziyyət=no");

	}

}


if (isset($_POST['slidersaxla'])) {

	$uploads_dir="../../dimg/slider";
	@$tmp_name=$_FILES['slider_imgyol']['tmp_name'];
	@$name=$_FILES['slider_imgyol']['name'];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	
	$saxla=$db->prepare("INSERT INTO slider SET
		slider_ad=:ad,
		slider_link=:link,
		slider_sira=:sira,
		slider_status=:status,
		slider_imgyol=:imgyol");

	$insert=$saxla->execute(array(
		'ad' => $_POST['slider_ad'],
		'link' => $_POST['slider_link'],
		'sira' => $_POST['slider_sira'],
		'status' => $_POST['slider_status'],
		'imgyol' => $refimgyol 
	));

	if ($insert) {

		Header("Location:../production/slider.php?vəziyyət=ok");

	} else {

		Header("Location:../production/slider.php?vəziyyət=no");

	}

}

if ($_GET['emlaksil']=="ok") {
	
	$sil=$db->prepare("DELETE from emlak where emlak_id=:emlak_id");

	$kontrol=$sil->execute(array(
		'emlak_id'=>$_GET['emlak_id']
	));

	if ($kontrol) {

		$resimsilunlink=$_GET['emlak_imgyol'];
		unlink("../../$resimsilunlink");

		Header("Location:../production/emlak.php?vəziyyət=ok");

	} else {

		Header("Location:../production/emlak.php?vəziyyət=no");

	}
}

if ($_GET['galeriyasil']=="ok") {
	
	$sil=$db->prepare("DELETE from galeriya where galeriya_id=:galeriya_id");

	$kontrol=$sil->execute(array(
		'galeriya_id'=>$_GET['galeriya_id']
	));

	$emlak_id=$_GET['emlak_id'];

	if ($kontrol) {

		$sekilsilunlink=$_GET['galeriya_imgyol'];
		unlink("../../$sekilsilunlink");

		Header("Location:../production/emlak_galeriya.php?emlak_id=$emlak_id&vəziyyət=ok");

	} else {

		Header("Location:../production/galeriya.php?vəziyyət=no");

	}
}



if ($_GET['slidersil']=="ok") {
	
	$sil=$db->prepare("DELETE from slider where slider_id=:slider_id");

	$kontrol=$sil->execute(array(
		'slider_id'=>$_GET['slider_id']
	));

	if ($kontrol) {

		Header("Location:../production/slider.php?vəziyyət=ok");

	} else {

		Header("Location:../production/slider.php?vəziyyət=no");

	}
}


if (isset($_POST['slideredit'])) {


	if ($_FILES['slider_imgyol']["size"] > 0) {

		$uploads_dir="../../dimg/slider";
		@$tmp_name=$_FILES['slider_imgyol']['tmp_name'];
		@$name=$_FILES['slider_imgyol']['name'];

		$benzersizsayi1=rand(20000,32000);
		$benzersizsayi2=rand(20000,32000);
		$benzersizsayi3=rand(20000,32000);
		$benzersizsayi4=rand(20000,32000);
		$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

		$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

		@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

		
		$slider_id=$_POST['slider_id'];

		$edit=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_status=:status,
			slider_imgyol=:imgyol
			WHERE slider_id=$slider_id");

		$update=$edit->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'status' => $_POST['slider_status'],
			'imgyol' => $refimgyol
		));

		if ($update) {

			$sekilsilunlink=$_POST['slider_imgyol'];
			unlink("../../$sekilsilunlink");

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&vəziyyət=ok");

		} else {

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&vəziyyət=no");

		}


	} else {

		$slider_id=$_POST['slider_id'];

		$edit=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_link=:link,
			slider_sira=:sira,
			slider_status=:status
			WHERE slider_id=$slider_id");

		$update=$edit->execute(array(
			'ad' => $_POST['slider_ad'],
			'link' => $_POST['slider_link'],
			'sira' => $_POST['slider_sira'],
			'status' => $_POST['slider_status']
		));

		if ($update) {

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&vəziyyət=ok");

		} else {

			Header("Location:../production/slider-edit.php?slider_id=$slider_id&vəziyyət=no");

		}
	}

}

#emlak save

if (isset($_POST['emlaksaxla'])) {

	$uploads_dir="../../dimg/emlak";
	@$tmp_name=$_FILES['emlak_imgyol']['tmp_name'];
	@$name=$_FILES['emlak_imgyol']['name'];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$saat=date("H:i:s");
	$tarix=date("Y-m-d");
	$vaxt=$tarix." ".$saat;
	
	$saxla=$db->prepare("INSERT INTO emlak SET
		emlak_baslig=:baslig,
		user_id=:id,
		emlak_adres=:adres,
		emlak_qiymet=:qiymet,
		emlak_status=:status,
		emlak_detay=:detay,
		emlak_tarix=:tarix,
		emlak_imgyol=:imgyol");

	$insert=$saxla->execute(array(
		'baslig' => $_POST['emlak_baslig'],
		'id' => $_POST['user_id'],
		'adres' => $_POST['emlak_adres'],
		'qiymet' => $_POST['emlak_qiymet'],
		'status' => $_POST['emlak_status'],
		'detay' => $_POST['emlak_detay'],
		'tarix' => $vaxt,
		'imgyol' => $refimgyol 
	));

	if ($insert) {

		Header("Location:../production/emlak.php?vəziyyət=ok");

	} else {

		Header("Location:../production/emlak.php?vəziyyət=no");

	}

}


if ($_GET['menusil']=="ok") {
	
	$sil=$db->prepare("DELETE from menu where menu_id=:menu_id");

	$kontrol=$sil->execute(array(
		'menu_id'=>$_GET['menu_id']
	));

	if ($kontrol) {

		Header("Location:../production/menu.php?status=ok");

	} else {

		Header("Location:../production/menu.php?status=no");

	}
}


if (isset($_POST['mezmunsaxla'])) {

	$uploads_dir="../../dimg/mezmun";
	@$tmp_name=$_FILES['mezmun_imgyol']['tmp_name'];
	@$name=$_FILES['mezmun_imgyol']['name'];

	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

	$tarix=$_POST['mezmun_tarix'];
	$saat=$_POST['mezmun_saat'];

	$vaxt=$tarix.' '.$saat;

	
	$saxla=$db->prepare("INSERT INTO mezmun SET
		mezmun_ad=:ad,
		mezmun_detay=:detay,
		mezmun_keyword=:keyword,
		mezmun_status=:status,
		mezmun_imgyol=:imgyol,
		mezmun_vaxt=:vaxt");

	$insert=$saxla->execute(array(
		'ad' => $_POST['mezmun_ad'],
		'detay' => $_POST['mezmun_detay'],
		'keyword' => $_POST['mezmun_keyword'],
		'status' => $_POST['mezmun_status'],
		'imgyol' => $refimgyol, 
		'vaxt' => $vaxt 
	));

	if ($insert) {

		Header("Location:../production/mezmun.php?vəziyyət=ok");

	} else {

		Header("Location:../production/mezmun.php?vəziyyət=no");

	}

}


if (isset($_POST['menusaxla'])) {
	
	$saxla=$db->prepare("INSERT INTO menu SET
		menu_ust=:ust,
		menu_ad=:ad,
		menu_url=:url,
		menu_info=:info,
		menu_sira=:sira,
		menu_status=:status");

	$insert=$saxla->execute(array(
		'ust' => $_POST['menu_ust'],
		'ad' => $_POST['menu_ad'],
		'url' => $_POST['menu_url'],
		'info' => $_POST['menu_info'],
		'sira' => $_POST['menu_sira'],
		'status' => $_POST['menu_status']
	));

	if ($insert) {

		Header("Location:../production/menu.php?vəziyyət=ok");

	} else {

		Header("Location:../production/menu.php?vəziyyət=no");

	}

}



if (isset($_POST['logoedit'])) {


	$uploads_dir="../../dimg";
	@$tmp_name=$_FILES['ayar_logo']['tmp_name'];
	@$name=$_FILES['ayar_logo']['name'];

	$benzersizsayi4=rand(20000,32000);

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


	$edit=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");

	$update=$edit->execute(array(
		'logo' => $refimgyol		
	));

	if ($update) {

		$sekilsilunlink=$_POST['eski_logo'];
		unlink("../../$sekilsilunlink");

		Header("Location:../production/umumi-parametr.php?vəziyyət=ok");

	} else {

		Header("Location:../production/umumi-parametr.php?vəziyyət=no");

	}

}



if (isset($_POST['userimgedit'])) {


	$uploads_dir="../../dimg/user";
	@$tmp_name=$_FILES['user_image']['tmp_name'];
	@$name=$_FILES['user_image']['name'];

	$benzersizsayi4=rand(20000,32000);

	$refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


	$edit=$db->prepare("UPDATE user SET
		user_image=:image
		WHERE user_id={$_POST['user_id']}");

	$update=$edit->execute(array(
		'image' => $refimgyol		
	));

	if ($update) {

		$sekilsilunlink=$_POST['eski_logo'];
		unlink("../../$sekilsilunlink");

		Header("Location:../production/user-profile.php?vəziyyət=ok");

	} else {

		Header("Location:../production/user-profile.php?vəziyyət=no");

	}

}



if (isset($_POST['userprofilesave'])) {

	$user_password=md5($_POST['user_password']);
	
	$usersaxla=$db->prepare("UPDATE user SET
		user_adsoyad=:adsoyad,
		user_password=:password,
		user_tel=:tel,
		user_mail=:mail
		WHERE user_id={$_POST['user_id']}");

	$update=$usersaxla->execute(array(
		'adsoyad' => $_POST['user_adsoyad'],
		'password' => $user_password,
		'tel' => $_POST['user_tel'],
		'mail' => $_POST['user_mail']
	));

	if ($update) {

		Header("Location:../production/user-profile.php?vəziyyət=ok");

	} else {

		Header("Location:../production/user-profile.php?vəziyyət=no");

	}

}

?>