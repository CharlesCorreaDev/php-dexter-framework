# Obtém um float selecionado uniformemente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.getfloat.php

---

# Random\Randomizer::getFloat

(PHP 8 >= 8.3.0)

Random\Randomizer::getFloat — Obtém um float selecionado uniformemente

### Descrição

public function **Random\Randomizer::getFloat**([float](language.types.float.md) `$min`, [float](language.types.float.md) `$max`, [Random\IntervalBoundary](enum.random-intervalboundary.md) `$boundary` = **`Random\IntervalBoundary::ClosedOpen`**): [float](language.types.float.md)

Retorna um float uniformemente selecionado e equidistribuído de um intervalo solicitado.

Devido à precisão limitada, nem todos os números reais podem ser representados exatamente como
um número de ponto flutuante.
Se um número não puder ser representado exatamente, ele será arredondado para o
valor exato representável mais próximo.
Além disso, números flutuantes não são igualmente densos em toda a reta numérica.
Como números flutuantes usam um expoente binário, a distância entre dois números flutuantes vizinhos
dobra a cada potência de dois.
Em outras palavras: há o mesmo número de floats representáveis ​​entre
`1.0` e `2.0`
como entre
`2.0` e `4.0`,
`4.0` e `8.0`,
`8.0` e `16.0`,
e assim por diante.

A amostragem aleatória de um número arbitrário dentro do intervalo solicitado, por exemplo,
dividindo dois números inteiros, pode resultar em uma distribuição enviesada por esse motivo.
O arredondamento necessário fará com que alguns números flutuantes sejam retornados com mais frequência do que
outros, especialmente em torno de potências de dois quando a densidade de números flutuantes muda.

**Random\Randomizer::getFloat()** implementa um algoritmo que
retornará um ponto flutuante selecionado uniformemente do maior conjunto possível de
pontos flutuantes exatamente representáveis ​​e equidistribuídos dentro do intervalo solicitado.
A distância entre os pontos flutuantes selecionáveis ​​("tamanho do passo") corresponde à distância
entre os pontos flutuantes com a menor densidade, ou seja, a distância entre os pontos flutuantes
no limite do intervalo com o maior valor absoluto.
Isso significa que nem todos os pontos flutuantes representáveis ​​dentro de um determinado intervalo podem ser
retornados se o intervalo cruzar uma ou mais potências de dois.
O passo a passo começará a partir do limite do intervalo com o maior valor absoluto
para garantir que os passos se alinhem com os pontos flutuantes exatamente representáveis.

Limites de intervalos fechados sempre serão incluídos no conjunto de floats
selecionáveis.
Portanto, se o tamanho do intervalo não for um múltiplo exato do tamanho do passo e
o limite com o menor valor absoluto for um limite fechado, a distância
entre esse limite e seu float selecionável mais próximo será menor que o
tamanho do passo.

**Cuidado**

O pós-processamento dos floats retornados provavelmente quebrará a equidistribuição uniforme,
porque os floats intermediários dentro de uma operação matemática
estão passando por arredondamento implícito.
O intervalo solicitado deve corresponder o mais próximo possível ao intervalo desejado
e o arredondamento só deve ser realizado como uma operação explícita antes
de exibir o número selecionado para um usuário.

#### Explicação do algoritmo usando valores de exemplo

Para exemplificar o funcionamento do algoritmo, considere uma representação de ponto flutuante
que utiliza uma mantissa de 3 bits.
Esta representação é capaz de representar 8 valores de ponto flutuante
diferentes entre potências de dois consecutivas.
Isso significa que entre
`1.0` e `2.0` todos os passos de tamanho `0.125`
são exatamente representáveis ​​e entre `2.0` e `4.0`
todos os passos de tamanho `0.25` são exatamente representáveis.
Na realidade, os floats do PHP utilizam uma mantissa de 52 bits e podem representar 252
valores diferentes entre cada potência de dois.
Isso significa que

- `1.0`
- `1.125`
- `1.25`
- `1.375`
- `1.5`
- `1.625`
- `1.75`
- `1.875`
- `2.0`
- `2.25`
- `2.5`
- `2.75`
- `3.0`
- `3.25`
- `3.5`
- `3.75`
- `4.0`

são os floats exatamente representáveis ​​entre `1.0`
e `4.0`.

Agora, considere que `$randomizer->getFloat(1.625, 2.5, IntervalBoundary::ClosedOpen)`
é chamado, ou seja, um float aleatório começando em `1.625` até, mas não incluindo,
`2.5` ser solicitado.
O algoritmo primeiro determina o tamanho do passo na fronteira com o maior valor absoluto
(`2.5`). O tamanho do passo nessa fronteira é `0.25`.

Observe que o tamanho do intervalo solicitado é `0.875`, que
não é um múltiplo exato de `0.25`.
Se o algoritmo começasse a avançar no limite inferior `1.625`,
encontraria `2.125`, que não é exatamente representável e
sofreria arredondamento implícito.
Portanto, o algoritmo começa a avançar no limite superior `2.5`.
Os valores selecionáveis ​​são:

- `2.25`
- `2.0`
- `1.75`
- `1.625`

`2.5` não está incluído, pois o limite superior do intervalo solicitado
é um limite aberto.
`1.625` está incluído, embora sua distância até o valor mais próximo
`1.75` seja `0.125`, que é menor que o
tamanho do passo previamente determinado de `0.25`.
O motivo para isso é que o intervalo solicitado é fechado no limite inferior
(`1.625`) e limites fechados são sempre incluídos.

Por fim, o algoritmo seleciona uniformemente um dos quatro valores selecionáveis ​​aleatoriamente
e o retorna.

##### Por que dividir dois números inteiros não funciona

No exemplo anterior, há oito números de ponto flutuante representáveis
entre cada subintervalo delimitado por uma potência de dois.
Para exemplificar por que dividir dois inteiros não funcionaria bem para gerar
um número flutuante aleatório, considere que há 16 números de ponto flutuante equidistribuídos
no intervalo aberto à direita de `0.0` até, mas não incluindo,
`1.0`. Metade deles são os oito valores exatamente representáveis
entre `0.5` e `1.0`, a outra metade são os
valores entre `0.0` e `1.0` cujo passo
é de `0.0625`.
Eles podem ser facilmente gerados dividindo um número inteiro aleatório entre `0`
e `15` por `16` para obter um dos seguintes:

- `0.0`
- `0.0625`
- `0.125`
- `0.1875`
- `0.25`
- `0.3125`
- `0.375`
- `0.4375`
- `0.5`
- `0.5625`
- `0.625`
- `0.6875`
- `0.75`
- `0.8125`
- `0.875`
- `0.9375`

Este float aleatório poderia ser escalado para o intervalo aberto à direita de `1.625`
até, mas não incluindo, `2.75`, multiplicando-o pelo tamanho
do intervalo (`0.875`) e adicionando o mínimo `1.625`.
Essa chamada transformação afim resultaria nos valores:

- `1.625` arredondado para `1.625`
- `1.679` arredondado para `1.625`
- `1.734` arredondado para `1.75`
- `1.789` arredondado para `1.75`
- `1.843` arredondado para `1.875`
- `1.898` arredondado para `1.875`
- `1.953` arredondado para `2.0`
- `2.007` arredondado para `2.0`
- `2.062` arredondado para `2.0`
- `2.117` arredondado para `2.0`
- `2.171` arredondado para `2.25`
- `2.226` arredondado para `2.25`
- `2.281` arredondado para `2.25`
- `2.335` arredondado para `2.25`
- `2.390` arredondado para `2.5`
- `2.445` arredondado para `2.5`

Observe como o limite superior de `2.5` seria retornado, apesar de
ser um limite aberto e, portanto, excluído.
Observe também como `2.0` e `2.25` têm o dobro
de probabilidade de serem retornados em comparação com os outros valores.

### Parâmetros

`min`
:   O limite inferior do intervalo.

`max`
:   O limite superior do intervalo.

`boundary`
:   Especifica se os limites do intervalo são valores de retorno possíveis.

### Valor Retornado

Um float uniformemente selecionado e equidistribuído do intervalo especificado por `min`,
`max` e `boundary`.
Se `min` e `max` são valores de retorno possíveis depende
do valor de `boundary`.

### Erros/Exceções

- Se o valor de `min` não for finito ([is\_finite()](function.is-finite.md)),
  um [ValueError](class.valueerror.md) será gerado.
- Se o valor de `max` não for finito ([is\_finite()](function.is-finite.md)),
  um [ValueError](class.valueerror.md) será lançado.
- Se o intervalo solicitado não contiver nenhum valor,
  um [ValueError](class.valueerror.md) será gerado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::getFloat()****

```
<?php
$randomizer = new \Random\Randomizer();

// Observe que a granularidade da latitude é o dobro da
// granularidade da longitude.
//
// Para a latitude, o valor pode ser -90 e 90.
// Para a longitude, o valor pode ser 180, mas não -180, porque
// -180 e 180 referem-se à mesma longitude.
printf(
    "Lat: %+.6f Lng: %+.6f",
    $randomizer->getFloat(-90, 90, \Random\IntervalBoundary::ClosedClosed),
    $randomizer->getFloat(-180, 180, \Random\IntervalBoundary::OpenClosed),
);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Lat: +69.244304 Lng: -53.548951
```

### Notas

> **Nota**:
>
> Este método implementa o algoritmo de seção γ, conforme publicado em
> [» 
> Drawing Random Floating-Point Numbers from an Interval.
> Frédéric Goualard, ACM Trans. Model. Comput. Simul., 32:3, 2022](https://dl.acm.org/doi/10.1145/3503512)
> para obter as propriedades comportamentais desejadas.

**Cuidado**

O underflow é intencionalmente deixado sem tratamento no algoritmo de seção γ.
Isso pode resultar em valores incorretos sendo retornados para intervalos com
limites na faixa subnormal de números de ponto flutuante, ou seja,
para limites com um valor absoluto menor que aproximadamente
`2-1020` (cerca de `8.9e-308`).

### Veja também

- [Random\Randomizer::nextFloat()](random-randomizer.nextfloat.md) - Obtém um float do intervalo aberto à direita [0,0, 1,0)
- [Random\Randomizer::getInt()](random-randomizer.getint.md) - Obtém um inteiro selecionado uniformemente

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
