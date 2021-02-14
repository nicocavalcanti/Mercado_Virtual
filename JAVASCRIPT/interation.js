window.onload=function(){
    function invisivel(){
        try{
        document.querySelector("#erro").remove()
        }catch(e){}
    }setTimeout(invisivel,6*1000)
}