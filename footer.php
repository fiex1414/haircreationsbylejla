        <footer class="site-footer mt-5">
          <v-img id="footer_bg_img" src="<?php the_field('footer_background_image'); ?>" alt="Frisørsalon Esbjerg">
            <v-row class="fill-height footer-cols">
              <v-col id="footer_logo_padding" cols="12" sm="4" offset-sm="2" md="4" offset-md="0">
                <a href="<?php echo home_url(); ?>">
                  <v-row  class="fill-height" align="center" class="px-5">
                    <v-img src="<?php the_field('footer_logo'); ?>" height="80" contain/>
                  </v-row>
                </a>
              </v-col>
              <v-col id="footer_info_container_col" cols="12" sm="4" offset-sm="1" md="3" offset-md="0">
                <v-row class="footer_info_container_row fill-height" align="center">
                  <v-col class="footer_info_container py-0" cols="12">
                    <v-img src="<?php the_field('footer_adresse_ikon'); ?>" width="20" contain></v-img>
                    <div class="footer_info_text footer-fontsize"><?php the_field('footer_adresse'); ?></div>
                  </v-col>
                  <v-col class="footer_info_container py-0" cols="12">
                    <v-img src="<?php the_field('footer_phone_ikon'); ?>" width="20" contain></v-img>
                    <div class="footer_info_text footer-fontsize"><?php the_field('footer_phone'); ?></div>
                  </v-col>
                  <v-col class="footer_info_container py-0" cols="12">
                    <v-img src="<?php the_field('footer_email_ikon'); ?>" width="20" contain></v-img>
                    <div class="footer_info_text footer-fontsize"><?php the_field('footer_email'); ?></div>
                  </v-col>
                </v-row>
              </v-col>
              <v-col id="footer-openinghours_container_col" cols="12" sm="4" offset-sm="2" md="3" offset-md="0">
                <v-row class="fill-height footer_openinghours_container" align="center">
                  <v-col id="footer_openinghours_col1" cols="4">
                    <p class="weekday footer-fontsize mb-0">mandag</p>
                    <p class="weekday footer-fontsize mb-0">tirsdag</p>
                    <p class="weekday footer-fontsize mb-0">onsdag</p>
                    <p class="weekday footer-fontsize mb-0">torsdag</p>
                    <p class="weekday footer-fontsize mb-0">fredag</p>
                    <p class="weekday footer-fontsize mb-0">lørdag</p>
                    <p class="weekday footer-fontsize mb-0">søndag</p>
                  </v-col>
                  <v-col id="footer_openinghours_col2" cols="8">
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_monday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_tuesday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_wednesday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_thursday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_friday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_saturday');?></p>
                    <p class="openingshours footerhours footer-fontsize text-end mb-0"><?php the_field('footer_opening_hours_sunday');?></p>
                  </v-col>
                </v-row>
              </v-col>
              <v-col cols="12" sm="4" offset-sm="1" md="2" offset-md="0" class=" pt-5 " 
              :class="{'text-center': $vuetify.breakpoint.xs, 'px-5': $vuetify.breakpoint.mdAndUp, 'px-0': $vuetify.breakpoint.sm}">
                <h3 >FØLG OS</h3>
                <div class="footer_some_container pt-5" >
                  <a href="<?php the_field('footer_some_icon_link_1'); ?>">
                    <v-img class="mr-3" src="<?php the_field('footer_some_icon_1'); ?>" width="45" contain></v-img>
                  </a>
                  <a href="<?php the_field('footer_some_icon_link_2'); ?>">
                    <v-img class="mr-3" src="<?php the_field('footer_some_icon_2'); ?>" width="45" contain></v-img>
                  </a>
                </div>
              </v-col>
            </v-row>
          </v-img>
          <p class="copyrights text-center my-1">&copy; <?php echo date('Y');?> - <?php bloginfo('name');?></p>
        </footer>
      </v-content>
    </v-app>
  </div>
  <?php wp_footer(); ?>


  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133359319-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-133359319-5');
  </script>

</body>
</html>