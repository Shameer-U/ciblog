$(document).ready(function(){
 
   var url = window.location;

   $('.navbar li a').each(function(){
      // alert($(this).text());
      
      if(url ==  this.href){
        $(this).css('color' , 'RED');
        
      }
   });


  });