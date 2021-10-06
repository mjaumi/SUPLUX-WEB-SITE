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

/**
 * journey payments button
 */
const bkashJourney = document.getElementById('bkash_journey');
const rocketJourney = document.getElementById('rocket_journey');
const nagadJourney = document.getElementById('nagad_journey');


const PaymentModal = document.getElementById('payment_modal');

/**
 * user chose booking or payment
 */
var whichOptionSelectedJourney;

bookingBtnJourney.onclick = function(){

    paymentMethodJourney.classList.toggle('payment_method_mode');
    paymentMethodJourney.classList.toggle('d-none');

    whichOptionSelectedJourney = 'book';
}

purchaseBtnJourney.onclick = function(){

    paymentMethodJourney.classList.toggle('payment_method_mode');
    paymentMethodJourney.classList.toggle('d-none');

    whichOptionSelectedJourney = 'purchase';
}

bkashJourney.onclick = function() {

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Bkash Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));
    } else{

        $('#payment_modal_title').text('Bkash Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));

    }

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Bkash Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Bkash Number');
};

rocketJourney.onclick = function() {

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Rocket Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));
    } else{

        $('#payment_modal_title').text('Rocket Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));
    }

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Rocket Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Rocket Number');
};

nagadJourney.onclick = function() {

    if(whichOptionSelectedJourney === 'book'){

        $('#payment_modal_title').text('Nagad Booking Payment');

        $('#dis_fare_title').text('Payable Fare:');
        $('#pay_fare_title').text('Due Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.2;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));
    } else{

        $('#payment_modal_title').text('Nagad Purchase Payment');

        $('#dis_fare_title').text('Discount Fare:');
        $('#pay_fare_title').text('Payable Fare:');

        $('#total_fare').text($('#journey_fare').html());

        var fareInt = parseInt($('#total_fare').html().substring(3));

        var discountFare = fareInt * 0.05;
        
        $('#dis_fare').text('BDT ' + discountFare); 
        $('#pay_fare').text('BDT ' + (fareInt - discountFare));
    }

    $('#payment_phone_no_journey').attr('placeholder', 'Enter Nagad Number');
    $('#payment_pin_journey').attr('placeholder', 'Enter Nagad Number');
};



