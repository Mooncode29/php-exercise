<?php
if(isset($_POST['pseudo']) && isset($_POST['mdp'])) {
setcookie('pseudo',$_POST['pseudo'], time () + 365*24*3600);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600);
}

if (isset($_COOKIE['pseudo'])&& isset($_COOKIE['mdp'])){
echo $_COOKIE['pseudo']." ".$_COOKIE['mdp'];

}