<?php

/*Template Name: Products*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

<article>
    <v-container class="container">
       <v-row id="products_container">
           <v-col class="product-padding" cols="12" sm="6" md="4">
                <div class="product_name">
                    <?php the_field('product_name_1');?>
                </div>
                <v-img src="<?php the_field('product_image_1'); ?>" lazy-src="<?php the_field('product_image_1'); ?>" height="300">
                    <template v-slot:placeholder>
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                        </v-row>
                    </template>
                </v-img>
                <h5 class="product_description_header">Produktbeskrivelse</h5>
                <div class="product_description">
                    <?php the_field('product_description_1'); ?>
                </div>
           </v-col>
           <v-col class="product-padding" cols="12" sm="6" md="4">
                <div class="product_name">
                    <?php the_field('product_name_2');?>
                </div>
                <v-img src="<?php the_field('product_image_2'); ?>" lazy-src="<?php the_field('product_image_2'); ?>" height="300"> 
                    <template v-slot:placeholder>
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                        </v-row>
                    </template>
                </v-img>
                <h5 class="product_description_header">Produktbeskrivelse</h5>
                <div class="product_description">
                    <?php the_field('product_description_2'); ?>
                </div>
            </v-col>
            <v-col class="product-padding" cols="12" sm="6" md="4">
                <div class="product_name">
                    <?php the_field('product_name_3');?>
                </div>
                <v-img src="<?php the_field('product_image_3'); ?>" lazy-src="<?php the_field('product_image_3'); ?>" height="300">
                    <template v-slot:placeholder>
                        <v-row class="fill-height ma-0" align="center" justify="center">
                            <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                        </v-row>
                    </template>
                </v-img>
                <h5 class="product_description_header">Produktbeskrivelse</h5>
                <div class="product_description">
                    <?php the_field('product_description_3'); ?>
                </div>
            </v-col>
            <v-row class="obs_container">
                <v-col id="obs_text" cols="12">
                    <p class="mt-5">
                        <?php the_field('obs_text'); ?>
                    </p>
                </v-col>
            </v-row>
       </v-row>
       <v-row id="questions_container">
            <v-col cols="12" md="6">
                <v-img id="header-padding" src="<?php the_field('text_image_2'); ?>" height="30vh" contain>
                    <v-row row wrap class="fill-height" align="end">
                        <v-col cols="12" class="text-center" >
                            <span class="above_about_text"><?php the_field('above_text_3');?></span>
                            <span class="above_about_text px-5">•</span>
                            <span class="above_about_text"><?php the_field('above_text_4');?></span>
                            <h1><?php the_field('text_2'); ?></h1>
                        </v-col>
                    </v-row>
                </v-img>
                <div class="font_size_15"
                :class="{'obs_container': $vuetify.breakpoint.smAndDown}">
                    <?php the_field('questions_text');?>
                </div>
                <v-col class="text-center">
                    <v-btn outlined depressed large tile color="black" href="<?php the_field('questions_button_link'); ?>" class="mt-5"><?php the_field('questions_button'); ?></v-btn>
                </v-col>   
            </v-col>
            <v-col md="6" class="hidden-sm-and-down">
                <v-row class="fill-height" align="center">
                    <v-img id="info-icon" src="<?php the_field('info_icon'); ?>" contain>
                </v-row>
            </v-col>
        </v-row>
    </v-container>
    <?php the_content(); ?>
</article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>