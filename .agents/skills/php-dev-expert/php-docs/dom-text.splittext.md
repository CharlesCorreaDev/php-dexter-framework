# Quebra este nó em dois nós no deslocamento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/dom-text.splittext.php

---

# Dom\Text::splitText

(PHP 8 >= 8.4.0)

Dom\Text::splitText — 
Quebra este nó em dois nós no deslocamento especificado

### Descrição

public function **Dom\Text::splitText**([int](language.types.integer.md) `$offset`): [Dom\Text](class.dom-text.md)

Quebra este nó em dois no `offset` especificado,
mantendo ambos na árvore como irmãos.

### Parâmetros

`offset`
:   O deslocamento para dividir, começando em 0.

### Valor Retornado

O novo nó do mesmo tipo, que contém todo o conteúdo durante e após o
`offset`.

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
