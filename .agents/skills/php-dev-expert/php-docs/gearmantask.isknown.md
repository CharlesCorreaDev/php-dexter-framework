# Determina se a tarefa é conhecida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.isknown.php

---

# GearmanTask::isKnown

(PECL gearman >= 0.5.0)

GearmanTask::isKnown — Determina se a tarefa é conhecida

### Descrição

public function **GearmanTask::isKnown**(): [bool](language.types.boolean.md)

Obtém informações de status sobre se esta tarefa é ou não conhecida pelo servidor de trabalhos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

**`true`** se a tarefa for conhecida, **`false`** caso contrário.

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
