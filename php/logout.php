<?php

session_start();

unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['nome']);
unset($_SESSION['foto']);
unset($_SESSION['tipo_usuario']);

header('location:../index.php');