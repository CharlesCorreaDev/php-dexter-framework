# Obtém valor para um deslocamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.offsetget.php

---

# ArrayIterator::offsetGet

(PHP 5, PHP 7, PHP 8)

ArrayIterator::offsetGet — Obtém valor para um deslocamento

### Descrição

public function **ArrayIterator::offsetGet**([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

Obtém o valor do deslocamento fornecido.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`key`
:   O deslocamento para obter o valor.

### Valor Retornado

O valor no deslocamento `key`.

### Veja também

- [ArrayIterator::offsetSet()](arrayiterator.offsetset.md) - Define valor para um deslocamento
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
