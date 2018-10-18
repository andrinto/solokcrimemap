<?php

function redirect($url){
 header('Location: '.$url, TRUE, 302);
}

function tanggal($dt,$with_timestamp=false){
 //format harus yyyy-mm-dd
 $bulan=array(
  "00" => "N/A",
  "01" => "Januari",
  "02" => "Februari",
  "03" => "Maret",
  "04" => "April",
  "05" => "Mei",
  "06" => "Juni",
  "07" => "Juli",
  "08" => "Agustus",
  "09" => "September",
  "10" => "Oktober",
  "11" => "November",
  "12" => "Desember"
 );
 $date=explode("-",$dt);
 $tahun=substr($date[2],0,2); //fix date with timestamp format
 $tanggal=$tahun." ".$bulan[$date[1]]." ".$date[0];
 if($with_timestamp){
  $tanggal .= " ".substr($date[2],3);
 }
 return $tanggal;
}

function hak_akses($level=array(), $redirect=false){
 $accepted = 0;
 foreach($level as $lv){
  if($_SESSION['level'] == $lv){
   $accepted += 1;
  }
 }
 if($accepted > 0){
  return TRUE;
 } else {
  if($redirect){
   echo "<script>";
   echo "document.location.href = 'login.php';";
   echo "</script>";
  }
  return FALSE;
 }
}

function platformSlashes($path) {
    return str_replace('/', DIRECTORY_SEPARATOR, $path);
}


class ViewAsset{
 public $inlinejs = [];
 
 function set_inline($content){
  $this->inlinejs[] = $content;
 }
 
 function get_inline(){
  return implode('', $this->inlinejs);
 }
 
 function reset_inline(){
  $this->inlinejs = [];
 }
}

$vws = new ViewAsset();
 ?>