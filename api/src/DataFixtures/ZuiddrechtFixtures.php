<?php

namespace App\DataFixtures;

use App\Entity\Cemetery;
use App\Entity\Grave;
use Conduction\CommonGroundBundle\Service\CommonGroundService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ZuiddrechtFixtures extends Fixture
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
            $this->params->get('app_domain') != 'zuiddrecht.nl' && strpos($this->params->get('app_domain'), 'zuiddrecht.nl') == false &&
            $this->params->get('app_domain') != 'zuid-drecht.nl' && strpos($this->params->get('app_domain'), 'zuid-drecht.nl') == false
        ) {
            return false;
        }

        // Cemeteries
        // Algemene Begraafplaats
        $id = Uuid::fromString('5ff4e420-f5bc-4296-b02c-bf5b42215987');
        $cemetery = new Cemetery();
        $cemetery->setReference('Algemene Begraafplaats');
        $cemetery->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'4d1eded3-fbdf-438f-9536-8747dd8ab591'])); //SED
        $cemetery->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'e46e6b3e-9b3a-4339-9d69-874d8dd6bc44']));
        $cemetery->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($cemetery);
        $cemetery->setId($id);
        $manager->persist($cemetery);
        $manager->flush();
        $cemetery = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        $id = Uuid::fromString('f1d81883-4c48-4ce6-8f43-482ba0a7226e');
        $cemetery = new Cemetery();
        $cemetery->setReference('Nieuwe gemeentelijke begraafplaats');
        $cemetery->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'4d1eded3-fbdf-438f-9536-8747dd8ab591'])); //SED
        $cemetery->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'7fd885e9-f274-4e55-9167-66167f70d474']));
        $cemetery->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($cemetery);
        $cemetery->setId($id);
        $manager->persist($cemetery);
        $manager->flush();
        $cemetery = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

    }
}
