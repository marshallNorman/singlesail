$(function(){
	
	/*
		#####################################
		#	Version 1.0.6
		#####################################
	*/
	
	//Vertical Sliding
	$('.projectImg.captionfull').hover(function(){
		$(".cover", this).stop().animate({top:'151px'},{queue:false,duration:300});
	}, function() {
		$(".cover", this).stop().animate({top:'196px'},{queue:false,duration:500});
	});
	
	//Thumbnail Click Event
	$('.projectImg a').click(function(){
		str = '#'+$(this).attr('rel');
		$('#thumbNails').fadeOut(300,function() {
		$('body').scrollTop(0);
		});
		$(str).delay(300).effect("slide",{ direction: "left" },"slow").toggleClass("hidden");
	});	
	
	//Details Back Button
	$('.backBtn').click(function(){
		$(this).parent('div').effect("slide",{ direction: "left",mode: "hide" },"slow").toggleClass("hidden");
		$('#thumbNails').delay(1000).fadeIn(300);
	});
	
	//Details Back ButtonA
	$('.backBtnA').click(function(){
		$('.detail').effect("slide",{ direction: "left",mode: "hide" },"slow").toggleClass("hidden");
		$('#thumbNails').delay(1000).fadeIn(300);
	});
	
	//Branding Back
	$('#branding').click(function(){
		if ($.address.value().substr(1) != "") 
		{		str = "#"+$.address.value();		
		if ((str == "#thanks") || (str == "#contact")) {			
		obj = $(str);		
		} else {			
		hideThis = "#"+$("a[href="+str+"]").attr('rel');			
		obj = $(hideThis);		
		}		
		$(obj).effect("slide",{ direction: "left",mode: "hide" },"slow");	
		}	
		$('#thumbNails').delay(1000).fadeIn(300);
		});
	
	
	//Contact Click Event
	$('.contact').click(function(){
		str = '#'+$(this).attr('rel');
		$('#thumbNails').fadeOut(300);
		if ($.address.value().substr(1) != "") {
			str2 = "#"+$.address.value();
			loadThis = "#"+$("a[href="+str2+"]").attr('rel');
			$(loadThis).effect("slide",{ direction: "left",mode: "hide" },"slow").toggleClass("hidden");
		}
		$(str).delay(300).effect("slide",{ direction: "left" },"slow");
	});

	//Check for a direct link to a portfolio piece....
	if ($.address.value().substr(1) != "") {
		$('#thumbNails').fadeOut(300);
		str = "#"+$.address.value();
		if (str == "#thanks") {
			loadThis = str
		} else {
			loadThis = "#"+$("a[href="+str+"]").attr('rel');
		}
		$(loadThis).delay(300).effect("slide",{ direction: "left" },"slow");
	}
});