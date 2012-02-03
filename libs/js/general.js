
$(document).ready(function() {

  // Ajax call to get the current weather
  function loadWeather() {
    $.ajax({
      type: "GET",
      url:"data/wunderground_weather.xml",
      dataType: "xml",
      success: function(xml) {
        $("span#temp").html($(xml).find('temp_f').text());
      },
      error: function(xhr, status, error) {
        $("span#temp").html('unknown');
      }
    });
  }
  setInterval(loadWeather,60000);
  loadWeather();
});
