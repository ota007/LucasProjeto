<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Conta Entity
 *
 * @property int $id_conta
 * @property int|null $banco_id
 * @property int|null $agencia
 * @property int|null $nconta
 * @property string|null $saldo
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Banco $banco
 * @property \App\Model\Entity\Extrato[] $extratos
 */
class Conta extends Entity
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
        'banco_id' => true,
        'agencia' => true,
        'nconta' => true,
        'saldo' => true,
        'created' => true,
        'modified' => true,
        'banco' => true,
        'extratos' => true,
    ];
}
