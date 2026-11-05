# Obtém o número da versão para a API ou arquivo FDF

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.fdf-get-version.php

---

# fdf\_get\_version

(PHP 4 >= 4.3.0, PHP 5 < 5.3.0, PECL fdf SVN)

fdf\_get\_version — Obtém o número da versão para a API ou arquivo FDF

### Descrição

function **fdf\_get\_version**([resource](language.types.resource.md) `$fdf_document` = ?): [string](language.types.string.md)

Retorna a versão FDF para o documento fornecido ou o número da versão da API do kit de ferramentas
se nenhum parâmetro for fornecido.

### Parâmetros

`fdf_document`
:   O identificador do documento FDF, retornado por [fdf\_create()](function.fdf-create.md),
    [fdf\_open()](function.fdf-open.md) ou [fdf\_open\_string()](function.fdf-open-string.md).

### Valor Retornado

Retorna a versão como uma string. Para o atual kit de ferramentas FDF 5.0, o número da versão da API
é `5.0` e o número da versão do documento
é `1.2`, `1.3` ou
`1.4`.

### Veja também

- [fdf\_set\_version()](function.fdf-set-version.md) - Define o número da versão para um arquivo FDF

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
