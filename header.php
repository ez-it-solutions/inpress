<?php /* header template partial */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php /* https://bulma.io */ ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
		<?php /* <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script> */ ?>
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php /* https://bulma.io/documentation/layout/hero */ ?>
<section class="hero is-info is-bold">
	<div class="hero-body">
		<div class="container">
			<h1 class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="subtitle">Hero subtitle</h2>
			<?php get_template_part( 'template-parts/navigation', 'none' ); ?>
		</div>
	</div>
</section>
