# programacao_web
==========================================
var pessoa = {}
==========================================
var pessoa = {
            nome: 'Heider', 
            sobrenome: 'Ubiratã', 
            sexo: 'M', 
            idade: 21,
            altura: 1.86,
            peso: 95,
            andando: false,
            caminhouQuantosMetros: null
			}
==========================================
var pessoa = {
            nome: 'Heider', 
            sobrenome: 'Ubiratã', 
            sexo: 'M', 
            idade: 21,
            altura: 1.86,
            peso: 95,
            andando: false,
            caminhouQuantosMetros: null,
            fazerAniversario: function(){
              console.log(this.idade++)
                  }  
              }
==========================================			  