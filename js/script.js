$(function(){
   // validation termos::cadastro
   $('#accTermos').click(function(){
      if($('#chkTermos').is(':checked')){
          window.location.href = $(this).attr('href');
          return false;
      }else{
          window.location.href = 'home';
          return false;
      }
   });
});