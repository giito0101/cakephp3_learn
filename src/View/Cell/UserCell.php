<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * User cell
 */
class UserCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Users');
        $all = $this->Users->find()->first();
        $this->set('all', $all);
    }
}
