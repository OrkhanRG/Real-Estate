<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
	<div class="menu_section">
		<h3>              
			<?php 
			if ($user_cek['user_yetki']==5) {
				echo "Səlahiyyət: İcraçı";
			}
			?>
		</h3>
		<ul class="nav side-menu">

			<li><a href="index.php"><i class="fa fa-home"></i> Anasəhifə <span class="label label-success pull-right"></span></a></li>

			<li><a><i class="fa fa-cog"></i> Parametrlər <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="umumi-parametr.php">Ümumi Parametrlər</a></li>
					<li><a href="elaqe-parametr.php">Əlaqə Parametrlər</a></li>
					<li><a href="api-parametr.php">Api Parametrlər</a></li>
					<li><a href="sosial-parametr.php">Sosial Media Parametrlər</a></li>
					<li><a href="mail-parametr.php">Mail Parametrlər</a></li>
				</ul>
			</li>

			<li><a href="haqqimizda.php"><i class="fa fa-book"></i> Haqqımızda <span class="label label-success pull-right"></span></a></li>

			<li><a href="slider.php"><i class="fa fa-image"></i> Slider <span class="label label-success pull-right"></span></a></li>

			<li><a href="menu.php"><i class="fa fa-bars"></i> Menu <span class="label label-success pull-right"></span></a></li>

			<li><a href="mezmun.php"><i class="fa fa-file-text"></i> Məzmun <span class="label label-success pull-right"></span></a></li>

			<li><a href="emlak.php"><i class="fa fa-cube"></i> Əmlak <span class="label label-success pull-right"></span></a></li>


		</ul>
	</div>


</div>
            <!-- /sidebar menu -->