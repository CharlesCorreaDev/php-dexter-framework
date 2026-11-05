# Obtém o valor gerado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.current.php

---

# Generator::current

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::current — Obtém o valor gerado

### Descrição

public function **Generator::current**(): [mixed](language.types.mixed.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o valor gerado.

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
