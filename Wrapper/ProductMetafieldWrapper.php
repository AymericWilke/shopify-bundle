<?php

namespace Adezandee\ShopifyBundle\Wrapper;

use Adezandee\ShopifyBundle\Entity\ProductMetafield;

/**
 * Class ProductMetafieldWrapper
 */
class ProductMetafieldWrapper
{
    /**
     * @var ProductMetafield
     */
    protected $productMetafield;

    /**
     * @param ProductMetafield $productMetafield
     */
    public function __construct(ProductMetafield $productMetafield)
    {
        $this->productMetafield = $productMetafield;
    }

    /**
     * @return ProductMetafield
     */
    public function getProductMetafield()
    {
        return $this->productMetafield;
    }
}
