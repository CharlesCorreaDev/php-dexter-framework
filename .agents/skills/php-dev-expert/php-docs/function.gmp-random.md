# Número aleatório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-random.php

---

# gmp\_random

(PHP 4 >= 4.0.4, PHP 5, PHP 7)

gmp\_random — Número aleatório

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **gmp\_random**([int](language.types.integer.md) `$limiter` = 20): [GMP](class.gmp.md)

Gera um número aleatório. O número será entre 0 e (2 \*\* n) - 1,
onde n é o número de bits por membro multiplicado por `limiter`.
Se `limiter` for negativo, são gerados números negativos.

Um membro é um mecanismo interno do GMP. O número de bits em um membro não
é estatico, e pode variar de sistema para sistema. Geralmente, o número de
bits em um membro é 32 ou 64, mas isto não é garantido.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

### Parâmetros

`limiter`
:   O limitador.

    Um objeto [GMP](class.gmp.md), um [int](language.types.integer.md)
    ou uma [string](language.types.string.md) que possa ser interpretado como um número seguindo a mesma lógica
    como se a string fosse usada em [gmp\_init()](function.gmp-init.md) com detecção
    automática de base (ou seja, quando `base` é igual a 0).

### Valor Retornado

Um número GMP aleatório.

### Examples

**Exemplo #1 Exemplo de **gmp\_random()****

```
<?php
$rand1 = gmp_random(1); // número aleatório de 0 a 1 * bits por membro
$rand2 = gmp_random(2); // número aleatório de 0 a 2 * bits por membro

echo gmp_strval($rand1) . "\n";
echo gmp_strval($rand2) . "\n";
?>
```

O exemplo acima produzirá:

```
1915834968
8642564075890328087
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
