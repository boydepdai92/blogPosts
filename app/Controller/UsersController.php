<?php
    App::uses('AppController', 'Controller');
    Class UsersController extends AppController{
        public function beforeFilter(){
            parent::beforeFilter();
        }

        public function login(){
            if($this->request->is('post')){
                if($this->Auth->login($this->request->data['Login'])){
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Session->setFlash(__('login_err'));
            }
        }

        public function logout(){
            return $this->redirect($this->Auth->logout());
        }
        public function index(){
            $user=$this->User->find('all');
            if($user){
                $this->set('users',$user);
            }
        }
        public function view($id=null){
            $this->User->id=$id;
            $user=$this->User->findById($id);
            if(!$user){
                throw new NotFoundException(__('user_Found'));
            }
            $this->set('user',$user);
        }

        public function add(){
            if($this->request->is('post')){
                $this->User->create();
                if($this->User->save($this->request->data['User'])){
                    $this->Session->setFlash(__('create_su'));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('add_er'));
            }
        }

        public function edit($id){
            $this->User->id=$id;
            $this->set('user',$this->User->findById($id));
            if(!$this->User->exists()){
                throw new NotFoundException(__('user_Found'));
            }
            if($this->request->is('post')){
                if($this->User->save($this->request->data['User'])){
                    $this->Session->setFlash(__('update_su'));
                    return $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('add_er'));
            }
        }

        public function delete($id){
            $this->User->id=$id;
            if(!$this->User->exists()){
                throw new NotFoundException(__('user_Found'));
            }
            if($this->User->delete()){
                $this->Session->setFlash(__('delete_su'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash(__('add_er'));
            return $this->redirect(array('action'=>'index'));
        }


    }
?>