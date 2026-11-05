# Recupera memória usada pelo gerenciador de memória Zend Engine

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gc-mem-caches.php

---

# gc\_mem\_caches

(PHP 7, PHP 8)

gc\_mem\_caches — 
Recupera memória usada pelo gerenciador de memória Zend Engine

### Descrição

function **gc\_mem\_caches**(): [int](language.types.integer.md)

Recupera memória usada pelo gerenciador de memória Zend Engine.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de bytes liberados.

### Veja também

- [Coleta de Lixo](features.gc.md)

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
