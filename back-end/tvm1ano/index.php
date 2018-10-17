			<?php get_header(); ?>
            <!-- CONTEUDO -->
   			<div id="Conteudo">
			<?php
				if (have_posts()) {
				
				while ( have_posts() ) { 
				the_post();
			?>
				<?php the_content('Leia mais...'); ?>
			<?php 
				}
			} 
			else {
				echo "<p>404 - Página não encontrada.</p>";
			}
			?>
			
            </div>
            <!-- FIM DE CONTEUDO -->
            <hr/>
            <?php get_footer(); ?>