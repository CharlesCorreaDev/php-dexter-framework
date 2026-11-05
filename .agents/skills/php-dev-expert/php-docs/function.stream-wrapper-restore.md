# Restaura um empacotador interno anteriormente desregistrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-wrapper-restore.php

---

# stream\_wrapper\_restore

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_wrapper\_restore — Restaura um empacotador interno anteriormente desregistrado

### Descrição

function **stream\_wrapper\_restore**([string](language.types.string.md) `$protocol`): [bool](language.types.boolean.md)

Restaura um empacotador interno anteriormente desregistrado com
[stream\_wrapper\_unregister()](function.stream-wrapper-unregister.md).

### Parâmetros

`protocol`

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
