$(document).ready(function(){
    $('.btn-popup').on('click', function(e){
        e.preventDefault();
        $('.popup_form[data-form='+$(this).attr('data-id')+']').css('opacity', 1).fadeIn(300)
    })
    $('.popup_form_close').on('click', function(e){
        e.preventDefault();
        $(this).parent().parent().css('opacity', 0).fadeOut(300)
    })
    $('.menu-toogler').on('click', function(e){
        e.preventDefault();
        $(this).toggleClass('active')
        $('.section120 .menu1').toggleClass('active')
    })

    $('#form-1').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: '/wp-content/themes/theme-repetitor-1/ajax-form.php',
            method: 'post',
            dataType: 'html',
            data: {
                action: 'form-1',
                username: $('#form-1 input[name=username]').val(),
                // useremail: $('#form-1 input[name=useremail]').val(),
                userphone: $('#form-1 input[name=userphone]').val()
            },
            success: function(data){
                $('#result-message').html(data)
                setTimeout(function(){
                    $('#result-message .form-message').fadeOut(500)
                    $('#result-message').html('')
                }, 3000)
            }
        })
    })

})