
 var idNew = document.getElementById('id_new');
 var idOld = document.getElementById('id_old');
 var idNit = document.getElementById('id_nit');
 var idName = document.getElementById('id_name');
 var idAddress = document.getElementById('id_address');
 var idEmail = document.getElementById('id_email');
 var idPhone = document.getElementById('id_phone');

var addAmount = document.getElementById('add_amount');   

var maxAmount = 3;
var x = 1;


$(idNew).click(function(){
    // alert('Sí cojió esta mierda');
    $(idNit).prop('disabled', false);
    $(idName).prop('disabled', false);
    $(idAddress).prop('disabled', false);
    $(idEmail).prop('disabled', false);
    $(idPhone).prop('disabled', false);
});

$(idOld).click(function(){
    // alert('Funcionó el doble');
    $(idNit).prop('disabled', false);
    $(idName).prop('disabled', true);
    $(idAddress).prop('disabled', true);
    $(idEmail).prop('disabled', true);
    $(idPhone).prop('disabled', true);
});

$(function(){
    $(addAmount).on('click', funAddAmount);
    $(document).on('click', '.btn_less', removeAmount);
});

function funAddAmount(){
    if(x < maxAmount ){
        var amount = $('#id_template_amount').html();
        $('#id_list').append(amount);
        x++;
    }
}

function removeAmount(){
    $(this).parent().remove();
    x--;
}

$('#send').click(function(){
    $.ajax({
        url: 'amount.php',
        method: 'POST',
        data: $('#id_template_amount').serialize(),
        succes: function(data)
        {
            alert(data);
            $('#id_template_amount')[0].reset();
        }
    });
})

