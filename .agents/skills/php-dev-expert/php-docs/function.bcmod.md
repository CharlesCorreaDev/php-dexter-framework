# Obtém o resto de uma divisão com precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcmod.php

---

# bcmod

(PHP 4, PHP 5, PHP 7, PHP 8)

bcmod — Obtém o resto de uma divisão com precisão arbitrária

### Descrição

function **bcmod**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Obtém o resto da divisão de `num1` por
`num2`.
O resultado tem o mesmo sinal de `num1`.

### Parâmetros

`num1`
:   O operando da esquerda, como uma string.

`num2`
:   O operando da direita, como uma string.

`scale`
:   Este parâmetro é usado para definir o número de dígitos após o separador de decimais do resultado.
    Se for **`null`**, será usada a escala padrão definida com [bcscale()](function.bcscale.md),
    ou será usado o valor da diretiva INI
    [`bcmath.scale`](bc.configuration.md#ini.bcmath.scale).

### Valor Retornado

Retorna o resto como uma string.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num1` ou `num2`
  não for uma string numérica BCMath bem formada.
- `scale` estiver fora do intervalo válido.

Esta função lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md)
se `num2` for igual a `0`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` pode ser null. |
| 8.0.0 | Dividir por `0` agora lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) ao invés de retornar null. |
| 7.2.0 | `num1` e `num2` não são mais truncados para inteiro, de forma que o comportamento de **bcmod()** é o mesmo de [fmod()](function.fmod.md) ao invés do operador `%`. |
| 7.2.0 | O parâmetro `scale` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **bcmod()****

```
<?php
bcscale(0);
echo bcmod( '5',  '3'); //  2
echo bcmod( '5', '-3'); //  2
echo bcmod('-5',  '3'); // -2
echo bcmod('-5', '-3'); // -2
?>
```

**Exemplo #2 Exemplo de **bcmod()** com decimais**

```
<?php
bcscale(1);
echo bcmod('5.7', '1.3'); // 0.5 no PHP 7.2.0; anteriormente 0
?>
```

### Veja também

- [bcdiv()](function.bcdiv.md) - Divide dois números de precisão arbitrária
- [bcdivmod()](function.bcdivmod.md) - Obtém o quociente e o módulo de um número de precisão arbitrário
- [BcMath\Number::mod()](bcmath-number.mod.md) - Obtém o resto de um número de precisão arbitrária

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
