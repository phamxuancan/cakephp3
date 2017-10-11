<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Countries Model
 */
class ContractsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('contracts');
        $this->displayField('name');
        $this->primaryKey('id');

//        $this->belongsTo('Capitals', [
//            'foreignKey' => 'capital_id',
//        ]);

//        $this->hasMany('Cities', [
//            'foreignKey' => 'country_id',
//        ]);

//        $this->hasMany('Languages', [
//            'foreignKey' => 'country_id',
//        ]);

//        $this->hasOne('OfficialLanguages', [
//            'className' => LanguagesTable::class,
//            'foreignKey' => 'country_id',
//            'conditions' => ['OfficialLanguages.is_official' => 'T']
//        ]);
    }
}
?>
