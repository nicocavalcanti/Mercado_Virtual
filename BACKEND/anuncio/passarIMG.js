window.onload=function(){
    //console.log(document.getElementsByName('slide').length)
    conte=document.getElementsByName('slide').length
    let check= document.getElementsByName('slide')
    for(let e=0;e<conte;e++){ 
        document.getElementsByName('slide')[e].addEventListener("click",function(){
            if(check[e].checked==true){
                for(let n=0;n<conte;n++){
                    document.querySelectorAll(".img")[n].style.left=(e*(-400))+"px"
                    //console.log(e*(-400))
                }
            }
        })
    }
}