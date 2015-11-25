<!DOCTYPE html>
<?php $URL_WEBSITE = getenv('URL_WEBSITE') ? getenv('URL_WEBSITE') : 'http://127.0.0.1:8000/'; ?>
<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">

		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >

		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php wp_head(); ?>
		<link rel="stylesheet" href="<?=$URL_WEBSITE?>static/css/vendor.css" media="screen" />
		<link href="<?=$URL_WEBSITE?>static/css/screen.css" rel="stylesheet" type="text/css" />
	</head>

	<body <?php body_class(); ?>>

		<div class="wrapper" id="wrapper">

		<?php require_once 'web_header.php' ?>
