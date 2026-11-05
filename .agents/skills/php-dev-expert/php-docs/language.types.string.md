# Strings

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.string.php

---

## Strings

Uma [string](language.types.string.md) é uma série de caracteres, onde um caractere é
o mesmo que um byte. Isso significa que o PHP possui suporte a um conjunto de apenas 256 caracteres,
e, portanto, não possui suporte nativo a Unicode. Veja mais
 [detalhes do tipo
string](language.types.string.md#language.types.string.details).

> **Nota**:
>
> Em sistemas de 32 bits, uma [string](language.types.string.md) pode ter até 2GB (2147483647 bytes)
> de comprimento.

### Sintaxe

Uma [string](language.types.string.md) literal pode ser especificada de quatro formas diferentes.

- [aspas simples](language.types.string.md#language.types.string.syntax.single)
- [aspas duplas](language.types.string.md#language.types.string.syntax.double)
- [sintaxe heredoc](language.types.string.md#language.types.string.syntax.heredoc)
- [sintaxe nowdoc](language.types.string.md#language.types.string.syntax.nowdoc)

#### Aspas simples

A maneira mais simples de se especificar uma [string](language.types.string.md) é
delimitá-la entre aspas simples (o caractere `'`).

Para especificar um apóstrofo, escape-o com uma contrabarra
(`\`). Para especificar uma contrabarra literal, duplique-a
(`\\`). Todas as outras ocorrências da contrabarra serão tratadas
como uma contrabarra literal: isso significa que outras sequências de escape que
se esteja acostumado a utilizar, como `\r` ou `\n`, serão
literalmente impressas em vez de ter qualquer significado
especial.

> **Nota**:
>
> Diferentemente das sintaxes [com aspas duplas](language.types.string.md#language.types.string.syntax.double)
> e [heredoc](language.types.string.md#language.types.string.syntax.heredoc),
> [variáveis](language.variables.md) e sequências de escape
> para caracteres especiais *não* serão expandidas quando ocorrerem
> dentro de uma [string](language.types.string.md) delimitada por aspas simples.

**Exemplo #1 Variantes de sintaxe**

```
<?php
echo 'isto é uma string comum', PHP_EOL;

echo 'Você pode incluir novas linhas em strings
dessa maneira que estará
tudo bem', PHP_EOL;

// Exibe: Arnold disse uma vez: "I'll be back"
echo 'Arnold disse uma vez: "I\'ll be back"', PHP_EOL;

// Exibe: Você excluiu C:\*.*?
echo 'Você excluiu C:\\*.*?', PHP_EOL;

// Exibe: Você excluiu C:\*.*?
echo 'Você excluiu C:\*.*?', PHP_EOL;

// Exibe: Isto não será substituído por \n uma nova linha
echo 'Isto não será substituído por \n uma nova linha', PHP_EOL;

// Exibe: Variáveis $também não $expandem
echo 'Variáveis $também não $expandem', PHP_EOL;
?>
```

#### Aspas duplas

Se a [string](language.types.string.md) for delimitada entre aspas duplas (`"`), o PHP
interpretará a seguinte sequência de escape como caracteres especiais:

**Sequências de escape**

| Sequências | Significado |
| --- | --- |
| `\n` | Nova linha (LF ou 0x0A (10) em ASCII) |
| `\r` | Retorno de carro (CR ou 0x0D (13) em ASCII) |
| `\t` | Tabulação horizontal (HT ou 0x09 (9) em ASCII) |
| `\v` | Tabulação vertical (VT ou 0x0B (11) em ASCII) |
| `\e` | Escape (ESC ou 0x1B (27) em ASCII) |
| `\f` | Form feed (FF ou 0x0C (12) em ASCII) |
| `\\` | contrabarra ou barra invertida |
| `\$` | Sinal de cifrão |
| `\"` | aspas duplas |
| `\[0-7]{1,3}` | Octal: uma sequência de caracteres que coincide com a expressão regular `[0-7]{1,3}` é um caractere em notação octal (por exemplo, `"\101" === "A"`), o qual é silenciosamente turcado para um byte (por exemplo `"\400" === "\000"`) |
| `\x[0-9A-Fa-f]{1,2}` | Hexadecimal: uma sequência de caracteres que coincide com a expressão regular `[0-9A-Fa-f]{1,2}` é um caractere em notação decimal (por exemplo, `"\x41" === "A"`) |
| `\u{[0-9A-Fa-f]+}` | Unicode: uma sequência de caracteres coincidindo com a expressão regular `[0-9A-Fa-f]+` é um codepoint Unicode, o qual terá como resultado uma string contendo a representação UTF-8 desses codepoints. Os colchetes são requeridos. Por exemplo, `"\u{41}" === "A"` |

Como com as [string](language.types.string.md)s entre aspas simples, escapar qualquer outro caractere
resultará em uma contrabarra sendo impressa.

O recurso mais importante de [string](language.types.string.md)s delimitadas por aspas duplas é o fato de que
nomes de variáveis serão expandidos. Veja a
[interpolação de strings](language.types.string.md#language.types.string.parsing) para
detalhes.

#### Heredoc

Uma terceira maneira de delimitar [string](language.types.string.md)s é a sintaxe heredoc:
`<<<`. Após este operador, um marcador é
fornecido seguido de uma nova linha. A própria [string](language.types.string.md) é colocada em seguida e a seguir
o mesmo marcador novamente para fechar a string.

O marcador de fechamento pode ser indentado com espaços ou tabulações. Espaços
iguais à indentação do marcador de fechamento são removidos do
início de cada linha da string heredoc.
Anteriormente ao PHP 7.3.0, o marcador *precisava*
estar no começo da linha.

Além disso, o marcador de fechamento precisa seguir as mesmas convenções de nomes
de outros identificadores do PHP: ele precisa conter apenas caracteres alfanuméricos e
sublinhados, e precisa começar com uma letra ou sublinhado.

**Exemplo #2 Exemplo Heredoc simples no PHP 7.3.0**

```
<?php
// Marcador de fechamento não indentado
echo <<<END
      a
     b
    c
\n
END;

// Marcador de fechamento indentado com 3 espaços; 3 espaços removidos de cada linha
echo <<<END
      a
     b
    c
   END;
```

Saída do exemplo acima no PHP 7.3:

```
      a
     b
    c

   a
  b
 c
```

Se o marcador de fechamento estiver identado diferentemente das linhas do corpo,
um [ParseError](class.parseerror.md) será lançado:

**Exemplo #3 Marcador de fechamento indentado diferente das linhas do corpo**

```
<?php
echo <<<END
  a
 b
c
   END;
```

Saída do exemplo acima no PHP 7.3:

```
Parse error: Invalid body indentation level (expecting an indentation level of at least 3) in example.php on line 4
```

Se o marcador de fechamento é identado, tabulações podem ser utilizadas. No entanto,
tabulações e espaços *não podem* estar misturados.
A identação do corpo e o marcador de fechamento precisam usar um ou
outro consistentemente. Se espaços e tabulações forem misturados,
um [ParseError](class.parseerror.md) será lançado.
Essas restrições de whitespace estão incluídas dados que a mistura de tabulações
e espaços são prejudiciais à legibilidade.

**Exemplo #4 Indentação diferente para corpo e marcador de fechamento**

```
<?php
// Todos esses códidos falharão.

// Indentação diferente para corpo (espaços) e marcador de fechamento (tabulações)
{
echo <<<END
a
END;
}

// Misturar tabulações e espaços no corpo
{
    echo <<<END
    a
     END;
}

// Misturar espaços e tabulações no identificador de fechamento
{
echo <<<END
a
END;
}
```

Saída do exemplo acima no PHP 7.3:

```
Parse error: Invalid indentation - tabs and spaces cannot be mixed in example.php line 8
```

O identificador de fechamento do corpo não necessita de um
ponto e vírgula ou nova linha. Por exemplo, o seguinte código
é permitido a partir do PHP7.3.0:

**Exemplo #5 Continuando uma expressão após o identificador de fechamento**

```
<?php
$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);
```

Saída do exemplo acima no PHP 7.3:

```
array(2) {
  [0] =>
  string(11) "a
  b
    c"
  [1] =>
  string(5) "d e f"
}
```

**Aviso**

Se o marcador de fechamento for encontrado no começo da linha, existe
não importando se for parte de outra palavra, será considerado
como marcador de fechamento e causará um [ParseError](class.parseerror.md).

**Exemplo #6 Marcador de fechamento no corpo da string tende a causar um [ParseError](class.parseerror.md)**

```
<?php
$values = [<<<END
a
b
END ING
END, 'd e f'];
```

Saída do exemplo acima no PHP 7.3:

```
Parse error: syntax error, unexpected identifier "ING", expecting "]" in example.php on line 5
```

Para evitar esse problema, basta seguir a seguinte regra:
*escolha identificadores que não aparecem no corpo
do texto*.

**Aviso**

Anteriormente ao PHP 7.3.0, era muito importante notar que a linha com
o identificador de fechamento não poderia conter outros caracteres, exceto um ponto e vírgula
(`;`).
Isso significava que o identificador de fechamento
*não poderia ser identado*, e que não poderia haver espaços
ou tabulações antes ou depois do ponto e vírgula. É importante notar também que
o primeiro caractere antes do fechamento deveria ser uma newline, como
definido pelo sistema operacional. Ou seja, `\n` em
sistemas Unix, incluindo o macOS. O identificador de fechamento também
deveria ser seguido de um newline.

Se essa regra não for seguida, e o identificador de fechamento não estiver "limpo", ele
não será considerado como fechamento, e o PHP continuará lendo o script como se fosse
texto. Se um identificador de fechamento correto não for encontrado até o final do
arquivo, um erro de interpretação será lançado na última linha.

**Exemplo #7 Exemplo inválido, antes do PHP 7.3.0**

```
<?php
class foo {
    public $bar = <<<EOT
bar
    EOT;
}
// O identificador não deve ser indentado
?>
```

**Exemplo #8 Exemplo válido, mesmo antes do PHP 7.3.0**

```
<?php
class foo {
    public $bar = <<<EOT
bar
EOT;
}
?>
```

Heredocs não podem ser usados para inicializar propriedades de classe.

Textos heredoc se comportam como [string](language.types.string.md)s delimitadas por aspas duplas, sem
as aspas duplas. Isso significa que aspas simples em heredocs não precisam ser
escapadas, apesar de que os códigos de escape listados acima podem continuar sendo utilizados. Variáveis
são expandidas, mas o mesmo cuidado deve ser tomado ao expressar variáveis complexas
dentro do heredoc assim como nas [string](language.types.string.md)s.

**Exemplo #9 Exemplo de delimitação de strings heredoc**

```
<?php
$str = <<<EOD
Exemplo de uma string
distribuída em várias linhas
utilizando a sintaxe heredoc.
EOD;

/* Exemplo mais complexo, com variáveis */
class foo
{
    var $foo;
    var $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'Meu nome';

echo <<<EOT
Meu nome é "$name". Eu estou imprimindo $foo->foo.
Agora, eu estou imprimindo {$foo->bar[1]}.
Isto deve imprimir um 'A' maiúsculo: \x41
EOT;
?>
```

O exemplo acima produzirá:

```
Meu nome é "Meu nome". Eu estou imprimindo Foo.
Agora, eu estou imprimindo Bar2.
Isto deve imprimir um 'A' maiúsculo: A
```

É possível também utilizar a sintaxe Heredoc para passar dados para argumentos de
funções:

**Exemplo #10 Exemplo de Heredoc em argumentos**

```
<?php
var_dump(array(<<<EOD
foobar!
EOD
));
?>
```

É possível inicializar variáveis estáticas e
propriedades/constantes de classe utilizando a sintaxe heredoc:

**Exemplo #11 Utilizando o Heredoc na inicialização de valores estáticos**

```
<?php
// Variáveis estáticas
function foo()
{
    static $bar = <<<LABEL
Nada aqui...
LABEL;
}

// Classe propriedades/constantes
class foo
{
    const BAR = <<<FOOBAR
Exemplo de constante
FOOBAR;

    public $baz = <<<FOOBAR
Exemplo de propriedade
FOOBAR;
}
?>
```

O identificador de abertura do Heredoc pode ser opcionalmente
delimitado por aspas duplas:

**Exemplo #12 Usando aspas duplas no Heredoc**

```
<?php
echo <<<"FOOBAR"
Olá, mundo!
FOOBAR;
?>
```

#### Nowdoc

Nowdocs estão para aspas simples assim como os heredocs estão para aspas duplas em
strings. Um nowdoc é especificado similarmente a um heredoc, mas *nenhuma interpolação de string é feita* dentro de um nowdoc. A construção é ideal para
colocar códigos PHP ou outros grandes blocos de texto sem a necessidade de
usar escapes. Compartilha algumas características em comum com a construção SGML
`<![CDATA[ ]]>`, assim é declarado um bloco de
texto onde nada será analisado.

Um nowdoc é identificado com a mesma sequência `<<<`
usada para heredocs, mas o identificador precisa ficar entre
aspas simples, por exemplo. `<<<'EOT'`. Todas as regras para
identificadores heredoc também se aplicam para identificadores nowdoc, especialmente aquelas
referentes a aparência do identificador de fechamento.

**Exemplo #13 Exemplo de string em Nowdoc**

```
<?php
echo <<<'EOD'
Exemplo de string abrangendo várias linhas
usando a sintaxe nowdoc. As barras invertidas são sempre tratadas literalmente,
por exemplo. \\ e \'.
EOD;
```

O exemplo acima produzirá:

```
Exemplo de string abrangendo várias linhas
usando a sintaxe nowdoc. As barras invertidas são sempre tratadas literalmente,
por exemplo. \\ e \'.
```

**Exemplo #14 Exemplo de Nowdoc, com variáveis**

```
<?php
class foo
{
    public $foo;
    public $bar;

    function __construct()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<'EOT'
Meu nome é "$nome". Estou imprimindo alguns $foo->foo.
Agora, estou imprimindo alguns {$foo->bar[1]}.
Isso não deve imprimir um 'A' maiúsculo: \x41
EOT;
?>
```

O exemplo acima produzirá:

```
Meu nome é "$nome". Estou imprimindo alguns $foo->foo.
Agora, estou imprimindo alguns {$foo->bar[1]}.
Isso não deve imprimir um 'A' maiúsculo: \x41
```

**Exemplo #15 Exemplo de dado estático**

```
<?php
class foo {
    public $bar = <<<'EOT'
bar
EOT;
}
?>
```

#### Interpolação de strings

Quando uma [string](language.types.string.md) é especificada dentro de aspas duplas ou heredoc,
as [variáveis](language.variables.md) podem ser substituídas dentro dela.

Há dois tipos de sintaxe: uma
[básica](language.types.string.md#language.types.string.parsing.basic) e uma
[avançada](language.types.string.md#language.types.string.parsing.advanced).
A sintaxe básica é a mais comum e conveniente. Provê uma maneira de
incorporar uma variável, o valor de um [array](language.types.array.md) ou uma propriedade de [object](language.types.object.md)
em uma [string](language.types.string.md) com o mínimo de esforço.

##### Sintaxe básica

Se um sinal de cifrão (`$`) for encontrado, os caracteres
que o seguem, e que podem ser usados em nome de variável, serão interpretados
como tal e substituídos.

**Exemplo #16 Interpolação de string**

```
<?php
$suco = "maçã";

echo "Ele bebeu um pouco de suco de $suco." . PHP_EOL;

?>
```

O exemplo acima produzirá:

```
Ele bebeu um pouco de suco de maçã.
```

Formalmente, a estrutura para a sintaxe básica de substituição de variável é
o seguinte:

```
string-variável::
     nome-de-variável   (posição-ou-propriedade)?
   | ${   expressão   }

posição-ou-propriedade::
     posição-na-string
   | propriedade-na-string

posição-na-string::
     [   nome   ]
   | [   nome-de-variável   ]
   | [   inteiro-literal   ]

propriedade-na-string::
     ->  nome

nome-de-variável::
     $   nome

nome::
     [a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*
```

**Aviso**

A sintaxe `${ expressão }` foi descontinuada a partir do
PHP 8.2.0, já que pode ser interpretada como
[variáveis variáveis](language.variables.variable.md):

```
<?php
const foo = 'bar';
$foo = 'foo';
$bar = 'bar';
var_dump("${foo}");
var_dump("${(foo)}");
?>
```

Saída do exemplo acima no PHP 8.2:

```
Deprecated: Using ${var} in strings is deprecated, use {$var} instead in file on line 6

Deprecated: Using ${expr} (variable variables) in strings is deprecated, use {${expr}} instead in file on line 9
string(3) "foo"
string(3) "bar"
```

O exemplo acima produzirá:

```
string(3) "foo"
string(3) "bar"
```

A sintaxe [avançada](language.types.string.md#language.types.string.parsing.advanced)
de interpolação de string deve ser usada em seu lugar.

> **Nota**:
>
> Se não for possível formar um nome válido, o símbolo de cifrão permanece
> literal na string:
>
> ```
> <?php
> echo "Nenhuma interpolação $ aconteceu\n";
> echo "Nenhuma interpolação $\n aconteceu\n";
> echo "Nenhuma interpolação $2 aconteceu\n";
> ?>
> ```
>
> O exemplo acima produzirá:
>
> ```
> Nenhuma interpolação $ aconteceu
> Nenhuma interpolação $
>  aconteceu
> Nenhuma interpolação $2 aconteceu
> ```

**Exemplo #17 Interpolando o valor da primeira dimensão de um array ou propriedade**

```
<?php
$sucos = array("maça", "laranja", "chave_string" => "roxo");

echo "Ele bebeu um pouco de suco de $sucos[0].";
echo PHP_EOL;
echo "Ele bebeu um pouco de suco de $sucos[1].";
echo PHP_EOL;
echo "Ele bebeu um pouco de suco de $sucos[chave_string].";
echo PHP_EOL;

class A {
    public $s = "string";
}

$o = new A();

echo "Valor do objeto: $o->s.";
?>
```

O exemplo acima produzirá:

```
Ele bebeu um pouco de suco de maçã.
Ele bebeu um pouco de suco de laranja.
Ele bebeu um pouco de suco de roxo.
Valor do objeto: string.
```

> **Nota**:
>
> A chave do array deve ser sem aspas, e por isso não é possível
> referenciar uma constante como chave com a sintaxe básica. Use a sintaxe
> [avançada](language.types.string.md#language.types.string.parsing.advanced)
> em seu lugar.

A partir do PHP 7.1.0, índices numéricos *negativos* também são
suportados.

**Exemplo #18 Índices numéricos negativos**

```
<?php
$string = 'string';
echo "O caractere no índice -2 é $string[-2].", PHP_EOL;
$string[-3] = 'o';
echo "Alterar o caractere no índice -3 para 'o' dá $string.", PHP_EOL;
?>
```

O exemplo acima produzirá:

```
O caractere no índice -2 é n.
Alterar o caractere no índice -3 para o dá strong.
```

Para qualquer coisa mais complexa, a sintaxe
[avançada](language.types.string.md#language.types.string.parsing.advanced)
deve ser usada.

##### Sintaxe avançada (com chaves)

A sintaxe avançada permite a interpolação de
*variáveis* com acessadores arbitrários.

Qualquer variável escalar, elemento de array ou propriedade de objeto
(static ou não) com uma
representação de uma [string](language.types.string.md) pode ser incluída com essa sintaxe.
A expressão é escrita da mesma forma como apareceria fora da
[string](language.types.string.md) e então coloque-o entre `{` e
`}`. Já que que `{` não pode escapado, esta
sintaxe será somente reconhecida quando o `$` seguir,
imediatamente, o `{`. Use `{\$` para obter um literal
`{$`. Alguns exemplos que tornam isto claro:

**Exemplo #19 Sintaxe com chaves**

```
<?php
const DATA_KEY = 'chave-const';
$fantastico = 'fantástico';
$arr = [
    '1',
    '2',
    '3',
    [41, 42, 43],
    'chave' => 'Valor indexado',
    'chave-const' => 'Chave com sinal de menos',
    'foo' => ['foo1', 'foo2', 'foo3']
];

// Não vai funcionar, resultado: Isso é { fantástico}
echo "Isso é { $fantastico}" . PHP_EOL;

// Funciona, resultado: Isso é fantástico
echo "Isso é {$fantastico}" . PHP_EOL;

// Para mostrar chaves na saída:
echo "Isso é {{$fantastico}}" . PHP_EOL;

class Square {
    public $width;

    public function __construct(int $width) { $this->width = $width; }
}

$square = new Square(5);

// Funciona
echo "Este quadrado tem {$square->width}00 centímetros de largura." . PHP_EOL;

// Funciona, as chaves entre aspas funcionam apenas usando a sintaxe de chaves
echo "Isso funciona: {$arr['chave']}" . PHP_EOL;

// Funciona
echo "Isso funciona: {$arr[3][2]}" . PHP_EOL;

echo "Isso funciona: {$arr[DATA_KEY]}" . PHP_EOL;

// Ao usar arrays multidimensionais, sempre use chaves em torno dos arrays
// quando dentro de strings
echo "Funciona: {$arr['foo'][2]}" . PHP_EOL;

echo "Funciona: {$obj->values[3]->name}" . PHP_EOL;

echo "Funciona: {$obj->$staticProp}" . PHP_EOL;

// Não funciona, imprime: C:\diretório\{fantástico}.txt
echo "C:\diretório\{$fantastico}.txt" . PHP_EOL;

// Funciona, imprime: C:\diretório\fantástico.txt
echo "C:\\diretório\\{$fantastico}.txt" . PHP_EOL;
?>
```

> **Nota**:
>
> Como esta sintaxe permite expressões arbitrárias, é possível usar
> [variáveis variáveis](language.variables.variable.md)
> dentro da sintaxe avançada.

#### Acesso e modificação da string por caractere

É possível acessar e modificar caracteres dentro de [string](language.types.string.md)s
especificando a posição, baseada em zero, do caractere desejado na
[string](language.types.string.md) usando colchetes, parecido com [array](language.types.array.md)s, por exemplo
$str[42]. Imagine uma [string](language.types.string.md) como um
[array](language.types.array.md) de caracteres. As funções
[substr()](function.substr.md) e [substr\_replace()](function.substr-replace.md),
podem ser utilizadas quando se deseja extrair ou substituir mais que 1 caractere.

> **Nota**:
>
> A partir do PHP 7.1.0, posições negativas para strings são suportadas. Estas especificam
> a posição do final da string.
> Antes, posições negativas emitiam um **`E_NOTICE`** para leitura
> (gerando um string vazia) e um **`E_WARNING`** para escrita
> (deixando a string intocada).

> **Nota**:
>
> Anteriormente ao PHP 8.0.0, [string](language.types.string.md)s também poderiam ser usados utilizando chaves, por exemplo
> $str{42}.
> Essa sintaxe por chaves foi descontinuada desde o PHP 7.4.0 e não é mais suportada a partir do PHP 8.0.0.

**Aviso**

Escrever em uma posição fora do intervalo preenche a string com espaços.
Tipos diferentes de inteiro são convertidos para inteiro.
Tipo ilegal de deslocamento emite um **`E_WARNING`**.
Apenas o primeiro caractere de uma string atribuída é usado.
A partir de PHP 7.1.0, a atribuição de uma string vazia lança um erro fatal. Antes,
era atribuído o byte NULL.

**Aviso**

Internamente, as strings do PHP são arrays de bytes. Como resultado, acessar ou
modificar uma string usando colchetes não é seguro com multi-bytes e
deve ser feito somente em strings que utilizem apenas um byte em sua codificação,
como a ISO-8859-1.

> **Nota**:
>
> A partir do PHP 7.1.0, aplicar um operador de índice vazio em uma string lança um erro fatal
> Antes, a string vazia era convertida em um array.

**Exemplo #20 Alguns exemplos com strings**

```
<?php
// Obtém o primeiro caractere de uma string
$str = 'Isto é um teste.';
$first = $str[0];
var_dump($first);

// Obtém o terceiro caractere de uma string
$third = $str[2];
var_dump($third);

// Obtém o último caractere de uma string
$str = 'Isto ainda é um teste.';
$last = $str[strlen($str)-1];
var_dump($last);

// Modifica o último caractere de uma string
$str = 'Olhe para a onda';
$str[strlen($str)-1] = 'e';
var_dump($str);
?>
```

Índices de strings devem ser inteiros ou strings parecidos com inteiros,
de outra forma um aviso é lançado.

**Exemplo #21 Exemplo de índices inválidos em strings**

```
<?php
$str = 'abc';

$keys = [ '1', '1.0', 'x', '1x' ];

foreach ($keys as $keyToTry) {
    var_dump(isset($str[$keyToTry]));

    try {
        var_dump($str[$keyToTry]);
    } catch (TypeError $e) {
        echo $e->getMessage(), PHP_EOL;
    }

    echo PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
bool(true)
string(1) "b"

bool(false)
Cannot access offset of type string on string

bool(false)
Cannot access offset of type string on string

bool(false)

Warning: Illegal string offset "1x" in Standard input code on line 10
string(1) "b"
```

> **Nota**:
>
> Acessar variáveis de outros tipos (excluindo-se arrays ou objetos que
> implementem certas interfaces) usando `[]` ou
> `{}` silenciosamente retornará **`null`**.

> **Nota**:
>
> Caracteres dentro de strings literais podem ser acessados
> utilizando `[]` ou `{}`.

> **Nota**:
>
> Acessar caracteres em strings utilizando a sintax por
> `{}` foi descontinuada desde o PHP 7.4,
> e não existe no PHP 8.0.

### Funções e operadores úteis

[String](language.types.string.md)s podem ser concatenadas utilizando o operador '.' (ponto). Note
que o operador '+' (adição) *não* funciona para isso.
Veja [operadores de string](language.operators.string.md) para
mais informações.

Há bastantes funções úteis para manipulação de [string](language.types.string.md)s.

Veja a [seção de funções de string](ref.strings.md) para
funções gerais e [funções de expressões regulares compatíveis com Perl](ref.pcre.md)
para funcionalidades avançadas de localização & e substituição.

Há também [funções para strings URL](ref.url.md) e
funções para criptografia/descriptografia de strings
([Sodium](ref.sodium.md) e
[Hash](ref.hash.md)).

Finalmente, veja também as [funções de tipos de
caracteres](ref.ctype.md).

### Conversão em strings

Um valor pode ser convertido em uma [string](language.types.string.md) utilizando o modificador
`(string)` ou a função [strval()](function.strval.md).
A conversão em [string](language.types.string.md) é automaticamente realizada no escopo de uma
expressão onde uma [string](language.types.string.md) é necessária. Isto acontece no uso das funções
[echo](function.echo.md) ou [print](function.print.md) ou quando
o valor de uma variável é comparado com uma [string](language.types.string.md). As seções [Tipos](language.types.md) e [Conversão de Tipos](language.types.type-juggling.md) tornarão
um pouco mais claro o assunto. Veja também a função [settype()](function.settype.md).

O valor [bool](language.types.boolean.md) **`true`** é convertido para a [string](language.types.string.md)
`"1"`. O [bool](language.types.boolean.md) **`false`** é convertido para
`""` (uma string vazia). Isso permite converter nos dois
sentidos entre os valores [bool](language.types.boolean.md) e [string](language.types.string.md).

Um [int](language.types.integer.md) ou um [float](language.types.float.md) é convertido para uma
[string](language.types.string.md) representando o número textualmente (incluindo a parte
do expoente nos [float](language.types.float.md)s). Números de ponto flutuante podem ser
convertidos usando a notação exponencial (`4.1E+6`).

> **Nota**:
>
> A partir do PHP 8.0.0, o caractere de separação de decimais sempre é
> um ponto ("`.`"). Anteriormente ao PHP 8.0.0,
> o separador de decimais era definido pela localidade do script
> (LC\_NUMERIC). Veja mais detalhes na função [setlocale()](function.setlocale.md).

[Array](language.types.array.md)s são sempre convertidos para uma [string](language.types.string.md)
`"Array"`; por isso [echo](function.echo.md) e
[print](function.print.md) não podem, por si só, mostrar o conteúdo de um
[array](language.types.array.md). Para visualizar um único elemento, use uma construção como
`echo $arr['foo']`. Veja abaixo dicas de como visualizar todo seu
conteúdo.

Para converter [object](language.types.object.md)s em [string](language.types.string.md)s, o método
mágico [\_\_toString](language.oop5.magic.md) deve ser usado.

[Resource](language.types.resource.md)s são sempre convertidos para [string](language.types.string.md)s na
estrutura `"Resource id #1"` onde `1` é
o número único do [resource](language.types.resource.md) atribuído pelo PHP
em tempo de execução. Apesar de que a estrutura exata desta string não seja confiável
e esteja sujeita a modificações, será sempre única a um dado recurso
dentro do ciclo de vida de um script sendo executado (por exemplo, em uma requisição Web ou em um processo
CLI) e não será reutilizada. Para obter o tipo de um [resource](language.types.resource.md), utilize
a função [get\_resource\_type()](function.get-resource-type.md).

**`null`** é sempre convertido para uma string vazia.

Como declarado acima, converter diretamente um [array](language.types.array.md),
[object](language.types.object.md) ou [resource](language.types.resource.md) para uma [string](language.types.string.md) não
fornece nenhuma informação útil sobre o valor, a não ser seu tipo. Veja as
funções [print\_r()](function.print-r.md) e [var\_dump()](function.var-dump.md)
para maneiras mais efetivas de inspecionar o conteúdo destes tipos.

A maioria dos valores no PHP também podem ser convertidos em [string](language.types.string.md)s para armazenamento
permanente. Este método é chamado de serialização e pode ser feito com a função
[serialize()](function.serialize.md).

### Detalhes do tipo string

A [string](language.types.string.md) no PHP é implementada como um array de bytes e um
inteiro indicando seu tamanho no buffer. Não existem informações de como
esses bytes são traduzidos em caracteres, ficando essa tarefa com o programador.
Não existem limitações sobre a composição dos valores da string; em
particular, bytes com valor `0` (“bytes NUL”) são permitidos
em qualquer lugar da string. Entretanto, algumas funções mencionadas neste manual como não
seguras em termos binários podem repassar as strings para bibliotecas que ignoram os dados
após o byte nulo.

Esta natureza do tipo string explica o motivo de não haver o tipo "byte" disponível
no PHP – as strings assumem este papel. Funções que não retornam nenhuma informação textual – por
exemplo, dados arbitrários lidos de um socket de rede – continuarão retornando
strings.

Dado que o PHP não dita uma codificação específica para strings, pode-se
questionar como strings literais seriam codificadas. Por exemplo, a string
`"á"` é equivalente a `"\xE1"` (ISO-8859-1),
`"\xC3\xA1"` (UTF-8, C form),
`"\x61\xCC\x81"` (UTF-8, D form) ou qualquer outra representação
possível? A resposta é que a string poderá ser codificada em qualquer forma
que o arquivo de script estiver codificado. Assim, se o script for escrito na
codificação ISO-8859-1, a string será codificada como ISO-8859-1 e assim por diante. Entretanto,
isso não se aplica se o Zend Multibyte estiver ativado; neste caso, o script
pode ser escrito em uma codificação arbitrária (que é declarada explicitamente ou é
detectada) e então convertida em um codificação interna, a qual
será a codificação utilizada nas strings literais.
Note que há algumas restrições na codificação do script (ou na
codificação interna caso o Zend Multibyte esteja ativo) – isso quase sempre
significa que essa codificação deve ser um conjunto que contenha dentro de si a ASCII, como
UTF-8 ou ISO-8859-1. Note, entretanto, que codificações que são dependentes de estado, onde
os mesmos valores de bytes possam ser utilizados tanto em estados iniciais quanto não iniciais,
podem ser problemáticos.

Claro que, para serem úteis, funções que operam em textos podem ter que
fazer certas suposições sobre como as strings foram codificadas. Infelizmente, existem
muitas variações sobre este assunto através das funções do PHP:

- Algumas funções assumem que a string foi codificada em alguma (qualquer) codificação de byte
  único, mas elas não precisam interpretar estes bytes como caracteres
  específicos. Este é o caso, por exemplo, das funções [substr()](function.substr.md),
  [strpos()](function.strpos.md), [strlen()](function.strlen.md) ou
  [strcmp()](function.strcmp.md). Outra forma de refletir sobre essas funções é
  que elas operam em buffers de memória, isto é, elas trabalham com bytes e deslocamento
  de bytes.
- Outras funções recebem a codificação da string como um parâmetro ou
  assumem um padrão se nenhum for informado. Este é o caso da função
  [htmlentities()](function.htmlentities.md) e da maioria das funções
  da extensão [mbstring](book.mbstring.md).
- Outras utilizam o idioma atual (veja [setlocale()](function.setlocale.md)), mas
  elas operam byte-a-byte.
- Finalmente, elas podem simplesmente assumir que a string esteja utilizando uma codificação específica,
  geralmente UTF-8. Este é o caso da maioria das funções das extensões
  [intl](book.intl.md) e
  [PCRE](book.pcre.md)
  (na segunda, somente quando o modificador `u` é utilizado).

Por fim, isso significa que escrever programas corretos utilizando Unicode depende de
evitar cuidadosamente funções que não funcionam e que provavelmente
irão corromper os dados e usar, em substituição, funções que se comportem corretamente,
geralmente das extensões [intl](book.intl.md) e
[mbstring](book.mbstring.md).
Entretanto, usar funções que manipulam codificação Unicode é somente o
começo. Não importa as funções que a linguagem provê, é essencial
saber a especificação Unicode. Por exemplo, um programa que supõe que só
existem maiúsculas e mínusculas está fazendo uma suposição errada.

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
