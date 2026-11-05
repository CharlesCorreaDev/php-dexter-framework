# Numero aleatório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-random-bits.php

---

# gmp\_random\_bits

(PHP 5 >= 5.6.3, PHP 7, PHP 8)

gmp\_random\_bits — Numero aleatório

### Descrição

function **gmp\_random\_bits**([int](language.types.integer.md) `$bits`): [GMP](class.gmp.md)

Gera um número aleatório. O número estará entre
`0` e
`2$bits - 1`.

`bits` precisa ser maior que 0,
e o valor máximo é restrito pela memória disponível.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

### Parâmetros

`bits`
:   O número de bits a gerar.

### Valor Retornado

Um número GMP aleatório.

### Erros/Exceções

Se `bits` for menor que `1`,
uma exceção [ValueError](class.valueerror.md) será lançada.

### Examples

**Exemplo #1 Exemplo de **gmp\_random\_bits()****

```
<?php
$rand1 = gmp_random_bits(3); // número aleatório de 0 a 7
$rand2 = gmp_random_bits(5); // número aleatório de 0 a 31

echo gmp_strval($rand1) . "\n";
echo gmp_strval($rand2) . "\n";
?>
```

O exemplo acima produzirá:

```
3
15
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
