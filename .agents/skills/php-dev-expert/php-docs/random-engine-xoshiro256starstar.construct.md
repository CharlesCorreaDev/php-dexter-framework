# Constrói um novo mecanismo xoshiro256**

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-xoshiro256starstar.construct.php

---

# Random\Engine\Xoshiro256StarStar::\_\_construct

(PHP 8 >= 8.2.0)

Random\Engine\Xoshiro256StarStar::\_\_construct — Constrói um novo mecanismo xoshiro256\*\*

### Descrição

public function **Random\Engine\Xoshiro256StarStar::\_\_construct**([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$seed` = **`null`**)

### Parâmetros

`seed`
:   A forma como o estado interno de 256 bits (32 bytes) composto por quatro inteiros de 64 bits sem sinal é
    semeado depende do tipo usado como `seed`.

    | Type | Descrição |
    | --- | --- |
    | [null](language.types.null.md) | Preenche o estado com 32 bytes aleatórios gerados usando o CSPRNG. |
    | [int](language.types.integer.md) | Preenche o estado com quatro valores consecutivos gerados com o algoritmo SplitMix64 que foi semeado com `seed` interpretado como um inteiro de 64 bits sem sinal. |
    | [string](language.types.string.md) | Preenche o estado interpretando uma [string](language.types.string.md) de 32 bytes como quatro inteiros little-endian sem sinal de 64 bits. |

### Erros/Exceções

- Se o comprimento de uma [string](language.types.string.md) `seed` não for
  32 bytes, um [ValueError](class.valueerror.md) será gerado.
- Se uma [string](language.types.string.md) `seed` consistir em
  32 bytes NUL (`"\x00"`), um [ValueError](class.valueerror.md)
  será gerado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\Xoshiro256StarStar::\_\_construct()****

```
<?php
// Usa uma semente de 256 bits aleatória.
$e = new \Random\Engine\Xoshiro256StarStar();

$r = new \Random\Randomizer($e);
?>
```

**Exemplo #2 Derivando uma semente de uma [string](language.types.string.md)**

```
<?php
$string = "My string seed";

// Faça o hash da string com SHA-256 usando a saída binária para transformar a
// $string em uma semente de 256 bits. Usar a mesma string resultará
// na mesma sequência de aleatoriedade.
$e = new \Random\Engine\Xoshiro256StarStar(
    hash('sha256', $string, binary: true)
);

echo bin2hex($e->generate()), "\n";
?>
```

O exemplo acima produzirá:

```
6e013453678388c2
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
