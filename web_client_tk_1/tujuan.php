<?php 
echo "INPUT TEXT => " . $_POST["input_text"] . "<br>" ;
echo "INPUT PASSWORD => " . $_POST["input_password"] . "<br>" ;
echo "PILIH SATU => " . $_POST["pilih"] . "<br>" ;

echo "PILIH BANYAK => " ;
// echo $_POST["cek"]  ;
$pilih = isset($_POST["cek"]) ? $_POST["cek"] : array() ;
foreach ($pilih as $item ) {
  echo $item . " " ;
}

echo "INPUT TEXT PANJANG => " . $_POST["paragarap"] . "<br>" ;
echo "PILIHAN SELECT => " . $_POST["pilihan_select"] . "<br>" ;
echo "UPLOAD => " . $_POST["file_upload"] . "<br>" ;
?>