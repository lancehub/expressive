<?php

namespace BS\Traits;

use BS\Controller\Exception\MethodNotAllowedException;

trait NotAllowAccessTrait
{
    public function indexAction()
    {
        throw new MethodNotAllowedException();
    }

    public function postAction()
    {
        throw new MethodNotAllowedException();
    }

    public function deleteAction()
    {
        throw new MethodNotAllowedException();
    }

    public function deleteListAction()
    {
        throw new MethodNotAllowedException();
    }
}