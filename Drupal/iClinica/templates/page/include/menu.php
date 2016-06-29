<nav id="navbar-main" class="navbar navbar-default center" role="navigation"><!-- menu -->
							<div class="container">
							
								<div class="col-xs-10 col-sm-11">
									<div class="navbar-header row">
										<div class="col-xs-8 visible-xs data-mobile">
											<img src="http://placehold.it/100x60" class="img-responsive">
										</div>	
										<div class="col-xs-4">								
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-c">
												<span class="sr-only">Menu</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
									</div>

									<div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-c">
									<?php if (!empty($page['main_menu'])): ?>
										<?php print render($page['main_menu']); ?>
										
									<?php endif; ?>
									</div>
								</div>	
								
								<div class="col-xs-2 col-sm-1 search" data-toggle="modal" data-target="#myModalSearch"><!-- buscador -->
									<i class="fa fa-search fa-2x" aria-hidden="true"></i>
								</div>
								
							</div>
						</nav>