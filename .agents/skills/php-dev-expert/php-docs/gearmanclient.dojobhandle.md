# Obtém o identificador para a tarefa em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.dojobhandle.php

---

# GearmanClient::doJobHandle

(PECL gearman >= 0.5.0)

GearmanClient::doJobHandle — Obtém o identificador para a tarefa em execução

### Descrição

public function **GearmanClient::doJobHandle**(): [string](language.types.string.md)

Obtém o identificador para uma tarefa em execução. Isso deve ser usado entre chamadas repetidas a
[GearmanClient::doNormal()](gearmanclient.donormal.md). O identificador de tarefa pode então ser usado
para obter informações sobre ela.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O identificador da tarefa em execução.

### Veja também

- [GearmanClient::jobStatus()](gearmanclient.jobstatus.md) - Obtém o status de uma tarefa em segundo plano

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
