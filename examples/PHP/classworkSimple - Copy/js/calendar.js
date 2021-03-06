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

//#UPDATE BEGIN
        dienaBox.prop("id", "day"+GetYear()+GetMonth()+GetDayFromNumber(einamojiDiena));
//#UPDATE END
        dienaBox.text(einamojiDiena);
      }

      savaiteBox.append(dienaBox);
    }
    // kiti veiksmai

    $("#calendar").append(savaiteBox);

//#UPDATE BEGIN
  // iškelt už ciklo
//#UPDATE END


  }
//#UPDATE BEGIN
  GetEvents();


  $(".day").each(function(index){
    $(this).delay(40*index).fadeIn(300);
  })
//#UPDATE END

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

// #UPDATE BEGIN
function GetYear(){
  var date = new Date();
  return date.getFullYear();
}

function GetMonth(){
  var date = new Date();
  return date.getMonth()+1;
}

function GetDayFromNumber(day){
  if(String(day).length == 1){
    return "0"+day;
  }
  return day;
}
// #UPDATE END
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
//#UPDATE BEGIN
function GetEvents(){
  $.ajax({
    type: "POST",
    url: "api/calendar/read.php",
    dataType: "json",
    encode: true
  })
  .done(function(data){
    console.log(data);
    if(!data.error){
      $.each(data, function(index, item){
        var date = item.eventdate.substring(0,10);
        var newdate = date.replace(/-/g,"");
        var dayId = "day" + newdate;
        var div = $("<div></div>");
        div.text(item.event);
        
        $("#"+dayId).append(div);
      })
    }
  })
  .fail(function(response, ajaxOptions, thrownException){
    console.log(response.status);
    console.log(ajaxOptions);
    console.log(thrownException);
  });
}
//#UPDATE END
