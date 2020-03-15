


document.addEventListener('keydown', function() {
    if (event.keyCode == 123) {
      //alert("OPSSS BAWAL YAN SIR!");
      return false;
    } 
    else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      //alert("OPSSS BAWAL YAN SIR!");
      return false;
    } 
    else if (event.ctrlKey&& event.shiftKey && event.keyCode == 85) {
      //alert("OPSSS BAWAL YAN SIR!");
      return false;
    }
  
  }, false);
  
  
  if (document.addEventListener) {
    document.addEventListener('contextmenu', function(e) {
     // alert("OPSSS BAWAL YAN SIR!");
      e.preventDefault();
    }, false);
  } else {
    document.attachEvent('oncontextmenu', function() {
    //  alert("OPSSS BAWAL YAN SIR!");
      window.event.returnValue = false;
    });
  
  
  }
  ////F12 disable code////////////////////////
      document.onkeypress = function (event) {
          event = (event || window.event);
          if (event.keyCode == 123) {
             //alert('No F-12');
              return false;
          }
      }
      document.onmousedown = function (event) {
          event = (event || window.event);
          if (event.keyCode == 123) {
              //alert('No F-keys');
              return false;
          }
      }
  document.onkeydown = function (event) {
          event = (event || window.event);
          if (event.keyCode == 123) {
              //alert('No F-keys');
              return false;
          }
      }
  
  
  document.onkeydown = function(e) {
  if(event.keyCode == 123) {
  return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
  return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
  return false;
  }
  }