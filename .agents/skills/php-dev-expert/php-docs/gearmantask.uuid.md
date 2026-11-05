# Obtém o identificador exclusivo para uma tarefa (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.uuid.php

---

# GearmanTask::uuid

(PECL gearman <= 0.5.0)

GearmanTask::uuid — Obtém o identificador exclusivo para uma tarefa (descontinuado)

### Descrição

public function **GearmanTask::uuid**(): [string](language.types.string.md)

Retorna o identificador exclusivo para esta tarefa. Isso é atribuído pelo [GearmanClient](class.gearmanclient.md),
ao contrário do identificador de tarefa que é definido pelo servidor de trabalho Gearman.

> **Nota**:
>
> Este método foi substituído por [GearmanTask::unique()](gearmantask.unique.md) na
> versão 0.6.0 da extensão Gearman.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O identificador exclusivo, ou **`false`** se nenhum identificador for atribuído.

### Veja também

- [GearmanClient::do()](gearmanclient.do.md) - Executa uma única tarefa e retorna um resultado (descontinuado)
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
