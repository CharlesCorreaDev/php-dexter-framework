# Define o contexto padrão do fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-set-default.php

---

# stream\_context\_set\_default

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

stream\_context\_set\_default — Define o contexto padrão do fluxo

### Descrição

function **stream\_context\_set\_default**([array](language.types.array.md) `$options`): [resource](language.types.resource.md)

Define o contexto padrão do fluxo que será usado sempre que operações de arquivos
([fopen()](function.fopen.md), [file\_get\_contents()](function.file-get-contents.md), etc.)
forem chamadas sem um parâmetro de contexto. Usa a mesma sintaxe de
[stream\_context\_create()](function.stream-context-create.md).

### Parâmetros

`options`
:   As opções a serem definidas para o contexto padrão.

    > **Nota**:
    >
    > `options` deve ser um array associativo
    > de arrays associativos no formato
    > `$arr['empacotador']['opção'] = $valor`.

### Valor Retornado

Retorna o contexto padrão do fluxo.

### Examples

**Exemplo #1 Exemplo de **stream\_context\_set\_default()****

```
<?php
$default_opts = [
    'http' => [
        'method' => "GET",
        'header' => "Accept-language: en\r\n" .
                    "Cookie: foo=bar",
        'proxy'  => "tcp://10.54.1.39:8000",
    ]
];

$default = stream_context_set_default($default_opts);

/* Envia uma requisição GET normal para o servidor proxy em 10.54.1.39
 * para www.example.com usando as opções de contexto especificadas em $default_opts
 */
readfile('http://www.example.com');
?>
```

### Veja também

- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
- [stream\_context\_get\_default()](function.stream-context-get-default.md) - Obtém o contexto padrão de fluxo
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
