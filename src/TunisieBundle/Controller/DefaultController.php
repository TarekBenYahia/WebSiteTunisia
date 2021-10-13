<?php

namespace TunisieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Tunisie/Default/index.html.twig');
    }
    public function galleryAction()
    {
        return $this->render('@Tunisie/Default/gallery.html.twig');
    }
    public function mapAction()

    {
        return $this->render('@Tunisie/Default/map.html.twig');
    }
    public function mapDetailAction()

    {
        return $this->render('@Tunisie/Default/mapDetail.html.twig');
    }

}
