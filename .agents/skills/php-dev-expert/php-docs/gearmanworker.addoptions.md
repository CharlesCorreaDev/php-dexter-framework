# Adiciona opções do trabalhador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.addoptions.php

---

# GearmanWorker::addOptions

(PECL gearman >= 0.6.0)

GearmanWorker::addOptions — Adiciona opções do trabalhador

### Descrição

public function **GearmanWorker::addOptions**([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Adiciona uma ou mais opções às opções definidas anteriormente.

### Parâmetros

`option`
:   As opções a serem adicionadas

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanWorker::options()](gearmanworker.options.md) - Obtém opções do trabalhador
- [GearmanClient::setOptions()](gearmanclient.setoptions.md) - Define opções do cliente
- [GearmanClient::removeOptions()](gearmanclient.removeoptions.md) - Remove opções do cliente

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
