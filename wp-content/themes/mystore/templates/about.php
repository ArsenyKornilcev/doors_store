<?php 
/*
Template Name: О нас
*/
get_header(); 
?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS()->get('bg_2') ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img') ?>" alt="О компании">
          <h2><?php the_title(); ?></h2>
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Преимущества  -->
	<div class="advantages" style="background-image: url(<?= CFS()->get('bg_1') ?>)">
		<div class="container">
			<h2><?= get_category( 6, ARRAY_A )['name'] ?></h2>
		</div>
	</div>
	<div class="advantages-cards" style="background-image: url(<?= CFS()->get('bg_2') ?>)">
		<div class="container">
			<div class="row advantages-cards-inner">
				<?php get_header('advantages'); ?>	
			</div>
		</div>
	</div>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('about_bg') ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS()->get('about_title') ?></h2>
          <p><?= CFS()->get('about_descr') ?></p>
          <a href="<?= CFS()->get('about_pdf') ?>" class="btn" target="_blank">
            <?= CFS()->get('about_open_btn') ?>
          </a>
          <a href="<?= CFS()->get('about_doc') ?>" class="btn" download="">
            <?= CFS()->get('about_download_btn') ?>
        </a>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>