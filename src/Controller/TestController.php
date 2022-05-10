<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\CustomerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    public function __construct(
        private readOnly CustomerRepository $customerRepository
    ) {
    }

    #[Route('/test', name: 'test')]
    public function test(EntityManagerInterface $manager): Response
    {
        $customer = $this->customerRepository->findOneBy(['name' => 'Victor']);

        $customerAddressesByCityCluj = $customer->getAddressesFromCity('Cluj');
        $customerAddressesByCityBrasov = $customer->getAddressesFromCity('Brasov');

        $customerAddresses = $customer->getCustomerAddresses();
        foreach ($customerAddresses as $address) {
            // force the load
        }



        return $this->render('base.html.twig', [
            'addresses' => $customerAddresses,
            'addressesByCityCluj' => $customerAddressesByCityCluj,
            'addressesByCityBrasov' => $customerAddressesByCityBrasov
        ]);
    }
}