var wScroll = $(this).scrollTop();

	//console.log(wScroll);
	if (wScroll > 10){
		$('#nav').css({
			"background": "linear-gradient(rgb(248,249,250),rgb(248,249,250))",
			"transition" : "0.5s ease",
			"padding-top":"0px",
			"padding-bottom":"0px",
			"box-shadow":"0px 3px 5px rgba(0,0,0,0.5)"
		});
		$('.btn-login','btn-register').css({
			"border": "2px solid #000000"
		});
	}else{
		$('#nav').css({
			"background": "transparent",
			"transition" : "0.5s ease",
			"padding-top":"10px",
			"padding-bottom":"10px",
			"box-shadow":"none"
		});
	}