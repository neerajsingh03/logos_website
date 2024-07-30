@extends('front-layout.master')
@section('content')
  <style>
  body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
}

h1 {
    margin-top: 20px;
    margin-bottom: 20px;
}

.card {
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    border-bottom: 1px solid #007bff;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.card-body {
    padding: 20px;
}

.form-group label {
    font-weight: bold;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #ced4da;
    box-shadow: none;
}

.input-group-text {
    background-color: #007bff;
    color: white;
    border: 1px solid #ced4da;
    border-radius: 4px 0 0 4px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 4px;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.alert-danger {
    margin-top: 10px;
}

.d-none {
    display: none;
}

.error {
    margin-top: 15px;
}
</style>  
<div class="container text-center">
    <h1><b>{{__('lang.payment')}}</b></h1>
    
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card credit-card-box">
                <div class="card-header">
                    <h3 class="panel-title">{{__('lang.payment_details')}}</h3>
                </div>
                <div class="card-body">
                    <form role="form" 
                          action="{{route('stripe_post',['locale'=>app()->getLocale()])}}" 
                          method="post" 
                          class="require-validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">
                        @csrf

                        <div class="form-row">
                            <div class="col-12 form-group required">
                                <label class="control-label">{{__('lang.name_on_card')}}</label>
                                <input name="name" class="form-control" size="4" type="text">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 form-group card required">
                                <label class="control-label">{{__('lang.card_number')}}</label>
                                <input autocomplete="off" class="form-control card-number" size="16" type="text">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 form-group cvc required">
                                <label class="control-label">{{__('lang.cvc')}}</label>
                                <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text">
                            </div>
                            <div class="col-md-4 form-group expiration required">
                                <label class="control-label">{{__('lang.expiration_month')}}</label>
                                <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text">
                            </div>
                            <div class="col-md-4 form-group expiration required">
                                <label class="control-label">{{__('lang.expiration_year')}}</label>
                                <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 error form-group d-none">
                                <div class="alert alert-danger">{{__('lang.please_correct_the_errors_and_try_again')}}</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    {{__('lang.pay_now')}} ₹<b>{{$totalCartPrice}}</b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</div>
<script>
  
$(function() {
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
          
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>
@endsection
