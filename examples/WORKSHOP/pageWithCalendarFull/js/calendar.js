function init(){

  var savaiciuSkaicius = GetWeekCountForCurrentMonth();
  var pirmojiMenesioSavaitesDiena = GetFirstMonthDayWeekDay();
  var paskutineMenesioDiena = GetLastMonthDay();
  var pirmojiMenesioDiena = GetFirstMonthDay();
  var einamasisMenuo = GetMonthNameLT();

  console.log("Savaiciu skaicius: " + savaiciuSkaicius);
  console.log("Pirmoji menesio savaites diena: " + pirmojiMenesioSavaitesDiena);
  console.log("Paskutine menesio diena: " + paskutineMenesioDiena);
  console.log("Pirmoji menesio diena: " + GetFirstMonthDay());
  console.log("Einamasis menuo: " + GetMonthNameLT());

  // pavadinimas mėnesio
	var menuoBox = GetMonthNameBox();
  $("#calendar").append(menuoBox);

  //
  var trigger = false;
  var einamojiDiena = 0;
  for(var i=0;i<savaiciuSkaicius;i++){

    var savaiteBox = GetWeekBox()

    for(var j=1;j<=7;j++){
      var dienaBox = GetDayBox();

      if(j == pirmojiMenesioSavaitesDiena){ // skaiciuojam kada prasideda pirma diena pirmoje savaiteje
        trigger = true;
      }

      if(einamojiDiena == paskutineMenesioDiena){ // skaiciuojama kada baigesi diena menesio
        trigger = false;
      }

      if(trigger){
        einamojiDiena++;
        dienaBox.attr("id", "day"+einamojiDiena);

        AddClassWeek(dienaBox, j);

        if(j == 1){
          dienaBox.addClass("monday");
        }

        dienaBox.text(einamojiDiena);
      }
      savaiteBox.append(dienaBox)

    }

    $("#calendar").append(savaiteBox);

    $(".day").each(function(index) {
        $(this).delay(40*index).fadeIn(300);
    });

  }
}

function AddClassWeek(element, weekDay){
  switch (weekDay) {
    case 1:
      element.addClass("monday");
      break;
    case 6:
      element.addClass("saturday");
      break;
    case 7:
      element.addClass("sunday");
      break;
  }
}


/*
	1. Grąžina einamojo mėnesio pavadinimą lietuviškai
*/

function GetMonthNameLT(){
  var months = [
		"Sausis",
		"Vasaris",
		"Kovas",
		"Balandis",
		"Gegužė",
		"Birželis",
		"Liepa",
		"Rugpjūtis",
		"Rugsėjis",
		"Spalis",
		"Lapkritis",
		"Gruodis"
	];

  var date = new Date();
  return months[date.getMonth()];
}

/*
 2. Grąžina pirmą mėnesio dieną
*/


function GetFirstMonthDay(){
  var date = new Date(), y = date.getFullYear(), m = date.getMonth();
  return new Date(y, m, 1);
}

/*
3. Grąžina paskutinę mėnesio dieną
*/

function GetLastMonthDay(){
  var date = new Date(), y = date.getFullYear(), m = date.getMonth();
  var lastDay = new Date(y, m+1, 0);

  return lastDay.getDate();
}

/*
4. Grąžina mėnesio pirmą savaitės dieną
*/
function GetFirstMonthDayWeekDay(){
  var firstMonthDay = GetFirstMonthDay();
  var firstMonthDayWeekDay = firstMonthDay.getDay();
  if(firstMonthDayWeekDay == 0){
    firstMonthDayWeekDay = 7;
  }

  return firstMonthDayWeekDay;
}

/*
5. Grąžina savaičių skaičių
*/
function GetWeekCountForCurrentMonth() {
    var lastMonthDay = GetLastMonthDay();
    var used = GetFirstMonthDayWeekDay() + lastMonthDay;
    return Math.ceil(used / 7); // i didziaja puse apvalina
}

/*
7. Grąžina tuščią div
*/

function GetDiv(){
  return $("<div></div>");
}

/*
8. Grąžina heading box tuščią
*/
function GetHeading(size){

  if(size > 6){
    return $("<h6></h6>");
  }

  if(size < 1){
    return $("<h1></h1>");
  }

  return $("<h"+size+"></h"+size+">");
}


/*
9. Grąžina užrašą dėžutėje su mėnesio diena
*/

function GetMonthNameBox(){
	var div = GetDiv();
	var heading = GetHeading(1);
	var einamasisMenuo = GetMonthNameLT();
	heading.append(einamasisMenuo);
	div.html(heading);
	return div;
}

/*
10. Grąžina savaitės dėžutę
*/
function GetWeekBox(){
  var week = GetDiv();
  week.attr("class", "week");
  return week;
}




function GetDayBox(){
  var div = GetDiv();
  //div.hide();
  div.attr("class", "day");

  /*div.on("click", function(){

    var info = GetDayInfo($(this).attr("id"));
    $(".dayDetails").append(info);

    $(".dayDetails").css({visibility:"visible"}).animate({
      width: $("#calendar").width(),
      height: $("#calendar").height()
    }, 500);
  });*/

  return div;
}






function GetDayInfo(id){
  var day = ParseDay(id);
  var div = GetDiv();
  var heading = GetHeading(1);
  heading.append(day + " mėnesio diena.");
  div.append(heading);
  return div;
}

function ParseDay(idvalue){
  return idvalue.replace('day', '');
}





function GetHeading(size){

  if(size > 6){
    return $("<h6></h6>");
  }

  if(size < 1){
    return $("<h1></h1>");
  }

  return $("<h"+size+"></h"+size+">");
}

// Savaiciu skaicius einamajam menesiui
function GetWeekCountForCurrentMonth() {
    var firstMonthDay = GetFirstMonthDay();
    var lastMonthDay = GetLastMonthDay();
    var used = GetFirstMonthDayWeekDay() + lastMonthDay;
    return Math.ceil(used / 7); // i didziaja puse apvalina
}







function GetMonthNameLT(){
  var months = ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegužė", "Birželis", "Liepa", "Rugpjūtis", "Rugsėjis", "Spalis", "Lapkritis", "Gruodis"];
  var date = new Date();
  return months[date.getMonth()];
}
