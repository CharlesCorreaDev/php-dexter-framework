# Serializa o gerador (sempre falha)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.wakeup.php

---

# Generator::\_\_wakeup

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::\_\_wakeup — Serializa o gerador (sempre falha)

### Descrição

public function **Generator::\_\_wakeup**(): [void](language.types.void.md)

Lança uma exceção, já que geradores não podem ser serializados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

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
