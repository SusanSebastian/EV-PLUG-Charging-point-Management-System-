var fullcharge = ["9:00AM-10:00AM","10:00AM-11:00AM","11:00AM-12:00PM"];
var quickcharge = ["9:30AM-09:30AM","09:30AM-10:00AM","10:00AM-11:00PM"];

$("#timeslot").change(function(){
  var timeselected = $(this).val();
  var optionsList;
  var htmlString = "";

  switch (timeselected) {
    case "quickcharge":
        optionsList = quickcharge;
        break;
    case "fullcharge":
        optionsList = fullcharge;
        break;
}


  for(var i = 0; i < optionsList.length; i++){
    htmlString = htmlString+"<option value='"+ optionsList[i] +"'>"+ optionsList[i] +"</option>";
  }
  $("#timeslot").html(htmlString);

});