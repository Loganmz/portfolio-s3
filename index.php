<?php get_header(); ?>

<section class="hero-section">
    <div class="hero-content">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Sparky.webp" alt="Mascotte étoile" />
        <div class="text-content">
            <h1>Graphiste - Branding</h1>
            <h2>Find your light</h2>
            <p class="name">Logan Martinez</p>
        </div>
    </div>
</section>


<section class="projects-section" id="projets">
    <h2>Mes Projets</h2>
    <div class="projects-container">
        <?php
        $args = array(
            'post_type' => 'projets',
            'posts_per_page' => -1,
        );

        $project_query = new WP_Query($args);

        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) : $project_query->the_post();
                $fond_projet = get_field('fond-projet');  // Image de fond
                $categorie = get_field('categorie');     // Catégorie
                $titre = get_field('titre');             // Titre
                $description = get_field('description'); // Description
        ?>
                <div class="project-card">
                <a href="<?php the_permalink(); ?>">
                    <div class="project-image" style="background-image: url('<?php echo esc_url($fond_projet['url']); ?>');"></div>
                    <div class="project-info">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo esc_html($description); ?></p>
                        <div class="tags">
                            <?php
                            $categories = explode(',', $categorie);
                            foreach ($categories as $cat) :
                            ?>
                                <span class="tag"><?php echo esc_html(trim($cat)); ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    </a>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>Aucun projet à afficher.</p>';
        endif;

        wp_reset_postdata();
        ?>
    </div>
</section>

<section class="software-logos">
    <div class="logos-container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/adobe_photoshop.svg" alt="photoshop">
    <img src="<?php echo get_template_directory_uri(); ?>/img/adobe_illustrator.svg" alt="photoshop">
    <img src="<?php echo get_template_directory_uri(); ?>/img/adobe_premiere.svg" alt="photoshop">
    <img src="<?php echo get_template_directory_uri(); ?>/img/adobe_dimension.svg" alt="photoshop">
    <img src="<?php echo get_template_directory_uri(); ?>/img/adobe_after_effects.svg" alt="photoshop">
    </div>
</section>

<section class="services-section" id="services">
    <div class="service-card">
        <h2 class="section-title">Mes Services</h2>
        <div class="services-grid">
            <div class="service-item">
                <h3 class="service-title">Forfait de base (Logo uniquement)</h3>
                <p class="service-description">
                    Création d'un logo unique avec 2 à 3 propositions et 2 révisions incluses.
                </p>
            </div>
            <div class="service-item">
                <h3 class="service-title">Pack complet d’identité visuelle</h3>
                <p class="service-description">
                    Comprend la création d'un logo, une charte graphique, des palettes de couleurs, typographies, et modèles de supports de communication.
                </p>
            </div>
            <div class="service-item">
                <h3 class="service-title">Affiche simple</h3>
                <p class="service-description">
                    Conception d'une affiche personnalisée pour un événement ou une campagne, incluant une révision.
                </p>
            </div>
            <div class="service-item">
                <h3 class="service-title">Affiche premium</h3>
                <p class="service-description">
                    Conception d'une affiche personnalisée, incluant des éléments graphiques sur mesure, avec jusqu'à 3 révisions.
                </p>
            </div>
        </div>
    </div>
</section>



<section id="a-propos" class="mon-histoire-section">
  <div class="container">
    <h2 class="section-title">Mon Histoire</h2>
    <div class="mon-histoire-content">
      <div class="mascotte">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Sparky-2.webp" alt="Mascotte étoile" />
      </div>
      <div class="histoire-texte">
        <p><strong>Un produit sans histoire est une marchandise, un produit avec une histoire est une Marque !</strong></p>
        <p>Donc, quelle est mon histoire ?</p>
        <p>
          J'ai toujours eu cette capacité à me mettre à la place des autres, à ressentir leurs émotions 
          comme si elles étaient les miennes. C'est comme si j'étais une éponge qui absorbait les énergies 
          et les histoires des gens.
        </p>
        <p>
          Ma mission est de donner à chacun les clés pour se découvrir et pour transformer cette 
          découverte en une force créatrice. Je veux que les gens comprennent que leur identité est une 
          richesse inestimable, et qu’il est possible de la mettre au service de leurs projets.
        </p>
        <p>
          Mon produit va bien au-delà d'un simple logo ou d'une charte graphique. Il permet à mes clients 
          d’explorer les profondeurs de leur identité de marque, de raconter leur histoire de manière 
          authentique et de créer une image visuelle qui les représente véritablement. Parce que je crois 
          qu’une marque n’est pas qu’un produit, c’est une histoire qui doit résonner en chacun de nous.
        </p>
        <p>
          Le passage du freelance à la création de ma propre identité de marque a été un véritable saut dans le vide. 
          La peur de l'inconnu et de l'échec m'a longtemps paralysé. Mais en me lançant sur YouTube, j'ai compris que 
          partager ma passion était le meilleur moyen de surmonter mes doutes. Aujourd’hui, je suis fier d’avoir franchi 
          ce cap et de pouvoir aider d'autres créatifs à réaliser leurs projets.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="software-logos">
    <div class="logos-container">

    <a href="https://www.instagram.com/im_logan__/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram"> </a>
    <a href="https://www.linkedin.com/in/logan-martinez-ab7616256/"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt="linkedin"> </a>
    <a href="https://www.behance.net/loganmartinez2"><img src="<?php echo get_template_directory_uri(); ?>/img/behance.svg" alt="behance"> </a>
    <a href="https://www.youtube.com/@im_logan"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt="youtube"> </a>
    </div>
</section>



<section id="contact" class="contact-section">
  <div class="container">
    <h2 class="section-title">CONTACTEZ MOI</h2>
    <div class="contact-content">
      <div class="mascotte">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Sparky-1.webp" alt="Mascotte étoile" />
      </div>
      <div class="formulaire">
        <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
          <input type="hidden" name="action" value="submit_contact_form"> <!-- Action WordPress -->
          
          <label for="nom">Nom / Prénom</label>
          <input type="text" id="nom" name="nom" placeholder="Ton nom ici" required>

          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Ton email ici" required>

          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Ton message ici" rows="5" required></textarea>

          <button type="submit" class="submit-btn">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
