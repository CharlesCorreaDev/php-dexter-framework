# Cria um número GMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gmp.construct.php

---

# GMP::\_\_construct

(PHP 8 >= 8.2.4)

GMP::\_\_construct — Cria um número GMP

### Descrição

public function **GMP::\_\_construct**([int](language.types.integer.md)|[string](language.types.string.md) `$num` = 0, [int](language.types.integer.md) `$base` = 0)

Cria um número GMP a partir de um inteiro ou de uma string.

### Parâmetros

`num`
:   Um inteiro ou uma string. A string pode representar um decimal,
    hexadecimal ou octal.

`base`
:   A base a ser usada na conversão da representação em [string](language.types.string.md).

    Uma base explícita pode estar entre `2` e `62`.
    Para bases até `36`, é indiferente usar maiúsculas ou minúsculas;
    as letras terão o mesmo valor.
    Para bases de `37` a `62`,
    letras maiúsculas representam a faixa de `10` a
    `35` e as minúsculas representam os valores de
    `36` a `61`.

    Se a `base` for `0`, a base
    real é determinada pelos caracteres que vêm na frente de `num`.
    Se os dois primeiros caracteres forem `0x` ou `0X`,
    a string é interpretada como um inteiro hexadecimal.
    Se os dois primeiros caracteres forem `0b` ou `0B`,
    a string é interpretada como um inteiro binário.
    Se os dois primeiros caracteres forem `0o` ou `0O`,
    a string é interpretada como um inteiro octal.
    Além disso, se o primeiro caractere for `0`,
    a string também é interpretada como um inteiro octal.
    Em todos os outros casos, a string é interpretada como um inteiro decimal.

### Veja também

- [gmp\_init()](function.gmp-init.md) - Cria um número GMP

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
