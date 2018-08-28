<nav id="menu" class="transparent animated fadeInDown">

	<div class="row">
		<div class="col m5 s5 hide-on-small-only">

			<ul>
				<li class="brandon_t top-offset left_offset to-right">
					<a class="menu-topo" onclick="scrollSuave('servicos')">Serviços
					</a>
				</li>

				<li class="brandon_t top-offset left_offset to-right">
					<a class="menu-topo" onclick="scrollSuave('inicio')">
						Início
					</a>
				</li>
			</ul>

		</div>

		<div class="col m2 s2 hide-on-small-only">

			<a onclick="scrollSuave('inicio')" class="logo hide-on-small-only">
				<img class="responsive-image" id="logo" src="../assets/img/fox.png">
			</a>

		</div>

		<div class="col m5 s5 hide-on-small-only">
			<ul>
				<li class="brandon_t top-offset left_offset to-left">
					<a class="menu-topo" onclick="scrollSuave('footer')">
						Contato
					</a>
				</li>
				<li class="brandon_t top-offset left_offset to-left"><a class="menu-topo" href="#">Assinar</a></li>
			</ul>
		</div>
	</div>

	<!--Mobile-->
	<a href="#" class="hide-on-med-and-up center animated fadeIn">
		<img id="logo" src="../assets/img/fox.png">
	</a>

	<ul id="slide-out" class="side-nav">
		<li><a onclick="scrollSuave('#inicio')" class="txt_white menu_mobile tw_cent">Início</a></li>
		<li><a onclick="scrollSuave('#servicos')" class="txt_white menu_mobile tw_cent">Serviços</a></li>
	</ul>

	<a href="#" data-activates="slide-out" class="hide-on-med-and-up button-collapse"><i class="material-icons large">menu</i></a>
</nav>