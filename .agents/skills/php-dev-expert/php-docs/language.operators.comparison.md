# Operadores de Comparação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.operators.comparison.php

---

## Operadores de Comparação

Operadores de comparação, como os seus nomes implicam, permitem que você
compare dois valores. Você pode se interessar em ver
[as tabelas de comparação de tipos](types.comparisons.md),
que tem exemplo das várias comparações entre tipos relacionadas.

**Operadores de comparação**

| Exemplo | Nome | Resultado |
| --- | --- | --- |
| $a == $b | Igual | **`true`** se $a é igual a $b após equalização de tipos. |
| $a === $b | Idêntico | **`true`** se $a é igual a $b, e eles são do mesmo tipo. |
| $a != $b | Diferente | **`true`** se $a não é igual a $b depois de equalização de ativos. |
| $a <> $b | Diferente | **`true`** se $a não é igual a $b depois de equalização de ativos. |
| $a !== $b | Não idêntico | **`true`** se $a não é igual a $b, ou eles não são do mesmo tipo. |
| $a < $b | Menor que | **`true`** se $a é estritamente menor que $b. |
| $a > $b | Maior que | **`true`** se $a é estritamente maior que $b. |
| $a <= $b | Menor ou igual | **`true`** se $a é menor ou igual a $b. |
| $a >= $b | Maior ou igual | **`true`** se $a é maior ou igual a $b. |
| $a <=> $b | Spaceship (nave espacial) | Um [int](language.types.integer.md) menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b. |

Se ambos os operadores são
[strings numéricas](language.types.numeric-strings.md),
ou um operando é um número e o outro é uma
[string numérica](language.types.numeric-strings.md),
então a comparação é realizada numericamente.
Estas regras se aplicam à instrução
[switch](control-structures.switch.md).
A conversão de tipos não é realizada quando a comparação é realizada através
`===` ou `!==` porque aqui
é realizada a comparação de tipos, além de valores.

**Aviso**

Anteriormente ao PHP 8.0.0, se uma [string](language.types.string.md) era comparada a um número
ou uma string numérica, então a [string](language.types.string.md) era convertida para
número antes de realizar a comparação. Isto pode levar a resultados
inesperados, como observado no exemplo a seguir:

```
<?php
var_dump(0 == "a");
var_dump("1" == "01");
var_dump("10" == "1e1");
var_dump(100 == "1e2");

switch ("a") {
case 0:
    echo "0";
    break;
case "a":
    echo "a";
    break;
}
?>
```

Saída do exemplo acima no PHP 7:

```
bool(true)
bool(true)
bool(true)
bool(true)
0
```

Saída do exemplo acima no PHP 8:

```
bool(false)
bool(true)
bool(true)
bool(true)
a
```

**Exemplo #1 Operadores de Comparação**

```
<?php
// Inteiros
echo 1 <=> 1, ' '; // 0
echo 1 <=> 2, ' '; // -1
echo 2 <=> 1, ' '; // 1

// Floats
echo 1.5 <=> 1.5, ' '; // 0
echo 1.5 <=> 2.5, ' '; // -1
echo 2.5 <=> 1.5, ' '; // 1

// Strings
echo "a" <=> "a", ' '; // 0
echo "a" <=> "b", ' '; // -1
echo "b" <=> "a", ' '; // 1

echo "a" <=> "aa", ' ';  // -1
echo "zz" <=> "aa", ' '; // 1

// Arrays
echo [] <=> [], ' ';               // 0
echo [1, 2, 3] <=> [1, 2, 3], ' '; // 0
echo [1, 2, 3] <=> [], ' ';        // 1
echo [1, 2, 3] <=> [1, 2, 1], ' '; // 1
echo [1, 2, 3] <=> [1, 2, 4], ' '; // -1

// Objetos
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b, ' '; // 0

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b, ' '; // -1

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b, ' '; // 1

// valores e tipos precisam coincidir
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b, ' '; // 1

?>
```

Para vários tipos, comparações são feitas de acordo com a seguinte
tabela (em ordem).

**Comparação com vários tipos**

| Tipo do 1º operando | Tipo do 2º operando | Resultado |
| --- | --- | --- |
| [null](language.types.null.md) ou [string](language.types.string.md) | [string](language.types.string.md) | Converte **`null`** para "", numérico ou comparação léxica |
| [bool](language.types.boolean.md) ou [null](language.types.null.md) | qualquer | Converte para [bool](language.types.boolean.md), **`false`** < **`true`** |
| [object](language.types.object.md) | [object](language.types.object.md) | Classes nativas podem definir suas próprias comparações, classes diferentes são incomparáveis, same class see [Comparação de Objetos](language.oop5.object-comparison.md) |
| [string](language.types.string.md), [resource](language.types.resource.md), [int](language.types.integer.md) ou [float](language.types.float.md) | [string](language.types.string.md), [resource](language.types.resource.md), [int](language.types.integer.md) ou [float](language.types.float.md) | Transforma strings e resources para números |
| [array](language.types.array.md) | [array](language.types.array.md) | Array com menos membros é menor, se a chave do operando 1 não é encontrada no operando 2, então os arrays são incomparáveis, caso contrário compara valor por valor (veja o seguinte exemplo) |
| [object](language.types.object.md) | qualquer | [object](language.types.object.md) é sempre maior |
| [array](language.types.array.md) | qualquer | [array](language.types.array.md) é sempre maior |

**Exemplo #2 Comparações de boolean e null**

```
<?php
// bool e null são sempre comparados como booleanos
var_dump(1 == TRUE);  // TRUE - o mesmo que (bool) 1 == TRUE
var_dump(0 == FALSE); // TRUE - o mesmo que (bool) 0 == FALSE
var_dump(100 < TRUE); // FALSE - o mesmo que (bool) 100 < TRUE
var_dump(-10 < FALSE);// FALSE - o mesmo que (bool) -10 < FALSE
var_dump(min(-100, -10, NULL, 10, 100)); // NULL - (bool) NULL < (bool) -100 é FALSE < TRUE
?>
```

**Exemplo #3 Transcrição do padrão de comparação de array**

```
<?php
// Arrays são comparados assim quando utilizando-se os operadores padrão e operador nave-espacial
function standard_array_compare($op1, $op2)
{
    if (count($op1) < count($op2)) {
        return -1; // $op1 < $op2
    } elseif (count($op1) > count($op2)) {
        return 1; // $op1 > $op2
    }
    foreach ($op1 as $key => $val) {
        if (!array_key_exists($key, $op2)) {
            return 1;
        } elseif ($val < $op2[$key]) {
            return -1;
        } elseif ($val > $op2[$key]) {
            return 1;
        }
    }
    return 0; // $op1 == $op2
}
?>
```

**Aviso**

# Comparison of floating point numbers

Por conta da forma que [float](language.types.float.md)s são representados internamente não
se deve testar dois [float](language.types.float.md)s com o comparador de igualdade.

Veja a documentação de [float](language.types.float.md) para mais detalhes.

> **Nota**:
>
> Cuidado. A conversão automática de tipos do PHP não é sempre tão óbvia, quando comparando valores de tipos diferentes,
> particularmente comparando [int](language.types.integer.md)s para [bool](language.types.boolean.md)s ou [int](language.types.integer.md)s para [string](language.types.string.md)s. No geral é
> recomendado utilizar as comparações `===` e `!==` em vez de utilizar
> `==` e `!=` na maioria dos casos.

> **Nota**:
>
> A ocorrência de recursão durante uma comparação — por exemplo, ao comparar um
> array ou objeto que contenha uma referência a si mesmo — gera um
> [Error](class.error.md) a partir do PHP 8.4.0; anteriormente,
> isso resultava em um erro fatal.

### Valores não comparáveis

Embora a comparação de identidade (`===` e `!==`)
possa ser aplicada para valores arbitrários, os outros operadores de comparação somente devem
ser aplicados a valores comparáveis. O resultado de comparação de valores não comparáveis
não é definido, e não pode ser garantido.

### Veja também

- [strcasecmp()](function.strcasecmp.md)
- [strcmp()](function.strcmp.md)
- [Array operators](language.operators.array.md)
- [Types](language.types.md)

### Operador Ternário

Outro operador condicional é o operador "?:" (ou ternário).

**Exemplo #4 Atribuindo um valor padrão**

```
<?php
// Example usage for: Ternary Operator
$action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

// O código acima é idêntico a esta instrução if/else
if (empty($_POST['action'])) {
    $action = 'default';
} else {
    $action = $_POST['action'];
}
?>
```

A expressão `(expr1) ? (expr2) : (expr3)`
é avaliada para expr2 se
expr1 é avaliada como **`true`**, ou
expr3 se
expr1 é avaliada como **`false`**.

É possível deixar vazia a parte central do operador ternário.
A expressão `expr1 ?: expr3` retorna
o resultado de expr1 se expr1
avaliar para **`true`**, e expr3 se não.
expr1 somente é avaliada nessa única situação.

> **Nota**:
>
> Note que o operador ternário é uma expressão, e ele não é
> avaliado para uma variável, mas para o resultado de uma expressão. Isto é
> importante saber se você quer retornar uma variável por referência.
> A declaração `return $var == 42 ? $a : $b;` em uma
> função que retorna por referência conseqüêntemente não irá funcionar e será
> avisado.

> **Nota**:
>
> É recomendado evitar empilhar operadores ternários.
> O comportamento do PHP quando utilizando mais de um operador ternário sem parênteses numa única
> expressão é menos óbvia, comparada a outras linguagens.
> Antes do PHP 8.0.0, os operadores ternários eram avaliados com associatividade à esquerda,
> em vez de associatividade à direita, como na maioria de outras linguagens.
> Depender da associatividade à esquerda foi descontinuado a partir do PHP 7.4.0.
> A partir do PHP 8.0.0, o operador ternário é não associativo.
>
> **Exemplo #5 Comportamento não óbvio do ternário**
>
> ```
> <?php
> // Pode parecer que a expressão a seguir imprime 'true'
> echo (true ? 'true' : false ? 't' : 'f');
>
> // No entanto, a saída é na verdade 't' antes do PHP 8.0.0
> // Isto ocorre porque operadores ternários são associativos à esquerda
>
> // O seguinte é a versão mais intuitiva do código acima
> echo ((true ? 'true' : false) ? 't' : 'f');
>
> // Aqui, é possível ver que a primeira expressão avalia para 'true', e então
> // é avaliada para (bool) true, e portanto retorna o variante true da
> // segunda expressão ternária
> ?>
> ```

> **Nota**:
>
> Encadeamento de ternários curtos (`?:`), é estável, e comporta-se intuitivamente.
> Ele avaliará como o primeiro argumento que avalia para uma valor não falso. Observe que valores
> não definidos irão emitir um alerta.
>
> **Exemplo #6 Encadeamento de ternários curtos**
>
> ```
> <?php
> echo 0 ?: 1 ?: 2 ?: 3, PHP_EOL; //1
> echo 0 ?: 0 ?: 2 ?: 3, PHP_EOL; //2
> echo 0 ?: 0 ?: 0 ?: 3, PHP_EOL; //3
> ?>
> ```

### Operador de aglutinação null (Null Coalescing)

Existe ainda o operador "??" (ou null coalescing).

**Exemplo #7 Atribuindo um valor padrão**

```
<?php
// Exemplo do operador Null Coalesce
$action = $_POST['action'] ?? 'default';

// O conteúdo acima é idêntico à essa declaração if/else
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'default';
}
?>
```

A expressão `(expr1) ?? (expr2)` é avaliada para
expr2 se expr1 for
**`null`**, e expr1 do contrário.

Esse operador em particular não emite aviso caso o valor da esquerda
não exista, assim como [isset()](function.isset.md). Sendo especialmente
útil em chaves de arrays.

> **Nota**:
>
> Note que o operador null coalescing é uma expressão, e ele
> não é avaliado para uma variável, mas para o resultado de uma expressão. Isto
> é importante saber se você quer retornar uma variável por referência.
> A declaração `return $foo ?? $bar;` em uma
> função que retorna por referência conseqüêntemente não irá funcionar e será
> avisado.

> **Nota**:
>
> O operador de aglutinação null tem baixa precedência. Isso significa que misturá-lo
> com outros operadores (como por exemplo concatenação ou aritmética)
> irá provavelmente exigir parênteses.
>
> ```
> <?php
> // Emite um aviso que $name não está definido.
> print 'Mr. ' . $name ?? 'Anonymous';
>
> // Exibe "Mr. Anonymous"
> print 'Mr. ' . ($name ?? 'Anonymous');
> ?>
> ```

> **Nota**:
>
> Note que o operador null coalescing permite a criação de aninhamentos simples:
>
> **Exemplo #8 Aninhando o operador null coalescing**
>
> ```
> <?php
>
> $foo = null;
> $bar = null;
> $baz = 1;
> $qux = 2;
>
> echo $foo ?? $bar ?? $baz ?? $qux; // exibe 1
>
> ?>
> ```

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
