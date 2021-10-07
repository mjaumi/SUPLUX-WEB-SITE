/**
 * book button
 */
const bookingBtnJourney = document.getElementById('book_btn_journey');
const bookingBtnReturn = document.getElementById('book_btn_return');

/**
 * purchase button
 */
const purchaseBtnJourney = document.getElementById('purchase_btn_journey');
const purchaseBtnReturn = document.getElementById('purchase_btn_return');

/**
 * payment container
 */
const paymentMethodJourney = document.getElementById('payment_method_journey_container');
const paymentMethodReturn = document.getElementById('payment_method_return_container');

/**
 * journey payments button
 */
const bkashJourney = document.getElementById('bkash_journey');
const rocketJourney = document.getElementById('rocket_journey');
const nagadJourney = document.getElementById('nagad_journey');

/**
 * return payments button
 */
 const bkashReturn = document.getElementById('bkash_return');
 const rocketReturn = document.getElementById('rocket_return');
 const nagadReturn = document.getElementById('nagad_return');
 


const PaymentModal = document.getElementById('payment_modal');

/**
 * confirm buttons
 */
 const journeyConfirmBtn = document.getElementById('journey_confirm');
 const returnConfirmBtn = document.getElementById('return_confirm');

/**
 * user chose booking or payment
 */
var whichOptionSelectedJourney;

bookingBtnJourney.onclick = function(){

    paymentMethodJourney.classList.toggle('payment_method_mode');
    paymentMethodJourney.classList.toggle('d-none');

    whichOptionSelectedJourney = 'book';
}

bookingBtnReturn.onclick = function(){

    paymentMethodReturn.classList.toggle('payment_method_mode');
    paymentMethodReturn.classList.toggle('d-none');

    whichOptionSelectedJourney = 'book';
}


purchaseBtnJourney.onclick = function(){

    paymentMethodJourney.classList.toggle('payment_method_mode');
    paymentMethodJourney.classList.toggle('d-none');

    whichOptionSelectedJourney = 'purchase';
}

purchaseBtnReturn.onclick = function(){

    paymentMethodReturn.classList.toggle('payment_method_mode');
    paymentMethodReturn.classList.toggle('d-none');

    whichOptionSelectedJourney = 'purchase';
}

bkashJourney.onclick = function() {

    returnConfirmBtn.classList.add('d-none');
    journeyConfirmBtn.classList.remove('d-none');

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Bkash Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");

    } else{

        $('#payment_modal_title').text('Bkash Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");

    }
    createCookie("pay_method", "Bkash", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Bkash Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Bkash Number');
};

bkashReturn.onclick = function() {

    returnConfirmBtn.classList.remove('d-none');
    journeyConfirmBtn.classList.add('d-none');


    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Bkash Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#return_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");
    } else{

        $('#payment_modal_title').text('Bkash Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");

    }
    createCookie("pay_method", "Bkash", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Bkash Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Bkash Number');
};

rocketJourney.onclick = function() {

    returnConfirmBtn.classList.add('d-none');
    journeyConfirmBtn.classList.remove('d-none');


    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Rocket Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");
    } else{

        $('#payment_modal_title').text('Rocket Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");
    }
    createCookie("pay_method", "Rocket", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Rocket Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Rocket Number');
};

rocketReturn.onclick = function() {

    returnConfirmBtn.classList.remove('d-none');
    journeyConfirmBtn.classList.add('d-none');

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Rocket Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#return_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");
    } else{

        $('#payment_modal_title').text('Rocket Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");

    }

    createCookie("pay_method", "Rocket", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Rocket Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Rocket Number');
};

nagadJourney.onclick = function() {

    returnConfirmBtn.classList.add('d-none');
    journeyConfirmBtn.classList.remove('d-none');


    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Nagad Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");
    } else{

        $('#payment_modal_title').text('Nagad Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");
    }

    createCookie("pay_method", "Nagad", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Nagad Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Nagad Number');
};

nagadReturn.onclick = function() {

    returnConfirmBtn.classList.remove('d-none');
    journeyConfirmBtn.classList.add('d-none');

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Nagad Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#return_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  $('#pay_fare').html(), "15");

    } else{

        $('#payment_modal_title').text('Nagad Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

        createCookie("payable_fare",  "0", "15");
    }

    createCookie("pay_method", "Nagad", "15");

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Nagad Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Nagad Number');

};


window.onload = function(){

    var queryString = decodeURIComponent(window.location.search);
            console.log(queryString);
            queryString = queryString.substring(1);
            var queries = queryString.split("&");

            if(queries[0] === 'return=y'){

                $('#return_ticket').removeClass('d-none');
            } else{

                $('#return_ticket').addClass('d-none');
                $('#journey_ticket').addClass('add_margin');
            }
};


function createCookie(name, value, minutes) {
    var expires;
    
      
    if (minutes) {
        var date = new Date();
        date.setTime(date.getTime() + (minutes * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}
  
