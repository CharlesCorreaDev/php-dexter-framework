# Obtém o próximo nome de campo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-next-field-name.php

---

# fdf\_next\_field\_name

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_next\_field\_name — Obtém o próximo nome de campo

### Descrição

function **fdf\_next\_field\_name**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$fieldname` = ?): [string](language.types.string.md)

Obtém o nome do campo após o campo fornecido. Este nome pode ser usado
com várias funções.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`fieldname`
:   Nome do campo FDF, como uma string. Se não for fornecido, o primeiro campo será
    assumido.

### Valor Retornado

Retorna o nome do campo como uma string.

### Examples

**Exemplo #1 Detectando todos os nomes de campos em um FDF**

```
<?php
$fdf = fdf_open($HTTP_FDF_DATA);
for ($field = fdf_next_field_name($fdf);
    $field != "";
    $field = fdf_next_field_name($fdf, $field)) {
    echo "field: $field\n";
}
?>
```

### Veja também

- [fdf\_get\_value()](function.fdf-get-value.md) - Obtém o valor de um campo

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
