$(document).ready(function(){
	$('.post-card p').each(function(index){
		var len = $(this).text().length;
		if(len >= 120){
			$(this).text($(this).text().substring(0,120) + '...');
		}
	});
	$('#filterModal').modal({
		show:false,
		backdrop:'static'
	});
	$('.mdb-select').material_select();
});