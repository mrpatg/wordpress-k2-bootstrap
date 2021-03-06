<?php
get_header();
k2b4_main_before();
?>

<main id="main" class="container mt-5">
  <div class="row">

    <div class="col-12 col-md-9">
      <div id="content" role="main">

        <?php get_template_part('loops/index-loop'); ?>

      </div><!-- /#content -->
    </div>

    <?php get_sidebar(); ?>

  </div><!-- /.row -->
</main><!-- /.container -->

<?php
k2b4_main_after();
get_footer();
?>