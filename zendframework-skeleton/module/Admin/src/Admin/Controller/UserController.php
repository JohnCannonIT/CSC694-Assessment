<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
   protected $studentTable;

   public function indexAction()
   {
      echo "In User Controller";  
   }
   public function addAction()
   {
      echo "Add User";  
   }
   public function editAction()
   {
      echo "Edit User";  
   }
   public function deleteAction()
   {
      echo "Delete User";  
   }

}
