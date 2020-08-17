<?php

namespace App\DataFixtures;

use App\Entity\Cemetery;
use App\Entity\Grave;
use Conduction\CommonGroundBundle\Service\CommonGroundService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class WestFrieslandFixtures extends Fixture
{
    private $params;
    private $commonGroundService;

    public function __construct(ParameterBagInterface $params, CommonGroundService $commonGroundService)
    {
        $this->params = $params;
        $this->commonGroundService = $commonGroundService;
    }

    public function load(ObjectManager $manager)
    {
        if (
            !$this->params->get('app_build_all_fixtures') &&
            $this->params->get('app_domain') != 'zuid-drecht.nl' && strpos($this->params->get('app_domain'), 'zuid-drecht.nl') == false
        ) {
            return false;
        }

        // Cemeteries
        // Algemene Begraafplaats "Rustoord"
        $id = Uuid::fromString('5ff4e420-f5bc-4296-b02c-bf5b42215987');
        $cemetery = new Cemetery();
        $cemetery->setReference('Algemene Begraafplaats "Rustoord"');
        $cemetery->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $cemetery->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'f4fa187b-c807-4e20-afda-dff758d68cae']));
        $cemetery->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($cemetery);
        $cemetery->setId($id);
        $manager->persist($cemetery);
        $manager->flush();
        $cemetery = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        $id = Uuid::fromString('f1d81883-4c48-4ce6-8f43-482ba0a7226e');
        $cemetery = new Cemetery();
        $cemetery->setReference('Nieuwe gemeentelijke begraafplaats');
        $cemetery->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $cemetery->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'f4fa187b-c807-4e20-afda-dff758d68cae']));
        $cemetery->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($cemetery);
        $cemetery->setId($id);
        $manager->persist($cemetery);
        $manager->flush();
        $cemetery = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

    }
}
