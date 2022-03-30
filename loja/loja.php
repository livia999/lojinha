<!DOCTYPE html>
<html lang="pt-br">
<head>

<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

.img{

    width: 12%;
    height: 12%;

}

.field{

    padding: 4px;
    border-width: 5px ;
    border-style: solid;
    border-color: #D291BC;
    background: url(../loja/img/fundo.png);

}

.field2{

    padding: 4px;
    border-width: 5px ;
    border-style: solid;
    border-color: #D291BC;
    background: #FEE2F0;
    width: 200px;
    height: 57px;

}

.corzinha{

    background-color: #FEEAF1;

}

.letra{

    font-family: 'Pacifico', cursive;

}



</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body class="corzinha letra">

<script>  alert('Oi :D')</script>

<br>
<script src="../loja/javascript.js"> </script>

<label for="visitante"></label>

<label for="visitante">Login:</label>
<input type="text" name="" id="visitante">
<input type="submit" name="acao" value="Logar" onclick="visitante()">

<br><br>

<table>

<fieldset class="field">
<legend class="field2">Queijo</legend>

<br>
        
            <img src="../loja/img/queijo.png" alt="queijo.png" class="img" >
            <p >Valor por unidade: 5,00</p> <h5 id ="val1"></h5>
            <p id="numero"> 0 </p>

            <button onclick="acao('+'), Valor('+')"> + </button>
            <button onclick="acao('-'), Valor('-')"> - </button>
  

</fieldset>
<br><br>


<fieldset class="field">
<legend class="field2">Omelete</legend>

<br>
     
            <img src="../loja/img/ovo.png" alt="ovo.png" class="img">
            <p >Valor por unidade: 3,00</p><h5 id ="val2"></h5>
            <p id="numero2"> 0 </p>

            <button onclick="acao('++'), Valor('++')"> + </button>
            <button onclick="acao('--'), Valor('--')"> - </button>


 </table>

</fieldset>

<br><br>

<center>

<fieldset class="field2"> 
    <button class="btn btn-outline-danger" onclick="compra()">Terminar a compra</button>
</fieldset>

</center>

</body>
</html>