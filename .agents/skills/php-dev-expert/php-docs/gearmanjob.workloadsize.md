# Obtém o tamanho da carga de trabalho

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.workloadsize.php

---

# GearmanJob::workloadSize

(PECL gearman >= 0.5.0)

GearmanJob::workloadSize — Obtém o tamanho da carga de trabalho

### Descrição

public function **GearmanJob::workloadSize**(): [int](language.types.integer.md)

Retorna o tamanho da carga de trabalho deste trabalho (os dados que o trabalhador deve processar) em bytes.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tamanho em bytes.

### Veja também

- [GearmanJob::workload()](gearmanjob.workload.md) - Obtém a carga de trabalho

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
