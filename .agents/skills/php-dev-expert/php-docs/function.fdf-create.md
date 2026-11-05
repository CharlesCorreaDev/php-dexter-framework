# Cria um novo documento FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-create.php

---

# fdf\_create

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_create — Cria um novo documento FDF

### Descrição

function **fdf\_create**(): [resource](language.types.resource.md)

Cria um novo documento FDF.

Esta função é necessária se a intenção for preencher campos de entrada em um
documento PDF com dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um identificador de documento FDF ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Preenchendo um documento PDF**

```
<?php
$outfdf = fdf_create();
fdf_set_value($outfdf, "volume", $volume, 0);

fdf_set_file($outfdf, "http:/testfdf/resultlabel.pdf");
fdf_save($outfdf, "outtest.fdf");
fdf_close($outfdf);
Header("Content-type: application/vnd.fdf");
$fp = fopen("outtest.fdf", "r");
fpassthru($fp);
unlink("outtest.fdf");
?>
```

### Veja também

- [fdf\_close()](function.fdf-close.md) - Fecha um documento FDF
- [fdf\_save()](function.fdf-save.md) - Salva um documento FDF
- [fdf\_open()](function.fdf-open.md) - Abre um documento FDF

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
