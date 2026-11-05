# Gera um número inteiro aleatório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rand.php

---

# rand

(PHP 4, PHP 5, PHP 7, PHP 8)

rand — Gera um número inteiro aleatório

### Descrição

function **rand**(): [int](language.types.integer.md)

function **rand**([int](language.types.integer.md) `$min`, [int](language.types.integer.md) `$max`): [int](language.types.integer.md)

Se chamado sem os argumentos opcionais `min`,
`max` **rand()**
retorna um número inteiro pseudo-aleatório entre 0 e
[getrandmax()](function.getrandmax.md). Se a intenção for obter um número aleatório
entre 5 e 15 (inclusive), por exemplo, use `rand(5,
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

> **Nota**:
>
> Anteriormente ao PHP 7.1.0, [getrandmax()](function.getrandmax.md) resultava em apenas 32767 em algumas
> plataformas (como o Windows por exemplo). Se for necessário um intervalo maior que 32767, especificar
> `min` e `max` permitirá a
> criação de um intervalo maior que esse ou pode ser considerado usar
> [mt\_rand()](function.mt-rand.md) alternativamente.

> **Nota**:
>
> A partir do PHP 7.1.0, **rand()** usa o mesmo
> gerador de números aleatórios que [mt\_rand()](function.mt-rand.md). Para preservar
> a compatibilidade com versões anteriores, **rand()** permite
> que `max` seja menor que `min`
> em vez de retornar **`false`** como [mt\_rand()](function.mt-rand.md).

### Parâmetros

`min`
:   O menor valor a ser retornado (padrão: 0)

`max`
:   O valor mais alto a ser retornado (padrão: [getrandmax()](function.getrandmax.md))

### Valor Retornado

Um valor pseudoaleatório entre `min`
(ou 0) e `max` (ou [getrandmax()](function.getrandmax.md), inclusive).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.2.0 | **rand()** [recebeu uma correção](migration72.incompatible.md#migration72.incompatible.rand-mt_rand-output) para um bug de descontinuação de módulo. Isso significa que as sequências geradas com uma semente específica podem ser diferentes do PHP 7.1 em máquinas de 64 bits. |
| 7.1.0 | **rand()** [foi transformado](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) em um apelido de [mt\_rand()](function.mt-rand.md). |

### Examples

**Exemplo #1 Exemplo de **rand()****

```
<?php
echo rand(), "\n";
echo rand(), "\n";

echo rand(5, 15), "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
7771
22264
11
```

### Notas

**Aviso**

O intervalo `min` `max` deve estar
dentro do intervalo [getrandmax()](function.getrandmax.md). Ou seja,
abs(`max` - `min`) <=
[getrandmax()](function.getrandmax.md).
Caso contrário, **rand()** poderá retornar números aleatórios de baixa qualidade.

### Veja também

- [srand()](function.srand.md) - Semeia o gerador de números aleatórios
- [getrandmax()](function.getrandmax.md) - Mostrar o maior valor aleatório possível
- [mt\_rand()](function.mt-rand.md) - Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister
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
