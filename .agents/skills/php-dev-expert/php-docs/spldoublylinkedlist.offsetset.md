# Define o valor no $index especificado como $value

> **Fonte / Source:** https://www.php.net/manual/pt_BR/spldoublylinkedlist.offsetset.php

---

# SplDoublyLinkedList::offsetSet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplDoublyLinkedList::offsetSet — Define o valor no $index especificado como $value

### Descrição

public function **SplDoublyLinkedList::offsetSet**([?](language.types.null.md)[int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define o valor no `index` especificado como `value`.

### Parâmetros

`index`
:   O índice sendo definido. Se for **`null`**, o próximo valor será adicionado após o último item.

`value`
:   O novo valor para o `index`.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança [OutOfRangeException](class.outofrangeexception.md) quando o `index` está fora dos limites ou quando o `index` não pode ser interpretado como um número inteiro.

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
