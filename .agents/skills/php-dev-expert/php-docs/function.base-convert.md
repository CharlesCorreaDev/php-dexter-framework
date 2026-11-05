# Converte um número entre bases arbitrárias

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.base-convert.php

---

# base\_convert

(PHP 4, PHP 5, PHP 7, PHP 8)

base\_convert — Converte um número entre bases arbitrárias

### Descrição

function **base\_convert**([string](language.types.string.md) `$num`, [int](language.types.integer.md) `$from_base`, [int](language.types.integer.md) `$to_base`): [string](language.types.string.md)

Retorna uma string contendo `num`
representado na base `to_base`. A base na qual
`num` é informada está especificada em
`from_base`. Tanto
`from_base` quanto `to_base`
devem estar entre 2 e 36, inclusive. Dígitos em números com uma
base maior do que 10 serão representados com letras a-z,
com 'a' significando 10, 'b' significando 11 e 'z' significando 35.
A forma das letras não importa, ou seja
`num` é interpretado sem sensibilidade a maiúsculas/minúsculas.

**Aviso**

**base\_convert()** pode perder precisão com números grandes
devido a propriedade relacionadaa ao o tipo interno de [float](language.types.float.md) usado.
Consulte a seção [Números de ponto flutuante](language.types.float.md)
no manual para mais informações e limitações específicas.

### Parâmetros

`num`
:   O número a ser convertido. Quaisquer caracteres inválidos em
    `num` serão ignorados silenciosamente.
    A partir do PHP 7.4.0, informar caracteres inválidos foi descontinuado.

`from_base`
:   A base em que `num` está

`to_base`
:   A base para a qual deve-se converter `num`

### Valor Retornado

`num` convertido para a base `to_base`

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.4.0 | Passar caracteres inválidos agora gerará uma nota de descontinuação. O resultado ainda é calculado como se os caracteres inválidos não existissem. |

### Examples

**Exemplo #1 Exemplo de **base\_convert()****

```
<?php
$hexadecimal = 'a37334';
echo base_convert($hexadecimal, 16, 2);
?>
```

O exemplo acima produzirá:

```
101000110111001100110100
```

### Veja também

- [intval()](function.intval.md) - Obtém o valor em número inteiro de uma variável

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
