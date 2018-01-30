<?php

namespace Doctrine\Tests\Models\Cache;

/**
 * @Entity
 * @Table("cache_attraction_location_info")
 */
class AttractionLocationInfo extends AttractionInfo
{
    /**
     * @Column
     * @UniqueConstraint
     */
    protected $address;

    public function __construct($address, Attraction $attraction)
    {
        $this->setAttraction($attraction);
        $this->setAddress($address);
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
}
