# Constrói um novo mecanismo PCG Oneseq 128 XSL RR 64

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-pcgoneseq128xslrr64.construct.php

---

# Random\Engine\PcgOneseq128XslRr64::\_\_construct

(PHP 8 >= 8.2.0)

Random\Engine\PcgOneseq128XslRr64::\_\_construct — Constrói um novo mecanismo PCG Oneseq 128 XSL RR 64

### Descrição

public function **Random\Engine\PcgOneseq128XslRr64::\_\_construct**([string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md) `$seed` = **`null`**)

### Parâmetros

`seed`
:   A forma como o estado interno de 128 bits (16 bytes) consistindo em um inteiro sem sinal de 128 bits é
    semeado depende do tipo usado como `seed`.

    | Tipo | Descrição |
    | --- | --- |
    | [null](language.types.null.md) | Preenche o estado com 16 bytes aleatórios gerados usando o CSPRNG. |
    | [int](language.types.integer.md) | Preenche o estado definindo-o como `0`, avançando o mecanismo um passo, adicionando o valor de `seed` interpretado como um inteiro de 64 bits sem sinal, e avançando o mecanismo outro passo. |
    | [string](language.types.string.md) | Preenche o estado interpretando uma [string](language.types.string.md) de 16 bytes como um inteiro little-endian sem sinal de 128 bits. |

### Erros/Exceções

- Se o comprimento de uma [string](language.types.string.md) `seed` não for
  16 bytes, um [ValueError](class.valueerror.md) será gerado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\PcgOneseq128XslRr64::\_\_construct()****

```
<?php
// Usa uma semente de 128 bits aleatória.
$e = new \Random\Engine\PcgOneseq128XslRr64();

$r = new \Random\Randomizer($e);
?>
```

**Exemplo #2 Derivando uma semente de uma [string](language.types.string.md)**

```
<?php
$string = "My string seed";

// Hash da string com SHA-256 truncado usando saída binária
// para transformar a $string em uma semente de 128 bits. Usar a mesma
// string resultará na mesma sequência de aleatoriedade.
$e = new \Random\Engine\PcgOneseq128XslRr64(
    substr(hash('sha256', $string, binary: true), 0, 16)
);

echo bin2hex($e->generate()), "\n";
?>
```

O exemplo acima produzirá:

```
8333ef59315b16d8
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
