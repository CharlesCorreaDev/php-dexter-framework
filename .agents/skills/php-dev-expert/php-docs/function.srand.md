# Semeia o gerador de números aleatórios

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.srand.php

---

# srand

(PHP 4, PHP 5, PHP 7, PHP 8)

srand — Semeia o gerador de números aleatórios

### Descrição

function **srand**([?](language.types.null.md)[int](language.types.integer.md) `$seed` = **`null`**, [int](language.types.integer.md) `$mode` = **`MT_RAND_MT19937`**): [void](language.types.void.md)

Semeia o gerador de números aleatórios com
`seed` ou com um valor aleatório
se nenhum `seed` for informado.

> **Nota**:
>
> Não é necessário
> inicializar o gerador de números aleatórios com **srand()** ou
> [mt\_srand()](function.mt-srand.md), pois isso é feito automaticamente.

**Cuidado**

Como o mecanismo Mt19937 (“Mersenne Twister”) aceita apenas um único inteiro de 32 bits como
semente, o número de sequências aleatórias possíveis é limitado a apenas 232
(ou seja, 4.294.967.296), embora o Mt19937 possua um gigantesco período de 219937-1.

Ao depender da geração aleatória implícita ou explícita de sementes, as duplicações aparecerão
muito mais cedo. Sementes duplicadas são esperadas com probabilidade de 50% depois de menos de
80.000 sementes geradas aleatoriamente de acordo com o problema do aniversário. Uma probabilidade de 10%
de uma semente duplicada acontece depois de gerar aleatoriamente cerca de 30.000 sementes.

Isso torna o Mt19937 inadequado para aplicações em que sequências duplicadas não devem ocorrer com
mais do que uma probabilidade desprezível. Se a geração reproduzível de sementes for necessária, ambos os mecanismos
[Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md) e [Random\Engine\PcgOneseq128XslRr64](class.random-engine-pcgoneseq128xslrr64.md)
suportam sementes muito maiores que são improváveis de colidir aleatoriamente. Se a reprodutibilidade
não for necessária, o mecanismo [Random\Engine\Secure](class.random-engine-secure.md) fornece aleatoriedade
criptograficamente segura.

> **Nota**:
>
> A partir do PHP 7.1.0, **srand()** tornou-se
> um apelido de [mt\_srand()](function.mt-srand.md).

### Parâmetros

`seed`
:   Preenche o estado com valores gerados com um gerador congruente linear
    que foi propagado com `seed` interpretado como um número
    inteiro sem sinal de 32 bits.

    Se `seed` for omitido ou **`null`**, um número inteiro aleatório
    e sem sinal de 32 bits será usado.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | `seed` agora é anulável. |
| 7.1.0 | **srand()** [foi transformado](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) em um apelido de [mt\_srand()](function.mt-srand.md). |

### Veja também

- [rand()](function.rand.md) - Gera um número inteiro aleatório
- [getrandmax()](function.getrandmax.md) - Mostrar o maior valor aleatório possível
- [mt\_srand()](function.mt-srand.md) - Semeia o Gerador de Números Aleatórios Mersenne Twister

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
