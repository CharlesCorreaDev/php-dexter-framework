# Obtém tempo limite de leitura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.getreadtimeout.php

---

# Stomp::getReadTimeout

# stomp\_get\_read\_timeout

(PECL stomp >= 0.3.0)

Stomp::getReadTimeout -- stomp\_get\_read\_timeout — Obtém tempo limite de leitura

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::getReadTimeout**(): [array](language.types.array.md)

Estilo procedural:

function **stomp\_get\_read\_timeout**([resource](language.types.resource.md) `$link`): [array](language.types.array.md)

Obtém tempo limite de leitura

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

### Valor Retornado

Retorna um array com 2 elementos: sec e usec.

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

var_dump($stomp->getReadTimeout());

/* fecha a conexão */
unset($stomp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["sec"]=>
  int(2)
  ["usec"]=>
  int(0)
}
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

var_dump(stomp_get_read_timeout($link));

/* fecha a conexão */
stomp_close($link);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(2) {
  ["sec"]=>
  int(2)
  ["usec"]=>
  int(0)
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
