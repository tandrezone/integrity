/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');
require("chart.js");

// any CSS you import will output into a single css file (app.css in this case)
import './styles/global.scss';

// start the Stimulus application
import './bootstrap';
$( document ).ready(function() {
    $.get("/joke")
        .done(function( response ) {
            $("#joke").html(response.data)
        });
});

$( "a" ).click(function() {


$.post( "/top20", { requestId: $(this).attr('href').replace("#","") })
    .done(function( response ) {
        var ctx = document.getElementById('myChart');
        let labels;
        let values;
        labels = [];
        values = [];
        let i;
        for (i = 0; i < response.data.length; i++) {
            labels.push(response.data[i].char)
            values.push(response.data[i].ocurrences)
        }
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# of ocurrences',
                    data: values,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    });

});
