<?php
header("Content-Type:application/json;charset=utf-8");
class jian{
	private $a;
	private $b;
	function __construct($num1,$num2){
		$this->a = $num1;
		$this->b = $num2;
	}
	public function jianfa(){
		$result = $this->a - $this->b;
		return $result;
	}
}
@$a = $_GET['a'];
@$b = $_GET['b'];
if($a && $b){
	$jian = new jian($a,$b);
	$data = array(
		"msg" => "".$jian->jianfa(),
	);
	echo json_encode($data);
}
?>