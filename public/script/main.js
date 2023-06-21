function makeVisible(){
  document.getElementById('but_next').style.display = 'initial';
  document.getElementById('calc_1').style.display = 'initial';
  document.getElementById('input_1').style.display = 'initial';
  document.getElementById('actual').style.display = 'none';
  document.getElementById('input_1').focus();
}
var i = 1;
function makeNextVisible(){
  var nbr = document.querySelector('input[name=nbr]').value;
  if(i<nbr){
    i = i + 1;
    var id = 'calc_' + i;
    var id_2 = 'calc_' + (i-1);
    var id_input = 'input_' + i;
    var id_input_2 = 'input_' + (i-1);
    document.getElementById(id).style.display = 'initial';
    document.getElementById(id_2).style.display = 'none';
    document.getElementById(id_input).style.display = 'initial';
    document.getElementById(id_input).focus();
    document.getElementById(id_input_2).style.display = 'none';
  }else{
    var id = 'calc_' + i;
    var id_input = 'input_' + i;
    document.getElementById('but_next').style.display = 'none';
    document.getElementById(id).style.display = 'none';
    document.getElementById(id_input).style.display = 'none';
    document.getElementById('but_sbmt').style.display = 'initial';
    document.getElementById('text_fin').style.display = 'initial';
  }
}

document.addEventListener("DOMContentLoaded", function() {
  var percent = document.getElementById('percent').value;
  var pourcent = parseInt(percent);
  if(pourcent >= 0 && pourcent < 50) {
    document.querySelector('body').style.backgroundColor = 'red';
  } else {
    if (pourcent >= 50 && pourcent < 80) {
      document.querySelector('body').style.backgroundColor = 'yellow';
    } else {
      if (pourcent => 80 && pourcent <=100) {
        document.querySelector('body').style.backgroundColor = 'lightgreen';
      }
    }
  }
});
    
    