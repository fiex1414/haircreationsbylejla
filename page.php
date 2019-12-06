<?php

/*Template Name: Prices*/

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();?>

<article>
    <v-container class="container page_start">
        <v-row id="price-row" row wrap class="mb-5">
            <v-col class="price-container" cols="12" sm="6" >
                <v-row class="mb-5">
                    <h3 class="treatment-type"> <?php the_field('dameklip/kurbehandling_overskrift'); ?></h3>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_1'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_1'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_2'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_2'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_3'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_3'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_4'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_4'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_5'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_5'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_6'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_6'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_7'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_7'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_8'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_8'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_9'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_9'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_10'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_10'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_11'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_11'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_12'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_12'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_13'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_13'); ?></p>
                    <p class="treatment"><?php the_field('dameklip/kurbehandling_behandling_14'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('dameklip/kurbehandling_pris_14'); ?></p>
                </v-row>
                <v-row class="mb-5">
                    <h3 class="treatment-type"> <?php the_field('balayage/babylights_overskrift'); ?></h3>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_1'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_1'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_2'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_2'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_3'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_3'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_4'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_4'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_5'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_5'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_6'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_6'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_7'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_7'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_8'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_8'); ?></p>
                    <p class="treatment"><?php the_field('balayage/babylights_behandling_9'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('balayage/babylights_pris_9'); ?></p>
                </v-row>
            </v-col>
            <v-col class="price-container" cols="12" sm="6" >
                <v-row class="mb-5">
                    <h3 class="treatment-type"> <?php the_field('farve/striber/lysning_overskrift'); ?></h3>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_1'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_1'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_2'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_2'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_3'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_3'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_4'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_4'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_5'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_5'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_6'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_6'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_7'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_7'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_8'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_8'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_9'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_9'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_10'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_10'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_11'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_11'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_12'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_12'); ?></p>
                    <p class="treatment"><?php the_field('farve/striber/lysning_behandling_13'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('farve/striber/lysning_pris_13'); ?></p>
                </v-row>
                <v-row class="mb-5">
                    <h3 class="treatment-type"> <?php the_field('herreklip/skæg_overskrift'); ?></h3>
                    <p class="treatment"><?php the_field('herreklip/skæg_behandling_1'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('herreklip/skæg_pris_1'); ?></p>
                    <p class="treatment"><?php the_field('herreklip/skæg_behandling_2'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('herreklip/skæg_pris_2'); ?></p>
                    <p class="treatment"><?php the_field('herreklip/skæg_behandling_3'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('herreklip/skæg_pris_3'); ?></p>
                    <p class="treatment"><?php the_field('herreklip/skæg_behandling_4'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('herreklip/skæg_pris_4'); ?></p>
                </v-row>
                <v-row class="mb-5">
                    <h3 class="treatment-type"> <?php the_field('børneklip_overskrift'); ?></h3>
                    <p class="treatment"><?php the_field('børneklip_behandling_1'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('børneklip_pris_1'); ?></p>
                    <p class="treatment"><?php the_field('børneklip_behandling_2'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('børneklip_pris_2'); ?></p>
                    <p class="treatment"><?php the_field('børneklip_behandling_3'); ?></p>
                    <p class="treatment-price text-end"><?php the_field('børneklip_pris_3'); ?></p>
                </v-row>
            </v-col>
        </v-row>
        <v-row class="obs_container">
            <v-col id="obs_text" cols="12">
                <p class="mt-5"><?php the_field('obs_text'); ?></p>
            </v-col>
            <v-col cols="12" sm="6"
            :class="{'text-end pr-5': $vuetify.breakpoint.smAndUp, 'text-center': $vuetify.breakpoint.xs}">
                <v-btn style="width:150px;" href="<?php the_field('button_link_1'); ?>" outlined depressed large tile color="black" class="mt-5"><?php the_field('button_1'); ?></v-btn>
            </v-col>
            <v-col cols="12" sm="6"
            :class="{'text-start pl-5': $vuetify.breakpoint.smAndUp, 'text-center': $vuetify.breakpoint.xs}">
                <v-btn style="width:150px;" href="<?php the_field('button_link_2'); ?>" outlined depressed large tile color="black" class="mt-5"><?php the_field('button_2'); ?></v-btn>
            </v-col>
        </v-row>
        <?php the_content(); ?>
    </v-container>
</article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?>