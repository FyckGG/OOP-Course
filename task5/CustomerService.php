<?php 

require './Customer.php';

class CustomerService 
{
    public function createCustomer(string $firstName, string $lastName, int $age) :string
    {
        if (!ctype_alpha($firstName))
        {
            throw new \Exception('The firstname must contain only letters');
        }

        if (!ctype_alpha($lastName))
        {
            throw new \Exception('The lastname must contain only letters');
        }

        if ($age < 0 || $age > 100)
        {
            throw new \Exception('Uncorrect age value');
        }

        $customer = new Customer($firstName, $lastName, $age);

        return 'The customer has been created successfully';
    }
}