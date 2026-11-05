# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ui.requirements.php

---

## Dependências

A instalação requer a biblioteca libui e o PHP 7 ou posterior.

Esta extensão requer que a [» biblioteca libui](https://github.com/andlabs/libui)
versão 0.1.0 ou superior esteja instalada. Consulte a documentação da libui
para uma lista de pré-requisitos.

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
