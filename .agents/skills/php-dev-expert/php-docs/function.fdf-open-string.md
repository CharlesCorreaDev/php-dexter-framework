# Lê um documento FDF de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-open-string.php

---

# fdf\_open\_string

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_open\_string — Lê um documento FDF de uma string

### Descrição

function **fdf\_open\_string**([string](language.types.string.md) `$fdf_data`): [resource](language.types.resource.md)

Lê dados de formulário de uma string.

Pode-se usar **fdf\_open\_string()** junto com
$HTTP\_FDF\_DATA para processar a entrada do formulário FDF de um cliente
remoto.

### Parâmetros

`fdf_data`
:   Os dados retornados de um formulário PDF ou criados usando
    [fdf\_create()](function.fdf-create.md) e
    [fdf\_save\_string()](function.fdf-save-string.md).

### Valor Retornado

Retorna um identificador de documento FDF ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Acessando os dados do formulário**

```
<?php
$fdf = fdf_open_string($HTTP_FDF_DATA);
/* ... */
fdf_close($fdf);
?>
```

### Veja também

- [fdf\_open()](function.fdf-open.md) - Abre um documento FDF
- [fdf\_close()](function.fdf-close.md) - Fecha um documento FDF
- [fdf\_create()](function.fdf-create.md) - Cria um novo documento FDF
- [fdf\_save\_string()](function.fdf-save-string.md) - Retorna o documento FDF como uma string

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
