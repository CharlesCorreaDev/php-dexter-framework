# Obtém o número do erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.geterrno.php

---

# GearmanWorker::getErrno

(PECL gearman >= 0.5.0)

GearmanWorker::getErrno — Obtém o número do erro

### Descrição

public function **GearmanWorker::getErrno**(): [int](language.types.integer.md)

Retorna o valor do número do erro no caso de um valor de retorno GEARMAN\_ERRNO.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um número de erro válido.

### Veja também

- [GearmanWorker::error()](gearmanworker.error.md) - Obtém o último erro encontrado

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
