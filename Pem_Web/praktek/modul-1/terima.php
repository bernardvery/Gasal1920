<?php
if(isset($_POST['submit'])) {
	echo "NIM: $_POST[nim]<br>";
	echo "NAMA: $_POST[nama]<br>";
	
	echo "PROGRAM STUDI: ";
	switch($_POST['progdi']) {
		case 1:
			echo "Teknik Informatika<br>";
			break;
		case 2:
			echo "Sistem Informasi<br>";
			break;
		default:
			echo "Ilmu Komunikasi<br>";
			break;	
	}
	echo "KELAS: ";
	if($_POST['kelas']=="pg") {
		echo "Reguler Pagi<br>";
	}else {
		echo "Reguler Sore<br>";
	}
	
	echo "TGL LAHIR: $_POST[tgl_lhr]<br>";
	
	echo "MINAT: ";
	foreach ($_POST['minat'] as $minat) {
   	 echo $minat; 
   	 if(end($_POST['minat'])<>$minat){
			echo ", ";    
    	 }else {
    	 	echo "<br>";
    	 }
	}

	echo "PASSWORD: $_POST[pass]<br>";
}
?>