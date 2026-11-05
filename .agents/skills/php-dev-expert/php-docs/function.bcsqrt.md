# Obtém a raiz quadrada de um número de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcsqrt.php

---

# bcsqrt

(PHP 4, PHP 5, PHP 7, PHP 8)

bcsqrt — Obtém a raiz quadrada de um número de precisão arbitrária

### Descrição

function **bcsqrt**([string](language.types.string.md) `$num`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Retorna a raiz quadrada de `num`.

### Parâmetros

`num`
:   O operando, como uma string numérica no padrão BCMath.

`scale`
:   Este parâmetro é usado para definir o número de dígitos após o separador de decimais do resultado.
    Se for **`null`**, será usada a escala padrão definida com [bcscale()](function.bcscale.md),
    ou será usado o valor da diretiva INI
    [`bcmath.scale`](bc.configuration.md#ini.bcmath.scale).

### Valor Retornado

Retorna a raiz quadrada como uma string numérica no padrão BCMath.

### Erros/Exceções

Esta função lança um [ValueError](class.valueerror.md) nas seguintes situações:

- `num` não é uma string numérica no padrão BCMath
- `num` é menor que `0`
- `scale` está fora do range válido

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se `num` não é uma string numérica no padrão BCMath, ou menor que `0`, um [ValueError](class.valueerror.md) é lançado. Anteriormente um **`E_WARNING`** era emitido. |
| 8.0.0 | `scale` agora precisa estar entre `0` e `2147483647`; anteriormente, valores negativos eram tratados silenciosamente como `0`. |
| 8.0.0 | `scale` agora é anulável. |

### Examples

**Exemplo #1 Exemplo de **bcsqrt()****

```
<?php

echo bcsqrt('2', 3); // 1.414

?>
```

### Veja também

- [bcpow()](function.bcpow.md) - Eleva um número de precisão arbitrária a outro
- [BcMath\Number::sqrt()](bcmath-number.sqrt.md) - Obtém a raiz quadrada de um número de precisão arbitrária

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
