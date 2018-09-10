<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li>

				<a href="autoinstitucional">

					<i class="fa fa-th"></i>
					<span>AutoInstitucional</span>

				</a>

			</li>

			<li>

				<a href="autoprograma">

					<i class="fa fa-product-hunt"></i>
					<span>AutoPrograma</span>

				</a>

			</li>
			<li>

				<a href="reporte1">

					<i class="fa fa-bars"></i>
					<span>Reportes</span>

				</a>

			</li>
			';

		}

		?>

 		<li>
          <a href="programas">
            <i class="fa fa-th"></i> <span>Asignar Programas</span>
          </a>
        </li>

		</ul>

	 </section>

</aside>