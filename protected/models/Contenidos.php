<?php

/**
 * This is the model class for table "contenidos".
 *
 * The followings are the available columns in table 'contenidos':
 * @property string $id_cont
 * @property string $titulo
 * @property string $sec1
 * @property string $sec2
 * @property string $sec3
 * @property string $sec4
 * @property string $sec5
 * @property string $creado
 * @property integer $creado_por
 * @property string $modificado
 * @property integer $modificado_por
 */
class Contenidos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contenidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, sec1, sec2, sec3, sec4, sec5, creado, creado_por, modificado, modificado_por', 'required'),
			array('creado_por, modificado_por', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cont, titulo, sec1, sec2, sec3, sec4, sec5, creado, creado_por, modificado, modificado_por', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cont' => 'Id Cont',
			'titulo' => 'Titulo',
			'sec1' => 'Sec1',
			'sec2' => 'Sec2',
			'sec3' => 'Sec3',
			'sec4' => 'Sec4',
			'sec5' => 'Sec5',
			'creado' => 'Creado',
			'creado_por' => 'Creado Por',
			'modificado' => 'Modificado',
			'modificado_por' => 'Modificado Por',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_cont',$this->id_cont,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('sec1',$this->sec1,true);
		$criteria->compare('sec2',$this->sec2,true);
		$criteria->compare('sec3',$this->sec3,true);
		$criteria->compare('sec4',$this->sec4,true);
		$criteria->compare('sec5',$this->sec5,true);
		$criteria->compare('creado',$this->creado,true);
		$criteria->compare('creado_por',$this->creado_por);
		$criteria->compare('modificado',$this->modificado,true);
		$criteria->compare('modificado_por',$this->modificado_por);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contenidos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
