<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Utility\Security;
use Cake\Mailer\TransportFactory;
use Cake\Mailer\Mailer;


class UsersController extends AppController
{

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->viewBuilder()->setLayout('userPanel');
        $this->Auth->allow(['add','resetpass','forgotpass']);
    }

    public function login()
    {

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                if ($user['admin']) {
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Users', 'action' => 'index']);
                } else {
                    $this->Flash->error('this user is not admin');
                }
            } else {
                $this->Flash->error('incorrect email or pass');
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function forgotpass()
    {
        if ($this->request->is('post')) {
            $email = $this->request->getData('username');
            $token = Security::hash(Security::randomBytes(20));
            $this->loadModel('users');
            $users = $this->users->find('all');
            $user = $users->where(['username' => $email])->first();
            if (!$user) {
                $this->Flash->error(__('not email yet'));
                return;
            }
            $user->token = $token;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('check your email - ' . $email));

                $mailer = new Mailer();
                $mailer->setTo($email)
                    ->setEmailFormat('html')
                    ->setFrom('testmailsendercake@gmail.com')
                    ->setSubject('Reset your password');
                $mailer->deliver('click for reset your password <br/><br/><br/><a href="http://caketest/users/resetpass/' . $token . '">click me</a>');
            }
        }
    }

    public function resetpass($token = null)
    {
        if ($this->request->is('post')) {
            $pass = $this->request->getData('password');
            $this->loadModel('users');
            $users = $this->users->find('all');
            $user = $users->where(['token' => $token])->first();
            $user->password = $pass;
            $user->token = null;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('pass was changed'));
                return $this->redirect(['action' => 'login']);
            }
        }
    }

    public function index()
    {
        $this->loadModel('users');
        $users = $this->users->find('all');
        $this->set('users', $this->paginate($users, ['limit' => '10']));
    }

    public function view($id = null)
    {
        $this->loadModel('users');
        $user = $this->Users->get($id);
        $this->set('user', $user);


    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


}
