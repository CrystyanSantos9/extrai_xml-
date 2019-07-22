function newGroup() 
                {
                   

                    var parente = document.getElementById('parent');

                    var pulaLinha = document.createElement('br')
                       

                        parente.appendChild(pulaLinha);

                        var rotulo = document.createElement("label");
                        
                        rotulo.class="rotulos";

                        var entradas = document.createElement("input");
                       
                        rotulo.class="entradas";

                        

                            var texto = document.createTextNode("Sub-Grupo: ");

                            rotulo.appendChild(texto);
                            parente.appendChild(rotulo);

                            /*setAttibute("tyep","text")*/

                            entradas.type="text";
                            entradas.name ="subgrupo"
                            parente.appendChild(entradas);

                    
                    }


function deleta() 

        {

        var rotuloDelete = document.querySelectorAll("label");
        var entradaDelete = document.querySelectorAll("input");
       
        
        var tamanho = entradaDelete.length;

        console.log(tamanho);


        if(tamanho > 2) 
        {
            alert("Exclui grupo");

            entradaDelete[entradaDelete.length - 1].parentNode.removeChild(entradaDelete[entradaDelete.length - 1]);
            rotuloDelete[rotuloDelete.length - 1].parentNode.removeChild(rotuloDelete[rotuloDelete.length - 1]);
            

        }
        
                            
        }

function verifica()
        {
           var aviso = document.getElementById('entradaPrincipal');
           var enviar = document.getElementById('entradaPrincipal');
           var pattern = /\w/g;
           console.log(aviso.value);
           var resultado = pattern.test(aviso.value);
           console.log(resultado);

           if (resultado == false)
           {
               alert("Digite um nome válido para o grupo");
               aviso.style.boxShadow = '0px 0px 5px 0px rgba(235,12,12,1)';
               aviso.style.width = '100%';
               
            }

        }