<?php

namespace Doctrine\Tests\Models\DDC964;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @AttributeOverrides({
 *      @AttributeOverride(name="id",
 *          column=@Column(
 *              name     = "guest_id",
 *              type     = "integer",
                length   = 140
 *          )
 *      ),
 *      @AttributeOverride(name="name",
 *          column=@Column(
 *              name     = "guest_name",
 *              nullable = false,
                length   = 240
 *          )
 *      )
 * })
 * @Table(uniqueConstraints={@UniqueConstraint(name="idx_guest_name",columns={"guest_name"})})
 */
class DDC964Guest extends DDC964User
{
    public static function loadMetadata(\Doctrine\ORM\Mapping\ClassMetadataInfo $metadata)
    {
        $metadata->setAttributeOverride('id', [
            'columnName'    => 'guest_id',
            'type'          => 'integer',
            'length'        => 140,
        ]
        );

        $metadata->setAttributeOverride('name',
            [
            'columnName'    => 'guest_name',
            'nullable'      => false,
            'unique'        => true,
            'length'        => 240,
            ]
        );
    }
}
