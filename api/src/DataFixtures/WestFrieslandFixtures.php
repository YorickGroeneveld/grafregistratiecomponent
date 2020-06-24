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
        $StreekwegInHoogkarspel->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $StreekwegInHoogkarspel->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'ab69a95d-f46c-4b3f-9027-9f25fd9bbb5f']));
        $StreekwegInHoogkarspel->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($StreekwegInHoogkarspel);
        $StreekwegInHoogkarspel->setId($id);
        $manager->persist($StreekwegInHoogkarspel);
        $manager->flush();
        $StreekwegInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Algemene Begraafplaats "Rustoord"
        $id = Uuid::fromString('25410687-1088-4477-a8f5-24bcc5addf7c');
        $AlgemeneBegraafplaatsRustoord = new Cemetery();
        $AlgemeneBegraafplaatsRustoord->setReference('Algemene Begraafplaats "Rustoord"');
        $AlgemeneBegraafplaatsRustoord->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $AlgemeneBegraafplaatsRustoord->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'f4fa187b-c807-4e20-afda-dff758d68cae']));
        $AlgemeneBegraafplaatsRustoord->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $AlgemeneBegraafplaatsRustoord->setId($id);
        $manager->persist($AlgemeneBegraafplaatsRustoord);
        $manager->flush();
        $AlgemeneBegraafplaatsRustoord = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Westerkerkweg in Venhuizen
        $id = Uuid::fromString('2ad6e631-ecaa-419f-b517-9088e0d8357c');
        $WesterkerkwegInVenhuizen = new Cemetery();
        $WesterkerkwegInVenhuizen->setReference('Westerkerkweg in Venhuizen');
        $WesterkerkwegInVenhuizen->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $WesterkerkwegInVenhuizen->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'ed397496-1faf-48b1-890c-f9afb74645d4']));
        $WesterkerkwegInVenhuizen->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($WesterkerkwegInVenhuizen);
        $WesterkerkwegInVenhuizen->setId($id);
        $manager->persist($WesterkerkwegInVenhuizen);
        $manager->flush();
        $WesterkerkwegInVenhuizen = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Schoollaan in Hem
        $id = Uuid::fromString('e3f5f329-e309-4a62-9c91-f8d52d65c81d');
        $SchoollaanInHem = new Cemetery();
        $SchoollaanInHem->setReference('Schoollaan in Hem');
        $SchoollaanInHem->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $SchoollaanInHem->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'4eb1880d-96cb-4f50-8499-e55c61816974']));
        $SchoollaanInHem->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($SchoollaanInHem);
        $SchoollaanInHem->setId($id);
        $manager->persist($SchoollaanInHem);
        $manager->flush();
        $SchoollaanInHem = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Molenwei in Hoogkarspel
        $id = Uuid::fromString('8d7e5eca-a9bb-4088-951c-3bb0fe9b30d3');
        $MolenweiInHoogkarspel = new Cemetery();
        $MolenweiInHoogkarspel->setReference('Molenwei in Hoogkarspel');
        $MolenweiInHoogkarspel->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $MolenweiInHoogkarspel->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'da41a5ff-43fe-4256-83c1-e064e7b3c4a6']));
        $MolenweiInHoogkarspel->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($MolenweiInHoogkarspel);
        $MolenweiInHoogkarspel->setId($id);
        $manager->persist($MolenweiInHoogkarspel);
        $manager->flush();
        $MolenweiInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Raadhuisplein in Hoogkarspel
        $id = Uuid::fromString('5da232ce-3201-42d8-8895-a39d7a937056');
        $RaadhuispleinInHoogkarspel = new Cemetery();
        $RaadhuispleinInHoogkarspel->setReference('Raadhuisplein in Hoogkarspel');
        $RaadhuispleinInHoogkarspel->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $RaadhuispleinInHoogkarspel->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'e16fd87d-3484-45fe-ad7c-d894ce454e35']));
        $RaadhuispleinInHoogkarspel->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($RaadhuispleinInHoogkarspel);
        $RaadhuispleinInHoogkarspel->setId($id);
        $manager->persist($RaadhuispleinInHoogkarspel);
        $manager->flush();
        $RaadhuispleinInHoogkarspel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Begraafplaats in Oosterleek
        $id = Uuid::fromString('e2f7048d-97ad-46cc-ad61-d04685a11f36');
        $BegraafplaatsInOosterleek = new Cemetery();
        $BegraafplaatsInOosterleek->setReference('Begraafplaats in Oosterleek');
        $BegraafplaatsInOosterleek->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $BegraafplaatsInOosterleek->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'3712f885-1d43-4e19-8b40-e39e885d66ac']));
        $BegraafplaatsInOosterleek->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($BegraafplaatsInOosterleek);
        $BegraafplaatsInOosterleek->setId($id);
        $manager->persist($BegraafplaatsInOosterleek);
        $manager->flush();
        $BegraafplaatsInOosterleek = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Dorpsweg in Schellinkhout
        $id = Uuid::fromString('b352f1b2-95cf-4fe9-bb61-ba45597b9c2b');
        $DorpswegInSchellinkhout = new Cemetery();
        $DorpswegInSchellinkhout->setReference('Dorpsweg in Schellinkhout');
        $DorpswegInSchellinkhout->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $DorpswegInSchellinkhout->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'417cb133-161d-4799-93b5-bc7ac3a4f51b']));
        $DorpswegInSchellinkhout->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($DorpswegInSchellinkhout);
        $DorpswegInSchellinkhout->setId($id);
        $manager->persist($DorpswegInSchellinkhout);
        $manager->flush();
        $DorpswegInSchellinkhout = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Kerkbuurt in Wijdenes
        $id = Uuid::fromString('12532d0a-87ee-4f3f-9209-6da511507761');
        $KerkbuurtInWijdenes = new Cemetery();
        $KerkbuurtInWijdenes->setReference('Kerkbuurt in Wijdenes');
        $KerkbuurtInWijdenes->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $KerkbuurtInWijdenes->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'d0f3ed79-acd9-4eaa-8b84-88b6fc150a47']));
        $KerkbuurtInWijdenes->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($KerkbuurtInWijdenes);
        $KerkbuurtInWijdenes->setId($id);
        $manager->persist($KerkbuurtInWijdenes);
        $manager->flush();
        $KerkbuurtInWijdenes = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Gemeentelijke begraafplaats
        $id = Uuid::fromString('ee71f8b5-0f3c-488c-981d-a55e61555bba');
        $GemeentelijkeBegraafplaats = new Cemetery();
        $GemeentelijkeBegraafplaats->setReference('Gemeentelijke begraafplaats');
        $GemeentelijkeBegraafplaats->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'7033eeb4-5c77-4d88-9f40-303b538f176f'])); //SED
        $GemeentelijkeBegraafplaats->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'7ae61cae-fa4f-4efd-aa85-8767602c7680']));
        $GemeentelijkeBegraafplaats->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'58298393-2682-4412-9fca-a03170592610']));
        $manager->persist($GemeentelijkeBegraafplaats);
        $GemeentelijkeBegraafplaats->setId($id);
        $manager->persist($GemeentelijkeBegraafplaats);
        $manager->flush();
        $GemeentelijkeBegraafplaats = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Zuiderveld
        $id = Uuid::fromString('fc8e5151-9fe1-4b30-8b32-29d4a1f53218');
        $Zuiderveld = new Cemetery();
        $Zuiderveld->setReference('Zuiderveld');
        $Zuiderveld->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'d736013f-ad6d-4885-b816-ce72ac3e1384'])); //Hoorn
        $Zuiderveld->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'9678886f-bfcc-41d4-a42b-4ae47769c23d']));
        $Zuiderveld->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'baf448a2-671e-481b-88b8-34f9598b5d8b']));
        $manager->persist($Zuiderveld);
        $Zuiderveld->setId($id);
        $manager->persist($Zuiderveld);
        $manager->flush();
        $Zuiderveld = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Berkhouterweg
        $id = Uuid::fromString('a8a734db-ee93-43c1-8051-acd36b477d7c');
        $Berkhouterweg = new Cemetery();
        $Berkhouterweg->setReference('Berkhouterweg');
        $Berkhouterweg->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'d736013f-ad6d-4885-b816-ce72ac3e1384'])); //Hoorn
        $Berkhouterweg->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'9c96f5f1-0c9a-4432-905f-8991635c3ca7']));
        $Berkhouterweg->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'17c09fb9-a3a1-4fc9-9617-5ebcf73e06cc']));
        $manager->persist($Berkhouterweg);
        $Berkhouterweg->setId($id);
        $manager->persist($Berkhouterweg);
        $manager->flush();
        $Berkhouterweg = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Keern
        $id = Uuid::fromString('cbfe0076-38aa-43d2-a7fe-8d24286c2503');
        $Keern = new Cemetery();
        $Keern->setReference('Keern');
        $Keern->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'d736013f-ad6d-4885-b816-ce72ac3e1384'])); //Hoorn
        $Keern->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'aed16b93-5912-42df-88cc-b0def3beaa39']));
        $Keern->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'17c09fb9-a3a1-4fc9-9617-5ebcf73e06cc']));
        $manager->persist($Keern);
        $Keern->setId($id);
        $manager->persist($Keern);
        $manager->flush();
        $Keern = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Zwaag
        $id = Uuid::fromString('5bac8758-c869-4953-bc16-dd50463dfc8d');
        $Zwaag = new Cemetery();
        $Zwaag->setReference('Zwaag');
        $Zwaag->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'d736013f-ad6d-4885-b816-ce72ac3e1384'])); //Hoorn
        $Zwaag->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'3b020f07-4ea4-4161-a677-f8458f4796ed']));
        $Zwaag->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'17c09fb9-a3a1-4fc9-9617-5ebcf73e06cc']));
        $manager->persist($Zwaag);
        $Zwaag->setId($id);
        $manager->persist($Zwaag);
        $manager->flush();
        $Zwaag = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Abbekerk (nieuw)
        $id = Uuid::fromString('4f5211b7-db84-431f-b38a-d8d2cb62c539');
        $AbbekerkNieuw = new Cemetery();
        $AbbekerkNieuw->setReference('Abbekerk (nieuw)');
        $AbbekerkNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $AbbekerkNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'fbf46af1-7c86-4de7-8b13-c7dd6471e96d']));
        $AbbekerkNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($AbbekerkNieuw);
        $AbbekerkNieuw->setId($id);
        $manager->persist($AbbekerkNieuw);
        $manager->flush();
        $AbbekerkNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Abbekerk (oud)
        $id = Uuid::fromString('bde96f8e-e540-4960-8ec7-3a9852f8dcea');
        $AbbekerkOud = new Cemetery();
        $AbbekerkOud->setReference('Abbekerk (oud)');
        $AbbekerkOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $AbbekerkOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'6af6f8fe-8824-46ad-8af6-fe7f152e9a8c']));
        $AbbekerkOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($AbbekerkOud);
        $AbbekerkOud->setId($id);
        $manager->persist($AbbekerkOud);
        $manager->flush();
        $AbbekerkOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Benningbroek (nieuw)
        $id = Uuid::fromString('1c98e138-98c5-4c61-a450-63a925938a8d');
        $BenningbroekNieuw = new Cemetery();
        $BenningbroekNieuw->setReference('Benningbroek (nieuw)');
        $BenningbroekNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $BenningbroekNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'e37eac05-b6ee-4fc3-b8b7-f7eadd0f9e6d']));
        $BenningbroekNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($BenningbroekNieuw);
        $BenningbroekNieuw->setId($id);
        $manager->persist($BenningbroekNieuw);
        $manager->flush();
        $BenningbroekNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Benningbroek (oud)
        $id = Uuid::fromString('176db849-6cb8-410e-a0dd-6235da6fff64');
        $BenningbroekOud = new Cemetery();
        $BenningbroekOud->setReference('Benningbroek (oud)');
        $BenningbroekOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $BenningbroekOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'eaf45602-511a-4193-9c03-6ece1187fc63']));
        $BenningbroekOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($BenningbroekOud);
        $BenningbroekOud->setId($id);
        $manager->persist($BenningbroekOud);
        $manager->flush();
        $BenningbroekOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Lambertschaag
        $id = Uuid::fromString('49da35db-9373-4674-b8a3-e7ed2e86ebf6');
        $Lambertschaag = new Cemetery();
        $Lambertschaag->setReference('Lambertschaag');
        $Lambertschaag->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $Lambertschaag->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'06cea75a-847a-404c-b12c-950241bdfa7b']));
        $Lambertschaag->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($Lambertschaag);
        $Lambertschaag->setId($id);
        $manager->persist($Lambertschaag);
        $manager->flush();
        $Lambertschaag = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Midwoud (nieuw)
        $id = Uuid::fromString('3f635c7a-c84f-4c18-80a1-583c36eaf787');
        $MidwoudNieuw = new Cemetery();
        $MidwoudNieuw->setReference('Midwoud (nieuw)');
        $MidwoudNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $MidwoudNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'517eb46e-529a-453d-b79d-45520d9a591a']));
        $MidwoudNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($MidwoudNieuw);
        $MidwoudNieuw->setId($id);
        $manager->persist($MidwoudNieuw);
        $manager->flush();
        $MidwoudNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Midwoud (oud)
        $id = Uuid::fromString('ae6609b9-4472-464e-9ddc-0765e271c618');
        $MidwoudOud = new Cemetery();
        $MidwoudOud->setReference('Midwoud (oud)');
        $MidwoudOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $MidwoudOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'1b162bb2-650a-4644-a611-c34e3abccee6']));
        $MidwoudOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($MidwoudOud);
        $MidwoudOud->setId($id);
        $manager->persist($MidwoudOud);
        $manager->flush();
        $MidwoudOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Oostwoud (nieuw)
        $id = Uuid::fromString('29be88be-6225-4758-ae43-806b7ab5a840');
        $OostwoudNieuw = new Cemetery();
        $OostwoudNieuw->setReference('Oostwoud (nieuw)');
        $OostwoudNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $OostwoudNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'05141bd7-5890-41f0-aa33-f74466b9731c']));
        $OostwoudNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($OostwoudNieuw);
        $OostwoudNieuw->setId($id);
        $manager->persist($OostwoudNieuw);
        $manager->flush();
        $OostwoudNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Oostwoud (oud)
        $id = Uuid::fromString('cf1dc4b0-1b32-4074-be7e-d3720bfa3152');
        $OostwoudOud = new Cemetery();
        $OostwoudOud->setReference('Oostwoud (oud)');
        $OostwoudOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $OostwoudOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'d4f72b32-4d10-4825-a5b5-6adf0dc14369']));
        $OostwoudOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($OostwoudOud);
        $OostwoudOud->setId($id);
        $manager->persist($OostwoudOud);
        $manager->flush();
        $OostwoudOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Opperdoes (nieuw)
        $id = Uuid::fromString('074defab-e2eb-4eeb-a22f-caf082502db6');
        $OpperdoesNieuw = new Cemetery();
        $OpperdoesNieuw->setReference('Opperdoes (nieuw)');
        $OpperdoesNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $OpperdoesNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'39fe81c5-4f2e-49a0-8b4e-562e641b7f30']));
        $OpperdoesNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($OpperdoesNieuw);
        $OpperdoesNieuw->setId($id);
        $manager->persist($OpperdoesNieuw);
        $manager->flush();
        $OpperdoesNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Opperdoes (oud)
        $id = Uuid::fromString('65cdc2bc-b61f-47f9-b46d-1ea5623d2671');
        $OpperdoesOud = new Cemetery();
        $OpperdoesOud->setReference('Opperdoes (oud)');
        $OpperdoesOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $OpperdoesOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'1776104a-5c40-4091-8d58-6c5c676ea6d1']));
        $OpperdoesOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($OpperdoesOud);
        $OpperdoesOud->setId($id);
        $manager->persist($OpperdoesOud);
        $manager->flush();
        $OpperdoesOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Sijbekarspel (oud)
        $id = Uuid::fromString('14587988-21f7-4482-87ec-f725a7f1967b');
        $SijbekarspelOud = new Cemetery();
        $SijbekarspelOud->setReference('Sijbekarspel (oud)');
        $SijbekarspelOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $SijbekarspelOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'7fb5c2ca-f72c-4720-92fe-d2a11a1621a9']));
        $SijbekarspelOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($SijbekarspelOud);
        $SijbekarspelOud->setId($id);
        $manager->persist($SijbekarspelOud);
        $manager->flush();
        $SijbekarspelOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Twisk (nieuw)
        $id = Uuid::fromString('d9095fde-99b0-43df-8392-5e0113b56528');
        $TwiskNieuw = new Cemetery();
        $TwiskNieuw->setReference('Twisk (nieuw)');
        $TwiskNieuw->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $TwiskNieuw->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'0099ecff-c8e4-4995-9b9a-3528a66ef557']));
        $TwiskNieuw->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($TwiskNieuw);
        $TwiskNieuw->setId($id);
        $manager->persist($TwiskNieuw);
        $manager->flush();
        $TwiskNieuw = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Twisk (oud)
        $id = Uuid::fromString('217f3fe6-5b5d-422d-87ed-9b9d256a6475');
        $TwiskOud = new Cemetery();
        $TwiskOud->setReference('Twisk (oud)');
        $TwiskOud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $TwiskOud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'08435035-b28b-4c1f-a7e2-38b5f67f45d1']));
        $TwiskOud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($TwiskOud);
        $TwiskOud->setId($id);
        $manager->persist($TwiskOud);
        $manager->flush();
        $TwiskOud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Medemblik (Compagniesingel)
        $id = Uuid::fromString('bf67817a-f9e2-48ec-a1eb-c8eb251997a5');
        $MedemblikCompagniesingel = new Cemetery();
        $MedemblikCompagniesingel->setReference('Medemblik (Compagniesingel)');
        $MedemblikCompagniesingel->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $MedemblikCompagniesingel->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'eff794f8-7030-4f81-b276-1cabe17fc120']));
        $MedemblikCompagniesingel->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($MedemblikCompagniesingel);
        $MedemblikCompagniesingel->setId($id);
        $manager->persist($MedemblikCompagniesingel);
        $manager->flush();
        $MedemblikCompagniesingel = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Nibbixwoud
        $id = Uuid::fromString('7f766099-271f-475c-b422-95e36a5caa0d');
        $Nibbixwoud = new Cemetery();
        $Nibbixwoud->setReference('Nibbixwoud');
        $Nibbixwoud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $Nibbixwoud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'75b84194-372f-4102-b163-b002b3071ab9']));
        $Nibbixwoud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($Nibbixwoud);
        $Nibbixwoud->setId($id);
        $manager->persist($Nibbixwoud);
        $manager->flush();
        $Nibbixwoud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Wognum
        $id = Uuid::fromString('7193093a-e3a9-44a6-9f8e-a9c2283f64f4');
        $Wognum = new Cemetery();
        $Wognum->setReference('Wognum');
        $Wognum->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $Wognum->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'c6f2dc3f-50ae-4629-bbef-294df4d99445']));
        $Wognum->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($Wognum);
        $Wognum->setId($id);
        $manager->persist($Wognum);
        $manager->flush();
        $Wognum = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Medemblik (Zorgvliet)
        $id = Uuid::fromString('efd38dc1-e461-4640-a16d-754dc35a1943');
        $MedemblikZorgvliet = new Cemetery();
        $MedemblikZorgvliet->setReference('Medemblik (Zorgvliet)');
        $MedemblikZorgvliet->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $MedemblikZorgvliet->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'a8e1eccf-ab85-40b1-931d-99f0a86afa43']));
        $MedemblikZorgvliet->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($MedemblikZorgvliet);
        $MedemblikZorgvliet->setId($id);
        $manager->persist($MedemblikZorgvliet);
        $manager->flush();
        $MedemblikZorgvliet = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Andijk (Westerbegraafplaats)
        $id = Uuid::fromString('c07e289a-a98f-40dc-9289-0784368e7d2e');
        $AndijkWesterbegraafplaats = new Cemetery();
        $AndijkWesterbegraafplaats->setReference('Andijk (Westerbegraafplaats)');
        $AndijkWesterbegraafplaats->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $AndijkWesterbegraafplaats->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'5a6fdffb-2bdf-4f42-8057-4cab4584aa78']));
        $AndijkWesterbegraafplaats->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($AndijkWesterbegraafplaats);
        $AndijkWesterbegraafplaats->setId($id);
        $manager->persist($AndijkWesterbegraafplaats);
        $manager->flush();
        $AndijkWesterbegraafplaats = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Andijk (Oosterbegraafplaats)
        $id = Uuid::fromString('22b529e3-8aa8-4c74-8ad8-573657281d29');
        $AndijkOosterbegraafplaats = new Cemetery();
        $AndijkOosterbegraafplaats->setReference('Andijk (Oosterbegraafplaats)');
        $AndijkOosterbegraafplaats->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $AndijkOosterbegraafplaats->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'2810a334-b78a-4adf-8be8-8ac115b19ab6']));
        $AndijkOosterbegraafplaats->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($AndijkOosterbegraafplaats);
        $AndijkOosterbegraafplaats->setId($id);
        $manager->persist($AndijkOosterbegraafplaats);
        $manager->flush();
        $AndijkOosterbegraafplaats = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Wognum (Kreekland)
        $id = Uuid::fromString('2556c084-0687-4ca1-b098-e4f0a7292ae8');
        $WognumKreekland = new Cemetery();
        $WognumKreekland->setReference('Wognum (Kreekland)');
        $WognumKreekland->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $WognumKreekland->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'2885fad3-56de-47ee-a817-5d5bc007f87e']));
        $WognumKreekland->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($WognumKreekland);
        $WognumKreekland->setId($id);
        $manager->persist($WognumKreekland);
        $manager->flush();
        $WognumKreekland = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Kleine Zomerdijk
        $id = Uuid::fromString('25adb7aa-ab70-4ade-8d40-e48368fa1ac3');
        $KleineZomerdijk = new Cemetery();
        $KleineZomerdijk->setReference('Kleine Zomerdijk');
        $KleineZomerdijk->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'429e66ef-4411-4ddb-8b83-c637b37e88b5'])); //Medemblik
        $KleineZomerdijk->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'a8d03533-f915-4459-b317-fe61c0b176ee']));
        $KleineZomerdijk->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'9ed30829-4e38-43a1-a497-c47f7bc54124']));
        $manager->persist($KleineZomerdijk);
        $KleineZomerdijk->setId($id);
        $manager->persist($KleineZomerdijk);
        $manager->flush();
        $KleineZomerdijk = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Avenhorn
        $id = Uuid::fromString('5d235516-f39f-443d-b0b4-b47850b3e963');
        $Avenhorn = new Cemetery();
        $Avenhorn->setReference('Avenhorn');
        $Avenhorn->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Avenhorn->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'837f45f7-6419-4175-888e-f7b4c56cfede']));
        $Avenhorn->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Avenhorn);
        $Avenhorn->setId($id);
        $manager->persist($Avenhorn);
        $manager->flush();
        $Avenhorn = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Berkhout
        $id = Uuid::fromString('82b420a2-3bdb-4816-aef9-320bf8966aa8');
        $Berkhout = new Cemetery();
        $Berkhout->setReference('Berkhout');
        $Berkhout->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Berkhout->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'7efbbbce-7bd0-4b02-896a-23957c841f32']));
        $Berkhout->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Berkhout);
        $Berkhout->setId($id);
        $manager->persist($Berkhout);
        $manager->flush();
        $Berkhout = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Oudendijk
        $id = Uuid::fromString('7e32320a-01a6-41ff-b834-1280aff007ca');
        $Oudendijk = new Cemetery();
        $Oudendijk->setReference('Oudendijk');
        $Oudendijk->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Oudendijk->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'87d6ca22-1982-4b7e-bf9a-6c2b8542e6ee']));
        $Oudendijk->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Oudendijk);
        $Oudendijk->setId($id);
        $manager->persist($Oudendijk);
        $manager->flush();
        $Oudendijk = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Grosthuizen
        $id = Uuid::fromString('aea8cb27-b1c7-474c-bdf7-8279a435d9f5');
        $Grosthuizen = new Cemetery();
        $Grosthuizen->setReference('Grosthuizen');
        $Grosthuizen->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Grosthuizen->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'362d9c05-7b31-47e8-ae98-e5e1e8a45d1f']));
        $Grosthuizen->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Grosthuizen);
        $Grosthuizen->setId($id);
        $manager->persist($Grosthuizen);
        $manager->flush();
        $Grosthuizen = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Ursem
        $id = Uuid::fromString('34e3b2c4-a843-400b-b1d6-ab699dd8c2d9');
        $Ursem = new Cemetery();
        $Ursem->setReference('Ursem');
        $Ursem->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Ursem->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'abb520b0-73da-4604-b72c-b26cecda556c']));
        $Ursem->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Ursem);
        $Ursem->setId($id);
        $manager->persist($Ursem);
        $manager->flush();
        $Ursem = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Hensbroek
        $id = Uuid::fromString('b448cbcd-6087-42e7-b2d4-64133d214aaf');
        $Hensbroek = new Cemetery();
        $Hensbroek->setReference('Hensbroek');
        $Hensbroek->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Hensbroek->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'3f40dc8f-2b63-429d-b677-a006e2863f66']));
        $Hensbroek->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Hensbroek);
        $Hensbroek->setId($id);
        $manager->persist($Hensbroek);
        $manager->flush();
        $Hensbroek = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Obdam
        $id = Uuid::fromString('1b8e442b-f725-4dd3-ba8d-d42b5a6f3b8f');
        $Obdam = new Cemetery();
        $Obdam->setReference('Obdam');
        $Obdam->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'f050292c-973d-46ab-97ae-9d8830a59d15'])); //Koggenland
        $Obdam->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'c09c8b68-7721-4276-a92b-15f45c25a8d8']));
        $Obdam->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'4bc89791-dd77-479f-8df0-3fd10ce47839']));
        $manager->persist($Obdam);
        $Obdam->setId($id);
        $manager->persist($Obdam);
        $manager->flush();
        $Obdam = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Aartswoud
        $id = Uuid::fromString('0d600d56-45ad-4094-b006-d897559e5f23');
        $Aartswoud = new Cemetery();
        $Aartswoud->setReference('Aartswoud');
        $Aartswoud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'16fd1092-c4d3-4011-8998-0e15e13239cf'])); //Opmeer
        $Aartswoud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'a03f8321-a02f-497e-993c-00677aee2566']));
        $Aartswoud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'c0379617-0d36-406b-8a99-e230aad496bf']));
        $manager->persist($Aartswoud);
        $Aartswoud->setId($id);
        $manager->persist($Aartswoud);
        $manager->flush();
        $Aartswoud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Spanbroek
        $id = Uuid::fromString('64a35e6e-17bf-48df-8e80-5588aa243d83');
        $Spanbroek = new Cemetery();
        $Spanbroek->setReference('Spanbroek');
        $Spanbroek->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'16fd1092-c4d3-4011-8998-0e15e13239cf'])); //Opmeer
        $Spanbroek->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'9066d1c3-01fc-41b6-b7da-799be71390cd']));
        $Spanbroek->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'c0379617-0d36-406b-8a99-e230aad496bf']));
        $manager->persist($Spanbroek);
        $Spanbroek->setId($id);
        $manager->persist($Spanbroek);
        $manager->flush();
        $Spanbroek = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Opmeer
        $id = Uuid::fromString('3774e19f-a01c-4740-b81e-78eb662eb9ef');
        $Opmeer = new Cemetery();
        $Opmeer->setReference('Opmeer');
        $Opmeer->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'16fd1092-c4d3-4011-8998-0e15e13239cf'])); //Opmeer
        $Opmeer->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'e56fdbad-b97a-46fc-85f3-232ff8721055']));
        $Opmeer->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'c0379617-0d36-406b-8a99-e230aad496bf']));
        $manager->persist($Opmeer);
        $Opmeer->setId($id);
        $manager->persist($Opmeer);
        $manager->flush();
        $Opmeer = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Hoogwoud
        $id = Uuid::fromString('69ebe7c2-2cbf-4d02-abfc-755570c85289');
        $Hoogwoud = new Cemetery();
        $Hoogwoud->setReference('Hoogwoud');
        $Hoogwoud->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'16fd1092-c4d3-4011-8998-0e15e13239cf'])); //Opmeer
        $Hoogwoud->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'53c8905a-b77f-449b-8bb1-9b77f4c05ace']));
        $Hoogwoud->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'c0379617-0d36-406b-8a99-e230aad496bf']));
        $manager->persist($Hoogwoud);
        $Hoogwoud->setId($id);
        $manager->persist($Hoogwoud);
        $manager->flush();
        $Hoogwoud = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // De Weere
        $id = Uuid::fromString('e6262629-5d0b-49e3-ac9d-e0b5b101eff5');
        $DeWeere = new Cemetery();
        $DeWeere->setReference('De Weere');
        $DeWeere->setOrganization($this->commonGroundService->cleanUrl(['component'=>'wrc','type'=>'organizations','id'=>'16fd1092-c4d3-4011-8998-0e15e13239cf'])); //Opmeer
        $DeWeere->setCalendar($this->commonGroundService->cleanUrl(['component'=>'arc','type'=>'calendars','id'=>'2e9e5014-73d7-483b-b21f-1c3f51250ce4']));
        $DeWeere->setGraveTypes($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'groups','id'=>'c0379617-0d36-406b-8a99-e230aad496bf']));
        $manager->persist($DeWeere);
        $DeWeere->setId($id);
        $manager->persist($DeWeere);
        $manager->flush();
        $DeWeere = $manager->getRepository('App:Cemetery')->findOneBy(['id'=> $id]);

        // Graves
        // zz-93
        $id = Uuid::fromString('cbce0b48-342a-4f39-9ed7-1f3504279a6b');
        $zz93 = new Grave();
        $zz93->setReference('zz-93');
        $zz93->setCemetery($OpperdoesOud);
        $zz93->setGraveType($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'products','id'=>"44c6edea-ee80-4c86-8be4-3576b0bd1b56"]));
        $zz93->setDeceased($this->commonGroundService->cleanUrl(['component'=>'brp','type'=>'ingeschrevenpersonen','id'=>'394d564d-e456-44d4-8619-a5b2b4e4cf8d']));
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
        $zz94->setGraveType($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'products','id'=>"fcc5289b-c1c9-4760-bb3b-516197ac1d10"]));
        $zz94->setDeceased($this->commonGroundService->cleanUrl(['component'=>'brp','type'=>'ingeschrevenpersonen','id'=>'7486c55e-cef5-4928-b17d-935cf4207e0e']));
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
        $zz95->setGraveType($this->commonGroundService->cleanUrl(['component'=>'pdc','type'=>'products','id'=>"bca4ec81-7328-4b4f-9114-bbd8f7056724"]));
        $zz95->setDeceased($this->commonGroundService->cleanUrl(['component'=>'brp','type'=>'ingeschrevenpersonen','id'=>'fd03ab88-698d-4c17-86ad-e29ee1e1ca04']));
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
