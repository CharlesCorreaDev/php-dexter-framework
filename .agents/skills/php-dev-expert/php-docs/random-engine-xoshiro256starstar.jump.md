# Move o mecanismo com eficiência para frente em passos de 2^128

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-xoshiro256starstar.jump.php

---

# Random\Engine\Xoshiro256StarStar::jump

(PHP 8 >= 8.2.0)

Random\Engine\Xoshiro256StarStar::jump — Move o mecanismo com eficiência para frente em passos de 2^128

### Descrição

public function **Random\Engine\Xoshiro256StarStar::jump**(): [void](language.types.void.md)

Avança o estado do algoritmo em 2128 passos, como se
[Random\Engine\Xoshiro256StarStar::generate()](random-engine-xoshiro256starstar.generate.md) fosse chamado
2128 vezes.

O objetivo de um salto é facilitar a criação de um novo mecanismo [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md)
a partir de um mecanismo [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md) já existente.
O mecanismo inicial atua como um projeto, que pode ser [clonado](language.oop5.cloning.md)
e saltado repetidamente para criar 2128 sequências não sobrepostas com
2128 valores cada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\Xoshiro256StarStar::jump()****

```
<?php
use Random\Engine\Xoshiro256StarStar;
use Random\Randomizer;

$blueprintRng = new Xoshiro256StarStar(0);

$fibers = [];
for ($i = 0; $i < 8; $i++) {
    $fiberRng = clone $blueprintRng;
    $blueprintRng->jump();

    $fiber = new Fiber(static function () use ($fiberRng, $i): void {
        $randomizer = new Randomizer($fiberRng);

        while (true) {
            Fiber::suspend();

            echo "{$i}: ", $randomizer->getInt(0, 100), "\n";
        }
    });
    $fiber->start();

    $fibers[] = $fiber;
}

// Mesmo que os Fibers sejam executados em ordem aleatória, eles imprimirão o mesmo valor
// todas as vezes, porque cada um tem sua própria instância única do RNG.
$randomizer = new Randomizer();

$fibers = $randomizer->shuffleArray($fibers);
foreach ($fibers as $fiber) {
    $fiber->resume();
}

$fibers = $randomizer->shuffleArray($fibers);
foreach ($fibers as $fiber) {
    $fiber->resume();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
4: 89
3: 10
2: 63
1: 75
6: 41
5: 56
0: 16
7: 60
7: 34
6: 58
1: 74
4: 63
3: 3
5: 42
2: 45
0: 86
```

### Veja também

- [Random\Engine\Xoshiro256StarStar::jumpLong()](random-engine-xoshiro256starstar.jumplong.md) - Avança eficientemente o mecanismo em 2^192 passos

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
