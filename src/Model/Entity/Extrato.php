<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Extrato Entity
 *
 * @property int $id_extrato
 * @property string|null $valor
 * @property string|null $tipo
 * @property int|null $conta_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $descricao
 *
 * @property \App\Model\Entity\Conta $conta
 */
class Extrato extends Entity
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
        'valor' => true,
        'tipo' => true,
        'conta_id' => true,
        'created' => true,
        'modified' => true,
        'descricao' => true,
        'conta' => true,
    ];
}
