const modifySearchBtn = document.getElementById('modify_search_btn');
const modifyCancelhBtn = document.getElementById('cancel_btn');
const addReturnTicketBtn = document.getElementById('add_return_ticket_btn');
const travelInfoCard = document.getElementById('travel_info');
const searchModifyForm = document.getElementById('search_modify_form');
const returnTripData = document.getElementById('return_trip');

const farePerSeat = document.querySelectorAll('.fare_per_seat');
const totalFare = document.querySelectorAll('.total_fare_amount');

/**
 * card info details
 */
const coachInfoDetails = document.querySelectorAll('.coach_info_details');
const viewSeatsBtn = document.querySelectorAll('.seat_map_btn');
const coachType = document.querySelectorAll('.coach_type'); 
const coachNo = document.querySelectorAll('.coach_no'); 
const startingPoint = document.querySelectorAll('.starting'); 
const endingPoint = document.querySelectorAll('.ending'); 

/**
 * trip details informations
 */
const coachTypeTripDetails = document.querySelectorAll('.coach_type_trip_details'); 
const coachNoTripDetails = document.querySelectorAll('.coach_no_trip_details'); 
const startingPointTripDetails = document.querySelectorAll('.starting_trip_details'); 
const endingPointTripDetails = document.querySelectorAll('.ending_trip_details'); 
const farePerSeatTripDetails = document.querySelectorAll('.fare_per_seat_table');
const reportingTime = document.querySelectorAll('.reporting_time');
const departureTime = document.querySelectorAll('.departure_time');


/**
 * seat maps for different coach types
 */
const nonAC = document.querySelectorAll('.seat_wrapper_non_ac');
const multiAxle = document.querySelectorAll('.seat_wrapper_ac_multi');
const biAxle = document.querySelectorAll('.seat_wrapper_ac_bi');
const sleeperLower = document.querySelectorAll('.seat_wrapper_ac_sleeper_lower');
const sleeperUpper = document.querySelectorAll('.seat_wrapper_ac_sleeper_upper');
const ddLower = document.querySelectorAll('.seat_wrapper_ac_dd_lower');
const ddUpper = document.querySelectorAll('.seat_wrapper_ac_dd_upper');

/**
 * seat data
 */
 const multiACSeat = document.querySelectorAll('.bussiness_class_seat_multi');
 const biACSeat = document.querySelectorAll('.bussiness_class_seat_bi');
 const sleeperSeatLower = document.querySelectorAll('.bussiness_class_seat_sleeper_lower');
 const sleeperSeatUpper = document.querySelectorAll('.bussiness_class_seat_sleeper_upper');
 const ddSeatUpper = document.querySelectorAll('.bussiness_class_seat_dd_upper');
 const ddSeatLower = document.querySelectorAll('.bussiness_class_seat_dd_lower');
 const nonACSeat = document.querySelectorAll('.economy_class_seat');
 
 const mutliACseatNo = document.querySelectorAll('.bussiness_class_seat_multi .seat_label');
 const biACseatNo = document.querySelectorAll('.bussiness_class_seat_bi .seat_label');
 const sleeperLowerSeatNo = document.querySelectorAll('.bussiness_class_seat_sleeper_lower .seat_label');
 const sleeperUpperSeatNo = document.querySelectorAll('.bussiness_class_seat_sleeper_upper .seat_label');
 const ddUpperSeatNo = document.querySelectorAll('.bussiness_class_seat_dd_upper .seat_label');
 const ddLowerSeatNo = document.querySelectorAll('.bussiness_class_seat_dd_lower .seat_label');
 const nonACSeatNo = document.querySelectorAll('.economy_class_seat .seat_label');


const deckSelectorContainer = document.querySelectorAll('.deck_selector_container'); 
const deckSelector = document.querySelectorAll('.deck_selector'); 

/**
 * seat table attributes
 */
const seatTable = document.querySelectorAll('.seat_details_table');
const seatTableBody = document.querySelectorAll('.seat_details_table_body');
const seatTableData = document.querySelectorAll('.seat_details_table .details_title_table');

const sleeperDriver = document.querySelectorAll('.driver_container_sleeper');

var tableIndex;
var totalInt = 0;
var selectedSeatCount = 0;
var previousCardIndex = -1;

/**
 * this loop is toggleing upper and lower decks
 */
for (const [i, element] of deckSelector.entries()) {
    
    element.onchange = function(){

        if(element.options[element.selectedIndex].value === 'lower'){

            if(coachType[i].innerHTML === 'Sleeper'){

                sleeperLower[i].classList.remove('d-none');
                sleeperUpper[i].classList.add('d-none');
            } else if(coachType[i].innerHTML === 'DD'){

                ddLower[i].classList.remove('d-none');
                ddUpper[i].classList.add('d-none');
            }
            
        } else{

            if(coachType[i].innerHTML === 'Sleeper'){

                sleeperLower[i].classList.add('d-none');
                sleeperUpper[i].classList.remove('d-none');
            } else if(coachType[i].innerHTML === 'DD'){

                ddLower[i].classList.add('d-none');
                ddUpper[i].classList.remove('d-none');
            }
        }

    }

}

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
    document.getElementById('return_datepicker').focus();
}

/**
 * this is checking wheather user has selected return date or not
 */
if($("#return_datepicker").datepicker("getDate") === null) {
    
    returnTripData.classList.toggle('d-none');
} else{

    addReturnTicketBtn.classList.toggle('d-none');
}

/**
 * this is toggling the view seats option
 */
for (const [i, element] of viewSeatsBtn.entries()) {
    
    element.onclick = function(){
 
        coachInfoDetails[i].classList.toggle('d-none');
        coachInfoDetails[i].classList.toggle('view_seat_mode');

        /**
         * resetting data
         */
        tableIndex = i;
        selectedSeatCount = 0;
        totalInt = 0;
        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
        
        $('.seat_details_table_body').children().remove();
         
        
        multiACSeat.forEach(element => {
            
            element.classList.remove('selected');
        });

        biACSeat.forEach(element => {
            
            element.classList.remove('selected');
        });

        ddSeatUpper.forEach(element => {
            
            element.classList.remove('selected');
        });

        ddSeatLower.forEach(element => {
            
            element.classList.remove('selected');
        });

        sleeperSeatUpper.forEach(element => {
            
            element.classList.remove('selected');
        });

        sleeperSeatLower.forEach(element => {
            
            element.classList.remove('selected');
        });

        nonACSeat.forEach(element => {
            
            element.classList.remove('selected');
        });

        farePerSeatTripDetails[i].innerHTML = farePerSeat[i].innerHTML;
        coachTypeTripDetails[i].innerHTML = coachType[i].innerHTML;
        coachNoTripDetails[i].innerHTML = coachNo[i].innerHTML;
        startingPointTripDetails[i].innerHTML = startingPoint[i].innerHTML;
        endingPointTripDetails[i].innerHTML = endingPoint[i].innerHTML;

        if(coachType[i].innerHTML === 'AC (Multi)'){

            multiAxle[i].classList.remove('d-none');
        } else if(coachType[i].innerHTML === 'AC (Bi)'){

            biAxle[i].classList.remove('d-none');
        } else if(coachType[i].innerHTML === 'Sleeper'){

            sleeperLower[i].classList.remove('d-none');
            deckSelectorContainer[i].classList.remove('d-none');
        } else if(coachType[i].innerHTML === 'DD'){

            ddLower[i].classList.remove('d-none');
            deckSelectorContainer[i].classList.remove('d-none');
        } else if(coachType[i].innerHTML === 'NON-AC'){

            nonAC[i].classList.remove('d-none');
        }

        if(previousCardIndex !== -1){

            window.scrollBy(0, coachInfoDetails[i].offsetHeight - coachInfoDetails[previousCardIndex].offsetHeight);
        } else{

            coachInfoDetails[i].scrollIntoView();
        }
        
        for (let j = 0; j < coachInfoDetails.length; j++) {
            
            if(j != i){

                if(!coachInfoDetails[j].classList.contains('d-none')){

                    coachInfoDetails[j].classList.toggle('d-none');
                }

                if(coachInfoDetails[j].classList.contains('view_seat_mode')){

                    coachInfoDetails[j].classList.toggle('view_seat_mode');
                }

            }
        }

        previousCardIndex = i;
    }
}

for (const [i, element] of multiACSeat.entries()) {

    element.onclick = function(){

        if(!multiACSeat[i].classList.contains('selected') && selectedSeatCount < 4){

            multiACSeat[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode(mutliACseatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(multiACSeat[i].classList.contains('selected')){

            multiACSeat[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === mutliACseatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }
    
        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}

for (const [i, element] of biACSeat.entries()) {

    element.onclick = function(){

        if(!biACSeat[i].classList.contains('selected') && selectedSeatCount < 4){

            biACSeat[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode(biACseatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(biACSeat[i].classList.contains('selected')){

            biACSeat[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === biACseatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }
    
        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}

for (const [i, element] of ddSeatUpper.entries()) {

    element.onclick = function(){

        if(!ddSeatUpper[i].classList.contains('selected') && selectedSeatCount < 4){

            ddSeatUpper[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode('U' + ddUpperSeatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(ddSeatUpper[i].classList.contains('selected')){

            ddSeatUpper[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === 'U' + ddUpperSeatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }
    
        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}  

for (const [i, element] of ddSeatLower.entries()) {

    element.onclick = function(){

        if(!ddSeatLower[i].classList.contains('selected') && selectedSeatCount < 4){

            ddSeatLower[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode('L' + ddLowerSeatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(ddSeatLower[i].classList.contains('selected')){

            ddSeatLower[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === 'L' + ddLowerSeatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }

        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}  

for (const [i, element] of sleeperSeatUpper.entries()) {

    element.onclick = function(){

        if(!sleeperSeatUpper[i].classList.contains('selected') && selectedSeatCount < 4){

            sleeperSeatUpper[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode('U' + sleeperUpperSeatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(sleeperSeatUpper[i].classList.contains('selected')){

            sleeperSeatUpper[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === 'U' + sleeperUpperSeatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }

        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}  

for (const [i, element] of sleeperSeatLower.entries()) {

    element.onclick = function(){

        if(!sleeperSeatLower[i].classList.contains('selected') && selectedSeatCount < 4){

            sleeperSeatLower[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode('L' + sleeperLowerSeatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Bussiness');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(sleeperSeatLower[i].classList.contains('selected')){

            sleeperSeatLower[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === 'L' + sleeperLowerSeatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }

        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
}  

for (const [i, element] of nonACSeat.entries()) {

    element.onclick = function(){

        if(!nonACSeat[i].classList.contains('selected') && selectedSeatCount < 4){

            nonACSeat[i].classList.toggle('selected');

            var tableRow = document.createElement('tr');   

            var selectedSeat = document.createElement('td');
            var seatType = document.createElement('td');
            var seatFare = document.createElement('td');

            selectedSeat.classList.add('details_title_table');
            selectedSeat.classList.add('seat_no');
            seatType.classList.add('details_title_table');
            seatFare.classList.add('details_title_table');
        
            var selectedSeatText = document.createTextNode(nonACSeatNo[i].innerHTML);
            var seatTypeText = document.createTextNode('Economy');
            var seatFareText = document.createTextNode(farePerSeat[tableIndex].innerHTML);
        
            selectedSeat.appendChild(selectedSeatText);
            seatType.appendChild(seatTypeText);
            seatFare.appendChild(seatFareText);

            tableRow.appendChild(selectedSeat);
            tableRow.appendChild(seatType);
            tableRow.appendChild(seatFare);

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt += fareInt;

            seatTableBody[tableIndex].appendChild(tableRow);
            selectedSeatCount++;

        }  else if(nonACSeat[i].classList.contains('selected')){

            nonACSeat[i].classList.toggle('selected');

            var rows = seatTable[tableIndex].rows;

            for (var j = 1; j < rows.length; j++) {
                var cols = rows[j].cells;
                
                for (var c = 0; c < cols.length; c++) {
                    if (cols[c].innerText === nonACSeatNo[i].innerHTML) {
                    
                        seatTable[tableIndex].deleteRow(j);
                        selectedSeatCount--;
                    }
                }
            }

            var fareString = farePerSeatTripDetails[tableIndex].innerHTML.substring(4);
            var fareInt = parseInt(fareString);

            totalInt -= fareInt;

        } else if(selectedSeatCount >= 4){

            alert('Sorry, You can not choose more than 4 seats at a time.');
        }

        totalFare[tableIndex].innerHTML = 'BDT ' + totalInt;
    }
} 

const continueBtn = document.querySelectorAll('.continue_btn');

for (const [i, element] of continueBtn.entries()){

    element.onclick = function(){

        var seatString = '';


        if(seatTableBody[i].rows.length === 0){

            alert("Please select at least one seat.");
            createCookie("seats", seatString, "-15");
        } else{

            for (var j = 0; j < seatTableBody[i].rows.length; j++) {
            
                if(j === 0){

                    seatString = seatTableBody[i].rows[j].cells[0].innerHTML;
                }else{

                    seatString += ', ' + seatTableBody[i].rows[j].cells[0].innerHTML;
                }

            }

            var queryString = decodeURIComponent(window.location.search);
            console.log(queryString);
            queryString = queryString.substring(1);
            var queries = queryString.split("&");

            if(queries[0] === 'return=y1'){

                createCookie("seats_return", seatString, "15");
                createCookie("coach_type_return", coachTypeTripDetails[tableIndex].innerHTML, "15");
                createCookie("coach_no_return", coachNoTripDetails[tableIndex].innerHTML, "15");
                createCookie("starting_point_return", startingPointTripDetails[tableIndex].innerHTML, "15");
                createCookie("ending_point_return", endingPointTripDetails[tableIndex].innerHTML, "15");
                createCookie("fare_return", totalFare[tableIndex].innerHTML, "15");
                createCookie("reporting_time_return", reportingTime[tableIndex].innerHTML, "15");
                createCookie("departure_time_return", departureTime[tableIndex].innerHTML, "15");
            } else{

                createCookie("seats", seatString, "15");
                createCookie("coach_type", coachTypeTripDetails[tableIndex].innerHTML, "15");
                createCookie("coach_no", coachNoTripDetails[tableIndex].innerHTML, "15");
                createCookie("starting_point", startingPointTripDetails[tableIndex].innerHTML, "15");
                createCookie("ending_point", endingPointTripDetails[tableIndex].innerHTML, "15");
                createCookie("fare", totalFare[tableIndex].innerHTML, "15");
                createCookie("reporting_time", reportingTime[tableIndex].innerHTML, "15");
                createCookie("departure_time", departureTime[tableIndex].innerHTML, "15");
            }

        }
        
    }
}  


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



const modifyTitle = document.querySelectorAll('.modify_title');
const busIcon = document.querySelectorAll('.bus_icon');
const fromTo = document.querySelectorAll('.from_to');
const travelDate = document.querySelectorAll('.travel_date'); 

window.onload = function(){

    var queryString = decodeURIComponent(window.location.search);
    console.log(queryString);
    queryString = queryString.substring(1);
    var queries = queryString.split("&");

    if(queries[0] === 'return=y1'){

        modifyTitle[0].classList.remove('selected');
        busIcon[0].classList.remove('selected');
        fromTo[0].classList.remove('selected');
        travelDate[0].classList.remove('selected');

        modifyTitle[1].classList.add('selected');
        busIcon[1].classList.add('selected');
        fromTo[1].classList.add('selected');
        travelDate[1].classList.add('selected');
    } else{

        modifyTitle[1].classList.remove('selected');
        busIcon[1].classList.remove('selected');
        fromTo[1].classList.remove('selected');
        travelDate[1].classList.remove('selected');

        modifyTitle[0].classList.add('selected');
        busIcon[0].classList.add('selected');
        fromTo[0].classList.add('selected');
        travelDate[0].classList.add('selected');
    }
};