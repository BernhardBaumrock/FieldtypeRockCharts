<?php namespace ProcessWire;
/**
 * Apex Charts Inputfield for RockCharts Module
 *
 * @author Bernhard Baumrock, 11.02.2019
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class InputfieldRockChartApex extends InputfieldRockMarkup {

  /**
   * Inputfield Config
   *
   * @return void
   */
  public static function getModuleInfo() {
    return [
      'title' => 'Apex Charts Inputfield',
      'summary' => 'Inputfield to render Apex Charts',
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
    $this->config->scripts->add($this->config->urls($this)."lib/apexcharts.min.js");

    // load RockCharts Scripts
    $this->config->scripts->add($this->config->urls($this)."RockCharts.js");
    $this->config->scripts->add($this->config->urls($this)."RockChartApex.js");
  }

  /**
   * Render file in assets folder
   *
   * @return void
   */
  public function ___render() {
    return "<div class='RockChart RockChartApex'>Loading Chart...</div>".
      "<script>$('#Inputfield_{$this->name}').trigger('RockChart.init');</script>";
      
    // return "<div class='RockChart RockChartApex'>Loading Chart...</div>".
    // "<script>$(document).on('RockCharts.ready', function() {".
    //   "$('#Inputfield_{$this->name}').trigger('RockChart.init');".
    // "});</script>";
  }
}
