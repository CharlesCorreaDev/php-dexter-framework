# Parâmetros e argumentos de funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/functions.arguments.php

---

## Parâmetros e argumentos de funções

Os parâmetros de uma função são declarados em sua assinatura.
Informações podem ser passadas para funções através da lista de argumentos,
que é uma lista de expressões delimitadas por vírgulas. Os argumentos são
avaliados da esquerda para a direita, e o resultado é atribuído aos parâmetros da
função, antes que a função seja efetivamente chamada
(avaliação *ansiosa*).

O PHP suporta a passagem de argumentos por valor (o padrão), [passagem por
referência](functions.arguments.md#functions.arguments.by-reference) e [valores padrões de
argumentos](functions.arguments.md#functions.arguments.default). [Lista de argumentos de
tamanho variável](functions.arguments.md#functions.variable-arg-list) e [argumentos nomeados](functions.arguments.md#functions.named-arguments)
também são suportados.

> **Nota**:
>
> A partir do PHP 7.3.0, é possível ter uma vírgula no final da lista de
> argumentos para chamadas de função:
>
> ```
> <?php
> $v = foo(
>     $arg_1,
>     $arg_2,
> );
> ```

A partir do PHP 8.0.0, a lista de parâmetros de uma função pode incluir uma vírgula final, que
será ignorada. Isto é particularmente útil nos casos em que a lista de parâmetros é
longa ou contém nomes de variáveis longos, tornando conveniente listar os parâmetros verticalmente.

**Exemplo #1 Parâmetros de função com uma vírgula final**

```
<?php
function takes_many_args(
    $primeiro,
    $segundo,
    $uma_variavel_com_nome_longo,
    $parametro_com_default = 5,
    $de_novo = 'argumento padrão', // Essa vírgula final não era permitida antes do PHP 8.0.0.
)
{
    // ...
}
```

### Passando argumentos por referência

Por padrão, argumentos de função são passados por valor (de forma que se
você mudar o valor do parâmetro dentro da função, ele não é alterado fora
da função). Para permitir que uma função modifique os
seus argumentos, eles devem ser passados por referência.

Para ter um argumento para uma função sempre passado por referência, adicione
antes dele um "e comercial" (&) ao nome do parâmetro na definição da função:

**Exemplo #2 Passando argumentos de função por referência**

```
<?php
function add_some_extra(&$string)
{
    $string .= ' e alguma coisa mais.';
}
$str = 'Isto é uma string,';
add_some_extra($str);
echo $str;    // exibe 'Isto é uma string, e alguma coisa mais.'
```

É um erro passar uma expressão constante como um argumento para um parâmetro
que espera ser passado por referência.

### Valores padrão de parâmetros

Uma função pode definir valores padrão para parâmetros usando sintaxe similar
à atribuição de uma variável. O padrão é usado apenas quando o argumento do parâmetro não
é passado. Observe que passar **`null`** *não*
atribui o valor padrão.

**Exemplo #3 Utilizando parâmetros padrão em funções**

```
<?php
function makecoffee($type = "cappuccino")
{
    return "Fazendo uma xícara de café $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");
```

O exemplo acima produzirá:

```
Fazendo uma xícara de café cappuccino.
Fazendo uma xícara de café.
Fazendo uma xícara de café espresso.
```

Valores padrões de parâmetro podem ser valores escalares, [array](language.types.array.md)s,
o tipo especial **`null`** e, a partir do PHP 8.1.0, objetos usando a
sintaxe [new ClassName()](language.oop5.basic.md#language.oop5.basic.new).

**Exemplo #4 Usando tipos não escalares como valores padrões**

```
<?php
function fazercafe($tipos = array("cappuccino"), $cafeteira = NULL)
{
    $dispositivo = is_null($cafeteira) ? "as mãos" : $cafeteira;
    return "Fazendo uma xícara de ".join(", ", $tipos)." com $dispositivo.\n";
}
echo fazercafe();
echo fazercafe(array("cappuccino", "lavazza"), "chaleira");
```

O exemplo acima produzirá:

```
Fazendo uma xícara de cappuccino com as mãos.
Fazendo uma xícara de cappuccino, lavazza com chaleira.
```

**Exemplo #5 Usando objetos como valores padrão (a partir do PHP 8.1.0)**

```
<?php
class CafeteiraPadrao {
    public function preparar() {
        return 'Fazendo café.\n';
    }
}
class CafeteiraChique {
    public function preparar() {
        return 'Preparando um belo café só para você.\n';
    }
}
function fazercafe($cafeteira = new CafeteiraPadrao)
{
    return $cafeteira->preparar();
}
echo fazercafe();
echo fazercafe(new CafeteiraChique);
```

O exemplo acima produzirá:

```
Fazendo café.
Preparando um belo café só para você.
```

O valor padrão precisa ser uma expressão constante, não (por
exemplo) uma variável, um membro de classe ou uma chamada de função.

Observe que quaisquer parâmetros opcionais devem ser especificados após os
parâmetros obrigatórios, caso contrário, eles não podem ser omitidos das chamadas.
Considere o seguinte exemplo:

**Exemplo #6 Uso incorreto de parâmetros padrão de função**

```
<?php
function fazeriogurte($recipiente = "tigela", $sabor)
{
    return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
}

echo fazeriogurte("framboesa"); // "framboesa" é $recipiente, não $sabor
```

O exemplo acima produzirá:

```
Deprecated: fazeriogurte(): Optional parameter $recipiente declared before required parameter $sabor is implicitly treated as a required parameter in script on line 2

Fatal error: Uncaught ArgumentCountError: Too few arguments to function fazeriogurte(), 1 passed in script on line 7 and exactly 2 expected in script:2
Stack trace:
#0 script(7): fazeriogurte('framboesa')
#1 {main}
  thrown in script on line 2
```

Agora, compare o que está acima com este:

**Exemplo #7 Uso correto de parâmetros padrão de função**

```
<?php
function fazeriogurte($sabor, $recipiente = "tigela")
{
    return "Fazendo um(a) $recipiente de iogurte de $sabor.\n";
}

echo fazeriogurte("framboesa"); // "framboesa" é $sabor
```

O exemplo acima produzirá:

```
Fazendo um(a) tigela de iogurte de framboesa.
```

A partir do PHP 8.0.0, [argumentos nomeados](functions.arguments.md#functions.named-arguments)
podem ser usados para pular vários parâmetros opcionais.

**Exemplo #8 Uso correto de parâmetros padrão de função**

```
<?php
function fazeriogurte($recipiente = "tigela", $sabor = "framboesa", $estilo = "Grego")
{
    return "Fazendo um(a) $recipiente de iogurte $estilo de $sabor.\n";
}

echo fazeriogurte(estilo: "natural");
```

O exemplo acima produzirá:

```
Fazendo um(a) tigela de iogurte natural de framboesa.
```

A partir do PHP 8.0.0, declarar parâmetros obrigatórios após parâmetros opcionais
está *descontinuado*. Isso geralmente pode ser resolvido descartando
o valor padrão, pois nunca será usado.
Uma exceção a essa regra são parâmetros no formato
`Type $param = null`, onde o padrão **`null`** torna o tipo implicitamente
anulável. Este uso foi descontinuado a partir do PHP 8.4.0, e um
[tipo anulável](language.types.declarations.md#language.types.declarations.nullable) explícito
deve ser usado.

**Exemplo #9 Declarando parâmetros opcionais após parâmetros obrigatórios**

```
<?php
function foo($a = [], $b) {}     // Padrão não utilizado; descontinuado a partir do PHP 8.0.0
function foo($a, $b) {}          // Funcionalmente equivalente, sem aviso de descontinuação

function bar(A $a = null, $b) {} // A partir do PHP 8.1.0, $a é implicitamente requerido
                                 // (porque vem antes do parâmetro requerido),
                                 // porém implicitamente anulável (descontinuado a partir do PHP 8.4.0),
                                 // porque o valor padrão do parâmetro é null
function bar(?A $a, $b) {}       // Recomendado
```

> **Nota**:
>
> A partir do PHP 7.1.0, omitir um parâmetro que não especifica um padrão
> lança um [ArgumentCountError](class.argumentcounterror.md); em versões anteriores
> isso emitia um Aviso.

> **Nota**:
>
> Parâmetros que esperam o argumento por referência podem ter um valor padrão.

### Número variável de argumentos

O PHP suporta argumentos em quantidade variável em
funções definidas pelo usuário, utilizando o token
`...`.

Listas de parâmetros podem conter o token
`...` para indicar que a função aceita um
número variável de argumentos. Os argumentos serão passados
na variável informada como um [array](language.types.array.md):

**Exemplo #10 Utilizando `...` para acessar argumentos variáveis**

```
<?php
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);
```

O exemplo acima produzirá:

```
10
```

Você também pode utilizar `...` quando chamando funções para
transformar uma variável [array](language.types.array.md), [Traversable](class.traversable.md) ou
literal em uma lista de argumentos.

**Exemplo #11 Utilizando `...` para fornecer argumentos**

```
<?php
function add($a, $b) {
    return $a + $b;
}

echo add(...[1, 2])."\n";

$a = [1, 2];
echo add(...$a);
```

O exemplo acima produzirá:

```
3
3
```

Podem ser especificados parâmetros posicionais antes do indicador.
`...`. Nesse caso comente os argumentos finais,
que não pareiam com um argumento posicional, serão adicionados ao
array gerado por `...`.

É também possível adicionar uma
[dica de tipo](language.types.declarations.md) antes do indicador
`...`. Se presente, todos os argumentos
capturados por `...` deverão conformar com o tipo do parâmetro.

**Exemplo #12 Argumentos variáveis com dica de tipo**

```
<?php
function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b).' days';

// Isto falhará, já que null não é um objeto DateInterval.
echo total_intervals('d', null);
```

O exemplo acima produzirá:

```
3 days
Fatal error: Uncaught TypeError: total_intervals(): Argument #2 must be of type DateInterval, null given, called in script on line 15 and defined in script:2
Stack trace:
#0 script(15): total_intervals('d', NULL)
#1 {main}
  thrown in script on line 2
```

Finalmente, também podem ser passados argumentos variáveis
[por referência](functions.arguments.md#functions.arguments.by-reference) ao
prefixar `...` com um
`&`.

### Argumentos nomeados

O PHP 8.0.0 introduziu os argumentos nomeados como uma extensão aos
parâmetros posicionais. Argumentos nomeados permitem a passagem de argumentos para uma
função utilizando-se os nomes dos parâmetros ao invés das posições deles.
Isto torna o significado do argumento documentado automaticamente, e torna os argumentos
independentes da ordem, além de permitir pular argumentos opcionais.

Argumentos nomeados são passados ao prefixar o valor com o nome do parâmetro
e dois pontos. Usar palavras reservadas como nomes de parâmetros é permitido.
O nome do parâmetro precisa ser um identificador e uma resolução dinâmica
não é permitida.

**Exemplo #13 Sintaxe dos argumentos nomeados**

```
<?php
minhaFuncao(nomeParametro: $valor);
array_foobar(array: $value);

// NÃO suportado
nome_funcao($variavelQueGuardaNomeDoParametro: $valor);
```

**Exemplo #14 Comparando argumentos posicionais e nomeados**

```
<?php
// Utilizando argumentos posicionais:
array_fill(0, 100, 50);

// Utilizando argumetos nomeados:
array_fill(start_index: 0, count: 100, value: 50);
```

A ordem em que argumentos nomeados são passados não importa.

**Exemplo #15 Mesmo exemplo com argumentos em ordem diferente**

```
<?php
array_fill(value: 50, count: 100, start_index: 0);
```

Argumentos nomeados podem ser combinados com argumentos posicionais. Nesse caso,
os argumentos nomeados precisam estar depois dos argumentos posicionais.
Também é possível especificar somente alguns dos argumentos opcionais de
uma função, independente da ordem.

**Exemplo #16 Combinando argumentos posicionais e nomeados**

```
<?php
htmlspecialchars($string, double_encode: false);
// Mesmo que
htmlspecialchars($string, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, 'UTF-8', false);
```

Passar o mesmo argumento mais de uma vez resulta em uma
exceção [Error](class.error.md).

**Exemplo #17 Erro lançado ao passar um argumento ao mesmo parâmetro nomeado múltiplas vezes**

```
<?php
function foo($param) { ... }

foo(param: 1, param: 2);
// Error: Named parameter $param overwrites previous argument

foo(1, param: 2);
// Error: Named parameter $param overwrites previous argument
```

A partir do PHP 8.1.0, é possível usar argumentos nomeados após desempacotar os argumentos.
Um argumento nomeado *não deve* sobrepor argumentos já desempacotados.

**Exemplo #18 Usando argumentos nomeados após desempacotar**

```
<?php
function foo($a, $b, $c = 3, $d = 4) {
  return $a + $b + $c + $d;
}

var_dump(foo(...[1, 2], d: 40)); // 46
var_dump(foo(...['b' => 2, 'a' => 1], d: 40)); // 46

var_dump(foo(...[1, 2], b: 20)); // Fatal error. Named parameter $b overwrites previous argument
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
