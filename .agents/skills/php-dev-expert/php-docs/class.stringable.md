# A interface Stringable

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.stringable.php

---

# A interface Stringable

(PHP 8)

## Introdução

A interface **Stringable** denota uma classe que
tenha um método [\_\_toString()](language.oop5.magic.md#object.tostring). Diferentemente da maioria das interfaces,
**Stringable** está implicitamente presente em qualquer classe que
possua o método mágico [\_\_toString()](language.oop5.magic.md#object.tostring) definido, embora ela
possa e deveria ser declarada explicitamente.

Seu principal valor é permitir que funções façam verificações de tipo em
uniões `string|Stringable` para aceitar tanto uma string primitiva
quanto um objeto que possa ser convertido para uma string.

## Resumo da Interface

interface ****Stringable**** {

/\* Métodos \*/

public function [\_\_toString](stringable.tostring.md)(): [string](language.types.string.md)

}

## Exemplos de Stringable

**Exemplo #1 Uso Básico de Stringable**

Este exemplo usa a [promoção de propriedade do construtor](language.oop5.decon.md#language.oop5.decon.constructor.promotion).

```
<?php
class IPv4Address implements Stringable {
    public function __construct(
        private string $oct1,
        private string $oct2,
        private string $oct3,
        private string $oct4,
    ) {}

    public function __toString(): string {
        return "$this->oct1.$this->oct2.$this->oct3.$this->oct4";
    }
}

function showStuff(string|Stringable $value) {
    // Para um Stringable, isto irá chamar __toString() implicitamente.
    print $value;
}

$ip = new IPv4Address('123', '234', '42', '9');

showStuff($ip);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
123.234.42.9
```

## Índice

- [Stringable::\_\_toString](stringable.tostring.md) — Obtém a representação em string do objeto

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
