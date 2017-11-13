$(function(){
	$('#myCarousel').carousel({
        interval: 3000
    });

    if($("#login-name").text() == "Entrar"){
    	$('.call-user').attr("id", "user");
    }else{
    	$('.call-user').attr("id", "user-no");
    }

     $('#user').on('click',function(){
    	$('.modal-user').fadeIn(1000);
    });   

    $('#fechar').on('click',function(){
    	$('.modal-user').fadeOut(1000);
    });

    $("input[name='entrar']").on('click', function(e){
    	e.preventDefault();

    	var email = $("#email").val();
    	var senha = $("#senha").val();
    	
    	$.ajax({
    		url:"http://localhost:8080/loja_camisas/ajax/login",
    		type:"POST",
    		data:'email='+email+'&senha='+senha,
    		success:function(r){
    			if(r!=''){
    				$('.user-msg').css("background-color",'#3f9912').html('<h4>Login Efetuado!</h4>');
    				$('.modal-user').fadeOut(1000);

    				setTimeout(paginaInicial,600);
    			}else{
    				$('.user-msg').css("background-color",'#8e1b11').html('<h4>Email e/ou Senha Invalidos!</h4>');
    			}
    		}
    	});	
    });

    $('.cart-image').on('click', function(e){

		e.preventDefault();

    	var idProduct = $(this).attr("data-id");
    	var price = $(this).attr("data-price");
    	var obj = $(this).nextAll();
  	
    	$.ajax({
    		url:"http://localhost:8080/loja_camisas/ajax/addCart",
    		type:"POST",
    		data:'idProduct='+idProduct+'&price='+price,
    		dataType: "json",
    		success:function(data){
    			obj[2].innerText = data.count + " itens em sua lista";
    			$('.clearcart').text("Limpar");
    			$('.amountcart').text(data.amount);
    		}
    	});
    });   

    function paginaInicial(){
		$(window.document.location).attr('href',"http://localhost:8080/loja_camisas/");
    }
});