# Gera aleatoriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-engine.generate.php

---

# Random\Engine::generate

(PHP 8 >= 8.2.0)

Random\Engine::generate — Gera aleatoriedade

### Descrição

public function **Random\Engine::generate**(): [string](language.types.string.md)

Retorna aleatoriedade e avança o estado do algoritmo em uma etapa.

A aleatoriedade é representada por uma string binária contendo bytes aleatórios. Esta representação
permite interpretar de forma inequívoca os bits aleatórios gerados pelo algoritmo, por exemplo, para
acomodar diferentes tamanhos de saída usados por diferentes algoritmos.

Algoritmos que operam nativamente em valores inteiros devem retornar o inteiro na ordem de bytes
Little-Endian, por exemplo, aproveitando a função [pack()](function.pack.md) com o código de formato
`P`. A interface de alto nível fornecida pelo
[Random\Randomizer](class.random-randomizer.md) interpretará os bytes aleatórios retornados como inteiros
Little-Endian sem sinal se uma representação numérica for necessária.

É altamente recomendável que cada bit da string retornada seja selecionado de maneira uniforme e
independente, pois alguns aplicativos exigem aleatoriedade com base no nível de bit para funcionar corretamente.
Por exemplo, geradores congruentes lineares geralmente geram aleatoriedade de qualidade inferior para os bits
menos significativos do valor inteiro de retorno e, portanto, não seriam apropriados para aplicações
que exigem aleatoriedade em nível de bit.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string não vazia contendo bytes aleatórios.

> **Nota**:
>
> A [Random\Randomizer](class.random-randomizer.md) funciona internamente com inteiros sem sinal de 64 bits.
> Se a string retornada contiver mais de 64 bits (8 bytes) de aleatoriedade, os bytes excedentes
> serão ignorados. Outros aplicativos podem processar mais de 64 bits ao mesmo tempo.

### Erros/Exceções

- Se a geração de aleatoriedade falhar, uma [Random\RandomException](class.random-randomexception.md) deverá
  ser lançada. Qualquer outra [Exception](class.exception.md) lançada durante a geração deve
  ser capturada e agrupada em uma [Random\RandomException](class.random-randomexception.md).
- Se a string retornada estiver vazia, um [Random\BrokenRandomEngineError](class.random-brokenrandomengineerror.md)
  será lançado pelo [Random\Randomizer](class.random-randomizer.md).
- Se o algoritmo implementado for severamente tendencioso, um [Random\BrokenRandomEngineError](class.random-brokenrandomengineerror.md)
  pode ser lançado pelo [Random\Randomizer](class.random-randomizer.md) para evitar loops infinitos
  se a amostragem de rejeição for necessária para retornar resultados imparciais.

### Examples

**Exemplo #1 Exemplo de **Random\Engine::generate()****

```
<?php
/**
 * Implementa um Gerador Linear Congruente com módulo 65536,
 * multiplicador 61 e incremento 17 retornando um número inteiro de 8 bits.
 *
 * Nota: Este mecanismo é adequado apenas para fins de demonstração.
 * Geradores Congruentes Lineares geralmente geram aleatoriedade
 * de baixa qualidade e esta implementação específica tem
 * um período muito curto de 16 bits que é inadequado para
 * quase todo caso de uso do mundo real.
 */
final class LinearCongruentialGenerator implements \Random\Engine
{
    private int $state;

    public function __construct(?int $seed = null)
    {
        if ($seed === null) {
            $seed = random_int(0, 0xffff);
        }

        $this->state = $seed & 0xffff;
    }

    public function generate(): string
    {
        $this->state = (61 * $this->state + 17) & 0xffff;

        return pack('C', $this->state >> 8);
    }
}

$r = new \Random\Randomizer(
    new LinearCongruentialGenerator(seed: 1)
);

echo "Número da Sorte: ", $r->getInt(0, 99), "\n";
?>
```

O exemplo acima produzirá:

```
Número da Sorte: 4
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
