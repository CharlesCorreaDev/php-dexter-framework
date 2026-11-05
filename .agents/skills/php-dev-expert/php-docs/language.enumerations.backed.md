# Enumerações Apoiadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.enumerations.backed.php

---

## Enumerações Apoiadas

Por padrão, os Casos não possuem um equivalente escalar. Eles são apenas objetos singleton. No entanto,
existem muitos casos em que um Caso Enumerado precisa ser capaz de fazer fazer uma conversão de ida e volta para um banco de dados ou
um armazenamento de dados semelhante, então ter um escalar embutido (e, portanto, trivialmente serializável) equivalente definido
intrinsecamente é útil.

Para definir um equivalente escalar para uma Enumeração, a sintaxe é a seguinte:

```
<?php

enum Naipe: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}
```

Um caso que possui um equivalente escalar é chamado de Caso Apoiado, sendo "Apoiado" no sentido de lastreado, suportado,
por um valor mais simples. Uma enumeração que possui todos Casos Apoiados é chamada Enumeração Apoiada.
Uma Enumeração Apoiada pode conter apenas Casos Apoiados. Uma Enumeração Pura pode conter apenas Casos Puros.

Uma Enumeração Apoiada pode associar valores de tipos `int` ou `string`,
e uma determinada enumeração suporta apenas um único tipo de cada vez (isto é, sem união de `int|string`).
Se uma enumeração for marcada como tendo um equivalente escalar, então todos os casos devem possuir um escalar equivalente
único definido explicitamente. Não existem equivalentes escalares gerados automaticamente
(p. ex.: inteiros sequenciais). Casos apoiados devem ser únicos; dois casos apoiados não podem
ter o mesmo equivalente escalar. No entanto, uma constante pode se referir a um caso, efetivamente
criando um apelido. Veja as [constantes de enumeração](language.enumerations.constants.md).

Valores equivalentes podem ser uma expressão escalar constante.
Antes do PHP 8.2.0, os valores equivalentes deveriam ser literais ou expressões literais.
Isto significa que constantes e expressões constantes não eram suportadas.
Isto é, `1 + 1` era permitido, mas `1 + SOME_CONST` não era.

Casos Apoiados possuem uma propriedade somente leitura adicional, `value`, que é o valor
especificado na definição.

```
<?php

enum Naipe: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}

print Naipe::Paus->value;
// Exibe "P"
```

Para impor a propriedade `value` como somente leitura, uma variável não pode
ser atribuída como uma referência para ela. Isto é, o seguinte lança um erro:

```
<?php

enum Naipe: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}

$naipe = Naipe::Paus;
$ref = &$naipe->value;
// Erro fatal: Não é possível modificar indiretamente a propriedade somente-leitura Naipe::$value
```

Enumerações Apoiadas implementam uma interface interna [BackedEnum](class.backedenum.md),
que expõe dois métodos adicionais:

- `from(int|string): self` recebe um escalar e retornará o caso
  correspondente da enumeração. Se não for encontrado, ela lançará um [ValueError](class.valueerror.md). Isso é útil
  principalmente nas situações somente valores previstos são permitidos e um valor de enumeração ausente deve ser
  considerado um erro de interrupção de aplicação.
- `tryFrom(int|string): ?self` recebe uma escalar e retornará o
  caso de enumeração correspondente. Se um não for encontrado, ela retornará **`null`**.
  Isso é útil principalmente em casos onde o escalar de entrada não é confiável e o chamador quer
  implementar sua própria lógica de manipulação de erros ou de valor padrão.

Os métodos `from()` e `tryFrom()` seguem as regras
padrão de tipagem fraca/forte. No modo de tipagem fraca, passar um inteiro ou string é aceitável
e o sistema irá coagir o valor de acordo. Passar um float também irá funcionar e será
convertido. No modo de tipagem estrita, passar um inteiro para `from()` em uma
enumeração associada a strings (ou vice-versa) irá resultar em um [TypeError](class.typeerror.md),
assim como um float irá lançar um erro em todas as circunstâncias. Todos os outros tipos de parâmetro lançarão um TypeError
em ambos os modos.

```
<?php

enum Naipe: string
{
    case Copas = 'C';
    case Ouros = 'O';
    case Paus = 'P';
    case Espadas = 'E';
}

function obter_dados_do_banco($id) {
    return [
        'naipe' => 'E',
    ];
}

$registro = obter_dados_do_banco(42);
print $registro['naipe'] . "\n";

$naipe = Naipe::tryFrom('A') ?? Naipe::Espadas;
// Dados inválidos retornam null, então Naipe::Espadas em seu lugar.
print $naipe->value . "\n";

$naipe =  Naipe::from('X');
// Dados inválidos lançam um ValueError: "X" não é um valor escalar de apoio válido para a enumeração Naipe
print $naipe->value . "\n";
```

Definir manualmente um método `from()` ou `tryFrom()` em uma Enumeração Apoiada irá resultar em um erro fatal.

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
