# Sintaxe do Gerador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.generators.syntax.php

---

## Sintaxe do Gerador

Uma função geradora se parece com uma função normal, exceto que ao invés
de retornar um valor, um gerador pode executar [`yield`](language.generators.syntax.md#control-structures.yield) quantas vezes forem necessárias.
Qualquer função que contenha [`yield`](language.generators.syntax.md#control-structures.yield) é uma função geradora.

Quando uma função geradora é chamada, ela retorna um objeto que pode ser
iterado. Quando você itera através desse objeto (por exemplo, por um loop
[`foreach`](control-structures.foreach.md)), o PHP irá chamar os métodos de iteração do objeto toda vez que precisar de
um valor, em seguida salva o estado do gerador quando o valor é produzido,
de modo que possa ser retomado quando o próximo valor for necessário.

Quando não houver mais valores a serem produzidos, o gerador pode
simplesmente retornar, e o código que chamou continua como se um array tivesse
ficado sem valores.

> **Nota**:
>
> Um gerador pode retornar valores, que podem ser recuperados usando
> [Generator::getReturn()](generator.getreturn.md).

### A palavra-chave **yield**

O coração de uma função geradora é a palavra-chave **yield**.
Na sua forma mais simples, uma declaração yield se parece muito com um
retorno, exceto que em vez de parar a execução da função e retornar, o
yield fornece um valor para o código de loop sobre o gerador e pausa a
execução da função do gerador.

**Exemplo #1 Um exemplo simples de valores yield**

```
<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Observe que $i é preservado entre chamadas.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}
```

O exemplo acima produzirá:

```
1
2
3
```

> **Nota**:
>
> Internamente, chaves inteiras sequenciais serão pareadas com os valores
> entregues, assim como um array não associativo.

#### Produzindo valores com chaves

O PHP suporta arrays associativos e geradores não são diferentes. Além
de produzir valores simples, como mostrado acima, você também pode produzir
uma chave ao mesmo tempo.

A sintaxe para preparar um par de chave/valor é muito semelhante ao
utilizado para definir um array associativo, como mostrado abaixo.

**Exemplo #2 Produzindo um par de chave/valor**

```
<?php
/*
 * A saída são valores separados por ponto e vírgula, com o primeiro
 * valor sendo usado como um id ou chave.
 */

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

function input_parser($input) {
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

foreach (input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}
```

O exemplo acima produzirá:

```
1:
    PHP
    Likes dollar signs
2:
    Python
    Likes whitespace
3:
    Ruby
    Likes blocks
```

#### Produzindo valores nulos

O yield pode ser chamado sem um argumento para produzir um valor **`null`**
com uma chave automática.

**Exemplo #3 Produzindo valores **`null`****

```
<?php
function gen_three_nulls() {
    foreach (range(1, 3) as $i) {
        yield;
    }
}

var_dump(iterator_to_array(gen_three_nulls()));
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  NULL
  [1]=>
  NULL
  [2]=>
  NULL
}
```

#### Produzindo valores por referência

Funções geradoras são capazes de produzir valores por referência bem como
por valor. Isso é feito da mesma forma que
[retornar referências de funções](functions.returning-values.md):
incluindo um & no início do nome da função.

**Exemplo #4 Produzindo valores por referência**

```
<?php
function &gen_reference() {
    $value = 3;

    while ($value > 0) {
        yield $value;
    }
}

/*
 * Observe que podemos mudar $number dentro do loop, e
 * porque o gerador retorna referências, $value
 * dentro de gen_reference() é modificado.
 */
foreach (gen_reference() as &$number) {
    echo (--$number).'... ';
}
```

O exemplo acima produzirá:

```
2... 1... 0...
```

#### Delegação de gerador via **yield from**

A delegação de gerador permite retornar valores de outro
gerador, objeto [Traversable](class.traversable.md) ou um
[array](language.types.array.md) utilizando para isso a instrução **yield from**.
O gerador externo retornará todos os valores do gerador interno,
objeto ou array até que o mesmo não seja mais válido, a partir de onde a execução
continuará no gerador externo.

Se um gerador é utilizado com **yield from**, a expressão
**yield from** também retornará qualquer valor
retornado pelo gerador interno.

**Cuidado**

# Armazenando em um array (por exemplo, com [iterator\_to\_array()](function.iterator-to-array.md))

**yield from** não redefine as chaves. Ele preserva
as chaves retornadas pelo objeto [Traversable](class.traversable.md), ou
[array](language.types.array.md). Deste modo, alguns valores podem compartilhar uma chave em comum com outro
**yield** ou **yield from**, o qual, após
inserido em um array, irá sobrescrever os valores anteriores com essa chave.

Um caso onde isso importa é a função [iterator\_to\_array()](function.iterator-to-array.md)
retornando um array com chaves por padrão, levando a resultados possivelmente inesperados.
[iterator\_to\_array()](function.iterator-to-array.md) possui um segundo parâmetro
`preserve_keys` que pode ser definido como **`false`** para coletar
todos os valores enquanto ignora as chaves retornadas pelo [Generator](class.generator.md).

**Exemplo #5 **yield from** com [iterator\_to\_array()](function.iterator-to-array.md)**

```
<?php
function inner() {
    yield 1; // chave 0
    yield 2; // chave 1
    yield 3; // chave 2
}
function gen() {
    yield 0; // chave 0
    yield from inner(); // chaves 0-2
    yield 4; // chave 1
}
// Passe false no segundo parâmetro para obter um array [0, 1, 2, 3, 4]
var_dump(iterator_to_array(gen()));
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(4)
  [2]=>
  int(3)
}
```

**Exemplo #6 Uso básico de **yield from****

```
<?php
function count_to_ten() {
    yield 1;
    yield 2;
    yield from [3, 4];
    yield from new ArrayIterator([5, 6]);
    yield from seven_eight();
    yield 9;
    yield 10;
}

function seven_eight() {
    yield 7;
    yield from eight();
}

function eight() {
    yield 8;
}

foreach (count_to_ten() as $num) {
    echo "$num ";
}
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
```

**Exemplo #7 **yield from** e valores retornados**

```
<?php
function count_to_ten() {
    yield 1;
    yield 2;
    yield from [3, 4];
    yield from new ArrayIterator([5, 6]);
    yield from seven_eight();
    return yield from nine_ten();
}

function seven_eight() {
    yield 7;
    yield from eight();
}

function eight() {
    yield 8;
}

function nine_ten() {
    yield 9;
    return 10;
}

$gen = count_to_ten();
foreach ($gen as $num) {
    echo "$num ";
}
echo $gen->getReturn();
```

O exemplo acima produzirá:

```
1 2 3 4 5 6 7 8 9 10
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
