<?php
if(isset($_POST['submit'])) {
	echo "NIM: $_POST[nim]<br>";
	echo "NAMA: $_POST[nama]<br>";
	
	echo "PROGRAM STUDI: $_POST[progdi]<br>";
	echo "KELAS: $_POST[kelas]<br>";
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