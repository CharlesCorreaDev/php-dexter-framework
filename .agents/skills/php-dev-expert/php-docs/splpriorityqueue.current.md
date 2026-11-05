# Retorna o nó atual apontado pelo iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splpriorityqueue.current.php

---

# SplPriorityQueue::current

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplPriorityQueue::current — Retorna o nó atual apontado pelo iterador

### Descrição

public function **SplPriorityQueue::current**(): [mixed](language.types.mixed.md)

Obtém o nó atual da estrutura de dados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor ou a prioridade (ou ambos) do nó atual, dependendo da opção de extração.

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
