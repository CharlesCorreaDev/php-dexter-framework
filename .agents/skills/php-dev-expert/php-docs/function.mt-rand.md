# Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mt-rand.php

---

# mt\_rand

(PHP 4, PHP 5, PHP 7, PHP 8)

mt\_rand — Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister

### Descrição

function **mt\_rand**(): [int](language.types.integer.md)

function **mt\_rand**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`): [int](language.types.integer.md)

Muitos geradores de números aleatórios de libcs mais antigos
têm características duvidosas ou desconhecidas e são lentos.
A função **mt\_rand()** é um substituto imediato
para a antiga [rand()](function.rand.md). Ele usa um gerador de
números aleatórios com características conhecidas usando o
[» Mersenne Twister](https://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html), que
produzirá números aleatórios quatro vezes mais rápido do que o
libc rand() médio fornece.

Se chamado sem os argumentos opcionais `min`,
`max` **mt\_rand()**
retorna um valor pseudo-aleatório entre 0 e
[mt\_getrandmax()](function.mt-getrandmax.md). Se você quiser um número aleatório
entre 5 e 15 (inclusive), por exemplo, use `mt_rand(5,
15)`.

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

`min`
:   Valor mais baixo opcional a ser retornado (padrão: 0)

`max`
:   Valor mais alto opcional a ser retornado (padrão: [mt\_getrandmax()](function.mt-getrandmax.md))

### Valor Retornado

Um valor inteiro aleatório entre `min` (ou 0)
e `max` (ou [mt\_getrandmax()](function.mt-getrandmax.md), inclusive).

### Erros/Exceções

- Se `max` for menor que `min`, uma
  exceção [ValueError](class.valueerror.md) será lançada.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Uma exceção [ValueError](class.valueerror.md) será lançada se `max` for menor que `min`; anteriormente, um **`E_WARNING`** era emitido e a função retornava **`false`**. |
| 7.2.0 | **mt\_rand()** [recebeu uma correção](migration72.incompatible.md#migration72.incompatible.rand-mt_rand-output) para um bug de descontinuação de módulo. Isso significa que as sequências geradas com uma semente específica podem ser diferentes do PHP 7.1 em máquinas de 64 bits. |
| 7.1.0 | [rand()](function.rand.md) [foi transformado](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) em um apelido de **mt\_rand()**. |
| 7.1.0 | **mt\_rand()** [foi atualizado](migration71.incompatible.md#migration71.incompatible.fixes-to-mt_rand-algorithm) para usar a versão fixa e correta do algoritmo Mersenne Twister. Para voltar ao comportamento antigo, use [mt\_srand()](function.mt-srand.md) com **`MT_RAND_PHP`** como segundo parâmetro. |

### Examples

**Exemplo #1 Exemplo de **mt\_rand()****

```
<?php
echo mt_rand(), "\n";
echo mt_rand(), "\n";

echo mt_rand(5, 15), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1604716014
1478613278
6
```

### Notas

**Aviso**

O intervalo `min` `max` deve
estar dentro do intervalo [mt\_getrandmax()](function.mt-getrandmax.md). Ou seja, (`max` -
`min`) <= [mt\_getrandmax()](function.mt-getrandmax.md)
Caso contrário, **mt\_rand()** poderá retornar números aleatórios piores
do que deveria.

### Veja também

- [mt\_srand()](function.mt-srand.md) - Semeia o Gerador de Números Aleatórios Mersenne Twister
- [mt\_getrandmax()](function.mt-getrandmax.md) - Mostra o maior valor aleatório possível
- [random\_int()](function.random-int.md) - Obtém um número inteiro selecionado uniformemente e criptograficamente seguro
- [random\_bytes()](function.random-bytes.md) - Obtém bytes aleatórios criptograficamente seguros

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
