<?php

/*Template Name: Frontpage*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

<article>
    <v-container class="container">
        <v-img id="header-padding" src="<?php the_field('about_text_image'); ?>" height="30vh" contain>
            <v-row row wrap class="fill-height" align="end">
                <v-col cols="12" class="text-center header-padding-bottom" >
                    <span class="above_about_text"><?php the_field('above_about_text');?></span>
                    <span class="above_about_text px-5">•</span>
                    <span class="above_about_text"><?php the_field('above_about_text_2');?></span>
                    <h1><?php the_field('about_text'); ?></h1>
                </v-col>
            </v-row>
        </v-img>
        <v-row id="about-container" row wrap>
            <v-col id="about-text" cols="12" sm="6">
                <?php the_field('about_full_text'); ?>
            </v-col>
            <v-col id="about-image-container" cols="12" sm="6">
                <v-img id="about-image"  lazy-src="<?php the_field('about_image'); ?>" src="<?php the_field('about_image'); ?>"> 
                    <template v-slot:placeholder>
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                        </v-row>
                    </template>
                </v-img>
            </v-col>
            <v-col cols="12" class="text-center">
                <v-btn outlined depressed large tile color="black" href="<?php the_field('about_button_link'); ?>" class="mt-5"><?php the_field('about_button_text'); ?></v-btn>
            </v-col>
        </v-row>
    </v-container>
    <div>
        <v-img id="bg_img_video" src="<?php the_field('promotion_video_background')?>" class="mt-3">
            <v-container id="video_container">
                <div class="embed-container">
                    <?php the_field('promotion_video'); ?> 
                </div>
            </v-container>
        </v-img>
    </div>
    <v-container>
        <v-img id="header-padding" src="<?php the_field('instagram_text_image'); ?>" height="30vh" contain>
            <v-row row wrap class="fill-height" align="end">
                <v-col cols="12" class="text-center header-padding-bottom" >
                    <span class="above_about_text"><?php the_field('above_about_text');?></span>
                    <span class="above_about_text px-5">•</span>
                    <span class="above_about_text"><?php the_field('above_about_text_2');?></span>
                    <h1><?php the_field('instagram_text'); ?></h1>
                </v-col>
            </v-row>
        </v-img>
        <div id="instagram-container">
            <?php the_content(); ?>
        </div>
    </v-container>
</article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>