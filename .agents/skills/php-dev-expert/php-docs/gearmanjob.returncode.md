# Obtém o último código de retorno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanjob.returncode.php

---

# GearmanJob::returnCode

(PECL gearman >= 0.5.0)

GearmanJob::returnCode — Obtém o último código de retorno

### Descrição

public function **GearmanJob::returnCode**(): [int](language.types.integer.md)

Retorna o último código de retorno emitido pelo servidor de trabalho.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um código de retorno Gearman válido.

### Veja também

- [GearmanTask::returnCode()](gearmantask.returncode.md) - Obtém o último código de retorno

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
