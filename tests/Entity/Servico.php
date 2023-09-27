<?php

namespace tests\Entity;

use tests\db\Database;
use PDO;

class Servico
{
    /**
     * Identificador do serviço
     * @var integer
     */
    public $id;
    /**
     * nome do serviço
     * @var string
     */
    public $nomeservico;
    /**
     * duração do servico
     * @var string
     */
    public $duracao;
    /**
     * preço do servico
     * @var float
     */
    public $preco;
    /**
     * fluxo de agenda (select com as opções "Em andamento", "Pendente" e "Finalizado")
     * @var string
     */
    public $fluxoag;
    /**
     * periodização recomendada para realização do serviço
     * @var string
     */
    public $periodorec;
    /**
     * descrição do serviço
     * @var string
     */
    public $modatend;

    /**
     * metodo responsavel por cadastrar novo serviço no banco
     * @return void
     */
    public function cadastrar(){

    //INSERIR SERVIÇO NO BANCO
     $obDatabase = new Database('servico');
     $this->id = $obDatabase->insert([
                            'nomeservico'   => $this->nomeservico,
                            'duracao'       => $this->duracao,
                            'preco'         => $this->preco,
                            'fluxoag'       => $this->fluxoag,
                            'periodorec'    => $this->periodorec,
                            'modatend'      => $this->modatend

                        ]);
        //RETORNAR SUCESSO
        return true;
    }



        /**
         * Método responsável por atualizar a vaga no banco
         * @return boolean
         */
        public function atualizar(){
            return (new Database('servico'))->update('id = '.$this->id,[
                'nomeservico'   => $this->nomeservico,
                'duracao'       => $this->duracao,
                'preco'         => $this->preco,
                'fluxoag'       => $this->fluxoag,
                'periodorec'    => $this->periodorec,
                'modatend'      => $this->modatend
            ]);
        }





    /**
     * Método responsável por excluir a vaga do banco
     * @return boolean
     */
    public function excluir(){
        return (new Database('servico'))->delete('id = '.$this->id);
    }

    /**
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getServico($where = null, $order = null, $limit = null){
        return (new Database('servico'))->select($where,$order,$limit)
                                             ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
     * @param integer $id
     * @return servicos
     */
    public static function getServicos($id){
        return (new Database('servico'))->select('id = '.$id)
            ->fetchObject(self::class);
    }


}