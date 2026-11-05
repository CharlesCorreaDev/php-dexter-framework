# Cria um contexto de fluxo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-create.php

---

# stream\_context\_create

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

stream\_context\_create — Cria um contexto de fluxo

### Descrição

function **stream\_context\_create**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$params` = **`null`**): [resource](language.types.resource.md)

Cria e retorna um contexto de fluxo com as opções fornecidas em
`options` predefinidas.

### Parâmetros

`options`
:   Deve ser um array associativo de arrays associativos no formato
    `$arr['empacotador']['opcao'] = $valor` ou **`null`**. Consulte [opções de contexto](context.md) para uma lista de empacotadores disponíveis e opções.

    O padrão é **`null`**.

`params`
:   Deve ser um array associativo no formato
    `$arr['parametro'] = $valor` ou **`null`**.
    Consulte [parâmetros de contexto](context.params.md) para
    uma lista de parâmetros de fluxo padrões.

### Valor Retornado

Um recurso do tipo [resource](language.types.resource.md) de contexto de fluxo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `options` e `params` agora podem ser nulos. |

### Examples

**Exemplo #1 Usando a função **stream\_context\_create()****

```
<?php
$opts = [
    'http' => [
        'method'=>"GET",
        // Use CRLF \r\n para separar múltiplos cabeçalhos
        'header' => "Accept-language: en\r\n" .
                    "Cookie: foo=bar"
    ]
];

$context = stream_context_create($opts);

/* Envia uma requisição http para to www.example.com
   com cabeçalhos adicionais mostrados acima */
$fp = fopen('http://www.example.com', 'r', false, $context);
fpassthru($fp);
fclose($fp);
?>
```

### Veja também

- [stream\_context\_set\_option()](function.stream-context-set-option.md) - Define uma opção para um fluxo/empacotador/contexto
- Lista de empacotadores suportados ([Protocolos e empacotadores suportados](wrappers.md))
- Opções de contexto ([Opções e parâmetros de contexto](context.md))

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
