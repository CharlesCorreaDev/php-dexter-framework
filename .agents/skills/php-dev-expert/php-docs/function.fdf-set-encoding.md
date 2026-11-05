# Define a codificação de caracteres FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-encoding.php

---

# fdf\_set\_encoding

(PHP 4 >= 4.0.7, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_encoding — Define a codificação de caracteres FDF

### Descrição

function **fdf\_set\_encoding**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$encoding`): [bool](language.types.boolean.md)

Define a codificação de caracteres para o documento FDF.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`encoding`
:   O nome da codificação. Os seguintes valores são suportados:
    "`Shift-JIS`", "`UHC`",
    "`GBK`" e "`BigFive`".

    Uma string vazia redefine a codificação para o esquema padrão
    `PDFDocEncoding/Unicode`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
