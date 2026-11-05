# Clona um nó

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domnode.clonenode.php

---

# DOMNode::cloneNode

(PHP 5, PHP 7, PHP 8)

DOMNode::cloneNode — 
Clona um nó

### Descrição

public function **DOMNode::cloneNode**([bool](language.types.boolean.md) `$deep` = **`false`**): [DOMNode](class.domnode.md)|[false](language.types.singleton.md)

Cria uma cópia do nó.

### Parâmetros

`deep`
:   Indica se deve copiar todos os nós descendentes. Este parâmetro é
    predefinido como **`false`**.

### Valor Retornado

O nó clonado.

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
