function verificaSenha(){

   var senha = document.getElementById('iSenha').value;
   var conf = document.getElementById('iConf').value;

   if (senha === conf && senha !== "" ){
      document.getElementById('verifica').innerHTML = 'As senhas conferem';
      document.getElementById('verifica').style = 'color:rgba(0, 100, 0, 0.8)';
      document.getElementById('botao').disabled = false;
   } else {
      document.getElementById('verifica').innerHTML = 'As senhas não conferem';
      document.getElementById('verifica').style = 'color:rgba(255, 0, 0, 0.8)';
      document.getElementById('botao').disabled = true;
   }
}