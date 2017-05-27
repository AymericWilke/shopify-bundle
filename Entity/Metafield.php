<?php

namespace Adezandee\ShopifyBundle\Entity;

/**
 * Class Metafield
 *
 * @author Arnaud Dezandee <arnaudd@theodo.fr>
 */
class Metafield
{
    /**
     * @var \Datetime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var integer
     */
    protected $ownerId;

    /**
     * @var string
     */
    protected $ownerResource;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var \Datetime
     */
    protected $updatedAt;

    public function getCreatedAt(){
		return $this->createdAt;
	}

	public function setCreatedAt($createdAt){
		$this->createdAt = $createdAt;
        return $this;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
        return $this;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
        return $this;
	}

	public function getKey(){
		return $this->key;
	}

	public function setKey($key){
		$this->key = $key;
        return $this;
	}

	public function getNamespace(){
		return $this->namespace;
	}

	public function setNamespace($namespace){
		$this->namespace = $namespace;
        return $this;
	}

	public function getOwnerId(){
		return $this->ownerId;
	}

	public function setOwnerId($ownerId){
		$this->ownerId = $ownerId;
        return $this;
	}

	public function getOwnerResource(){
		return $this->ownerResource;
	}

	public function setOwnerResource($ownerResource){
		$this->ownerResource = $ownerResource;
        return $this;
	}

	public function getValue(){
		return $this->value;
	}

	public function setValue($value){
		$this->value = $value;
        return $this;
	}

	public function getValueType(){
		return $this->valueType;
	}

	public function setValueType($valueType){
		$this->valueType = $valueType;
        return $this;
	}

	public function getUpdatedAt(){
		return $this->updatedAt;
	}

	public function setUpdatedAt($updatedAt){
		$this->updatedAt = $updatedAt;
        return $this;
	}
}
