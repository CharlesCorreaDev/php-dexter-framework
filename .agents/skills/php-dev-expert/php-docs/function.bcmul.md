# Multiplica dois números de precisão arbitrária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.bcmul.php

---

# bcmul

(PHP 4, PHP 5, PHP 7, PHP 8)

bcmul — Multiplica dois números de precisão arbitrária

### Descrição

function **bcmul**([string](language.types.string.md) `$num1`, [string](language.types.string.md) `$num2`, [?](language.types.null.md)[int](language.types.integer.md) `$scale` = **`null`**): [string](language.types.string.md)

Multiplica `num1` por `num2`.

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

Retorna o resultado como uma string.

### Erros/Exceções

Esta função lança uma exceção [ValueError](class.valueerror.md) nos seguintes casos:

- `num1` ou `num2`
  não for uma string numérica BCMath bem formada.
- `scale` estiver fora do intervalo válido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `scale` agora pode ser nulo. |
| 7.3.0 | **bcmul()** agora retorna números com a escala solicitada. Formalmente o número retornado pode ter alguns zeros decimais omitidos. |

### Examples

**Exemplo #1 Exemplo de **bcmul()****

```
<?php
echo bcmul('1.34747474747', '35', 3); // 47.161
echo bcmul('2', '4'); // 8
?>
```

### Notas

> **Nota**:
>
> Anteriormente ao PHP 7.3.0, **bcmul()** poderia retornar um número com menos dígitos após o
> ponto decimal em comparação ao que o parâmetro `scale`
> indicaria. Isto ocorre apenas quando o resultado não exige toda a
> precisão permitida pelo parâmetro `scale`. Por exemplo:
>
> **Exemplo #2 Exemplo de **bcmul()** com escala**
>
> ```
> <?php
> echo bcmul('5', '2', 2);     // Exibe "10", não "10.00"
> ?>
> ```

### Veja também

- [bcdiv()](function.bcdiv.md) - Divide dois números de precisão arbitrária
- [BcMath\Number::mul()](bcmath-number.mul.md) - Multiplica um número de precisão arbitrária

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
