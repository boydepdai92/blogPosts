<?php
    Class Post extends AppModel{
		public $actsAs = array(
			 'Utils.Sluggable' => array(
				 'label' => 'title',
				 'method' => 'multibyteSlug',
				 'separator' => '-'
			 )
		 );
        public $validate=array(
            'title'=>array(
                'rule'=>'notEmpty',
            ),
            'body'=> array(
                'rule'=>'notEmpty',
            )
        );

        public function isOwnedBy($post,$user){
            return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
        }
    }
?>