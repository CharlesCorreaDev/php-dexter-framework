# Anexa um elemento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.append.php

---

# ArrayIterator::append

(PHP 5, PHP 7, PHP 8)

ArrayIterator::append — Anexa um elemento

### Descrição

public function **ArrayIterator::append**([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Anexa o valor como o último elemento.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`value`
:   O valor a ser anexado.

### Valor Retornado

Nenhum valor é retornado.

### Notas

> **Nota**:
>
> Este método não pode ser chamado quando o [ArrayIterator](class.arrayiterator.md)
> refere-se a um [object](language.types.object.md).

### Veja também

- [ArrayIterator::next()](arrayiterator.next.md) - Avança para o próximo elemento

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
