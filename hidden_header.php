<!-- Start Header -->
		<div class="hidden-header"></div>
        <header class="clearfix">
            
            <!-- Start Top Bar -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
                            
						</div>
						<div class="col-md-6">
                            <!-- Start Social Links -->
                            <!-- Start Contact Info -->
							<ul class="contact-details">
                                <li><a href="#" style="color:#6e6e6e";><i class="icon-phone-2"></i>  6616800 ext 124, 135</a></li>

                                <li><a href="#" style="color:#6e6e6e"><i class="icon-mail-2"></i> cyseth@unillanos.edu.co</a></li>
                            
                            <!-- End Contact Info -->
							
								<li>
									<a style="color:#6e6e6e"; class="facebook sh-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/cyseth.gitecx/" target="_blank"><i class="icon-facebook-2"></i></a>
								</li>
							</ul>
                            <!-- End Social Links -->
						</div>
					</div>
				</div>
			</div>
            <!-- End Top Bar -->
			<!-- Start Header ( Logo & Naviagtion ) -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="icon-menu-1"></i>
						</button>
                        <!-- End Toggle Nav Link For Mobiles -->
						<a   href=""><img alt="" src="images/cyseth_banner.jpeg" width="180px"></a>
					</div>
					<div class="navbar-collapse collapse">
                        
                        <!-- Start Navigation List -->
						<ul class="nav navbar-nav navbar-left">
							<li>
								<br>
							</li>
							<li>
								<br>
							</li>
							<li>
								<br>
							</li>
							<li>
								<br>
							</li>
							<li>
							<?php
								if ($active=="inicio") {
									echo '<a class="active" href="index.php">Inicio</a>';
								}else{echo '<a href="index.php">Inicio</a>';}  
								?>
                                
							</li>
							<li>
								<?php
									if ($active=="acerca") {
										echo '<a class="active" href="about.php">Acerca</a>';
									}else{echo '<a href="about.php">Acerca</a>';}  
									?>
							</li>
							<li class="drop">
								<?php
									if ($active=="productividad"||$active=="ponencias"||$active=="revistas_publicadas"||$active=="software"||$active=="eventos_realizados") {
										echo '<a class="active" href="#">Productividad</a>';
									}else{echo '<a class="deactivate" href="#">Productividad</a>';}  
								?>
								<ul class="dropdown">
									<li>
										<?php
											if ($active=="ponencias") {
												echo '<a class="active" href="ponencias.php">Ponencias</a>';
											}else{echo '<a href="ponencias.php">Ponencias</a>';}  
										?>
									</li>
									<li>
										<?php
											if ($active=="revistas_publicadas") {
												echo '<a class="active" href="revistas_publicadas.php">Revistas</a>';
											}else{echo '<a href="revistas_publicadas.php">Revistas</a>';}  
										?>
									</li>
									<li>
										<?php
											if ($active=="software") {
												echo '<a class="active" href="software.php">Software</a>';
											}else{echo '<a href="software.php">Software</a>';}  
										?>
									</li>
									<li>
										<?php
											if ($active=="eventos_realizados") {
												echo '<a class="active" href="ponencias.php">Eventos</a>';
											}else{echo '<a href="eventos_realizados.php">Eventos</a>';}  
										?>
									</li>
								</ul>
							</li>
							<li>
								<?php
									if ($active=="proyectos") {
										echo '<a class="active" href="proyectos.php">Proyectos</a>';
									}else{echo '<a href="proyectos.php">Proyectos</a>';}  
									?>
							</li>
							<li>
								<?php
									if ($active=="integrantes") {
										echo '<a class="active" href="integrantes.php">Integrantes</a>';
									}else{echo '<a href="integrantes.php">Integrantes</a>';}  
									?>
							</li>

							<li class="drop">
								<?php
									if ($active=="Actividades"||$active=="talleres"||$active=="conferencias"||$active=="convocatorias"||$active=="seminarios") {
										echo '<a class="active" href="#">Actividades</a>';
									}else{echo '<a class="deactivate" href="#">Actividades</a>';}  
								?>
								<ul class="dropdown">
									<li>
										<?php
											if ($active=="talleres") {
												echo '<a class="active" href="talleres.php">Talleres</a>';
											}else{echo '<a href="talleres.php">Talleres</a>';}  
										?>
									</li>
									<li>
										<?php
											if ($active=="conferencias") {
												echo '<a class="active" href="conferencias.php">Conferencias</a>';
											}else{echo '<a href="conferencias.php">Conferencias</a>';}  
										?>
									</li>
									<li>
										<?php
											if ($active=="convocatorias") {
												echo '<a class="active" href="convocatorias.php">Convocatorias</a>';
											}else{echo '<a href="convocatorias.php">Convocatorias</a>';}  
										?>
									</li>
								</ul>
							</li>
							<li>
								<?php
									if ($active=="multimedia") {
										echo '<a class="active" href="multimedia.php">Multimedia</a>';
									}else{echo '<a href="multimedia.php">Multimedia</a>';}  
									?>
							</li>
							<li>
								<?php
									if ($active=="contact") {
										echo '<a class="active" href="about.php">Contactanos</a>';
									}else{echo '<a href="contact.php">Contactanos</a>';}  
									?>
							</li>
							
						</ul>
                        <!-- End Navigation List -->
					</div>
				</div>
			</div>
            <!-- End Header ( Logo & Naviagtion ) -->
		</header>
		<!-- End Header -->
