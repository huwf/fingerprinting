var output = '';
var elements = [];
var interval = setInterval(function(){
  document.getElementById('older-button').click();
  elem = document.getElementById('results-display');
  if(elem.textContent.indexOf('No history entries found') !== -1){
    for(i=0; i < elements.length; i++){
      elem.appendChild(elements[i]);
    }
    clearInterval(interval);
  }
  else{
    //fragment_lists.push(document.createRange().createContextualFragment(elem.innerHTML));
    output += elem.innerHTML;
    console.log(output);
    
  }


}, 500);
