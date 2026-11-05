# Remove opções do trabalhador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanworker.removeoptions.php

---

# GearmanWorker::removeOptions

(PECL gearman >= 0.6.0)

GearmanWorker::removeOptions — Remove opções do trabalhador

### Descrição

public function **GearmanWorker::removeOptions**([int](language.types.integer.md) `$option`): [true](language.types.singleton.md)

Remove (desativa) uma ou mais opções do trabalhador.

### Parâmetros

`option`
:   As opções a serem removidas (desativadas)

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanWorker::options()](gearmanworker.options.md) - Obtém opções do trabalhador
- [GearmanWorker::setOptions()](gearmanworker.setoptions.md) - Define opções do trabalhador
- [GearmanWorker::addOptions()](gearmanworker.addoptions.md) - Adiciona opções do trabalhador

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
