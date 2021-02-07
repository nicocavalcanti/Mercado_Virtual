window.onload=function(){
    function invisivel(){
        try{
        document.querySelector("#erro").remove()
        }catch(e){console.log("erro, ID erro não encontrado")}
    }setTimeout(invisivel,6*1000)
}