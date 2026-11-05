# Executa uma única tarefa de baixa prioridade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.dolow.php

---

# GearmanClient::doLow

(PECL gearman >= 0.5.0)

GearmanClient::doLow — Executa uma única tarefa de baixa prioridade

### Descrição

public function **GearmanClient::doLow**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

Executa uma única tarefa de baixa prioridade e retorna uma representação em string do resultado. Cabe ao
[GearmanClient](class.gearmanclient.md) e ao [GearmanWorker](class.gearmanworker.md)
concordar com o formato do resultado. Tarefas normais e de alta prioridade terão precedência sobre
tarefas de baixa prioridade na fila.

### Parâmetros

`function`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`unique`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

Uma string que representa os resultados da execução de uma tarefa.

### Veja também

- [GearmanClient::doNormal()](gearmanclient.donormal.md) - Executa uma única tarefa e retorna um resultado
- [GearmanClient::doHigh()](gearmanclient.dohigh.md) - Executa uma única tarefa de alta prioridade
- [GearmanClient::doBackground()](gearmanclient.dobackground.md) - Executa uma tarefa em segundo plano
- [GearmanClient::doHighBackground()](gearmanclient.dohighbackground.md) - Executa uma tarefa de alta prioridade em segundo plano
- [GearmanClient::doLowBackground()](gearmanclient.dolowbackground.md) - Executa uma tarefa de baixa prioridade em segundo plano

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
