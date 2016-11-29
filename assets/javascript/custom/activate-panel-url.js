// Polyfill pour String.includes
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/String/includes
if ( !String.prototype.includes ) {
  String.prototype.includes = function(search, start) {
    'use strict';
    if (typeof start !== 'number') {
      start = 0;
    } 

    if (start + search.length > this.length) {
      return false;
    } else {
      return this.indexOf(search,start) !== -1;
    }
  };
}

var parseQueryString = function( queryString ) {
    var params = {}, queries, temp, i, l;
    // Split into key/value pairs
    queries = queryString.split("&amp;");
    // Convert the array of strings into an object
    for ( i = 0, l = queries.length; i < l; i++ ) {
        temp = queries[i].split('=');
        params[temp[0]] = temp[1];
    }
    return params;
};

function clickOnElementAfterTwoSecond(elem) {
  return setTimeout(function() {
    elem.click();
  }, 2000);
} 

function clickOnPrimary() {
  return clickOnElementAfterTwoSecond($('#lclick-button'));
}

var url = window.location.href;
var queryString = url.substring(url.indexOf('?') + 1);
var parsedQueryString = parseQueryString(queryString);

if (url.includes('/hero/')) {
  if (parsedQueryString.skill) {
    var button = document.getElementById(parsedQueryString.skill + '-button');
    if (button) {
      if(!$(button).hasClass('disabled')) {
        clickOnElementAfterTwoSecond($(button));
      } else {
        manageClickOnPrimary();
      }
    } else {
      manageClickOnPrimary();
    }
  } else {
    manageClickOnPrimary();
  }
}
if (history && history.pushState) {
  $('.skill-button').click(function(){
    var selectedSkill = ($(this).attr('id').replace('-button',''));
    history.pushState({}, '', '?skill='+selectedSkill);
  });
}
