# Define o valor da chave /STATUS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-status.php

---

# fdf\_set\_status

(PHP 4, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_status — Define o valor da chave /STATUS

### Descrição

function **fdf\_set\_status**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$status`): [bool](language.types.boolean.md)

Define o valor da chave `/STATUS`. Quando um cliente
recebe um FDF com um status definido, ele apresentará o valor em uma caixa de
alerta.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`status`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_get\_status()](function.fdf-get-status.md) - Obtém o valor da chave /STATUS

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
