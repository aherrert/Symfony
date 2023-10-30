<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
/*Hola me llamo A*/
class ApiController
{

    /**
     * @Route("/about-us", name="api_about_us")
     */
    public function getAboutUsInfo(): JsonResponse
    {
        $aboutUsInfo = [
            'title' => 'Quiénes somos',
            'content' => 'Somos una empresa dedicada a la informática con 3 diferentes departamentos...',
        ];

        return new JsonResponse($aboutUsInfo);
    }

    /**
     * @Route("/contact", name="api_contact")
     */
    public function getContactInfo(): JsonResponse
    {
        $contactInfo = [
            'email' => 'true_tech@gmail.com',
            'phone' => '+34 634740280',
        ];

        return new JsonResponse($contactInfo);
    }
}
?>