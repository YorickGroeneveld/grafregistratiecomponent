<?php

namespace App\DataFixtures;

use App\Entity\Cemetery;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class WestfrieslandFixtures extends Fixture
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function load(ObjectManager $manager)
    {
        if (
            $this->params->get('app_domain') != 'begraven.zaakonline.nl' &&
            strpos($this->params->get('app_domain'), 'begraven.zaakonline.nl') == false &&
            $this->params->get('app_domain') != 'westfriesland.commonground.nu' &&
            strpos($this->params->get('app_domain'), 'westfriesland.commonground.nu') == false
        ) {
            return false;
        }

        //urls moeten nog naar de volgende notatie: $section1->setProperties(["{$this->commonGroundService->getComponent('vtc')['location']}/properties/8f9adb13-d5e0-40de-a08c-a2ce5a648b1e"]);

        // Opperdoes (oud)
        $id = Uuid::fromString('074defab-e2eb-4eeb-a22f-caf082502db6');
        $OpperdoesOud = new Cemetery();
        $OpperdoesOud->setReference('Opperdoes (oud)');
        $OpperdoesOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $OpperdoesOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/39fe81c5-4f2e-49a0-8b4e-562e641b7f30');
        $manager->persist($OpperdoesOud);
        $OpperdoesOud->setId($id);
        $manager->persist($OpperdoesOud);
        $manager->flush();
        $OpperdoesOud = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Streekweg in Hoogkarspel
        $id = Uuid::fromString('0a46ce57-b566-4af7-b2ac-60c0520efffc');
        $StreekwegInHoogkarspel = new Cemetery();
        $StreekwegInHoogkarspel->setReference('Streekweg in Hoogkarspel');
        $StreekwegInHoogkarspel->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f');
        $StreekwegInHoogkarspel->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/ab69a95d-f46c-4b3f-9027-9f25fd9bbb5f');
        $manager->persist($StreekwegInHoogkarspel);
        $StreekwegInHoogkarspel->setId($id);
        $manager->persist($StreekwegInHoogkarspel);
        $manager->flush();
        $StreekwegInHoogkarspel = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Aartswoud
        $id = Uuid::fromString('0d600d56-45ad-4094-b006-d897559e5f23');
        $Aartswoud = new Cemetery();
        $Aartswoud->setReference('Aartswoud');
        $Aartswoud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf');
        $Aartswoud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/a03f8321-a02f-497e-993c-00677aee2566');
        $manager->persist($Aartswoud);
        $Aartswoud->setId($id);
        $manager->persist($Aartswoud);
        $manager->flush();
        $Aartswoud = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Sijbekarspel (oud)
        $id = Uuid::fromString('14587988-21f7-4482-87ec-f725a7f1967b');
        $SijbekarspelOud = new Cemetery();
        $SijbekarspelOud->setReference('Sijbekarspel (oud)');
        $SijbekarspelOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $SijbekarspelOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/7fb5c2ca-f72c-4720-92fe-d2a11a1621a9');
        $manager->persist($SijbekarspelOud);
        $SijbekarspelOud->setId($id);
        $manager->persist($SijbekarspelOud);
        $manager->flush();
        $SijbekarspelOud = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Benningbroek (oud)
        $id = Uuid::fromString('176db849-6cb8-410e-a0dd-6235da6fff64');
        $BenningbroekOud = new Cemetery();
        $BenningbroekOud->setReference('Benningbroek (oud)');
        $BenningbroekOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $BenningbroekOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/eaf45602-511a-4193-9c03-6ece1187fc63');
        $manager->persist($BenningbroekOud);
        $BenningbroekOud->setId($id);
        $manager->persist($BenningbroekOud);
        $manager->flush();
        $BenningbroekOud = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Obdam
        $id = Uuid::fromString('1b8e442b-f725-4dd3-ba8d-d42b5a6f3b8f');
        $Obdam = new Cemetery();
        $Obdam->setReference('Obdam');
        $Obdam->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/f050292c-973d-46ab-97ae-9d8830a59d15');
        $Obdam->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/c09c8b68-7721-4276-a92b-15f45c25a8d8');
        $manager->persist($Obdam);
        $Obdam->setId($id);
        $manager->persist($Obdam);
        $manager->flush();
        $Obdam = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Benningbroek (nieuw)
        $id = Uuid::fromString('1c98e138-98c5-4c61-a450-63a925938a8d');
        $BenningbroekNieuw = new Cemetery();
        $BenningbroekNieuw->setReference('Benningbroek (nieuw)');
        $BenningbroekNieuw->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $BenningbroekNieuw->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/e37eac05-b6ee-4fc3-b8b7-f7eadd0f9e6d');
        $manager->persist($BenningbroekNieuw);
        $BenningbroekNieuw->setId($id);
        $manager->persist($BenningbroekNieuw);
        $manager->flush();
        $BenningbroekNieuw = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Twisk (oud)
        $id = Uuid::fromString('217f3fe6-5b5d-422d-87ed-9b9d256a6475');
        $TwiskOud = new Cemetery();
        $TwiskOud->setReference('Twisk (oud)');
        $TwiskOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $TwiskOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/08435035-b28b-4c1f-a7e2-38b5f67f45d1');
        $manager->persist($TwiskOud);
        $TwiskOud->setId($id);
        $manager->persist($TwiskOud);
        $manager->flush();
        $TwiskOud = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Algemene Begraafplaats "Rustoord"
        $id = Uuid::fromString('25410687-1088-4477-a8f5-24bcc5addf7c');
        $AlgemeneBegraafplaatsRustoord = new Cemetery();
        $AlgemeneBegraafplaatsRustoord->setReference('Algemene Begraafplaats "Rustoord"');
        $AlgemeneBegraafplaatsRustoord->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f');
        $AlgemeneBegraafplaatsRustoord->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/f4fa187b-c807-4e20-afda-dff758d68cae');
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $AlgemeneBegraafplaatsRustoord->setId($id);
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $manager->flush();
        $AlgemeneBegraafplaatsRustoord = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        // Wognum (Kreekland)
        $id = Uuid::fromString('2556c084-0687-4ca1-b098-e4f0a7292ae8');
        $WognumKreekland = new Cemetery();
        $WognumKreekland->setReference('Wognum (Kreekland)');
        $WognumKreekland->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5');
        $WognumKreekland->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/2885fad3-56de-47ee-a817-5d5bc007f87e');
        $manager->persist($WognumKreekland);
        $WognumKreekland->setId($id);
        $manager->persist($WognumKreekland);
        $manager->flush();
        $WognumKreekland = $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

        $manager->flush();
    }
}
