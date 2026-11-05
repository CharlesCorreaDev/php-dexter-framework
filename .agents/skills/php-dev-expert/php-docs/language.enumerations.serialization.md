# Serialização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.serialization.php

---

## Serialização

As enumerações são serializadas de maneira diferente dos objetos. Especificamente, elas têm um novo código de serialização,
`"E"`, que especifica o nome do caso de enumeração. A rotina de desserialização pode
então usar isso para definir uma variável para o valor singleton existente. Isso garante que:

```
<?php

enum Naipe: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}

Naipe::Copas === unserialize(serialize(Naipe::Copas));

print serialize(Naipe::Copas);
// E:11:"Naipe:Copas";
```

Na desserialização, se uma enumeração de um caso não pode ser encontrada para combinar com um valor
serializado, um aviso será emitido e **`false`** retornado.

A opção `allowed_classes` de
[unserialize()](function.unserialize.md) não afeta
[Enumerações](language.enumerations.md).

Se uma Enumeração Pura for serializada para JSON, um erro será lançado. Se uma Enumeração Apoiada
for serializada para JSON, ela será representada apenas por seu valor escalar, no
tipo apropriado. O comportamento de ambas pode ser sobrescrito ao implementar
[JsonSerializable](class.jsonserializable.md).

Para [print\_r()](function.print-r.md), a saída de um caso de enumeração é ligeiramente diferente
dos objetos para minimizar confusões.

```
<?php

enum Foo
{
    case Bar;
}

enum Baz: int
{
    case Beep = 5;
}

print_r(Foo::Bar);
print_r(Baz::Beep);

/* Produz

Foo Enum (
    [name] => Bar
)
Baz Enum:int {
    [name] => Beep
    [value] => 5
}
*/
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
