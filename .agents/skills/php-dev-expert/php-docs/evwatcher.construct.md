# Construtor abstrato de um objeto observador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/evwatcher.construct.php

---

# EvWatcher::\_\_construct

(PECL ev >= 0.2.0)

EvWatcher::\_\_construct — Construtor abstrato de um objeto observador

### Descrição

abstract
public
function **EvWatcher::\_\_construct**()

**EvWatcher::\_\_construct()**
é um construtor abstrato de um objeto observador implementado nas classes
derivadas.

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
