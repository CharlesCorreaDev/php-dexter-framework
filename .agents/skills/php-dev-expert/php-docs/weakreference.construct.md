# Construtor que desabilita a instanciação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/weakreference.construct.php

---

# WeakReference::\_\_construct

(PHP 7 >= 7.4.0, PHP 8)

WeakReference::\_\_construct — Construtor que desabilita a instanciação

### Descrição

public function **WeakReference::\_\_construct**()

Este método existe apenas para desabilitar a instanciação da classe [WeakReference](class.weakreference.md).
Referências fracas devem ser instanciadas com o método de fábrica [WeakReference::create()](weakreference.create.md).

### Parâmetros

Esta função não possui parâmetros.

### Veja também

- [WeakReference::create()](weakreference.create.md) - Cria uma nova referência fraca

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
