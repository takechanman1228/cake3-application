<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Players Controller
 *
 * @property \App\Model\Table\PlayersTable $Players
 */
class PlayersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
	if(in_array($this->action, array('mobile'))) {
        Configure::write('debug', 0);
    }
        $players = $this->paginate($this->Players);
        $this->set('players', $this->Players->find('all'));
        $this->set('_serialize', ['players']);
    }

    /**
     * View method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => ['Details']
        ]);

        $this->set('player', $player);
        $this->set('_serialize', ['player']);
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
            shuffle($array);
            //$this->set('json', json_encode($shuffled, JSON_UNESCAPED_UNICODE));
            $this->set('json', $array[0]);//流す文字列
    }



    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $player = $this->Players->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Players->patchEntity($player, $this->request->data);
            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The player could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('player'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $player = $this->Players->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Players->patchEntity($player, $this->request->data);
            if ($this->Players->save($player)) {
                $this->Flash->success(__('The player has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The player could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('player'));
        $this->set('_serialize', ['player']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Player id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Players->get($id);
        if ($this->Players->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
