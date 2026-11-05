# Obtém o número de campos em um conjunto de resultados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-num-fields.php

---

# ibase\_num\_fields

(PHP 5, PHP 7 < 7.4.0)

ibase\_num\_fields — Obtém o número de campos em um conjunto de resultados

### Descrição

function **ibase\_num\_fields**([resource](language.types.resource.md) `$result_id`): [int](language.types.integer.md)

Obtém o número de campos em um conjunto de resultados.

### Parâmetros

`result_id`
:   Um identificador de resultado InterBase.

### Valor Retornado

Retorna o número de campos como um inteiro.

### Examples

**Exemplo #1 Exemplo da **ibase\_num\_fields()****

```
<?php
    $rs = ibase_query("SELECT * FROM tablename");
    $coln = ibase_num_fields($rs);
    for ($i = 0; $i < $coln; $i++) {
        $col_info = ibase_field_info($rs, $i);
        echo "name: " . $col_info['name'] . "\n";
        echo "alias: " . $col_info['alias'] . "\n";
        echo "relation: " . $col_info['relation'] . "\n";
        echo "length: " . $col_info['length'] . "\n";
        echo "type: " . $col_info['type'] . "\n";
    }
?>
```

### Veja também

- [ibase\_field\_info()](function.ibase-field-info.md) - Obtém informação sobre um campo

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
