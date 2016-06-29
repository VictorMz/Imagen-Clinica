<div class="col-md-4 col-sm-6 col-xs-6 text-center">
							<img src="<?php print $logo_200x140; ?>" class="img-responsive">
						</div>
						
						<?php if (!empty($site_slogan)): ?>
						<div class="col-md-4 col-sm-6 col-xs-6 slogan text-center">							
							<?php print $site_slogan; ?>
						</div>
						<?php endif; ?>
						
						<div class="col-md-3 col-md-offset-1 hidden-sm data">
							<div class="row phone-top">
								<div class="col-xs-2">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="col-xs-10">
									<?php print iClinica_load_data_node(3 , 0);?>
								</div>
							</div>
							<div class="row whats-top">
								<div class="col-xs-2">
									<i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
								</div>
								<div class="col-xs-10">
									<p><?php print iClinica_load_data_node(3 , 2);?></p>
								</div>
							</div>
							<div class="row location-top">
								<div class="col-xs-2">
									<span class="fa-stack fa-lg">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
									</span>
								</div>
								<div class="col-xs-10">
									<?php print iClinica_load_data_node(3 , 1);?>
								</div>
							</div>
						</div>
						
						<div class="col-sm-12 visible-sm mv-data">
							<div class="col-sm-4">
								<span class="fa-stack fa-lg fa-pull-left">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span>
								<?php print iClinica_load_data_node(3 , 0);?>
							</div>
							<div class="col-sm-4">	
								<i class="fa fa-whatsapp fa-2x fa-pull-left" aria-hidden="true"></i>
								<p><?php print iClinica_load_data_node(3 , 2);?></p>
							</div>
							<div class="col-sm-4">
								<span class="fa-stack fa-lg fa-pull-left">
									  <i class="fa fa-circle fa-stack-2x"></i>
									  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
								</span>
								<?php print iClinica_load_data_node(3 , 1);?>
							</div>
						</div>