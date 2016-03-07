<?php
mail("misha.dovganych@gmail.com","$_POST[subject]","from: $_POST[email]\nname: $_POST[name]\nmsg: $_POST[content]" );
?>