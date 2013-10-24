<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $id_usr
 * @property string $username
 * @property string $password
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property integer $banners
 * @property integer $contenidos
 * @property integer $logos
 * @property integer $notas
 * @property integer $categorias
 * @property integer $productos
 * @property integer $usuarios
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 public $password_repeat;
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username', 'required'),
			array('username, password, password_repeat, nombre, paterno, materno', 'required', 'on' => 'register'),
				array('username','unique'),
			array('username', 'length', 'min' => 3, 'max'=>20),
			array('password', 'length', 'min' => 4, 'max' => 20, 'on' => 'register'),
				array('password', 'compare', 'compareAttribute' => 'password_repeat'),
			array('banners, contenidos, logos, notas, categorias, productos, usuarios', 'numerical', 'integerOnly'=>true),
			array('nombre, paterno, materno', 'length', 'max'=>128),
				array('password, password_repeat, cell','safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usr, username, password, nombre, paterno, materno, banners, contenidos, logos, notas, categorias, productos, usuarios', 'safe', 'on'=>'search'),
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
			'id_usr' => 'Id Usr',
			'username' => 'Usuario',
			'password' => 'Contraseña',
			'password_repeat' => 'Repetir contraseña',
			'nombre' => 'Nombre',
			'paterno' => 'Apellido Paterno',
			'materno' => 'Apellido Materno',
			'banners' => 'Banners',
			'contenidos' => 'Contenidos',
			'logos' => 'Logos',
			'notas' => 'Notas',
			'categorias' => 'Categorias',
			'productos' => 'Productos',
			'usuarios' => 'Usuarios',
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

		$criteria->compare('id_usr',$this->id_usr,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('paterno',$this->paterno,true);
		$criteria->compare('materno',$this->materno,true);
		$criteria->compare('banners',$this->banners);
		$criteria->compare('contenidos',$this->contenidos);
		$criteria->compare('logos',$this->logos);
		$criteria->compare('notas',$this->notas);
		$criteria->compare('categorias',$this->categorias);
		$criteria->compare('productos',$this->productos);
		$criteria->compare('usuarios',$this->usuarios);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	*
	*@return crypted value
	*/
	public function hash($value){
		return crypt($value);
	}
	
	/**
	+Encrypt password on create and on update : overload beforeSave function
	*/
	public function beforeSave()
	{
		if(parent::beforeSave())
		{
			$this->password = $this->hash($this->password);
			return true;
		}
		return false;
	}
	/**
	*Check if password valuecorrespond to the stored hassed value
	*/
	public function check($value)
	{
		$new_hash = crypt($value, $this->password);
		if($new_hash == $this->password){
			return true;
		}
		return false;
	}
}
