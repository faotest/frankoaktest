<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsersController extends AbstractActionController
{
    // list of all user profiles
    public function indexAction()
    {
        return new ViewModel();
    }

    // create new user
    public function newAction()
    {
        return new ViewModel();
    }

    // read new user
    public function showAction()
    {
        return new ViewModel();
    }

    // update new user
    public function updateAction()
    {
        return new ViewModel();
    }

    // delete new user
    public function deleteAction()
    {
        return new ViewModel();
    }
}
