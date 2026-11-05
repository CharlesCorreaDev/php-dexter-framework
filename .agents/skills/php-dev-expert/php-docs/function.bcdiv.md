# Divide dois números de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcdiv.php

---

# bcdiv

(PHP 4, PHP 5, PHP 7, PHP 8)

bcdiv — Divide dois números de precisão arbitrária

### Descrição

function **bcdiv**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Divide `num1` por `num2`.

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

Retorna o resultado da divisão como uma string.

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
| 8.0.0 | `scale` agora pode ser nulo. |
| 8.0.0 | Dividir por `0` agora lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) ao invés de retornar **`null`**. |

### Examples

**Exemplo #1 Exemplo de **bcdiv()****

```
<?php

echo bcdiv('105', '6.55957', 3);  // 16.007

?>
```

### Veja também

- [bcdivmod()](function.bcdivmod.md) - Obtém o quociente e o módulo de um número de precisão arbitrário
- [bcmod()](function.bcmod.md) - Obtém o resto de uma divisão com precisão arbitrária
- [bcmul()](function.bcmul.md) - Multiplica dois números de precisão arbitrária
- [BcMath\Number::div()](bcmath-number.div.md) - Divide por um número de precisão arbitrária

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
