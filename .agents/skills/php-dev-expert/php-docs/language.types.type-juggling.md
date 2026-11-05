# Conversão automática de tipos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.type-juggling.php

---

## Conversão automática de tipos

O PHP não requer a tipagem explícita em declarações de variáveis.
Nesse caso, o tipo de uma variável é determinado pelo valor armazenado.
Ou seja, se uma [string](language.types.string.md) é armazenada numa variável
$var, então $var terá o tipo
[string](language.types.string.md). Se após isso um valor [int](language.types.integer.md) for armazenado
em $var, ela será do tipo [int](language.types.integer.md).

O PHP pode tentar converter o tipo de um valor em outro automaticamente
em alguns contextos. Esses contextos são:

- Numérico
- String
- Lógico
- Inteiro e string
- Comparação
- Função

> **Nota**:
>
> Quando um valor precisa ser interpretado como um tipo diferente, o valor
> em si *não* se altera, apenas uma "cópia" é convertida.

Para forçar uma variável a ser avaliada como um certo tipo, consulte a seção sobre
[conversão de tipo](language.types.type-juggling.md#language.types.typecasting). Se
for necessário mudar o tipo de uma variável, consulte a função [settype()](function.settype.md).

### Contexto numérico

Este contexto é utilizado em
[operadores aritméticos](language.operators.arithmetic.md).

Neste contexto, se um dos operandos for um [float](language.types.float.md) (ou não
interpretável como [int](language.types.integer.md)), ambos os operandos serão interpretados como
[float](language.types.float.md), e o resultado será um [float](language.types.float.md).
Caso contrário, os operandos serão interpretados como [int](language.types.integer.md),
e o resultado também será um [int](language.types.integer.md).
A partir do PHP 8.0.0, se um dos operandos não puser ser interpretado, um
[TypeError](class.typeerror.md) é lançado.

### Contextos string

Este contexto ocorre ao se utilizar [echo](function.echo.md),
[print](function.print.md),
[interpolação de strings](language.types.string.md#language.types.string.parsing)
ou o
[operador de concatenação](language.operators.string.md).

Neste contexto, o valor será interpretado como [string](language.types.string.md).
Se o valor não puder ser interpretado, um [TypeError](class.typeerror.md) é lançado.
Anteriormente ao 7.4.0, um **`E_RECOVERABLE_ERROR`** era emitido.

### Contextos lógicos

Este contexto ocorre em instruções condicionais, no uso do
[operador ternário](language.operators.comparison.md#language.operators.comparison.ternary),
ou em uma [operação lógica](language.operators.logical.md).

Neste contexto, o valor será interpretado como [bool](language.types.boolean.md).

### Contextos inteiros e string

Este contexto ocorre ao utilizar
[operadores binários](language.operators.bitwise.md).

Neste contexto, se todos os operandos forem do tipo [string](language.types.string.md), o resultado
também será uma [string](language.types.string.md).
Caso contrário, os operados serão interpretados como [int](language.types.integer.md),
e o resultado também será um [int](language.types.integer.md).
A partir do PHP 8.0.0, se um dos operandos não puder ser interpretado, um
[TypeError](class.typeerror.md) é lançado.

### Contextos de comparação

Este contexto ocorre ao utilizar
[operadores de comparação](language.operators.comparison.md).

As conversões de tipo que ocorrem neste contexto são explicadas na
[tabela](language.operators.comparison.md#language.operators.comparison.types)
de comparações entre vários tipos.

### Contextos de função

Este contexto ocorre quando um valor é um parâmetro tipado ou quando uma propriedade
ou valor retornado de uma função declara um tipo.

Nesse contexto, o valor precisa ser do tipo informado.
Existem duas exceções. A primeira é: se o valor for do tipo
[int](language.types.integer.md) e o tipo declarado for um [float](language.types.float.md), o
inteiro será convertido num número de ponto flutuante.
A segunda é: se o tipo declarado for um tipo *escalar*,
ou ser o valor for conversível a um tipo escalar e
o modo de tipagem coercitiva estiver ativo
(o padrão), o valor pode ser convertido para um valor escalar aceito.
Veja abaixo uma descrição deste comportamento.

**Aviso**

[Funções internas](functions.internal.md)
convertem automaticamente **`null`** para tipos escalares.
Este comportamento foi *DESCONTINUADO* a partir do PHP 8.1.0.

#### Coerção de tipos com tipos declarados

- Declaração de tipo [bool](language.types.boolean.md): o valor é convertido para [bool](language.types.boolean.md).
- Declaração de tipo [int](language.types.integer.md): o valor é convertido para [int](language.types.integer.md)
  quando a conversão for bem definida. Por exemplo, quando uma string é
  [numérica](language.types.numeric-strings.md).
- Declaração de tipo [float](language.types.float.md): o valor é convertido para [float](language.types.float.md)
  quando a conversão for bem definida. Por exemplo, quando uma string é
  [numérica](language.types.numeric-strings.md).
- Declaração de tipo [string](language.types.string.md): o valor é convertido para [string](language.types.string.md).

#### Conversão de tipos em tipos union

Quando `strict_types` está desativado, declarações de tipos escalares
estão sujeitas a conversões implícitas e limitadas.
Se o tipo exato do valor não é parte da união, então o tipo final da conversão
é escolhido na seguinte ordem de preferência:

1. [int](language.types.integer.md)
2. [float](language.types.float.md)
3. [string](language.types.string.md)
4. [bool](language.types.boolean.md)

Se o tipo existe na união e o valor puder ser convertido pela mesma
semântica do PHP, então esse tipo é escolhido.
Senão, um tipo seguinte é tentado.

**Cuidado**

Existe uma exceção, no caso do valor ser uma string, e ambos int e float serem partes
da união, o tipo preferido será determinado pela semântica de
[strings
numéricas](language.types.numeric-strings.md).
Por exemplo, para `"42"` o tipo [int](language.types.integer.md) é escolhido,
enquanto que para `"42.0"` o tipo escolhido é [float](language.types.float.md).

> **Nota**:
>
> Tipos que não fazem parte da lista acima não são elegíveis para destinos
> da conversão implícita. Em particular, não ocorrem conversões implícitas para
> os tipos [null](language.types.null.md), [false](language.types.singleton.md) e
> [true](language.types.singleton.md).

**Exemplo #1 Exemplo de tipos sendo convertidos em um tipo parte da união**

```
<?php
// int|string
42    --> 42          // tipo exato
"42"  --> "42"        // tipo exato
new ObjectWithToString --> "Resultado de __toString()"
                      // e objero não compatível com int, padrão para string
42.0  --> 42          // float compatível com int
42.1  --> 42          // float compatível com int
1e100 --> "1.0E+100"  // float muito grande para int, padrão para string
INF   --> "INF"       // float muito grande para int, padrão para string
true  --> 1           // bool compatível com int
[]    --> TypeError   // array não é compatível com int ou string

// int|float|bool
"45"    --> 45        // string numérica int
"45.0"  --> 45.0      // string numérica float

"45X"   --> true      // string não numérica, padrão para bool
""      --> false     // string não numérica, padrão para bool
"X"     --> true      // string não numérica, padrão para bool
[]      --> TypeError // array não é compatível com int, float ou bool
?>
```

### Conversão explícita

Converte o valor do tipo para o tipo escolhido através da escrita do tipo
entre parênteses, antes do valor a ser convertido.

**Exemplo #2 Conversão de tipo**

```
<?php
$foo = 10;           // $foo é um inteiro
$bar = (bool) $foo;  // $bar é um booleano

var_dump($bar);
?>
```

As conversões previstas são:

- `(int)` - converte para [int](language.types.integer.md)
- `(bool)` - converte para [bool](language.types.boolean.md)
- `(float)` - converte para [float](language.types.float.md)
- `(string)` - converte para [string](language.types.string.md)
- `(array)` - converte para [array](language.types.array.md)
- `(object)` - converte para [object](language.types.object.md)
- `(unset)` - converte para [NULL](language.types.null.md)

A conversão [`(void)`](language.types.void.md#language.types.void.casting)
também está disponível a partir do PHP 8.5.0, mas não é uma conversão de valor.
Ela é usada como uma instrução para descartar explicitamente o resultado de uma expressão.

**Aviso**

`(integer)` é um sinônimo de `(int)`.
`(boolean)` é um sinônimo de `(bool)`.
`(binary)` é um sinônimo de `(string)`.
`(double)` e `(real)` são sinônimos de
`(float)`.
Essas conversões alternativas não usam o nome canônico de tipo e foram descontinuadas a partir do PHP 8.5.0.

**Aviso**

A conversão `(real)` foi descontinuada a partir do PHP 7.4.0
e removida a partir do PHP 8.0.0.

**Aviso**

A conversão `(unset)` foi descontinuada a partir do PHP 7.2.0.
Observe que a conversão `(unset)` tem o mesmo efeito que
informar o valor [NULL](language.types.null.md) para a variável ou chamada de função.
A conversão `(unset)` foi removida no PHP 8.0.0.

**Cuidado**

A conversão `(binary)` e o prefixo `b` existem
para compatibilidade futura. Atualmente, `(binary)` e
`(string)` são idênticos. No entanto, isso pode mudar
e não deve ser considerado estável.

> **Nota**:
>
> Espaços são ignorados dentro dos parênteses de uma conversão.
> Portanto, as linhas seguintes são equivalentes:
>
> ```
> <?php
> $foo = (int) $bar;
> $foo = ( int ) $bar;
> ?>
> ```

Convertendo [string](language.types.string.md) e variáveis para
[string](language.types.string.md)s binárias:

```
<?php
$binary = (binary) $string;
$binary = b"binary string";
?>
```

Em vez de converter uma variável para [string](language.types.string.md), é possível
delimitar a variável entre aspas.

**Exemplo #3 Diferentes mecanismos de conversão**

```
<?php
$foo = 10;            // $foo é int
$str = "$foo";        // $str é string
$fst = (string) $foo; // $fst também é string

// Isto exibe "são iguais"
if ($fst === $str) {
    echo "são iguais", PHP_EOL;
}
?>
```

Não é tão óbvio o que acontece ao converter entre certos
tipos. Para mais informações, veja as seções:

- [Convertendo para boolean](language.types.boolean.md#language.types.boolean.casting)
- [Convertendo para integer](language.types.integer.md#language.types.integer.casting)
- [Convertendo para float](language.types.float.md#language.types.float.casting)
- [Convertendo para string](language.types.string.md#language.types.string.casting)
- [Convertendo para array](language.types.array.md#language.types.array.casting)
- [Convertendo para object](language.types.object.md#language.types.object.casting)
- [Convertendo para resource](language.types.resource.md#language.types.resource.casting)
- [Convertendo para NULL](language.types.null.md#language.types.null.casting)
- [Descartando um valor com `(void)`](language.types.void.md#language.types.void.casting)
- [Tabela de conversão de tipos](types.comparisons.md)

> **Nota**:
>
> O PHP suporta a indexação de [string](language.types.string.md) utilizando
> a mesma sintaxe de [array](language.types.array.md)s, de forma que o exemplo seguinte
> é válido em todas as versões do PHP:
>
> **Exemplo #4 Usando índice de array com uma string**
>
> ```
> <?php
> $a    = 'car'; // $a é uma string
> $a[0] = 'b';   // $a ainda é uma string
> echo $a;       // bar
> ?>
> ```
>
> Veja a seção sobre [Acesso a caracteres
> da string](language.types.string.md#language.types.string.substr) para mais informações.

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
