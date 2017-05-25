<?php

namespace Adezandee\ShopifyBundle\Export;

use Adezandee\ShopifyBundle\Call\DeleteJson;
use Adezandee\ShopifyBundle\Call\PostJson;
use Adezandee\ShopifyBundle\Call\PutJson;
use Adezandee\ShopifyBundle\Entity\Metafield;
use Adezandee\ShopifyBundle\Wrapper\MetafieldWrapper;

/**
 * Class ProductMetafieldExporter
 */
class ProductMetafieldExporter extends ShopifyExporter
{
    private function exportUrl(Metafield $metafield)
    {
        return $this->baseUrl(). '/admin/products/'.$metafield->getOwnerId().'/metafields.json';
    }

    private function updateUrl(Metafield $metafield)
    {
        return $this->baseUrl(). '/admin/products/'.$metafield->getOwnerId().'/metafields/'.$metafield->getId().'.json';
    }

    private function removeUrl(Metafield $metafield)
    {
        return $this->updateUrl($metafield);
    }

    /**
     * @param Product $product
     *
     * @return Product
     */
    public function export(Metafield $metafield)
    {
        if (null !== $metafield->getId()) {
            $request = new PutJson($this->updateUrl($metafield), new MetafieldWrapper($metafield), $this->serializer);
        } else {
            $request = new PostJson($this->exportUrl($metafield), new MetafieldWrapper($metafield), $this->serializer);
        }

        /** @var MetafieldWrapper $metafieldWrapper */
        $metafieldWrapper = $request->makeRequest();

        return $metafieldWrapper->getMetafield();
    }

    /**
     * @param Product $product
     *
     * @return bool
     */
    public function remove(Metafield $metafield)
    {
        if (null == $metafield->getId()) {
            throw new \ErrorException('Can not remove a non existent Metafield !');
        } else {
            $request = new DeleteJson($this->removeUrl($metafield));
        }

        $deleted = $request->makeRequest();

        return $deleted;
    }
}
