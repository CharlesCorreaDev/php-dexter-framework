# Compara números grandes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-compare.php

---

# sodium\_compare

(PHP 7 >= 7.2.0, PHP 8)

sodium\_compare — Compara números grandes

### Descrição

function **sodium\_compare**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string1`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Compara duas strings como se fossem inteiros little-endian sem sinal, de tamanho arbitrário, sem vazamento de canal lateral.

### Parâmetros

`string1`
:   Operando esquerdo

`string2`
:   Operando direito

### Valor Retornado

Retorna `-1` se `string1` for menor que `string2`.

Retorna `1` se `string1` for maior que `string2`.

Retorna `0` se ambas as strings forem iguais.

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
