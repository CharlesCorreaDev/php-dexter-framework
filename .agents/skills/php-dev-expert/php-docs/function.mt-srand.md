# Semeia o Gerador de Números Aleatórios Mersenne Twister

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mt-srand.php

---

# mt\_srand

(PHP 4, PHP 5, PHP 7, PHP 8)

mt\_srand — Semeia o Gerador de Números Aleatórios Mersenne Twister

### Descrição

function **mt\_srand**([?](language.types.null.md)[int](language.types.integer.md) `$seed` = **`null`**, [int](language.types.integer.md) `$mode` = **`MT_RAND_MT19937`**): [void](language.types.void.md)

Semeia o gerador de números aleatórios com
`seed` ou com um valor aleatório
se nenhum `seed` for fornecido.

> **Nota**:
>
> Não é necessário
> inicializar o gerador de números aleatórios com [srand()](function.srand.md) ou
> **mt\_srand()**, pois isso é feito automaticamente.

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

### Parâmetros

`seed`
:   Preenche o estado com valores gerados com um gerador congruente linear
    que foi propagado com `seed` interpretado como um número
    inteiro sem sinal de 32 bits.

    Se `seed` for omitido ou **`null`**, um número inteiro aleatório
    e sem sinal de 32 bits será usado.

`mode`
:   Use uma das constantes a seguir para especificar a implementação do algoritmo a ser usado.

    - **`MT_RAND_MT19937`**:
      A implementação correta do Mt19937, disponível a partir do PHP 7.1.0.
    - **`MT_RAND_PHP`**
      Usa uma implementação incorreta do Mersenne Twister que foi usada como padrão até o PHP 7.1.0.
      Este modo está disponível para compatibilidade com versões anteriores.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | `seed` agora é anulável. |
| 7.1.0 | [srand()](function.srand.md) [foi transformado em](migration71.incompatible.md#migration71.incompatible.rand-srand-aliases) um apelido de **mt\_srand()**. |
| 7.1.0 | [mt\_rand()](function.mt-rand.md) [foi atualizado](migration71.incompatible.md#migration71.incompatible.fixes-to-mt_rand-algorithm) para usar a versão fixa e correta do algoritmo Mersenne Twister. Para voltar ao comportamento antigo, use **mt\_srand()** com **`MT_RAND_PHP`** como segundo parâmetro. |

### Veja também

- [mt\_rand()](function.mt-rand.md) - Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister
- [mt\_getrandmax()](function.mt-getrandmax.md) - Mostra o maior valor aleatório possível
- [srand()](function.srand.md) - Semeia o gerador de números aleatórios

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
