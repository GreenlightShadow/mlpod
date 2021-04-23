 var date = new Date();
      var h = date.getHours();
	  
 if (h >= 17 || h <= 7) {
	document.write('<link rel="stylesheet" media="screen" href="../css/night_style.css">');
 }else{
	document.write('<link rel="stylesheet" media="screen" href="../css/style.css">');
 }