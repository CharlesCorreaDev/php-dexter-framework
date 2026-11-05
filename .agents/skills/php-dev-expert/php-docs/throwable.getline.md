# Obtém a linha na qual o objeto foi instanciado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.getline.php

---

# Throwable::getLine

(PHP 7, PHP 8)

Throwable::getLine — Obtém a linha na qual o objeto foi instanciado

### Descrição

public function **Throwable::getLine**(): [int](language.types.integer.md)

Retorna o número da linha onde o objeto disparado foi instanciado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número da linha onde o objeto disparado foi instanciado.

### Veja também

- [Exception::getLine()](exception.getline.md) - Obtém a linha na qual a exceção foi criada

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
