<?php

//User Registration Form
add_shortcode('btc_reg', 'btc_user_form');

function btc_user_form()
{

?>
<div class="container nm-form-body">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="nm-step nm-reg">
                <p>01</p>
                <h4>Enter Request Details</h4>
            </div>
            <div class="nm-step nm-per">
                <p>02</p>
                <h4>Personal informations</h4>
            </div>
            <div class="nm-step nm-pay">
                <p>03</p>
                <h4>Payment request</h4>
            </div>
        </div>
        <div class="col-md-12">
            <h1 class="nm-welcome"></h1>
            <div class="nm-border"></div>
        </div>
        <div class="col-md-12">
            <!-- Step 1 -->
            <div id="nmStepOne">
                <form method="POST" id="nmFormReg" class="nm-step-form">
                    <input type="hidden" name="reg" value="Registration">

                    <!-- name -->
                    <div class="nm-input">
                        <label for="nmName" class="form-label nm-label">Your Name</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="far fa-user"></i></span>
                            <input type="text" name="nmName" id="nmName" class="form-control"
                                placeholder="Enter Your Name" aria-label="nmName" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- mail -->
                    <div class="nm-input">
                        <label for="nmMail" class="form-label nm-label">Your Email</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-2"><i
                                    class="far fa-envelope"></i></span>
                            <input type="email" name="nmMail" id="nmMail" class="form-control"
                                placeholder="Enter Your Email" aria-label="nmMail" aria-describedby="nm-f-i-2" required>
                        </div>
                    </div>

                    <!-- pw -->
                    <div class="nm-input">
                        <label for="nmPasw" class="form-label nm-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-3"><i
                                    class="fas fa-lock"></i></span>
                            <input type="password" name="nmPasw" id="nmPasw" class="form-control" placeholder="Password"
                                aria-label="nmPasw" aria-describedby="nm-f-i-3" required>
                        </div>
                    </div>

                    <!-- confirm pw -->
                    <div class="nm-input">
                        <label for="nmCPasw" class="form-label nm-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-4"><i
                                    class="fas fa-lock"></i></span>
                            <input type="password" name="nmCPasw" id="nmCPasw" class="form-control"
                                placeholder="Confirm Password" aria-label="nmCPasw" aria-describedby="nm-f-i-4"
                                required>
                            <span class="error"></span>
                        </div>
                    </div>

                    <!-- step button -->
                    <button type="button" class="btn nm-btn-sbt" id="nmStepTwoSbtBtn">Next</button>
                </form>
            </div>
            <!-- Step 1 -->

            <!-- Step 2 -->
            <div id="nmStepTwo">
                <form method="POST" id="nmFormPersonal" class="nm-step-form">
                    <input type="hidden" name="per" value="Personal">
                    <!-- Name -->
                    <div class="nm-input">
                        <label for="nmYName" class="form-label nm-label">Your Name</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="far fa-user"></i></span>
                            <input type="text" name="nmYName" id="nmYName" class="form-control"
                                placeholder="Enter Your Name" aria-label="nmYName" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="nm-input">
                        <label for="nmPhone" class="form-label nm-label">Phone</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-phone"></i></span>
                            <input type="tel" name="nmPhone" id="nmPhone" class="form-control" placeholder="Phone"
                                aria-label="nmPhone" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Country -->
                    <div class="nm-input">
                        <label for="nmCountry" class="form-label nm-label">Country</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="far fa-flag"></i></span>
                            <input type="text" name="nmCountry" id="nmCountry" class="form-control"
                                placeholder="Country" aria-label="nmCountry" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Bank Name -->
                    <div class="nm-input">
                        <label for="nmBankName" class="form-label nm-label">Bank Name</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-university"></i></span>
                            <input type="text" name="nmBankName" id="nmBankName" class="form-control"
                                placeholder="Bank Name" aria-label="nmBankName" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Bank's Country -->
                    <div class="nm-input">
                        <label for="nmBankCountry" class="form-label nm-label">Bank's Country</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-globe"></i></span>
                            <input type="text" name="nmBankCountry" id="nmBankCountry" class="form-control"
                                placeholder="Bank's Country" aria-label="nmBankCountry" aria-describedby="nm-f-i-1"
                                required>
                        </div>
                    </div>

                    <!-- Bank Account Number -->
                    <div class="nm-input">
                        <label for="nmBankAcNo" class="form-label nm-label">Bank Account Number</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-file-invoice-dollar"></i></span>
                            <input type="text" name="nmBankAcNo" id="nmBankAcNo" class="form-control"
                                placeholder="Bank Account Number" aria-label="nmBankAcNo" aria-describedby="nm-f-i-1"
                                required>
                        </div>
                    </div>

                    <!-- Account Holder Name -->
                    <div class="nm-input">
                        <label for="nmBankHolder" class="form-label nm-label">Account Holder Name</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="far fa-user"></i></span>
                            <input type="text" name="nmBankHolder" id="nmBankHolder" class="form-control"
                                placeholder="Account Holder Name" aria-label="nmBankHolder" aria-describedby="nm-f-i-1"
                                required>
                        </div>
                    </div>

                    <!-- Sending From (Wallet Address) -->
                    <div class="nm-input">
                        <label for="nmWallet" class="form-label nm-label">Sending From (Wallet Address)</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-wallet"></i></span>
                            <input type="text" name="nmWallet" id="nmWallet" class="form-control"
                                placeholder="Wallet Address" aria-label="nmWallet" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Cashout Amount (BTC) -->
                    <div class="nm-input">
                        <label for="nmCash" class="form-label nm-label">Cashout Amount (BTC)</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><img class="nm-input-img"
                                    src="img/bitcoin-ico.png" alt=""></span>
                            <input type="number" step="any" name="nmCash" id="nmCash" class="form-control"
                                placeholder="Cashout Amount" aria-label="nmCash" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Additional Information (Optional) -->
                    <div class="nm-input">
                        <label for="nmInfo" class="form-label nm-label">Additional Information (Optional)</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-info-circle"></i></span>
                            <input type="text" name="nmInfo" id="nmInfo" class="form-control"
                                placeholder="Additional Information" aria-label="nmInfo" aria-describedby="nm-f-i-1"
                                required>
                        </div>
                    </div>

                    <!-- step button -->
                    <button type="button" class="btn nm-btn-sbt" id="nmStepOneSbtBtn">Back</button>
                    <button type="button" class="btn nm-btn-sbt" id="nmStepThreeSbtBtn">Next</button>
                </form>
            </div>
            <!-- Step 2 -->

            <!-- Step 3 -->
            <div id="nmStepThree">
                <form method="POST" id="nmFormPayment" class="nm-step-form">
                    <input type="hidden" name="pay" value="Payment">

                    <!-- Sell Amount -->
                    <div class="nm-input">

                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <label for="nmSell" class="form-label nm-label">Sell Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text nm-input-icon" id="nm-f-i-1"><img class="nm-input-img"
                                            src="img/bitcoin-ico.png" alt=""></span>
                                    <input type="text" name="nmSell" id="nmSell" class="form-control"
                                        aria-label="nmSell" aria-describedby="nm-f-i-1" value="$(" #nmCash").val();"
                                        disabled>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="nmSellConUSD" class="form-label nm-label">Receive Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text nm-input-icon" id="nm-f-i-1"><img class="nm-input-img"
                                            src="img/usd-ico.jpg" alt=""></span>
                                    <input type="text" name="nmSellConUSD" id="nmSellConUSD" class="form-control"
                                        aria-label="nmSellConUSD" aria-describedby="nm-f-i-1" disabled>
                                    <input type="hidden" name="nmSellConUSDh" id="nmSellConUSDh">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Send BTC To -->
                    <div class="nm-input">
                        <label for="nmSendBTC" class="form-label nm-label">Send BTC To</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="fas fa-info-circle"></i></span>
                            <input type="text" name="nmSendBTC" id="nmSendBTC" class="form-control"
                                placeholder="Send BTC To" aria-label="nmSendBTC" aria-describedby="nm-f-i-1" required>
                        </div>
                    </div>

                    <!-- Pay With -->
                    <div class="nm-input">
                        <label for="nmPayWith" class="form-label nm-label">Pay With</label>
                        <div class="input-group">
                            <span class="input-group-text nm-input-icon" id="nm-f-i-1"><i
                                    class="far fa-money-bill-alt"></i></span>
                            <select class="form-select" name="nmPayWith" id="nmPayWith"
                                aria-label="Default select example" aria-describedby="nm-f-i-1">
                                <option value="Bitcoin Wallet">Bitcoin Wallet</option>
                                <option value="USD Wallet">USD Wallet</option>
                            </select>
                        </div>
                    </div>

                    <!-- step button -->
                    <button type="button" class="btn nm-btn-sbt" id="nmBackToPersonal">Back</button>
                    <button type="button" class="btn nm-btn-sbt" id="nmStepSubmit">Submit</button>
                </form>
            </div>
            <!-- Step 3 -->

        </div>
    </div>
</div>
<?php
}