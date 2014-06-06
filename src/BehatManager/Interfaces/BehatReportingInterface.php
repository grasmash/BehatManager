<?php namespace BehatManager\Interfaces;

interface BehatReportingInterface {

  /**
   * Returns an array of results from Behat runs.
   *
   * @return array
   *   An associative array, keyed by report id.
   */
  public function index();

  /**
   * Retrieves the results of all scenarios for a given Behat feature.
   *
   * @param string $id
   *   A behat feature identifier.
   *
   * @return array
   *   An associative array of ScenarioResult objects, keyed by scenario id.
   */
  public function showFeatureReport(string $id);

  /**
   * Retrieves the result of a Behat run for a given scenario using scenario id.
   * @param string $id
   *   A behat scenario identifier.
   *
   * @return ScenarioResult
   *   A ScenarioResult object.
   */
  public function showScenarioReport(string $id);

  /**
   * Retrieves the result of a Behat run for a given scenario using report id.
   *
   * @param string $id
   *   A behat ScenarioResult id.
   *
   * @return ScenarioResult
   *   A ScenarioResult object.
   */
  public function showReport(string $id);

  /**
   * Creates a new scenario result.
   *
   * @param ScenarioResult $result
   *   The behat scenario result to be created.
   *
   * @return bool
   *   TRUE is the behat scenario was successfully created.
   */
  public function create(ScenarioResult $result);
}
