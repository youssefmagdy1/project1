var x=0;
$(document).ready(function(){

    $(".bttn i").click(function(){
        
          x+=1;
        if(x%2==0){
            $(".menu").css(   { "visibility": "hidden" }  );

        }else{
            $(".menu").css(   { "visibility": "visible" }  );

        }

       
    
    
})})