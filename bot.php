<?php 

$link="https://sonxeber.az/";

$data=file_get_contents($link);

// Link cekme

preg_match_all('@class="nart">(.*?)<a class="thumb_zoom" href="/(.*?)"@si', $data, $get_data);

echo $say=count($get_data[2]).' Link tapıldı'.'<br><br>';

echo "<pre>";
print_r($get_data[2]);
echo "</pre>";
 ?>