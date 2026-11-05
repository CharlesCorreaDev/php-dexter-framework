# O construtor abstrato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventutil.construct.php

---

# EventUtil::\_\_construct

(PECL event >= 1.2.6-beta)

EventUtil::\_\_construct — O construtor abstrato

### Descrição

abstract
public
function **EventUtil::\_\_construct**()

[EventUtil](class.eventutil.md)
é um singleton. Portanto, o construtor é abstrato, e é impossível
criar objetos baseados nesta classe.

### Parâmetros

Esta função não possui parâmetros.

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
