# Subtrai um número de precisão arbitrária de outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcsub.php

---

# bcsub

(PHP 4, PHP 5, PHP 7, PHP 8)

bcsub — Subtrai um número de precisão arbitrária de outro

### Descrição

function **bcsub**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Subtrai `num2` de `num1`.

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

O resultado da subtração, como uma string.

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

**Exemplo #1 Exemplo de **bcsub()****

```
<?php

$a = '1.234';
$b = '5';

echo bcsub($a, $b);     // -3
echo bcsub($a, $b, 4);  // -3.7660

?>
```

### Veja também

- [bcadd()](function.bcadd.md) - Adiciona dois números de precisão arbitrária
- [BcMath\Number::sub()](bcmath-number.sub.md) - Subtrai um número de precisão arbitrária

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
