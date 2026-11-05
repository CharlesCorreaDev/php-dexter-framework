# Avança eficientemente o mecanismo em 2^192 passos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-xoshiro256starstar.jumplong.php

---

# Random\Engine\Xoshiro256StarStar::jumpLong

(PHP 8 >= 8.2.0)

Random\Engine\Xoshiro256StarStar::jumpLong — Avança eficientemente o mecanismo em 2^192 passos

### Descrição

public function **Random\Engine\Xoshiro256StarStar::jumpLong**(): [void](language.types.void.md)

Avança o estado do algoritmo em 2192 passos, como se
[Random\Engine\Xoshiro256StarStar::generate()](random-engine-xoshiro256starstar.generate.md) fosse chamado
2192 vezes.

O objetivo de um salto longo é facilitar a criação de um novo mecanismo [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md)
a partir de um mecanismo [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md) já existente.
O mecanismo inicial atua como um processo, que pode ser [clonado](language.oop5.cloning.md)
e saltado repetidamente para criar 264 sequências não sobrepostas com
2192 valores cada.

O salto longo pode ser combinado com [Random\Engine\Xoshiro256StarStar::jump()](random-engine-xoshiro256starstar.jump.md)
para dividir ainda mais cada uma das 264 sequências geradas pelo salto longo,
em 264 sequências de 2128 valores cada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\Xoshiro256StarStar::jumpLong()****

```
<?php
$blueprintRng = new \Random\Engine\Xoshiro256StarStar(0);

// Cada mecanismo pai terá seu próprio bloco de 2**192 valores.
$parent1 = clone $blueprintRng;
$blueprintRng->jumpLong();

$parent2 = clone $blueprintRng;
$blueprintRng->jumpLong();

// Cada um dos mecanismos filhos terá seu próprio bloco de 2**128 valores
// retirado do bloco de 2**192 valores do mecanismo pai.
$child1a = clone $parent1;
$parent1->jump();
$child1b = clone $parent1;
$parent1->jump();

$child2a = clone $parent2;
$parent2->jump();
$child2b = clone $parent2;
$parent2->jump();

echo "Child 1A: ", bin2hex($child1a->generate()), "\n";
echo "Child 1B: ", bin2hex($child1b->generate()), "\n";
echo "Child 2A: ", bin2hex($child2a->generate()), "\n";
echo "Child 2B: ", bin2hex($child2b->generate()), "\n";
?>
```

O exemplo acima produzirá:

```
Child 1A: b4f275cb365fec99
Child 1B: 2cd646c8ed156237
Child 2A: eb3729a722a504e7
Child 2B: d4208dc85bdd6dc3
```

### Veja também

- [Random\Engine\Xoshiro256StarStar::jump()](random-engine-xoshiro256starstar.jump.md) - Move o mecanismo com eficiência para frente em passos de 2^128

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
