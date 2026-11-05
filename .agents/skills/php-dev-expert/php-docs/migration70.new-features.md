# Novos Recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration70.new-features.php

---

## Novos Recursos

### Declarações de tipos escalares

[Declarações de tipos](language.types.declarations.md) escalares
vêm em dois sabores: coercivo (padrão) e estrito. Para parâmetros os seguintes tipos
agora podem ser forçados (tanto coercivamente quanto estritamente): strings
([string](language.types.string.md)), inteiros (`int`), números
de ponto flutuante ([float](language.types.float.md)) e booleanos (`bool`). Eles
incrementam os outros tipos introduzidos no PHP 5: nomes de classe, interfaces,
[array](language.types.array.md) e [callable](language.types.callable.md).

```
<?php
// Modo coercivo
function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));
```

O exemplo acima produzirá:

```
int(9)
```

Para habilitar o modo estrito, uma única diretiva [`declare`](control-structures.declare.md) deve ser colocada no
topo do arquivo. Isto significa que a rigorosidade de tipificação para escalares é
configurada por arquivo. Esta diretiva não afeta somente as declarações de tipo
de parâmetros, mas também do tipo de retorno de funções (veja
[declarações de tipo de retorno](language.types.declarations.md)),
funções internas do PHP e funções de extensões
carregadas.

A documentação completa e exemplos de declarações de tipo escalar podem ser encontradas
na referência de
[declarações de tipo](language.types.declarations.md).

### Declarações de tipo de retorno

O PHP 7 adiciona suporte a
[declarações de tipo de retorno](language.types.declarations.md).
Similar às
[declarações de tipo de argumento](language.types.declarations.md)
as declarações de tipo de retorno especificam o tipo do valor que será
retornado por uma função. Os mesmos
[tipos](language.types.declarations.md)
estão disponíveis para declarações de tipo de retorno assim como estão disponíveis para declarações
de tipo de argumentos.

```
<?php

function arraysSum(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(arraysSum([1,2,3], [4,5,6], [7,8,9]));
```

O exemplo acima produzirá:

```
Array
(
    [0] => 6
    [1] => 15
    [2] => 24
)
```

A documentação completa e exemplos de declarações de tipo de retorno podem ser encontradas
na referência de
[declarações de tipo de retorno](language.types.declarations.md).

### Operador de coalescência nula

O operador de coalescência nula (`??`) foi adicionado como
um truque sintático para o caso trivial de precisar usar um ternário em
conjunto com a função [isset()](function.isset.md). Ele retorna o primeiro operando
se este existir e não for **`null`**; caso contrário retorna o segundo operando.

```
<?php
// Obtém o valor de $_GET['user'] e retorna 'nobody'
// se ele não existir.
$username = $_GET['user'] ?? 'nobody';
// Isto equivale a:
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

// A coalescência pode ser encadeada: isto irá retornar o primeiro
// valor definido entre $_GET['user'], $_POST['user'] e
// 'nobody'.
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
?>
```

### Operador "nave espacial" (spaceship)

O operador nave espacial é utilizado para comparar duas expressões. Ele retorna -1, 0
ou 1 quando $a for respectivamente menor que, igual a ou maior
que $b. As comparações são feitas de acordo com as já conhecidas
[regras de comparação de tipos](types.comparisons.md) do PHP.

```
<?php
// Inteiros
echo 1 <=> 1; // 0
echo 1 <=> 2; // -1
echo 2 <=> 1; // 1

// Números de ponto flutuante
echo 1.5 <=> 1.5; // 0
echo 1.5 <=> 2.5; // -1
echo 2.5 <=> 1.5; // 1

// Strings
echo "a" <=> "a"; // 0
echo "a" <=> "b"; // -1
echo "b" <=> "a"; // 1
?>
```

### Arrays de constantes utilizando a função [define()](function.define.md)

Constantes do tipo [array](language.types.array.md) agora podem ser definidas com a função
[define()](function.define.md). No PHP 5.6 elas só poderiam ser definidas com
[`const`](language.constants.syntax.md).

```
<?php
define('ANIMALS', [
    'dog',
    'cat',
    'bird'
]);

echo ANIMALS[1]; // imprime "cat"
?>
```

### Classes Anônimas

O suporte a classes anônimas foi adicionado utilizando `new
class`. Estas podem ser utilizadas no lugar de definições completas de classes para
objetos descartáveis.

```
<?php
interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;

    public function getLogger(): Logger {
         return $this->logger;
    }

    public function setLogger(Logger $logger) {
         $this->logger = $logger;
    }
}

$app = new Application;
$app->setLogger(new class implements Logger {
    public function log(string $msg) {
        echo $msg;
    }
});

var_dump($app->getLogger());
?>
```

O exemplo acima produzirá:

```
object(class@anonymous)#2 (0) {
}
```

A documentação completa pode ser encontrada na
[referência de classes anônimas](language.oop5.anonymous.md).

### Sintaxe de escape de códigos Unicode

Toma um código Unicode em sua forma hexadecimal e imprime
esse código em UTF-8 em uma string delimitada por aspas ou um heredoc. Qualquer código
válido é aceito, com os zeros à esquerda sendo opcionais.

```
<?php

echo "\u{aa}", PHP_EOL;
echo "\u{0000aa}", PHP_EOL;

echo "\u{9999}", PHP_EOL;

echo <<<EOT
\u{01f418}
EOT;

?>
```

O exemplo acima produzirá:

```
ª
ª (o mesmo que antes mas com os zeros à esquerda opcionais)
香
```

### [Closure::call()](closure.call.md)

O método [Closure::call()](closure.call.md) é uma forma mais eficaz
e abreviada de associar temporariamente um escopo de objeto a uma closure e invocá-la.

```
<?php
class A {private $x = 1;}

// Código anterior ao PHP 7
$getXCB = function() {return $this->x;};
$getX = $getXCB->bindTo(new A, 'A'); // intermediate closure
echo $getX();

// Código do PHP 7+
$getX = function() {return $this->x;};
echo $getX->call(new A);
```

O exemplo acima produzirá:

```
1
1
```

### [unserialize()](function.unserialize.md) filtrado

Esse recurso busca prover uma melhor segurança ao desserializar objetos
com informações não confiáveis. Ele impede possíveis injeções de código ao permitir que o
desenvolvedor liste as classes que podem ser desserializadas.

```
<?php

// converte todos os objetos em objetos __PHP_Incomplete_Class
$data = unserialize($foo, ["allowed_classes" => false]);

// converte todos os objetos em objetos __PHP_Incomplete_Class exceto aqueles de MyClass e MyClass2
$data = unserialize($foo, ["allowed_classes" => ["MyClass", "MyClass2"]]);

// comportamento padrão (o mesmo que omitir o segundo argumento) que aceita todas as classes
$data = unserialize($foo, ["allowed_classes" => true]);
```

### [IntlChar](class.intlchar.md)

A nova classe [IntlChar](class.intlchar.md) busca expor funcionalidades adicionais
da ICU. A classe define alguns métodos estáticos e
constantes que podem ser utilizados para manipular caracteres Unicode.

```
<?php

printf('%x', IntlChar::CODEPOINT_MAX);
echo IntlChar::charName('@');
var_dump(IntlChar::ispunct('!'));
```

O exemplo acima produzirá:

```
10ffff
COMMERCIAL AT
bool(true)
```

Para utilizar esta classe a extensão [Intl](book.intl.md) deve estar instalada.

### Expectations

Expectations são
aprimoramentos compatíveis com versões anteriores para a antiga função [assert()](function.assert.md).
Permitem asserções com custo zero em código em produção e
fornecem a capacidade de lançar exceções personalizadas quando a asserção falha.

Enquanto a API antiga continua sendo mantida por motivos de compatibilidade,
[assert()](function.assert.md) agora é um construtor de linguagem, permitindo que
o primeiro parâmetro seja uma expressão, em vez de somente uma [string](language.types.string.md) a ser
avaliada ou um valor [bool](language.types.boolean.md) a ser testado.

```
<?php
ini_set('assert.exception', 1);

class CustomError extends AssertionError {}

assert(false, new CustomError('Alguma mensagem de erro'));
?>
```

O exemplo acima produzirá:

```
Fatal error: Uncaught CustomError: Alguma mensagem de erro
```

Mais detalhes sobre este recurso, incluindo como configurá-lo tanto no
ambiente de desenvolvimento quanto em produção, podem ser encontrados na página do manual
do construtor de linguagem [assert()](function.assert.md);

### Agrupamento de declarações `use`

Classes, funções e constantes importadas do mesmo [`namespace`](language.namespaces.definition.md),
agora podem ser agrupadas em uma única declaração [`use`](language.namespaces.importing.md)

```
<?php
// Código anterior ao PHP 7
use some\namespace\ClassA;
use some\namespace\ClassB;
use some\namespace\ClassC as C;

use function some\namespace\fn_a;
use function some\namespace\fn_b;
use function some\namespace\fn_c;

use const some\namespace\ConstA;
use const some\namespace\ConstB;
use const some\namespace\ConstC;

// Código do PHP 7+
use some\namespace\{ClassA, ClassB, ClassC as C};
use function some\namespace\{fn_a, fn_b, fn_c};
use const some\namespace\{ConstA, ConstB, ConstC};
?>
```

### Expressões de Retorno nos Geradores

Este recurso foi construído em cima da funcionalidade de geradores introduzida no PHP 5.5.
Ele permite que uma declaração `return` seja usada dentro de um
gerador para permitir que uma expressão final seja retornada (retornar por
referência não é permitido). Este valor pode ser obtido usando o novo método
`Generator::getReturn()`, que deve ser usado somente
quando o gerador terminar a geração dos valores.

```
<?php

$gen = (function() {
    yield 1;
    yield 2;

    return 3;
})();

foreach ($gen as $val) {
    echo $val, PHP_EOL;
}

echo $gen->getReturn(), PHP_EOL;
```

O exemplo acima produzirá:

```
1
2
3
```

A habilidade de retornar explicitamente o valor final de um gerador é
conveniente de se ter. Ela permite que o retorno do valor final do
gerador (pode ser de uma computação concorrente) possa ser manipulado
especificamente pelo código cliente que executa o gerador. Isso é bem mais
simples que forçar o código cliente a primeiro checar se o valor final
já foi gerado, e em caso afirmativo, manipular esse valor especificamente.

### Delegação de geradores

Geradores agora podem delegar para outros geradores,
objetos [Traversable](class.traversable.md) ou [array](language.types.array.md)
automaticamente, sem a necessidade de escrever código repetitivo no gerador externo
utilizando o construtor [`yield from`](language.generators.syntax.md#control-structures.yield.from)

```
<?php
function gen()
{
    yield 1;
    yield 2;
    yield from gen2();
}

function gen2()
{
    yield 3;
    yield 4;
}

foreach (gen() as $val)
{
    echo $val, PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
1
2
3
4
```

### Divisão de inteiros com [intdiv()](function.intdiv.md)

A nova função [intdiv()](function.intdiv.md) realiza a divisão de inteiros
de seus operandos e a retorna.

```
<?php
var_dump(intdiv(10, 3));
?>
```

O exemplo acima produzirá:

```
int(3)
```

### Opções de sessões

A função [session\_start()](function.session-start.md) agora aceita um [array](language.types.array.md) de
opções que sobrescrevem as
[diretivas de configuração de sessões](session.configuration.md)
normalmente configuradas no php.ini.

Estas opções também foram expandidas para suportar
[session.lazy\_write](session.configuration.md#ini.session.lazy-write), que está
habilitada por padrão e faz com que o PHP somente sobrescreva um arquivo de sessão se
a informação da sessão foi modificada, e `read_and_close`, que é
uma opção que só pode ser passada para a função [session\_start()](function.session-start.md) para
indicar que os dados da sessão devem ser lidos e, em seguida, a sessão deve
ser imediatamente fechada sem alterações.

Por exemplo, para configurar
[session.cache\_limiter](session.configuration.md#ini.session.cache-limiter) para
`private` e fechar imediatamente a sessão após
lê-la:

```
<?php
session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
]);
?>
```

### [preg\_replace\_callback\_array()](function.preg-replace-callback-array.md)

A nova função [preg\_replace\_callback\_array()](function.preg-replace-callback-array.md) permite
que o código seja escrito de forma mais limpa com a utilização da função
[preg\_replace\_callback()](function.preg-replace-callback.md). Antes do PHP 7,
callbacks que precisam ser executadas por expressões regulares exigiam que a
função de callback fosse poluída com muitas ramificações.

Agora, funções de callback podem ser registradas em cada expressão regular utilizando um
array associativo, onde a chave é uma expressão regular e o valor é uma
função de callback.

### Funções CSPRNG

Duas novas funções foram adicionadas para gerar inteiros e strings
criptograficamente seguros de maneira multiplataforma:
[random\_bytes()](function.random-bytes.md) e [random\_int()](function.random-int.md).

### A função [list()](function.list.md) pode sempre desempacotar objetos que implementam [ArrayAccess](class.arrayaccess.md)

Antes a função [list()](function.list.md) não garantia corretude
em operações com objetos que implementam [ArrayAccess](class.arrayaccess.md).
Isso foi corrigido.

### Outros Recursos

- Acesso a membros de classe na clonagem foi adicionado,
  por exemplo, `(clone $foo)->bar()`.

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
