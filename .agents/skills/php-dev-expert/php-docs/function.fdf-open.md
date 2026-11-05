# Abre um documento FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-open.php

---

# fdf\_open

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_open — Abre um documento FDF

### Descrição

function **fdf\_open**([string](language.types.string.md) `$filename`): [resource](language.types.resource.md)

Abre um arquivo com dados de formulário.

Pode-se também usar [fdf\_open\_string()](function.fdf-open-string.md) para processar os
resultados de uma solicitação POST de formulário PDF.

### Parâmetros

`filename`
:   Caminho para o arquivo FDF. Este arquivo deve conter os dados conforme retornados de
    um formulário PDF ou criados usando [fdf\_create()](function.fdf-create.md) e
    [fdf\_save()](function.fdf-save.md).

### Valor Retornado

Retorna um identificador de documento FDF ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Acessando os dados do formulário**

```
<?php
// Salva os dados FDF em um arquivo temporário
$fdffp = fopen("test.fdf", "w");
fwrite($fdffp, $HTTP_FDF_DATA, strlen($HTTP_FDF_DATA));
fclose($fdffp);

// Abre arquivo temporário e avalia dados
$fdf = fdf_open("test.fdf");
/* ... */
fdf_close($fdf);
?>
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
