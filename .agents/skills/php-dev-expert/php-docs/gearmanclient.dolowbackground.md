# Executa uma tarefa de baixa prioridade em segundo plano

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.dolowbackground.php

---

# GearmanClient::doLowBackground

(PECL gearman >= 0.5.0)

GearmanClient::doLowBackground — Executa uma tarefa de baixa prioridade em segundo plano

### Descrição

public function **GearmanClient::doLowBackground**([string](language.types.string.md) `$function`, [string](language.types.string.md) `$workload`, [?](language.types.null.md)[string](language.types.string.md) `$unique` = **`null`**): [string](language.types.string.md)

Executa uma tarefa de baixa prioridade em segundo plano, retornando um identificador que pode ser usado
para obter o status da tarefa em execução. Tarefas normais e de alta prioridade têm precedência sobre
tarefas de baixa prioridade na fila.

### Parâmetros

`function`
:   Uma função registrada que o trabalhador deve executar

`workload`
:   Dados serializados a serem processados

`unique`
:   Um identificador único usado para identificar uma tarefa específica

### Valor Retornado

O identificador da tarefa enviada.

### Veja também

- [GearmanClient::doNormal()](gearmanclient.donormal.md) - Executa uma única tarefa e retorna um resultado
- [GearmanClient::doHigh()](gearmanclient.dohigh.md) - Executa uma única tarefa de alta prioridade
- [GearmanClient::doLow()](gearmanclient.dolow.md) - Executa uma única tarefa de baixa prioridade
- [GearmanClient::doBackground()](gearmanclient.dobackground.md) - Executa uma tarefa em segundo plano
- [GearmanClient::doHighBackground()](gearmanclient.dohighbackground.md) - Executa uma tarefa de alta prioridade em segundo plano

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
