# Anexa informações do iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.attachiterator.php

---

# MultipleIterator::attachIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::attachIterator — Anexa informações do iterador

### Descrição

public function **MultipleIterator::attachIterator**([Iterator](class.iterator.md) `$iterator`, [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$info` = **`null`**): [void](language.types.void.md)

Anexa informações do iterador.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O novo iterador a ser anexado.

`info`
:   As informações associativas para o iterador, que deve ser um
    [int](language.types.integer.md), um [string](language.types.string.md), ou **`null`**.

### Valor Retornado

Descrição...

### Erros/Exceções

Uma **IllegalValueException** se o parâmetro `iterator`
for inválido, ou se `info` já estiver associado a
informações.

### Veja também

- [MultipleIterator::\_\_construct()](multipleiterator.construct.md) - Constrói um novo MultipleIterator

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
