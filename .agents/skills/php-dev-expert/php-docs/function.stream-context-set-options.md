# Define opções no contexto especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-context-set-options.php

---

# stream\_context\_set\_options

(PHP 8 >= 8.3.0)

stream\_context\_set\_options — Define opções no contexto especificado

### Descrição

function **stream\_context\_set\_options**([resource](language.types.resource.md) `$context`, [array](language.types.array.md) `$options`): [true](language.types.singleton.md)

Define opções no contexto especificado.

### Parâmetros

`context`
:   O recurso fluxo ou contexto ao qual deve-se aplicar as opções.

`options`
:   As opções a serem definidas para `context`.

    > **Nota**:
    >
    > `options` deve ser um [array](language.types.array.md) associativo
    > de arrays associativos no formato
    > `$array['empacotador']['opcao'] = $valor`.
    >
    > Consulte [opções de contexto e parâmetros](context.md)
    > para uma lista de opções de fluxo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_context\_set\_options()****

```
<?php

$context = stream_context_create();

$options = [
    'http' => [
        'protocol_version' => 1.1,
        'user_agent' => 'PHPT Agent',
    ],
];

stream_context_set_options($context, $options);
var_dump(stream_context_get_options($context));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["http"]=>
  array(2) {
    ["protocol_version"]=>
    float(1.1)
    ["user_agent"]=>
    string(10) "PHPT Agent"
  }
}
```

### Veja também

- [stream\_context\_set\_option()](function.stream-context-set-option.md) - Define uma opção para um fluxo/empacotador/contexto

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
