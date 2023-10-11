<?php

class Subscription
{

    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }

    public function cancel()
    {

        // find a stripe customer
        $customer = $this->gateway->findCustomer();
        // find a stripe subscription by customer
    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {

    }

}


interface Gateway
{
    public function findCustomer();

    public function findSubscriptionByCustomer();
}

class StripeGetaway implements Gateway
{
    public function findCustomer()
    {
        echo 'Find Customer from StripeGateway';
    }

    public function findSubscriptionByCustomer()
    {

    }
}


$subscription = new Subscription(new StripeGetaway());
$subscription->cancel();