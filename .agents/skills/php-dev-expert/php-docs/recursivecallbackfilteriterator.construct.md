# Cria um RecursiveCallbackFilterIterator a partir de um RecursiveIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivecallbackfilteriterator.construct.php

---

# RecursiveCallbackFilterIterator::\_\_construct

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

RecursiveCallbackFilterIterator::\_\_construct — Cria um RecursiveCallbackFilterIterator a partir de um RecursiveIterator

### Descrição

public function **RecursiveCallbackFilterIterator::\_\_construct**([RecursiveIterator](class.recursiveiterator.md) `$iterator`, [callable](language.types.callable.md) `$callback`)

Cria um iterador filtrado a partir de um [RecursiveIterator](class.recursiveiterator.md)
usando o `callback` para determinar quais
itens são aceitos ou rejeitados.

### Parâmetros

`iterator`
:   O iterador recursivo a ser filtrado.

`callback`
:   O callback, que deve retornar **`true`** para aceitar o item atual
    ou **`false`** caso contrário.
    Veja [Exemplos](class.recursivecallbackfilteriterator.md#recursivecallbackfilteriterator.examples).

    Pode ser qualquer valor [callable](language.types.callable.md) válido.

### Veja também

- [Exemplos de RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md#recursivecallbackfilteriterator.examples)
- [RecursiveCallbackFilterIterator::getChildren()](recursivecallbackfilteriterator.getchildren.md) - Retorna os filhos do iterador interno contidos em um RecursiveCallbackFilterIterator
- [RecursiveCallbackFilterIterator::hasChildren()](recursivecallbackfilteriterator.haschildren.md) - Verifica se o elemento atual do iterador interno possui filhos

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
