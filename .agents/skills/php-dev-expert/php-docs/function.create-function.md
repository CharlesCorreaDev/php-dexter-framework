# Cria uma função dinamicamente avaliando uma string de código

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.create-function.php

---

# create\_function

(PHP 4 >= 4.0.1, PHP 5, PHP 7)

create\_function — Cria uma função dinamicamente avaliando uma string de código

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.2.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **create\_function**([string](language.types.string.md) `$args`, [string](language.types.string.md) `$code`): [string](language.types.string.md)

Cria uma função dinamicamente a partir dos parâmetros passados e retorna um nome único para ela.

**Cuidado**

Essa função executa um [eval()](function.eval.md) internamente e, por isso, tem os mesmos
problemas de segurança de [eval()](function.eval.md). Além disso, ela tem características
ruins de desempenho e uso de memória, porque as funções criadas são globais e
não podem ser liberadas da memória.

Uma
[função anônima](functions.anonymous.md) nativa deve ser utilizada alternativamente.

### Parâmetros

É recomendável passar estes parâmetros como strings em
[aspas simples](language.types.string.md#language.types.string.syntax.single).
Se forem usadas strings em [aspas duplas](language.types.string.md#language.types.string.syntax.double),
os nomes de variáveis no código devem ser escapados com cuidado, ex.:
`\$somevar`.

`args`
:   Os argumentos da função, em uma string única, separados por vírgulas.

`code`
:   O código da função.

### Valor Retornado

Retorna um nome de função único como uma string, ou **`false`** em caso de falha.
Note que o nome contém um caractere não imprimível (`"\0"`),
portanto deve-se tomar cuidado ao imprimir o nome ou incorporá-lo em qualquer outra
string.

### Examples

**Exemplo #1
Criando uma função dinamicamente, com **create\_function()**
ou funções anônimas**

Pode-se usar uma função criada dinamicamente para (por exemplo) criar uma função a partir de
informação obtida em tempo de execução. Primeiro, usando **create\_function()**:

```
<?php
$newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
echo $newfunc(2, M_E) . "\n";
?>
```

Agora o mesmo código, usando uma [função anônima](functions.anonymous.md);
note que o código e os argumentos não estão mais contidos em strings:

```
<?php
$newfunc = function($a,$b) { return "ln($a) + ln($b) = " . log($a * $b); };
echo $newfunc(2, M_E) . "\n";
?>
```

O exemplo acima produzirá:

```
ln(2) + ln(2.718281828459) = 1.6931471805599
```

**Exemplo #2
Criação de uma função de processamento geral, com **create\_function()**
ou funções anônimas**

Outro uso seria ter uma função manipuladora geral que possa aplicar um
conjunto de operações a uma lista de parâmetros:

```
<?php
function process($var1, $var2, $farr)
{
    foreach ($farr as $f) {
        echo $f($var1, $var2) . "\n";
    }
}

// cria uma porção de funções matemáticas
$farr = array(
    create_function('$x,$y', 'return "um pouco de trigonometria: ".(sin($x) + $x*cos($y));'),
    create_function('$x,$y', 'return "uma hipotenusa: ".sqrt($x*$x + $y*$y);'),
    create_function('$a,$b', 'if ($a >=0) {return "b*a^2 = ".$b*sqrt($a);} else {return false;}'),
    create_function('$a,$b', "return \"min(b^2+a, a^2,b) = \".min(\$a*\$a+\$b,\$b*\$b+\$a);"),
    create_function('$a,$b', 'if ($a > 0 && $b != 0) {return "ln(a)/b = ".log($a)/$b; } else { return false; }')
);

echo "\nUsando o primeiro array de funções dinâmicas\n";
echo "parâmetros: 2.3445, M_PI\n";
process(2.3445, M_PI, $farr);

// agora cria uma porção de funções de processamento de strings
$garr = array(
    create_function('$b,$a', 'if (strncmp($a, $b, 3) == 0) return "** \"$a\" '.
        'e \"$b\"\n** Parecem iguais para mim! (olhando para os 3 primeiros caracteres)";'),
    create_function('$a,$b', 'return "CRCs: " . crc32($a) . ", ".crc32($b);'),
    create_function('$a,$b', 'return "similar(a,b) = " . similar_text($a, $b, $p) . "($p%)";')
);
echo "\nUsando o segundo array de funções dinâmicas\n";
process("Twas brilling and the slithy toves", "Twas the night", $garr);
?>
```

Novamente, aqui está o mesmo código usando
[funções anônimas](functions.anonymous.md).
Note que os nomes das variáveis no código não precisam mais ser escapados,
porque não estão em uma string.

```
<?php
function process($var1, $var2, $farr)
{
    foreach ($farr as $f) {
        echo $f($var1, $var2) . "\n";
    }
}

// cria uma porção de funções matemáticas
$farr = array(
    function($x,$y) { return "um pouco de trigonometria: ".(sin($x) + $x*cos($y)); },
    function($x,$y) { return "uma hipotenusa: ".sqrt($x*$x + $y*$y); },
    function($a,$b) { if ($a >=0) {return "b*a^2 = ".$b*sqrt($a);} else {return false;} },
    function($a,$b) { return "min(b^2+a, a^2,b) = " . min($a*$a+$b, $b*$b+$a); },
    function($a,$b) { if ($a > 0 && $b != 0) {return "ln(a)/b = ".log($a)/$b; } else { return false; } }
);

echo "\nUsando o primeiro array de funções dinâmicas\n";
echo "parâmetros: 2.3445, M_PI\n";
process(2.3445, M_PI, $farr);

// agora cria uma porção de funções de processamento de strings
$garr = array(
    function($b,$a) { if (strncmp($a, $b, 3) == 0) return "** \"$a\" " .
        "e \"$b\"\n** Parecem iguais para mim! (olhando para os 3 primeiros caracteres)"; },
    function($a,$b) { return "CRCs: " . crc32($a) . ", ".crc32($b); },
    function($a,$b) { return "similar(a,b) = " . similar_text($a, $b, $p) . "($p%)"; }
);
echo "\nUsando o segundo array de funções dinâmicas\n";
process("Twas brilling and the slithy toves", "Twas the night", $garr);
?>
```

O exemplo acima produzirá:

```
Usando o primeiro array de funções dinâmicas
parâmetros: 2.3445, M_PI
um pouco de trigonometria: -1.6291725057799
uma hipotenusa: 3.9199852871011
b*a^2 = 4.8103313314525
min(b^2+a, a^2,b) = 8.6382729035898
ln(a)/b = 0.27122299212594

Usando o segundo array de funções dinâmicas
** "Twas the night" e "Twas brilling and the slithy toves"
** Parecem iguais para mim! (olhando para os 3 primeiros caracteres)
CRCs: -725381282, 342550513
similar(a,b) = 11(45.833333333333%)
```

**Exemplo #3 Uso de funções anônimas como funções callback**

Talvez o uso mais comum para funções dinâmicas
seja passá-las como chamadas de retorno, por exemplo ao usar
[array\_walk()](function.array-walk.md) ou [usort()](function.usort.md).

```
<?php
$av = array("a ", "uma ", "aquela ", "esta ");
array_walk($av, create_function('&$v,$k', '$v = $v . "manga";'));
print_r($av);
?>
```

Converted to an [anonymous function](functions.anonymous.md):

```
<?php
$av = array("a ", "uma ", "aquela ", "esta ");
array_walk($av, function(&$v,$k) { $v = $v . "manga"; });
print_r($av);
?>
```

O exemplo acima produzirá:

```
Array
(
  [0] => a manga
  [1] => uma manga
  [2] => aquela manga
  [3] => esta manga
)
```

Ordenando strings do mais longo ao mais curto com **create\_function()**:

```
<?php
$sv = array("pequena", "uma string grande", "pouco maior", "é uma coisa essa string");
echo "Original:\n";
print_r($sv);
echo "Ordenado:\n";
usort($sv, create_function('$a,$b','return strlen($b) - strlen($a);'));
print_r($sv);
?>
```

Convertida em [função anônima](functions.anonymous.md):

```
<?php
$sv = array("pequena", "uma string grande", "pouco maior", "é uma coisa essa string");
echo "Original:\n";
print_r($sv);
echo "Ordenado:\n";
usort($sv, function($a,$b) { return strlen($b) - strlen($a); });
print_r($sv);
?>
```

O exemplo acima produzirá:

```
Original:
Array
(
  [0] => pequena
  [1] => uma string grande
  [2] => pouco maior
  [3] => é uma coisa essa string
)
Sorted:
Array
(
  [0] => é uma coisa essa string
  [1] => uma string grande
  [2] => pouco maior
  [3] => pequena
)
```

### Veja também

- [Funções anônimas](functions.anonymous.md)

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
