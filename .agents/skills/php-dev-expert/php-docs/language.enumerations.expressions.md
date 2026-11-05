# Valores de enumeração em expressões constantes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.expressions.php

---

## Valores de enumeração em expressões constantes

Como os casos são representados como constantes na própria enumeração, eles podem ser usados como valores
estáticos na maioria das expressões constantes: padrões de propriedades, padrões de variáveis estáticas, padrões
de parâmetros, valores constantes globais e de classes. Eles não podem ser usados em outros valores de caso de enumeração, mas
constantes normais podem se referir a um caso.

No entanto, chamadas implícitas de métodos mágicos como [ArrayAccess](class.arrayaccess.md) em enumerações não são permitidas em definições estáticas
ou de constantes já que não podemos garantir absolutamente que o valor resultante é determinístico
ou que a invocação do método é livre de efeitos colaterais. Chamadas de funções, chamadas de métodos e
acesso às propriedades continuam a ser operações inválidas em expressões constantes.

```
<?php

// Esta é uma definição de enumeração perfeitamente legal.
enum Direcao implements ArrayAccess
{
    case Cima;
    case Baixo;

    public function offsetExists($offset): bool
    {
        return false;
    }

    public function offsetGet($offset): mixed
    {
        return null;
    }

    public function offsetSet($offset, $value): void
    {
        throw new Exception();
    }

    public function offsetUnset($offset): void
    {
        throw new Exception();
    }
}

class Foo
{
    // Isto é permitido.
    const BAIXO = Direcao::Baixo;

    // Isto não é permitido, pois pode não ser determinístico.
    const CIMA = Direcao::Cima['curta'];
    // Fatal error: Cannot use [] on enums in constant expression
}

// Isto é perfeitamente legal, porque não é uma expressão constante.
$x = Direcao::Cima['curta'];
var_dump("\$x é " . var_export($x, true));

$foo = new Foo();
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
