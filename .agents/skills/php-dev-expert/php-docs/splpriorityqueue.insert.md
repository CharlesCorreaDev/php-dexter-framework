# Insere um elemento na fila deslocando-o para cima

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splpriorityqueue.insert.php

---

# SplPriorityQueue::insert

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplPriorityQueue::insert — Insere um elemento na fila deslocando-o para cima

### Descrição

public function **SplPriorityQueue::insert**([mixed](language.types.mixed.md) `$value`, [mixed](language.types.mixed.md) `$priority`): [true](language.types.singleton.md)

Insere o `value` com a prioridade `priority` na fila.

### Parâmetros

`value`
:   O valor a ser inserido.

`priority`
:   A prioridade associada.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **SplPriorityQueue::insert()** agora tem um tipo de retorno provisório de [true](language.types.singleton.md). |

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
