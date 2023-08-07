const searchFun =()=>{
    let filter =document.getElementById("myInput").value.toUpperCase();
    let grid = document.getElementsByClassName("grid_template");
    let text = document.getElementsByClassName('template_txt');    

    for(var i=0;i<text.length;i++){
        let a = text[i];
        grid[i]=text[i];
        let textValue = a.textContent || a.innerHTML;
        if(textValue.toUpperCase().indexOf(filter)>-1){
            
            grid[i].style.display = "";
        }
        else{
            grid[i].style.display = "none";
        }
    }
}