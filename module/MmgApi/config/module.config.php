<?php
/** Configuration for the api routes for the Multi media guide api handling functions
 *
 *
 * @author Daniel Pett <dpett@britishmuseum.org>
 * @copyright (c) 2015 Daniel Pett
 * @copyright (c) 2015 Trustees of the British Museum
 * @since 27/10/15
 * @license http://www.gnu.org/licenses/agpl-3.0.txt GNU Affero GPL v3.0
 *
 */
return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'MmgApi\Controller\Index',
                    ),
                ),
            ),
            'visit' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/visit[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'MmgApi\Controller\Visit',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'MmgApi\Controller\Index' => 'MmgApi\Controller\IndexController',
            'MmgApi\Controller\Visit' => 'MmgApi\Controller\VisitController',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);
