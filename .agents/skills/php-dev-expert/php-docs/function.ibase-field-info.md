# Obtém informação sobre um campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-field-info.php

---

# ibase\_field\_info

(PHP 5, PHP 7 < 7.4.0)

ibase\_field\_info — Obtém informação sobre um campo

### Descrição

function **ibase\_field\_info**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$field_number`): [array](language.types.array.md)

Retorna um array com informações sobre um campo após uma consulta SELECT ter
sido executada.

### Parâmetros

`result`
:   Um identificador de resultado do InterBase.

`field_number`
:   Índice do campo.

### Valor Retornado

Retorna um array com as seguintes chaves: `name`,
`alias`, `relation`,
`length` e `type`.

### Examples

**Exemplo #1 Exemplo da **ibase\_field\_info()****

```
<?php
    $rs = ibase_query("SELECT * FROM tablename");
    $coln = ibase_num_fields($rs);
    for ($i = 0; $i < $coln; $i++) {
        $col_info = ibase_field_info($rs, $i);
        echo "name: ". $col_info['name']. "\n";
        echo "alias: ". $col_info['alias']. "\n";
        echo "relation: ". $col_info['relation']. "\n";
        echo "length: ". $col_info['length']. "\n";
        echo "type: ". $col_info['type']. "\n";
    }
?>
```

### Veja também

- [ibase\_num\_fields()](function.ibase-num-fields.md) - Obtém o número de campos em um conjunto de resultados

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
