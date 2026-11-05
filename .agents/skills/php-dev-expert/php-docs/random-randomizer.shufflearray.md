# Obtém uma permutação de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.shufflearray.php

---

# Random\Randomizer::shuffleArray

(PHP 8 >= 8.2.0)

Random\Randomizer::shuffleArray — Obtém uma permutação de um array

### Descrição

public function **Random\Randomizer::shuffleArray**([array](language.types.array.md) `$array`): [array](language.types.array.md)

Retorna uma permutação selecionada uniformemente do `array` de entrada.

Cada permutação possível do `array` de entrada tem a mesma probabilidade de ser retornada.

### Parâmetros

`array`
:   O [array](language.types.array.md) cujos valores são embaralhados.

    O [array](language.types.array.md) de entrada não será modificado.

### Valor Retornado

Uma permutação dos valores de `array`.

As chaves do `array` de entrada não serão preservadas;
o [array](language.types.array.md) retornado será uma lista ([array\_is\_list()](function.array-is-list.md)).

### Erros/Exceções

- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::shuffleArray()****

```
<?php
$r = new \Random\Randomizer();

$frutas = [ 'vermelho' => '🍎', 'verde' => '🥝', 'amarelo' => '🍌', 'rosa' => '🍑', 'roxo' => '🍇' ];

// Embaralha o array:
echo "Salada: ", implode(', ', $r->shuffleArray($frutas)), "\n";

// Embaralha novamente:
echo "Outra salada: ", implode(', ', $r->shuffleArray($frutas)), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Salada: 🍎, 🥝, 🍇, 🍌, 🍑
Outra salada: 🍑, 🍇, 🥝, 🍎, 🍌
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
