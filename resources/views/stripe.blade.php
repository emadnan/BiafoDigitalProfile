<!DOCTYPE html>
<html>

<head>
    <title>Card Payment</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
.payment_side {
    background: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    margin: 100px 0;
    /* height: 700px; */
}

.heading {
    text-align: center;
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 90px;
}

.form-fields {
    margin-top: 70px;
    margin-bottom: 70px;
}

.control-label {
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
}

.btn-primary {
    font-weight: bold;
    font-family: 'Times New Roman', Times, serif;
    background-color: #0056D2;
}
.detail_side{

}
.paragraph{
    font-weight: bold;
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 0px;
    margin-left: 40px;
    color: grey;
}
.logo{
    margin-top: 20px;
}
.price{
    font-weight: bold;
    font-size: 30px;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 0px;
    margin-left: 40px;
}
.details{
    color: grey;
    font-size: 14px;
    font-family: 'Times New Roman', Times, serif;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 90px;
}
</style>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="detail_side">
                    <img src="{{ asset('frontend/img/cardify_logo.png') }}" alt="" width="250" height="200"
                        class="d-inline-block align-text-top logo">
                        <p class="paragraph">Subscribe to Premium Plan</p>
                        <p class="price">$100.00{{ env('STRIPE_KEY') }}
                            <span style="font-size: 20px; color: grey;">/year</span>
                        </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment_side">
                    @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('error') }}</p>
                    </div>
                    @endif

                    <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation"
                        data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class="heading">
                            <h1>Payment</h1>
                        </div>
                        <div class="form-fields">
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 form-group card required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'
                                        placeholder='1234 1234 1234 1234'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>

                            <div class='form-row row'>
                                <div class='col-md-12 error form-group hide'>
                                    <div class='alert-danger alert'>Please correct the errors and try
                                        again.</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                <p class = "details">By clicking the button above, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>, you allow to charge your card for this payment and future payments in accordance with their terms. You can always cancel your subscription</p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
$(function() {

    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]', 'input[type=password]',
                'input[type=text]', 'input[type=file]',
                'textarea'
            ].join(', '),
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

        if (!$form.data('cc-on-file')) {
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }

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

</html>