<?php

/**
 * This is the model class for table "logos".
 *
 * The followings are the available columns in table 'logos':
 * @property integer $id_log
 * @property integer $publicar
 * @property integer $orden
 * @property integer $link
 * @property integer $img
 * @property string $creado
 * @property integer $creado_por
 * @property string $modificado
 * @property integer $modificado_por
 */
class Logos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'logos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_log, publicar, orden, link, img, creado, creado_por, modificado, modificado_por', 'required'),
			array('id_log, publicar, orden, link, img, creado_por, modificado_por', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_log, publicar, orden, link, img, creado, creado_por, modificado, modificado_por', 'safe', 'on'=>'search'),
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
			'id_log' => 'Id Log',
			'publicar' => 'Publicar',
			'orden' => 'Orden',
			'link' => 'Link',
			'img' => 'Img',
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

		$criteria->compare('id_log',$this->id_log);
		$criteria->compare('publicar',$this->publicar);
		$criteria->compare('orden',$this->orden);
		$criteria->compare('link',$this->link);
		$criteria->compare('img',$this->img);
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
	 * @return Logos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
