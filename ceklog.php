<?php 
// Cek login apakah berhasil
if(isset($_SESSION['loglog'])){

}else{
    header('location:login.php');
}
