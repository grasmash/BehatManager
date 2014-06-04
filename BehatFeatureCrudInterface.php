<?php

use Behat\Gherkin\Node\FeatureNode;

class BehatFeatureCrudInterface {

  /**
   * Retrieves a Behat feature.
   *
   * @param string $id
   *   A feature identifier.
   *
   * @return FeatureNode
   *   A Behat feature object.
   */
  public function show(string $id);

  /**
   * Deletes a Behat feature.
   *
   * @param string $id
   *   A feature identifier.
   *
   * @return bool
   *   TRUE if the feature was successfully deleted.
   */
  public function delete(string $id);

  /**
   * Updates a Behat feature.
   *
   * @param FeatureNode $feature
   *   A behat feature object.
   *
   * @return bool
   *   TRUE if the feature was successfully updated.
   */
  public function update(FeatureNode $feature);

  /**
   * Creates a new Behat feature.
   *
   * @param FeatureNode $feature
   *   A behat feature object.
   *
   * @return bool
   *   TRUE if the feature was successfully created.
   */
  public function create(FeatureNode $feature)

  /**
   * Returns an array of Behat features, optionally filtered by tag.
   *
   * @param  array $tags
   *   (optional). A single dimensional array of tags. Defaults to empty.
   *   E.g., array('javascripts', '~api').
   *
   * @return array
   *   An associative array of Behat features, keyed by feature identifier.
   */
  public function index(array $tags);

}
