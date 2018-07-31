function submitRate(){
	var total=4;
	var rate=0;

	//get user input

	var a = document.forms["ratecar"]["Confort"].value;
	var b = document.forms["ratecar"]["Mecanism"].value;
	var c = document.forms["ratecar"]["Price"].value;
	var d = document.forms["ratecar"]["Design"].value;

	//validation

	if ( a == null || a ==''){
		alert("complete rate");
	}
	if ( b == null || b ==''){
		alert("complete rate");
	}

	if ( c == null || c ==''){
		alert("complete rate");
	}
	if ( d == null || d ==''){
		alert("complete rate");
	}


	// Calculate rate

	rate=(a+b+c+d)/4;
	alert(rate);



}