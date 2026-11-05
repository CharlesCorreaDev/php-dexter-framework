# Cria um número GMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-init.php

---

# gmp\_init

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gmp\_init — Cria um número GMP

### Descrição

function **gmp\_init**([int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$base` = 0): [GMP](class.gmp.md)

Cria um número GMP a partir de um inteiro ou uma string.

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

### Valor Retornado

Um objeto [GMP](class.gmp.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Suporte a prefixos octais explícitos `0o` e `0O` foi adicionado para strings do parâmetro `num`. A interpretação de tais prefixos quando `base` é `0` também foi adicionada. |

### Examples

**Exemplo #1 Criando um número GMP**

```
<?php
$a = gmp_init (123456);
$b = gmp_init ("0xFFFFDEBACDFEDF7200");
?>
```

### Notas

> **Nota**:
>
> Não é necessário chamar esta função para usar inteiros ou
> strings no lugar de números GMP nas funções GMP (como em
> [gmp\_add()](function.gmp-add.md)). Argumentos das funções são automaticamente
> convertidos para números GMP, se esta conversão for possível e necessária, usando
> as mesmas regras de **gmp\_init()**.

### Veja também

- [GMP::\_\_construct()](gmp.construct.md) - Cria um número GMP

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
