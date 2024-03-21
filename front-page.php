<?php get_header() ?>


    <div id="entete" class="global">
        <section class="entete__header">
                            <!-- facebook -->
            <h1 class="bgc-text"><?php echo get_bloginfo('name'); ?></h1>
            <h2 class="bgc-text"><?php echo get_bloginfo('description'); ?></h2>
            <h3 class="bgc-text"> TIM - College de Maisonneuve</h3>  
            <button class="buttonn_evenement">Evenements</button>  
        </section>

        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section class="accueil__section">
            <h2>Accueil</h2>
            <div class="section__cours"> 
            <?php
 
            ?>      
            <?php if (have_posts()):
                while(have_posts()): the_post();      
                //$strpos()  cest un string position
                ?>
                <div class="carte">
                    
                    <h5><?php the_title(); ?></h5>
                    <p><?php echo wp_trim_words(get_the_content(),30); ?></p>
                    <?php the_category(); ?> 
                    
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

            </div>
        </section>
    </div>
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie</h2>
            <blockquote>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae iure quos odit corporis rem autem adipisci eveniet voluptas magni rerum ducimus officiis ea, distinctio excepturi. Autem fugit quae sit quos.
            </blockquote>
            
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Évènement</h2> 
            <div class="div_evenement">
                <?php $categories= get_categories() ; 
                foreach( $categories as $category ) {?>
                    <div class="carte">
                        <h4><?= $category->name; ?></h4>
                        <p><?=wp_trim_words($category->description, 10, '...');?></p>
                        <p>Article: <?= $category->count; ?></p>
                        <a href="<?= get_category_link($category->term_id); ?>">Voir la categorie</a>
                    </div>
                <?php }; ?>

            </div>
        </section>
    <?php get_template_part("gabarit/vague"); ?>

    </div>
    <?php get_footer() ?>
    </div>
</body>
</html>