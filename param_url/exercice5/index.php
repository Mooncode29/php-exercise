<?php
if(isset($_GET['semaine'])){
	echo "semaine ="." ".$_GET['semaine'];

}else{
	echo "il faut resnseigner la semaine";
}