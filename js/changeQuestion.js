function domanda(){
    var numeroDomanda=0;
    var campoTesto="";
    var titolo = "Verde Giallo o Rosso?";
    var id=1;
    var id2 = 2;

    $.ajax({
        method: "POST",
        crossDomain: true,
        data: {question:id},
        url : '/pages/servComando.php', // my php file
        success : function(resp){ 
           var questions=JSON.parse(resp);
           for(var i=0;i<questions.length;i++){
                numeroDomanda = questions[i].numDomanda;
           }
           console.log(resp);

           $.ajax({
            method: "POST",
            crossDomain: true,
            data: {quest:id2},
            url : '/pages/servDomanda.php', // my php file
            success : function(response){ 
               var questions=JSON.parse(response);
               for(var i=0;i<questions.length;i++){
                   if(i+1==numeroDomanda){
                        numeroDomanda = questions[i].numero;
                        campoTesto = questions[i].testo;
                   }
               }
               console.log(response);
    
               var rand = Math.floor(Math.random() * 3);
               var randomColor = "#ffc0cb";
               switch(rand){
                    case 0:
                        randomColor = "rgb(173,255,47)";
                        break;
                    case 1:
                        randomColor = "rgb(255,255,0)";
                        break;
                    case 2:
                        randomColor = "rgb(255,0,0)";
                        break;
               }
    
               if(numeroDomanda==0){
                    document.getElementById("bloccoColore").style="background-color:#ffc0cb";
                    campoTesto = "EHI! CALMA!! Tra poco si parte, non avere fretta!"
                    titolo="Mamma mia quanta fretta..."
               }else{
                   document.getElementById("bloccoColore").style="background-color:"+randomColor;
               }
               el = "<p class='lead'>" + campoTesto + "</p>";
               $("#campoTesto").html(el);
               $("#titoloBlocco").html(titolo);
               //window.location.href = "/pages/domanda1.html";
            },
            error: function(request,error) 
            {
                console.log("Error");
            }
        });
        },
        error: function(request,error) 
        {
            console.log("Error");
        }
    });
    return false;
}
