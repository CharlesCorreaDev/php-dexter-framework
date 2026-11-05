# Define opções do trabalhador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.setoptions.php

---

# GearmanWorker::setOptions

(PECL gearman >= 0.5.0)

GearmanWorker::setOptions — Define opções do trabalhador

### Descrição

public function **GearmanWorker::setOptions**([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Define uma ou mais opções para o valor fornecido.

### Parâmetros

`option`
:   As opções a serem definidas

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanWorker::options()](gearmanworker.options.md) - Obtém opções do trabalhador
- [GearmanWorker::addOptions()](gearmanworker.addoptions.md) - Adiciona opções do trabalhador
- [GearmanWorker::removeOptions()](gearmanworker.removeoptions.md) - Remove opções do trabalhador
- [GearmanClient::setOptions()](gearmanclient.setoptions.md) - Define opções do cliente

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
