<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suppliers Model
 *
 * @property \App\Model\Table\ProductsTable&\Cake\ORM\Association\HasMany $Products
 *
 * @method \App\Model\Entity\Supplier newEmptyEntity()
 * @method \App\Model\Entity\Supplier newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Supplier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Supplier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Supplier findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Supplier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Supplier[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Supplier|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplier saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Supplier[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SuppliersTable extends Table
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

        $this->setTable('suppliers');
        $this->setDisplayField('business_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Products', [
            'foreignKey' => 'supplier_id',
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
            ->scalar('business_name')
            ->maxLength('business_name', 64, 'Business name mustbe shortened.')
            ->minLength('business_name', 2, 'Must be longer than 1 character.')
            ->requirePresence('business_name', 'create', 'This is a required field.')
            ->notEmptyString('business_name', 'This field cannot be empty.');

        $validator
            ->scalar('contact_name')
            ->maxLength('contact_name', 64, 'Contact Name must be shortened.')
            ->minLength('contact_name', 2, 'Must be longer than 1 character.')
            ->requirePresence('contact_name', 'create', 'This is a required field.')
            ->notEmptyString('contact_name', 'This field cannot be empty.');

        $validator
            ->scalar('address')
            ->maxLength('address', 200, 'Address must be shortened.')
            ->minLength('address', 3, 'Must be longer than 3 characters.')
            ->requirePresence('address', 'create', 'This field cannot be empty.')
            ->notEmptyString('address', 'This field cannot be empty.');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->maxLength('email', 72, 'Email must be shortened.')
            ->minLength('email', 5, 'Must be longer than 5 characters.')
            ->notEmptyString('email', 'This field cannot be empty.')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('phone')
            ->maxLength('phone', 10,'Incorrect phone number length. eg:0412xxxxxx')
            ->minLength('phone',10,'Incorrect phone number length. eg:0412xxxxxx')
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone', 'Please input a valid phone number. eg:0414xxxxxx')
            ->add('phone', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('abn')
            ->maxLength('abn', 11,'Length of 11 required. eg: 34882274731')
            ->minLength('abn', 11,'Length of 11 required. eg: 34882274731')
            ->allowEmptyString('abn', 'This field cannot be empty.')
            ->add('abn', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);
        $rules->add($rules->isUnique(['phone']), ['errorField' => 'phone']);
        $rules->add($rules->isUnique(['abn'], ['allowMultipleNulls' => true]), ['errorField' => 'abn']);

        return $rules;
    }
}
