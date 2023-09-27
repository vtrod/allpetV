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
    private $id;
    /**
     * nome do serviço
     * @var string
     */
    private $nomeservico;
    /**
     * duração do servico
     * @var string
     */
    private $duracao;
    /**
     * preço do servico
     * @var float
     */
    private $preco;
    /**
     * fluxo de agenda (select com as opções "Em andamento", "Pendente" e "Finalizado")
     * @var string
     */
    private $fluxoag;
    /**
     * periodização recomendada para realização do serviço
     * @var string
     */
    private $periodorec;
    /**
     * descrição do serviço
     * @var string
     */
    private $modatend;

    /**
     * metodo responsavel por cadastrar novo serviço no banco
     * @return void
     */
    public function cadastrar(){

    //INSERIR SERVIÇO NO BANCO
    $obDatabase = new Database('servico');
    $this->id = $obDatabase->insert([
                            'nomeservico'   =>$this->nomeservico,
                            'duracao'       =>$this->duracao,
                            'preco'         =>$this->preco,
                            'fluxoag'       =>$this->fluxoag,
                            'periodorec'    =>$this->periodorec,
                            'modatend'      =>$this->modatend

    ]);
    //ATRIBUIR ID NA INSTANCIA DO SERVIÇO

    //RETORNAR SUCESSO
    return true;
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

}