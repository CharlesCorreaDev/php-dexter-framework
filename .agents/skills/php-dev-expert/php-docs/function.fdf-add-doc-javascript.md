# Adiciona código javascript ao documento FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-add-doc-javascript.php

---

# fdf\_add\_doc\_javascript

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_add\_doc\_javascript — Adiciona código javascript ao documento FDF

### Descrição

function **fdf\_add\_doc\_javascript**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$script_name`, [string](language.types.string.md) `$script_code`): [bool](language.types.boolean.md)

Adiciona um script ao FDF, que o Acrobat então adiciona aos scripts
de um documento, uma vez que o FDF é importado para ele.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`script_name`
:   O nome do script.

`script_code`
:   O código do script. É fortemente sugerido usar `\r`
    para quebras de linha dentro do código do script.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Adicionar código JavaScript a um FDF**

```
<?php
$fdf = fdf_create();
fdf_add_doc_javascript($fdf, "PlusOne", "function PlusOne(x)\r{\r  return x+1;\r}\r");
fdf_save($fdf);
?>
```

criará um FDF como este:

```
%FDF-1.2
%âãÏÓ
1 0 obj
<<
/FDF << /JavaScript << /Doc [ (PlusOne)(function PlusOne\(x\)\r{\r  return x+1;\r}\r)] >> >>
>>
endobj
trailer
<<
/Root 1 0 R

>>
%%EOF
```

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
