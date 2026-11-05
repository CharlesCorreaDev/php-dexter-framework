# Determina se uma senha deve ou não ter o hash refeito

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-pwhash-str-needs-rehash.php

---

# sodium\_crypto\_pwhash\_str\_needs\_rehash

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_pwhash\_str\_needs\_rehash — Determina se uma senha deve ou não ter o hash refeito

### Descrição

function **sodium\_crypto\_pwhash\_str\_needs\_rehash**([string](language.types.string.md) `$password`, [int](language.types.integer.md) `$opslimit`, [int](language.types.integer.md) `$memlimit`): [bool](language.types.boolean.md)

Determina se uma senha deve ou não ter o hash refeito, com base no `opslimit` e `memlimit` do hash atual.

### Parâmetros

`password`
:   Hash de senha

`opslimit`
:   Opslimit configurado; veja [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md)

`memlimit`
:   Memlimit configurado; veja [sodium\_crypto\_pwhash\_str()](function.sodium-crypto-pwhash-str.md)

### Valor Retornado

Retorna **`true`** se o memlimit/opslimit fornecido não corresponder ao que está armazenado no hash.
Retorna **`false`** se corresponderem.

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
