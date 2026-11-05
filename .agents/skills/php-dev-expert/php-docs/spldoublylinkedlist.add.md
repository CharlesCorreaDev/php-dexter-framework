# Adiciona/insere um novo valor no índice especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.add.php

---

# SplDoublyLinkedList::add

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

SplDoublyLinkedList::add — Adiciona/insere um novo valor no índice especificado

### Descrição

public function **SplDoublyLinkedList::add**([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Insere o valor `value` no
`index` especificado, reorganizando
o valor anterior nesse índice (e todos os valores subsequentes)
pela lista.

### Parâmetros

`index`
:   O índice onde o novo valor será inserido.

`value`
:   O novo valor para o `index`.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança [OutOfRangeException](class.outofrangeexception.md) quando o
`index` está fora dos limites ou quando
o `index` não pode ser interpretado como um número inteiro.

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
