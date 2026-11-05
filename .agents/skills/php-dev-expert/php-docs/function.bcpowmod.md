# Eleva um número de precisão arbitrária para outro, reduzido por um módulo especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcpowmod.php

---

# bcpowmod

(PHP 5, PHP 7, PHP 8)

bcpowmod — Eleva um número de precisão arbitrária para outro, reduzido por um módulo especificado

### Descrição

function **bcpowmod**(  
    [string](language.types.string.md) `$num`,  
    [string](language.types.string.md) `$exponent`,  
    [string](language.types.string.md) `$modulus`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**  
): [string](language.types.string.md)

Utiliza o método de exponenciação rápida para elevar
`num` à potência
`exponent` levando em conta o módulo
`modulus`.

### Parâmetros

`num`
:   A base, na forma de inteiro em string (a escala tem que ser zero).

`exponent`
:   O expoente, na forma de um inteiro não negativo, em string (a escala tem que ser zero).

`modulus`
:   O módulo, na forma de um inteiro em string (a escala tem que ser zero).

`scale`
:   Este parâmetro é usado para definir o número de dígitos após o separador de decimais do resultado.
    Se for **`null`**, será usada a escala padrão definida com [bcscale()](function.bcscale.md),
    ou será usado o valor da diretiva INI
    [`bcmath.scale`](bc.configuration.md#ini.bcmath.scale).

### Valor Retornado

Retorna o resultado como uma string.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num`, `exponent` ou `modulus` não é uma string numérica BCMath bem formada
- `num`, `exponent` ou `modulus` tem uma parte fracionária
- `exponent` é um valor negativo
- `scale` está fora do intervalo válido

Esta função lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se `modulus`
for igual a `0`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` agora pode ser nulo. |
| 8.0.0 | Agora lança uma exceção [ValueError](class.valueerror.md) ao invés de retornar **`false`** se `exponent` for negativo. |
| 8.0.0 | Dividir por `0` agora lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) ao invés de retornar **`false`**. |

### Examples

As seguintes instruções têm funcionalidades idênticas. A versão
**bcpowmod()**, no entanto, executa em
menos tempo e pode aceitar parâmetros maiores.

```
<?php
$a = bcpowmod($x, $y, $mod);

$b = bcmod(bcpow($x, $y), $mod);

// $a e $b são iguais.

?>
```

### Notas

> **Nota**:
>
> Por esse método realizar operações em módulo, números que não sejam
> inteiros positivos podem gerar resultados inesperados.

### Veja também

- [bcpow()](function.bcpow.md) - Eleva um número de precisão arbitrária a outro
- [bcmod()](function.bcmod.md) - Obtém o resto de uma divisão com precisão arbitrária
- [BcMath\Number::powmod()](bcmath-number.powmod.md) - Eleva um número de precisão arbitrária, reduzido por um módulo especificado

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
