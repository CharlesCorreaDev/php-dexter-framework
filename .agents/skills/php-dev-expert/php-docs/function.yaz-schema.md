# Especifica o esquema para recuperação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaz-schema.php

---

# yaz\_schema

(PHP 4 >= 4.2.0, PECL yaz >= 0.9.0)

yaz\_schema — 
Especifica o esquema para recuperação

### Descrição

function **yaz\_schema**([resource](language.types.resource.md) `$id`, [string](language.types.string.md) `$schema`): [void](language.types.void.md)

**yaz\_schema()** especifica o esquema para recuperação.

Esta função deve ser chamada antes de
[yaz\_search()](function.yaz-search.md) ou [yaz\_present()](function.yaz-present.md).

### Parâmetros

`id`
:   O recurso de conexão retornado por [yaz\_connect()](function.yaz-connect.md).

`schema`
:   Deve ser especificado como um OID (Identificador de Objeto) em uma notação de ponto bruta
    (como `1.2.840.10003.13.4`) ou como um dos esquemas
    registrados conhecidos: `GILS-schema`,
    `Holdings`, `Zthes`, ...

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
