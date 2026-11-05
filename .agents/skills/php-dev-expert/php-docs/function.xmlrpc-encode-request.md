# Gera XML para uma requisição de método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.xmlrpc-encode-request.php

---

# xmlrpc\_encode\_request

(PHP 4 >= 4.1.0, PHP 5, PHP 7)

xmlrpc\_encode\_request — Gera XML para uma requisição de método

### Descrição

function **xmlrpc\_encode\_request**([string](language.types.string.md) `$method`, [mixed](language.types.mixed.md) `$params`, [array](language.types.array.md) `$output_options` = ?): [string](language.types.string.md)

**Aviso**

Esta função é
*EXPERIMENTAL*. O comportamento desta função, seu nome e
documentação poderão mudar sem aviso prévio em futuras versões do PHP.
Use por sua conta e risco.

### Parâmetros

`method`
:   Nome do método a ser chamado.

`params`
:   Parâmetros do método compatível com assinatura do método.

`output_options`
:   Array especificando opções de saída. Pode conter (valores padrão estão
    em negrito):

    - output\_type: php, *xml*
    - verbosity: no\_white\_space, newlines\_only, *pretty*
    - escaping: cdata, *non-ascii, non-print, markup*
      (pode ser uma string com um valor ou um array com múltiplos valores)
    - version: simple, *xmlrpc*, soap 1.1, auto
    - encoding: *iso-8859-1*, outra codificação suportada por iconv

### Valor Retornado

Retorna uma string contendo a representação XML da requisição.

### Examples

**Exemplo #1 Exemplo de uso das funções de cliente XMLRPC**

```
<?php
$request = xmlrpc_encode_request("method", [1, 2, 3]);
$context = stream_context_create([
    'http' => [
        'method'  => "POST",
        'header'  => "Content-Type: text/xml",
        'content' => $request,
    ]
]);
$file = file_get_contents("http://www.example.com/xmlrpc", false, $context);
$response = xmlrpc_decode($file);
if ($response && xmlrpc_is_fault($response)) {
    trigger_error("xmlrpc: $response[faultString] ($response[faultCode])");
} else {
    print_r($response);
}
?>
```

### Veja também

- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo
- [file\_get\_contents()](function.file-get-contents.md) - Lê todo o conteúdo de um arquivo para uma string
- [xmlrpc\_decode()](function.xmlrpc-decode.md) - Decodifica XML para tipos nativos do PHP

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
