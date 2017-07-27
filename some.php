<?php   
//注册
$name = $_POST['name'];  
$pwd = $_POST['pwd'];  
//$array = array("$name","$pwd");  
//这里进行一个些操作，比如数据库交互  
$conn = new mysqli("localhost","root","","lalala");
if(!$conn){  
    echo "db is err";
}  
$res = $conn->query("select * from biao2 where name='".$name."'");
$row = $res->fetch_row();
if($row[1] == $name){
	echo 0;
}else{
	$conn->query("insert into `biao2` (`name`,`pswd`) values ('$name','$pwd')");
	echo 1;
};
//echo json_encode($array);//json_encode方式是必须的  
?>  