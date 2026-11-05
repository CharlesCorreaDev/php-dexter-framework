# Testa para igualdade em tempo constante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-memcmp.php

---

# sodium\_memcmp

(PHP 7 >= 7.2.0, PHP 8)

sodium\_memcmp — Testa para igualdade em tempo constante

### Descrição

function **sodium\_memcmp**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string1`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$string2`): [int](language.types.integer.md)

Compara duas strings em tempo constante.

Na prática, é quase sempre desejado usar [hash\_equals()](function.hash-equals.md),
pois fornece a mesma lógica, porém retorna um [bool](language.types.boolean.md) em vez de um
[int](language.types.integer.md). No entanto, se o valor de retorno de uma comparação estiver sendo usado em um
cálculo que é sensível ao tempo e vazamentos de tempo com conversões de bool para int
forem uma preocupação, **sodium\_memcmp()** é um substituto ideal.

### Parâmetros

`string1`
:   String para comparar

`string2`
:   Outra string para comparar

### Valor Retornado

Retorna `0` se ambas as strings forem iguais, `-1` caso contrário.

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
