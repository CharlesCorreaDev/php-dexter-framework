# Obtém o identificador exclusivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.unique.php

---

# GearmanJob::unique

(PECL gearman >= 0.5.0)

GearmanJob::unique — Obtém o identificador exclusivo

### Descrição

public function **GearmanJob::unique**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna o identificador exclusivo para este trabalho. O identificador é atribuído pelo cliente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um identificador exclusivo opaco ou **`false`** se o trabalho ainda não foi inicializado.

### Veja também

- [GearmanClient::do()](gearmanclient.do.md) - Executa uma única tarefa e retorna um resultado (descontinuado)
- [GearmanTask::uuid()](gearmantask.uuid.md) - Obtém o identificador exclusivo para uma tarefa (descontinuado)

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
