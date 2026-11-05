# Define o número da versão para um arquivo FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-set-version.php

---

# fdf\_set\_version

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_set\_version — Define o número da versão para um arquivo FDF

### Descrição

function **fdf\_set\_version**([resource](language.types.resource.md) `$fdf_document`, [string](language.types.string.md) `$version`): [bool](language.types.boolean.md)

Define a versão informada no parâmetro `version` do FDF para o documento fornecido.

Alguns recursos suportados por esta extensão estão disponíveis apenas em versões mais
recentes do FDF.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

`version`
:   O número da versão. Para o atual kit de ferramentas FDF 5.0, pode ser
    ou `1.2`, `1.3` ou
    `1.4`.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [fdf\_get\_version()](function.fdf-get-version.md) - Obtém o número da versão para a API ou arquivo FDF

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
