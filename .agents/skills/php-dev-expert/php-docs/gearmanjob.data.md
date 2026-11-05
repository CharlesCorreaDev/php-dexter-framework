# Envia dados para um trabalho em execução (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.data.php

---

# GearmanJob::data

(PECL gearman <= 0.5.0)

GearmanJob::data — Envia dados para um trabalho em execução (descontinuado)

### Descrição

public function **GearmanJob::data**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Envia dados ao servidor de trabalhos (e quaisquer clientes ouvintes) para este trabalho.

> **Nota**:
>
> Este método foi substituído por [GearmanJob::sendData()](gearmanjob.senddata.md) na
> versão 0.6.0 da extensão Gearman.

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
