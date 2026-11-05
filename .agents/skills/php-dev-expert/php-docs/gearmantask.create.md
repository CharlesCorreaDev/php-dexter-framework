# Cria uma tarefa (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.create.php

---

# GearmanTask::create

(PECL gearman <= 0.5.0)

GearmanTask::create — Cria uma tarefa (descontinuado)

### Descrição

public function **GearmanTask::create**(): [GearmanTask](class.gearmantask.md)|[false](language.types.singleton.md)

Retorna um novo objeto [GearmanTask](class.gearmantask.md).

> **Nota**:
>
> Este método foi removido na versão 0.6.0 da extensão Gearman.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um objeto [GearmanTask](class.gearmantask.md) ou **`false`** em caso de falha.

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
