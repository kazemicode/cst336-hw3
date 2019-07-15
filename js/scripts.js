// VARIABLES
var key = "6bKihUONWNgYV5m4nOWMcBD9eaihhVkzEcTfSmaz";
var START_DATE = "06/16/1995";
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = mm + "/" + dd + "/" + yyyy;


// LISTENERS
$("#datepicker").on("change", function() {
      tempDate = $("#datepicker").val(); // Gets date in MM/DD/YYYY format
      // need date in YYYY-MM-DD format
      year = tempDate.substring(6,10);
      day = tempDate.substring(3,5);
      month = tempDate.substring(0,2);
      date = year + "-"  + month + "-" + day; // date to feed to API
      url = "https://api.nasa.gov/planetary/apod?date=" + date + "&api_key=" + key;
      $.ajax({
        method: "GET",
        url: url,
        dataType: "json",
        data: {"explanation": $("#explanation").val() },
        error: function(xhr, status, error){
           $("#resultStatus").html("<span class='alert alert-danger' role='alert'> Please select a date between " + 
                                   START_DATE + " and " + today +". <span>"); 
        },
        success: function(result, status) {
         //alert(status);
             $("#resultStatus").html("<span class='alert alert-success' role='alert'> Fetching results for " + tempDate + ". <span>");
            // Display SD image with link to HD image if it exists
            if(result.hdurl)
               {
                 $("#hdLink").attr("href", result.hdurl);
               }
              $("#resultImg").attr("src", result.url);
              $("#resultImg").attr("alt", result.title);
          
          // Display copyright info if it exists
           if(result.copyright) {
             $("#copyright").text("Image Credits: " + result.copyright);
           }
          else {
            $("#copyright").text("Image Credits: " + "Public Domain");
          }
          $("#description").text(result.explanation);
        }
      }); // ajax
    }); // datepicker 

// FUNCTIONS

function initDatePicker() {
    $("#datepicker").datepicker();
    console.log("datepicker ok")
  } 

function loadStates(){
$.ajax({
  url: url,
  success: function(result){
  if("copyright" in result) {
    $("#copyright").text("Image Credits: " + result.copyright);
  }
  else {
    $("#copyright").text("Image Credits: " + "Public Domain");
  }
  
  if(result.media_type == "video") {
    $("#resultImg").css("display", "none"); 
    $("#apod_vid_id").attr("src", result.url);
  }
  else {
    $("#apod_vid_id").css("display", "none"); 
    $("#resultImg").attr("src", result.url);
  }
  $("#reqObject").text(url);
  $("#returnObject").text(JSON.stringify(result, null, 4));  
  $("#apod_explaination").text(result.explanation);
  $("#apod_title").text(result.title);
}
});
}

initDatePicker();
