    
    let firstbutton = false;
    document.getElementById("button1").addEventListener('click', function(){
        firstbutton = true;
    })
    document.getElementById("button2").addEventListener("click", function(){
        if (firstbutton == true){
    let absac = document.getElementById('h1');
    if(absac.style.display === "none"){
        absac.style.display =   "block";
    } 
    else{
        absac.style.display =   "none";

    }
    firstbutton = false;
        }
    })
    
    
