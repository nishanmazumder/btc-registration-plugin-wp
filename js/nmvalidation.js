jQuery(document).ready(function ($) {           
// Form Validation
            $("#nmFormReg").validate({
                rules: {
                    nmName: "required",
                    nmMail: {
                        required: true,
                        email: true
                    },
                    nmPasw: {
                        required: true,
                        minlength: 8
                    },
                    nmCPasw: {
                        required: true,
                        equalTo: '#nmPasw'
                    }
                },

                messages: {
                    nmName: "Please enter your name",
                    nmMail: "Please enter a valid email address",
                    nmPasw: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 8 characters long"
                    },
                    nmCPasw: {
                        required: "Please provide a password",
                        equalTo: "Password not matched"
                    }
                }

            });

            $("#nmFormPersonal").validate({
                rules: {
                    nmYName: "required",
                    nmPhone: {
                        required: true,
                        digits: true
                    },
                    nmCountry: "required",
                    nmBankName: "required",
                    nmBankCountry: "required",
                    nmBankAcNo: {
                        required: true,
                        digits: true
                    },
                    nmBankHolder: "required",
                    nmWallet: "required",
                    nmCash: {
                        required: true,
                        number: true
                    },
                    nmInfo: "required"
                },

                messages: {
                    nmYName: "This field is required",
                    nmPhone: {
                        required: "This field is required",
                        digits: "Please give the correct value"
                    },
                    nmCountry: "This field is required",
                    nmBankName: "This field is required",
                    nmBankCountry: "This field is required",
                    nmBankAcNo: {
                        required: "This field is required",
                        digits: "Please give the correct value"
                    },
                    nmBankHolder: "This field is required",
                    nmWallet: "This field is required",
                    nmCash: {
                        required: "This field is required",
                        number: "Please give the correct value"
                    },
                    nmInfo: "This field is required",
                }

            });

            $("#nmFormPayment").validate({
                rules: {
                    nmSell: {
                        required: true,
                        digits: true
                    },
                    nmSendBTC: "required",
                    nmPayWith: "required"
                },

                messages: {
                    nmSell: {
                        required: "This field is required",
                        digits: "Please give the correct value"
                    },
                    nmSendBTC: "This field is required",
                    nmPayWith: "This field is required",
                }

            });
	
})