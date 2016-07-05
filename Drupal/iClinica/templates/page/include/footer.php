
			<footer> <!-- footer -->
						    <div class="container information-iclinica text-center">
								<p>2016 Imagen Clinica</p>
								<a href="#">Politicas de Privacidad</a>
							</div>
						    <div class="container mv-data">
								<div class="col-md-3 col-sm-4 col-xs-12">
									<span class="fa-stack fa-lg fa-pull-left">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
									</span>
									<?php print iClinica_load_data_node(3 , 0);?>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12">
									<i class="fa fa-whatsapp fa-2x fa-pull-left" aria-hidden="true"></i>
									<p><?php print iClinica_load_data_node(3 , 2);?></p>
								</div>
								<div class="col-md-3 col-sm-4 col-xs-12">
									<span class="fa-stack fa-lg fa-pull-left">
										  <i class="fa fa-circle fa-stack-2x"></i>
										  <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
									</span>
									<?php print iClinica_load_data_node(3 , 1);?>
								</div>
								<?php if (!empty($page['footer'])): ?> 
								<div class="col-md-3 col-sm-12">
									<?php print render($page['footer']); ?>
								</div>
								<?php endif; ?>
							</div>
						
			</footer>
			
			<div id="myModalSearch" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<i class="fa fa-times-circle-o fa-2x fa-pull-right" data-dismiss="modal" aria-hidden="true"></i>
						</div>
						<div class="modal-body">
							<div class="row search-input">
							<?php if (!empty($page['page_top_information'])): ?>
								<?php print render($page['page_top_information']); ?>
							<?php endif; ?>
							 </div>
			            </div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>