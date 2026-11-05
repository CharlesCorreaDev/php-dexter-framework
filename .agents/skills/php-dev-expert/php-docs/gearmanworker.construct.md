# Cria uma instância de GearmanWorker

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.construct.php

---

# GearmanWorker::\_\_construct

(PECL gearman >= 0.5.0)

GearmanWorker::\_\_construct — Cria uma instância de GearmanWorker

### Descrição

public function **GearmanWorker::\_\_construct**()

Cria uma instância de [GearmanWorker](class.gearmanworker.md) representando um trabalhador que se conecta ao servidor de tarefas e aceita tarefas para execução.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [GearmanWorker](class.gearmanworker.md)

### Veja também

- [GearmanWorker::clone()](gearmanworker.clone.md) - Cria uma cópia do trabalhador

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
