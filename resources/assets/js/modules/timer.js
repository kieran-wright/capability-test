var moment = require("moment");
require("moment-timezone");
var today = moment().format("dddd");
var axios = require("axios");
var Color = require("color");
var fullday = 86400;
var dayColor = "#226083";
var textColor = "#FFFFE5";

var _init = function(location) {
  var sunrise = null;
  var sunset = null;
  var daylength = null;
  var nightlength = null;
  var timezoneday = moment.tz(location.data("timezone"));
  var locationcounter = location.find(".countdown");
  var locationtime = location.find(".time");
  var _locationContent = function() {
    var local = moment.tz(location.data("timezone"));
    var srdiff = sunrise.diff(local, "seconds");
    if (srdiff < 0) {
      sunrise.add(1, "day");
      srdiff = sunrise.diff(local, "seconds");
    }
    var ssdiff = sunset.diff(local, "seconds");
    if (ssdiff < 0) {
      sunset.add(1, "day");
      ssdiff = sunset.diff(local, "seconds");
    }
    var text = "";
    var percentDay = 0;
    var percentNight = 0;
    if (ssdiff < srdiff) {
      text = `${ssdiff} seconds to sunset`;
      percentDay = (daylength - ssdiff) / daylength;
      if (percentDay > 0.5) {
        percentDay = 1 - percentDay;
      }
      location.css({
        "backgroundColor": Color(dayColor).lighten(percentDay).string(),
        "color": Color(textColor).darken(percentDay).string()
      });

    } else {
      text = `${srdiff} seconds to sunrise`;
      percentNight = (nightlength - srdiff) / nightlength;
      if (percentNight > 0.5) {
        percentNight = 1 - percentNight;
      }
      location.css({
        "backgroundColor": Color(dayColor).darken(percentNight).string(),
        "color": Color(textColor).lighten(percentDay).string()
      });

    }
    locationtime.text(local.format("D/MM/Y H:mm:ss a"));
    locationcounter.text(text);
  };
  axios.get("https://api.sunrise-sunset.org/json", {
    "params": {
      "lat": location.data("lat"),
      "lng": location.data("long"),
      "date": timezoneday.format("YYYY-MM-DD")
    }
  }).
  then((response) => {
    daylength = moment.duration(response.data.results.day_length, "HH:mm:ss").asSeconds();
    nightlength = fullday - daylength;
    sunrise = moment.tz(`${timezoneday.format("dddd")} ${response.data.results.sunrise}`, "dddd h:mm a", location.data("timezone"));
    sunset = moment.tz(`${timezoneday.format("dddd")} ${response.data.results.sunset}`, "dddd h:mm a", location.data("timezone"));
    _locationContent();
    setInterval(_locationContent, 1000);
  }).
  catch((error) => {
    console.log(error);
  });
};
var timer = {"init": _init};
module.exports = timer;
