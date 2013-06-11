$(document).ready(function(e) {

	$(".topiclistTitle").each(function(n) {
		var name = $(this).attr('data-title');
//		console.log(name);
		if($.cookie(name) == '1') {
			$('ul[data-forum="'+name+'"]').hide();
		} else {
			$('ul[data-forum="'+name+'"]').show();
		}
	});	  
    
	$('.topiclistTitle').click(function(){
		var name = $(this).attr('data-title');
		console.log(name);
//		$('ul[data-forum="'+name+'"]').hide();
			
		if($.cookie(name) == '1') {
			$('ul[data-forum="'+name+'"]').show();
			$.cookie(name, '0');
		} else {
			$('ul[data-forum="'+name+'"]').hide();
			$.cookie(name, '1', {expires:7, path:'/board'});
		}

	});
	
	if ($.cookie('mChatHeight')){
		$('#mChatmain').height($.cookie('mChatHeight'));
	}
});
