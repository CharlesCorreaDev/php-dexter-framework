# Geradores, visão geral

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.generators.overview.php

---

## Geradores, visão geral

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Os geradores fornecem uma maneira fácil de implementar
[iteradores](language.oop5.iterations.md) simples sem a
sobrecarga ou complexidade de criar uma classe que implemente
a interface [Iterator](class.iterator.md).

Um gerador oferece uma maneira conveniente de fornecer dados a loops [`foreach`](control-structures.foreach.md)
sem ter que construir um array na memória antecipadamente, o que pode fazer com que o programa
exceda um limite de memória ou exija uma quantidade considerável de
tempo de processamento para essa geração. Em vez disso, uma função geradora pode ser usada,
que é o mesmo que uma
[função](functions.user-defined.md) normal, exceto que
ao invés do
[retorno](functions.returning-values.md) ocorrer uma única vez, um
gerador pode executar [`yield`](language.generators.syntax.md#control-structures.yield) quantas vezes forem necessárias para fornecer os
valores a serem iterados.
Tal como acontece com os iteradores, o acesso aleatório aos dados não é possível.

Um exemplo simples para isso é reimplementar a função
[range()](function.range.md). A função [range()](function.range.md) padrão
tem que gerar um array com cada valor dentro dele e retorná-lo, o que pode
resultar em grandes arrays: por exemplo, chamar
**range(0, 1000000)** irá resultar numa utilização de memória
de mais de 10 MB.

Como alternativa, nós podemos implementar um gerador
`xrange()`, que só precisará de memória suficiente para
criar um objeto [Iterator](class.iterator.md) e acompanhar o estado atual
do gerador internamente, que utiliza menos de 1 kilobyte de memória.

**Exemplo #1 Implementando [range()](function.range.md) como um gerador**

```
<?php
function xrange($start, $limit, $step = 1) {
    if ($start <= $limit) {
        if ($step <= 0) {
            throw new LogicException('O passo precisa ser positivo');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('O passo precisa ser negativo');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

/*
 * Observe abaixo que ambos range() e xrange() tem a mesma
 * saída.
 */

echo 'Números ímpares a partir de range():  ';
foreach (range(1, 9, 2) as $number) {
    echo "$number ";
}
echo "\n";

echo 'Números ímpares a partir de xrange(): ';
foreach (xrange(1, 9, 2) as $number) {
    echo "$number ";
}
```

O exemplo acima produzirá:

```
Números ímpares a partir de range():  1 3 5 7 9
Números ímpares a partir de xrange(): 1 3 5 7 9
```

### Objetos [Generator](class.generator.md)

Quando uma função geradora é chamada, um objeto interno
de tipo [Generator](class.generator.md) é retornado. Este objeto
implementa a interface [Iterator](class.iterator.md) que um objeto
somente leitura de uma direção implementaria, provendo também métodos que
podem ser utilizados para manipular o estado do gerador, incluindo enviar
e retornar valores.

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
