<?php
    Class PostsController extends AppController{
        public $helpers= array('html','form');
        public function index(){
            $this->set('posts',$this->Post->find('all'));
        }

        public function view($id){
            if(!$id){
                throw new NotFoundException(__('Error'));
            }
            $post=$this->Post->findById($id);
            if(!$post){
                throw new NotFoundException(__('Error'));
            }
            $this->set('post',$post);
        }

        public function add(){
            $this->loadModel('User');
            if($this->request->is('Post')){
                $this->Post->create();
                $id=$this->User->find('first',array('fields'=>'id','conditions'=>array('username'=>$this->Auth->user('username'))));
                $this->request->data['Post']['user_id']=$id['User']['id'];
                if($this->Post->save($this->request->data['Post'])){
                    $this->Session->setFlash(__('add_su'));
                    return $this->redirect(array('action'=>'index'));
                }
                return $this->Session->setFlash(__('add_er'));
            }
        }

        public function edit($id){
            if(!$id){
                throw new NotFoundException(__('Error'));
            }
            $post=$this->Post->findById($id);
            if(!$post){
                throw new NotFoundException(__('Error'));
            }
            if($this->request->is('Post')){
                $this->Post->id=$id;
                if($this->Post->save($this->request->data['Post'])){
                    $this->Session->setFlash(__('edit_su'));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('add_er'));
            }
            if(!$this->request->data['Post']){
                $this->request->data['Post']=$post;
            }
            $this->set('data',$post);
        }

        public function delete($id){
            if(!$id){
                throw new NotFoundException(__('Error'));
            }
            if($this->Post->delete($id)){
                $this->Session->setFlash(__('delete_su'));
            }else{
                $this->Session->setFlash(__('add_er'));
            }
            return $this->redirect(array('action'=>'index'));
        }

        public function isAuthorized($user){
            $this->loadModel('User');
            if($this->action =='add'){
                return true;
            }
            if(in_array($this->action,array('edit','delete'))){
                $postid=$this->request->params['pass'][0];
                $id=$this->User->find('first',array('fields'=>'id','conditions'=>array('username'=>$this->Auth->user('username'))));
                if($this->Post->isOwnedBy($postid,$id['User']['id'])){
                   return true;
                }
            }
            return parent::isAuthorized($user);
        }
    }
?>