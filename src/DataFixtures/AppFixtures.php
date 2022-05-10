<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use App\Entity\CustomerAddress;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $customer = new Customer();
        $customer->setName('Victor');

        $manager->persist($customer);
        $manager->flush();

        $manager->persist($this->createCustomerAddress($customer, 'Cluj'));
        $manager->persist($this->createCustomerAddress($customer, 'Brasov'));

        $manager->flush();
    }

    private function createCustomerAddress(Customer $customer, string $city): CustomerAddress
    {
        $address = new CustomerAddress();
        $address->setCity($city);
        $address->setCustomer($customer);

        return $address;
    }
}
