// JavaScript Document

/*
Copyright (C) Critical Chicken. All rights reserved.
Critical Chicken, the Critical Chicken logo and wordmark, and #ForTheGaymers are trademarks of Critical Chicken.
All other trademarks referred to are trademarks of their respective owners.
*/

// Help user refresh the page if there's a poll error
$('.error-link').click(function() {
    window.location.reload();
});

// Make the search button work
$("#nav_context li.search a").click(function() {
    $("body").addClass("searching");
	$("input#s").focus();
});
$("div#search-box-close-button").click(function() {
    $("body").removeClass("searching");
	$("input#s").blur();
	$("input#ss").blur();
});

// Make the "back to top" button smooooooth
$("#back-to-top").click(function() {
    $("html, body").animate({scrollTop: 0}, 1200);
});

// Display the page load time
var beforeload = (new Date()).getTime();

function getPageLoadTime(){

	var r_text = new Array ();
	r_text[0] = "was built and paid for by Mexico";
	r_text[1] = "was coughed up by your nan’s cat";
	r_text[2] = "was performed by the London Symphony Orchestra";
	r_text[3] = "was coded in real time by one really stressed dude";
	r_text[4] = "was shot through a series of tubes";
	r_text[5] = "was dreamed up by a coma patient";
	r_text[6] = "was re-released in stunning high definition";
	r_text[7] = "was delivered by your DPD driver Chris";
	r_text[8] = "was passed down through the generations";
	r_text[9] = "was dredged from the internet swamp";
	r_text[10] = "was scraped from the bottom of the barrel";
	r_text[11] = "was speedrun by a Japanese guy";
	r_text[12] = "was universally panned by critics";
	r_text[13] = "was written by renowned author Dan Brown";
	r_text[14] = "was hastily thrown together by Game Freak inc.";
	r_text[15] = "was copied and pasted off of Wikipedia";
	r_text[16] = "was whittled by a sexy lumberjack";
	r_text[17] = "was commissioned and cancelled by Netflix";
	r_text[18] = "was gifted, then immediately regifted";
	r_text[19] = "was fashioned from twigs and bits of string";
	r_text[20] = "was straightwashed by a historian";
	r_text[21] = "was hot glue-gunned to death by a suburban mom";
	r_text[22] = "was booed off stage at an open-mic night";
	r_text[23] = "was foretold by a biblically-accurate seraphim";
	r_text[24] = "was adapted into a major motion picture";
	r_text[25] = "was bought out and ruined by Elon Musk";
	r_text[26] = "fell afoul of X’s rules against Hateful Conduct";
	r_text[27] = "is for YOUR eyes only, and will self-destruct";
	r_text[28] = "was mocked by 4chan for “looking like a PS2 game”";
	r_text[29] = "will be re-released as “This Page: GoTY Edition”";

	var i = Math.floor(r_text.length * Math.random());
	var afterload = (new Date()).getTime();
    seconds = (afterload-beforeload) / 1000;
	if(seconds == 1) {
		var plurality = ".";
	} else {
		var plurality = "s.";
	}
    $("#load_time").text('This page ' + r_text[i] + ' in ' + seconds + ' second' + plurality);
}

// Add a comma to the Ace Attorney day counter
$.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}

// Correct pluralisation for vote(s) in WP Polls results
$('li.poll-result small').each(function() {
    var text = $(this).text();
    text = text.replace('(1 votes', '(1 vote');
    $(this).text(text); 
});

// Reformat dates on Poll archive page
$('.poll-archive .poll-start-date').each(function() {
	var input = $(this).text();
	var splitAfterDay = input.split(', ');
	var splitBeforeTime = splitAfterDay[1].split(' @');
	var middleformDate = splitBeforeTime[0];
	$(this).text(middleformDate);
})

// Add "and" before the last tag in the list
$('span.post-meta-tags').each(function() {
	if($('span.post-meta-tags a').length > 1) {
		$("span.post-meta-tags a:last-of-type").before("and ");
	}
});

// Add a title attribute to 'green tick' verified comments
$('#top-comments .comment-author-link a').each(function() {
	$(this).attr('title', 'Staff member');
});
$('span.comment-author a').each(function() {
	$(this).attr('title', 'Staff member');
});

// Remove h3 tag from YARPP related posts
$('div.yarpp h3').each(function() {
	$(this).remove();
});

// Poll archive fallback - annoying, but necessary
$('.poll-archive .wp-polls').each(function() {
	if(!$('.one-archived-poll').length) {
		$(this).html('<p class="no-polls-in-archive">We couldn&rsquo;t find any completed polls to show you.</p><p class="no-polls-in-archive">You can head to the <a href="https://www.criticalchicken.com">homepage</a> to take part in this week&rsquo;s poll.</p>');
	}
});


// Automatically resize textareas
$("textarea").each(function () {
	if($('p.logged-in-as').length) {
		this.setAttribute("placeholder", "What’s on your mind?");
	} else {
		this.setAttribute("placeholder", "So we know what’s on your mind");
	}
	this.setAttribute("title", "");
	this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
}).on("input", function () {
	this.style.height = 0;
	this.style.height = (this.scrollHeight) + "px";
});
$("p.comment-form-author input").each(function () {
	this.setAttribute("placeholder", "So we know what to call you");
	this.setAttribute("title", "");
});
$("p.comment-form-email input").each(function () {
	this.setAttribute("placeholder", "So we know you’re not a spammer");
	this.setAttribute("title", "");
});

// Trigger functions when ONLY the DOM has loaded
$(document).ready(function() {
	$(".since-soj").digits();

	// Add title attributes to pagination buttons
	$('a.nextpostslink').attr('title', 'Older posts');
	$('a.previouspostslink').attr('title', 'Newer posts');
	$('a.last').attr('title', 'Oldest posts');
	$('a.first').attr('title', 'Newest posts');

	// Nav hover effects
	$('#nav_main a.latest').mouseenter(function() {
		var optionalClass = $('#nav_timed a.special').attr('name');
		$('.nav_background').removeClass('special');
		$('.nav_background').removeClass(optionalClass);
		$('.nav_background').addClass('latest');
		$('.nav_inner').addClass('latest');
	});
	$('#nav_main a.latest').mouseleave(function() {
		$('.nav_inner').removeClass('latest');
	});
	$('#nav_main a.news').mouseenter(function() {
		$('.nav_inner').addClass('news');
	});
	$('#nav_main a.news').mouseleave(function() {
		$('.nav_inner').removeClass('news');
	});
	$('#nav_main a.features').mouseenter(function() {
		$('.nav_inner').addClass('features');
	});
	$('#nav_main a.features').mouseleave(function() {
		$('.nav_inner').removeClass('features');
	});
	$('#nav_main a.reviews').mouseenter(function() {
		$('.nav_inner').addClass('reviews');
	});
	$('#nav_main a.reviews').mouseleave(function() {
		$('.nav_inner').removeClass('reviews');
	});
	$('#nav_timed a.special').mouseenter(function() {
		var optionalClass = $('#nav_timed a.special').attr('name');
		$('.nav_background').removeClass('latest');
		$('.nav_background').addClass('special');
		$('.nav_background').addClass(optionalClass);
		$('.nav_inner').addClass('special');
	});
	$('#nav_timed a.special').mouseleave(function() {
		$('.nav_inner').removeClass('special');
	});

	// Other hover effects
	$('#jumbotron-link').mouseenter(function() {
		$('#jumbotron-inner').addClass('hovering');
	});
	$('#jumbotron-link').mouseleave(function() {
		$('#jumbotron-inner').removeClass('hovering');
	});
	$('span.titletag a').mouseenter(function() {
		$(this).addClass('hovering');
	});
	$('span.titletag a').mouseleave(function() {
		$(this).removeClass('hovering');
	});
});

// Initialise iTyped
ityped.init('#ityped',{
	strings:[
		'your favourite game',
		'shirtless Link',
		'some bedtime reading',
		'winning strategies',
		'the latest news',
		'a snarky review or two'
	], loop: true, showCursor: false});

// Trigger functions when 
$(window).on("load", function() {
	getPageLoadTime();
});

// Clean up the 'logged in as' text
$('p.logged-in-as').each(function() {
    var text = $(this).text();
    text = text.replace('Logged in as ', '');
	text = text.replace('.', '');
	text = text.replace(' Edit your profile. Log out? Required fields are marked *', '!');
    $(this).text(text); 
});