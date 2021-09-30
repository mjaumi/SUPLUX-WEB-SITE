$("#journey_datepicker").datepicker({
    minDate: 0,
    maxDate: new Date(new Date().setMonth(new Date().getMonth() + 2)),
    showOtherMonths: true,
    changeMonth: true,
    changeYear: true,
    showAnim: "slideDown",
    dateFormat: 'dd-M-yy'
}).on( "change", function() {
    $("#return_datepicker").datepicker( "option", "minDate", $(this).val());
});

$("#return_datepicker").datepicker({
    minDate: 0,
    maxDate: new Date(new Date().setMonth(new Date().getMonth() + 3)),
    showOtherMonths: true,
    changeMonth: true,
    changeYear: true,
    showAnim: "slideDown",
    dateFormat: 'dd-M-yy'
});
  
$(".date").mousedown(function() {
    $(".ui-datepicker").addClass("active");
});