window.onload= function(){//quando a tela carregar vai passar funcionar a pagina
    let conta=[];
    let n=[];
    let id;
    let num;
    //console.log(document.querySelectorAll(".ads"))
    for(let e=0;e<document.querySelectorAll(".ads").length;e++){// repedir a quantidade de vezes a classe ads repete
        n.push(0)
        conta.push(0)
        document.querySelectorAll('.passar')[e].addEventListener("click",function(){//verifica se a div passar foi clicada
            n[e]++ 
            id=document.querySelectorAll('.passar')[e].onclick=this.id
            num=document.querySelectorAll(`#${id}.anunciototal`).length
            //console.log(n[e])
            setTimeout(ver,0)
            conta[e]-=100
            for(let i=0; i<num ;i++){ document.querySelectorAll(`#${id}.anunciototal`)[i].style.left=conta[e]+"%"}
            function ver(){
                if(n[e]<(num-3)){document.querySelectorAll(".passar")[e].style.display="block"
                document.querySelectorAll(".voltar")[e].style.display="block"
            }
                else{document.querySelectorAll(".passar")[e].style.display="none" }
            }setTimeout(ver,0)
        })
        document.querySelectorAll(".voltar")[e].addEventListener("click",function(){//verifica se a div voltar foi clicada
            n[e]--
            id=document.querySelectorAll('.passar')[e].onclick=this.id
            num=document.querySelectorAll(`#${id}.anunciototal`).length
            //console.log(n[e])
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
    window.onscroll=function(){
        var top = window.pageYOffset
        //console.log(top)
        if(top>=45){
            document.querySelector("nav").style.height="0"
        }else{
            document.querySelector("nav").style.height="80px"
        }
    }
}