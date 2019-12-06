<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="app">
        <v-app>
            <v-content>
                <v-app-bar id="big-screen-appbar" class="hidden-xs-only" flat fixed <?php if (is_page(array(5, 20, 18))){?> inverted-scroll <?php }?> <?php if (is_page(5)){?>scroll-threshold="550" <?php }?> <?php if (is_page(array(20, 18))){?>scroll-threshold="250" <?php }?>>
                    <v-img style="padding:0;" src="<?php header_image(); ?>"s height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" >
                        <v-row id="header-margin" row wrap class="mr-4">
                            <div id="brand-logo">
                                <?php
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                ?>
                            </div>
                            <v-spacer></v-spacer>
                            <?php 
                                $args = array(
                                'theme_location' => 'primary'
                                )?>
                            <?php wp_nav_menu($args); ?>
                        </v-row>
                    </v-img>
                </v-app-bar>
                <v-app-bar id="big-screen-appbar" class="hidden-sm-and-up" flat fixed <?php if (is_page(array(5, 20, 18))){?> inverted-scroll <?php }?> <?php if (is_page(5)){?>scroll-threshold="550" <?php }?> <?php if (is_page(array(20, 18))){?>scroll-threshold="250" <?php }?>>
                    <v-img style="padding:0;" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" >
                        <v-row row wrap>
                            <div id="brand-logo">
                                <?php
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                ?>
                            </div>
                            <v-spacer></v-spacer>
                            <v-app-bar-nav-icon class="mt-3 mr-4" color="white" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                        </v-row>
                    </v-img>
                </v-app-bar>
                <?php if (is_page(array(5, 20, 18))){?>                
                    <v-img src="<?php the_field('header_image_top'); ?>" <?php if (is_page(5)){?> height="100vh"<?php }?> <?php if (is_page(array(20, 18))){?> height="50vh"<?php }?>>
                        <v-app-bar flat style="background-color:unset;" class="hidden-sm-and-up">
                            <v-spacer></v-spacer>
                            <v-app-bar-nav-icon class="mr-1" color="white" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                        </v-app-bar>
                        <v-row row wrap justify="end" class="hidden-xs-only mr-4" >
                            <?php 
                                $args = array(
                                'theme_location' => 'primary'
                                )
                            ?>
                            <?php wp_nav_menu($args); ?>
                        </v-row>
                        <?php if (is_page(5)){?> 
                            <v-row row wrap align="center" class="fill-height">
                                <v-col cols="12" justify="center">
                                    <v-row justify="center" style="margin-bottom:140px;">
                                        <v-col id="logo-container" cols="12">
                                            <v-img src="<?php the_field('logo'); ?>" height="100px" contain></v-img>
                                        </v-col>
                                        <v-col cols="12" align="center">
                                            <v-btn href="https://haircreationsbylejla.onlinebooq.dk/" outlined depressed large tile color="white" class="mt-5">BOOK TID I DAG</v-btn>
                                        </v-col>
                                    </v-row>
                                </v-col>
                            </v-row>
                        <?php }?>
                        <?php if (is_page(array(20, 18))){?> 
                            <v-img id="header-padding" src="<?php the_field('text_image'); ?>" height="30vh" contain>
                                <v-row row wrap class="fill-height" align="end">
                                    <v-col cols="12" class="text-center" >
                                        <span class="above_about_text light"><?php the_field('above_text');?></span>
                                        <span class="above_about_text light px-5">•</span>
                                        <span class="above_about_text light"><?php the_field('above_text_2');?></span>
                                        <h1 class="light"><?php the_field('text'); ?></h1>
                                    </v-col>
                                </v-row>
                            </v-img>
                        <?php }?>
                    </v-img>
                <?php }?>

                <v-navigation-drawer id="nav-drawer" v-model="drawer"  fixed temporary right app>
                    <?php 
                        $args = array(
                        'theme_location' => 'navdrawer',
                        )
                    ?>
                    <?php wp_nav_menu($args); ?>
                </v-navigation-drawer>
    
