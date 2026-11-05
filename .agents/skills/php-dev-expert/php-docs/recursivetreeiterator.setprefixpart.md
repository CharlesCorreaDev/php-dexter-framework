# Define uma parte do prefixo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivetreeiterator.setprefixpart.php

---

# RecursiveTreeIterator::setPrefixPart

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

RecursiveTreeIterator::setPrefixPart — Define uma parte do prefixo

### Descrição

public function **RecursiveTreeIterator::setPrefixPart**([int](language.types.integer.md) `$part`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

Define uma parte do prefixo usado na árvore gráfica.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`part`
:   Uma das constantes [RecursiveTreeIterator::PREFIX\_\*](class.recursivetreeiterator.md#recursivetreeiterator.constants).

`value`
:   O valor a ser atribuído à parte do prefixo especificada em `part`.

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
