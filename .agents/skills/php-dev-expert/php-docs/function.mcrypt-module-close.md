# Fecha o módulo mcrypt

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-close.php

---

# mcrypt\_module\_close

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_close — Fecha o módulo mcrypt

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_close**([resource](language.types.resource.md) `$td`): [bool](language.types.boolean.md)

Fecha o identificador de criptografia especificado.

### Parâmetros

`td`
:   O descritor de criptografia.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mcrypt\_module\_open()](function.mcrypt-module-open.md) - Abre o módulo do algoritmo e o modo a ser utilizado

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
