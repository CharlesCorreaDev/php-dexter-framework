# Expressão exponencial

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pow.php

---

# pow

(PHP 4, PHP 5, PHP 7, PHP 8)

pow — Expressão exponencial

### Descrição

function **pow**([mixed](language.types.mixed.md) `$num`, [mixed](language.types.mixed.md) `$exponent`): [int](language.types.integer.md)|[float](language.types.float.md)|[object](language.types.object.md)

Retorna `num` elevado à porência de
`exponent`.

> **Nota**:
>
> É possível usar o operador [\*\*](language.operators.arithmetic.md) no lugar desta função.

### Parâmetros

`num`
:   A base a ser usada

`exponent`
:   O expoente

### Valor Retornado

`num` elevado à potência de `exponent`.
Se ambos os valores forem inteiros não negativos e o resultado puder ser representado
como um inteiro, o resultado será retornado com o tipo [int](language.types.integer.md),
caso contrário será retornado como um [float](language.types.float.md).

Extensões do PHP podem substituir o comportamento desta operação e podem fazer com que ela retorne um objeto.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Elevar `0` a um `exponent` negativo agora foi descontinuado. |

### Examples

**Exemplo #1 Alguns exemplos de **pow()****

```
<?php

var_dump(pow(2, 8)); // int(256)
echo pow(-1, 20), PHP_EOL; // 1
echo pow(0, 0), PHP_EOL; // 1
echo pow(10, -1), PHP_EOL; // 0.1

echo pow(-1, 5.5), PHP_EOL; // NAN
?>
```

**Exemplo #2 Exemplos de **pow()** com objeto da extensão GMP**

```
<?php
var_dump(pow(new GMP("3"), new GMP("2"))); // object(GMP)
?>
```

### Notas

> **Nota**:
>
> Esta função converterá todas as entradas para números, mesmo valores não escalares,
> o que pode levar a resultados *estranhos*.

### Veja também

- Operador de exponenciação
  [`**`](language.operators.arithmetic.md)
- [fpow()](function.fpow.md) - Eleva um número à potência de outro, de acordo com a IEEE 754
- [exp()](function.exp.md) - Calcula o expoente de e
- [sqrt()](function.sqrt.md) - Raiz quadrada
- [bcpow()](function.bcpow.md) - Eleva um número de precisão arbitrária a outro
- [gmp\_pow()](function.gmp-pow.md) - Elevar o número a uma potência

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
