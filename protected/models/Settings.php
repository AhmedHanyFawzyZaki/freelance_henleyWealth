<?php

/**
 * This is the model class for table "{{settings}}".
 *
 * The followings are the available columns in table '{{settings}}':
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $twitter
 * @property string $facebook
 * @property string $linkedin
 * @property string $footer
 */
class Settings extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Settings the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{settings}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name, email, phone, address, twitter, facebook, linkedin', 'length', 'max' => 255),
            array('footer', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name, email, phone, address, twitter, facebook, linkedin, footer', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => Yii::t('translate', 'ID'),
            'name' => Yii::t('translate', 'Name'),
            'email' => Yii::t('translate', 'Email'),
            'phone' => Yii::t('translate', 'Phone'),
            'address' => Yii::t('translate', 'Address'),
            'twitter' => Yii::t('translate', 'Twitter'),
            'facebook' => Yii::t('translate', 'Facebook'),
            'linkedin' => Yii::t('translate', 'Linkedin'),
            'footer' => Yii::t('translate', 'Footer'),
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('phone', $this->phone, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('twitter', $this->twitter, true);
        $criteria->compare('facebook', $this->facebook, true);
        $criteria->compare('linkedin', $this->linkedin, true);
        $criteria->compare('footer', $this->footer, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}
