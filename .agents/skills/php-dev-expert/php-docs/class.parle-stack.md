# A classe Parle\Stack

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parle-stack.php

---

# A classe Parle\Stack

(PECL parle >= 0.7.0)

## Introdução

**Parle\Stack** é uma pilha LIFO. Os elementos são inseridos e removidos apenas de uma extremidade.

## Resumo da classe

class **Parle\Stack**
{

/\* Propriedades \*/

public
[bool](language.types.boolean.md)
[$empty](class.parle-stack.md#parle-stack.props.empty) = **`true`**;

public
[int](language.types.integer.md)
[$size](class.parle-stack.md#parle-stack.props.size) = 0;

public
[mixed](language.types.mixed.md)
[$top](class.parle-stack.md#parle-stack.props.top);

/\* Métodos \*/

public function [pop](parle-stack.pop.md)(): [void](language.types.void.md)

public function [push](parle-stack.push.md)([mixed](language.types.mixed.md) `$item`): [void](language.types.void.md)

}

## Propriedades

empty
:   Informa se a pilha está vazia, somente leitura.

size
:   Tamanho da pilha, somente leitura.

top
:   Elemento no topo da pilha.

## Índice

- [Parle\Stack::pop](parle-stack.pop.md) — Remove um item da pilha
- [Parle\Stack::push](parle-stack.push.md) — Insere um item na pilha

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
