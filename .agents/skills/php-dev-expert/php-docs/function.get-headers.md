# Retorna todos os cabeçalhos enviados pelo servidor em resposta a uma requisição HTTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-headers.php

---

# get\_headers

(PHP 5, PHP 7, PHP 8)

get\_headers — Retorna todos os cabeçalhos enviados pelo servidor em resposta a uma requisição HTTP

### Descrição

function **get\_headers**([string](language.types.string.md) `$url`, [bool](language.types.boolean.md) `$associative` = **`false`**, [?](language.types.null.md)[resource](language.types.resource.md) `$context` = **`null`**): [array](language.types.array.md)|[false](language.types.singleton.md)

**get\_headers()** retorna um array com os cabeçalhos enviados
pelo servidor em resposta a uma requisição HTTP.

### Parâmetros

`url`
:   A URL alvo.

`associative`
:   Se o parâmetro opcional `associative` estiver
    definido como true, **get\_headers()** avalia a resposta e
    define as chaves do array.

`context`
:   Um recurso de contexto válido criado com
    [stream\_context\_create()](function.stream-context-create.md), ou **`null`** para usar o
    contexto padrão

### Valor Retornado

Retorna um array indexado ou associativo com os cabeçalhos, ou **`false`** em
caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `associative` foi modificado de [int](language.types.integer.md) para [bool](language.types.boolean.md). |
| 7.1.0 | O parâmetro `context` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **get\_headers()****

```
<?php
$url = 'http://www.example.com';

print_r(get_headers($url));

print_r(get_headers($url, true));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => HTTP/1.1 200 OK
    [1] => Date: Sat, 29 May 2004 12:28:13 GMT
    [2] => Server: Apache/1.3.27 (Unix)  (Red-Hat/Linux)
    [3] => Last-Modified: Wed, 08 Jan 2003 23:11:55 GMT
    [4] => ETag: "3f80f-1b6-3e1cb03b"
    [5] => Accept-Ranges: bytes
    [6] => Content-Length: 438
    [7] => Connection: close
    [8] => Content-Type: text/html
)

Array
(
    [0] => HTTP/1.1 200 OK
    [Date] => Sat, 29 May 2004 12:28:14 GMT
    [Server] => Apache/1.3.27 (Unix)  (Red-Hat/Linux)
    [Last-Modified] => Wed, 08 Jan 2003 23:11:55 GMT
    [ETag] => "3f80f-1b6-3e1cb03b"
    [Accept-Ranges] => bytes
    [Content-Length] => 438
    [Connection] => close
    [Content-Type] => text/html
)
```

**Exemplo #2 Exemplo de **get\_headers()** usando HEAD**

```
<?php
// Por padrão get_headers usa uma requisição GET para obter os cabeçalhos. Se
// a intenção for enviar uma requisição HEAD, isso pode ser feito utilizando um contexo de fluxo:
$context = stream_context_create(
    [
        'http' => array(
            'method' => 'HEAD'
        )
    ]
);
$headers = get_headers('http://example.com', false, $context);
?>
```

### Veja também

- [apache\_request\_headers()](function.apache-request-headers.md) - Obtém todos os cabeçalhos da requisição HTTP

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
