window.onload= function(){
    let conta=[];
    let n=[];
    let id;
    let num;
    for(let e=0;e<document.querySelectorAll(`.ads`).length;e++){
        n.push(0)
        conta.push(0)
        console.log(conta)
        
        document.querySelectorAll('.passar')[e].addEventListener("click",function(){
            n[e]++ 
            id=document.querySelectorAll('.passar')[e].onclick=this.id
            num=document.querySelectorAll(`#${id}.anunciototal`).length
            /*console.log(id)
            console.log(n)*/
            setTimeout(ver,0)
            conta[e]-=100
            //console.log(conta)
            for(let i=0; i<num ;i++){ document.querySelectorAll(`#${id}.anunciototal`)[i].style.left=conta[e]+"%"}
            function ver(){
                if(n[e]<(num-3)){document.querySelectorAll(".passar")[e].style.display="block"
                document.querySelectorAll(".voltar")[e].style.display="block"
            }
                else{document.querySelectorAll(".passar")[e].style.display="none" }
            }setTimeout(ver,0)
        })
        document.querySelectorAll(".voltar")[e].addEventListener("click",function(){
            n[e]--
            id=document.querySelectorAll('.passar')[e].onclick=this.id
            num=document.querySelectorAll(`#${id}.anunciototal`).length
            /*console.log(id)
            console.log(n)*/
            setTimeout(ver,0)
           
            conta[e]+=100
            for(let i=0; i<num ;i++){ document.querySelectorAll(`#${id}.anunciototal`)[i].style.left=conta[e]+"%"} 
            function ver(){
                if(n[e]!==0){document.querySelectorAll(".voltar")[e].style.display="block"
                document.querySelectorAll(".passar")[e].style.display="block"}
                else{document.querySelectorAll(".voltar")[e].style.display="none" }
            }setTimeout(ver,0)
        })
    }
}