# Envia dados para um trabalho em execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.senddata.php

---

# GearmanJob::sendData

(PECL gearman >= 0.6.0)

GearmanJob::sendData — Envia dados para um trabalho em execução

### Descrição

public function **GearmanJob::sendData**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Envia dados para o servidor de trabalho (e quaisquer clientes ouvintes) para este trabalho.

### Parâmetros

`data`
:   Dados serializados arbitrários.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [GearmanJob::workload()](gearmanjob.workload.md) - Obtém a carga de trabalho
- [GearmanTask::data()](gearmantask.data.md) - Obtém dados retornados para uma tarefa

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
