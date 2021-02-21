requestes()
function requestes(){
    //console.log("oi")
    const requeste=new XMLHttpRequest()
    requeste.onreadystatechange=function(){
        if(requeste.readyState == 4 && requeste.status==200){ 
            //console.log("foi")
            document.querySelector("#containerChat").innerHTML=requeste.responseText
        }else{
            //console.log(requeste.readyState+"=="+requeste.status)
        }
    
    }
    requeste.open("POST","../../BACKEND/anuncio/chat.php",true)
    requeste.send()
}//setInterval(requestes,1000)
window.onload=function(){
    document.querySelector("form").addEventListener("submit",function(e){
        e.preventDefault()
        var formulario = new FormData(document.querySelector("form"));
        formulario.append("user","junio")
        const requeste= new XMLHttpRequest()
        /*requeste.onreadystatechange=function(){
            if(requeste.readyState == 4 && requeste.status==200){ 
                //console.log("foi")
                document.querySelector("#containerChat").innerHTML=requeste.responseText
                //console.log("foi")
            }
        }*/
        requeste.open("POST","../../BACKEND/anuncio/envia.php",true)
        requeste.send(formulario)                
        document.querySelector(".caixa_chat").value=''
    }) 
} 

