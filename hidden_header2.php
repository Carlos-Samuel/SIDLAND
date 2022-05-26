<!-- Start Header -->
		<div class="hidden-header"></div>
        <header class="clearfix">
            
            <!-- Start Top Bar -->
			<div class="top-bar">
				<div class="container">
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
								if ($active=="admin") {
									echo '<a class="active" href="admin.php">Inicio</a>';
								}else{echo '<a href="admin.php">Inicio</a>';}  
								?>   
							</li>
							<li>
							<?php
								if ($active=="integra") {
									echo '<a class="active" href="modulo_integrantes.php">Ingresar integrantes</a>';
								}else{echo '<a href="modulo_integrantes.php">Ingresar integrantes</a>';}  
								?>   
							</li>
							<li>
							<?php
								if ($active=="ver_integra") {
									echo '<a class="active" href="ver_integrantes.php">Ver integrantes</a>';
								}else{echo '<a href="ver_integrantes.php">Ver integrantes</a>';}  
								?>   
							</li>							
							<li>
								<a href="logout.php">Logout</a>
							</li>
						</ul>
                        <!-- End Navigation List -->
					</div>
				</div>
			</div>
            <!-- End Header ( Logo & Naviagtion ) -->
		</header>
		<!-- End Header -->
