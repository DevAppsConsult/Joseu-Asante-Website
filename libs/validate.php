<?php
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
$myPlan = json_decode(file_get_contents(base_url().'public/user/plan/'.$_SESSION['user_id']),true); 
if(!isset($myPlan['success']))
{
    header('Location:  my_membership.php');
    exit;
}
if($myPlan['data']['status'] == 'Expired')
{
    header('Location:  my_membership.php');
}
