# Compara dois números de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bccomp.php

---

# bccomp

(PHP 4, PHP 5, PHP 7, PHP 8)

bccomp — Compara dois números de precisão arbitrária

### Descrição

function **bccomp**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [int](language.types.integer.md)

Compara `num1` com `num2`
e retorna o resultado da comparação como um inteiro.

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

Retorna `0` se ambos os operandos forem iguais,
`1` se `num1` for maior que
`num2`, `-1` para o restante.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num1` ou `num2`
  não for uma string numérica BCMath bem formada.
- `scale` estiver fora do intervalo válido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **bccomp()****

```
<?php

echo bccomp('1', '2') . "\n";   // -1
echo bccomp('1.00001', '1', 3); // 0
echo bccomp('1.00001', '1', 5); // 1

?>
```

### Veja também

- [BcMath\Number::compare()](bcmath-number.compare.md) - Compara dois números de precisão arbitrária

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
