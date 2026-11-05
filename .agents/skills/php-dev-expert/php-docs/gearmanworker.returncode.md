# Obtém o último código de retorno do Gearman

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.returncode.php

---

# GearmanWorker::returnCode

(PECL gearman >= 0.5.0)

GearmanWorker::returnCode — Obtém o último código de retorno do Gearman

### Descrição

public function **GearmanWorker::returnCode**(): [int](language.types.integer.md)

Retorna o último código de retorno do Gearman.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um código de retorno Gearman válido.

### Veja também

- [GearmanWorker::error()](gearmanworker.error.md) - Obtém o último erro encontrado
- [GearmanWorker::getErrno()](gearmanworker.geterrno.md) - Obtém o número do erro

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
