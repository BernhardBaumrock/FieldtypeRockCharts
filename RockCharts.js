console.log('RockCharts.js');

/**
 * Main object.
 */
function RockCharts() {
  this.charts = [];
}

/**
 * Add chart to main object.
 */
RockCharts.prototype.addChart = function(el, chart, config) {
  this.charts.push({
    name: this.getChartName(el),
    chart: chart,
    config: config,
  });
}

/**
 * Get chart name from Inputfield name.
 */
RockCharts.prototype.getChartName = function(el) {
  if(typeof el.target != 'undefined') el = el.target.id;
  return el.replace('Inputfield_', '');
}

/**
 * Get chart by name or element.
 */
RockCharts.prototype.getChart = function(el) {
  var name = this.getChartName(el);
  for(var i = 0; i < this.charts.length; i++) {
    var item = this.charts[i];
    if(item.name == name) return item.chart;
  }
  return false;
}

/**
 * Get config object by name or element.
 */
RockCharts.prototype.getConfig = function(el) {
  var name = this.getChartName(el);
  for(var i = 0; i < this.charts.length; i++) {
    var item = this.charts[i];
    if(item.name == name) return item.config;
  }
  return false;
}

// assign global variable
var RockCharts = new RockCharts();
