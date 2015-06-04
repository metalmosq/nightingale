/* retribution scripts */
$(document).ready(function(){
	/*borderSize();*/
	gallery();

	setTimeout(function(){
		contentMid()
	}, 400);

	setTimeout(function(){
		$('.more').css('opacity','1');
	}, 900);

});

$(window).on('resize',function() {
	contentMid();
	borderSize();
});

function borderSize() {
	var containerWidth = $(document).width();
	if (containerWidth < 700) {
		var borderSize = 350;
	} else {
		var borderSize = containerWidth - 600;

		if(borderSize < 800) {
			borderSize = 1000;
		}

		if(borderSize < 400) {
			borderSize = 615;
		}
	}

	$('.corner').css('height',borderSize).css('width',borderSize).css('background-size',borderSize).css('opacity','1');
}

function contentMid() {
	/*var containerHeight = $('.container').height();
	var documentHeight = $(document).height();
	var midpoint = (documentHeight - containerHeight)/2;
	var midpointAdjust = (midpoint)/8;*/

	/*$('.container').css('margin-top', midpoint-midpointAdjust).css('opacity','1');
	$('.footer').css('margin-top', midpointAdjust*2).css('opacity','1');*/
	$('body > .site').css('opacity','1');
}


function gallery() {
	$.each($('.gallery .gallery-item'), function(k, v) {
		var i = k % 7;
	  if (i < 3) {
	    $(this).addClass('gallery-col-3');
	  } else {
	    $(this).addClass('gallery-col-4');
	  }
	});
}