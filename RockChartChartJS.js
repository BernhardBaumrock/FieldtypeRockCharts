console.log('RockChartChartJS.js');

function RockChartChartJS() {
}

RockChartChartJS.prototype.init = function(e, options) {
  $chart = $(e.target).find('.RockChartChartJS');
  $chart.html('');
  var chart = new Chart($chart, options);
  RockCharts.addChart(e.target.id, chart, options);
}

// assign global variable
var RockChartChartJS = new RockChartChartJS();
