<?php

namespace App\DataFixtures;

use App\Entity\Cemetery;
use App\Entity\Grave;
use App\Entity\GraveType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class WestFrieslandFixtures extends Fixture
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
        // Cemeteries
        // Streekweg in Hoogkarspel
        $id = Uuid::fromString('0a46ce57-b566-4af7-b2ac-60c0520efffc');
        $StreekwegInHoogkarspel = new Cemetery();
        $StreekwegInHoogkarspel->setReference('Streekweg in Hoogkarspel');
        $StreekwegInHoogkarspel->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $StreekwegInHoogkarspel->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/ab69a95d-f46c-4b3f-9027-9f25fd9bbb5f');
        $manager->persist($StreekwegInHoogkarspel);
        $StreekwegInHoogkarspel->setId($id);
        $manager->persist($StreekwegInHoogkarspel);
        $manager->flush();
        $StreekwegInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Algemene Begraafplaats "Rustoord"
        $id = Uuid::fromString('25410687-1088-4477-a8f5-24bcc5addf7c');
        $AlgemeneBegraafplaatsRustoord = new Cemetery();
        $AlgemeneBegraafplaatsRustoord->setReference('Algemene Begraafplaats "Rustoord"');
        $AlgemeneBegraafplaatsRustoord->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $AlgemeneBegraafplaatsRustoord->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/f4fa187b-c807-4e20-afda-dff758d68cae');
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $AlgemeneBegraafplaatsRustoord->setId($id);
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $manager->flush();
        $AlgemeneBegraafplaatsRustoord = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Westerkerkweg in Venhuizen
        $id = Uuid::fromString('2ad6e631-ecaa-419f-b517-9088e0d8357c');
        $WesterkerkwegInVenhuizen = new Cemetery();
        $WesterkerkwegInVenhuizen->setReference('Westerkerkweg in Venhuizen');
        $WesterkerkwegInVenhuizen->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $WesterkerkwegInVenhuizen->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/ed397496-1faf-48b1-890c-f9afb74645d4');
        $manager->persist($WesterkerkwegInVenhuizen);
        $WesterkerkwegInVenhuizen->setId($id);
        $manager->persist($WesterkerkwegInVenhuizen);
        $manager->flush();
        $WesterkerkwegInVenhuizen = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Schoollaan in Hem
        $id = Uuid::fromString('e3f5f329-e309-4a62-9c91-f8d52d65c81d');
        $SchoollaanInHem = new Cemetery();
        $SchoollaanInHem->setReference('Schoollaan in Hem');
        $SchoollaanInHem->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $SchoollaanInHem->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/4eb1880d-96cb-4f50-8499-e55c61816974');
        $manager->persist($SchoollaanInHem);
        $SchoollaanInHem->setId($id);
        $manager->persist($SchoollaanInHem);
        $manager->flush();
        $SchoollaanInHem = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Molenwei in Hoogkarspel
        $id = Uuid::fromString('8d7e5eca-a9bb-4088-951c-3bb0fe9b30d3');
        $MolenweiInHoogkarspel = new Cemetery();
        $MolenweiInHoogkarspel->setReference('Molenwei in Hoogkarspel');
        $MolenweiInHoogkarspel->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $MolenweiInHoogkarspel->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/da41a5ff-43fe-4256-83c1-e064e7b3c4a6');
        $manager->persist($MolenweiInHoogkarspel);
        $MolenweiInHoogkarspel->setId($id);
        $manager->persist($MolenweiInHoogkarspel);
        $manager->flush();
        $MolenweiInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Raadhuisplein in Hoogkarspel
        $id = Uuid::fromString('5da232ce-3201-42d8-8895-a39d7a937056');
        $RaadhuispleinInHoogkarspel = new Cemetery();
        $RaadhuispleinInHoogkarspel->setReference('Raadhuisplein in Hoogkarspel');
        $RaadhuispleinInHoogkarspel->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $RaadhuispleinInHoogkarspel->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/e16fd87d-3484-45fe-ad7c-d894ce454e35');
        $manager->persist($RaadhuispleinInHoogkarspel);
        $RaadhuispleinInHoogkarspel->setId($id);
        $manager->persist($RaadhuispleinInHoogkarspel);
        $manager->flush();
        $RaadhuispleinInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Begraafplaats in Oosterleek
        $id = Uuid::fromString('e2f7048d-97ad-46cc-ad61-d04685a11f36');
        $BegraafplaatsInOosterleek = new Cemetery();
        $BegraafplaatsInOosterleek->setReference('Begraafplaats in Oosterleek');
        $BegraafplaatsInOosterleek->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $BegraafplaatsInOosterleek->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/3712f885-1d43-4e19-8b40-e39e885d66ac');
        $manager->persist($BegraafplaatsInOosterleek);
        $BegraafplaatsInOosterleek->setId($id);
        $manager->persist($BegraafplaatsInOosterleek);
        $manager->flush();
        $BegraafplaatsInOosterleek = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Dorpsweg in Schellinkhout
        $id = Uuid::fromString('b352f1b2-95cf-4fe9-bb61-ba45597b9c2b');
        $DorpswegInSchellinkhout = new Cemetery();
        $DorpswegInSchellinkhout->setReference('Dorpsweg in Schellinkhout');
        $DorpswegInSchellinkhout->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $DorpswegInSchellinkhout->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/417cb133-161d-4799-93b5-bc7ac3a4f51b');
        $manager->persist($DorpswegInSchellinkhout);
        $DorpswegInSchellinkhout->setId($id);
        $manager->persist($DorpswegInSchellinkhout);
        $manager->flush();
        $DorpswegInSchellinkhout = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Kerkbuurt in Wijdenes
        $id = Uuid::fromString('12532d0a-87ee-4f3f-9209-6da511507761');
        $KerkbuurtInWijdenes = new Cemetery();
        $KerkbuurtInWijdenes->setReference('Kerkbuurt in Wijdenes');
        $KerkbuurtInWijdenes->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $KerkbuurtInWijdenes->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/d0f3ed79-acd9-4eaa-8b84-88b6fc150a47');
        $manager->persist($KerkbuurtInWijdenes);
        $KerkbuurtInWijdenes->setId($id);
        $manager->persist($KerkbuurtInWijdenes);
        $manager->flush();
        $KerkbuurtInWijdenes = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Gemeentelijke begraafplaats
        $id = Uuid::fromString('ee71f8b5-0f3c-488c-981d-a55e61555bba');
        $GemeentelijkeBegraafplaats = new Cemetery();
        $GemeentelijkeBegraafplaats->setReference('Gemeentelijke begraafplaats');
        $GemeentelijkeBegraafplaats->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/7033eeb4-5c77-4d88-9f40-303b538f176f'); //SED
        $GemeentelijkeBegraafplaats->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/7ae61cae-fa4f-4efd-aa85-8767602c7680');
        $manager->persist($GemeentelijkeBegraafplaats);
        $GemeentelijkeBegraafplaats->setId($id);
        $manager->persist($GemeentelijkeBegraafplaats);
        $manager->flush();
        $GemeentelijkeBegraafplaats = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Zuiderveld
        $id = Uuid::fromString('fc8e5151-9fe1-4b30-8b32-29d4a1f53218');
        $Zuiderveld = new Cemetery();
        $Zuiderveld->setReference('Zuiderveld');
        $Zuiderveld->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/d736013f-ad6d-4885-b816-ce72ac3e1384'); //Hoorn
        $Zuiderveld->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/9678886f-bfcc-41d4-a42b-4ae47769c23d');
        $manager->persist($Zuiderveld);
        $Zuiderveld->setId($id);
        $manager->persist($Zuiderveld);
        $manager->flush();
        $Zuiderveld = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Berkhouterweg
        $id = Uuid::fromString('a8a734db-ee93-43c1-8051-acd36b477d7c');
        $Berkhouterweg = new Cemetery();
        $Berkhouterweg->setReference('Berkhouterweg');
        $Berkhouterweg->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/d736013f-ad6d-4885-b816-ce72ac3e1384'); //Hoorn
        $Berkhouterweg->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/9c96f5f1-0c9a-4432-905f-8991635c3ca7');
        $manager->persist($Berkhouterweg);
        $Berkhouterweg->setId($id);
        $manager->persist($Berkhouterweg);
        $manager->flush();
        $Berkhouterweg = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Keern
        $id = Uuid::fromString('cbfe0076-38aa-43d2-a7fe-8d24286c2503');
        $Keern = new Cemetery();
        $Keern->setReference('Keern');
        $Keern->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/d736013f-ad6d-4885-b816-ce72ac3e1384'); //Hoorn
        $Keern->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/aed16b93-5912-42df-88cc-b0def3beaa39');
        $manager->persist($Keern);
        $Keern->setId($id);
        $manager->persist($Keern);
        $manager->flush();
        $Keern = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Zwaag
        $id = Uuid::fromString('5bac8758-c869-4953-bc16-dd50463dfc8d');
        $Zwaag = new Cemetery();
        $Zwaag->setReference('Zwaag');
        $Zwaag->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/d736013f-ad6d-4885-b816-ce72ac3e1384'); //Hoorn
        $Zwaag->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/3b020f07-4ea4-4161-a677-f8458f4796ed');
        $manager->persist($Zwaag);
        $Zwaag->setId($id);
        $manager->persist($Zwaag);
        $manager->flush();
        $Zwaag = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Opperdoes (oud)
        $id = Uuid::fromString('074defab-e2eb-4eeb-a22f-caf082502db6');
        $OpperdoesOud = new Cemetery();
        $OpperdoesOud->setReference('Opperdoes (oud)');
        $OpperdoesOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $OpperdoesOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/39fe81c5-4f2e-49a0-8b4e-562e641b7f30');
        $manager->persist($OpperdoesOud);
        $OpperdoesOud->setId($id);
        $manager->persist($OpperdoesOud);
        $manager->flush();
        $OpperdoesOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Sijbekarspel (oud)
        $id = Uuid::fromString('14587988-21f7-4482-87ec-f725a7f1967b');
        $SijbekarspelOud = new Cemetery();
        $SijbekarspelOud->setReference('Sijbekarspel (oud)');
        $SijbekarspelOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $SijbekarspelOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/7fb5c2ca-f72c-4720-92fe-d2a11a1621a9');
        $manager->persist($SijbekarspelOud);
        $SijbekarspelOud->setId($id);
        $manager->persist($SijbekarspelOud);
        $manager->flush();
        $SijbekarspelOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Benningbroek (oud)
        $id = Uuid::fromString('176db849-6cb8-410e-a0dd-6235da6fff64');
        $BenningbroekOud = new Cemetery();
        $BenningbroekOud->setReference('Benningbroek (oud)');
        $BenningbroekOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $BenningbroekOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/eaf45602-511a-4193-9c03-6ece1187fc63');
        $manager->persist($BenningbroekOud);
        $BenningbroekOud->setId($id);
        $manager->persist($BenningbroekOud);
        $manager->flush();
        $BenningbroekOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Benningbroek (nieuw)
        $id = Uuid::fromString('1c98e138-98c5-4c61-a450-63a925938a8d');
        $BenningbroekNieuw = new Cemetery();
        $BenningbroekNieuw->setReference('Benningbroek (nieuw)');
        $BenningbroekNieuw->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $BenningbroekNieuw->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/e37eac05-b6ee-4fc3-b8b7-f7eadd0f9e6d');
        $manager->persist($BenningbroekNieuw);
        $BenningbroekNieuw->setId($id);
        $manager->persist($BenningbroekNieuw);
        $manager->flush();
        $BenningbroekNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Twisk (oud)
        $id = Uuid::fromString('217f3fe6-5b5d-422d-87ed-9b9d256a6475');
        $TwiskOud = new Cemetery();
        $TwiskOud->setReference('Twisk (oud)');
        $TwiskOud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $TwiskOud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/08435035-b28b-4c1f-a7e2-38b5f67f45d1');
        $manager->persist($TwiskOud);
        $TwiskOud->setId($id);
        $manager->persist($TwiskOud);
        $manager->flush();
        $TwiskOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Wognum (Kreekland)
        $id = Uuid::fromString('2556c084-0687-4ca1-b098-e4f0a7292ae8');
        $WognumKreekland = new Cemetery();
        $WognumKreekland->setReference('Wognum (Kreekland)');
        $WognumKreekland->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $WognumKreekland->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/2885fad3-56de-47ee-a817-5d5bc007f87e');
        $manager->persist($WognumKreekland);
        $WognumKreekland->setId($id);
        $manager->persist($WognumKreekland);
        $manager->flush();
        $WognumKreekland = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Kleine Zomerdijk
        $id = Uuid::fromString('25adb7aa-ab70-4ade-8d40-e48368fa1ac3');
        $KleineZomerdijk = new Cemetery();
        $KleineZomerdijk->setReference('Kleine Zomerdijk');
        $KleineZomerdijk->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $KleineZomerdijk->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/a8d03533-f915-4459-b317-fe61c0b176ee');
        $manager->persist($KleineZomerdijk);
        $KleineZomerdijk->setId($id);
        $manager->persist($KleineZomerdijk);
        $manager->flush();
        $KleineZomerdijk = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Oostwoud (nieuw)
        $id = Uuid::fromString('29be88be-6225-4758-ae43-806b7ab5a840');
        $OostwoudNieuw = new Cemetery();
        $OostwoudNieuw->setReference('Oostwoud (nieuw)');
        $OostwoudNieuw->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/429e66ef-4411-4ddb-8b83-c637b37e88b5'); //Medemblik
        $OostwoudNieuw->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/05141bd7-5890-41f0-aa33-f74466b9731c');
        $manager->persist($OostwoudNieuw);
        $OostwoudNieuw->setId($id);
        $manager->persist($OostwoudNieuw);
        $manager->flush();
        $OostwoudNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Obdam
        $id = Uuid::fromString('1b8e442b-f725-4dd3-ba8d-d42b5a6f3b8f');
        $Obdam = new Cemetery();
        $Obdam->setReference('Obdam');
        $Obdam->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/f050292c-973d-46ab-97ae-9d8830a59d15'); //Koggenland
        $Obdam->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/c09c8b68-7721-4276-a92b-15f45c25a8d8');
        $manager->persist($Obdam);
        $Obdam->setId($id);
        $manager->persist($Obdam);
        $manager->flush();
        $Obdam = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Aartswoud
        $id = Uuid::fromString('0d600d56-45ad-4094-b006-d897559e5f23');
        $Aartswoud = new Cemetery();
        $Aartswoud->setReference('Aartswoud');
        $Aartswoud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf'); //Opmeer
        $Aartswoud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/a03f8321-a02f-497e-993c-00677aee2566');
        $manager->persist($Aartswoud);
        $Aartswoud->setId($id);
        $manager->persist($Aartswoud);
        $manager->flush();
        $Aartswoud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Spanbroek
        $id = Uuid::fromString('64a35e6e-17bf-48df-8e80-5588aa243d83');
        $Spanbroek = new Cemetery();
        $Spanbroek->setReference('Spanbroek');
        $Spanbroek->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf'); //Opmeer
        $Spanbroek->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/9066d1c3-01fc-41b6-b7da-799be71390cd');
        $manager->persist($Spanbroek);
        $Spanbroek->setId($id);
        $manager->persist($Spanbroek);
        $manager->flush();
        $Spanbroek = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Opmeer
        $id = Uuid::fromString('3774e19f-a01c-4740-b81e-78eb662eb9ef');
        $Opmeer = new Cemetery();
        $Opmeer->setReference('Opmeer');
        $Opmeer->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf'); //Opmeer
        $Opmeer->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/e56fdbad-b97a-46fc-85f3-232ff8721055');
        $manager->persist($Opmeer);
        $Opmeer->setId($id);
        $manager->persist($Opmeer);
        $manager->flush();
        $Opmeer = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Hoogwoud
        $id = Uuid::fromString('69ebe7c2-2cbf-4d02-abfc-755570c85289');
        $Hoogwoud = new Cemetery();
        $Hoogwoud->setReference('Hoogwoud');
        $Hoogwoud->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf'); //Opmeer
        $Hoogwoud->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/53c8905a-b77f-449b-8bb1-9b77f4c05ace');
        $manager->persist($Hoogwoud);
        $Hoogwoud->setId($id);
        $manager->persist($Hoogwoud);
        $manager->flush();
        $Hoogwoud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // De Weere
        $id = Uuid::fromString('e6262629-5d0b-49e3-ac9d-e0b5b101eff5');
        $DeWeere = new Cemetery();
        $DeWeere->setReference('De Weere');
        $DeWeere->setOrganization('https://wrc.dev.westfriesland.commonground.nu/organizations/16fd1092-c4d3-4011-8998-0e15e13239cf'); //Opmeer
        $DeWeere->setCalendar('https://arc.dev.westfriesland.commonground.nu/calendars/2e9e5014-73d7-483b-b21f-1c3f51250ce4');
        $manager->persist($DeWeere);
        $DeWeere->setId($id);
        $manager->persist($DeWeere);
        $manager->flush();
        $DeWeere = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);



        // Gravetypes
        // Algemeen Graf
        $id = Uuid::fromString('19bce964-be08-4968-bb16-547d8538f3c7');
        $AlgemeenGraf = new GraveType();
        $AlgemeenGraf->setReference('Algemeen Graf');
        $AlgemeenGraf->setDescription('Beschrijving van Algemeen Graf');
        $manager->persist($AlgemeenGraf);
        $AlgemeenGraf->setId($id);
        $manager->persist($AlgemeenGraf);
        $manager->flush();
        $manager->flush();

        $manager->flush();
        $AlgemeenGraf = $manager->getRepository('App:GraveType')->findOneBy(['id'=> $id]);

        // Gravetypes
        // Urnen Graf
        $id = Uuid::fromString('165a4898-3026-48b7-b71b-7f2ce754d5c3');
        $UrnenGraf = new GraveType();
        $UrnenGraf->setReference('Urnen Graf');
        $UrnenGraf->setDescription('Beschrijving van Urnen Graf');
        $manager->persist($UrnenGraf);
        $UrnenGraf->setId($id);
        $manager->persist($UrnenGraf);
        $manager->flush();
        $UrnenGraf = $manager->getRepository('App:GraveType')->findOneBy(['id'=> $id]);

        // Strooiveld
        $id = Uuid::fromString('a330b371-1479-4662-9a4f-20acfc96c7fa');
        $Strooiveld = new GraveType();
        $Strooiveld->setReference('Strooiveld');
        $Strooiveld->setDescription('Beschrijving van Strooiveld');
        $manager->persist($Strooiveld);
        $Strooiveld->setId($id);
        $manager->persist($Strooiveld);
        $manager->flush();
        $Strooiveld = $manager->getRepository('App:GraveType')->findOneBy(['id'=> $id]);

        // Graves
        // zz-93
        $id = Uuid::fromString('cbce0b48-342a-4f39-9ed7-1f3504279a6b');
        $zz93 = new Grave();
        $zz93->setReference('zz-93');
        $zz93->setCemetery($OpperdoesOud);
        $zz93->setGraveType($AlgemeenGraf);
        $zz93->setDeceased('url/deceased WIP');
        $zz93->setLocation('url/location WIP');
        $zz93->setPosition('1');
        $zz93->setStatus('Beschikbaar');
        $zz93->setAcquisition('WIP');
        $zz93->setDescription('Beschrijving van zz-93');
        $manager->persist($zz93);
        $zz93->setId($id);
        $manager->persist($zz93);
        $manager->flush();
        $zz93 = $manager->getRepository('App:Grave')->findOneBy(['id'=> $id]);

        // zz-94
        $id = Uuid::fromString('fc51d196-1e29-436e-a3af-55b50a711210');
        $zz94 = new Grave();
        $zz94->setReference('zz-94');
        $zz94->setCemetery($OpperdoesOud);
        $zz94->setGraveType($UrnenGraf);
        $zz94->setDeceased('url/deceased WIP');
        $zz94->setLocation('url/location WIP');
        $zz94->setPosition('1');
        $zz94->setStatus('Bezet');
        $zz94->setAcquisition('WIP');
        $zz94->setDescription('Beschrijving van zz-94');
        $manager->persist($zz94);
        $zz94->setId($id);
        $manager->persist($zz94);
        $manager->flush();
        $zz94 = $manager->getRepository('App:Grave')->findOneBy(['id'=> $id]);

        // zz-95
        $id = Uuid::fromString('9d8f9b5e-9bea-408a-8ee5-9228b2893195');
        $zz95 = new Grave();
        $zz95->setReference('zz-95');
        $zz95->setCemetery($OpperdoesOud);
        $zz95->setGraveType($Strooiveld);
        $zz95->setDeceased('url/deceased WIP');
        $zz95->setLocation('url/location WIP');
        $zz95->setPosition('1');
        $zz95->setStatus('Administratief geruimd');
        $zz95->setAcquisition('WIP');
        $zz95->setDescription('Beschrijving van zz-95');
        $manager->persist($zz95);
        $zz95->setId($id);
        $manager->persist($zz95);
        $manager->flush();
        $zz95 = $manager->getRepository('App:Grave')->findOneBy(['id'=> $id]);


        $manager->flush();
    }
}
