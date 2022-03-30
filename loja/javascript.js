function visitante(){
    var visitante = document.getElementById('visitante').value;
    document.getElementById("nome").innerHTML = (visitante);
}

function acao(op){
    var y = parseInt(document.getElementById("numero").innerHTML);

    var x = parseInt(document.getElementById("numero2").innerHTML);
    

    switch (op) {
        case '+':
            
           document.getElementById("numero").innerHTML = + (y+1);

            break;
        
        case '-':
            
            document.getElementById("numero").innerHTML = + (y-1);

            break;
        case '++':
    
            document.getElementById("numero2").innerHTML = + (x+1);
     
        break;
             
        case '--':
                 
            document.getElementById("numero2").innerHTML = + (x-1);
     
        break;

        default:
            break;
    }
}

function Valor(op){
    var y = parseInt(document.getElementById("numero").innerHTML);
    var x = parseFloat(document.getElementById("val1").innerHTML);

    var yy = parseInt(document.getElementById("numero2").innerHTML);
    var xx = parseFloat(document.getElementById("val2").innerHTML);

    switch (op) {
        case '+':
            
          document.getElementById("val1").innerHTML = (5*y);

            break;
        
        case '-':
            
            document.getElementById("val1").innerHTML = (x-5);

            break;

        case '++':
          document.getElementById("val2").innerHTML = (3*yy);

            break;
        
        case '--':
            
            document.getElementById("val2").innerHTML = (xx3);

            break;
        default:
            break;
    }
}

function compra(){
    
    if (parseFloat(document.getElementById("val1").value) != 0) {
        
        document.getElementById("val1").innerHTML = "";
    
    }if (parseFloat(document.getElementById("val2").value) != 0) {
        
        document.getElementById("val2").innerHTML = "";
    
    }

    if (parseFloat(document.getElementById("numero").value) != 0) {
        
        document.getElementById("numero").innerHTML = "0";
    
    }if (parseFloat(document.getElementById("numero2").value) != 0) {
        
        document.getElementById("numero2").innerHTML = "0";
    
    }

    document.getElementById('visitante').value;
    document.getElementById("nome").innerHTML = ("visitante");

}
    
 function compra(){
    alert('Obrigado pela compra!');
}  