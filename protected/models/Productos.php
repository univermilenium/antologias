<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property string $id_pro
 * @property integer $categoria
 * @property string $nombre
 * @property string $descripcion
 * @property string $img
 * @property integer $precio
 * @property integer $existencia
 * @property string $creado
 * @property integer $creado_por
 * @property string $modificado
 * @property integer $modificado_por
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoria, nombre, descripcion, img, precio, existencia, creado, creado_por, modificado, modificado_por', 'required'),
			array('categoria, precio, existencia, creado_por, modificado_por', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pro, categoria, nombre, descripcion, img, precio, existencia, creado, creado_por, modificado, modificado_por', 'safe', 'on'=>'search'),
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
			'id_pro' => 'Id Pro',
			'categoria' => 'Categoria',
			'nombre' => 'Nombre',
			'descripcion' => 'Descripcion',
			'img' => 'Img',
			'precio' => 'Precio',
			'existencia' => 'Existencia',
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

		$criteria->compare('id_pro',$this->id_pro,true);
		$criteria->compare('categoria',$this->categoria);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('existencia',$this->existencia);
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
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
