<?php
namespace Ufuturelabs\Ufuturehouse\Server\HousingBundle\Tests\Form\Type\Catalogue;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Ufuturelabs\Ufuturehouse\Server\HousingBundle\Form\Type\Catalogue\HousingCategoryCatalogueType;

class HousingCategoryCatalogueTypeTest extends KernelTestCase
{
    /** @var EntityManager $em */
    private $em;

    public function setUp()
    {
        self::bootKernel();
        $this->em = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
    }

    public function testCreateType()
    {
        $catalogueType = new HousingCategoryCatalogueType($this->em);
        $catalogues = $this->em->getRepository('HousingBundle:Catalogue\HousingCategoryCatalogue')->findAll();
        $this->assertNotCount(0, $catalogues);
        $this->assertEquals('choice', $catalogueType->getParent());
        $this->assertEquals('catalogue_housing_category', $catalogueType->getName());
    }
}
