$(document).on('click', '#create_season', function(){
    $(this).hide();
    $('#create_season_container').removeClass('hidden');
});

$(document).on('click', '#cancel_seasons', function(){
    $('#create_season_container').addClass('hidden');
    $('#create_season').show();
    return false;
});

$(document).ready(function () {
    var dateStarted = $('#date_started'),
        dateEnded = $('#date_ended');

    dateStarted.datetimepicker();
    dateEnded.datetimepicker({
        useCurrent: false
    });

    dateStarted.on("dp.change", function (e) {
        dateEnded.data("DateTimePicker").minDate(e.date);
    });
    dateEnded.on("dp.change", function (e) {
        dateStarted.data("DateTimePicker").maxDate(e.date);
    });
});
