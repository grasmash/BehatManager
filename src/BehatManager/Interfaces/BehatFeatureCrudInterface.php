<?php

use Behat\Gherkin\Node\FeatureNode;

class BehatFeatureCrudInterface {

  /**
   * [show description]
   * @param  string $id [description]
   * @return [type]     [description]
   */
  public function show(string $id);

  /**
   * [delete description]
   * @param  string $id [description]
   * @return [type]     [description]
   */
  public function delete(string $id);

  /**
   * [update description]
   * @param  FeatureNode $id [description]
   * @return [type]          [description]
   */
  public function update(FeatureNode $id);

  /**
   * [create description]
   * @param  FeatureNode $feature [description]
   * @return [type]               [description]
   */
  public function create(FeatureNode $feature)

  /**
   * [index description]
   * @param  array  $tags [description]
   * @return [type]       [description]
   */
  public function index(array $tags);

}
