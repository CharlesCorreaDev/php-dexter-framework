# Eleva um número de precisão arbitrária a outro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcpow.php

---

# bcpow

(PHP 4, PHP 5, PHP 7, PHP 8)

bcpow — Eleva um número de precisão arbitrária a outro

### Descrição

function **bcpow**([string](language.types.string.md) `$num`, [string](language.types.string.md) `$exponent`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Eleva `num` à potência de
`exponent`.

### Parâmetros

`num`
:   O número base, como uma string.

`exponent`
:   O número expoente, como uma string. Precisa ser um valor sem parte fracionária.
    Os expoentes válidos dependem da plataforma, mas ao menos são válidos de
    `-2147483648` até `2147483647`.

`scale`
:   Este parâmetro é usado para definir o número de dígitos após o separador de decimais do resultado.
    Se for **`null`**, será usada a escala padrão definida com [bcscale()](function.bcscale.md),
    ou será usado o valor da diretiva INI
    [`bcmath.scale`](bc.configuration.md#ini.bcmath.scale).

### Valor Retornado

Retorna o resultado como uma string.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num` ou `exponent` não são strings numéricas BCMath bem formadas
- `exponent` tem uma parte fracionária
- `exponent` ou `scale` está fora do intervalo válido

Esta função lança uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md) se `num`
for igual a `0` e `exponent` for um valor negativo.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Potências negativas de `0` anteriormente retornavam `0`, mas agora lançam uma exceção [DivisionByZeroError](class.divisionbyzeroerror.md). |
| 8.0.0 | Quando `exponent` tem uma parte fracionária, lança uma exceção [ValueError](class.valueerror.md) ao invés de truncar o valor. |
| 7.3.0 | **bcpow()** agora retorna números com a escala solicitada. Mais exatamente, o número retornado pode omitir alguns zeros decimais. |

### Examples

**Exemplo #1 Exemplo da **bcpow()****

```
<?php

echo bcpow('4.2', '3', 2); // 74.08

?>
```

### Notas

> **Nota**:
>
> Anteriormente ao PHP 7.3.0, **bcpow()** podia retornar um resultado com menos dígitos
> decimais do que o indicado no parâmetro `scale`.
> Isto ocorre quando o resultado não requer toda a
> precisão permitida por `scale`. Por exemplo:
>
> **Exemplo #2 Exemplo **bcpow()** com scale**
>
> ```
> <?php
> echo bcpow('5', '2', 2);     // Imprime "25", não "25.00"
> ?>
> ```

### Veja também

- [bcpowmod()](function.bcpowmod.md) - Eleva um número de precisão arbitrária para outro, reduzido por um módulo especificado
- [bcsqrt()](function.bcsqrt.md) - Obtém a raiz quadrada de um número de precisão arbitrária
- [BcMath\Number::pow()](bcmath-number.pow.md) - Eleva um número de precisão arbitrária

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
