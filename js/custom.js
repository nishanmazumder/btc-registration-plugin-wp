jQuery(document).ready(function ($) {

    // Input & Icon border
    formInputBorder();

    function formInputBorder() {
        var inputClass = $('.nm-input input');
        var inputIcon = $('.nm-input-icon');

        inputClass.hover(function () {
            $(this).toggleClass("nm-input-icon-jq");
            $(this).prev().toggleClass("nm-input-icon-jq");
        });

        inputClass.focusin(function () {
            $(this).prev().css("border-color", "#8BB9F3");
        });

        inputClass.focusout(function () {
            $(this).prev().css("border-color", "#e6e5e5");
        });
    }

    //Ajax call
    function nmDataResponse(dataString) {

        // $.ajax({
        //     type: 'POST',
        //     url: btc_obj.ajax_url,
        //     //data: dataString,
        //     data: {
        //         action : 'btc_reg_form',
        //         details : dataString
        //     },
        //     //dataType: 'json',
        //     success: function (data) {
        //         console.log(data)
        //     },
        //     error: function (data) {
        //         console.log(data);
        //     }
        // });


        var data = {
            'action': 'btc_reg_form',
            'details': dataString   
        };
        
        jQuery.post(btc_obj.ajax_url, data, function(response) {
            console.log(response);
        });


    }

    // $("#nmStepOne").css("display", "none");
    //     $("#nmStepTwo").css("display", "none");
    //     $("#nmStepThree").css("display", "block");

    //Form Step Start ------->
    //Registration
    nmFormStepOne();
    $("#nmStepOneSbtBtn").click(nmFormStepOne);

    function nmFormStepOne() {
        $(".nm-reg").addClass("nm-step-active");
        $(".nm-per").removeClass("nm-step-active");
        $(".nm-pay").removeClass("nm-step-active");
        $(".nm-welcome").html("Welcome!");
        $("#nmStepOne").css("display", "block");
        $("#nmStepTwo").css("display", "none");
        $("#nmStepThree").css("display", "none");
    }

    //Personal
    $("#nmStepTwoSbtBtn").click(function () {
        if ($("#nmFormReg").valid()) {

            var dataString = $("#nmFormReg").serialize();
            nmDataResponse(dataString);
            nmFormStepTwo();
        }
    });

    function nmFormStepTwo() {
        $(".nm-reg").removeClass("nm-step-active");
        $(".nm-per").addClass("nm-step-active");
        $(".nm-pay").removeClass("nm-step-active");
        $(".nm-welcome").html("Personal Informations");
        $("#nmStepOne").css("display", "none");
        $("#nmStepTwo").css("display", "block");
        $("#nmStepThree").css("display", "none");
    }

    //Payment to Personal - Individual
    $("#nmBackToPersonal").click(nmFormStepTwo);

    //Payment
    $("#nmStepThreeSbtBtn").click(function () {
        if ($("#nmFormPersonal").valid()) {
            var dataString = $("#nmFormPersonal").serialize();
            nmDataResponse(dataString);
            nmFormStepThree();
        }
    });

    function nmFormStepThree() {
        $(".nm-reg").removeClass("nm-step-active");
        $(".nm-per").removeClass("nm-step-active");
        $(".nm-pay").addClass("nm-step-active");
        $(".nm-welcome").html("Payment request");
        $("#nmStepOne").css("display", "none");
        $("#nmStepTwo").css("display", "none");
        $("#nmStepThree").css("display", "block");
    }

    //Submit
    $("#nmStepSubmit").click(function () {
        if ($("#nmFormPayment").valid()) {
            var dataString = $("#nmFormPayment").serialize();
            nmDataResponse(dataString);
            nmFormStepSubmit();
        }
    });

    function nmFormStepSubmit() {
        $(".nm-welcome").html('<h1>Thanks ! We Will back 2 you in 24hours.</h1>');
        $("#nmStepOne").css("display", "none");
        $("#nmStepTwo").css("display", "none");
        $("#nmStepThree").css("display", "none");
    }
});