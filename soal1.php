<?php 
//METHOD/FUNCTION
function biodata(){

$data=array(
"name"      =>"rahmia baharuddin",
"address"   =>"desa tasiwalie,kacamatan suppa,kabupaten pinrang,sulawesi selatan ",
"hobbies"   =>array("karate","nonton"),
"is_married"=>false,
"school"    =>"smkn 2 pinrang",
"skills"    =>array("desain","main pubg",)



);
$biodata=json_encode($data);   
return $biodata;
}
// END FUNCTION

echo biodata();
?>
