# Obtém bytes aleatórios

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.getbytes.php

---

# Random\Randomizer::getBytes

(PHP 8 >= 8.2.0)

Random\Randomizer::getBytes — Obtém bytes aleatórios

### Descrição

public function **Random\Randomizer::getBytes**([int](language.types.integer.md) `$length`): [string](language.types.string.md)

Gera uma string contendo bytes aleatórios selecionados uniformemente com o comprimento solicitado em `length`.

Como os bytes retornados são selecionados de forma completamente aleatória, a string resultante provavelmente
conterá caracteres não imprimíveis ou sequências UTF-8 inválidas. Pode ser necessário
codificá-la antes da transmissão ou exibição.

### Parâmetros

`length`
:   O comprimento da [string](language.types.string.md) aleatória que deve ser retornada em bytes; deve ser `1` ou maior.

### Valor Retornado

Uma [string](language.types.string.md) contendo o número solicitado de bytes aleatórios.

### Erros/Exceções

- Se o valor de `length` for menor que `1`,
  um [ValueError](class.valueerror.md) será gerado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::getBytes()****

```
<?php
$r = new \Random\Randomizer();

echo bin2hex($r->getBytes(8)), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
ebdbe93cd56682c2
```

### Veja também

- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros
- [bin2hex()](function.bin2hex.md) - Converte um dado binário em representação hexadecimal
- [base64\_encode()](function.base64-encode.md) - Codifica dados com MIME base64
- [Random\Randomizer::getBytesFromString()](random-randomizer.getbytesfromstring.md) - Obtém bytes aleatórios de uma string de origem

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
