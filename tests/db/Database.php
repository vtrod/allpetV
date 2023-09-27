<?php
namespace tests\db;
use PDO;
use PDOException;
use PDOStatement;

class Database
{
    /**
     * HOST DE CONEXAO COM O BANCO
     * @var string
     */
const HOST = '127.0.0.1';


    /**
     * NOME DO BANCO
     * @var string
     */
const NAME = 'servico';


    /**
     * USUÁRIO DO BANCO
     * @var string
     */
const USER = 'root';


    /**
     * SENHA DO BANCO
     * @var string
     */
const PASS = '';


    /**
     * NOME DA TABELA A SER MANIPULADA
     * @var PDO
     */
private $table;


    /**
     * INSTANCIA CONEXAO COM O BANCO DE DADOS
     * @var string
     */
private $connection;


    /**
     * DEFINE TABELA E INSTANCIA CONEXÃO
     * @var string $table
     */
public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
}

    /**
     * metodo responsavel por criar uma conexão com o bando de dados, utilizando uma instancia de PDO
     */
    public function setConnection(){
        try{
        $this->connection = new PDO('mysql:host='.self::HOST.';dbname=.'.self::NAME,self::USER, self::PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }


    /**
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    /**
     * metodo responsavel por inserir dados no banco de dados
     * @param array $value [ field => value ]
     * @return integer ID Inserido
     */
    public function insert($values){
        //DADOS DA QUERY
        $fields = array_keys($values);
        $binds = array_pad([],count($fields), '?');

        //MONTA A QUERY
        $query = 'INSERT INTO'.$this->table.'  ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        //EXECUTA O INSERT
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }


        /**
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return PDOStatement
         */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //DADOS DA QUERY
        $where = strlen($where) ? 'WHERE '.where : '';
        $where = strlen($order) ? 'ORDER BY '.order : '';
        $where = strlen($limit) ? 'LIMIT '.limit : '';
        //MONTA A QUERY
        $query = 'SELECT '.$fields.' FROM'.$this->table.' '.$where.' '.$limit;
        //EXECUTA A QUERY
        return $this->execute($query);

    }

    public static function getServico(){
        return (new Database('servico'))->select('id = '.$id)
                                              ->fetchObject(self::class);
    }


}