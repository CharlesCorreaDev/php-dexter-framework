# Desregistra um empacotador URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-wrapper-unregister.php

---

# stream\_wrapper\_unregister

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

stream\_wrapper\_unregister — Desregistra um empacotador URL

### Descrição

function **stream\_wrapper\_unregister**([string](language.types.string.md) `$protocol`): [bool](language.types.boolean.md)

Permite desabilitar um empacotador de fluxo já definido. Assim que o empacotador
tiver sido desabilitado, ele pode ser substituído por um empacotador definido pelo
usuário usando [stream\_wrapper\_register()](function.stream-wrapper-register.md), ou restaurado mais tarde com
[stream\_wrapper\_restore()](function.stream-wrapper-restore.md).

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
