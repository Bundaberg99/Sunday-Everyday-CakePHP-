<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Restockings Model
 *
 * @property \App\Model\Table\StaffsTable&\Cake\ORM\Association\BelongsTo $Staffs
 * @property \App\Model\Table\StaffsRestockingDetailTable&\Cake\ORM\Association\HasMany $StaffsRestockingDetail
 *
 * @method \App\Model\Entity\Restocking newEmptyEntity()
 * @method \App\Model\Entity\Restocking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Restocking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Restocking get($primaryKey, $options = [])
 * @method \App\Model\Entity\Restocking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Restocking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Restocking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Restocking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Restocking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Restocking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restocking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restocking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Restocking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RestockingsTable extends Table
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

        $this->setTable('restockings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Staffs', [
            'foreignKey' => 'staff_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('StaffsRestockingDetail', [
            'foreignKey' => 'restocking_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
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
            ->uuid('staff_id')
            ->requirePresence('staff_id', 'create')
            ->notEmptyString('staff_id');

        $validator
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('payment')
            ->maxLength('payment', 36)
            ->requirePresence('payment', 'create')
            ->notEmptyString('payment');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->maxLength('quantity', 5, 'Quantity cannot exceed 99999 for a single restocking.')
            ->notEmptyString('quantity');

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
        $rules->add($rules->existsIn('staff_id', 'Staffs'), ['errorField' => 'staff_id']);

        return $rules;
    }
}
