# Adiciona dois números de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcadd.php

---

# bcadd

(PHP 4, PHP 5, PHP 7, PHP 8)

bcadd — Adiciona dois números de precisão arbitrária

### Descrição

function **bcadd**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Soma `num1` e
`num2`.

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

A soma de dois operandos, como uma string.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num1` ou `num2`
  não for uma string numérica BCMath bem formada.
- `scale` estiver fora do intervalo válido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **bcadd()****

```
<?php

$a = '1.234';
$b = '5';

echo bcadd($a, $b);     // 6
echo bcadd($a, $b, 4);  // 6.2340

?>
```

### Veja também

- [bcsub()](function.bcsub.md) - Subtrai um número de precisão arbitrária de outro
- [BcMath\Number::add()](bcmath-number.add.md) - Adiciona um número de precisão arbitrária

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
