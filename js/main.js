$( document ).ready(function() {
    $("#authAdmin").click(
		function(e){
            e.preventDefault();
            var form_data = $("#login-admin").serialize();

			$.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);
                    console.log(result);
                    if(result.res == "true"){
                        setTimeout(function() { window.location.href = "/admin/redirRole.php"; }, 500);
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
		}
	);
});

$( document ).ready(function() {
    $("#getMoneyUser").click(
        function(e){
            e.preventDefault();
            var form_data = $("#getMoneyForm").serialize();

            $.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);

                    if(result.res == "true"){
                        $('#successReqMoney').html('Запрос отправлен.');
                        $('#successReqMoney').show();
                        setTimeout(function() { 
                            $('#successReqMoney').hide();
                         }, 3000);
                    }
                    else if(result.error == "noCorrect"){
                        $('#errorReqMoney').html('Ваш баланс пуст.');
                        $('#errorReqMoney').show();
                        setTimeout(function() { 
                            $('#errorReqMoney').hide();
                         }, 3000);
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
        }
    );
});

$( document ).ready(function() {
    $("#authUser").click(    
        function(e){
            e.preventDefault();
            var form_data = $("#login-user").serialize();
            
            $.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);

                    if(result.res == "true"){
                    setTimeout(function() { window.location.href = "/index.php"; }, 1000);
                    }
                    if(result.error == "noCorrect"){
                    setTimeout(function() { 
                        $('#errorLoginUser').html('Ошибка ввода данных.');
                        $('#errorLoginUser').show();
                    }, 1000);
                    }
                    else if(result.error == "noData"){
                        $('#errorLoginUser').html('Заполните все поля.');
                        $('#errorLoginUser').show();
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
        }
    );
});

$( document ).ready(function() {
    $("#buttonAddUser").click(    
        function(e){
            e.preventDefault();
            var form_data = $("#addUserForm").serialize();
            
            $.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);
                    if(result.res == "true"){
                        $('#addUserForm')[0].reset();
                        $('#successAddUser').html('Добавили пользователя.');
                            $('#successAddUser').show();
                        setTimeout(function() { 
                            $('#successAddUser').hide();
                        }, 3000);
                    }
                    if(result.error == "Email"){
                        $('#errorAddUser').html('Такой пользователь уже есть.');
                        $('#errorAddUser').show();                        
                    }
                    else if(result.error == "noData"){
                        $('#errorAddUser').html('Заполните все поля.');
                        $('#errorAddUser').show();
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
        }
    );
});

$( document ).ready(function() {
    $("#buttonAddOffer").click(    
        function(e){
            e.preventDefault();
            var form_data = $("#addOfferForm").serialize();
            
            $.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);
                    console.log(result);
                    console.log(result.res);
                    if(result.res == "true"){
                         $('#addOfferForm')[0].reset();
                        $('#successAddUser').html('Статья добавлена');
                            $('#successAddUser').show();
                        setTimeout(function() { 
                            $('#successAddUser').hide();
                            location.reload();
                        }, 3000);
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
        }
    );
});

$( document ).ready(function() {
    $("#buttonAccOffer").click(    
        function(e){
            e.preventDefault();
            var form_data = $("#accOffer").serialize();
            
            $.ajax({
                url:      "/backend/server.php",
                type:     "POST", 
                dataType: "html", 
                data: form_data,  
                success: function(response) { 
                    result = $.parseJSON(response);
                    if(result.res == "true"){
                         $('#accOffer')[0].reset();
                    }
                },
                error: function(response) { // Данные не отправлены
                    
                }
            }); 
        }
    );
});