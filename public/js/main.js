let table = document.querySelector("table");
let tr = table.querySelectorAll("tr");
function filterTable(checkbox){
    
    if(checkbox.checked == true){
        for(let i = 1; i < tr.length ; i++){
            let td = tr[i].querySelectorAll("td");
            if(parseInt(td[2].innerHTML) > 0 && td[4].innerHTML == "No"){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }
        
    }else{
        for(let i = 0; i < tr.length ; i++){
            tr[i].style.display = "";
        }
   }
}
///////////////////
function filterTableComplete(checkbox){
    if(checkbox.checked == true){
        for(let i = 1; i < tr.length ; i++){
            td = tr[i].querySelectorAll("td")[4];
            if(td.innerHTML == "Yes"){
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }
        
    }else{
        for(let i = 0; i < tr.length ; i++){
            tr[i].style.display = "";
        }
   }
}


//////////////

function serachName(textbox){
    filter = textbox.value;
    for(let i = 1; i < tr.length ; i++){
        td = tr[i].querySelectorAll("td")[1];
        txtValue = td.textContent || td.innerText;
        if(txtValue.indexOf(filter) > -1){
            tr[i].style.display = "";
        }else{
            tr[i].style.display = "none";

        }
    }

}