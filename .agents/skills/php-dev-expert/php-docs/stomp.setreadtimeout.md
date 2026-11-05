# Define o tempo limite de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.setreadtimeout.php

---

# Stomp::setReadTimeout

# stomp\_set\_read\_timeout

(PECL stomp >= 0.3.0)

Stomp::setReadTimeout -- stomp\_set\_read\_timeout — Define o tempo limite de leitura

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::setReadTimeout**([int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = ?): [void](language.types.void.md)

Estilo procedural:

function **stomp\_set\_read\_timeout**([resource](language.types.resource.md) `$link`, [int](language.types.integer.md) `$seconds`, [int](language.types.integer.md) `$microseconds` = ?): [void](language.types.void.md)

Define o tempo limite de leitura.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

`seconds`
:   A parte dos segundos do tempo limite a ser definido.

`microseconds`
:   A parte em microssegundos do tempo limite a ser definido.

### Valor Retornado

Nenhum valor é retornado.

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

$stomp->setReadTimeout(10);

/* fecha a conexão */
unset($stomp);

?>
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

stomp_set_read_timeout($link, 10);

/* fecha a conexão */
stomp_close($link);

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
