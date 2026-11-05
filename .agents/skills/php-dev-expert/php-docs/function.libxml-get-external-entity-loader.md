# Obtém o carregador atual de entidade externa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-get-external-entity-loader.php

---

# libxml\_get\_external\_entity\_loader

(PHP 8 >= 8.2.0)

libxml\_get\_external\_entity\_loader — Obtém o carregador atual de entidade externa

### Descrição

function **libxml\_get\_external\_entity\_loader**(): [?](language.types.null.md)[callable](language.types.callable.md)

Obtém o carregador de entidade externa previamente instalado por
[libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O carregador de entidade externa previamente instalado por
[libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md). Se essa função nunca
foi chamada, ou se foi chamada com **`null`**, **`null`** será retornado.

### Veja também

- [libxml\_set\_external\_entity\_loader()](function.libxml-set-external-entity-loader.md) - Altera o carregador padrão de entidades externas

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
