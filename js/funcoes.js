$(document).ready(function(){
    $(".group1").colorbox({rel:'group1'});
	//Examples of how to assign the Colorbox event to elements
	$(".gallery a").colorbox({rel:'gallery', transition:"fade", width: "85%", maxHeight: "85%", current: "Foto {current} de {total}", title: function(){ return $(this).children('img').attr('alt'); } });
	$(".callbacks").colorbox({
		onOpen:function(){ alert('onOpen: colorbox is about to open'); },
		onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
		onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
		onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
		onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
	});
				
	//Example of preserving a JavaScript event for inline calls.
	$("#click").click(function(){ 
		$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
		return false;
	});

});
$('a[href^="#"]').click(function () {
    $('html, body').animate({ scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top}, 500);

    return false;
});

// Floating label headings for the contact form
$(function() {
	$("body").on("input propertychange", ".floating-label-form-group", function(e) {
    $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
   	}).on("focus", ".floating-label-form-group", function() {
    $(this).addClass("floating-label-form-group-with-focus");
   	}).on("blur", ".floating-label-form-group", function() {
    $(this).removeClass("floating-label-form-group-with-focus");
	});
});