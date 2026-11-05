# Quebra este nó em dois nós no deslocamento especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/domtext.splittext.php

---

# DOMText::splitText

(PHP 5, PHP 7, PHP 8)

DOMText::splitText — 
Quebra este nó em dois nós no deslocamento especificado

### Descrição

public function **DOMText::splitText**([int](language.types.integer.md) `$offset`): [DOMText](class.domtext.md)|[false](language.types.singleton.md)

Quebra este nó em dois no `offset` especificado,
mantendo ambos na árvore como irmãos.

Depois de dividido, esse nó conterá todo o conteúdo até o
`offset`. Se o nó original tinha um nó pai,
o novo nó será inserido como o próximo irmão do nó original.
Quando o `offset` for igual ao tamanho desse
nó, o novo nó não terá dados.

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
