<?php 
$username="rahmiaba";
$password="Rahmi411$";
$hurufkecil=preg_match('@[a-z]@',$username);
$jumlah_karakter=strlen($username);
//validasi username
if (!$hurufkecil || $jumlah_karakter==8){
    echo "username benar";
}else{
    echo "username salah";
}
$hurufkecil2=preg_match('@[a-z]@',$password);
$hurufbesar=preg_match('@[A-Z]@',$password);
$angka=preg_match('@[0-9]@',$password);
$spasial=preg_match('~!@#$%^&*()~',$password);
$jumlah_karakter2=strlen($password);
//validasi password
if (!$hurufkecil2 || !$hurufbesar  || !$angka || !$spasial || $jumlah_karakter2<=8){
    echo "password salah";
}else{
    echo "password benar";


}




?>
