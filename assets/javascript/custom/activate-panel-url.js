function clickOnPrimary() {
  setTimeout(function() {
    $('#lclick-button').click();
  }, 1000);
}

var manageClickOnPrimary = function () {
  if(window.isBindingClickEvents || window.isBindingClickEvents === undefined) {
    setTimeout(manageClickOnPrimary, 200);
  } else {
    clickOnPrimary();
  }
};

manageClickOnPrimary();
