function makeVisible(){
    document.getElementById('but_next').style.display = 'initial';
    document.getElementById('calc_1').style.display = 'initial';
    document.getElementById('input_1').style.display = 'initial';
    document.getElementById('actual').style.display = 'none';
}
var i = 1;
function makeNextVisible(){
    i = i + 1;
    var id = 'calc_' + i;
    var id_2 = 'calc_' + (i-1);
    var id_input = 'input_' + i;
    var id_input_2 = 'input_' + (i-1);
    document.getElementById(id).style.display = 'initial';
    document.getElementById(id_2).style.display = 'none';
    document.getElementById(id_input).style.display = 'initial';
    document.getElementById(id_input_2).style.display = 'none';

    if(i==10){
      document.getElementById('but_next').style.display = 'none';
      document.getElementById(id).style.display = 'none';
      document.getElementById(id_input).style.display = 'none';
      document.getElementById('but_sbmt').style.display = 'initial';
      document.getElementById('text_fin').style.display = 'initial';
    }
}