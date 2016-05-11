$(document).ready(function(){
  var processed = false;
  $('#historyInput').bind('paste', function(){

    var history_list = $(this).text().split(' ');
    $(this).text('');
    var visited_obj = {};
    var output = '<h2>This is the data that you will send us</h2><ul id="history_list">';

    var interval = setInterval(function(){
      $('#historyInput dl a').each( function(value){
        clearInterval(interval);
        var href = $(this).attr('href');
        if(href == undefined)
          return true;
        if(href.indexOf('http') !== -1 || href.indexOf('ftp') !== -1){
          //Ignore parameters which may contain sensitive data and add them to the div
          re = new RegExp("(http|https|ftp)://[^?]*")
          var stringy = href.match(re)[0] + "\n";
          //Only go up to the first forward slash in case of e.g. Google Docs
          stringy = stringy.split('/')[0] + '://' + stringy.split('/')[2];
          if(stringy in visited_obj){
            visited_obj[stringy] += 1;
          }
          else{
            visited_obj[stringy] = 1;
          }
        }
      });

      $.each(visited_obj, function(key, value){
        //Render these back into a list
        output += '<li>' + key;
        if(value > 1){
          output += '<span class="history_counter">' + value;
        }
        output += '</li>';
      });
      $('#historyOutput').html(output + '</ul>');
      toggleDisplay();
    }, 1000);

  });

  function toggleDisplay(){
    //Hides the input div and displays the output div.
    if($('#historyOutput').css('display') == 'none'){
      $('#historyOutput').show();
      $('#historyInput').hide();
    }
  }
});
