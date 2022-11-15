var ul_dropdown = document.getElementById('ul-dropdown');
var arrow_icon = document.getElementById('arrow-icon');

if(ul_dropdown && arrow_icon){
  arrow_icon.addEventListener('click', function(){
    ul_dropdown.classList.toggle('active');
  });
}