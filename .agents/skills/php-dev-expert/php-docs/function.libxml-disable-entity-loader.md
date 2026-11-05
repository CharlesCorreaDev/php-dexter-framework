# Desabilita a capacidade de carregar entidades externas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-disable-entity-loader.php

---

# libxml\_disable\_entity\_loader

(PHP 5 >= 5.2.11, PHP 7, PHP 8)

libxml\_disable\_entity\_loader — Desabilita a capacidade de carregar entidades externas

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **libxml\_disable\_entity\_loader**([bool](language.types.boolean.md) `$disable` = [true](reserved.constants.md#constant.true)): [bool](language.types.boolean.md)

Desabilita/habilita a capacidade de carregar entidades externas.
Observe que desabilitar o carregamento de entidades externas pode causar problemas gerais
com carregamento de documentos XML.

A partir da libxml 2.9.0, substituição de entidade
está desabilitada por padrão, portanto não é necessário desabilitar o carregamento de entidades
externas,
a menos que haja necessidade de resolver referências de entidades internas com [LIBXML\_NOENT](libxml.constants.md#constant.libxml-noent),
[LIBXML\_DTDVALID](libxml.constants.md#constant.libxml-dtdvalid) ou [LIBXML\_DTDLOAD](libxml.constants.md#constant.libxml-dtdload).
Geralmente, é preferível usar [libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md)
para suprimir carregamento de entidades externas.
A constante [LIBXML\_NO\_XXE](libxml.constants.md#constant.libxml-no-xxe) também pode ser usada para evitar isto (disponível somente na Libxml >= 2.13.0, a partir do PHP 8.4.0).

### Parâmetros

`disable`
:   Desabilita (**`true`**) ou habilita (**`false`**) a capacidade de extensões libxml (como
    [DOM](book.dom.md), [XMLWriter](book.xmlwriter.md)
    e [XMLReader](book.xmlreader.md)) carregarem entidades externas.

### Valor Retornado

Retorna o valor anterior.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada. |

### Veja também

- [libxml\_use\_internal\_errors()](function.libxml-use-internal-errors.md) - Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário
- [libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md) - Altera o carregador padrão de entidades externas
- A constante **`LIBXML_NOENT`**
- A constante **`LIBXML_DTDVALID`**
- A constante **`LIBXML_NO_XXE`**

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
