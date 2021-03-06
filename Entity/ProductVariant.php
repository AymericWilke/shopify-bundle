<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Variant
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class ProductVariant
{
    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var string
     */
    protected $compareAtPrice;

    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $fulfillmentService;

    /**
     * @var integer
     */
    protected $grams;

    /**
     * @var integer
     */
    protected $weight;

    /**
     * @var integer
     */
    protected $weightUnit;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $inventoryManagement;

    /**
     * @var string
     */
    protected $inventoryPolicy;

    /**
     * @var string
     */
    protected $option1;

    /**
     * @var string
     */
    protected $option2;

    /**
     * @var string
     */
    protected $option3;

    /**
     * @var integer
     */
    protected $position;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var integer
     */
    protected $productId;

    /**
     * @var bool
     */
    protected $requiresShipping;

    /**
     * @var string
     */
    protected $sku;

    /**
     * @var bool
     */
    protected $taxable;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    /**
     * @var integer
     */
    protected $inventoryQuantity;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @param string $option1
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
        return $this;
    }

    /**
     * @param string $option2
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;
        return $this;
    }

    /**
     * @param string $option3
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;
        return $this;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param string $grams
     */
    public function setGrams($grams)
    {
        $this->grams = $grams;
        return $this;
    }

    /**
     * @param string $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param string $weightUnit
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
        return $this;
    }

    public function getBarcode(){
		return $this->barcode;
	}

	public function setBarcode($barcode){
		$this->barcode = $barcode;
        return $this;
	}

	public function getCompareAtPrice(){
		return $this->compareAtPrice;
	}

	public function setCompareAtPrice($compareAtPrice){
		$this->compareAtPrice = $compareAtPrice;
        return $this;
	}

	public function getCreatedAt(){
		return $this->createdAt;
	}

	public function setCreatedAt($createdAt){
		$this->createdAt = $createdAt;
        return $this;
	}

	public function getFulfillmentService(){
		return $this->fulfillmentService;
	}

	public function setFulfillmentService($fulfillmentService){
		$this->fulfillmentService = $fulfillmentService;
        return $this;
	}

	public function getGrams(){
		return $this->grams;
	}

	public function getWeight(){
		return $this->weight;
	}

	public function getWeightUnit(){
		return $this->weightUnit;
	}

	public function getInventoryManagement(){
		return $this->inventoryManagement;
	}

	public function setInventoryManagement($inventoryManagement){
		$this->inventoryManagement = $inventoryManagement;
        return $this;
	}

	public function getInventoryPolicy(){
		return $this->inventoryPolicy;
	}

	public function setInventoryPolicy($inventoryPolicy){
		$this->inventoryPolicy = $inventoryPolicy;
        return $this;
	}

	public function getOption1(){
		return $this->option1;
	}

	public function getOption2(){
		return $this->option2;
	}

	public function getOption3(){
		return $this->option3;
	}

	public function getPosition(){
		return $this->position;
	}

	public function setPosition($position){
		$this->position = $position;
        return $this;
	}

	public function getPrice(){
		return $this->price;
	}

	public function getProductId(){
		return $this->productId;
	}

	public function getRequiresShipping(){
		return $this->requiresShipping;
	}

	public function setRequiresShipping($requiresShipping){
		$this->requiresShipping = $requiresShipping;
        return $this;
	}

	public function getSku(){
		return $this->sku;
	}

	public function setSku($sku){
		$this->sku = $sku;
        return $this;
	}

	public function getTaxable(){
		return $this->taxable;
	}

	public function setTaxable($taxable){
		$this->taxable = $taxable;
        return $this;
	}

	public function getTitle(){
		return $this->title;
	}

	public function setTitle($title){
		$this->title = $title;
        return $this;
	}

	public function getUpdatedAt(){
		return $this->updatedAt;
	}

	public function setUpdatedAt($updatedAt){
		$this->updatedAt = $updatedAt;
        return $this;
	}

	public function getInventoryQuantity(){
		return $this->inventoryQuantity;
	}

	public function setInventoryQuantity($inventoryQuantity){
		$this->inventoryQuantity = $inventoryQuantity;
        return $this;
	}
}
