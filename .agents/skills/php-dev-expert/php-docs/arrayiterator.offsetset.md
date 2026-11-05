# Define valor para um deslocamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.offsetset.php

---

# ArrayIterator::offsetSet

(PHP 5, PHP 7, PHP 8)

ArrayIterator::offsetSet — Define valor para um deslocamento

### Descrição

public function **ArrayIterator::offsetSet**([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Define um valor para um determinado deslocamento.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`key`
:   O índice para definir.

`value`
:   O novo valor a ser armazenado no índice.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [ArrayIterator::offsetGet()](arrayiterator.offsetget.md) - Obtém valor para um deslocamento
- [ArrayIterator::offsetUnset()](arrayiterator.offsetunset.md) - Remove valor para um deslocamento

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
