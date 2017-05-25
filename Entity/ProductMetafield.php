<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class ProductMetafield
 */
class ProductMetafield extends Metafield
{
    /**
     * @var string
     */
    // protected $ownerResource = 'product';

	public function setOwnerResource($ownerResource){
		throw new \ErrorException('The ownerResource of a ProductMetafield has to be a product, and can not be updated.');
	}
	
	public function setProductId($id){
		parent::setOwnerId($id);
	}

    protected $relatedProductId;

	public function setRelatedProductId($id){
		$this->relatedProductId = $id;
		return $this;
	}
	
	public function getRelatedProductId(){
		return $this->relatedProductId;
	}
}
