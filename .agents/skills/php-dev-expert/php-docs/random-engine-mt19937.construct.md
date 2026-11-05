# Constrói um novo mecanismo Mt19937

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine-mt19937.construct.php

---

# Random\Engine\Mt19937::\_\_construct

(PHP 8 >= 8.2.0)

Random\Engine\Mt19937::\_\_construct — Constrói um novo mecanismo Mt19937

### Descrição

public function **Random\Engine\Mt19937::\_\_construct**([?](language.types.null.md)[int](language.types.integer.md) `$seed` = **`null`**, [int](language.types.integer.md) `$mode` = **`MT_RAND_MT19937`**)

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
:   Preenche o estado com valores gerados com um gerador congruencial linear
    que foi semeado com `seed` interpretado como um inteiro
    sem sinal de 32 bits.

    Se `seed` for omitido ou **`null`**, um inteiro
    aleatório de 32 bits sem sinal será usado.

`mode`
:   Use uma das seguintes constantes para especificar a implementação do algoritmo a ser usado.

    - **`MT_RAND_MT19937`**:
      A implementação correta do Mt19937.
    - **`MT_RAND_PHP`**:
      Uma implementação incorreta para compatibilidade com versões anteriores de [mt\_srand()](function.mt-srand.md) anterior ao
      PHP 7.1.0.

    **Aviso**

    Este recurso foi
    *DESCONTINUADO* a partir do PHP 8.3.0. O uso deste recurso
    é fortemente desencorajado.

### Examples

**Exemplo #1 Exemplo de **Random\Engine\Mt19937::\_\_construct()****

```
<?php
// Usa uma semente aleatória de 32 bits.
$e = new \Random\Engine\Mt19937();

$r = new \Random\Randomizer($e);
?>
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
