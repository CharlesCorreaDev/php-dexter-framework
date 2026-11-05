# Obtém o último código de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmantask.returncode.php

---

# GearmanTask::returnCode

(PECL gearman >= 0.5.0)

GearmanTask::returnCode — Obtém o último código de retorno

### Descrição

public function **GearmanTask::returnCode**(): [int](language.types.integer.md)

Retorna o último código de retorno do Gearman para esta tarefa.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um código de retorno Gearman válido.

### Veja também

- [GearmanClient::returnCode()](gearmanclient.returncode.md) - Obtém o último código de retorno do Gearman

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
