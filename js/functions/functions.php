<script type="text/javascript">

	var $w = $(window);

	$w.on("scroll", function(){
		if ($w.scrollTop() < 50) {
			$("#logo").stop().animate({height: '100px', width: '50px'},'slow');
			$("#menu").removeClass('black_nav');
			$("#menu").addClass('transparent');
		}else{
			$("#logo").stop().animate({height: '85px', width: '45px'},'slow');
			$("#menu").removeClass('transparent');
			$("#menu").addClass('black_nav');
		}
	});

	var slides;

	function autoSlider(i){

		var radios = document.getElementsByName("slide");
		var images = document.getElementsByName("img-slide");
		var topos = document.getElementsByName("topo-slide");

		// if(i == null)
		// 	var i = 0;

		slides = setInterval(function(){

			if((i-1) < 0){
				images[images.length-1].classList.add('scroll_right');
				topos[topos.length-1].classList.add('slide-fade');
			}else{
				images[i-1].classList.add('scroll_right');
				topos[i-1].classList.add('slide-fade');
			}

			if((i+1) == images.length){
				if(images[0].classList.contains('scroll_right'))
					images[0].classList.remove("scroll_right");
			}else{
				if(images[i+1].classList.contains('scroll_right'))
					images[i+1].classList.remove("scroll_right");
			}

			if((i+1) == topos.length){
				if(topos[0].classList.contains('slide-fade'))
					topos[0].classList.remove("slide-fade");
			}else{
				if(topos[i+1].classList.contains('slide-fade'))
					topos[i+1].classList.remove("slide-fade");
			}

			radios[i].checked = true;

			++i;

			if(i == radios.length){
				i = 0;
			}
		}, 4000);
	}

	window.onload = autoSlider(0);



	function goToSlide(i){
		var radios = document.getElementsByName("slide");
		var images = document.getElementsByName("img-slide");
		var topos = document.getElementsByName("topo-slide");

		if((i+1) == images.length){
			if(!images[0].classList.contains('scroll_right'))
				images[0].classList.add("scroll_right");
		}else{
			if(!images[i+1].classList.contains('scroll_right'))
				images[i+1].classList.add("scroll_right");
		}

		if((i+1) == topos.length){
			if(!topos[0].classList.contains('slide-fade'))
				topos[0].classList.add("slide-fade");
		}else{
			if(!topos[i+1].classList.contains('slide-fade'))
				topos[i+1].classList.add("slide-fade");
		}

		if(images[i].classList.contains('scroll_right'))
			images[i].classList.remove("scroll_right");

		if(topos[i].classList.contains('slide-fade'))
			topos[i].classList.remove("slide-fade");

		if((i-1) < 0){
			images[images.length-1].classList.add('scroll_right');
			topos[topos.length-1].classList.add('slide-fade');
		}else{
			images[i-1].classList.add('scroll_right');
			topos[i-1].classList.add('slide-fade');
		}

		radios[i].checked = true;

		clearInterval(slides);

		autoSlider(i);
	}

	function infoFooterOn(objeto){
		var info = document.getElementById(objeto);

		if(info.classList.contains('infoOff')){
			info.classList.remove('infoOff');
			info.classList.add('infoOn');
		}
	}

	function infoFooterOff(objeto){
		var info = document.getElementById(objeto);

		if(info.classList.contains('infoOn')){
			info.classList.remove('infoOn');
			info.classList.add('infoOff');
			// setTimeout(function(){
			// 	info.classList.remove('infoOn');
			// 	info.classList.add('infoOff');
			// }, 1000);
		}
	}

	function effectOn(tg_obj, tr_obj){
		var el = document.getElementById(tg_obj);
		var el2 = document.getElementById(tr_obj);

		if (el.classList.contains('effect2Off') && el2.classList.contains('effect1Off')){
			el.classList.remove('effect2Off');
			el2.classList.remove('effect1Off');

			el.classList.add('effect2On');
			el2.classList.add('effect1On');
		}
	}

	function effectOff(tg_obj, tr_obj){
		var el = document.getElementById(tg_obj);
		var el2 = document.getElementById(tr_obj);

		if (el.classList.contains('effect2On') && el2.classList.contains('effect1On')){

			setTimeout(function(){
				el.classList.remove('effect2On');
				el2.classList.remove('effect1On');

				el.classList.add('effect2Off');
				el2.classList.add('effect1Off');
			},3000);
		}
	}

	function slideToRight(){

		var inicio = document.getElementById("inicio");
		inicio.style.display = 'none';
		document.getElementById("html").style.overflow = "hidden";
		var pres = document.getElementById("presentation");


		setTimeout(function(){
			if(pres.classList.contains("presentation-on")){
				pres.classList.remove("presentation-on");
				pres.classList.add("presentation-off");
				document.getElementById("html").style.overflow = "initial";
				inicio.style.display = 'block';
			}
		}, 3000);
	};

	window.onload = slideToRight;

	// $(function(){
	// 	$('.slider input[type=radio]'):checked;
	// 	setInterval("autoSlider()", 3000);
	// })

	// var $r = $(window);

	// $r.on("scroll", function(){
	// 	if($r.scrollTop() < 0){
	// 		$('html').style.webkitScrollBar.display = inline;
	// 	}else{
	// 		$('html').style.webkitScrollBar.display = hidden;
	// 	}
	// });

	// $win = $(window);
	// $win.on("scroll", function(){
	// 	if($win.scrollTop() > 10){
	// 		document.getElementById("unfocus").style.webkitTransition = "ease .1s";
	// 		document.getElementById("unfocus").style.webkitFilter = "blur(10px)";
	// 	}else{
	// 		document.getElementById("unfocus").style.webkitTransition = "ease .5s";
	// 		// document.getElementById("unfocus").style.webkitBackfaceVisibility = "hidden";
	// 		// document.getElementById("unfocus").style.webkitTransform = "translate3d(0,0,0)";
	// 		// document.getElementById("unfocus").style.webkitTransformStyle = "preserve-3d";
	// 		document.getElementById("unfocus").style.webkitFilter = "blur(0)";
	// 	}
	// });

	var $el = $("#footer-modal");

	$el.on("mouseover", function(){
		$(el).addClass('effect3');
	});
	
	$(document).ready(function(){
		$('.button-collapse').sideNav({
      				menuWidth: 150, // Default is 300
				    edge: 'left', // Choose the horizontal origin
				    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
				    draggable: true, // Choose whether you can drag to open on touch screens,
				});
		$('.carousel.carousel-slider').carousel({fullWidth: true});
	});

	$(document).ready(function(){
		$('.cadastro').sideNav({
      				menuWidth: 200, // Default is 300
				    edge: 'right', // Choose the horizontal origin
				    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
				    draggable: true, // Choose whether you can drag to open on touch screens,
				});
		$('.carousel.carousel-slider').carousel({fullWidth: true});
	});

	function scrollSuave(objeto){
		var offset_value = document.getElementById(objeto).offsetTop;

		// window.scrollTo(x,y);
		$('html, body').animate({
			scrollTop: offset_value
		}, 1000);
	}

	// function scrollSuave($objeto){
	// 	var target_offset = $($objeto).offset();
	// 	var target_top = target_offset.top;
	// 	$('html, body').animate({ scrollTop: target_top }, 1000);
	// }

	$(document).ready(function(){
		$('.parallax').parallax();
	});

	/*$(document).ready(function(){

		var options = [
		{selector: '#contato', offset: 400, callback: 'globalFunction()' }];

		Materialize.scrollFire(options);
	});*/

	$(document).ready(function() {
		var options = [{
			selector: '#contato',
			offset: 400,
			callback: function(el){
				Materialize.showStaggeredList($(el));
			}
		}];
		Materialize.scrollFire(options);
	});

	function validaRG(){
		var campo = document.getElementById('rg');
		var txt   = document.getElementById('rg').value;
		var n     = txt.length;
		if(n > 9){
			alert("O RG digitado deve ter apenas 9 caracteres");
			this.terms.focus();
			e.preventDefault();
			return;
		}
		return true;
	}

	$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});

	$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
      	alert("Ready");
      	console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
  }
  );
</script>