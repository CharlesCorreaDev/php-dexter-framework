# Obtém o quociente e o módulo de um número de precisão arbitrário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcdivmod.php

---

# bcdivmod

(PHP 8 >= 8.4.0)

bcdivmod — Obtém o quociente e o módulo de um número de precisão arbitrário

### Descrição

function **bcdivmod**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [array](language.types.array.md)

Obtém o quociente e o resto da divisão de `num1` por
`num2`.

### Parâmetros

`num1`
:   O dividendo, como uma string.

`num2`
:   O divisor, como uma string.

`scale`
:   Este parâmetro é usado para definir o número de dígitos após o separador de decimais do resultado.
    Se for **`null`**, será usada a escala padrão definida com [bcscale()](function.bcscale.md),
    ou será usado o valor da diretiva INI
    [`bcmath.scale`](bc.configuration.md#ini.bcmath.scale).

### Valor Retornado

Retorna um [array](language.types.array.md) indexado onde o primeiro elemento é o quociente como uma [string](language.types.string.md)
e o segundo elemento é o restante como uma [string](language.types.string.md).

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num1` ou `num2`
  não for uma string numérica BCMath bem formada.
- `scale` estiver fora do intervalo válido.

Esta função lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md)
se `num2` for igual a `0`.

### Examples

**Exemplo #1 Exemplo de **bcdivmod()****

```
<?php
bcscale(0);

[$quot, $rem] = bcdivmod('5',  '3');
echo $quot; // 1
echo $rem;  // 2

[$quot, $rem] = bcdivmod('5',  '-3');
echo $quot; // -1
echo $rem;  // 2

[$quot, $rem] = bcdivmod('-5',  '3');
echo $quot; // -1
echo $rem;  // -2

[$quot, $rem] = bcdivmod('-5',  '-3');
echo $quot; // 1
echo $rem;  // -2
?>
```

**Exemplo #2 **bcdivmod()** com decimais**

```
<?php
[$quot, $rem] = bcdivmod('5.7', '1.3', 1);
echo $quot; // 4
echo $rem;  // 0.5
?>
```

### Veja também

- [bcdiv()](function.bcdiv.md) - Divide dois números de precisão arbitrária
- [bcmod()](function.bcmod.md) - Obtém o resto de uma divisão com precisão arbitrária
- [BcMath\Number::divmod()](bcmath-number.divmod.md) - Obtém quociente e resto de um número de precisão arbitrária

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
