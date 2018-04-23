<?php

/**
 * This is the model class for table "{{blog_post}}".
 *
 * The followings are the available columns in table '{{blog_post}}':
 * @property integer $id
 * @property string $title
 * @property string $introduction
 * @property string $details
 * @property string $image
 * @property integer $active
 * @property string $date_created
 * @property string $slug
 */
class BlogPost extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return BlogPost the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{blog_post}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('active', 'numerical', 'integerOnly' => true),
            array('title, introduction, image, slug', 'length', 'max' => 255),
            array('details, date_created', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, title, introduction, details, image, active, date_created, slug', 'safe', 'on' => 'search'),
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
            'title' => Yii::t('translate', 'Title'),
            'introduction' => Yii::t('translate', 'Introduction'),
            'details' => Yii::t('translate', 'Details'),
            'image' => Yii::t('translate', 'Image'),
            'active' => Yii::t('translate', 'Active'),
            'date_created' => Yii::t('translate', 'Date Created'),
            'slug' => Yii::t('translate', 'Slug'),
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
        $criteria->compare('title', $this->title, true);
        $criteria->compare('introduction', $this->introduction, true);
        $criteria->compare('details', $this->details, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('slug', $this->slug, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    protected function beforeSave() {
        if (parent::beforeSave()) {
            if ($this->slug == '') {
                $this->slug = Helper::slugify($this->title);
            }
            return true;
        }
        return false;
    }

}
