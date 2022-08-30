<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\SuppliersTable&\Cake\ORM\Association\BelongsTo $Suppliers
 * @property \App\Model\Table\CustomersOrderDetailTable&\Cake\ORM\Association\HasMany $CustomersOrderDetail
 * @property \App\Model\Table\StaffsRestockingDetailTable&\Cake\ORM\Association\HasMany $StaffsRestockingDetail
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Suppliers', [
            'foreignKey' => 'supplier_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CustomersOrderDetail', [
            'foreignKey' => 'product_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('StaffsRestockingDetail', [
            'foreignKey' => 'product_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
        $this->hasMany('ProductImages', [
            'foreignKey' => 'product_id',
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
            ->scalar('name')
            ->maxLength('name', 32, 'Name must be shortened.')
            ->minLength('name', 2, 'Must be longer than 1 character.')
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'This field cannot be empty.');

        $validator
            ->allowEmptyFile('image')
            ->add('image',[
                'mimeType'=>[
                    'rule'=>['mimeType',['image/jpg', 'image/png','image/jpeg']],
                    'message'=>'ERROR: Only .jpg and .png image files can be uploaded.',
                ],
                'fileSize'=>[
                    'rule'=>['fileSize','<=','5MB'],
                    'message'=>'ERROR: Image file size must be less than 5MB.',
                ]
            ]);
        $validator
            ->decimal('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost', 'eg: 15.00')
            ->maxLength('cost', 7, 'Cost cannot exceed 9999.99 for a single item.');

        $validator
            ->decimal('retail_price')
            ->requirePresence('retail_price', 'create')
            ->notEmptyString('retail_price', 'eg: 18.00')
            ->maxLength('retail_price', 7, 'Retail Price cannot exceed 9999.99 for a single item.');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity', 'eg: 528')
            ->maxLength('quantity', 5, 'Quantity cannot exceed 99999 for a single item.');

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
