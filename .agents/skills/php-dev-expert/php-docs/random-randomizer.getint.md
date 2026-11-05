# Obtém um inteiro selecionado uniformemente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.getint.php

---

# Random\Randomizer::getInt

(PHP 8 >= 8.2.0)

Random\Randomizer::getInt — Obtém um inteiro selecionado uniformemente

### Descrição

public function **Random\Randomizer::getInt**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`): [int](language.types.integer.md)

### Parâmetros

`min`
:   O menor valor a ser retornado.

`max`
:   O maior valor a ser retornado.

### Valor Retornado

Um inteiro selecionado uniformemente do intervalo fechado
[`min`, `max`]. Tanto
`min` quanto `max` são
valores de retorno possíveis.

### Erros/Exceções

- Se `max` for menor que `min`, um
  [ValueError](class.valueerror.md) será gerado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::getInt()****

```
<?php
$r = new \Random\Randomizer();

// Inteiro aleatório no intervalo:
echo $r->getInt(1, 100), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
42
```

### Veja também

- [random\_int()](function.random-int.md) - Obtém um número inteiro selecionado uniformemente e criptograficamente seguro
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
