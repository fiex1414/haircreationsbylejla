<?php

/*Template Name: Info Subpage*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

<article style="margin-top:10px;">
    <v-container style="min-height:95vh;">
        <v-row>
            <v-col cols="12" md="6">
                <v-img id="header-padding" src="<?php the_field('text_image'); ?>" height="30vh" contain>
                    <v-row row wrap class="fill-height" align="end">
                        <v-col cols="12" class="text-center header-padding-bottom" >
                            <span class="above_about_text"><?php the_field('above_text');?></span>
                            <span class="above_about_text px-5">•</span>
                            <span class="above_about_text"><?php the_field('above_text_2');?></span>
                            <h1><?php the_field('text'); ?></h1>
                        </v-col>
                    </v-row>
                </v-img>
                <div class="info-box py-5">
                    <?php if (is_page(26)){?> 
                        <v-row row wrap>
                            <v-col cols="6">
                                <p class="weekday">mandag</p>
                                <p class="weekday">tirsdag</p>
                                <p class="weekday">onsdag</p>
                                <p class="weekday">torsdag</p>
                                <p class="weekday">fredag</p>
                                <p class="weekday">lørdag</p>
                                <p class="weekday">søndag</p>
                            </v-col>
                            <v-col cols="6">
                                <p class="openingshours text-end"><?php the_field('mandag');?></p>
                                <p class="openingshours text-end"><?php the_field('tirsdag');?></p>
                                <p class="openingshours text-end"><?php the_field('onsdag');?></p>
                                <p class="openingshours text-end"><?php the_field('torsdag');?></p>
                                <p class="openingshours text-end"><?php the_field('fredag');?></p>
                                <p class="openingshours text-end"><?php the_field('lordag');?></p>
                                <p class="openingshours text-end"><?php the_field('sondag');?></p>
                            </v-col>
                        </v-row>
                    <?php }?>
                    <?php the_content(); ?>
                </div>
            </v-col>
            <v-col md="6" class="hidden-sm-and-down">
                <v-row class="fill-height" align="center">
                    <v-img id="info-icon" src="<?php the_field('info_icon'); ?>" contain>
                </v-row>
            </v-col>
        </v-row>
    </v-container>
</article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>