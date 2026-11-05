# Embaralha um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.shuffle.php

---

# shuffle

(PHP 4, PHP 5, PHP 7, PHP 8)

shuffle — Embaralha um array

### Descrição

function **shuffle**([array](language.types.array.md) `&$array`): [true](language.types.singleton.md)

Essa função embaralha (mistura de forma aleatória os elementos de) um array.

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

`array`
:   O array.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | O algoritmo interno de randomização [mudou](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) para o Gerado de Números Aleatórios [» Mersenne Twister](https://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html) no lugar da função rand do libc. |

### Examples

**Exemplo #1 Exemplo de **shuffle()****

```
<?php
$numeros = range(1,20);
shuffle($numeros);
foreach ($numeros as $numero) {
    echo "$numero ";
}
?>
```

### Notas

> **Nota**:
>
> Esta função
> atribui novas chaves aos elementos do `array`.
> Ela removerá todas as chaves existentes que possam ter sido atribuídas, em vez
> de apenas reordenar as chaves.

> **Nota**:
>
> Redefine o ponteiro interno do array para o primeiro elemento.

### Veja também

- [Random\Randomizer::shuffleArray()](random-randomizer.shufflearray.md) - Obtém uma permutação de um array
- [Random\Randomizer::shuffleBytes()](random-randomizer.shufflebytes.md) - Obtém uma permutação byte a byte de uma string
- [Random\Randomizer::pickArrayKeys()](random-randomizer.pickarraykeys.md) - Seleciona chaves aleatórias de um array
- [Comparação entre as funções de ordenação de array](array.sorting.md)

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
