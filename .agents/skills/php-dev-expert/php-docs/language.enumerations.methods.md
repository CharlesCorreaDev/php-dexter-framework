# Métodos de enumerações

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.methods.php

---

## Métodos de enumerações

Enumerações (tanto Puras quanto Apoiadas) podem conter métodos e podem implementar interfaces.
Se uma enumeração implementa uma interface, qualquer verificação de tipo para aquela interface também aceitará
todos os casos daquela enumeração.

```
<?php

interface Colorido
{
    public function cor(): string;
}

enum Naipe implements Colorido
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;

    // Cumpre o contrato da interface.
    public function cor(): string
    {
        return match ($this) {
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }

    // Não faz parte de uma interface; tudo bem.
    public function forma(): string
    {
        return "Retângulo";
    }
}

function pintar(Colorido $c)
{
   print $c->cor() . "\n";
}

pintar(Naipe::Paus);  // Funciona

print Naipe::Ouros->forma(); // imprime "Retângulo"
```

Nesse exemplo, todas as quatro instâncias de `Naipe` possuem dois métodos,
`cor()` e `forma()`. Até onde o código chamador
e as checagens de tipo sabem, elas se comportam exatamente da mesma forma que qualquer outra instância de objeto.

Em uma Enumeração Apoiada, a declaração de interface vai após a declaração do tipo de lastro.

```
<?php

interface Colorido
{
    public function cor(): string;
}

enum Naipe: string implements Colorido
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';

    // Cumpre o contrato da interface.
    public function cor(): string
    {
        return match ($this) {
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }
}
```

Dentro de um método, a variável `$this` é definida e se refere à instância do Caso.

Métodos podem ser arbitrariamente complexos, mas na prática geralmente retornam um valor estático ou
[match](control-structures.match.md) no `$this` para fornecer
resultados diferentes para casos diferentes.

Note que nesse caso, uma prática melhor de modelagem de dados seria definir também um
Tipo 'enum' `CorDeNaipe` com valores Preto e Vermelho e retornar isso no seu lugar.
No entanto, isso complicaria esse exemplo.

A hierarquia acima é logicamente similar a seguinte estrutura de classes
(embora esse não seja o código real que é executado):

```
<?php

interface Colorido
{
    public function cor(): string;
}

final class Naipe implements UnitEnum, Colorido
{
    public const Copas = new self('Copas');
    public const Ouros = new self('Ouros');
    public const Paus = new self('Paus');
    public const Espadas = new self('Espadas');

    private function __construct(public readonly string $nome) {}

    public function cor(): string
    {
        return match ($this) {
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }

    public function forma(): string
    {
        return "Retângulo";
    }

    public static function cases(): array
    {
        // Método ilegal, porque definir manualmente um método cases() em uma enumeração não é permitido.
        // Veja também a seção "Listagem de valores".
    }
}
```

Métodos podem ser públicos, privados ou protegidos, apesar dos privados e
protegidos serem equivalentes na prática, pois herança não é permitida.

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
