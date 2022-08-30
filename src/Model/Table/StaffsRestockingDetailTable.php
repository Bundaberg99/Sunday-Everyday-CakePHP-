<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StaffsRestockingDetail Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \App\Model\Table\RestockingsTable&\Cake\ORM\Association\BelongsTo $Restockings
 *
 * @method \App\Model\Entity\StaffsRestockingDetail newEmptyEntity()
 * @method \App\Model\Entity\StaffsRestockingDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StaffsRestockingDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StaffsRestockingDetailTable extends Table
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

        $this->setTable('staffs_restocking_detail');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Restockings', [
            'foreignKey' => 'restocking_id',
            'joinType' => 'INNER',
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
            ->uuid('product_id')
            ->requirePresence('product_id', 'create')
            ->notEmptyString('product_id');

        $validator
            ->uuid('restocking_id')
            ->requirePresence('restocking_id', 'create')
            ->notEmptyString('restocking_id');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
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
        $rules->add($rules->existsIn('product_id', 'Products'), ['errorField' => 'product_id']);
        $rules->add($rules->existsIn('restocking_id', 'Restockings'), ['errorField' => 'restocking_id']);

        return $rules;
    }
}
