/*date*/
const currentDate = new Date();
const year = currentDate.getFullYear();
const month = String(currentDate.getMonth() + 1).padStart(2,'0');
const day = String(currentDate.getDate()).padStart(2, '0');

const formattedDate = `${year}-${month}-${day}`;
document.getElementById('atten').min = formattedDate;
document.getElementById('atten').max = formattedDate;

/*sidebar*/
let subMenu = document.getElementById("subMenu");
function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
});

/*clock*/
  function updateClock(){
    var now= new Date();
      hou = now.getHours();
     min = now.getMinutes();
    sec= now.getSeconds();
    pe = "AM";

    if(hou ==0){
        hou=12;
    }
    if(hou >12){
        hou= hou-12;
        pe="PM";
    }
    Number.prototype.pad = function(digits){
        for(var n = this.toString(); n.length < digits; n =0+n);
        return n;
    }
  
    var ids = ["hour", "minute","seconds", "period"]; 
    var values = [ hou.pad(2), min.pad(2), sec.pad(2), pe];
    for(var i = 0; i < ids.length; i++)
    document.getElementById(ids[i]).firstChild.nodeValue = values[i];
   
}
 
function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);

}

