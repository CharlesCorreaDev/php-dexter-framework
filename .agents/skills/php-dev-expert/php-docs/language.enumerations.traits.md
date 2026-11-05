# Traits

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.traits.php

---

## Traits

Enumerações podem utilizar Traits, que se comportam da mesma maneira que nas classes.
A limitação é que usados com `use` em uma enumeração não podem conter propriedades.
Eles podem incluir apenas métodos, métodos estáticos e constantes. Um Trait com propriedades
resultará em um erro fatal.

```
<?php

interface Colorido
{
    public function cor(): string;
}

trait Retangulo
{
    public function forma(): string
    {
        return "Retângulo";
    }
}

enum Naipe implements Colorido
{
    use Retangulo;

    case Copas;
    case Ouros;
    case Paus;
    case Espadas;

    public function cor(): string
    {
        return match ($this) {
            Naipe::Copas, Naipe::Ouros => 'Vermelho',
            Naipe::Paus, Naipe::Espadas => 'Preto',
        };
    }
}

$naipe = Naipe::Espadas;
var_dump($naipe->cor());
var_dump($naipe->forma());
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
