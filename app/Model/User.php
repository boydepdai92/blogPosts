<?php
    App::uses('AppModel', 'Model');
    App::uses('AuthComponent', 'Controller/Component');
    Class User extends AppModel{
        public $validate=array(
            'username'=>array(
                'emptyRule'=>array(
                    'rule'=>'notEmpty',
                    'message'=>'Enter your username',
                ),
                'uniqueRule'=>array(
                    'rule'=>'isUnique',
                    'message'=>'Your username has been used',
                )
            ),
            'password'=>array(
                'emptyRule'=>array(
                    'rule'=>'notEmpty',
                    'message'=>'Enter your password'
                )
            ),
            'role'=>array(
                'valid'=>array(
                    'rule'=>array('inList',array('admin','author')),
                    'message'=>'Please enter role valid',
                    'allowEmpty'=>false
                )
            )
        );

        public function beforeSave($option=array()){
            if (isset($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
            }
            return parent::beforeSave($option);
        }
    }
?>