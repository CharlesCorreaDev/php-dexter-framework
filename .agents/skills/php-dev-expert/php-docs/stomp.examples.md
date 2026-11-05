# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.examples.php

---

# Examples

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
    var_dump($frame);

    /* confirma que o quadro foi recebido */
    $stomp->ack($frame);
}

/* fecha a conexão */
unset($stomp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(StompFrame)#2 (3) {
  ["command"]=>
  string(7) "MESSAGE"
  ["headers"]=>
  array(5) {
    ["message-id"]=>
    string(41) "ID:php.net-55293-1257226743606-4:2:-1:1:1"
    ["destination"]=>
    string(10) "/queue/foo"
    ["timestamp"]=>
    string(13) "1257226805828"
    ["expires"]=>
    string(1) "0"
    ["priority"]=>
    string(1) "0"
  }
  ["body"]=>
  string(3) "bar"
}
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
    var_dump($frame);

    /* confirma que o quadro foi recebido */
    stomp_ack($link, $frame['headers']['message-id']);
}

/* fecha a conexão */
stomp_close($link);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  ["command"]=>
  string(7) "MESSAGE"
  ["body"]=>
  string(3) "bar"
  ["headers"]=>
  array(6) {
    ["transaction"]=>
    string(2) "t1"
    ["message-id"]=>
    string(41) "ID:php.net-55293-1257226743606-4:3:-1:1:1"
    ["destination"]=>
    string(10) "/queue/foo"
    ["timestamp"]=>
    string(13) "1257227037059"
    ["expires"]=>
    string(1) "0"
    ["priority"]=>
    string(1) "0"
  }
}
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
