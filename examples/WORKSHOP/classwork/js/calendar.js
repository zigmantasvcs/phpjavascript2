function initCalendar(){

  var menuo = GetMonthNameBox();
  $("#calendar").append(menuo);

  var savaiciuSkaicius = GetWeekCount();

  var jauSkaiciuojamDienas = false;
  var einamojiDiena = 0;





  for(var i=0;i<savaiciuSkaicius;i++){
    var savaiteBox = GetWeekBox();

    for(var j=1;j<=7;j++){
      var dienaBox = GetDayBox();
      dienaBox.hide();
      if(j == 1){
        dienaBox.addClass("monday");
      }

      if(j == 7){
        dienaBox.addClass("sunday");
      }

      if(j == GetFirstMonthWeekDay()){
        jauSkaiciuojamDienas = true;
      }

      if(einamojiDiena == GetLastMonthDay().getDate()){
        jauSkaiciuojamDienas = false;
      }

      if(jauSkaiciuojamDienas){
        einamojiDiena++;

        dienaBox.prop("id", "day"+einamojiDiena);

        dienaBox.text(einamojiDiena);
      }



      savaiteBox.append(dienaBox);
    }
    // kiti veiksmai

    $("#calendar").append(savaiteBox);

    $(".day").each(function(index){
      $(this).delay(40*index).fadeIn(300);
    })
  }





}

function GetDayBox(){
  var div = GetDiv();
  div.prop("class", "day");

  div.on("click", function(){
    $(".dayDetails").css({ visibility : "visible"}).animate({
      width: $("#calendar").width(),
      height: $("#calendar").height()
    })
  })



  return div;

}

function GetWeekBox(){
  var div = GetDiv();
  div.prop("class", "week");
  return div;
}

function GetMonthNameLT(){
  var date = new Date();
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
  return months[date.getMonth()];
}

function GetLastMonthDay(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  return new Date(year, month+1, 0);
}

function GetFirstMonthDay(){
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  return new Date(year, month, 1);
}

function GetFirstMonthWeekDay(){
  var firstMonthDay = GetFirstMonthDay();
  var firstMonthWeekDay = firstMonthDay.getDay();

  if(firstMonthWeekDay == 0){
    firstMonthWeekDay = 7;
  }

  return firstMonthWeekDay;
}

function GetWeekCount(){
  var lastMonthDay = GetLastMonthDay();
  var all = lastMonthDay.getDate() + GetFirstMonthWeekDay();
  return Math.ceil(all / 7);
}

function GetDiv(){
  return $("<div></div>");
}

function GetHeading(size){
  return $("<h"+size+"></h"+size+">");
}

function GetMonthNameBox(){
  var div = GetDiv();
  var heading = GetHeading(1);
  var menuo = GetMonthNameLT();
  heading.append(menuo);
  div.html(heading);
  return div;
}
