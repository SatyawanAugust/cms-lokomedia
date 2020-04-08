<?php
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus shoutbox
if ($module=='shoutbox' AND $act=='hapus'){
  mysql_query("DELETE FROM shoutbox WHERE id_shoutbox='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Update shoutbox
elseif ($module=='shoutbox' AND $act=='update'){
  mysql_query("UPDATE shoutbox SET nama          = '$_POST[nama]',
                                   website       = '$_POST[website]', 
                                   pesan         = '$_POST[pesan]', 
                                   aktif         = '$_POST[aktif]'
                             WHERE id_shoutbox   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
?>
