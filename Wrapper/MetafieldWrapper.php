<?php

namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\Metafield;

/**
 * Class MetafieldWrapper
 */
class MetafieldWrapper
{
    /**
     * @var Metafield metafield
     */
    protected $metafield;

    /**
     * @param Metafield $metafield
     */
    public function __construct(Metafield $metafield)
    {
        $this->metafield = $metafield;
    }

    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }
}
