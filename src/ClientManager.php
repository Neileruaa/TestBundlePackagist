<?php


namespace Aurel\CreateClientBundle;


use App\Entity\Client;
use Doctrine\ORM\EntityManagerInterface;

class ClientManager
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function createDumbClient()
    {
        $client = new Client();
        $client
            ->setNom("DumbClient")
            ->setDenominationSociale("denom")
            ->setAdresse("123 rue Apollon")
            ->setPrenom("An interesting")
        ;
        $this->em->persist($client);
        $this->em->flush();
    }
}