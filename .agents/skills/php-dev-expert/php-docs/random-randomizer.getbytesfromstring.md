# Obtém bytes aleatórios de uma string de origem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.getbytesfromstring.php

---

# Random\Randomizer::getBytesFromString

(PHP 8 >= 8.3.0)

Random\Randomizer::getBytesFromString — Obtém bytes aleatórios de uma string de origem

### Descrição

public function **Random\Randomizer::getBytesFromString**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$length`): [string](language.types.string.md)

Gera uma string contendo bytes aleatórios selecionados uniformemente a partir da
`string` de entrada com o comprimento solicitado em `length`.

A chance de um byte ser selecionado é proporcional à sua participação
na `string` de entrada. Se cada byte ocorrer
a mesma quantidade de vezes, cada byte terá a mesma probabilidade de ser selecionado.

### Parâmetros

`string`
:   A [string](language.types.string.md) da qual os bytes retornados são selecionados.

`length`
:   O comprimento da [string](language.types.string.md) aleatória que deve ser retornada em bytes; deve ser `1` ou maior.

### Valor Retornado

Uma [string](language.types.string.md) contendo o número solicitado de bytes aleatórios retirados da `string` de entrada.

### Erros/Exceções

- Se `string` estiver vazio,
  um [ValueError](class.valueerror.md) será gerado.
- Se o valor de `length` for menor que `1`,
  um [ValueError](class.valueerror.md) será gerado.
- Qualquer erro ou exceção [Throwable](class.throwable.md) lançados pelo método [Random\Engine::generate()](random-engine.generate.md)
  do mecanismo [`Random\Randomizer::$engine`](class.random-randomizer.md#random-randomizer.props.engine) subjacente.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::getBytesFromString()****

```
<?php
$randomizer = new \Random\Randomizer();

printf(
    "%s.example.com",
    $randomizer->getBytesFromString('abcdefghijklmnopqrstuvwxyz0123456789', 16)
);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
3zsw04eiubcf82jd.example.com
```

**Exemplo #2 Gerando um código aleatório para autenticação multifator**

```
<?php
// O mecanismo Secure é o padrão, mas o tornamos explícito porque
// códigos multifatoriais são sensíveis à segurança.
$randomizer = new \Random\Randomizer(new \Random\Engine\Secure());

echo implode('-', str_split($randomizer->getBytesFromString('0123456789', 20), 5));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
11551-80418-27047-42075
```

**Exemplo #3 Selecionando de uma string com distribuição não uniforme**

```
<?php
$randomizer = new \Random\Randomizer();

echo $randomizer->getBytesFromString('aaaaabcdef', 20);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
fddacbeaaeaaacaaaaca
```

### Veja também

- [Random\Randomizer::getBytes()](random-randomizer.getbytes.md) - Obtém bytes aleatórios

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
