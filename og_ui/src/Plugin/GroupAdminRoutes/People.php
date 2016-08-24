<?php

namespace Drupal\og_ui\Plugin\GroupAdminRoutes;

use Drupal\og_ui\OgAdminRouteAbstract;
use Drupal\og_ui\OgAdminRouteInterface;

/**
 * Manage people in the group.
 *
 * @OgAdmin(
 *   id = "people",
 *   path = "people",
 *   title = @Translation("People"),
 *   description = @Translation("Manage the group's members"),
 *   permission = "administer group",
 *   route_id = "people",
 *   parents_routes = {
 *    "node" = "entity.node.canonical"
 *   }
 * )
 */
class People extends OgAdminRouteAbstract {

  /**
   * {@inheritdoc}
   */
  public function getRoutes() {

    return [
      OgAdminRouteInterface::MAIN => [
        'controller' => '\Drupal\og_ui\Controller\PeopleController::PeopleList',
        'sub_path' => 'manage',
        'title' => 'People',
      ],
      'add' => [
        'controller' => '\Drupal\og_ui\Controller\PeopleController::addPeopleForm',
        'sub_path' => 'add',
        'title' => 'Add people',
        'type' => 'local_action',
      ],
    ];
  }

}
