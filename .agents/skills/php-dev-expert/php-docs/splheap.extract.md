# Extrai um nó do topo do heap e ajusta para cima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splheap.extract.php

---

# SplHeap::extract

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplHeap::extract — Extrai um nó do topo do heap e ajusta para cima

### Descrição

public function **SplHeap::extract**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do nó extraído.

### Erros/Exceções

Lança [RuntimeException](class.runtimeexception.md) quando a estrutura de dados está vazia.

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
