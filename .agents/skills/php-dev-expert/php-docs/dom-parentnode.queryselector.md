# Retorna o primeiro elemento que corresponde aos seletores CSS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-parentnode.queryselector.php

---

# Dom\ParentNode::querySelector

(PHP 8 >= 8.4.0)

Dom\ParentNode::querySelector — Retorna o primeiro elemento que corresponde aos seletores CSS

### Descrição

public function **Dom\ParentNode::querySelector**([string](language.types.string.md) `$selectors`): [?](language.types.null.md)[Dom\Element](class.dom-element.md)

Retorna o primeiro elemento que corresponde aos seletores CSS especificados
em `selectors`.

### Parâmetros

`selectors`
:   Uma string contendo um ou mais seletores CSS.

### Valor Retornado

Retorna o primeiro [Dom\Element](class.dom-element.md) que corresponde aos
`selectors`. Retorna **`null`** se nenhum elemento corresponder.

### Erros/Exceções

Lança uma exceção [DOMException](class.domexception.md) com código
**`Dom\SYNTAX_ERR`** quando `selectors`
não for uma string de seletor CSS válida.

### Veja também

- [Dom\ParentNode::querySelectorAll()](dom-parentnode.queryselectorall.md) - Retorna uma coleção de elementos que correspondem aos seletores CSS

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
