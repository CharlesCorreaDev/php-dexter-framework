# Cria uma nova instância

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.construct.php

---

# Ds\PriorityQueue::\_\_construct

(PECL ds >= 1.0.0)

Ds\PriorityQueue::\_\_construct — Cria uma nova instância

### Descrição

public function **Ds\PriorityQueue::\_\_construct**()

Cria uma nova instância.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::\_\_construct()****

```
<?php
$queue = new \Ds\PriorityQueue();
var_dump($queue);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Ds\PriorityQueue)#1 (0) {
}
```

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
