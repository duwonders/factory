<?php
header("Content-Type:application/json;charset=utf-8");
class chu{
	private $a;
	private $b;
	function __construct($num1,$num2){
		$this->a = $num1;
		$this->b = $num2;
	}
	public function chufa(){
		$result = $this->a / $this->b;
		$return result;
	}
}
@$a = $_GET['a'];
@$b = $_GET['b'];
if($a && $b){
	$chu = new chu($a,$b);
	$data = array(
		"msg" => "".$chu->chufa(),
	);
	echo json_encode($data);
}
?>