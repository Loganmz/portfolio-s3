<?php get_header(); ?>

<div class="single-project">
    <div class="container">
        <div class="project-header">
            <!-- Image de couverture -->
            <?php 
                $fond_projet = get_field('fond-projet'); // Image de fond
                if ($fond_projet) : ?>
                    <div class="project-single-image" style="background-image: url('<?php echo esc_url($fond_projet['url']); ?>');"></div>
            <?php endif; ?>

            <div class="project-details">
                <h1 class="project-title"><?php the_title(); ?></h1>
                
                <div class="project-categories">
                    <?php 
                        $categorie = get_field('categorie');
                        $categories = explode(',', $categorie);
                        foreach ($categories as $cat) :
                    ?>
                        <span class="cate"><?php echo esc_html(trim($cat)); ?></span>
                    <?php endforeach; ?>
                </div>
                <h2 class="project-subtitle"><?php the_field('titre'); ?></h2>
                <p class="project-description"><?php the_field('description'); ?></p>
                <p class="project-description"><?php the_field('description2'); ?></p>
            </div>
        </div>

        <!-- Affichage des images ajoutées via les sous-champs ACF -->
        <div class="project-gallery">
        <?php 
                    // Récupérer et afficher les images, si elles existent
                    for ($i = 1; $i <= 5; $i++) { // Par exemple, pour 5 images
                        $image = get_field('image' . $i); // Utilise ACF pour récupérer le champ 'image-1', 'image-2', etc.
                        if ($image) {
                            // Vérifie si l'image existe
                            echo '<div class="project-image">';
                            echo '<img src="' . esc_url($image['url']) . '" alt="Image ' . $i . '">';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
        </div>

    </div>


</div>

<?php get_footer(); ?>
