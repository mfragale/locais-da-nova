<?php


$args = array(
    'post_type' => 'locais',
    'order' => 'ASC',
    'posts_per_page' => -1
);

$loop = new WP_Query($args);

?>

<?php if ($loop->have_posts()) : ?>

    <div class="locais">
        <div class="container-fluid">
            <div class="row">



                <div class="col-12 col-md-4">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <!-- the loop -->
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            global $post; ?>

                            <a class="nav-link" id="<?php echo $post->post_name; ?>-tab" data-bs-toggle="pill" data-bs-target="#<?php echo $post->post_name; ?>" href="#<?php echo $post->post_name; ?>" role="tab" aria-controls="<?php echo $post->post_name; ?>" aria-selected="<?php if (!get_next_post_link()) {
                                                                                                                                                                                                                                                                                        echo 'true';
                                                                                                                                                                                                                                                                                    } ?>">
                                <div class="row align-items-center">
                                    <div class="col-3">
                                        <img class="img-fluid mx-auto d-block" src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                                    </div>
                                    <div class="col-7">
                                        <h1><?php the_title(); ?></h1>
                                        <?php if (get_the_excerpt()) {
                                            the_excerpt();
                                        } ?>
                                    </div>
                                    <div class="col-2 text-right"><i class="fal fa-angle-right"></i></div>
                                </div>
                            </a>

                        <?php endwhile; ?>
                        <!-- end of the loop -->

                    </div>
                </div>



                <div class="col-12 col-md-8 tab-wrap">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active text-center" id="noLocalSelected" role="tabpanel" aria-labelledby="noLocalSelected-tab">
                            <div class="row h-100">
                                <div class="col-sm-12 my-auto">
                                    <i class="fad fa-map-marked-alt"></i>
                                    <p><?php _e('Select a campus', 'locaisdanova'); ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- the loop -->
                        <?php while ($loop->have_posts()) : $loop->the_post();
                            global $post; ?>

                            <div class="tab-pane fade" id="<?php echo $post->post_name; ?>" role="tabpanel" aria-labelledby="<?php echo $post->post_name; ?>-tab">


                                <h1>
                                    <a class="btn btn-link closeLocal d-block d-md-none" id="noLocalSelected-tab" data-toggle="tab" href="#noLocalSelected" role="tab" aria-controls="noLocalSelected" aria-selected="true"><i class="fa fa-chevron-left"></i></a>
                                    <?php the_title(); ?>
                                </h1>

                                <div class="local-wrap">
                                    <?php the_content(); ?>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <!-- end of the loop -->

                    </div>
                </div>



            </div>
        </div>
    </div>


    <!-- pagination here -->

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>