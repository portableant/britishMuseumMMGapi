<?php
namespace MmgApi\Api\Controller;

use MmgApi\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class VisitController extends AbstractRestfulJsonController
{
    /** List all resources, no ID called.
     * Access Method GET
     * @access public
     */
    public function getList()
    {
        return new JsonModel(
            array('data' =>
                array(
                    array('id'=> 1, 'name' => 'Neil MacGregor', 'role' => 'Director'),
                    array('id'=> 2, 'name' => 'Daniel Pett', 'role' => 'Web wizard'),
                )
            )
        );
    }

    /** Get a resource by ID number
     * Access Method GET
     * @access public
     * @return array
     *
     */
    public function get($id)
    {
        return new JsonModel(array("data" => array('id'=> 2, 'name' => 'Will Robinson', 'role' => 'Creative beast')));
    }

    /** Get a resource by ID number
     * Access Method POST
     * @access public
     * @var array $data
     * @return array
     *
     */
    public function create($data)
    {
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'Chris M', 'role' => 'Overlord')));
    }

    /** Update a resource
     * Access method PUT
     * @access public
     * @var string $id
     * @var array $data
     */
    public function update($id, $data)
    {   // Action used for PUT requests
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'Updated visit', 'role' => 'Updated')));
    }


    /** Delete a visit
     * Access method DELETE - will this ever be used?
     * @access public
     * @var string $id
     */
    public function delete($id)
    {   // Action used for DELETE requests
        return new JsonModel(array('data' => 'Visit id 3 deleted'));
    }
}