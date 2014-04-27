<?php

namespace SDPHP\PhotoOpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Routing\ClassResourceInterface;

class PhotoController extends Controller implements ClassResourceInterface
{

    public function cgetAction()
    {
        return array('collection_get');
    }

    public function getAction($id)
    {
        return array('get');
    }

    public function postAction()
    {
        return array('post');
    }

    public function putAction($id)
    {
        return array('put');
    }

    public function deleteAction($id)
    {
        return array('delete');
    }

    public function patchAction($id)
    {
        return array('patch');
    }
}
