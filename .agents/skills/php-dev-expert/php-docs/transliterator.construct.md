# Construtor privado para proibir instanciação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.construct.php

---

# Transliterator::\_\_construct

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::\_\_construct — Construtor privado para proibir instanciação

### Descrição

final private function **Transliterator::\_\_construct**()

Este método não deve ser chamado. Seu único propósito é inibir instanciação
com o operador [new](language.oop5.basic.md#language.oop5.basic.new).

Use os métodos de criação [Transliterator::create()](transliterator.create.md) ou
[Transliterator::createFromRules()](transliterator.createfromrules.md) em seu lugar.

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [Transliterator::create()](transliterator.create.md) - Cria um transliterador
- [Transliterator::createFromRules()](transliterator.createfromrules.md) - Cria um transliterador a partir de regras

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
