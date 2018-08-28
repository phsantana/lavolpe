<!DOCTYPE html>
<html onclick="first();">

<head>
	<title>Teste</title>
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
	<style type="text/css">

	*{
		margin: 0;
		padding: 0;
		border: 0;
	}

	body{
		background-color: black;
	}

	.slider input[type="radio"]{
		display: none;
		z-index: 1;
	}

	label{
		color: white;
	}

	.slider input[type=radio] + label{
		display: block;
		position: relative;
		margin-top: 1%;
		z-index: 1;
		padding-left: 28px;
		line-height: 20px;
	}

	.slider input[type=radio]:checked + label:before,
	.slider input[type=radio]:not(:checked) + label:before{
		position: absolute;
		content: '';
		cursor: pointer;
		border: 1px solid #DDD;
		border-radius: 100%;
		left: 0;
		z-index: 1;
		width: 20px;
		height: 20px;

	}

	.slider input[type=radio]:checked + label:before{
		background-color: #123456;
		z-index: 1;
		transition: all ease 0.5s;
	}

	.slider input[type=radio]:not(:checked) + label:before{
		background-color: #FFF;
		z-index: 1;
		transition: all ease 0.5s;
	}
/*
	.slider input[type=radio]:checked + label:after,
	.slider input[type=radio]:not(:checked) + label:after{
		position: absolute;
		content: '';
		cursor: pointer;
		border-radius: 100%;
		margin: auto;
		left: 4px;
		background-color: #F87DA9;
		width: 18px;
		height: 18px;
		transition: all 0.2s ease;
		}*/

		.topologia{

			position: absolute;

			color: white;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);

			transition: all ease .5s;
			background: linear-gradient(to right, #000 50%, #FFF 50%);
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			animation: shine 3s ease infinite;
			background-size: 400% auto;
		}

		.animated{
			animation-duration: .5s;
		}

		@keyframes shine {
			to {
				background-position: -35%;
			}
		}

		@keyframes fadeIn{
			from{
				opacity: 0;
				visibility: hidden;
			}

			to{
				opacity: 1;
				visibility: visible;
			}
		}

		@keyframes fadeInLeft{
			from{
				opacity: 0;
				visibility: hidden;
				transform: translateX(100%);
			}

			to{
				opacity: 1;
				visibility: visible;
				transform: translateX(0);
			}
		}

		@keyframes fadeOutRight{
			from{
				opacity: 1;
				visibility: visible;
				transform: translateX(0);
			}
			to{
				opacity: 0;
				visibility: hidden;
				transform: translateX(-100%);
			}
		}

		@keyframes spin{
			from{
				transform: rotate(0deg);
			}
			to{
				transform: rotate(360deg);
			}
		}

		@keyframes metamorfose{
			0%{
				border-radius: 0;
				transform: rotate(0deg);
			}
			100%{
				border-radius: 100%;
				transform: rotate(720deg);
			}
		}

		@keyframes shake{
			0%{
				transform: translateY(0);
			}
			25%{
				transform: translateY(-5%);
			}
			50%{
				transform: translateY(5%);
			}
			75%{
				transform: translateY(-2%);
			}
			100%{
				transform: translateY(1%);
			}
		}

		@keyframes pulse{
			from{
				opacity: 1;
				transform: scale(1);
			}
			to{
				opacity: 0;
				transform: scale(1.5);
			}
		}

		.presentation-off{
			position: fixed;
			min-height: 100%;
			width: 100%;
			z-index: 9999;
			/*			animation: fadeOutRight 1s;*/
			transition: all ease .5s;
			transform: translateX(-100%);
		}

		.presentation-on{
			position: fixed;
			min-height: 100%;
			width: 100%;
			z-index: 9999;
			/*background: cover;*/
			background-color: rgba(0,0,0,0.9);
			transition: all ease .5s;
			animation: fadeIn 1.3s;
		}

		.presentation .slider{
			z-index: -1 !important;
		}

		h1 { font-size: 25pt; }

		.linear-wipe {
			text-align: center;

			background: linear-gradient(to right, white 50%, black 50%);
			background-size: 200% auto;

			color: #000;
			background-clip: text;
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;

			animation: shine 3s linear infinite;
		}

		.fil0{
			fill: white;
		}

		.loader{
			border: 16px solid #DDD;
			border-top: 16px solid #00AAAA;
			width: 120px;
			height: 120px;
			position: relative;
			border-radius: 50%;
			animation: spin 1.1s ease infinite;
			transition: all ease .5s;
			display: inline-block;
			overfow: hidden;
		}

		.metamorfose{
			width: 100px;
			height: 100px;
			/*box-shadow: 2px 2px 3px black;*/
			background-color: orange;
			position: relative;
			margin-left: 5%;
			transition: all ease 1.1s;
		}

		.metamorfose:hover{
			transition: all linear 1.1s;
			cursor: pointer;
			/*animation: metamorfose 1.1s linear;*/
			border-radius: 100%;
			background-color: #500;
			transform: rotate(720deg);
		}

		.metamorfose2{
			width: 100px;
			height: 100px;
			/*box-shadow: 2px 2px 3px black;*/
			background-color: gold;
			position: relative;
			display: inline-block;
			margin-left: 5%;
			transition: all ease 1.1s;
		}

		.metamorfose2:hover{
			cursor: pointer;
			animation: shake .3s ease;
		}

		.pulse{
			overflow: visible;
			position: relative;
		}

		.pulse:before{
			content: '';
			display: block;
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			background-color: inherit;
			border-radius: inherit;
			animation: pulse 1s linear infinite;
			z-index: -1;
		}

		h1{
			position: absolute;
			top: -50%;
			left: 32%;
			transition: all ease .5s;
		}

		h1 span{
			font: 50pt Monaco, MonoSpace;
			height: 100px;
			width: 35px;
			position: absolute;
			left: 50%;
			top: 50%;
			/*transform: translate(50%, 50%);*/
			transform-origin: bottom center;
		}

		.char1{
			color: #FFF;
			text-shadow: .1px .1px 30px white;
			transform: rotate(0deg);
		}
		.char2{
			color: #FFF;
			opacity: .0125;
			text-shadow: .1px .1px 30px white;
			transform: rotate(45deg);
		}
		.char3{
			color: #FFF;
			opacity: .025;
			text-shadow: .1px .1px 30px white;
			transform: rotate(90deg);
		}
		.char4{
			color: #FFF;
			opacity: .05;
			text-shadow: .1px .1px 30px white;
			transform: rotate(135deg);
		}
		.char5{
			color: #FFF;
			opacity: .1;
			text-shadow: .1px .1px 30px white;
			transform: rotate(180deg);
		}
		.char6{
			color: #FFF;
			opacity: .2;
			text-shadow: .1px .1px 30px white;
			transform: rotate(225deg);
		}
		.char7{
			color: #FFF;
			opacity: .4;
			text-shadow: .1px .1px 30px white;
			transform: rotate(270deg);
		}
		.char8{
			color: #FFF;
			opacity: .8;
			text-shadow: .1px .1px 30px white;
			transform: rotate(315deg);
		}

		.pattern-position{
			width: 100px;
			height: 100px;
			position: relative;
			margin-left: 15%;
			animation: spin steps(8,start) .8s infinite;
		}


	</style>
</head>

<body>
	<!-- <div id="presentation" class="presentation-on"> -->
		<!-- <h1 class="topologia">TESTE</h1> -->
		<!-- <?php //require 'view/import/fox.php';?> -->

		<!-- </div> -->
		<div style="position: relative; z-index: -1;" class="slider">
			<input id="slide1" type="radio" name="teste">
			<label for="slide1">Option 1</label>

			<input id="slide2" type="radio" name="teste" checked>
			<label for="slide2">Option 2</label>
		</div>

		<br>

		<div class="loader"></div>

		<br>
		<br>
		<br>

		<div class="metamorfose"></div>
		<div class="metamorfose2"></div>

		<div class="pattern-position">
			<h1>
				<span class="char1">.</span>
				<span class="char2">.</span>
				<span class="char3">.</span>
				<span class="char4">.</span>
				<span class="char5">.</span>
				<span class="char6">.</span>
				<span class="char7">.</span>
				<span class="char8">.</span>
			</h1>
		</div>

	</body>

	</html>

	<script type="text/javascript">
		function first(){

			var el = document.getElementsByName("teste");

			var i = 0;

			setInterval(function(){
				el[i].checked = true;

				++i;

				if(i == el.length)
					i = 0;
			}, 3000);
		}

		function slideToRight(){

			var pres = document.getElementById("presentation");

			setTimeout(function(){
				if(pres.classList.contains("presentation-on")){
					pres.classList.remove("presentation-on");
					pres.classList.add("presentation-off");
				}
			}, 3000);
		};

	//window.onload = slideToRight;
</script>