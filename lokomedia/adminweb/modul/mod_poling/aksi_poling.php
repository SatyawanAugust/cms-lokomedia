<?php
session_start();
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus poling
if ($module=='poling' AND $act=='hapus'){
  mysql_query("DELETE FROM poling WHERE id_poling='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input poling
elseif ($module=='poling' AND $act=='input'){
  mysql_query("INSERT INTO poling(pilihan,
                                  aktif) 
	                       VALUES('$_POST[pilihan]',
                                '$_POST[aktif]')");
  header('location:../../media.php?module='.$module);
}

// Update poling
elseif ($module=='poling' AND $act=='update'){
  mysql_query("UPDATE poling SET pilihan = '$_POST[pilihan]',
                                 aktif   = '$_POST[aktif]'  
                          WHERE id_poling = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
?>
