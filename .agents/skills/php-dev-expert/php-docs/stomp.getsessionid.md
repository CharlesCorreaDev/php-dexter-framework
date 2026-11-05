# Obtém o ID da sessão stomp atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.getsessionid.php

---

# Stomp::getSessionId

# stomp\_get\_session\_id

(PECL stomp >= 0.1.0)

Stomp::getSessionId -- stomp\_get\_session\_id — Obtém o ID da sessão stomp atual

### Descrição

Estilo orientado a objetos (method):

public function **Stomp::getSessionId**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Estilo procedural:

function **stomp\_get\_session\_id**([resource](language.types.resource.md) `$link`): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém o ID da sessão stomp atual.

### Parâmetros

`link`
:   Somente no estilo procedural: O identificador do link stomp retornado por [stomp\_connect()](stomp.construct.md).

### Valor Retornado

[string](language.types.string.md) com ID de sessão em caso de sucesso ou **`false`** em caso de falha.

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

var_dump($stomp->getSessionId());

/* fecha a conexão */
unset($stomp);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(35) "ID:php.net-52873-1257291895530-4:14"
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

var_dump(stomp_get_session_id($link));

/* fecha a conexão */
stomp_close($link);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(35) "ID:php.net-52873-1257291895530-4:14"
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
