# Salva um documento FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-save.php

---

# fdf\_save

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_save — Salva um documento FDF

### Descrição

function **fdf\_save**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$filename` = ?): [bool](language.types.boolean.md)

Salva um documento FDF.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`filename`
:   Se fornecido, o FDF resultante será escrito neste parâmetro.
    Caso contrário, esta função escreverá o FDF no fluxo de saída PHP
    padrão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

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
