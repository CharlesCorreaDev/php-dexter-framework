# Obtém dados retornados para uma tarefa

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.data.php

---

# GearmanTask::data

(PECL gearman >= 0.5.0)

GearmanTask::data — Obtém dados retornados para uma tarefa

### Descrição

public function **GearmanTask::data**(): [false](language.types.singleton.md)|[string](language.types.string.md)

Retorna dados retornados para uma tarefa por um trabalhador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os dados serializados, ou **`false`** se nenhum dado estiver presente.

### Veja também

- [GearmanTask::dataSize()](gearmantask.datasize.md) - Obtém o tamanho dos dados retornados

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
