<?php 
/*
Template Name: Контакты
*/
get_header(); 
?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
          <?php
              $loop = CFS()->get('filials');
              foreach ($loop as $row) {
                ?>

                <div class="contacts-block">
                  <h2><?= $row['filials_title']; ?></h2>
                  <div class="contacts-inner">
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('contacts_write_img'); ?>" alt="пишите">
                      <h3><?= CFS()->get('contacts_write'); ?></h3>
                      <p><?= $row['filials_mail']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('contacts_call_img'); ?>" alt="звоните">
                      <h3><?= CFS()->get('contacts_call'); ?></h3>
                      <p><?= $row['filials_tel']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <img src="<?= CFS()->get('contacts_come_img'); ?>" alt="приезжайте">
                      <h3><?= CFS()->get('contacts_come'); ?></h3>
                      <p><?= $row['filials_address']; ?></p>
                    </div>
                  </div>
                  <?= $row['filials_map'] ?>
                <?php
              }
            ?>
        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()->get('dealers_title') ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
          <?php
              $loop = CFS()->get('dealers');
              foreach ($loop as $row) {
                ?>
                <li><p class="city"><?= $row['dealers_address'] ?></p></li>
                  
                <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>