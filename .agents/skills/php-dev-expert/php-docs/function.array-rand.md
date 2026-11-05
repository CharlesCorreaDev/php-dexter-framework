# Escolhe uma ou mais chaves aleatórias de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-rand.php

---

# array\_rand

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_rand — Escolhe uma ou mais chaves aleatórias de um array

### Descrição

function **array\_rand**([array](language.types.array.md) `$array`, [int](language.types.integer.md) `$num` = 1): [int](language.types.integer.md)|[string](language.types.string.md)|[array](language.types.array.md)

Escolhe aleatóriamente um ou mais itens de um array, e retorna a
chave (ou chaves) do itens selecionados.

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
:   O array de entrada.
    Não pode ser vazio.

`num`
:   Especifica quantos elementos deseja obter.
    Deve ser maior que zero, e menor ou igual ao comprimento do `array`.

### Valor Retornado

Se estiver selecionando apenas um elemento, **array\_rand()** retorna
a chave para este elemento aleatório. De outra forma, ele retorna um array com as chaves desses
elementos selecionados. Assim é possível selecionar os elementos pelas chaves
no array assim como valores aleatórios. Se múltiplas chaves forem retornadas,
elas serão retornadas na ordem em que estavam presentes no array original.

### Erros/Exceções

Lança uma exceção [ValueError](class.valueerror.md) se `array` estiver vazio,
ou se `num` estiver fora do intervalo permitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **array\_rand()** agora lança uma exceção [ValueError](class.valueerror.md) se `num` estiver fora do intervalo; anteriormente um **`E_WARNING`** era emitido, e a função retornava **`null`**. |
| 8.0.0 | **array\_rand()** agora lança uma exceção [ValueError](class.valueerror.md) se `array` estiver vazio; anteriormente um **`E_WARNING`** era emitido, e a função retornava **`null`**. |
| 7.1.0 | O algoritmo de embaralhamento interno [foi alterado](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) para usar o Gerador de Números Aleatórios [» Mersenne Twister](https://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html) em vez da função rand da libc. |

### Examples

**Exemplo #1 Exemplo de **array\_rand()****

```
<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
?>
```

### Veja também

- [Random\Randomizer::pickArrayKeys()](random-randomizer.pickarraykeys.md) - Seleciona chaves aleatórias de um array
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
