# Obtém o último erro stomp

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.error.php

---

# Stomp::error

# stomp\_error

(PECL stomp >= 0.1.0)

Stomp::error -- stomp\_error — Obtém o último erro stomp

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::error**(): [string](language.types.string.md)

Estilo procedural:

function **stomp\_error**([resource](language.types.resource.md) `$link`): [string](language.types.string.md)

Obtém o último erro stomp.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

### Valor Retornado

Retorna uma string de erro ou **`false`** se nenhum erro ocorreu.

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

var_dump($stomp->error());

if (!$stomp->abort('unknown-transaction', array('receipt' => 'foo'))) {
    var_dump($stomp->error());
}

/* fecha a conexão */
unset($stomp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
string(43) "Invalid transaction id: unknown-transaction"
```

**Exemplo #2 Estilo procedural**

```
<?php

/* conexão */
$link = stomp_connect('ssl://localhost:61612');

/* verifica a conexão */
if (!$link) {
    die('Conexão falhou: ' . stomp_connect_error());
}

var_dump(stomp_error($link));

if (!stomp_abort($link, 'unknown-transaction', array('receipt' => 'foo'))) {
    var_dump(stomp_error($link));
}

/* fecha a conexão */
stomp_close($link);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
string(43) "Invalid transaction id: unknown-transaction"
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
