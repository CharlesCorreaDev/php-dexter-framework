# Retorna uma coleção de elementos que correspondem aos seletores CSS

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-parentnode.queryselectorall.php

---

# Dom\ParentNode::querySelectorAll

(PHP 8 >= 8.4.0)

Dom\ParentNode::querySelectorAll — Retorna uma coleção de elementos que correspondem aos seletores CSS

### Descrição

public function **Dom\ParentNode::querySelectorAll**([string](language.types.string.md) `$selectors`): [Dom\NodeList](class.dom-nodelist.md)

Retorna uma coleção de elementos que correspondem aos seletores CSS especificados
em `selectors`.

### Parâmetros

`selectors`
:   Uma string contendo um ou mais seletores CSS.

### Valor Retornado

Retorna uma coleção estática de elementos que correspondem aos seletores CSS
especificados em `selectors`.

### Erros/Exceções

Lança uma exceção [DOMException](class.domexception.md) com código
**`Dom\SYNTAX_ERR`** quando `selectors`
não for uma string de seletor CSS válida.

### Veja também

- [Dom\ParentNode::querySelector()](dom-parentnode.queryselector.md) - Retorna o primeiro elemento que corresponde aos seletores CSS

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
