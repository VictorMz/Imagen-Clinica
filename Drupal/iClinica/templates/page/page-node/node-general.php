<?php

/**
 
 */
?>
		<div class="container content-main"> <!-- contenido principal -->
			<h1 class="title" id="page-title"><?php print render($node->field_title_sectioin['und'][0]['value']); ?></h1>
            <?php   if ($is_admin){ 
						if ($tabs): ?>
							<div class="tabs"><?php print render($tabs); ?></div>
					<?php endif; 
					} ?>
			<div class="main row">
				<?php print render($node->body['und'][0]['value']); ?>
			</div>
			
			
			<?php if(count($node->field_tabs_section) > 0):?>
			<div class="body-txt row">
				<div class="list-card">
				<?php   foreach ($node->field_tabs_section['und'] as $i => $value): ?>
						<?php 
							print render($node->field_tabs_section['und'][$i]['safe_value']);					
							?>
				<?php   endforeach; ?>	
				</div>			
			</div>
			<?php endif; ?>
			
			<?php 
			if(count($page['content']['views_study_type-block']) > 0):
				print render($page['content']); 
			endif; 
			?>
			
		</div>