<?php




interface Newsletter
{
    public function subscribe($email);
}


class CampaignMonitor implements Newsletter
{
//
//    protected $apiKey;
//
//    /**
//     * @param $apiKey
//     */
//    public function __construct($apiKey)
//    {
//        $this->apiKey = $apiKey;
//    }


    public function subscribe($email)
    {
        die('subscribing with Campaign Monitor');
    }
}

class Drip implements Newsletter
{
    public function subscribe($email)
    {

        die('subscribing with Drip');

    }

}




class NewsletterSubscriptionController
{

    public function store(Newsletter $newsletter)
    {
        $newsletter->subscribe('demo@demo.com');

    }
}

$controller = new NewsletterSubscriptionController();


$controller->store(new CampaignMonitor());