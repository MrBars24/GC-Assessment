$('.post-card p').each(function(index){
	var len = $(this).text();
	$(this).text($(this).text().substring(0,200) + '...');
});