<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contas Model
 *
 * @property \App\Model\Table\BancosTable&\Cake\ORM\Association\BelongsTo $Bancos
 * @property \App\Model\Table\ExtratosTable&\Cake\ORM\Association\HasMany $Extratos
 *
 * @method \App\Model\Entity\Conta newEmptyEntity()
 * @method \App\Model\Entity\Conta newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Conta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conta findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Conta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conta[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conta|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conta saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Conta[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contas');
        $this->setDisplayField('nconta');
        $this->setPrimaryKey('id_conta');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Bancos', [
            'foreignKey' => 'banco_id',
        ]);
        $this->hasMany('Extratos', [
            'foreignKey' => 'conta_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id_conta')
            ->allowEmptyString('id_conta', null, 'create');

        $validator
            ->integer('agencia')
            ->allowEmptyString('agencia');

        $validator
            ->integer('nconta')
            ->allowEmptyString('nconta');

        $validator
            ->decimal('saldo')
            ->allowEmptyString('saldo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['banco_id'], 'Bancos'), ['errorField' => 'banco_id']);

        return $rules;
    }
}
