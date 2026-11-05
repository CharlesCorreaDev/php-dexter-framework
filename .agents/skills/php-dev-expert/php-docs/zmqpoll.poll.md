# Consulta os itens

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zmqpoll.poll.php

---

# ZMQPoll::poll

(PECL zmq >= 0.5.0)

ZMQPoll::poll — Consulta os itens

### Descrição

public function **ZMQPoll::poll**([array](language.types.array.md) `&$readable`, [array](language.types.array.md) `&$writable`, [int](language.types.integer.md) `$timeout` = -1): [int](language.types.integer.md)

Consulta os itens na lista de pesquisa atual. Os itens de leitura e escrita são retornados nos
parâmetros `readable` e `writable`.
A função [ZMQPoll::getLastErrors()](zmqpoll.getlasterrors.md) pode ser usada para verificar se houveram erros.

### Parâmetros

`readable`
:   Um array (vetor) onde os ZMQSockets de leitura ou recursos de fluxo (streams) PHP são retornados. O array
    será esvaziado no início da operação.

`writable`
:   Um array (vetor) onde os ZMQSockets de escrita ou recursos de fluxo (streams) PHP são retornados. O array
    será esvaziado no início da operação.

`timeout`
:   O tempo limite de execução da operação. -1 significa que a pesquisa espera até
    pelo menos um item entre em atividade. Note que a partir da
    versão 1.0.0 o tempo limite de consulta é definido em milissegundos, em vez
    de microssegundos.

### Valor Retornado

Retorna um inteiro representando a quantidade de itens com atividades.

### Erros/Exceções

Lança um **ZMQPollException** em caso de erros.

### Examples

**Exemplo #1 Um exemplo de **ZMQPoll()****

Cria um servidor de consulta simples

```
<?php

/* Cria um socket, padrão requisição-resposta (socket de resposta) */
$contexto = new ZMQContext();
$servidor  = $contexto->getSocket(ZMQ::SOCKET_REP);

/* Associa à porta 5555 em 127.0.0.1 */
$servidor->bind("tcp://127.0.0.1:5555");

/* Cria uma nova lista de consulta para mensagens de entrada/saída */
$consulta = new ZMQPoll();

/* Adiciona o objeto e espera por consultas de entrada/saída */
$id = $consulta->add($servidor, ZMQ::POLL_IN | ZMQ::POLL_OUT);
echo "Adicionou o objeto com id " . $id . "\n";

/* Inicializa os arrays de leitura e escrita */
$leitura = array();
$escrita = array();

while (true) {
   /* Quantidade de eventos recuperados */
   $eventos = 0;

   try {
       /* Pesquisa até que haja algo a ser feito */
       $eventos = $consulta->poll($leitura, $escrita, -1);
       $erros = $consulta->getLastErrors();

       if (count($erros) > 0) {
           foreach ($erros as $erro) {
               echo "Erro ao consultar objeto " . $erro . "\n";
           }
       }
   } catch (ZMQPollException $e) {
       echo "A pesquisa falhou: " . $e->getMessage() . "\n";
   }

   if ($eventos > 0) {
       /* Itera através dos objetos de leitura e mensagens recebidas */
       foreach ($leitura as $le) {
           try {
               echo "Mensagem recebida: " . $le->recv() . "\n";
           } catch (ZMQException $e) {
               echo "o método recv falhou: " . $e->getMessage() . "\n";
           }
       }

       /* Itera através dos objetos de escrita e das mensagens enviada */
       foreach ($escrita as $es) {
           try {
               $es->send("Recebido!");
           } catch (ZMQException $e) {
               echo "o método send falhou: " . $e->getMessage() . "\n";
           }
       }
   }
}
?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
