# Especifica o nome do conjunto de elementos para recuperação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-element.php

---

# yaz\_element

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_element — 
Especifica o nome do conjunto de elementos para recuperação

### Descrição

function **yaz\_element**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$elementset`): [bool](language.types.boolean.md)

Esta função define o nome do conjunto de elementos para recuperação.

Chame esta função antes de [yaz\_search()](function.yaz-search.md) ou
[yaz\_present()](function.yaz-present.md) para especificar o nome do conjunto de elementos
para os registros a serem recuperados.

> **Nota**:
>
> Se esta função não parecer ter efeito, consulte a descrição da
> opção `piggybacking` em
> [yaz\_connect()](function.yaz-connect.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`elementset`
:   A maioria dos servidores suporta `F` (para registros completos) e
    `B` (para registros breves).

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
