/*Add Participant function*/
var counter = 1;
$(".addform-btn").click(function(){
	if(counter==1) {
		/*Add Participant Header to 1st form*/
		$("<h5 class='form-header text-light'>Participant "+counter+"</h5>")
		.hide()
		.prependTo(".form-container")
		.show("normal")
		counter++;
		/*Add Participant Header to next form*/
		$("<hr><h5 class='form-header text-light'>Participant "+counter+" <button type='button' class='close close-form'>&times;</button></h5>")
		.hide()
		.appendTo(".form-container")
		.show("normal")
		/*Append new form*/
    	$(".form-group")
    	.last()
    	.clone()
    	.find(".form-control").val("").end()
    	.find(".errmsg").html("").end()
    	.hide()
    	.appendTo(".form-container")
    	.show("normal")
	}
	else if (counter < 5) {
		counter++;
		/*Add Participant Header to next form*/
		$("<hr><h5 class='form-header text-light'>Participant "+counter+" <button type='button' class='close close-form'>&times;</button></h5>")
		.hide()
		.appendTo(".form-container")
		.show("normal")
		/*Append new form*/
    	$(".form-group")
    	.last()
    	.clone()
    	.find(".form-control").val("").end()
    	.find(".errmsg").html("").end()
    	.hide()
    	.appendTo(".form-container")
    	.show("normal")
	}
	else {
		alert("You can only add up to 5 participants at one time")
	}	
});

/*Remove participant form button*/
$(".form-container").on('click',".close-form",function(){
	/*Remove form*/
	$(this).parent().prev().slideUp('fast', function(){
		$(this).remove()
	})
	$(this).parent().next().slideUp('fast', function(){
		$(this).remove()
	})
	$(this).parent().slideUp('fast', function(){
		$(this).remove()
		renumber()
	})
	counter--;
	if(counter==1) {
			/*Remove 1st header if only 1 is remaining*/
			$(".form-header").slideUp('fast', function(){
			$(this).remove()
		})
	}
	/*Renumber remaining forms after closing an existing form*/
	function renumber() {
		$(".form-header").each(function(i){
			if(i==0) {
				var a = i+1;
				$(this).html("Participant "+a)
			}
			else {
				var a = i+1;
				$(this).html("Participant "+a+"<button type='button' class='close close-form'>&times;</button>")
			}
		})
	}
})

/*Modal agree button*/
$(".modal-agree").click(function(){
	$(".terms-checkbox").attr('checked', true)
})


/*Page Sorter*/
$('.entries-per-page').change(function () {

	var url = new URL(window.location.href);

	url.searchParams.set('page',$('.entries-per-page').val());
	url.searchParams.set('p',1);
	window.location.href = url;

})

$('.page-item.num .page-link').click(function (e) {
	e.preventDefault();
	var val = $(this).html();
	var url = new URL(window.location.href);

	url.searchParams.set('p',val);
	window.location.href = url;

})
