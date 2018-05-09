<?php
/**
 * settings for the discussions widget
 */

/* @var $widget ElggWidget */
$widget = elgg_extract('entity', $vars);

echo elgg_view('object/widget/edit/num_display', [
	'entity' => $widget,
	'name' => 'topic_count',
]);
