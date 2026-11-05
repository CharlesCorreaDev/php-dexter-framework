# Obtém o tamanho interpretado da sintaxe abreviada do ini

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ini-parse-quantity.php

---

# ini\_parse\_quantity

(PHP 8 >= 8.2.0)

ini\_parse\_quantity — Obtém o tamanho interpretado da sintaxe abreviada do ini

### Descrição

function **ini\_parse\_quantity**([string](language.types.string.md) `$shorthand`): [int](language.types.integer.md)

Retorna o tamanho interpretado em bytes em caso de sucesso a partir de uma [notação abreviada ini](faq.using.md#faq.using.shorthandbytes).

### Parâmetros

`shorthand`
:   Notação abreviada ini a ser interpretada, precisa ser um número seguido por um multiplicador opcional.
    Os seguintes multiplicadores são suportados: `k`/`K` (`1024`),
    `m`/`M` (`1048576`),
    `g`/`G` (`1073741824`).
    O número pode ser um decimal, hexadecimal (prefixado com `0x` ou `0X`),
    octal (prefixado com `0o`, `0O` ou `0`) ou binário (prefixado com
    `0b` ou `0B`)

### Valor Retornado

Retorna o tamanho interpretado em bytes como um número [int](language.types.integer.md).

### Erros/Exceções

Se o valor não puder ser interpretado, ou se um multiplicador inválido for utilizado, um **`E_WARNING`** é emitido.

### Examples

**Exemplo #1 Alguns exemplos de **ini\_parse\_quantity()****

```
<?php

var_dump(ini_parse_quantity('1024'));
var_dump(ini_parse_quantity('1024M'));
var_dump(ini_parse_quantity('512K'));
var_dump(ini_parse_quantity('0xFFk'));
var_dump(ini_parse_quantity('0b1010k'));
var_dump(ini_parse_quantity('0o1024'));
var_dump(ini_parse_quantity('01024'));
var_dump(ini_parse_quantity('Foobar'));
var_dump(ini_parse_quantity('10F'));

?>
```

O exemplo acima produzirá:

```
int(1024)
int(1073741824)
int(524288)
int(261120)
int(10240)
int(532)
int(532)

Warning: Invalid quantity "Foobar": no valid leading digits, interpreting as "0" for backwards compatibility
int(0)

Warning: Invalid quantity "10F": unknown multiplier "F", interpreting as "10" for backwards compatibility
int(10)
```

### Veja também

- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração

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
