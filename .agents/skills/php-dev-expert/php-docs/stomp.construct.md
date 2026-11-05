# Abre uma conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stomp.construct.php

---

# Stomp::\_\_construct

# stomp\_connect

(PECL stomp >= 0.1.0)

Stomp::\_\_construct -- stomp\_connect — Abre uma conexão

### Descrição

Estilo orientado a objetos (constructor):

public function **Stomp::\_\_construct**(  
    [string](language.types.string.md) `$broker` = ini\_get("stomp.default\_broker\_uri"),  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [array](language.types.array.md) `$headers` = ?  
)

Estilo procedural:

function **stomp\_connect**(  
    [string](language.types.string.md) `$broker` = ini\_get("stomp.default\_broker\_uri"),  
    [string](language.types.string.md) `$username` = ?,  
    [string](language.types.string.md) `$password` = ?,  
    [array](language.types.array.md) `$headers` = ?  
): [resource](language.types.resource.md)

Abre uma conexão com um broker de mensagens compatível com stomp.

### Parâmetros

`broker`
:   O URI do broker

`username`
:   O nome de usuário.

`password`
:   A senha.

`headers`
:   Um array associativo contendo os cabeçalhos adicionais (exemplo: receipt).

### Valor Retornado

> **Nota**:
>
> Um cabeçalho de transação pode ser especificado, indicando que a confirmação da mensagem deve fazer parte da transação nomeada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL stomp 1.0.1 | O parâmetro `headers` foi adicionado |

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
