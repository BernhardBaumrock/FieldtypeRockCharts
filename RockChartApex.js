console.log('RockChartApex.js');

function RockChartApex() {
}

RockChartApex.prototype.init = function(e, options) {
  $chart = $(e.target).find('.RockChartApex');
  $chart.html('');
  var chart = new ApexCharts($chart[0], options);
  chart.render();
}

// assign global variable
var RockChartApex = new RockChartApex();
