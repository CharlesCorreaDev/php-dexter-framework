# Remove valor para um deslocamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.offsetunset.php

---

# ArrayIterator::offsetUnset

(PHP 5, PHP 7, PHP 8)

ArrayIterator::offsetUnset — Remove valor para um deslocamento

### Descrição

public function **ArrayIterator::offsetUnset**([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

Remove um valor para um deslocamento.

Se a iteração estiver em andamento e **ArrayIterator::offsetUnset()** for usado para
remover o índice atual da iteração, a posição da iteração será avançada para o próximo índice.
Como a posição da iteração também é avançada no final de um
loop [`foreach`](control-structures.foreach.md), o uso de
**ArrayIterator::offsetUnset()** dentro de um
loop [`foreach`](control-structures.foreach.md) pode resultar em
índices sendo pulados.

### Parâmetros

`key`
:   O deslocamento a ser removido.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [ArrayIterator::offsetGet()](arrayiterator.offsetget.md) - Obtém valor para um deslocamento
- [ArrayIterator::offsetSet()](arrayiterator.offsetset.md) - Define valor para um deslocamento

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
