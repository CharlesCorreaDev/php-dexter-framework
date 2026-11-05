# Seleciona chaves aleatórias de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.pickarraykeys.php

---

# Random\Randomizer::pickArrayKeys

(PHP 8 >= 8.2.0)

Random\Randomizer::pickArrayKeys — Seleciona chaves aleatórias de um array

### Descrição

public function **Random\Randomizer::pickArrayKeys**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$num`): [array](language.types.array.md)

Seleciona uniformemente `num` chaves de array distintas do `array` de entrada.

Cada chave do `array` de entrada tem a mesma probabilidade de ser retornada.

**Cuidado**

A seleção das chaves do array depende da estrutura interna do
`array` de entrada. As chaves do array retornadas podem ser diferentes para
dois arrays de entrada iguais e dois [Random\Engine](class.random-engine.md)s com
estado idêntico, dependendo de como os arrays de entrada foram criados.

### Parâmetros

`array`
:   O array cujas chaves são selecionadas.

`num`
:   O número de chaves de array a serem retornadas; deve estar entre `1`
    e o número de elementos no `array`.

### Valor Retornado

Um [array](language.types.array.md) contendo `num` chaves de array distintas de `array`.

O [array](language.types.array.md) retornado será uma lista ([array\_is\_list()](function.array-is-list.md)). Será um subconjunto
do [array](language.types.array.md) retornado por [array\_keys()](function.array-keys.md).

### Erros/Exceções

- Se `num` for menor que `1` ou
  maior que o número de elementos em `array`, um
  [ValueError](class.valueerror.md) será gerado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::pickArrayKeys()****

```
<?php
$r = new \Random\Randomizer();

$frutas = [ 'vermelho' => '🍎', 'verde' => '🥝', 'amarelo' => '🍌', 'rosa' => '🍑', 'roxo' => '🍇' ];

// Escolhe 2 chaves de array aleatórias:
echo "Chaves: ", implode(', ', $r->pickArrayKeys($frutas, 2)), "\n";

// Escolhe outras 3:
echo "Chaves: ", implode(', ', $r->pickArrayKeys($frutas, 3)), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Chaves: amarelo, roxo
Chaves: vermelho, verde, amarelo
```

**Exemplo #2 Escolhendo valores aleatórios**

```
<?php
$r = new \Random\Randomizer();

$frutas = [ 'vermelho' => '🍎', 'verde' => '🥝', 'amarelo' => '🍌', 'rosa' => '🍑', 'roxo' => '🍇' ];

$chaves = $r->pickArrayKeys($frutas, 2);
// Procura os valores das chaves escolhidas.
$selection = array_map(
    static fn ($chave) => $frutas[$chave],
    $chaves
);

echo "Valores: ", implode(', ', $selection), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Valores: 🍎, 🍇
```

### Veja também

- [array\_keys()](function.array-keys.md) - Retorna todas as chaves ou uma parte das chaves de um array

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
