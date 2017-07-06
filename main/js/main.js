$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
});

$('.flip-arrow').click(function() {
    $(this).toggleClass('glyphicon glyphicon-menu-left');
    $(this).toggleClass('glyphicon glyphicon-menu-right');
});

// value = '08-7-2017';
//
// var dates = [
//     {date: '08-7-2017'},
//     {date: '09-7-2017'},
//     {date: '10-7-2017'}
// ];
//
// function findDates(newDate) {
//     return newDate.date === value;
// }
//
// if(dates.find(findDates)) {
//     console.log("datum is gevonden");
// } else {
//     console.log("datum is niet gevonden");
// }