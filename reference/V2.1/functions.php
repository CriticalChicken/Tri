<?php
/* Copyright (C) Critical Chicken. All rights reserved. Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners. See website for current copyright years. */




// JUMBOTRON

// "Special" titletag image helper
function jtSpecialTitletag() {
	$colour = get_option('cc_jumbotron_color_field');

	if (get_option('cc_jumbotron_titletag1_special') == 'live') {
		echo '-' . $colour . '.gif';
	} else {
		echo '.png';
	}
}


// Handle the "special" titletag's alt text
function jtSpecialAlt() {
	$type = get_option('cc_jumbotron_titletag1_special');

	if ($type == 'ace-attorney') {
		echo 'Ace Attorney';
	} else if ($type == 'best-of') {
		echo 'Best of';
	} else if ($type == 'breaking-news') {
		echo 'Breaking news';
	} else if ($type == 'e3-2023') {
		echo 'E3&rsquo;s future';
	} else if ($type == 'exclusive') {
		echo 'Exclusive';
	} else if ($type == 'forthegaymers') {
		echo '&num;ForTheGaymers';
	} else if ($type == 'live') {
		echo 'Live';
	} else if ($type == 'news-alert') {
		echo 'News alert';
	} else if ($type == 'nintendo-direct') {
		echo 'Nintendo Direct';
	} else if ($type == 'pokemon') {
		echo 'Pok&eacute;mon';
	} else if ($type == 'pokemon-presents') {
		echo 'Pok&eacute;mon Presents';
	} else if ($type == 'state-of-play') {
		echo 'State of Play';
	} else if ($type == 'summer-game-fest-2024') {
		echo 'Summer Game Fest 2024';
	} else if ($type == 'dungeons-and-dragons') {
		echo 'Dungeons &amp; Dragons';
	} else if ($type == 'switch-2') {
		echo 'Switch 2';
	} else if ($type == 'persona') {
		echo 'Persona';
	}
}


// Add an icon if needed
function jtIcon() {
	$type = get_option('cc_jumbotron_titletag2_type');

	if ($type == 'first-impressions' || $type == 'hands-on' || $type == 'preview' || $type == 'second-look') {
		echo '<span class="titletag icon-only"><img src="' . get_template_directory_uri() . '/img/titletags/jumbotron/review-icon.png" height="32" alt="Review | "></span><span class="titletag after-icon">';
	} else if ($type == 'guest-blog' || $type == 'guide' || $type == 'interview' || $type == 'opinion') {
		echo '<span class="titletag icon-only"><img src="' . get_template_directory_uri() . '/img/titletags/jumbotron/feature-icon.png" height="32" alt="Feature | "></span><span class="titletag after-icon">';
	} else if ($type == 'link' || $type == 'live-updates' || $type == 'rumour' || $type == 'site-update' || $type == 'update' || $type == 'video') {
		echo '<span class="titletag icon-only"><img src="' . get_template_directory_uri() . '/img/titletags/jumbotron/news-icon.png" height="32" alt="News | "></span><span class="titletag after-icon">';
	} else {
		echo '<span class="titletag">';
	}
}


// Handle the main titletag's alt text
function jtMainAlt() {
	$type = get_option('cc_jumbotron_titletag2_type');

	if ($type == 'feature') {
		echo 'Feature';
	} else if ($type == 'first-impressions') {
		echo 'First impressions';
	} else if ($type == 'guest-blog') {
		echo 'Guest blog';
	} else if ($type == 'guide') {
		echo 'Guide';
	} else if ($type == 'hands-on') {
		echo 'Hands on';
	} else if ($type == 'interview') {
		echo 'Interview';
	} else if ($type == 'link') {
		echo 'Link';
	} else if ($type == 'live-updates') {
		echo 'Live updates';
	} else if ($type == 'news') {
		echo 'News';
	} else if ($type == 'opinion') {
		echo 'Opinion';
	} else if ($type == 'preview') {
		echo 'Preview';
	} else if ($type == 'review') {
		echo 'Review';
	} else if ($type == 'rumour') {
		echo 'Rumour';
	} else if ($type == 'second-look') {
		echo 'Second look';
	} else if ($type == 'site-update') {
		echo 'Site update';
	} else if ($type == 'update') {
		echo 'Update';
	} else if ($type == 'video') {
		echo 'Video';
	} else {
		echo 'Critical Chicken';
	}
}


// TICKER

// Titletag image helper
function tkSpecialTitletag() {
	$type = get_option('cc_ticker_titletag_special');

	if ($type == 'live') {
		echo get_template_directory_uri() . '/img/titletags/ticker/live.gif';
	} else {
		echo get_template_directory_uri() . '/img/titletags/ticker/' . $type . '.png';
	}
}


// Handle the titletag's alt text
function tkAlt() {
	$type = get_option('cc_ticker_titletag_special');

	if ($type == 'ace-attorney') {
		echo 'Ace Attorney';
	} else if ($type == 'breaking-news') {
		echo 'Breaking news';
	} else if ($type == 'e3-2023') {
		echo 'E3&rsquo;s future';
	} else if ($type == 'exclusive') {
		echo 'Exclusive';
	} else if ($type == 'forthegaymers') {
		echo '&num;ForTheGaymers';
	} else if ($type == 'live') {
		echo 'Live';
	} else if ($type == 'news-alert') {
		echo 'News alert';
	} else if ($type == 'nintendo-direct') {
		echo 'Nintendo Direct';
	} else if ($type == 'pokemon') {
		echo 'Pok&eacute;mon';
	} else if ($type == 'pokemon-presents') {
		echo 'Pok&eacute;mon Presents';
	} else if ($type == 'state-of-play') {
		echo 'State of Play';
	} else if ($type == 'summer-game-fest-2024') {
		echo 'Summer Game Fest 2024';
	} else if ($type == 'dungeons-and-dragons') {
		echo 'Dungeons &amp; Dragons';
	} else if ($type == 'switch-2') {
		echo 'Switch 2';
	} else if ($type == 'persona') {
		echo 'Persona';
	} else {
		echo 'Critical Chicken';
	}
}


// New post thumbnail handler
function ccThumbHandler() {
	$path = get_template_directory_uri();
	if(has_post_thumbnail()) {
		echo the_post_thumbnail_url();
	} else {
		if (in_category('exclusives') || in_category('live') || in_category('breaking-news') || in_category('news-alerts')) {
			echo($path . '/img/thumbs/yellow.png');
		} else if (in_category('news')) {
			echo($path . '/img/thumbs/red.png');
		} else if (in_category('features')) {
			echo($path . '/img/thumbs/blue.png');
		} else if (in_category('reviews')) {
			echo($path . '/img/thumbs/orange.png');
		} else {
			echo($path . '/img/thumbs/black.png');
		}
	}
}
function ccThumbAlt() {
	$theAlt = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
	echo esc_html($theAlt);
}


// CATEGORY TITLETAGS

// In order of priority
function ctTitletag() {
	$site = get_site_url();
	$path = get_template_directory_uri();

	if (in_category('special')) {

	// Priority 9 - Best of
		if (in_category('best-of')) {
			echo '<span class="titletag"><a href="' . $site . '/section/best-of"><img src="' . $path . '/img/titletags/best-of.png" alt="Best of" height="32"></a></span>';
		}

	// Priority 8 - Exclusives
		if (in_category('exclusives')) {
			echo '<span class="titletag"><a href="' . $site . '/section/exclusives"><img src="' . $path . '/img/titletags/exclusive.png" alt="Exclusive" height="32"></a></span>';
		}

	// Priority 7 - Other yellow titletags
		if (in_category('breaking-news')) {
			echo '<span class="titletag"><img src="' . $path . '/img/titletags/breaking-news.png" alt="Breaking news" height="32" class="no-hover"></span>';
		}
		if (in_category('news-alert')) {
			echo '<span class="titletag"><img src="' . $path . '/img/titletags/news-alert.png" alt="News alert" height="32" class="no-hover"></span>';
		}
		if (in_category('live')) {
			echo '<span class="titletag"><a href="' . $site . '/section/live-updates"><img src="' . $path . '/img/titletags/live.gif" alt="Live" height="32"></a></span>';
		}

	// Priority 6 - Major events (expos, etc.)
		if (in_category('e3-2016')) {
			echo '<span class="titletag"><a href="' . $site . '/section/e3-2016"><img src="' . $path . '/img/titletags/e3-2016.png" alt="E3 2016" height="32"></a></span>';
		}
		if (in_category('e3-2021')) {
			echo '<span class="titletag"><a href="' . $site . '/section/e3-2021"><img src="' . $path . '/img/titletags/e3-2021.png" alt="E3 2016" height="32"></a></span>';
		}
		if (in_category('e3-2023')) {
			echo '<span class="titletag"><a href="' . $site . '/section/e3-2023"><img src="' . $path . '/img/titletags/e3s-future.png" alt="E3&rsquo;s future" height="32"></a></span>';
		}
		if (in_category('summer-game-fest-2024')) {
			echo '<span class="titletag"><a href="' . $site . '/section/summer-game-fest-2024"><img src="' . $path . '/img/titletags/summer-game-fest-2024.png" alt="Summer Game Fest 2024" height="32"></a></span>';
		}

	// Priority 5 - Minor events (Nintendo Direct, etc.)
		if (in_category('nintendo-direct')) {
			echo '<span class="titletag"><a href="' . $site . '/section/nintendo-direct"><img src="' . $path . '/img/titletags/nintendo-direct.png" alt="Nintendo Direct" height="32"></a></span>';
		}
		if (in_category('pokemon-presents')) {
			// If also in the Pokémon category, bump that up the running order
			if (in_category('pokemon')) {
				echo '<span class="titletag"><a href="' . $site . '/section/pokemon"><img src="' . $path . '/img/titletags/pokemon.png" alt="Pok&eacute;mon" height="32"></a></span>';
			}
			echo '<span class="titletag"><a href="' . $site . '/section/pokemon-presents"><img src="' . $path . '/img/titletags/pokemon-presents.png" alt="Pok&eacute;mon Presents" height="32"></a></span>';
		}
		if (in_category('state-of-play')) {
			echo '<span class="titletag"><a href="' . $site . '/section/state-of-play"><img src="' . $path . '/img/titletags/state-of-play.png" alt="State of Play" height="32"></a></span>';
		}

	// Priority 4 - Individual games, topics
		if (in_category('switch-2')) {
			echo '<span class="titletag"><a href="' . $site . '/section/switch-2"><img src="' . $path . '/img/titletags/switch-2.png" alt="Switch 2" height="32"></a></span>';
		}
		if (in_category('dungeons-and-dragons')) {
			echo '<span class="titletag"><a href="' . $site . '/section/dungeons-and-dragons"><img src="' . $path . '/img/titletags/dungeons-and-dragons.png" alt="Dungeons &amp; Dragons" height="32"></a></span>';
		}
		if (in_category('ace-attorney')) {
			echo '<span class="titletag"><a href="' . $site . '/section/ace-attorney"><img src="' . $path . '/img/titletags/ace-attorney.png" alt="Ace Attorney" height="32"></a></span>';
		}
		if (in_category('pokemon')) {
			// If also in the Pokémon Presents category, we don't need to show this
			if (!in_category('pokemon-presents')) {
				echo '<span class="titletag"><a href="' . $site . '/section/pokemon"><img src="' . $path . '/img/titletags/pokemon.png" alt="Pok&eacute;mon" height="32"></a></span>';
			}
		}
		if (in_category('persona')) {
			echo '<span class="titletag"><a href="' . $site . '/section/persona"><img src="' . $path . '/img/titletags/persona.png" alt="Persona" height="32"></a></span>';
		}
		if (in_category('forthegaymers')) {
			echo '<span class="titletag"><a href="' . $site . '/section/forthegaymers"><img src="' . $path . '/img/titletags/forthegaymers.png" alt="&num;ForTheGaymers" height="32"></a></span>';
		}
	}

	// Priority 2 and 1 - Subcategories and parent categories
	if (in_category('news')) {
		if (in_category('links')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/links"><img src="' . $path . '/img/titletags/link.png" alt="Link" height="32"></a></span></span>';
		} else if (in_category('live-updates')) {
			// If also in the Live category, we don't need to show this
			if (!in_category('live')) {
				echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/live-updates"><img src="' . $path . '/img/titletags/live-updates.png" alt="Live updates" height="32"></a></span></span>';
			}
		} else if (in_category('rumours')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/rumours"><img src="' . $path . '/img/titletags/rumour.png" alt="Rumour" height="32"></a></span></span>';
		} else if (in_category('site-updates')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/site-updates"><img src="' . $path . '/img/titletags/site-update.png" alt="Site update" height="32"></a></span></span>';
		} else if (in_category('updates')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/updates"><img src="' . $path . '/img/titletags/update.png" alt="Update" height="32"></a></span></span>';
		} else if (in_category('videos')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news-icon.png" alt="News | " height="32" title="News"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/videos"><img src="' . $path . '/img/titletags/video.png" alt="Video" height="32"></a></span></span>';
		} else {
			echo '<span class="titletag"><a href="' . $site . '/section/news"><img src="' . $path . '/img/titletags/news.png" alt="News" height="32"></a></span>';
		}

		// Priority 3 - Updated news articles
		if (in_category('updated')) {
			// If also in the Updates category, it'd be confusing to show this, so we won't
			if (!in_category('updates')) {
				echo '<span class="titletag"><img src="' . $path . '/img/titletags/updated.png" alt="Update" height="32" class="no-hover"></span>';
			}
		}
	}
	if (in_category('features')) {
		if (in_category('guest-blogs')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/features"><img src="' . $path . '/img/titletags/feature-icon.png" alt="Feature | " height="32" title="Feature"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/guest-blogs"><img src="' . $path . '/img/titletags/guest-blog.png" alt="Guest blog" height="32"></a></span></span>';
		} else if (in_category('guides')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/features"><img src="' . $path . '/img/titletags/feature-icon.png" alt="Feature | " height="32" title="Feature"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/guides"><img src="' . $path . '/img/titletags/guide.png" alt="Guide" height="32"></a></span></span>';
		} else if (in_category('interviews')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/features"><img src="' . $path . '/img/titletags/feature-icon.png" alt="Feature | " height="32" title="Feature"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/interviews"><img src="' . $path . '/img/titletags/interview.png" alt="Interview" height="32"></a></span></span>';
		} else if (in_category('opinions')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/features"><img src="' . $path . '/img/titletags/feature-icon.png" alt="Feature | " height="32" title="Feature"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/opinions"><img src="' . $path . '/img/titletags/opinion.png" alt="Opinion" height="32"></a></span></span>';
		} else {
			echo '<span class="titletag"><a href="' . $site . '/section/features"><img src="' . $path . '/img/titletags/feature.png" alt="Feature" height="32"></a></span>';
		}
	}
	if (in_category('reviews')) {
		if (in_category('first-impressions')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/reviews"><img src="' . $path . '/img/titletags/review-icon.png" alt="Review | " height="32" title="Review"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/first-impressions"><img src="' . $path . '/img/titletags/first-impressions.png" alt="First impressions" height="32"></a></span></span>';
		} else if (in_category('hands-on')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/reviews"><img src="' . $path . '/img/titletags/review-icon.png" alt="Review | " height="32" title="Review"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/hands-on"><img src="' . $path . '/img/titletags/hands-on.png" alt="Hands on" height="32"></a></span></span>';
		} else if (in_category('previews')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/reviews"><img src="' . $path . '/img/titletags/review-icon.png" alt="Review | " height="32" title="Review"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/previews"><img src="' . $path . '/img/titletags/preview.png" alt="Preview" height="32"></a></span></span>';
		} else if (in_category('second-looks')) {
			echo '<span class="tt-inline-block"><span class="titletag icon-only"><a href="' . $site . '/section/reviews"><img src="' . $path . '/img/titletags/review-icon.png" alt="Review | " height="32" title="Review"></a></span><span class="titletag after-icon"><a href="' . $site . '/section/second-looks"><img src="' . $path . '/img/titletags/second-look.png" alt="Second look" height="32"></a></span></span>';
		} else {
			echo '<span class="titletag"><a href="' . $site . '/section/reviews"><img src="' . $path . '/img/titletags/review.png" alt="Review" height="32"></a></span>';
		}
	}

	// Fallback
	if (in_category('uncategorized') || !has_category()) {
		echo '<span class="titletag"><img src="' . $path . '/img/titletags/critical-chicken.png" alt="Critical Chicken" height="32" class="no-hover"></span>';
	}
}


// Calculate average mainline Pokémon games per year

// Pairs of games count as one game
function pkmnAvg() {
	$howManyGames = 21;
	$redGreen = '1996-02-27';
	$years = floor((time() - strtotime($redGreen)) / 31556926);
	$avg = $years / $howManyGames;

	echo number_format((float)$avg, 2, '.', '');
}


// "Explore the X section" helper

// This can (and should) be optimised over time,
// with each new theme version.

function moreInThisSection() {
	$theCategory = get_queried_object()->slug;
	$siteUrl = get_site_url();
	$path = get_template_directory_uri();
	$link1 = '';
	$link2 = '';
	$link3 = '';
	$link4 = '';
	$link5 = '';
	$link6 = '';
	$link7 = '';

	if ($theCategory == 'features' || $theCategory == 'guest-blogs' || $theCategory == 'guides' || $theCategory == 'interviews' || $theCategory == 'opinions') {
		$theClass = 'features';
		$theTitle = '<img src="' . $path . '/img/sections/features-icon.png" alt="" width="23" height="23">Explore the Features section';
		if($theCategory != 'features') {
			$link1 = '<a href="' . $siteUrl . '/section/features" class="more-in-section hover-out big">All Features</a>';
		}
		if($theCategory != 'guest-blogs') {
			$args=array('category'=>11,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link2 = '<a href="' . $siteUrl . '/section/guest-blogs" class="more-in-section hover-out">Guest blogs</a>';
			}
		}
		if($theCategory != 'guides') {
			$link3 = '<a href="' . $siteUrl . '/section/guides" class="more-in-section hover-out">Guides</a>';
		}
		if($theCategory != 'interviews') {
			$args=array('category'=>15,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link4 = '<a href="' . $siteUrl . '/section/interviews" class="more-in-section hover-out">Interviews</a>';
			}
		}
		if($theCategory != 'opinions') {
			$link5 = '<a href="' . $siteUrl . '/section/opinions" class="more-in-section hover-out">Opinions</a>';
		}
	} else if ($theCategory == 'news' || $theCategory == 'links' || $theCategory == 'live-updates' || $theCategory == 'rumours' || $theCategory == 'site-updates' || $theCategory == 'updates' || $theCategory == 'videos') {
		$theClass = "news";
		$theTitle = '<img src="' . $path . '/img/sections/news-icon.png" alt="" width="27" height="23">Explore the News section';
		if($theCategory != 'news') {
			$link1 = '<a href="' . $siteUrl . '/section/news" class="more-in-section hover-out big">All News</a>';
		}
		if($theCategory != 'links') {
			$args=array('category'=>16,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link2 = '<a href="' . $siteUrl . '/section/links" class="more-in-section hover-out">Links</a>';
			}
		}
		if($theCategory != 'live-updates') {
			$args=array('category'=>18,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link3 = '<a href="' . $siteUrl . '/section/live-updates" class="more-in-section hover-out">Live updates</a>';
			}
		}
		if($theCategory != 'rumours') {
			$link4 = '<a href="' . $siteUrl . '/section/rumours" class="more-in-section hover-out">Rumours</a>';
		}
		if($theCategory != 'site-updates') {
			$link5 = '<a href="' . $siteUrl . '/section/site-updates" class="more-in-section hover-out">Site updates</a>';
		}
		if($theCategory != 'updates') {
			$args=array('category'=>29,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link6 = '<a href="' . $siteUrl . '/section/updates" class="more-in-section hover-out">Updates</a>';
			}
		}
		if($theCategory != 'videos') {
			$link7 = '<a href="' . $siteUrl . '/section/videos" class="more-in-section hover-out">Videos</a>';
		}
	} else if ($theCategory == 'reviews' || $theCategory == 'first-impressions' || $theCategory == 'hands-on' || $theCategory == 'previews' || $theCategory == 'second-looks') {
		$theClass = "reviews";
		$theTitle = '<img src="' . $path . '/img/sections/reviews-icon.png" alt="" width="31" height="23">Explore the Reviews section';
		if($theCategory != 'reviews') {
			$link1 = '<a href="' . $siteUrl . '/section/reviews" class="more-in-section hover-out big">All Reviews</a>';
		}
		if($theCategory != 'first-impressions') {
			$link2 = '<a href="' . $siteUrl . '/section/first-impressions" class="more-in-section hover-out">First impressions</a>';
		}
		if($theCategory != 'hands-on') {
			$args=array('category'=>14,'numberposts'=>'1','post_status'=>'publish');$recent_posts=wp_get_recent_posts($args);foreach($recent_posts as $recent){
				$link3 = '<a href="' . $siteUrl . '/section/hands-on" class="more-in-section hover-out">Hands on</a>';
			}
		}
		if($theCategory != 'previews') {
			$link4 = '<a href="' . $siteUrl . '/section/previews" class="more-in-section hover-out">Previews</a>';
		}
		if($theCategory != 'second-looks') {
			$link5 = '<a href="' . $siteUrl . '/section/second-looks" class="more-in-section hover-out">Second looks</a>';
		}
	} else if ($theCategory == 'e3-2016' || $theCategory == 'e3-2021' || $theCategory == 'e3-2023') {
		$theClass = "e3";
		$theTitle = '<img src="' . $path . '/img/sections/e3-icon.png" alt="" width="35" height="26">Explore our E3 coverage';
		// These ones go from newest to oldest
		if($theCategory != 'e3-2023') {
			$link1 = '<a href="' . $siteUrl . '/section/e3-2023" class="more-in-section hover-out big">E3&rsquo;s future</a>';
		}
		if($theCategory != 'e3-2021') {
			$link2 = '<a href="' . $siteUrl . '/section/e3-2021" class="more-in-section hover-out">E3 2021</a>';
		}
		if($theCategory != 'e3-2016') {
			$link3 = '<a href="' . $siteUrl . '/section/e3-2016" class="more-in-section hover-out">E3 2016</a>';
		}
	}

	if (isset($theClass)) {
		echo '<div id="more-categories" class="' . $theClass . '"><h2>' . $theTitle . '</h2><div>' . $link1 . $link2 . $link3 . $link4 . $link5 . $link6 . $link7 .'</div><a href="' . $siteUrl . '/explore" class="sidebar-link hover-out">Explore all sections</a></div>';
	} else {
		echo '<div id="more-categories" class="bluesky"><h2><span></span>Are you following us on Bluesky yet?</h2><a href="https://bsky.app/profile/criticalchicken.com" class="sidebar-link hover-out" target="_blank" rel="external me">We&rsquo;re @criticalchicken.com</a><a href="https://bsky.app/profile/did:plc:dhwhyqvsvsa7vhdgx2ajbvkk/feed/ace-attorney" class="sidebar-link hover-out" target="_blank" rel="external me">We run the &num;AceAttorney Feed, too</a></div>';
	}
}
















// Admin announcements box
function is_site_admin_cockatiel(){
	return in_array('administrator', wp_get_current_user()->roles);
}
function v2_admin_ticker_cockatiel() {
	$message = '';
	if(get_option('cc_ticker_display') == 'on') {
		$type = get_option('cc_ticker_titletag_special');
		$item1 = '';
		$item2 = '';
		$item3 = '';
		$item4 = '';
		$item5 = '';
		$item6 = '';
		$item7 = '';
		$item8 = '';
		$item9 = '';
		$item10 = '';
		$link = '';
		$link2 = '';
		if($type == 'ace-attorney') {
			$title = 'Ace Attorney';
		} else if($type == 'breaking-news') {
			$title = 'Breaking news';
		} else if($type == 'switch-2') {
			$title = 'Switch 2';
		} else if($type == 'dungeons-and-dragons') {
			$title = 'Dungeons &amp; Dragons';
		} else if($type == 'e3-2023') {
			$title = 'E3&rsquo;s future';
		} else if($type == 'exclusive') {
			$title = 'Exclusive';
		} else if($type == 'forthegaymers') {
			$title = '&num;ForTheGaymers';
		} else if($type == 'live') {
			$title = 'Live';
		} else if($type == 'news-alert') {
			$title = 'News alert';
		} else if($type == 'nintendo-direct') {
			$title = 'Nintendo Direct';
		} else if($type == 'persona') {
			$title = 'Persona';
		} else if($type == 'pokemon') {
			$title = 'Pok&eacute;mon';
		} else if($type == 'pokemon-presents') {
			$title = 'Pok&eacute;mon Presents';
		} else if($type == 'state-of-play') {
			$title = 'State of Play';
		} else if($type == 'summer-game-fest-2024') {
			$title = 'Summer Game Fest 2024';
		}
		if(get_option('cc_ticker_link') != '') {
			$link = '<p class="ticker-link"><a href="' . get_option('cc_ticker_link') . '" target="_blank">Find out more &raquo;</a></p>';
		}
		if(get_option('cc_ticker_item1') != '') {
			$item1 = '<p>' . get_option('cc_ticker_item1') . '</p>';
		}
		if(get_option('cc_ticker_item2') != '') {
			$item2 = '<p>' . get_option('cc_ticker_item2') . '</p>';
		}
		if(get_option('cc_ticker_item3') != '') {
			$item3 = '<p>' . get_option('cc_ticker_item3') . '</p>';
		}
		if(get_option('cc_ticker_item4') != '') {
			$item4 = '<p>' . get_option('cc_ticker_item4') . '</p>';
		}
		if(get_option('cc_ticker_item5') != '') {
			$item5 = '<p>' . get_option('cc_ticker_item5') . '</p>';
		}
		if(get_option('cc_ticker_item6') != '') {
			$item6 = '<p>' . get_option('cc_ticker_item6') . '</p>';
		}
		if(get_option('cc_ticker_item7') != '') {
			$item7 = '<p>' . get_option('cc_ticker_item7') . '</p>';
		}
		if(get_option('cc_ticker_item8') != '') {
			$item8 = '<p>' . get_option('cc_ticker_item8') . '</p>';
		}
		if(get_option('cc_ticker_item9') != '') {
			$item9 = '<p>' . get_option('cc_ticker_item9') . '</p>';
		}
		if(get_option('cc_ticker_item10') != '') {
			$item10 = '<p>' . get_option('cc_ticker_item10') . '</p>';
		}
		if(is_site_admin_cockatiel()) {
			$link2 = '<p class="ticker-link"><a href="https://www.criticalchicken.com/wp-admin/admin.php?page=cc-ticker-editor">Ticker settings &raquo;</a></p>';
		}
		$message = '<div class="notice ticker inline"><p><b>' . $title . '</b></p>' . $item1 . $item2 . $item3 . $item4 . $item5 . $item6 . $item7 . $item8 . $item9 . $item10 . $link . $link2 . '</div>';
	}
    return $message;
}
add_shortcode('v2_admin_ticker', 'v2_admin_ticker_cockatiel');
function v2_admin_mmode_cockatiel() {
	$message = '';
	$message2 = '<p>As long as you stay logged in, you should still be able to access the Critical Chicken website.</p>';
	$message3 = '';
	if(get_option('cc_mm_display')=='on') {
		if(!current_user_can('edit_posts')) {
			$message2 = '<p>You may not be able to access the Critical Chicken website for a while.</p>';
		}
		if(is_site_admin_cockatiel()) {
			$message3 = '<p><a href="https://www.criticalchicken.com/wp-admin/admin.php?page=cc-mm-editor">Maintenance mode settings &raquo;</a></p>';
		}
		$message = '<div class="notice inline mm"><p><b>Maintenance mode is enabled</b></p>' . $message2 . $message3 . '</div>';
	}
	return $message;
}
add_shortcode('v2_admin_mmode', 'v2_admin_mmode_cockatiel');
function v2_admin_emailedit_cockatiel() {
	$message = '<a href="mailto:office@criticalchicken.com" rel="me" class="iconic email" title="Email the admins"><img src="https://www.criticalchicken.com/wp-content/themes/V2-1/img/admin/iconic-email.png" width="30" height="30" alt="Email"></a>';
	if(is_site_admin_cockatiel()) {
		$message = '<a href="https://www.criticalchicken.com/wp-admin/admin.php?page=cc-adminnouncement-editor" class="iconic edit" title="Edit these announcements"><img src="https://www.criticalchicken.com/wp-content/themes/V2-1/img/admin/iconic-edit.png" width="30" height="30" alt="Edit"></a>';
	}
	return $message;
}
add_shortcode('v2_admin_emailedit', 'v2_admin_emailedit_cockatiel');
function v2_adminnouncement_cockatiel() {
	$message = '';
	if(get_option('cc_adminnouncement_display') == 'on') {
		$item1 = '';
		$item2 = '';
		$item3 = '';
		$item4 = '';
		$item5 = '';
		$item6 = '';
		$item7 = '';
		$item8 = '';
		$item9 = '';
		$item10 = '';
		if(get_option('cc_adminnouncement_item1') != '') {
			$item1 = '<p>' . get_option('cc_adminnouncement_item1') . '</p>';
		}
		if(get_option('cc_adminnouncement_item2') != '') {
			$item2 = '<p>' . get_option('cc_adminnouncement_item2') . '</p>';
		}
		if(get_option('cc_adminnouncement_item3') != '') {
			$item3 = '<p>' . get_option('cc_adminnouncement_item3') . '</p>';
		}
		if(get_option('cc_adminnouncement_item4') != '') {
			$item4 = '<p>' . get_option('cc_adminnouncement_item4') . '</p>';
		}
		if(get_option('cc_adminnouncement_item5') != '') {
			$item5 = '<p>' . get_option('cc_adminnouncement_item5') . '</p>';
		}
		if(get_option('cc_adminnouncement_item6') != '') {
			$item6 = '<p>' . get_option('cc_adminnouncement_item6') . '</p>';
		}
		if(get_option('cc_adminnouncement_item7') != '') {
			$item7 = '<p>' . get_option('cc_adminnouncement_item7') . '</p>';
		}
		if(get_option('cc_adminnouncement_item8') != '') {
			$item8 = '<p>' . get_option('cc_adminnouncement_item8') . '</p>';
		}
		if(get_option('cc_adminnouncement_item9') != '') {
			$item9 = '<p>' . get_option('cc_adminnouncement_item9') . '</p>';
		}
		if(get_option('cc_adminnouncement_item10') != '') {
			$item10 = '<p>' . get_option('cc_adminnouncement_item10') . '</p>';
		}
		$message = '<div class="notice adminnouncement inline">' . $item1 . $item2 . $item3 . $item4 . $item5 . $item6 . $item7 . $item8 . $item9 . $item10 . '</div>';
	}
    return $message;
}
add_shortcode('v2_adminnouncement', 'v2_adminnouncement_cockatiel');


// Writer page avatars
function writer_page_avatar() {
	$which_writer = get_the_author_meta('ID');
	$site = get_site_url();
	$path = get_template_directory_uri();
    // Fallback avatar if no Gravatar is set
	$avatar1 = '<img src="' . $path . '/img/icon-avatar-missing.png" class="avatar avatar-64 photo" height="64" width="64" alt="">';
	$avatar2 = '';
    if(get_avatar($which_writer)) {
		if($which_writer == 3) {
			$avatar1 = get_avatar(1, 64);
			$avatar2 = get_avatar(2, 64);
		} else {
			$avatar1 = get_avatar($which_writer, 64);
		}
    }
	echo $avatar1 . $avatar2;
}


// Get Users' Gravatars (or a placeholder)
function radar_player($_atts) {
    $defaults = array(
        'name' => '',
    );
    $atts = shortcode_atts( $defaults, $_atts );
	$site = get_site_url();
	$path = get_template_directory_uri();
    // Fallback avatar if no Gravatar is set
	$avatar = '<img src="' . $path . '/img/icon-avatar-missing.png" class="avatar avatar-64 photo" height="64" width="64" alt="">';
    // Fallback if someone messes up the shortcode
    $message = '';
    if(get_user_by('login', $atts['name']) && $atts['name']) {
        $user_data = get_user_by('login', $atts['name']);
        if(get_avatar($user_data->ID)) {
            $avatar = get_avatar($user_data->ID, 64);
        }
        $message = '<a href="' . $site . '/writer/' . $atts['name'] . '" rel="author" title="'. $user_data->display_name . '" class="whos-playing hover-out">' . $avatar . '</a>';
    }
	return $message;
}
add_shortcode('radar_player', 'radar_player');






