# Obtém um inteiro positivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.nextint.php

---

# Random\Randomizer::nextInt

(PHP 8 >= 8.2.0)

Random\Randomizer::nextInt — Obtém um inteiro positivo

### Descrição

public function **Random\Randomizer::nextInt**(): [int](language.types.integer.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um inteiro positivo entre 0 e um valor máximo, dependendo do número de bytes
retornado de [Random\Engine::generate()](random-engine.generate.md).
O máximo exato pode ser calculado como 2$engine\_bytes \* 8 - 1 - 1.

### Erros/Exceções

- Para evitar inconsistências, o PHP de 32 bits lançará [Random\RandomException](class.random-randomexception.md)
  se o tamanho da saída de [Random\Engine::generate()](random-engine.generate.md) exceder 32 bits,
  pois o inteiro selecionado não pode ser retornado sem perdas.
  Isso afeta os mecanismos nativos de 64 bits [Random\Engine\PcgOneseq128XslRr64](class.random-engine-pcgoneseq128xslrr64.md) e
  [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md). Qualquer mecanismo de ambiente de usuário
  que retorne mais de 4 bytes de aleatoriedade também é afetado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::nextInt()****

```
<?php
$r = new \Random\Randomizer();

// "Próximo" inteiro aleatório:
echo $r->nextInt(), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
8041689838856078718
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
