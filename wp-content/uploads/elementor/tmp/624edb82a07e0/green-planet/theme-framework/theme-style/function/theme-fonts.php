<?php
/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.1.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


function green_planet_theme_fonts() {
	$cmsmasters_option = green_planet_get_global_options();
	
	
	$custom_css = "/**
 * @package 	WordPress
 * @subpackage 	Green Planet
 * @version 	1.1.1
 * 
 * Theme Fonts Rules
 * Created by CMSMasters
 * 
 */


/***************** Start Theme Font Styles ******************/

	/* Start Content Font */
	body,
	table tbody tr th,
	table tbody tr th a,
	table tbody tr td,
	table tbody tr td a,
	.cmsmasters-form-builder .check_parent input[type=checkbox] + label,
	.cmsmasters-form-builder .check_parent input[type=radio] + label,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a,
	.cmsmasters_likes a,
	.cmsmasters_comments a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_content_font_google_font']) . $cmsmasters_option['green-planet' . '_content_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_content_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_content_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_content_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_content_font_font_style'] . ";
	}
	
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > a {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_content_font_font_size'] - 1) . "px;
	}
	
	.header_top .meta_wrap,
	.header_top .meta_wrap *,
	.widget_recent_entries .post-date,
	.cmsmasters_likes a,
	.cmsmasters_comments a,
	.footer .footer_copyright {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_content_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_content_font_line_height'] - 2) . "px;
	}
	
	.footer .social_wrap a {
		width:" . ((int) $cmsmasters_option['green-planet' . '_content_font_line_height'] + 2) . "px;
		height:" . ((int) $cmsmasters_option['green-planet' . '_content_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_footer_small .footer_nav > li a,
	.cmsmasters_footer_small .footer_custom_html_wrap {
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_content_font_line_height'] + 2) . "px;
	}
	
	.cmsmasters_icon_list_items li:before {
		line-height:" . $cmsmasters_option['green-planet' . '_content_font_line_height'] . "px;
	}

	/* Finish Content Font */


	/* Start Link Font */
	
	.cmsmasters_wrap_items_loader .cmsmasters_items_loader,
	.cmsmasters_items_filter_wrap .cmsmasters_items_filter_list li a,
	.cmsmasters_items_filter_wrap .cmsmasters_items_sort_but,
	#wp-calendar tbody td,
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc,
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc *,
	.subpage_nav > span:not([class]) {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_link_font_google_font']) . $cmsmasters_option['green-planet' . '_link_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_link_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_link_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_link_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_link_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_link_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_link_font_text_decoration'] . ";
	}

	a,
	.subpage_nav > strong,
	.subpage_nav > span,
	.subpage_nav > a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_link_font_google_font']) . $cmsmasters_option['green-planet' . '_link_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_link_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_link_font_line_height'] - 2) . "px;
		text-decoration:" . $cmsmasters_option['green-planet' . '_link_font_text_decoration'] . ";
		font-weight:" . $cmsmasters_option['green-planet' . '_link_font_font_weight'] . ";
	}
	
	#wp-calendar tbody td {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_link_font_font_size'] - 1) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_link_font_line_height'] - 1) . "px;
	}
	
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc,
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc * {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_link_font_font_size'] - 1) . "px;
	}	
	
	.cmsmasters_comments a:before {
		font-size:" . $cmsmasters_option['green-planet' . '_link_font_font_size'] . "px;
	}
	
	.widget_nav_menu > div > ul > li ul > li > a {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_link_font_font_size'] - 2) . "px;
	}
	
	.cmsmasters_slider_post .cmsmasters_slider_post_footer *,
	.cmsmasters_post_masonry .cmsmasters_post_meta_info *,
	.cmsmasters_open_post .cmsmasters_post_meta_info * {
		line-height:" . $cmsmasters_option['green-planet' . '_link_font_line_height'] . "px;
	}
	
	a:hover {
		text-decoration:" . $cmsmasters_option['green-planet' . '_link_hover_decoration'] . ";
	}
	/* Finish Link Font */


	/* Start Navigation Title Font */
	.navigation > li > a,
	.top_line_nav > li > a,
	.footer_nav > li > a,
	nav > div > ul div.menu-item-mega-container > ul > li > a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_nav_title_font_google_font']) . $cmsmasters_option['green-planet' . '_nav_title_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_nav_title_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_nav_title_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_nav_title_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_nav_title_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_nav_title_font_text_transform'] . ";
	}
	
	.top_line_nav > li > a {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_nav_title_font_font_size'] - 1) . "px;
	}
	
	@media only screen and (max-width: 1024px) {
		ul.top_line_nav > li > a,
		ul.top_line_nav ul li a {
			font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_nav_title_font_google_font']) . $cmsmasters_option['green-planet' . '_nav_title_font_system_font'] . ";
			font-size:" . ((int) $cmsmasters_option['green-planet' . '_nav_title_font_font_size'] - 2) . "px;
			line-height:" . $cmsmasters_option['green-planet' . '_nav_title_font_line_height'] . "px;
			font-weight:" . $cmsmasters_option['green-planet' . '_nav_title_font_font_weight'] . ";
			font-style:" . $cmsmasters_option['green-planet' . '_nav_title_font_font_style'] . ";
			text-transform:" . $cmsmasters_option['green-planet' . '_nav_title_font_text_transform'] . ";
		}
	}
	
	@media only screen and (max-width: 1024px) {
		#header .navigation .cmsmasters_resp_nav_toggle,
		#header nav > div > ul div.menu-item-mega-container > ul > li > a .cmsmasters_resp_nav_toggle {
			line-height:" . $cmsmasters_option['green-planet' . '_nav_title_font_line_height'] . "px;
			width:" . $cmsmasters_option['green-planet' . '_nav_title_font_line_height'] . "px;
			height:" . $cmsmasters_option['green-planet' . '_nav_title_font_line_height'] . "px;
		}
	}
	/* Finish Navigation Title Font */


	/* Start Navigation Dropdown Font */
	.navigation ul li a,
	.top_line_nav ul li a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_nav_dropdown_font_google_font']) . $cmsmasters_option['green-planet' . '_nav_dropdown_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_text_transform'] . ";
	}
	
	@media only screen and (max-width: 1024px) {
		#header .navigation ul li a .cmsmasters_resp_nav_toggle {
			line-height:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_line_height'] . "px;
			width:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_line_height'] . "px;
			height:" . $cmsmasters_option['green-planet' . '_nav_dropdown_font_line_height'] . "px;
		}
	}
	/* Finish Navigation Dropdown Font */


	/* Start H1 Font */
	h1,
	h1 a,
	.logo .title,
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.cmsmasters_pricing_table .cmsmasters_price_wrap,
	.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_title,	
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title,	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_day,
	.cmsmasters_open_post .cmsmasters_post_header .cmsmasters_post_title,
	.cmsmasters_archive_type .cmsmasters_archive_item_title,
	.cmsmasters_archive_type .cmsmasters_archive_item_title a,
	.tribe-events-countdown-widget .widgettitle {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h1_font_google_font']) . $cmsmasters_option['green-planet' . '_h1_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h1_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h1_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_dropcap {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h1_font_google_font']) . $cmsmasters_option['green-planet' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['green-planet' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h1_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h1_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h1_font_text_decoration'] . ";
	}
	
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap,
	.tribe-events-countdown-widget .widgettitle {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 12) . "px;
	}
	
	.cmsmasters_stats.stats_mode_circles .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 4) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_line_height'] + 4) . "px;
	}
	
	.cmsmasters_icon_list_items.cmsmasters_icon_list_icon_type_number .cmsmasters_icon_list_item .cmsmasters_icon_list_icon:before,
	.cmsmasters_icon_box.box_icon_type_number:before,
	.cmsmasters_icon_box.cmsmasters_icon_heading_left.box_icon_type_number .icon_box_heading:before {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h1_font_google_font']) . $cmsmasters_option['green-planet' . '_h1_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['green-planet' . '_h1_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h1_font_font_style'] . ";
	}
	
	.cmsmasters_dropcap.type1 {
		font-size:48px; /* static */
	}
	
	.cmsmasters_dropcap.type2 {
		font-size:36px; /* static */
	}
	
	.headline_outer .headline_inner .headline_icon:before {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] - 10) . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h1_font_line_height'] . "px;
		height:" . $cmsmasters_option['green-planet' . '_h1_font_line_height'] . "px;
	}
	
	.headline_outer .headline_inner.align_left .headline_icon,
	.headline_outer .headline_inner.align_left .headline_icon + .cmsmasters_breadcrumbs {
		padding-left:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_right .headline_icon,
	.headline_outer .headline_inner.align_right .headline_icon + .cmsmasters_breadcrumbs {
		padding-right:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 5) . "px;
	}
	
	.headline_outer .headline_inner.align_center .headline_icon {
		padding-left:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 5) . "px;
		margin-left:-" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] + 5) . "px;
	}

	@media screen and (max-width: 768px) {
		.headline_outer .headline_text * {
			font-size:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_font_size'] - 8) . "px;
			line-height:" . ((int) $cmsmasters_option['green-planet' . '_h1_font_line_height'] - 8) . "px;
		}
	}



	/* Finish H1 Font */


	/* Start H2 Font */
	h2,
	h2 a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > a,
	.cmsmasters_post_default .cmsmasters_post_header .cmsmasters_post_title a,
	.cmsmasters_profile_vertical .cmsmasters_profile_header .cmsmasters_profile_title a,
	.cmsmasters_slider_project_header h3 a,
	.cmsmasters_project_puzzle .cmsmasters_project_header a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h2_font_google_font']) . $cmsmasters_option['green-planet' . '_h2_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h2_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h2_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h2_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h2_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h2_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h2_font_text_decoration'] . ";
	}

	.cmsmasters_project_grid .cmsmasters_project_header * {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h2_font_font_size'] - 4) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_h2_font_line_height'] - 4) . "px;
	}

	@media screen and (max-width: 768px) {
		.cmsmasters_project_puzzle .cmsmasters_project_header a {
			font-size:" . ((int) $cmsmasters_option['green-planet' . '_h2_font_font_size'] - 8) . "px;
			line-height:" . ((int) $cmsmasters_option['green-planet' . '_h2_font_line_height'] - 8) . "px;
		}
	}


	/* Finish H2 Font */


	/* Start H3 Font */
	h3,
	h3 a,
	.post_comments .post_comments_title,
	.cmsmasters_slider_post_header h2 a,
	.cmsmasters_post_header h2 a,
	.cmsmasters_counters .cmsmasters_counter_wrap .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_title,
	.tribe-countdown-text a,
	.cmsmasters_post_header h2,
	.cmsmasters_slider_post_header h2 {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h3_font_google_font']) . $cmsmasters_option['green-planet' . '_h3_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h3_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h3_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h3_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h3_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h3_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h3_font_text_decoration'] . ";
	}
	
	.widget_categories h3 {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h2_font_google_font']) . $cmsmasters_option['green-planet' . '_h2_font_system_font'] . ";
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h3_font_font_size'] + 1) . "px;
	}
	
	/* Finish H3 Font */


	/* Start H4 Font */
	h4,
	h4 a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap > li > ul > li > a,
	.cmsmasters_sitemap_wrap .cmsmasters_sitemap_category > li > a,
	.cmsmasters_toggles .cmsmasters_toggle_title a {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h4_font_google_font']) . $cmsmasters_option['green-planet' . '_h4_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h4_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h4_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h4_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h4_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h4_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h4_font_text_decoration'] . ";
	}
	/* Finish H4 Font */


	/* Start H5 Font */
	h5,
	h5 a,
	.cmsmasters_breadcrumbs .cmsmasters_breadcrumbs_inner *,
	.footer_nav > li a,
	.share_posts a,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info,
	.cmsmasters_slider_post .cmsmasters_slider_post_cont_info *,
	.cmsmasters_cat_color,
	.cmsmasters_post_masonry .cmsmasters_post_cont_info,
	.cmsmasters_post_masonry .cmsmasters_post_cont_info *,
	.cmsmasters_post_default .cmsmasters_post_cont_info,
	.cmsmasters_post_default .cmsmasters_post_cont_info *,
	.cmsmasters_profile_header h6,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info *,
	.cmsmasters_project_puzzle .cmsmasters_project_category * {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h5_font_google_font']) . $cmsmasters_option['green-planet' . '_h5_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h5_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h5_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h5_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h5_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h5_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h5_font_text_decoration'] . ";
	}
	
	.error .error_subtitle {
		font-style:" . $cmsmasters_option['green-planet' . '_h5_font_font_style'] . ";
	}
	/* Finish H5 Font */


	/* Start H6 Font */
	h6,
	h6 a,
	able thead tr th,
	table tfoot tr td,
	.cmsmasters-form-builder label,
	.wpcf7-form label,
	.cmsmasters_img .cmsmasters_img_caption,
	.cmsmasters_stats .cmsmasters_stat_title,
	.cmsmasters_stats.stats_mode_bars .cmsmasters_stat_wrap .cmsmasters_stat .cmsmasters_stat_inner .cmsmasters_stat_counter_wrap,	
	.cmsmasters_gallery .cmsmasters_gallery_item.cmsmasters_caption figcaption,
	.cmsmasters_tabs .cmsmasters_tabs_list_item a,
	.cmsmasters_twitter_wrap .published,
	.cmsmasters_pricing_table .cmsmasters_period,
	.cmsmasters_quotes_slider .cmsmasters_quote_site,
	.cmsmasters_quotes_slider .cmsmasters_quote_site a,
	.cmsmasters_quotes_grid .cmsmasters_quote_site,
	.cmsmasters_quotes_grid .cmsmasters_quote_site a,
	.cmsmasters_open_profile .profile_details_item_title,
	.cmsmasters_open_profile .profile_features_item_title,
	.post_nav > span a,
	.cmsmasters_slider_post .cmsmasters_slider_post_read_more,
	.cmsmasters_slider_project .cmsmasters_slider_project_cont_info,	
	.cmsmasters_post_default .cmsmasters_post_read_more,	
	.cmsmasters_post_masonry .cmsmasters_post_read_more,	
	.cmsmasters_post_timeline .cmsmasters_post_date .cmsmasters_mon_year,
	.cmsmasters_post_timeline .cmsmasters_post_read_more,
	.cmsmasters_open_post .cmsmasters_post_cont_info,
	.cmsmasters_open_post .cmsmasters_post_cont_info *,
	.about_author .about_author_cont > a,
	.cmsmasters_comment_item .cmsmasters_comment_item_date,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .star-rating,
	.cmsmasters_project_puzzle .cmsmasters_project_category,	
	.cmsmasters_archive_type .cmsmasters_archive_item_type,
	.cmsmasters_archive_type .cmsmasters_archive_item_info,
	.cmsmasters_archive_type .cmsmasters_archive_item_info *,
	.cmsmasters_open_project .project_details_item_title,
	.cmsmasters_open_project .project_features_item_title,
	#wp-calendar thead th,
	#wp-calendar caption,
	.widget_custom_contact_info_entries .widget_custom_contact_info_title,
	.widget_nav_menu > div > ul > li > a,
	.widget_custom_twitter_entries .tweet_time,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_tabs_list_item > a:before,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published,
	.cmsmasters_wrap_pagination .page-numbers {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_h6_font_google_font']) . $cmsmasters_option['green-planet' . '_h6_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_h6_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_h6_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_h6_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_h6_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_h6_font_text_transform'] . ";
		text-decoration:" . $cmsmasters_option['green-planet' . '_h6_font_text_decoration'] . ";
	}
	
	.cmsmasters_open_profile .profile_details_item_desc,
	.cmsmasters_open_profile .profile_details_item_desc *,
	.cmsmasters_open_profile .profile_features_item_desc,
	.cmsmasters_open_profile .profile_features_item_desc *,
	.cmsmasters_post_timeline .cmsmasters_post_meta_info,
	.cmsmasters_post_timeline .cmsmasters_post_meta_info *,
	.cmsmasters_comment_item .cmsmasters_comment_item_cont_info .comment-edit-link,
	.cmsmasters_project_puzzle .cmsmasters_project_footer,
	.cmsmasters_project_puzzle .cmsmasters_project_footer *,
	.cmsmasters_open_project .project_details_item_desc,
	.cmsmasters_open_project .project_details_item_desc *,
	.cmsmasters_open_project .project_features_item_desc,
	.cmsmasters_open_project .project_features_item_desc *,
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc,
	.widget_custom_contact_info_entries .widget_custom_contact_info_desc *,
	.widget_nav_menu > div > ul > li ul > li > a {
		line-height:" . $cmsmasters_option['green-planet' . '_h6_font_line_height'] . "px;
	}
	
	.widget_custom_twitter_entries .tweet_time,
	.widget_custom_posts_tabs_entries .cmsmasters_tabs .cmsmasters_lpr_tabs_cont > .published {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_h6_font_font_size'] - 2) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_h6_font_line_height'] - 2) . "px;
	}
	/* Finish H6 Font */


	/* Start Button Font */
	.cmsmasters_button, 
	.button, 
	input[type=submit], 
	input[type=button], 
	button,
	.cmsmasters_header_search_form button {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_button_font_google_font']) . $cmsmasters_option['green-planet' . '_button_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_button_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_button_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_button_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_button_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_button_font_text_transform'] . ";
	}
	
	.gform_wrapper .gform_footer input.button, 
	.gform_wrapper .gform_footer input[type=submit] {
		font-size:" . $cmsmasters_option['green-planet' . '_button_font_font_size'] . "px !important;
	}

	.cmsmasters-form-builder .cmsmasters_button {
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_button_font_line_height'] + 10) . "px;
	}

	.tribe-bar-filters input[type=submit] {
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_button_font_line_height'] + 7) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg, 
	.cmsmasters_button.cmsmasters_but_icon_divider, 
	.cmsmasters_button.cmsmasters_but_icon_inverse {
		padding-left:" . ((int) $cmsmasters_option['green-planet' . '_button_font_line_height'] + 20) . "px;
	}
	
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:before, 
	.cmsmasters_button.cmsmasters_but_icon_divider:before, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:before, 
	.cmsmasters_button.cmsmasters_but_icon_dark_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_light_bg:after, 
	.cmsmasters_button.cmsmasters_but_icon_divider:after, 
	.cmsmasters_button.cmsmasters_but_icon_inverse:after {
		width:" . $cmsmasters_option['green-planet' . '_button_font_line_height'] . "px;
	}
	/* Finish Button Font */


	/* Start Small Text Font */
	small, 
	form .formError .formErrorContent {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_small_font_google_font']) . $cmsmasters_option['green-planet' . '_small_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_small_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_small_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_small_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_small_font_font_style'] . ";
		text-transform:" . $cmsmasters_option['green-planet' . '_small_font_text_transform'] . ";
	}
	
	.gform_wrapper .description, 
	.gform_wrapper .gfield_description, 
	.gform_wrapper .gsection_description, 
	.gform_wrapper .instruction {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_small_font_google_font']) . $cmsmasters_option['green-planet' . '_small_font_system_font'] . " !important;
		font-size:" . $cmsmasters_option['green-planet' . '_small_font_font_size'] . "px !important;
		line-height:" . $cmsmasters_option['green-planet' . '_small_font_line_height'] . "px !important;
	}
	/* Finish Small Text Font */


	/* Start Text Fields Font */
	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	textarea,
	select,
	option {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_input_font_google_font']) . $cmsmasters_option['green-planet' . '_input_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_input_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_input_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_input_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_input_font_font_style'] . ";
	}

	input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]) {
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_input_font_line_height'] + 2) . "px;
	}
	
	.gform_wrapper input:not([type=button]):not([type=checkbox]):not([type=file]):not([type=hidden]):not([type=image]):not([type=radio]):not([type=reset]):not([type=submit]):not([type=color]):not([type=range]),
	.gform_wrapper textarea, 
	.gform_wrapper select {
		font-size:" . $cmsmasters_option['green-planet' . '_input_font_font_size'] . "px !important;
	}
	/* Finish Text Fields Font */


	/* Start Blockquote Font */
	blockquote,
	.cmsmasters_quotes_slider .cmsmasters_quote_content,
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_quote_font_google_font']) . $cmsmasters_option['green-planet' . '_quote_font_system_font'] . ";
		font-size:" . $cmsmasters_option['green-planet' . '_quote_font_font_size'] . "px;
		line-height:" . $cmsmasters_option['green-planet' . '_quote_font_line_height'] . "px;
		font-weight:" . $cmsmasters_option['green-planet' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_quote_font_font_style'] . ";
	}
	
	.cmsmasters_quotes_grid .cmsmasters_quote_content {
		font-size:" . ((int) $cmsmasters_option['green-planet' . '_quote_font_font_size'] - 6) . "px;
		line-height:" . ((int) $cmsmasters_option['green-planet' . '_quote_font_line_height'] - 6) . "px;
	}
	
	q {
		font-family:" . green_planet_get_google_font($cmsmasters_option['green-planet' . '_quote_font_google_font']) . $cmsmasters_option['green-planet' . '_quote_font_system_font'] . ";
		font-weight:" . $cmsmasters_option['green-planet' . '_quote_font_font_weight'] . ";
		font-style:" . $cmsmasters_option['green-planet' . '_quote_font_font_style'] . ";
	}
	/* Finish Blockquote Font */

/***************** Finish Theme Font Styles ******************/


";
	
	
	return apply_filters('green_planet_theme_fonts_filter', $custom_css);
}

