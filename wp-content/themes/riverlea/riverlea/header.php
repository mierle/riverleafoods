<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="Riverlea Foods, Muskoka Food, Gluten Free Baking, Gluten Free Cooking, Muskoka Cuisine" /> 
<meta name="description" content="Riverlea foods is a website dedicated to cooking and gluten free baking, based in Muskoka, Ontario, Canada." /> 

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">

<div id="header" role="banner">
	<div id="pagelinks">
	<ul>
		<li><a href="http://www.riverleafoods.com">Home</a>  </li>
		<li><a href="http://www.riverleafoods.com/?page_id=2">About Me</a></li>
		<li><a href="http://www.riverleafoods.com/?page_id=131">Gluten Free Tips</a></li>
		<li><a href="http://www.riverleafoods.com/?cat=9">Recipes</a></li>
	</ul>	
</div>

	<div id="headerimg">
	
		
	</div>
</div>
<hr />
