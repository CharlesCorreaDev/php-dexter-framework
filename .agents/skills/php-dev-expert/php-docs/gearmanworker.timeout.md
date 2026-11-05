# Obtém tempo limite de atividade de E/S do soquete

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.timeout.php

---

# GearmanWorker::timeout

(PECL gearman >= 0.6.0)

GearmanWorker::timeout — Obtém tempo limite de atividade de E/S do soquete

### Descrição

public function **GearmanWorker::timeout**(): [int](language.types.integer.md)

Retorna o tempo atual de espera, em milissegundos, para atividade de E/S do soquete.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um período de tempo em milissegundos. Um valor negativo indica um tempo limite infinito.

### Veja também

- [GearmanWorker::setTimeout()](gearmanworker.settimeout.md) - Define o tempo limite da atividade de E/S do soquete

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
