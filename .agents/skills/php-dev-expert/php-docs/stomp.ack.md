# Reconhece o consumo de uma mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.ack.php

---

# Stomp::ack

# stomp\_ack

(PECL stomp >= 0.1.0)

Stomp::ack -- stomp\_ack — Reconhece o consumo de uma mensagem

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::ack**([mixed](language.types.mixed.md) `$msg`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_ack**([resource](language.types.resource.md) `$link`, [mixed](language.types.mixed.md) `$msg`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Confirma o consumo de uma mensagem de uma assinatura usando a confirmação do cliente.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`msg`
:   A mensagem ou o ID de mensagem a ser reconhecido.

`headers`
:   Um array associativo contendo os cabeçalhos adicionais (exemplo: receipt).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

$queue  = '/queue/foo';
$msg    = 'bar';

/* conexão */
try {
    $stomp = new Stomp('tcp://localhost:61613');
} catch(StompException $e) {
    die('Conexão falhou: ' . $e->getMessage());
}

/* envia uma mensagem à fila 'foo' */
$stomp->send($queue, $msg);

/* inscreve para mensagens da fila 'foo' */
$stomp->subscribe($queue);

/* lê um quadro */
$frame = $stomp->readFrame();

if ($frame->body === $msg) {
    /* confirma que o quadro foi recebido */
    $stomp->ack($frame);
}

/* remove a inscrição */
$stomp->unsubscribe($queue);

/* fecha a conexão */
unset($stomp);

?>
```

**Exemplo #2 Estilo procedural**

```
<?php

$queue  = '/queue/foo';
$msg    = 'bar';

/* conexão */
$link = stomp_connect('ssl://localhost:61612');

/* verifica a conexão */
if (!$link) {
    die('Conexão falhou: ' . stomp_connect_error());
}

/* começa uma transação */
stomp_begin($link, 't1');

/* envia uma mensagem à fila 'foo' */
stomp_send($link, $queue, $msg, array('transaction' => 't1'));

/* confirma uma transação */
stomp_commit($link, 't1');

/* inscreve para mensagens da fila 'foo' */
stomp_subscribe($link, $queue);

/* lê um quadro */
$frame = stomp_read_frame($link);

if ($frame['body'] === $msg) {
    /* confirma que o quadro foi recebido */
    stomp_ack($link, $frame['headers']['message-id']);
}

/* remove a inscrição */
stomp_unsubscribe($link, $queue);

/* fecha a conexão */
stomp_close($link);

?>
```

### Notas

> **Nota**:
>
> Um cabeçalho de transação pode ser especificado, indicando que a confirmação da mensagem deve fazer parte da transação nomeada.

**Dica**

O Stomp é naturalmente assíncrono. Comunicação síncrona pode ser implementada adicionando um cabeçalho receipt. Isso fará com que os métodos não retornem nada até que o servidor confirme o recebimento da mensagem ou até que o tempo limite de leitura seja atingido.

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
