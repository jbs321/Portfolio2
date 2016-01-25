$(function () {

// Get context with jQuery - using jQuery's .get() method.
var ctx = $("#myChart").get(0).getContext("2d");
// This will get the first returned node in the jQuery collection.
//var myNewChart = new Chart(ctx);

var data = [
    {
        value: 60,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Server"
    },
    {
        value: 40,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Client"
    }
]




// For a pie chart
var myPieChart = new Chart(ctx).Doughnut(data);
});


$(function() {
    $('.chart').easyPieChart({
        scaleColor: "#ecf0f1",
        lineWidth: 40,
        lineCap: 'butt',
        barColor: '#1abc9c',
        trackColor: "#ecf0f1",
        size: 200,
        animate: 500
    });
});