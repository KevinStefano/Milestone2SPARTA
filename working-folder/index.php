<?php 
define ('__POS__',str_repeat('../',substr_count(dirname(__FILE__),'\\')-substr_count('C:\xampp\htdocs\Milestone2SPARTA\working-folder','\\')));
include __POS__."assets/includes/functions.php";
?>
<?php 

$sess = new Session;

$user = new Users;
$userData = $user->getUserData($_SESSION['loggedInId']);

if ($userData['user_auth'] == 0) {
    header("Location: dashboard/admin/");
} elseif ($userData['user_auth'] == 1) {
    header("Location: dashboard/customer/");
} else {
    header("Location: login/");
}

?>