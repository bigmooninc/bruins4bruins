<?php
/*
  * Template Name: Home
  */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['is_front_page'] = 'true';
Timber::render( array( 'pages/home.twig', 'pages/page.twig' ), $context);