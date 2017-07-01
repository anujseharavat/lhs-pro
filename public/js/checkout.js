/**
 * Created by Anuj on 30-06-2017.
 */
Stripe.setPublishableKey('pk_test_Zsdafdaser3443hHdafHdasfbHdfsadJl');

var $form = $('#checkout-form') ;
$form.submit(function(event)
{
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled',true);
   Stripe.card.createToken({
       number: $('#card-number').val(),
       cvc: $('#card-cvc').val(),
       exp_month: $('#card-expiry-month'),
       exp_year: $('#card-expiry-year'),
       name: $('#card-name')
   }, stripeResponseHandler);
   return false;
});

function stripeResponsHandler(status, response){
    if(response.error){
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    }
    else{
        var token = response.id;
        $form.append($('<input type="hidden"" name="stripToken" />').val(token));
        $form.get(0).submit();
    }
}
