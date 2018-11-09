<?php
if(isset($_GET['id']))
if(!isset($_SESSION))
{
    header('Location: preview-article.php?id='.$_GET['id']);
    exit;
}
if(!isset($_SESSION['user_id']))
{
    header('Location: preview-article.php?id='.$_GET['id']);
    exit;

}
$allPlans = json_decode(file_get_contents(base_url().'public/user/is-my-book/'.$_SESSION['user_id'].'/'.$_GET['id']),true); 
if(isset($allPlans['error']))
{
    header('Location: my_membership.php');
    exit();
}
