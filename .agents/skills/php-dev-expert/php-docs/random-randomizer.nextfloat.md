# Obtém um float do intervalo aberto à direita [0,0, 1,0)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.nextfloat.php

---

# Random\Randomizer::nextFloat

(PHP 8 >= 8.3.0)

Random\Randomizer::nextFloat — Obtém um float do intervalo aberto à direita [0,0, 1,0)

### Descrição

public function **Random\Randomizer::nextFloat**(): [float](language.types.float.md)

Retorna um float uniformemente selecionado e equidistribuído do intervalo aberto à direita
de `0.0` até, mas não incluindo,
`1.0`.

A chance de um float retornado estar dentro de um determinado subintervalo aberto à direita
é proporcional ao tamanho do subintervalo.
Isso significa que a chance de um float ser *menor que* `0.5`
é de 50%, o que é igual à chance de um float ser *pelo menos* `0.5`.
Da mesma forma, a chance de um float estar dentro do intervalo aberto à direita de
`0.2` até, mas não incluindo, `0.25` é
exatamente 5%.

Esta propriedade facilita o uso de **Random\Randomizer::nextFloat()**
para gerar um booleano aleatório com uma determinada chance, verificando se o float retornado é
*menor que* uma determinada chance.

> **Nota**:
>
> O domínio dos floats retornáveis ​​de **Random\Randomizer::nextFloat()**
> é idêntico ao de `Randomizer::getFloat(0.0, 1.0, IntervalBoundary::ClosedOpen)`.
>
> A implementação interna de **Random\Randomizer::nextFloat()** é mais
> eficiente.

**Cuidado**

Escalar o valor de retorno para um intervalo diferente usando multiplicação
ou adição (a chamada transformação afim) pode resultar em um viés
no valor resultante, já que os floats não são igualmente densos na reta numérica.
Como nem todos os valores podem ser representados exatamente por um float, o
resultado da transformação afim também pode resultar em valores fora
do intervalo solicitado devido ao arredondamento implícito.
Uma [explicação detalhada](random-randomizer.getfloat.md#random-randomizer.getfloat.affine-transformation)
dos problemas com a transformação afim é fornecida na documentação
de [Random\Randomizer::getFloat()](random-randomizer.getfloat.md).

Use [Random\Randomizer::getFloat()](random-randomizer.getfloat.md) para gerar um
float aleatório dentro de um intervalo arbitrário. Use [Random\Randomizer::getInt()](random-randomizer.getint.md)
para gerar um inteiro aleatório dentro de um intervalo arbitrário.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um float uniformemente selecionado e equidistribuído do intervalo aberto à direita (`IntervalBoundary::ClosedOpen`)
[0,0, 1,0).
`0.0` é um possível valor de retorno, `1.0` não é.

### Erros/Exceções

- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::nextFloat()****

```
<?php
$r = new \Random\Randomizer();

// O booleano resultante será verdadeiro com a chance fornecida.
$chance = 0.5;

$bool = $r->nextFloat() < $chance;

echo ($bool ? "Você ganhou" : "Você perdeu"), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Você ganhou
```

**Exemplo #2 Escala incorreta usando uma transformação afim**

```
<?php
final class MaxEngine implements Random\Engine {
    public function generate(): string {
        return "\xff";
    }
}

$randomizer = new \Random\Randomizer(new MaxEngine);

$min = 3.5;
$max = 4.5;

// NÃO FAÇA ISTO:
//
// Isso retornará 4.5, apesar da amostragem nextFloat() de
// um intervalo aberto à direita, que nunca retornará 1.
printf("Escala errada: %.17g", $randomizer->nextFloat() * ($max - $min) + $min);

// Correto:
// $randomizer->getFloat($min, $max, \Random\IntervalBoundary::ClosedOpen);
?>
```

O exemplo acima produzirá:

```
Escala errada: 4.5
```

### Veja também

- [Random\Randomizer::getFloat()](random-randomizer.getfloat.md) - Obtém um float selecionado uniformemente

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
