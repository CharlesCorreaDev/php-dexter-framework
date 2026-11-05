# Desanexa um iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.detachiterator.php

---

# MultipleIterator::detachIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::detachIterator — Desanexa um iterador

### Descrição

public function **MultipleIterator::detachIterator**([Iterator](class.iterator.md) `$iterator`): [void](language.types.void.md)

Desanexa um iterador.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`iterator`
:   O iterador a ser desanexado.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [MultipleIterator::attachIterator()](multipleiterator.attachiterator.md) - Anexa informações do iterador

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
