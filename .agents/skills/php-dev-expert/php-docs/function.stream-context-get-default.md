# Obtém o contexto padrão de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-get-default.php

---

# stream\_context\_get\_default

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_context\_get\_default — Obtém o contexto padrão de fluxo

### Descrição

function **stream\_context\_get\_default**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [resource](language.types.resource.md)

Retorna o contexto padrão de fluxo que é usado sempre que operações de arquivos
([fopen()](function.fopen.md), [file\_get\_contents()](function.file-get-contents.md), etc.)
são chamadas sem parâmetro de contexto. Opções para o contexto padrão
podem ser opcionalmente especificadas com esta função usando a mesma sintaxe de
[stream\_context\_create()](function.stream-context-create.md).

### Parâmetros

`options`
:   `options` deve ser um array associativo
    de arrays associativos no formato
    `$arr['empacotador']['opcao'] = $valor` ou **`null`**.

### Valor Retornado

Um recurso do tipo [resource](language.types.resource.md) de contexto de fluxo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `options` agora pode ser nulo. |

### Examples

**Exemplo #1 Usando **stream\_context\_get\_default()****

```
<?php
$default_opts = [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
                    "Cookie: foo=bar",
        'proxy' =>  "tcp://10.54.1.39:8000",
    ]
];

$alternate_opts = [
    'http' => [
        'method'  => "POST",
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n" .
                     "Content-length: " . strlen("baz=bomb"),
        'content' => "baz=bomb",
    ]
];

$default = stream_context_get_default($default_opts);
$alternate = stream_context_create($alternate_opts);

/* Envia uma requisição GET normal para o servidor proxy em 10.54.1.39
 * para www.example.com usando as opções de contexto especificadas em $default_opts
 */
readfile('http://www.example.com');

/* Envia uma requisição POST diretamente para www.example.com
 * usando as opções de contexto especificadas em $alternate_opts
 */
readfile('http://www.example.com', false, $alternate);

?>
```

### Veja também

- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
- [stream\_context\_set\_default()](function.stream-context-set-default.md) - Define o contexto padrão do fluxo
- Lista dos empacotadores suportados com opções de contexto ([Protocolos e empacotadores suportados](wrappers.md)).

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
