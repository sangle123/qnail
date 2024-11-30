<?php
defined('ABSPATH') || die();

function ba_get_b64_icon()
{
	return 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0wIDMwQzAgMTMuNDMxNSAxMy40MzE2IDAgMzAgMEM0Ni41Njg0IDAgNjAgMTMuNDMxNSA2MCAzMEM2MCA0Ni41Njg1IDQ2LjU2ODQgNjAgMzAgNjBDMTMuNDMxNiA2MCAwIDQ2LjU2ODUgMCAzMFpNMTEuMzMxNSAyOC41NDc1QzExLjE4MzYgMjguNjgzNiAxMC45ODc4IDI4Ljc2MTIgMTAuNzkxNSAyOC43NjEyQzEwLjYyODQgMjguNzYxMiAxMC40NjUzIDI4LjcwNzUgMTAuMzMwMSAyOC42MTExQzEwLjEzNjcgMjguNDczNCAxMCAyOC4yNDg5IDEwIDI3Ljk2OTZWMjcuNjUzQzEwLjA3OTEgMjcuMzM2MyAxMC4zOTYgMjcuMDk4OSAxMC43OTE1IDI3LjA5ODlDMTEuMTg3NSAyNy4xNzggMTEuNTgzIDI3LjQ5NDYgMTEuNTgzIDI3Ljk2OTZDMTEuNTgzIDI4LjIwOTQgMTEuNDgyNCAyOC40MDg3IDExLjMzMTUgMjguNTQ3NVpNMzAuMTA2OSA1MC43NjgyQzQxLjM0ODEgNTAuNzY4MiA1MC41MzA4IDQxLjY2NDYgNTAuNTMwOCAzMC40MjM2QzUwLjUzMDggMTkuMTgyNyA0MS40MjcyIDEwIDMwLjE4NiAxMEMyNi4xNDg5IDEwIDIyLjQyODIgMTEuMTg3NCAxOS4yNjE3IDEzLjE2NjVDMTUuNjk5NyAxNS40NjIyIDEyLjg1MDEgMTguNzg2OSAxMS4yNjY2IDIyLjc0NUMxMS4wMjkzIDIzLjQ1NzQgMTAuNjMzMyAyNC42NDQ5IDEwLjM5NiAyNS41MTU2QzEwLjM0NDcgMjUuNzczMiAxMC40NjA0IDI2LjAzMDYgMTAuNjU3MiAyNi4yMDFDMTAuNzYyNyAyNi4yOTI1IDEwLjg5MTEgMjYuMzU4OCAxMS4wMjkzIDI2LjM4NjVDMTEuNTAzOSAyNi40NjU2IDExLjg5OTkgMjYuMjI4MSAxMS45NzkgMjUuODMyM0MxMi4wMTk1IDI1LjY2OTQgMTIuMTAyMSAyNS40MjMgMTIuMTcyOSAyNS4yMTEyQzEyLjIzOTcgMjUuMDExIDEyLjI5NTkgMjQuODQxNyAxMi4yOTU5IDI0LjgwMzJDMTIuNDU0MSAyNC40MDczIDEyLjg1MDEgMjQuMTY5OSAxMy4yNDU2IDI0LjMyODJDMTMuNTYyNSAyNC40ODY2IDEzLjc5OTggMjQuODAzMiAxMy43OTk4IDI1LjExOTlDMTMuNzIwNyAyNS4xOTkgMTMuNzIwNyAyNS4xOTkgMTMuNzIwNyAyNS4yNzgyQzEzLjQwMzggMjYuNDY1NiAxMy4wODc0IDI3Ljg5MDUgMTMuMDA4MyAyOS4yMzYyQzEyLjkyOTIgMjkuNjMyMSAxMy4yNDU2IDMwLjAyNzggMTMuNzIwNyAzMC4wMjc4QzE0LjExNjcgMzAuMTA3MSAxNC41MTIyIDI5LjcxMTIgMTQuNTEyMiAyOS4zMTU0QzE0LjUxMjIgMjkuMjc1OSAxNC41MzIyIDI5LjA3NzkgMTQuNTUxOCAyOC44OEMxNC41NzEzIDI4LjY4MjEgMTQuNTkxMyAyOC40ODQxIDE0LjU5MTMgMjguNDQ0NkMxNC44MjkxIDI3LjAxOTcgMTUuMjI0NiAyNS41OTQ4IDE1Ljc3ODggMjQuMjQ5QzE1Ljg1NzkgMjQuMDExNiAxNi4wMTYxIDIzLjg1MzMgMTYuMDk1NyAyMy42MTU3QzE2LjI1MzkgMjMuMjk5MSAxNi43MjkgMjMuMTQwNyAxNy4xMjQ1IDIzLjI5OTFIMTcuMjAzNkMxNy41OTk2IDIzLjQ1NzQgMTcuNzU3OCAyMy44NTMzIDE3LjU5OTYgMjQuMjQ5QzE3LjUyMDUgMjQuMzI4MiAxNy4wNDU0IDI1LjE5OSAxNi43MjkgMjYuNTQ0N0MxNi41NzAzIDI2Ljk0MDYgMTYuODg3MiAyNy40MTU1IDE3LjM2MjMgMjcuNDk0NkMxNy43NTc4IDI3LjU3MzkgMTguMDc0NyAyNy4zMzYzIDE4LjIzMjkgMjYuOTQwNkMxOC41NDkzIDI1LjkxMTUgMTkuMDI0NCAyNC44ODIzIDE5LjEwMzUgMjQuNzI0QzIwLjIxMTkgMjIuNTA3NCAyMS45NTM2IDIwLjY4NjggMjQuMDkwOCAxOS40OTk0QzI1LjgzMjUgMTguNDcwMiAyNy44OTA2IDE3LjkxNjEgMzAuMTA2OSAxNy45MTYxQzM2Ljk5NDEgMTcuOTE2MSA0Mi41MzU2IDIzLjQ1NzQgNDIuNTM1NiAzMC4zNDQ1QzQyLjUzNTYgMzYuNjc3NCAzNy44NjQ3IDQxLjgyMjkgMzEuODQ4NiA0Mi42OTM2VjI5LjA3NzlDMzEuODQ4NiAyNi44NjEzIDMwLjEwNjkgMjUuMTE5OSAyNy44OTA2IDI1LjExOTlDMjUuNjczOCAyNS4xMTk5IDIzLjkzMjYgMjYuODYxMyAyMy45MzI2IDI5LjA3NzlWNDYuODEwMUMyMy45MzI2IDQ5LjAyNjYgMjUuNjczOCA1MC43NjgyIDI3Ljg5MDYgNTAuNzY4MkgzMC4xMDY5WiIgZmlsbD0iIzFGMjkzNyIvPgo8L3N2Zz4K';
}

function divitorque_has_pro()
{
	return defined('DIVI_TORQUE_PRO_VERSION') || defined('BRAIN_ADDONS_PRO_VERSION');
}

function ba_has_pro()
{
	return defined('BRAIN_ADDONS_PRO_VERSION');
}

function divitorque_dashboard_link()
{
	return add_query_arg(array('page' => 'addons-for-divi'), admin_url('admin.php'));
}

function ba_get_svg_user_icon()
{
	return '<svg viewBox="84.8 395.9 50 50" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
        <path d="m109.4 420c3.3 0 6.1-1.2 8.4-3.5s3.5-5.1 3.5-8.4-1.2-6.1-3.5-8.4-5.1-3.5-8.4-3.5-6.1 1.2-8.4 3.5-3.5 5.1-3.5 8.4 1.2 6.1 3.5 8.4 5.2 3.5 8.4 3.5zm-6.3-18.3c1.8-1.8 3.9-2.6 6.4-2.6s4.6 0.9 6.4 2.6c1.8 1.8 2.6 3.9 2.6 6.4s-0.9 4.6-2.6 6.4c-1.8 1.8-3.9 2.6-6.4 2.6s-4.6-0.9-6.4-2.6c-1.8-1.8-2.6-3.9-2.6-6.4-0.1-2.5 0.8-4.6 2.6-6.4z"/><path d="m130.3 434.2c-0.1-1-0.2-2-0.4-3.1s-0.5-2.2-0.8-3.1c-0.3-1-0.8-2-1.3-2.9-0.6-1-1.2-1.8-1.9-2.5-0.8-0.7-1.7-1.3-2.8-1.8-1.1-0.4-2.3-0.6-3.6-0.6-0.5 0-1 0.2-1.9 0.8-0.6 0.4-1.3 0.8-2 1.3-0.6 0.4-1.5 0.8-2.6 1.1s-2.1 0.5-3.2 0.5-2.1-0.2-3.2-0.5-2-0.7-2.6-1.1c-0.7-0.5-1.4-0.9-2-1.3-0.9-0.6-1.4-0.8-1.9-0.8-1.3 0-2.5 0.2-3.6 0.6s-2 1-2.8 1.8c-0.7 0.7-1.4 1.6-1.9 2.5s-1 1.9-1.3 2.9-0.6 2-0.8 3.1-0.3 2.2-0.4 3.1-0.1 1.9-0.1 2.9c0 2.6 0.8 4.7 2.4 6.2s3.7 2.3 6.3 2.3h23.8c2.6 0 4.7-0.8 6.3-2.3s2.4-3.6 2.4-6.2c0-1-0.1-2-0.1-2.9zm-4.4 7c-1.1 1-2.5 1.5-4.3 1.5h-23.7c-1.8 0-3.2-0.5-4.3-1.5-1-1-1.5-2.3-1.5-4.1 0-0.9 0-1.8 0.1-2.7s0.2-1.8 0.4-2.8 0.4-1.9 0.7-2.8c0.3-0.8 0.6-1.6 1.1-2.4 0.4-0.7 0.9-1.4 1.4-1.9s1.1-0.9 1.9-1.2c0.7-0.3 1.4-0.4 2.3-0.4 0.1 0.1 0.3 0.2 0.6 0.3 0.6 0.4 1.3 0.8 2 1.3 0.9 0.5 2 1 3.3 1.5 1.3 0.4 2.7 0.7 4.1 0.7s2.7-0.2 4.1-0.7c1.3-0.4 2.4-0.9 3.3-1.5 0.8-0.5 1.4-0.9 2-1.3 0.3-0.2 0.5-0.3 0.6-0.3 0.8 0 1.6 0.2 2.3 0.4 0.7 0.3 1.4 0.7 1.9 1.2s1 1.1 1.4 1.9 0.8 1.6 1.1 2.4 0.5 1.8 0.7 2.8 0.3 2 0.4 2.8c0.1 0.9 0.1 1.8 0.1 2.7-0.4 1.8-0.9 3.1-2 4.1z"/>
    </svg>
    ';
}

function ba_get_svg_clock_icon()
{
	return '<svg enable-background="new 0 0 443.294 443.294" viewBox="0 0 443.29 443.29" xmlns="http://www.w3.org/2000/svg"><path d="m221.65 0c-122.21 0-221.65 99.433-221.65 221.65s99.433 221.65 221.65 221.65 221.65-99.433 221.65-221.65-99.433-221.65-221.65-221.65zm0 415.59c-106.94 0-193.94-87-193.94-193.94s87-193.94 193.94-193.94 193.94 87 193.94 193.94-87 193.94-193.94 193.94z"/><path d="m235.5 83.118h-27.706v144.26l87.176 87.176 19.589-19.589-79.059-79.059z"/>
    </svg>';
}

function ba_get_img_masking_shapes($shape)
{
	$masking_shapes = array(
		'none'    => '',

		'shape_1' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 86.4"><path class="st0" opacity="0.2" d="M0,69.3c0,0,76.2-89.2,215-32.8s185,32.8,185,32.8v17H0V69.3z"></path><path class="st0" opacity="0.2" d="M0,69.3v17h400v-17c0,0-7.7-93.8-145.8-59.1S89.7,119,0,69.3z"></path><path class="st1" d="M0,69.3c0,0,50.3-63.1,197.3-14.2S400,69.3,400,69.3v17H0V69.3z"></path></svg>',

		'shape_2' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 273.3 34"><path d="M0,34h273.3l0-32C119.7-8.7,0,34,0,34z"/></svg>',

		'shape_3' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 35"><path 	class="st0" d="M0,33.6C63.8,11.8,130.8,0.2,200,0.2s136.2,11.6,200,33.4v1.2H0V33.6z"></path></svg>',
	);

	return $masking_shapes[$shape];
}

function brainaddons_login_page()
{

	$options = get_option('brainaddons_settings', array());
	$page    = array_key_exists('login_page', $options) ? get_post($options['login_page']) : false;

	return $page;
}

function ba_get_post_types()
{

	$post_types = get_post_types(
		array(
			'public' => true,
		),
		'objects'
	);

	$options = array();

	foreach ($post_types as $post_type) {
		$options[$post_type->name] = $post_type->label;
	}

	// Deprecated 'Media' post type.
	$key = array_search('Media', $options, true);
	if ('attachment' === $key) {
		unset($options[$key]);
	}

	return apply_filters('uael_loop_post_types', $options);
}

function ba_get_taxonomies()
{

	$taxonomies = get_taxonomies(array('show_in_nav_menus' => true), 'objects');

	$options = array('' => '');

	foreach ($taxonomies as $taxonomy) {
		$options[$taxonomy->name] = $taxonomy->label;
	}

	return $options;
}

function ba_get_date_link($post_id = null)
{

	if (empty($post_id)) {
		$post_id = get_the_ID();
	}

	$year  = get_the_date('Y', $post_id);
	$month = get_the_time('m', $post_id);
	$day   = get_the_time('d', $post_id);
	$url   = get_day_link($year, $month, $day);

	return $url;
}

function ba_get_excerpt($post_id = null, $length = null)
{
	if (empty($length)) {
		$length = 35;
	}
	return wpautop(strip_shortcodes(truncate_post($length, false, '', true)));
}

function ba_prev_arrow_icon()
{
	return '<span class="dtq-svg-iconset svg-baseline"><svg aria-hidden="true" class="dtq-svg-icon dtq-arrow-left-alt-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28"><title>Previous</title><path d="M28 12.5v3c0 0.281-0.219 0.5-0.5 0.5h-19.5v3.5c0 0.203-0.109 0.375-0.297 0.453s-0.391 0.047-0.547-0.078l-6-5.469c-0.094-0.094-0.156-0.219-0.156-0.359v0c0-0.141 0.063-0.281 0.156-0.375l6-5.531c0.156-0.141 0.359-0.172 0.547-0.094 0.172 0.078 0.297 0.25 0.297 0.453v3.5h19.5c0.281 0 0.5 0.219 0.5 0.5z"></path>
	</svg></span>';
}

function ba_next_arrow_icon()
{
	return '<span class="dtq-svg-iconset svg-baseline"><svg aria-hidden="true" class="dtq-svg-icon dtq-arrow-right-alt-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28"><title>Continue</title><path d="M27 13.953c0 0.141-0.063 0.281-0.156 0.375l-6 5.531c-0.156 0.141-0.359 0.172-0.547 0.094-0.172-0.078-0.297-0.25-0.297-0.453v-3.5h-19.5c-0.281 0-0.5-0.219-0.5-0.5v-3c0-0.281 0.219-0.5 0.5-0.5h19.5v-3.5c0-0.203 0.109-0.375 0.297-0.453s0.391-0.047 0.547 0.078l6 5.469c0.094 0.094 0.156 0.219 0.156 0.359v0z"></path></svg></span>';
}

function ba_related_posts_args($post_id)
{
	$categories = get_the_terms($post_id, 'category');
	if (empty($categories) || is_wp_error($categories)) {
		$categories = array();
	}
	$category_list = wp_list_pluck($categories, 'term_id');
	$related_args  = array(
		'post_type'      => 'post',
		'posts_per_page' => 6,
		'no_found_rows'  => true,
		'post_status'    => 'publish',
		'post__not_in'   => array($post_id),
		'orderby'        => 'rand',
		'category__in'   => $category_list,

	);

	return $related_args;
}

function dt_if_not_migrated()
{
	$not_migrated = get_option('ba_version');
	if ($not_migrated) {
		return true;
	}
	return false;
}

function dt_backend_helpers($helpers)
{

	$helpers['ifMigrated'] = dt_if_not_migrated() ? 'false' : 'true';

	return $helpers;
}

add_filter('et_fb_backend_helpers', 'dt_backend_helpers');

function dtq_global_assets_list($global_list)
{

	$assets_list   = array();
	$assets_prefix = et_get_dynamic_assets_path();

	$assets_list['et_icons_fa'] = array(
		'css' => "{$assets_prefix}/css/icons_fa_all.css",
	);

	return array_merge($global_list, $assets_list);
}

function dtq_inject_fa_icons($icon_data)
{
	if (function_exists('et_pb_maybe_fa_font_icon') && et_pb_maybe_fa_font_icon($icon_data)) {
		add_filter('et_global_assets_list', 'dtq_global_assets_list');
		add_filter('et_late_global_assets_list', 'dtq_global_assets_list');
	}
}
