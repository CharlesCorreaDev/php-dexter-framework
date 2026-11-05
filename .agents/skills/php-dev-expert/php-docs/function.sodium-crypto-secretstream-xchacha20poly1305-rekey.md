# Rotaciona explicitamente a chave no estado secretstream

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-secretstream-xchacha20poly1305-rekey.php

---

# sodium\_crypto\_secretstream\_xchacha20poly1305\_rekey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_secretstream\_xchacha20poly1305\_rekey — Rotaciona explicitamente a chave no estado secretstream

### Descrição

function **sodium\_crypto\_secretstream\_xchacha20poly1305\_rekey**([string](language.types.string.md) `&$state`): [void](language.types.void.md)

Rotaciona explicitamente a chave no estado secretstream. Substitui o valor passado.

### Parâmetros

`state`
:   Estado do secretstream.

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
