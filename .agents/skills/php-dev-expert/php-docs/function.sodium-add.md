# Soma números grandes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-add.php

---

# sodium\_add

(PHP 7 >= 7.2.0, PHP 8)

sodium\_add — Soma números grandes

### Descrição

function **sodium\_add**([string](language.types.string.md) `&$string1`, [string](language.types.string.md) `$string2`): [void](language.types.void.md)

Adiciona o parâmetro `string2` ao `string1`, substituindo
o valor armazenado em `string1`. Esta função assume que ambos os parâmetros são strings
binárias que representam inteiros sem sinal na ordem de bytes little-endian.

### Parâmetros

`string1`
:   String representando um número inteiro sem sinal de tamanho arbitrário na ordem de bytes little-endian.
    Este parâmetro é passado por referência e conterá a soma dos dois parâmetros.

`string2`
:   String representando um número inteiro sem sinal de tamanho arbitrário na ordem de bytes little-endian.

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
