<?php
if(isset($_GET['batiment']) && isset($_GET['salle'])){
	echo "batiment : "." ".$_GET['batiment']." "."salle :"." ".$_GET['salle'];
}else{
	echo "veuillez renseigner le batiment et la salle";
}