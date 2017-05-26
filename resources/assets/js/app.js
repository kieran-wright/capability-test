import $ from 'jquery';
import 'tether';
import 'bootstrap';

import timer from './modules/timer';

var locations = $('.location');
locations.each(function(){
  timer.init($(this));
});
