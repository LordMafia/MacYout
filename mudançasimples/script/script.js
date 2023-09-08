 document.addEventListener("DOMContentLoaded", function(){ // document.addEventListener, é quando a página for carregada...
        
            document.getElementById("format-mp33").addEventListener("click", function(){
            
                if(rotate= 0){rotate = 0}
            
                rotate = rotate + 180; 
                
                document.getElementById("element-select").style.transform = "rotate("+rotate+"deg)"; //o style.transform para acessar o objeto(class&Id) img e através do rotate com o valor atual de nossa variável.
            });
            
            document.getElementById("format-mp44").addEventListener("click", function(){
            
                if(rotate= +180){rotate = 0} 
            
                rotate = rotate = 0; 
                
                document.getElementById("element-select").style.transform = "rotate("+rotate+"deg)";
            });		
    
        });