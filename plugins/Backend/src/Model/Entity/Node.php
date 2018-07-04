<?php
namespace Backend\Model\Entity;

use Cake\ORM\Entity;

/**
 * Node Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $public
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 */
class Node extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'description' => true,
        'public' => true,
        'modified' => true,
        'created' => true
    ];
}
