<?php

namespace Ufuturelabs\Ufuturehouse\Server\HousingBundle\Form\Type\Catalogue;

use Doctrine\ORM\EntityManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AirConditioningTypeCatalogueType extends CatalogueType
{
    public function __construct(EntityManager $em)
    {
        parent::__construct($em, parent::CATALOGUE_NAMESPACE.'AirConditioningTypeCatalogue');
    }

    /** {@inheritdoc} */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);
    }

    /** {@inheritdoc} */
    public function getParent()
    {
        return parent::getParent();
    }

    /** {@inheritdoc} */
    public function getName()
    {
        return parent::getName().'_air_conditioning_type';
    }
}
