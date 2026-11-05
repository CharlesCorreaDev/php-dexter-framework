# Obtém uma permutação byte a byte de uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.shufflebytes.php

---

# Random\Randomizer::shuffleBytes

(PHP 8 >= 8.2.0)

Random\Randomizer::shuffleBytes — Obtém uma permutação byte a byte de uma string

### Descrição

public function **Random\Randomizer::shuffleBytes**([string](language.types.string.md) `$bytes`): [string](language.types.string.md)

Retorna uma permutação uniformemente selecionada dos `bytes` de entrada.

Cada permutação possível dos `bytes` de entrada tem a mesma probabilidade de ser retornada.

### Parâmetros

`bytes`
:   A [string](language.types.string.md) cujos bytes são embaralhados.

    A [string](language.types.string.md) de entrada não será modificada.

### Valor Retornado

Uma permutação dos bytes do parâmetro `bytes`.

### Erros/Exceções

- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::shuffleBytes()****

```
<?php
$r = new \Random\Randomizer();

// Embaralhar bytes em uma string:
echo "«", $r->shuffleBytes("PHP is great!"), "»\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
« ga rHs!PPiet»
```

**Exemplo #2 O embaralhamento byte a byte quebra os caracteres Unicode**

```
<?php
$r = new \Random\Randomizer();

$unicode = "🍎, 🥝, 🍌, 🍑, 🍇";
$shuffled = $r->shuffleBytes( $unicode );

// O embaralhamento byte a byte de caracteres não ASCII os destrói,
// resultando em sequências inválidas (indicadas pelo caractere
// de substituição Unicode) ou até mesmo caracteres totalmente
// diferentes aparecendo na saída.
echo "Original: ", $unicode, "\n";
echo "Embaralhado: «", $shuffled, "»\n";
echo "Bytes embaralhados: ", bin2hex($shuffled), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Original: 🍎, 🥝, 🍌, 🍑, 🍇
Shuffled: «� ��,�����🍟,� �� �, �,��»
Shuffled Bytes: 87208e912c8d9fa5f0f0f09f8d9f2cf09f208c9d20f02c209f2c8d8d
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
