# Confirma uma transação em andamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.commit.php

---

# Stomp::commit

# stomp\_commit

(PECL stomp >= 0.1.0)

Stomp::commit -- stomp\_commit — Confirma uma transação em andamento

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::commit**([string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Estilo procedural:

function **stomp\_commit**([resource](language.types.resource.md) `$link`, [string](language.types.string.md) `$transaction_id`, [array](language.types.array.md) `$headers` = ?): [bool](language.types.boolean.md)

Confirma uma transação em andamento.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`transaction_id`
:   O ID da transação.

`headers`
:   Um array associativo contendo os cabeçalhos adicionais (exemplo: receipt).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php

/* conexão */
try {
    $stomp = new Stomp('tcp://localhost:61613');
} catch(StompException $e) {
    die('Conexão falhou: ' . $e->getMessage());
}

/* começa uma transação */
$stomp->begin('t1');

/* envia uma mensagem à fila */
$stomp->send('/queue/foo', 'bar', array('transaction' => 't1'));

/* confirma */
$stomp->commit('t1');

/* fecha a conexão */
unset($stomp);

?>
```

**Exemplo #2 Estilo procedural**

```
<?php

/* conexão */
$link = stomp_connect('tcp://localhost:61613');

/* verifica a conexão */
if (!$link) {
    die('Conexão falhou: ' . stomp_connect_error());
}

/* começa uma transação */
stomp_begin($link, 't1');

/* envia uma mensagem à fila 'foo' */
stomp_send($link, '/queue/foo', 'bar', array('transaction' => 't1'));

/* confirma */
stomp_commit($link, 't1');

/* fecha a conexão */
stomp_close($link);

?>
```

### Notas

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
