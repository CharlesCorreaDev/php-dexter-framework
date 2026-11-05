# Define o quadro de destino para exibição do formulário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-target-frame.php

---

# fdf\_set\_target\_frame

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_target\_frame — Define o quadro de destino para exibição do formulário

### Descrição

function **fdf\_set\_target\_frame**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$frame_name`): [bool](language.types.boolean.md)

Define o quadro de destino para exibir um PDF de resultado definido
com **fdf\_save\_file()**.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`frame_name`
:   O nome do quadro, como uma string.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- **fdf\_save\_file()**

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
