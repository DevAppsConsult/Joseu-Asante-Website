<?php
if(!isset($_SESSION) || !isset($_SESSION['user_id']))
{
    header('Location: index.php');
    exit();
}
