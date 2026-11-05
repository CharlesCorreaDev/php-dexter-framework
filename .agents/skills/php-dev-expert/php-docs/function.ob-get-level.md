# Retorna o nível de aninhamento do mecanismo de buffer de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-level.php

---

# ob\_get\_level

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ob\_get\_level — Retorna o nível de aninhamento do mecanismo de buffer de saída

### Descrição

function **ob\_get\_level**(): [int](language.types.integer.md)

Retorna o nível de aninhamento do mecanismo de buffer de saída.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o nível de manipuladores de buffer de saída aninhados ou zero se o buffer
de saída não estiver ativo.

**Cuidado**

Os valores para níveis idênticos entre **ob\_get\_level()**
e [ob\_get\_status()](function.ob-get-status.md) são deslocados em uma unidade.
Para **ob\_get\_level()**
o primeiro nível é `1`,
enquanto que para [ob\_get\_status()](function.ob-get-status.md)
o primeiro nível é `0`.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_status()](function.ob-get-status.md) - Obtém status dos buffers de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída

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
