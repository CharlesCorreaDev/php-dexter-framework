# Obtém a chave do iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/apcuiterator.key.php

---

# APCUIterator::key

(PECL apcu >= 5.0.0)

APCUIterator::key — Obtém a chave do iterador

### Descrição

public function **APCUIterator::key**(): [string](language.types.string.md)

Obtém a chave atual do iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a chave em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [APCUIterator::current()](apcuiterator.current.md) - Obtém o item atual
- [Iterator::key()](iterator.key.md) - Retorna a chave do elemento atual

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
