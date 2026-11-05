# Cria um iterador filtrado a partir de outro iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/callbackfilteriterator.construct.php

---

# CallbackFilterIterator::\_\_construct

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

CallbackFilterIterator::\_\_construct — Cria um iterador filtrado a partir de outro iterador

### Descrição

public function **CallbackFilterIterator::\_\_construct**([Iterator](class.iterator.md) `$iterator`, [callable](language.types.callable.md) `$callback`)

Cria um iterador filtrado usando o `callback` para
determinar quais itens são aceitos ou rejeitados.

### Parâmetros

`iterator`
:   O iterador a ser filtrado.

`callback`
:   O callback, que deve retornar **`true`** para aceitar o item atual
    ou **`false`** caso contrário.
    Veja [Exemplos](class.callbackfilteriterator.md#callbackfilteriterator.examples).

    Pode ser qualquer valor [callable](language.types.callable.md) válido.

### Veja também

- [Exemplos de CallbackFilterIterator](class.callbackfilteriterator.md#callbackfilteriterator.examples)
- [CallbackFilterIterator::accept()](callbackfilteriterator.accept.md) - Chama o callback com o valor atual, a chave atual e o iterador interno como argumentos

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
