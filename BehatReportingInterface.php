<?php

class BehatReportingInterface {

  /**
   * [index description]
   * @return [type] [description]
   */
  public function index();

  /**
   * [showFeatureReport description]
   * @param  string $id [description]
   * @return [type]     [description]
   */
  public function showFeatureReport(string $id);

  /**
   * [showScenarioReport description]
   * @param  string $id [description]
   * @return [type]     [description]
   */
  public function showScenarioReport(string $id);

  /**
   * [showReport description]
   * @param  string $id [description]
   * @return [type]     [description]
   */
  public function showReport(string $id);

  /**
   * [create description]
   * @param  ScenarioResult $result [description]
   * @return [type]                 [description]
   */
  public function create(ScenarioResult $result);
}
