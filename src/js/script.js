$(function() {
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    
    async function notification(title, text) {
        let elem = "<div class=\"notification\"><h2>" + title + "</h2><p>" + text + "</p></div>";
        let x = $(elem).appendTo(".notifications__wrapper");
        await sleep(5000);
        $(".notification").last().remove();
    };

    $("#menu-catalog-link").on("mouseover", (e) => {
        $("#menu-catalog-link ul").css("opacity", 1);
        $("#menu-catalog-link ul").css("visibility", "visible");
        $("header").css("border-radius", 0)
    });

    $("#menu-catalog-link").on("mouseout", (e) => {
        $("#menu-catalog-link ul").css("opacity", 0);
        $("#menu-catalog-link ul").css("visibility", "hidden");
        $("header").css("border-radius", "0 0 1.625em 1.625em")
    });
    
    $(".change__screen span").on("click", (e) => {
        $("#auth-wrapper").slideToggle(300);
        $("#reg-wrapper").slideToggle(300);
    });

    $("#auth-form").on("submit", (e) => {
        e.preventDefault();
        // Авторизация
        
        let email = $("#auth_email").val(),
            password = $("#auth_password").val();

        $.ajax({
            url: '../../core/signin.php',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success (data) {
                if (data.status) {
                    notification("Успешно", data.message);
                } 
                else {
                    notification("Ошибка", data.message);
                }
            },
            error(data){
                console.log(data.responseText);
            }
        });
        
    });

    $("#reg-form").on("submit", (e) => {
        e.preventDefault();
        // Регистрация
        
        let email = $("#reg_email").val(),
            fio = $("#reg_name").val(),
            password = $("#reg_password").val(),
            password_confirmation = $("#reg_password_confirm").val();

        $.ajax({
            url: '../../core/signin.php',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                fio: fio,
                password: password,
                password_confirmation: password_confirmation
            },
            success (data) {
                if (data.status) {
                    notification("Успешно", data.message);
                } 
                else {
                    notification("Ошибка", data.message);
                }
            },
            error(data){
                console.log(data.responseText);
            }
        });
        
    });
})