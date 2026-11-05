# Continua a execução do gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.next.php

---

# Generator::next

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::next — Continua a execução do gerador

### Descrição

public function **Generator::next**(): [void](language.types.void.md)

Chamar **Generator::next()** tem o mesmo efeito que chamar
[Generator::send()](generator.send.md) com o argumento **`null`**.

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
