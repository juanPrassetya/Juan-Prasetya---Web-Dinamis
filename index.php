<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];

    switch($page){
        case'home':
            include 'halaman/profile.php';
            break;
             
        case'tentang':
            include 'halaman/tentang.php';
            break;
        case'kontak':
            include 'halaman/kontak.php';
            break;
        default:
        include 'halaman/profile.php';
        break;
            
    }
   
}
else{
    $page="home";
    include 'halaman/profile.php';
}


?>