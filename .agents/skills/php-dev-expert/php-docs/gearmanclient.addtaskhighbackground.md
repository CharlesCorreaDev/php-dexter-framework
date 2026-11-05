# Adiciona uma tarefa de segundo plano de alta prioridade para ser executada em paralelo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.addtaskhighbackground.php

---

# GearmanClient::addTaskHighBackground

(PECL gearman >= 0.5.0)

GearmanClient::addTaskHighBackground — Adiciona uma tarefa de segundo plano de alta prioridade para ser executada em paralelo

### Descrição

public function **GearmanClient::addTaskHighBackground**(  
    [string](language.types.string.md) `$function_name`,  
    [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md) `$workload`,  
    [mixed](language.types.mixed.md) `$context` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$unique_key` = **`null`**  
): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Adiciona uma tarefa de segundo plano de alta prioridade para ser executada em paralelo com outras tarefas.
Chame este método para todas as tarefas a serem executadas em paralelo, então chame
[GearmanClient::runTasks()](gearmanclient.runtasks.md) para executar a tarefa. Tarefas com alta
prioridade serão selecionadas da fila antes daquelas de prioridade normal ou baixa.

### Parâmetros

`function_name`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`context`
:   Contexto da aplicação para associar a uma tarefa

`unique_key`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

Um objeto [GearmanTask](class.gearmantask.md) ou **`false`** se a tarefa não pôde ser adicionada.

### Veja também

- [GearmanClient::addTask()](gearmanclient.addtask.md) - Adiciona uma tarefa para ser executada em paralelo
- [GearmanClient::addTaskHigh()](gearmanclient.addtaskhigh.md) - Adiciona uma tarefa de alta prioridade para ser executada em paralelo
- [GearmanClient::addTaskLow()](gearmanclient.addtasklow.md) - Adiciona uma tarefa de baixa prioridade para ser executada em paralelo
- [GearmanClient::addTaskBackground()](gearmanclient.addtaskbackground.md) - Adiciona uma tarefa em segundo plano para ser executada em paralelo
- [GearmanClient::addTaskLowBackground()](gearmanclient.addtasklowbackground.md) - Adiciona uma tarefa em segundo plano de baixa prioridade para ser executada em paralelo
- [GearmanClient::runTasks()](gearmanclient.runtasks.md) - Executa uma lista de tarefas em paralelo

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
