<?php
require 'import/header.php';
require '../js/functions/functions.php';
require 'import/splash.php';
require 'import/modals.php';
?>


<div id="inicio" class="full-screen">

	<?php require 'import/barra_navegadora.php'; ?>

	<div class="parallax-container full-screen animated fadeIn">
		<div class="parallax">
			<img id="unfocus" src="../assets/img/mono_fox.jpg" style="opacity: .4;">
		</div>
	</div>

	<div class="row">
		<div class="col m6 offset-m3 s12 top-offset-body center">
			<div class="animated fadeInLeft" style="border-top: solid 1px white; border-bottom: solid 1px white; padding-bottom: 25px;">
				<h1 class="tw_cent txt_white">
					LA VOLPE
				</h1>
				<h6 class="tw_cent txt_white" style="margin-top: -3%; font-size: 12pt; letter-spacing: 3px;">
					Provedor e Consultoria de TI
				</h6>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col m5 offset-m7 s12 bottom-offset-body center">
			<div class="animated comeLeft">

				<i id="icon_trigger" onmouseover="effectOn('more_info_txt','icon_trigger')" onmouseout="effectOff('more_info_txt','icon_trigger')" class="material-icons right txt_white effect1Off" style="font-size: 30pt; margin-right: 5%">
					keyboard_arrow_down
				</i>

				<p id="more_info_txt" onclick="scrollSuave('footer')" class="effect2Off right tw_cent" style="padding: 0 !important; font-size: 11pt;">
					MAIS INFORMAÇÕES
				</p>
			</div>
		</div>
	</div>
</div>

<?php require 'import/servicos.php';?>
<?php require 'import/slider.php';?>
<?php require 'import/footer.php';?>
</body>
</html>
<script type="text/javascript" src="../js/function/script.js"></script>