const modifySearchBtn = document.getElementById('modify_search_btn');
const modifyCancelhBtn = document.getElementById('cancel_btn');
const addReturnTicketBtn = document.getElementById('add_return_ticket_btn');
const travelInfoCard = document.getElementById('travel_info');
const searchModifyForm = document.getElementById('search_modify_form');
const returnTripData = document.getElementById('return_trip');

/**
 * this onclick functions are toggling modify search box and trip date
 */
modifySearchBtn.onclick = function(){
 
    travelInfoCard.classList.toggle('d-none');
    searchModifyForm.classList.toggle('d-none');
}

modifyCancelhBtn.onclick = function(){
 
    travelInfoCard.classList.toggle('d-none');
    searchModifyForm.classList.toggle('d-none');
}

addReturnTicketBtn.onclick = function(){
 
    travelInfoCard.classList.toggle('d-none');
    searchModifyForm.classList.toggle('d-none');
}

/**
 * this is checking wheather user has selected return date or not
 */
if($("#return_datepicker").datepicker("getDate") === null) {
    
    returnTripData.classList.toggle('d-none');
} else{

    addReturnTicketBtn.classList.toggle('d-none');
}