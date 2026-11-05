# Retorna um array com os nomes das funções de um módulo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-extension-funcs.php

---

# get\_extension\_funcs

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_extension\_funcs — Retorna um array com os nomes das funções de um módulo

### Descrição

function **get\_extension\_funcs**([string](language.types.string.md) `$extension`): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função retorna os nomes de todas as funções definidas no
módulo indicado por `extension`.

### Parâmetros

`extension`
:   O nome do módulo.

    > **Nota**:
    >
    > Este parâmetro precisa estar em *minúsculas*.

### Valor Retornado

Retorna um array com todas as funções, ou **`false`** se
`extension` não for uma extensão válida.

### Examples

**Exemplo #1 Imprime as funções de XML**

```
<?php
print_r(get_extension_funcs("xml"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => xml_parser_create
    [1] => xml_parser_create_ns
    [2] => xml_set_object
    [3] => xml_set_element_handler
    [4] => xml_set_character_data_handler
    [5] => xml_set_processing_instruction_handler
    [6] => xml_set_default_handler
    [7] => xml_set_unparsed_entity_decl_handler
    [8] => xml_set_notation_decl_handler
    [9] => xml_set_external_entity_ref_handler
    [10] => xml_set_start_namespace_decl_handler
    [11] => xml_set_end_namespace_decl_handler
    [12] => xml_parse
    [13] => xml_parse_into_struct
    [14] => xml_get_error_code
    [15] => xml_error_string
    [16] => xml_get_current_line_number
    [17] => xml_get_current_column_number
    [18] => xml_get_current_byte_index
    [19] => xml_parser_free
    [20] => xml_parser_set_option
    [21] => xml_parser_get_option
)
```

### Veja também

- [get\_loaded\_extensions()](function.get-loaded-extensions.md) - Retorna um array com os nomes de todos os módulos compilados e carregados
- [ReflectionExtension::getFunctions()](reflectionextension.getfunctions.md) - Obtém funções de extensão

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
