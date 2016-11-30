

jQuery(window).ready(function(){
	window.addEventListener('load', function(){
		var loadScreen = document.getElementById("load_screen");
		setTimeout(function(){
			$(loadScreen).css('opacity','0');
			$(loadScreen).css('z-index','-999');
		},3000);
	});
	// REDIRECTION A GARDER ETEINT
	// var element = $(".overlay-redirect a");
	// var element2 = $(".overlay-redirect p span");
	//
	// TweenMax.to(element, 0.1, {y:"+=5", yoyo:true, repeat:-1});
	// TweenMax.to(element, 0.1, {y:"-=5", yoyo:true, repeat:-1});
	// TweenMax.to(element2, 0.1, {y:"+=5", yoyo:true, repeat:-1});
	// TweenMax.to(element2, 0.1, {y:"-=5", yoyo:true, repeat:-1});
	// throw new Error("You're being redirected!");
	// END REDIRECTION

	// Règle la taille des blocks de vie / armure / etc.
	var bubbleNumber = 0;
	var bubbleBlockWidth = $('.blocks-wrapper').css('width');
	// console.log("Block wrapper = " + bubbleBlockWidth);
	$('.bubble').each(function(){
		bubbleNumber++;
		// console.log(bubbleNumber);
	});
	var bubbleWidth = parseInt(((parseInt(bubbleBlockWidth) / 1.5) / bubbleNumber) - 10);
	// Aide au calcul
	// console.log("La largeur de ma bulle est de >>" + bubbleWidth + "px<<");
	$('.bubble').css('width',bubbleWidth);


	// Se lance au même moment que le chargement de la page
	var bounce_obj = $(".bounce");
	var duration = 1;
	var tl = new TimelineMax({repeat:-1, repeatDelay:1});

	tl.set(bounce_obj, {y: 0})
	.to(bounce_obj, duration / 4, {x:-30, ease:Power2.easeOut}, "bounceme")
	.to(bounce_obj, duration / 2, {x:0, ease:Bounce.easeOut, delay:duration / 4 }, "bounceme");
	//
	// var moment = require('moment');
	// moment().format();
	// var releaseDate = moment.tz('2016/05/23 23:00:00', "Europe/Paris");
	// $('#clock').countdown(releaseDate.toDate(), function(event) {
  //     $(this).html(event.strftime('<h2 class="clock-content"><span id="clock-day">%d</span><span id="clock-hour">%H</span><span id="clock-minute">%M</span><span id="clock-second">%S</span></h2>'));
  //   });

	// var blockHeight = [];
	// $('.skill-block-wrapper').each(function(){
	// 	blockHeight.push($(this).height());
	// });
	var max = 0;
	$('.skill-block-wrapper').each(function()
	{
	   var testVar = parseInt( $(this).height() );
	   if (testVar > max) max = testVar;
	});
	var newMax = max+250;
	$('.charCLR').css('height',newMax);

	var max2 = 0;
	$('.large-value p').each(function(){
		var testVar2 = parseInt( $(this).height() );
 	   if (testVar2 > max2) max2 = testVar2;
	});
	var newMax2 = max2+20;
	$('.large-value').css('min-height',newMax2);


	$( window ).scroll(function() {
		var scrollvalue	= $(this).scrollTop();
		if (scrollvalue >= 70 ){
			if (!($('.site-header').hasClass('scrolled-top'))) {
				$( ".site-header" ).addClass('scrolled-top');
				$('.version-number').addClass('scrolled-vnumber');
				// console.log("J'ajoute la class");
			}
		}
		else if ($('.site-header').hasClass('scrolled-top')) {
			$( '.site-header' ).removeClass('scrolled-top');
			$('.version-number').removeClass('scrolled-vnumber');
			// console.log("Je retire la class");
		}
	});
});

window.isBindingClickEvents = true;

jQuery(document).ready(function(){
	setTimeout(function () {
		// Bouton du menu de gauche (Beta / Alpha)
		TweenMax.to(".version-number", 0.25, {bottom:-15,opacity:1,delay:2});
		// Je fais ma gallery de perso (Home page)
		TweenMax.staggerTo(".home-gallery--wrapper", 0.25, {left:0,opacity:1,ease:"Power4.easeOut"}, 0.05);
		TweenMax.staggerTo(".home-gallery--item", 0.15, {boxShadow:"0px 0px 0px 6px $white;",ease:"Power4.easeOut",delay:0.5}, 0.05);
		TweenMax.staggerTo(".home-gallery--item", 0.15, {boxShadow:"0px 0px 0px 1px $white;",ease:"Power4.easeOut",delay:0.75}, 0.05);
		TweenMax.staggerTo(".home-gallery--item", 0.15, {boxShadow:"0px 0px 0px 3px $white;",ease:"Power4.easeOut",delay:1}, 0.05);
		// Je fais aparaître le titre de la page
		TweenMax.to("h1", 0.5, {left:0,opacity:1,ease:'Power4.easeOut'});
		TweenMax.to('.blue-block-skill', 1, {marginLeft:0,opacity:1, delay:0.5});
		// Je fais apparaître ma barre de vie
		TweenMax.to(".life-block", 0.5, {left:0,opacity:1,ease:'Power4.easeOut',delay:0.5});
		TweenMax.staggerTo(".bubble", 0.25, {opacity:1,ease:"Power1.easeOut", delay:0.5,}, 0.1);
			// delay:3
		// Je fais apparaître mes boutons de skill
		TweenMax.staggerTo(".button-wrap", 0.25, {opacity:1,scale:1,ease:"Power1.easeOut", delay:0.5,}, 0.1);
		// TweenMax.staggerTo(".button-wrap", 0.25, {left:0,ease:"Power4.easeOut", delay:1}, 0.05);
			// delay:2.5
		// Je fais clignoter mes boutons
		// TweenMax.staggerTo(".button-wrap", 0.15, {scale:1.05,delay:2}, 0.05);
		TweenMax.staggerTo(".skill-button", 0.15, {backgroundColor:"rgba(255,255,255,0.85)",delay:2}, 0.05);
		// TweenMax.staggerTo(".button-wrap", 0.15, {scale:0.9,delay:2.5}, 0.05);
		// TweenMax.staggerTo(".button-wrap", 0.15, {scale:1,delay:2.75}, 0.05);
		TweenMax.staggerTo(".skill-button", 0.15, {backgroundColor:"rgba(255,255,255,0.5)",delay:2.5}, 0.05);
		// Je fais aparaître mon footer
		TweenMax.staggerTo(".footer-gallery img", 1, {paddingTop:'2px', opacity:1,ease:Bounce.easeOut,onComplete:stockage}, 0.05);
		TweenMax.staggerTo(".footer-gallery", 0.5, {background:'rgba(255,255,255,0.85)', delay:2.5}, 0.05);
		TweenMax.staggerTo(".footer-gallery", 0.5, {background:'rgba(255,255,255,0)', delay:3}, 0.05);
		TweenMax.staggerTo(".prefooter-list h6", 0.25, {top:'50px',opacity:0, delay:1.25,transform:'rotate(0deg)'}, 0.05);
		// Je fais aparaître la catégorie du perso sur sa page
		TweenMax.to('.cat-icon', 3, {left:-230,opacity:0.35, delay:0.5,ease:Power4.easeOut});

		var hasSeen = sessionStorage.getItem("hasSeen");
		if (!hasSeen) {
			// Je fais aparaître la gallerie de perso dans le footer
			TweenMax.staggerTo(".prefooter-list h6", 0.04, {opacity:1, delay:0.75}, 0.05);
		}

		function stockage(){
			var hasSeen = 'true';
			sessionStorage.setItem("hasSeen", hasSeen);
		}
window.isBindingClickEvents = false;

	}, 500);


	var skillTable = [];
	$('.skill-button').each(function(){
		skillTable.push($(this).attr('id').replace('-button',''));
	});

	// Controle de la flèche indicative
	var arrowGone = false;
	$('.skill-button').click(function(){
		// Faire partir la flèche indicative
		// Si la fleche n'est pas indiquée comme partie
		if ((!arrowGone) && (!($(this).hasClass('disabled')))) {
			TweenMax.to(".arrow", 2, {left:-500,opacity:0,ease:'Power4.easeOut'});
			return arrowGone;
		}
	});


	// Au moment où je clic
	$('.skill-button').click(function(){
		// J'insère le nom de mes skill dans le tableau
		var selectedSkill = ($(this).attr('id').replace('-button',''));
		// Je récupère le nom du skill sélectionné
		// Si c'est un bouton disabled
		if ($(this).hasClass('disabled')) {return false;}
		// Sinon
		else {
			// var postUri = document.URL;
			// console.log(postUri+'#'+selectedSkill);
			// J'effectue une transition
			TweenMax.to('#'+selectedSkill+'-block', 0.5, {left:0,top:0,opacity:1});
			// TweenMax.to('#'+selectedSkill+'-button img', 0.15, {left:-15,top:-65});

			var i, skillSelection;
			for (i=0;i<skillTable.length;i++) {
				// Je défini skillSelection comme étant la skill dans le tableau à ce moment
				skillSelection = skillTable[i];
				// Si les 2 noms sont identiqus
				if (skillSelection == selectedSkill) {
					// J'active mon bloc
					TweenMax.to('#'+skillSelection+'-block', 0.75, {left:0,opacity:1,ease:Power4.easeOut});
					$('#'+skillSelection+'-block').addClass('skill-block-active');
				}
				else {
					TweenMax.to('#'+skillSelection+'-block', 0.25, {left:-50,opacity:0, ease:Power1.easeOut});
					$('#'+skillSelection+'-block').removeClass('skill-block-active');
				}
				if (skillSelection == selectedSkill) {
					$('#'+skillSelection+'-button').addClass('activated-button');
				}
				else {
					$('#'+skillSelection+'-button').removeClass('activated-button');
				}
			}
		}
	});



});
