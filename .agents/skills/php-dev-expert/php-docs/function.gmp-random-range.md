# Obtém um inteiro uniformemente selecionado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-random-range.php

---

# gmp\_random\_range

(PHP 5 >= 5.6.3, PHP 7, PHP 8)

gmp\_random\_range — Obtém um inteiro uniformemente selecionado

### Descrição

function **gmp\_random\_range**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$min`, [GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$max`): [GMP](class.gmp.md)

Gera um número aleatório. O número estará entre
`min` e `max`.

`min` e `max` podem ambos ser negativos
mas `min` precisa sempre ser menor que `max`.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

### Parâmetros

`min`
:   Um número GMP representando o limite inferior para o número aleatório.

`max`
:   Um número GMP representando o limite superior para o número aleatório.

### Valor Retornado

Retorna um objeto [GMP](class.gmp.md) que contém
um inteiro uniformemente selecionado do intervalo fechado
[`min`, `max`]. Tanto
`min` quanto `max` são
valores de retorno possíveis.

### Erros/Exceções

Se `max` for menor que `min`,
uma exceção [ValueError](class.valueerror.md) será lançada.

### Examples

**Exemplo #1 Exemplo de **gmp\_random\_range()****

```
<?php
$rand1 = gmp_random_range(0, 100);    // número aleatório entre 0 e 100
$rand2 = gmp_random_range(-100, -10); // número aleatório entre -100 e -10

echo gmp_strval($rand1) . "\n";
echo gmp_strval($rand2) . "\n";
?>
```

O exemplo acima produzirá:

```
42
-67
```

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
