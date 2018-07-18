<?php
namespace Backend\Model\Entity;

use Cake\ORM\Behavior\Translate\TranslateTrait;
use Cake\ORM\Entity;

class Page extends Entity
{
    use TranslateTrait;

    protected $_accessible = [
        'public' => true,
        'type' => true,
        'modified' => true,
        'created' => true
    ];
}
