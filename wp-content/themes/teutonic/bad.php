<?php
function filter_posts($style) {
    return query_posts(array(
        'category_name=wine',
        'meta_query' =>  array(
            'key'       => 'style',
            'compare'   => '=',
            'value'     => $style,))); }
    ?>
	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>
		<p>
			<a href="<?php filter_posts('white') ?>">White   </a>
			<a href="<?php filter_posts('red') ?>">Red   </a>
			<a href="<?php filter_posts('red') ?>">Sparkling   </a>
			<a href="<?php filter_posts('import') ?>">Import   </a>
		</p>
					<?php
#					$style = parse_url($_SERVER['REDIRECT_URL'], PHP_URL_FRAGMENT);
#					if(!$style) {
#						$style = "";
#					};
#					query_posts(array(
#					'category_name=events',
#					'meta_query' =>  array(
#				        'key'		=> 'style',
#				        'compare'	=> '=',
#				        'value'		=> $style,))); ?>
