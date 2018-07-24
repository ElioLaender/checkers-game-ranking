<?php

require_once "model/ContatoModel.php";

class ContatoDAO extends ContatoModel 
{
    private $insert = "INSERT INTO Contato (contato_nome,contato_email,contato_assunto,contato_mensagem) VALUES ('%s','%s','%s','%s');";

        public function persistContact($nome,$email,$assunto,$mensagem) 
        {
            $this->setContatoNome($nome);
            $this->setContatoEmail($email);
            $this->setContatoAssunto($assunto);
            $this->setContatoMensagem($mensagem);

            $this->insert = sprintf
                (
                    $this->insert, 
                    $this->getContatoNome(),
                    $this->getContatoEmail(),
                    $this->getContatoAssunto(),
                    $this->getContatoMensagem()
                );
            try 
            {
                $this->runQuery($this->insert);
            }  catch (Exception $e) 
            {
                var_dump($e->getMessage());
            }
        }

}
