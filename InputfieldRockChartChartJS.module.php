<?php namespace ProcessWire;
/**
 * ChartJS Charts Inputfield for RockCharts Module
 *
 * @author Bernhard Baumrock, 11.02.2019
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class InputfieldRockChartChartJS extends InputfieldRockMarkup {

  /**
   * Inputfield Config
   *
   * @return void
   */
  public static function getModuleInfo() {
    return [
      'title' => 'ChartJS Charts Inputfield',
      'summary' => 'Inputfield to render ChartJS Charts',
      'version' => '0.0.1',
      'requires' => ['FieldtypeRockMarkup'],
    ];
  }

  /**
   * init
   *
   * @return void
   */
  public function init() {
    // load necessary javascript file to handle inputfield events
    $this->modules->get('FieldtypeRockMarkup')->loadScripts();

    // load chart library
    $this->config->scripts->add($this->config->urls($this)."lib/ChartJS.bundle.min.js");

    // load RockCharts Scripts
    $this->config->scripts->add($this->config->urls($this)."RockCharts.js");
    $this->config->scripts->add($this->config->urls($this)."RockChartChartJS.js");
  }

  /**
   * Render file in assets folder
   *
   * @return void
   */
  public function ___render() {
    return "<canvas class='RockChart RockChartChartJS'>Loading Chart...</canvas>".
      "<script>$('#Inputfield_{$this->name}').trigger('RockChart.init');</script>";
      
    // return "<div class='RockChart RockChartChartJS'>Loading Chart...</div>".
    // "<script>$(document).on('RockCharts.ready', function() {".
    //   "$('#Inputfield_{$this->name}').trigger('RockChart.init');".
    // "});</script>";
  }
}
