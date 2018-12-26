$('.list-criteria').ready(function() {
	$('.radio-item #r-s-1').hover(function() {
		$(this).parent($(this)).attr('title', 'Hoàn toàn không đồng ý');
	}, function() {
		$(this).removeAttr('title');
	});
	$('.radio-item #r-s-2').hover(function() {
		$(this).parent($(this)).attr('title', 'Không đồng ý');
	}, function() {
		$(this).removeAttr('title');
	});
	$('.radio-item #r-s-3').hover(function() {
		$(this).parent($(this)).attr('title', 'Bình thường');
	}, function() {
		$(this).removeAttr('title');
	});
	$('.radio-item #r-s-4').hover(function() {
		$(this).parent($(this)).attr('title', 'Đồng ý');
	}, function() {
		$(this).removeAttr('title');
	});
	$('.radio-item #r-s-5').hover(function() {
		$(this).parent($(this)).attr('title', 'Hoàn toàn đồng ý');
	}, function() {
		$(this).removeAttr('title');
	});

	var countItem = $('.list-criteria .item-criteria');
	var i = 0;
	$.each(countItem,function(index, el) {
		i++;
	});

	// xử lý progress
	var valProgress = 0;
	var countChecked = function() {	
	  	var count = $( "input:checked" ).length;
	  	valProgress = (count/i)*100 + '%';
	  	$('.progress-bar').css('width', valProgress);
	  	$('.progress-bar').text(valProgress);
	  	if (valProgress == '100%') {
	  		$('.progress-bar').text('');
	  		$('.progress-bar').text("Hoàn thành !")
	  		$('.progress-bar').css('font-weight','bold');
	  	}
	};
	countChecked();
	$('input[type=radio]').on( "click", countChecked);

	// end progres
});