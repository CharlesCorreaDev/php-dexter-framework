# Obtém o tamanho dos dados retornados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.datasize.php

---

# GearmanTask::dataSize

(PECL gearman >= 0.5.0)

GearmanTask::dataSize — Obtém o tamanho dos dados retornados

### Descrição

public function **GearmanTask::dataSize**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tamanho dos dados retornados para uma tarefa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tamanho dos dados, ou **`false`** se não houver dados.

### Veja também

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
