# Define o contexto de fluxos para o próximo carregamento ou escrita de documento libxml

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-set-streams-context.php

---

# libxml\_set\_streams\_context

(PHP 5, PHP 7, PHP 8)

libxml\_set\_streams\_context — 
Define o contexto de fluxos para o próximo carregamento ou escrita de documento libxml

### Descrição

function **libxml\_set\_streams\_context**([resource](language.types.resource.md) `$context`): [void](language.types.void.md)

Define contexto de fluxos para o próximo carregamento ou escrita de documento libxml.

### Parâmetros

`context`
:   O recurso do contexto de fluxo (criado com
    [stream\_context\_create()](function.stream-context-create.md))

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança um [TypeError](class.typeerror.md) quando um recurso que não seja um fluxo é
passedo no parâmetro `context`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **libxml\_set\_streams\_context()** agora lança um [TypeError](class.typeerror.md) quando um recurso que não seja um fluxo é passado no parâmetro `context`, ao invés de lançar posteriormente quando o contexto é usado. |

### Examples

**Exemplo #1 Um exemplo de **libxml\_set\_streams\_context()****

```
<?php
$opts = [
    'http' => [
        'user_agent' => 'PHP libxml agent',
    ]
];

$context = stream_context_create($opts);
libxml_set_streams_context($context);

// solicita um arquivo por HTTP
$dom = new DOMDocument;
$doc = $dom->load('http://www.example.com/file.xml');
?>
```

### Veja também

- [stream\_context\_create()](function.stream-context-create.md) - Cria um contexto de fluxo

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
