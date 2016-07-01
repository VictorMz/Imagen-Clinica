<?php

/**
 
 */
?>
 <div class="container content-main-study content-main"> <!-- contenido principal -->
				<h1 class="title" id="page-title"><?php print render($node->field_title_sectioin['und'][0]['value']); ?></h1>
				<?php if ($is_admin): 
				if ($tabs): ?> 
				   <div class="tabs"><?php print render($tabs); ?></div> 
				<?php endif; 
				endif; ?>
				
				<div class="col-sm-3 content-user">
				    <?php 
					if ($logged_in):
						print '<div>Bienvenido: <b>'.render($user->name).'</b></div>';
						print '<p>'.render($user->mail).'</p>';	
                        print '<a href="/user/logout">Cerrar sesion</a>';						
					endif; ?>					
					
					<?php print render($page['login']); ?>
				</div>
				
				<div class="col-sm-9 content-result text-center">
				    <?php 
					if (!$logged_in): ?>
				    <div class="row content-process">
						<?php print render($node->body['und'][0]['value']); ?>
					</div>
					<?php endif; ?>
					<?php 
					if ($logged_in): ?>
					<h3>Estudios disponibles</h3>
						<?php print render($page['study-result']); ?>					
					<?php endif; ?>
				</div>
			
			</div>