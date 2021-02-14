window.onload=function(){
    function invisivel(){
        try{
        document.querySelector("#erro").remove()
        }catch(e){}
    }setTimeout(invisivel,6*1000)
    var conta=0;
    var n=0;
    num=document.querySelectorAll(".anunciototal").length
    document.querySelector("#passar").addEventListener("click",function(){
        setTimeout(ver,0)  
        n++     
        //console.log(n)
        conta-=100
        //console.log(conta)
        for(var i=0; i<num ;i++){
            //console.log(document.querySelectorAll(".anunciototal")[i])
            document.querySelectorAll(".anunciototal")[i].style.left=conta+"%"
        }
        //console.log(document.querySelectorAll(".anunciototal").length)
        //console.log(document.querySelectorAll(".anunciototal"))
        function ver(){
            if(n<(num-3)){document.querySelector("#passar").style.display="block"
            document.querySelector("#voltar").style.display="block"
        }
            else{document.querySelector("#passar").style.display="none" }
        }setTimeout(ver,200)
        
    })
    document.querySelector("#voltar").addEventListener("click",function(){
        setTimeout(ver,0)
        //console.log(n)
        n--
        conta+=100
        //console.log(conta)
        //console.log(document.querySelectorAll(".anunciototal").length)
        //console.log(document.querySelectorAll(".anunciototal"))
        for(var i=0; i<num ;i++){
            //console.log(document.querySelectorAll(".anunciototal")[i])
            document.querySelectorAll(".anunciototal")[i].style.left=conta+"%"
        } 
        function ver(){
            if(n!==0){document.querySelector("#voltar").style.display="block"
            document.querySelector("#passar").style.display="block"}
            else{document.querySelector("#voltar").style.display="none" }
        }setTimeout(ver,200)
    })
}