# Retorna os filhos do iterador interno contidos em um RecursiveCallbackFilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/recursivecallbackfilteriterator.getchildren.php

---

# RecursiveCallbackFilterIterator::getChildren

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

RecursiveCallbackFilterIterator::getChildren — Retorna os filhos do iterador interno contidos em um RecursiveCallbackFilterIterator

### Descrição

public function **RecursiveCallbackFilterIterator::getChildren**(): [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md)

Recupera os filhos filtrados do iterador interno.

[RecursiveCallbackFilterIterator::hasChildren()](recursivecallbackfilteriterator.haschildren.md) deve ser usado
para determinar se existem filhos a serem recuperados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md) contendo
os filhos.

### Veja também

- [Exemplos de RecursiveCallbackFilterIterator](class.recursivecallbackfilteriterator.md#recursivecallbackfilteriterator.examples)
- [RecursiveCallbackFilterIterator::\_\_construct()](recursivecallbackfilteriterator.construct.md) - Cria um RecursiveCallbackFilterIterator a partir de um RecursiveIterator
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
