# Obtém o último erro encontrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.error.php

---

# GearmanWorker::error

(PECL gearman >= 0.5.0)

GearmanWorker::error — Obtém o último erro encontrado

### Descrição

public function **GearmanWorker::error**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string de erro para o último erro encontrado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma sequência de erro legível por humanos, ou **`false`** se não houver nenhuma mensagem de erro disponível.

### Veja também

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
