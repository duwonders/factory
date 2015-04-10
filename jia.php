<?php
header("Content-Type:application/json;charset=utf-8");
class jia{
	private $a;
	private $b;
	function __construct($num1,$num2){
		$this->a = $num1;
		$this->b = $num2;
	}
	public function jiafa(){
		$result = $this->a + $this->b;
		return $result;
	}
}
@$a = $_GET['a'];
@$b = $_GET['b'];
if($a && $b){
	$jia = new jia($a,$b);
	$data = array(
		"success" => true,
		"msg" => "".$jia->jiafa(),
	);
	echo json_encode($data);
}
?>