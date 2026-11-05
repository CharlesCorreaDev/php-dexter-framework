# Enumerações Básicas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.basics.php

---

## Enumerações Básicas

Enumerações são similares às classes e compartilham o mesmo namespaces que classes, interfaces, e traits.
Elas também podem ser carregadas automaticamente da mesma maneira. Uma Enumeração define um novo tipo, que possui um número fixo
e limitado de valores legais possíveis.

```
<?php

enum Naipe
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;
}
```

Essa declaração cria um novo tipo enumerado chamado `Naipe`, que possui
quatro e apenas quatro valores permitidos: `Naipe::Copas`, `Naipe::Ouros`,
`Naipe::Paus`, e `Naipe::Espadas`. Variáveis podem ser atribuídas
a um desses valores permitidos. Uma função pode ser tipada contra um tipo enumerado,
caso em que apenas os valores desse tipo podem ser passados.

```
<?php

enum Naipe
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;
}

function pegar_uma_carta(Naipe $naipe)
{
    var_dump($naipe);
}

$val = Naipe::Ouros;

// OK
pegar_uma_carta($val);

// OK
pegar_uma_carta(Naipe::Paus);

// TypeError: pegar_uma_carta(): Argument #1 ($naipe) must be of type Naipe, string given
pegar_uma_carta('Espadas');
```

Uma enumeração pode ter zero ou mais definições `case`, sem limite máximo.
Uma enumeração sem nenhum caso é sintaticamente válida, embora inútil.

Os nomes dos casos seguem as mesmas regras de sintaxe de qualquer nome do PHP, mais detalhados na seção sobre
[Constantes](language.constants.md).

Por padrão, os casos não são internamente associados por um valor escalar. Ou seja, `Naipe::Copas`
não é igual a `"0"`. Ao invés disso, cada caso é apoiado por um objeto único com esse nome. Isso significa que:

```
<?php

enum Naipe
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;
}

$a = Naipe::Espadas;
$b = Naipe::Espadas;

if ($a === $b) {
    print "Naipes correspondem usando ===\n";
}

if ($a instanceof Suit) {
    print "Naipes correspondem instanceof\n";
}

if ($a !== 'Spades') {
    print "O naipe não corresponde à string\n";
}
```

Isso também significa que os valores de enumeração nunca são `<` ou `>` do que o outro,
uma vez que essas comparações não fazem sentido em objetos. Essas comparações sempre retornarão
**`false`** ao trabalhar com valores de enumeração.

Esse tipo de caso, sem dados relacionados, é chamado de "Caso Puro". Uma enumeração que contém
apenas Casos Puros é chamada de Enumeração Pura.

Todos os Casos Puros são implementados como instâncias de seus tipos 'enum'. O tipo 'enum' é representado internamente como uma classe.

Todos os Casos têm uma propriedade somente leitura, `name`, que é o nome (sensível a maiúsculas e minúsculas)
do próprio caso.

```
<?php

enum Naipe
{
    case Copas;
    case Ouros;
    case Paus;
    case Espadas;
}

print Naipe::Espadas->name;
// exibe "Espadas"
```

É possível também utilizar as funções [defined()](function.defined.md) e [constant()](function.constant.md)
para verificar a existência ou ler um item de enumeração se o nome for obtido dinamicamente.
Isto é desencorajado, já que utilizar [Enumerações Apoiadas](language.enumerations.backed.md)
funciona para a maioria dos casos.

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
