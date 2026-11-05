# Executa uma lista de tarefas em paralelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.runtasks.php

---

# GearmanClient::runTasks

(PECL gearman >= 0.5.0)

GearmanClient::runTasks — Executa uma lista de tarefas em paralelo

### Descrição

public function **GearmanClient::runTasks**(): [bool](language.types.boolean.md)

Para um conjunto de tarefas adicionadas anteriormente com [GearmanClient::addTask()](gearmanclient.addtask.md),
[GearmanClient::addTaskHigh()](gearmanclient.addtaskhigh.md), [GearmanClient::addTaskLow()](gearmanclient.addtasklow.md),
[GearmanClient::addTaskBackground()](gearmanclient.addtaskbackground.md), [GearmanClient::addTaskHighBackground()](gearmanclient.addtaskhighbackground.md) ou
[GearmanClient::addTaskLowBackground()](gearmanclient.addtasklowbackground.md), esta chamada inicia a execução das tarefas
em paralelo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanClient::addTask()](gearmanclient.addtask.md) - Adiciona uma tarefa para ser executada em paralelo

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
