# Chama o callback com o valor atual, a chave atual e o iterador interno como argumentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/callbackfilteriterator.accept.php

---

# CallbackFilterIterator::accept

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

CallbackFilterIterator::accept — Chama o callback com o valor atual, a chave atual e o iterador interno como argumentos

### Descrição

public function **CallbackFilterIterator::accept**(): [bool](language.types.boolean.md)

Este método chama o callback com o valor atual, a chave atual
e o iterador interno.

Espera-se que o callback retorne **`true`** se o item atual deve
ser aceito, ou **`false`** caso contrário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** para aceitar o item atual, ou **`false`** caso contrário.

### Veja também

- [Exemplos de CallbackFilterIterator](class.callbackfilteriterator.md#callbackfilteriterator.examples)
- [CallbackFilterIterator::\_\_construct()](callbackfilteriterator.construct.md) - Cria um iterador filtrado a partir de outro iterador

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
