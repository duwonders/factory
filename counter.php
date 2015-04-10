 <!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div style="position:absolute; top:200px;left:450px;">
		<div style="width:100px;height:100px;background-color:red; position:relative;top:-50px;left:130px;" id="result"></div>
		<button>1</button>
		<button>2</button>
		<button>3</button>
		<button>4</button>
		<button>5</button>
		<button>6</button>
		<button>7</button>
		<button>8</button>
		<button>9</button>
		<button>+</button>
		<button>-</button>
		<button>*</button>
		<button>/</button>
	</div>
	<script type="text/javascript">
	var numbers = new Array();
	var numbers = document.getElementsByTagName('button');
	var result = document.getElementById('result');
	var a = 0;
	var b = 0;
	var c = 0;
	for(var i = 0;i <= numbers.length;i++){
	    if(i > 8){
	    	numbers[i].onclick = function(){	    		
	            c = numbers[i].childNodes[0].nodeValue;
	            alert(c);
	    	}
	    }else{
	    	numbers[i].onclick = function(){	    		
	    		if(a == 0){
	    			a = numbers[i].childNodes[0].nodeValue;
	    		}else{
	    			b = numbers[i].childNodes[0].nodeValue;
	    		}
	    	}
	    }
	}

	</script>
</body>
</html>  -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" placeholder="请输入第一个数字" id="num1">
	<input type="text" placeholder="运算符" id="type">
	<input type="text" placeholder="请输入第二个数字" id="num2">
	<button id="submit">submit</button>
	<p id="result"></p>
	<script>
	var num1 = document.getElementById('num1');
	var type = document.getElementById('type');
	var num2 = document.getElementById('num2');
	var submit = document.getElementById('submit');
	var result = document.getElementById('result');
	submit.onclick = function(){
	var request = new XMLHttpRequest();
	switch(type.value){
		case '+':
			request.open("GET","jia.php?a="+num1.value+"&b="+num2.value);
			request.send();
			break;
		case '-':
			request.open("GET","jian.php?a="+num1.value+"&b="+num2.value);
			request.send();
			break;
		case '*':
			request.open("GET","cheng.php?a="+num1.value+"&b="+num2.value);
			request.send();
			break;
		case '/':
			request.open("GET","chu.php?a="+num1.value+"&b="+num2.value);
			request.send();
			break;	
	}
	if(request.readyState === 4){
		if(request.status === 200){
			data = JSON.parse(request.responseText);
			result.childNodes[0].nodeValue = data.msg;
		}else{
			alert("false");
		}
	}
}
	</script>
</body>
</html>