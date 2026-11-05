# Obtém opções do trabalhador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.options.php

---

# GearmanWorker::options

(PECL gearman >= 0.6.0)

GearmanWorker::options — Obtém opções do trabalhador

### Descrição

public function **GearmanWorker::options**(): [int](language.types.integer.md)

Obtém as opções definidas anteriormente para o trabalhador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

As opções atualmente definidas para o trabalhador.

### Veja também

- [GearmanWorker::setOptions()](gearmanworker.setoptions.md) - Define opções do trabalhador

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
