# Define o modo de extração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splpriorityqueue.setextractflags.php

---

# SplPriorityQueue::setExtractFlags

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplPriorityQueue::setExtractFlags — Define o modo de extração

### Descrição

public function **SplPriorityQueue::setExtractFlags**([int](language.types.integer.md) `$flags`): [int](language.types.integer.md)

### Parâmetros

`flags`
:   Define o que é extraído por [SplPriorityQueue::current()](splpriorityqueue.current.md),
    [SplPriorityQueue::top()](splpriorityqueue.top.md) e
    [SplPriorityQueue::extract()](splpriorityqueue.extract.md).

    - **`SplPriorityQueue::EXTR_DATA`** (0x00000001): Extrai os dados
    - **`SplPriorityQueue::EXTR_PRIORITY`** (0x00000002): Extrai a prioridade
    - **`SplPriorityQueue::EXTR_BOTH`** (0x00000003): Extrai um array contendo ambos

    O modo padrão é **`SplPriorityQueue::EXTR_DATA`**.

### Valor Retornado

Retorna as opções de extração.

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
