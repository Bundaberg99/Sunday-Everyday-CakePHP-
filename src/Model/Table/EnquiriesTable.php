<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enquiries Model
 *
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsTo $Suppliers
 *
 * @method \App\Model\Entity\Enquiry newEmptyEntity()
 * @method \App\Model\Entity\Enquiry newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Enquiry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Enquiry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Enquiry findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Enquiry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Enquiry[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Enquiry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enquiry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EnquiriesTable extends Table
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

        $this->setTable('enquiries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Suppliers', [
            'foreignKey' => 'supplier_id',
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
            ->scalar('body')
            ->maxLength('body', 255)
            ->minLength('body', 6, 'Email must be more informative.')
            ->requirePresence('body', 'create')
            ->notEmptyString('body', 'Email can not be blank.');

        $validator
            ->boolean('email_sent')
            ->notEmptyString('email_sent');

        $validator
            ->uuid('supplier_id')
            ->requirePresence('supplier_id', 'create')
            ->notEmptyString('supplier_id');

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
        $rules->add($rules->existsIn('supplier_id', 'Suppliers'), ['errorField' => 'supplier_id']);

        return $rules;
    }
}
