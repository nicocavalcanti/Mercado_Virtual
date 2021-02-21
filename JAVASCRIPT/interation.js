window.onload=function(){
    function invisivel(){//auto apagar a div em 6 segundo
        try{
        document.querySelector("#erro").remove()
        }catch(e){}
    }setTimeout(invisivel,6*1000)
}