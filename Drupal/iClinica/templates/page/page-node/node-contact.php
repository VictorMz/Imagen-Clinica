<?php

/**
 
 */
?>
		<div class="row contact-us">
					<div class="col-sm-6 contact">
					    <div class="border-shadow">
							<h3>Contáctanos</h3>
							<div class="container-fluid back-wt">
								<div class="form-area"> 
									<p>Dudas, sugerencias o comentarios. Envíarlas aqui:</p>									
										<?php print render($page['contact']); ?>									
								</div>							
							</div>
						</div>
					</div>
					<div class="col-sm-6 map">
					    <div class="border-shadow">
							<h3>Visítanos</h3>
							<div class="container-fluid back-wt">
							    <div class="direction">
									<p>Nos ubicamos en </p><?php print iClinica_load_data_node(3 , 1);?>
								</div>
								<?php $coordenadas = iClinica_load_data_node(3 , 3);?>
								<iframe src="https://maps.google.com.mx/maps?f=q&hl=en&q=<?php print $coordenadas; ?>&iwloc=&ie=UTF8&t=m&z=15&output=embed" width="100%" frameborder="0"></iframe>
							</div>
						</div>
					</div>
			</div>