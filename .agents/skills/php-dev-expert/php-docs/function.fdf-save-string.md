# Retorna o documento FDF como uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-save-string.php

---

# fdf\_save\_string

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_save\_string — Retorna o documento FDF como uma string

### Descrição

function **fdf\_save\_string**([resource](language.types.resource.md) `$fdf_document`): [string](language.types.string.md)

Retorna o documento FDF como uma string.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Retorna o documento como uma string ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Recuperando FDF como uma string**

```
<?php
$fdf = fdf_create();
fdf_set_value($fdf, "foo", "bar");
$str = fdf_save_string($fdf);
fdf_close($fdf);
echo $str;
?>
```

O exemplo acima produzirá:

```
%FDF-1.2
%âãÏÓ
1 0 obj
<<
/FDF << /Fields 2 0 R >>
>>
endobj
2 0 obj
[
<< /T (foo)/V (bar)>>
]
endobj
trailer
<<
/Root 1 0 R

>>
%%EOF
```

### Veja também

- [fdf\_open\_string()](function.fdf-open-string.md) - Lê um documento FDF de uma string
- [fdf\_close()](function.fdf-close.md) - Fecha um documento FDF
- [fdf\_create()](function.fdf-create.md) - Cria um novo documento FDF
- [fdf\_save()](function.fdf-save.md) - Salva um documento FDF

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
