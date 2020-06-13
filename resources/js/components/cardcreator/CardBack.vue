<template>
<div>

    <div class="header">
        <div class="left">
            <div class="from">
                EmojiGram<br>
                2807 Allen St #396<br>
                Dallas, Tx 75204<br>
                United States
            </div>
        </div>
        <div class="right">
            <div class="stamp">
                🖼️
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <form id="checkout" method="post" action="/card">
        <input type="hidden" id="emojiInput" name="emojis">
        <input type="hidden" id="cardFrontColor" name="front_color" value="#83DDD6">

        <div class="row">
            <div class="col-md-5">
                <div class="payment">
                    <h4>Who's it from?</h4>

                    <input type="text" name="from_name" placeholder="Your Name (optional)">
                    <textarea name="message" rows="3" maxlength="255" placeholder="A custom message
(limit 255 characters)
(optional)"></textarea>

                    <input type="email" id="fromEmail" name="email" placeholder="Your Email" required>
                    <small>Email is only used for our receipts and records.</small>
                    <br>

                    <input type="text" id="promoCode" name="promo_code" placeholder="Promo Code (optional)">
                </div>
            </div>
            <div class="col-md-7">
                <div class="address">
                    <h4>Who's it to?</h4>

                    <fieldset class="form-group">
                        <input type="text" class="address1 form-control" name="to_name" placeholder="Recipients Name or Company" required maxlength="50">
                    </fieldset>


                    <select name="to_country" id="recipientCountry" required class="form-control">
                        <option value="" selected>Select Recipient Country</option>
                    </select>

                    <fieldset class="form-group">
                        <input type="text" class="address1 form-control" name="to_address" placeholder="Address Line 1" required maxlength="255">
                    </fieldset>

                    <fieldset class="form-group">
                        <input type="text" class="address2 form-control" name="to_address2" placeholder="Address Line 2" maxlength="255">
                    </fieldset>


                    <fieldset id="addressTypeDefault" class="address-type" data-countries="">
                        <input type="text" class="city form-control" name="to_city" maxlength="255" placeholder="City / Town">

                        <input type="text" class="state form-control" name="to_state" maxlength="255" placeholder="State / Province / Region">

                        <input type="text" class="zip form-control" name="to_zip" maxlength="255" placeholder="ZIP / Postal Code">
                    </fieldset>

                    <fieldset id="addressType1" class="address-type">

                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" class="city form-control" name="to_city" placeholder="City" maxlength="255" required>
                            </div>
                            <div class="col-md-4">
                                <select name="to_state" class="form-control">
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="zip form-control" name="to_zip" placeholder="Zip Code" maxlength="255" required>
                            </div>
                        </div>
                    </fieldset>


                    <div style="text-align: center">
                        <p class="invalid-helper hidden">Oops! Looks like you have some invalid information.</p>

                        <button type="button" class="btn btn-primary" id="readyToPay">Send EmojiGram</button>

                    </div>


                </div>

            </div>
        </div>

    </form>
</div>
</template>

<script>
    export default {

    }
</script>
