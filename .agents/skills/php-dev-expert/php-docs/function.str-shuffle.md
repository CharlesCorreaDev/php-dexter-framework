# Embaralha uma string aleatoriamente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.str-shuffle.php

---

# str\_shuffle

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

str\_shuffle — Embaralha uma string aleatoriamente

### Descrição

function **str\_shuffle**([string](language.types.string.md) `$string`): [string](language.types.string.md)

**str\_shuffle()** embaralha uma string. Uma permutação
de todas as possíveis é criada.

**Cuidado**

Esta função não gera valores criptograficamente seguros e *não deve*
ser usada para propósitos criptográficos ou fins que exijam que os valores retornados sejam impossíveis de adivinhar.

Se aleatoriedade criptograficamente segura for necessária, a classe [Random\Randomizer](class.random-randomizer.md) pode ser
usada com o mecanismo [Random\Engine\Secure](class.random-engine-secure.md). Para casos de uso simples, as funções [random\_int()](function.random-int.md)
e [random\_bytes()](function.random-bytes.md) fornecem uma API conveniente e segura que é garantida pelo
CSPRNG do sistema operacional.

**Cuidado**

Esta função usa a instância global do Mt19937 (“Mersenne Twister”) como a fonte de aleatoriedade a por isso compartilha seu estado com todas as outras funções que usam o Mt19937 global.
Usar qualquer uma destas funções avança a sequência para *todas* as outras funções, independentemente do escopo.

Gerar sequências repetíveis ao semear [mt\_srand()](function.mt-srand.md) ou [srand()](function.srand.md) com um valor conhecido também gerará saída repetível desta função.

Prefira usar métodos de [Random\Randomizer](class.random-randomizer.md) em todo código novo.

### Parâmetros

`string`
:   A string de entrada.

### Valor Retornado

Retorna a string embaralhada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | O algoritmo interno de randomização [mudou](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) e agora usa o Gerador de Números Aleatórios [» Mersenne Twister](https://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html) em vez da função rand da biblioteca libc. |

### Examples

**Exemplo #1 Exemplo de **str\_shuffle()****

```
<?php
$str = 'abcdef';
$shuffled = str_shuffle($str);

// Isto exibirá algo como: bfdaec
echo $shuffled;
?>
```

### Veja também

- [Random\Randomizer::shuffleBytes()](random-randomizer.shufflebytes.md) - Obtém uma permutação byte a byte de uma string
- [Random\Randomizer::shuffleArray()](random-randomizer.shufflearray.md) - Obtém uma permutação de um array

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
