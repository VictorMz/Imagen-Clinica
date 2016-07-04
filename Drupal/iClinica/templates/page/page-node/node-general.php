<?php

/**
 
 */
?>
		<div class="container content-main"> 
			<h1 class="title" id="page-title"><?php print render($node->field_title_sectioin['und'][0]['value']); ?></h1>
            <?php   if ($is_admin){ 
						if ($tabs): ?>
							<div class="tabs"><?php print render($tabs); ?></div>
					<?php endif; 
					} ?>
					
			<?php if(count($node->body) > 0):?>
			<div class="main row">
				<?php print render($node->body['und'][0]['value']); ?>
			</div>
			<?php endif; ?>
			
			<?php if (!empty($page['study-result'])): ?> 
				<?php print render($page['study-result']); ?>
			<?php endif; ?>
			
			<?php if(count($node->field_tabs_section) > 0):?>
			<div class="body-txt row">
				<?php   foreach ($node->field_tabs_section['und'] as $i => $value): ?>
						<?php 
							print render($node->field_tabs_section['und'][$i]['safe_value']);					
							?>
				<?php   endforeach; ?>				
			</div>
			<?php endif; ?>
			
			<?php if (!empty($page['contact'])): 
			/* seccion unica para la seccion de contacto */
				include 'node-contact.php';
			endif;
			?> 
			
		</div>