# Obtém o identificador do trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.jobhandle.php

---

# GearmanTask::jobHandle

# gearman\_job\_handle

(PECL gearman >= 0.5.0)

GearmanTask::jobHandle -- gearman\_job\_handle — Obtém o identificador do trabalho

### Descrição

public function **GearmanTask::jobHandle**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna o identificador de trabalho desta tarefa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O identificador de trabalho opaco ou **`false`** se a tarefa ainda não foi criada.

### Veja também

- [GearmanClient::doJobHandle()](gearmanclient.dojobhandle.md) - Obtém o identificador para a tarefa em execução

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
