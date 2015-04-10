<?php
header("Content-Type:application/json;charset=utf-8");
class cheng{
	private $a;
	private $b;
	function __construct($num1,$num2){
		$this->a = $num1;
		$this->b = $num2;
	}
	public function chengfa(){
		$result = $this->a * $this->b;
		return $result;
	}
}
@$a = $_GET['a'];
@$b = $_GET['b'];
if($a && $b){
	$cheng = new cheng($a,$b);
	$data = array(
		"msg" => "".$cheng->chengfa(),
	);
	echo json_encode($data);
}
?>