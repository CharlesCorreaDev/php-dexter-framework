# Especifica a sintaxe de registro preferida para recuperação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-syntax.php

---

# yaz\_syntax

(PHP 4 >= 4.0.1, PECL yaz >= 0.9.0)

yaz\_syntax — 
Especifica a sintaxe de registro preferida para recuperação

### Descrição

function **yaz\_syntax**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$syntax`): [void](language.types.void.md)

**yaz\_syntax()** especifica a sintaxe de registro preferida para
recuperação.

Esta função deve ser chamada antes de [yaz\_search()](function.yaz-search.md) ou
[yaz\_present()](function.yaz-present.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`syntax`
:   A sintaxe deve ser especificada como um OID (Identificador de Objeto) em uma
    notação de ponto bruta (como `1.2.840.10003.5.10`) ou como uma das
    sintaxes de registros cadastradas conhecidas (sutrs, usmarc, grs1, xml, etc.).

### Valor Retornado

Nenhum valor é retornado.

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
