# Obtém a carga de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.workload.php

---

# GearmanJob::workload

(PECL gearman >= 0.5.0)

GearmanJob::workload — Obtém a carga de trabalho

### Descrição

public function **GearmanJob::workload**(): [string](language.types.string.md)

Retorna a carga de trabalho para este trabalho. Esses são dados serializados que devem ser processados ​​pelo trabalhador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Dados serializados.

### Veja também

- [GearmanClient::do()](gearmanclient.do.md) - Executa uma única tarefa e retorna um resultado (descontinuado)
- [GearmanJob::workloadSize()](gearmanjob.workloadsize.md) - Obtém o tamanho da carga de trabalho

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
