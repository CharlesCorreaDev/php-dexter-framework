# Tenta carregar uma classe indefinida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.autoload.php

---

# \_\_autoload

(PHP 5, PHP 7)

\_\_autoload — Tenta carregar uma classe indefinida

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **\_\_autoload**([string](language.types.string.md) `$class`): [void](language.types.void.md)

Pode-se definir esta função para habilitar [carregamento automático de classes](language.oop5.autoload.md).

### Parâmetros

`class`
:   Nome da classe a ser carregada

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [spl\_autoload\_register()](function.spl-autoload-register.md) - Registra a função dada como implementação \_\_autoload()

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
