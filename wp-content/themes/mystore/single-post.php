<?php get_header(); ?>
  <!-- Страница одной двери -->
  <div class="door-template">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="door-gallery">

            <?php
              $loop = CFS()->get('gallery');
              foreach ($loop as $row) {
                ?>
                <a href="<?= $row['gallery_photo']; ?>" data-caption="<?= $row['gallery_descr']; ?>">
                  <img src="<?= $row['gallery_photo']; ?>" alt="<?= $row['gallery_title']; ?>">
                </a>
                <?php
              }
            ?>
            

          </div>
        </div>
        <div class="col-6 col-lg-12 door-description">
          <h2><?= the_title(); ?> 
          <span>
            <?php
            if(CFS()->get('doors_stock')) {
              echo CFS()->get('doors_stock_true');
            } else {
              echo CFS()->get('doors_stock_false');
            }
            ?>
          </span></h2>
          <!-- <h2>Название <span>Под заказ</span></h2> -->
          <?php the_content(); ?>
          <h3><?= CFS()->get('doors_price'); ?> &#8381;</h3>
          <?= do_shortcode( CFS()->get('doors_shortcode') ); ?>
          <table>
            <caption><?= CFS()->get('features_title') ?></caption>
            
              <?php
                $loop = CFS()->get('features');
                foreach ($loop as $row) {
                  ?>
                  <tr>
                    <td><?= $row['features_key'] ?></td>
                    <td><?= $row['features_value'] ?></td>
                  </tr>
                  <?php
                }
              ?>
            
          </table>
          <a class="btn" href="/<?= CFS()->get('info_slug') ?>"><?= CFS()->get('info_title') ?></a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>