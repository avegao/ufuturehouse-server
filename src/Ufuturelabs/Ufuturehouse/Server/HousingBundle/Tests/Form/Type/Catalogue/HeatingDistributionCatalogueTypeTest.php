<?php
namespace Ufuturelabs\Ufuturehouse\Server\HousingBundle\Tests\Form\Type\Catalogue;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Ufuturelabs\Ufuturehouse\Server\HousingBundle\Form\Type\Catalogue\HeatingDistributionCatalogueType;

class HeatingDistributionCatalogueTypeTest extends KernelTestCase
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
        $catalogueType = new HeatingDistributionCatalogueType($this->em);
        $catalogues = $this->em->getRepository('HousingBundle:Catalogue\HeatingDistributionCatalogue')->findAll();
        $this->assertCount(2, $catalogues);
        $this->assertEquals('choice', $catalogueType->getParent());
        $this->assertEquals('catalogue_heating_distribution', $catalogueType->getName());
    }
}
