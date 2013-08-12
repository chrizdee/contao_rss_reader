<div class="mod_newslist newsslider block">
<?php
if (!$_GET['feed']) die('no feed defined!');

require_once('lib.simplepie_1.3.1.mini.php');

$feed = new SimplePie();
$feed->set_feed_url($_GET['feed']);
$feed->init();
$feed->handle_content_type();

foreach ($feed->get_items() as $item): ?>
	<div class="layout_short block">
		<p class="info"><?php echo $item->get_date( $date_format = 'd.m.Y' ); ?></p>
		<h2><a href="<?php echo $item->get_permalink(); ?>" target="_blank"><?php echo $item->get_title(); ?></a></h2>
		<p class="teaser"><?php echo $item->get_description(); ?></p>
		<p class="more"><a href="<?php echo $item->get_permalink(); ?>" title="<?php echo $item->get_title(); ?>" target="_blank">Weiterlesen …</a></p>
	</div>
<?php endforeach; ?>
</div>