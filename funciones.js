function fecha_es(){
	var months=new Array(13);
	months[1]="Enero";
	months[2]="Febrero";
	months[3]="Marzo";
	months[4]="Abril";
	months[5]="Mayo";
	months[6]="Junio";
	months[7]="Julio";
	months[8]="Agosto";
	months[9]="Septiembre";
	months[10]="Octubre";
	months[11]="Noviembre";
	months[12]="Diciembre";
	var time=new Date();
	var lmonth=months[time.getMonth() + 1];
	var date=time.getDate();
	var year=time.getYear();
	if (year < 2000) year = year + 1900;
	document.write(date + " de " + lmonth + " de " + year);
}

function fecha_en(){
	var months=new Array(13);
	months[1]="January";
	months[2]="February";
	months[3]="March";
	months[4]="April";
	months[5]="May";
	months[6]="June";
	months[7]="July";
	months[8]="August";
	months[9]="September";
	months[10]="October";
	months[11]="November";
	months[12]="December";
	
	var weekday=new Array(7);
	weekday[0]="Sunday";
	weekday[1]="Monday";
	weekday[2]="Tuesday";
	weekday[3]="Wednesday";
	weekday[4]="Thursday";
	weekday[5]="Friday";
	weekday[6]="Saturday";
	
	var time=new Date();
	var lweekday=weekday[time.getDay()];
	//recorta las tres primeras letras del dia de la semana.
	lweekday= lweekday.slice(0,3);
	var lmonth=months[time.getMonth() + 1];
	var date=time.getDate();
	var year=time.getFullYear();
	if (year < 2000) year = year + 1900;
	document.write(lweekday + " " +lmonth + " " + date + ", " + year);
}