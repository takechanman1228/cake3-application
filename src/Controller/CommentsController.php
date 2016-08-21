<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comments Controller
 *
 * @property \App\Model\Table\CommentsTable $Comments
 */
class CommentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Players']
        ];
        $comments = $this->paginate($this->Comments);

        $this->set(compact('comments'));
        $this->set('_serialize', ['comments']);
    }

    /**
     * View method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => ['Users', 'Players']
        ]);

        $this->set('comment', $comment);
        $this->set('_serialize', ['comment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
        $comment = $this->Comments->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->Comments->patchEntity($comment, $this->request->data);
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('投稿に成功しました'));
                return $this->redirect([]);
                //return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comment could not be saved. Please, try again.'));
            }
        }
        $users = $this->Comments->Users->find('list', ['limit' => 200]);
        $players = $this->Comments->Players->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'users', 'players'));
        $this->set('_serialize', ['comment']);

        if ($id != null) {
        /*$player = $this->Players->get($id, [
          'contain' => ['Details']
        ]);
        $this->set('player', $player);*/
        $this->set('player_id', $id);
        $this->set('_serialize', ['player_id']);
        }
    }
    public function api($id = null)
    {
	    if($id =="0"){

		    $array=array("この間は誕生日おめでとうございます！by鈴木さん","頼りになる抑え！by高橋さん","田中さん本当にカッコいいです！by渡辺さん");
	    } elseif ($id ==1){
		    $array=array("〇〇さん、いつも頼りにしてます！ by中村さん","今日はでっかいの打ち上げてくれ by林さん","守備でも魅せるね～！ by山本さん");
	    } elseif ($id ==2){
		    $array=array("〇〇さん、いつも頼りにしてます！ by中村さん",
				    "今日もホームランを見せてくれ！ by加藤さん",
				    "三振とかいいからHRくれ by谷口さん");
	    }
            //$new = $this->Comments->find()->select(['comment'])->order(['Comments.id' => 'DESC'])->first(['comment'])->comment;
            //$new = $this->Comments->find()->select(['comment'])->order(['Comments.id' => 'DESC'])->first(['comment'])->comment;
            //現在のAPIの条件は，指定された選手かつ直近の投稿をデフォルトの投稿に混ぜて表示します
            //$new = $this->Comments->find()->select(['comment'])->where(['Comments.player_id'=>$id])->order(['Comments.id' => 'DESC'])->first(['comment'])->comment;
            shuffle($array);
            //if (strlen($new)>3) {

              //  array_unshift($array,$new . 'by DeNA審査員様');
            //}

            $this->set('json', json_encode($array, JSON_UNESCAPED_UNICODE));
            //$this->set('json', $array[0]);//流す文字列

            //$this->set('new', $new);//流す文字列
    
    
    }

    /**
     * Edit method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comment = $this->Comments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comments->patchEntity($comment, $this->request->data);
            if ($this->Comments->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comment could not be saved. Please, try again.'));
            }
        }
        $users = $this->Comments->Users->find('list', ['limit' => 200]);
        $players = $this->Comments->Players->find('list', ['limit' => 200]);
        $this->set(compact('comment', 'users', 'players'));
        $this->set('_serialize', ['comment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comments->get($id);
        if ($this->Comments->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
