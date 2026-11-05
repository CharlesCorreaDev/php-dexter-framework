# Novas funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.new-features.php

---

## Novas funcionalidades

### Tipos anuláveis

Declarações de tipo para parâmetros e valores de retorno agora podem ser marcados como
anuláveis, prefixando-se o nome do tipo com um ponto de interrogação. Isto significa
que assim como o tipo especificado, **`null`** também pode ser passado como argumento, ou
retornado como um valor, respectivamente.

```
<?php

function testReturnA(): ?string
{
    return 'elePHPant';
}

var_dump(testReturnA());

function testReturnB(): ?string
{
    return null;
}

var_dump(testReturnB());

function test(?string $name)
{
    var_dump($name);
}

test('elePHPant');
test(null);
test();
```

O exemplo acima produzirá:

```
string(9) "elePHPant"
NULL
string(9) "elePHPant"
NULL
Fatal error: Uncaught ArgumentCountError: Too few arguments to function test(), 0 passed in...
```

### Funções void

Um tipo de retorno [void](language.types.void.md) foi introduzido. Funções declaradas com
void como seu tipo de retorno precisam omitir totalmente a instrução de retorno,
ou usar uma instrução de retorno vazia. **`null`** não é um valor de retorno válido para uma
função void.

```
<?php
function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b);
```

O exemplo acima produzirá:

```
null
int(2)
int(1)
```

Tentar usar um valor de retorno de uma função void simplesmente é avaliado como
**`null`**, sem alertas emitidos. A razão para isso é que alertas
implicariam no uso de funções genéricas de ordem superior.

### Desconstrução simétrica de array

A sintaxe curta de array (`[]`) agora pode ser usada para
desconstruir arrays para atribuições (incluindo dentro de
`foreach`), como uma alternativa para a sintaxe
[list()](function.list.md) existente, o que ainda é suportado.

```
<?php
$data = [
    [1, 'Tom'],
    [2, 'Fred'],
];

// estilo list()
list($id1, $name1) = $data[0];

// estilo []
[$id1, $name1] = $data[0];

// estilo list()
foreach ($data as list($id, $name)) {
    // lógica aqui com $id e $name
}

// estilo []
foreach ($data as [$id, $name]) {
    // lógica aqui com $id e $name
}
```

### Visibilidade de constante de classe

Foi adicionado suporte para especificação de visibilidade de constantes de classe.

```
<?php
class ConstDemo
{
    const PUBLIC_CONST_A = 1;
    public const PUBLIC_CONST_B = 2;
    protected const PROTECTED_CONST = 3;
    private const PRIVATE_CONST = 4;
}
```

### Pseudo-tipo [iterable](language.types.iterable.md)

Um novo pseudo-tipo (similar a [callable](language.types.callable.md)) chamado
[iterable](language.types.iterable.md) (iterável) foi introduzido. Pode ser usado em tipos de
parâmetros e valores de retorno, onde aceita tanto arrays quanto objetos que implementam
a interface [Traversable](class.traversable.md). Com respeito à sub-tipagem,
tipos de parâmetros de classes filhas podem ampliar uma declaração de classe pai de um [array](language.types.array.md)
ou [Traversable](class.traversable.md) para um [iterable](language.types.iterable.md). Com tipos de retorno,
classes filhas podem estreitar um tipo de retorno da classe pai de [iterable](language.types.iterable.md) para
[array](language.types.array.md) ou um objeto que implemente [Traversable](class.traversable.md).

```
<?php
function iterator(iterable $iter)
{
    foreach ($iter as $val) {
        //
    }
}
```

### Manipulação de exceção com multi-captura

Exceções múltiplas por bloco de captura podem agora ser especificadas usando o caractere
de barra vertical (`|`). Isto é útil para quando exceções
diferentes de hierarquias de classe diferentes são manipuladas ao mesmo tempo.

```
<?php
try {
    // algum código
} catch (FirstException | SecondException $e) {
    // manipula a primeira e a segunda exceções
}
```

### Suporte para chaves em [list()](function.list.md)

Agora pode-se especificar chaves na função [list()](function.list.md), ou sua nova sintaxe curta
`[]`. Isto habilita a desconstrução de arrays com
chaves não inteiras ou não sequenciais.

```
<?php
$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];

// estilo list()
list("id" => $id1, "name" => $name1) = $data[0];

// estilo []
["id" => $id1, "name" => $name1] = $data[0];

// estilo list()
foreach ($data as list("id" => $id, "name" => $name)) {
    // lógica aqui com $id e $name
}

// estilo []
foreach ($data as ["id" => $id, "name" => $name]) {
    // lógica aqui com $id e $name
}
```

### Suporte a deslocamento negativo em string

Suporte a deslocamentos de string negativos foi adicionado às
[funções de manipulação de string](book.strings.md)
que aceitam deslocamentos, assim como para
[indexação de string](language.types.string.md#language.types.string.substr) com
`[]` ou `{}`. Nestes casos, um deslocamento
negativo é interpretado como sendo um deslocamento a partir do final da string.

```
<?php
var_dump("abcdef"[-2]);
var_dump(strpos("aabbcc", "b", -3));
```

O exemplo acima produzirá:

```
string (1) "e"
int(3)
```

Deslocamento negativo de string e array agora também é suportado na sintaxe
avaliativa simples de variáveis dentro de strings.

```
<?php
$string = 'bar';
echo "O último caractere de '$string' é '$string[-1]'.\n";
?>
```

O exemplo acima produzirá:

```
O último caractere de 'bar' é 'r'.
```

### Suporte a AEAD em ext/openssl

Suporte para AEAD (modos GCM e CCM) foi adicionado através da extensão das funções
[openssl\_encrypt()](function.openssl-encrypt.md) e
[openssl\_decrypt()](function.openssl-decrypt.md) com parâmetros adicionais.

### Conversão de chamáveis para [Closure](class.closure.md)s com [Closure::fromCallable()](closure.fromcallable.md)

Um novo método estático foi introduzido à classe [Closure](class.closure.md)
para permitir que objetos do tipo [callable](language.types.callable.md) sejam facilmente convertidos em objetos
da classe [Closure](class.closure.md).

```
<?php
class Test
{
    public function exposeFunction()
    {
        return Closure::fromCallable([$this, 'privateFunction']);
    }

    private function privateFunction($param)
    {
        var_dump($param);
    }
}

$privFunc = (new Test)->exposeFunction();
$privFunc('algum valor');
```

O exemplo acima produzirá:

```
string(11) "algum valor"
```

### Manipulação assíncrona de sinal

Uma nova função chamada [pcntl\_async\_signals()](function.pcntl-async-signals.md) foi
introduzida para habilitar manipulação assíncrona de sinal sem usar ticks (que
introduzem muita sobrecarga).

```
<?php
pcntl_async_signals(true); // liga sinais assíncronos

pcntl_signal(SIGHUP,  function($sig) {
    echo "SIGHUP\n";
});

posix_kill(posix_getpid(), SIGHUP);
```

O exemplo acima produzirá:

```
SIGHUP
```

### Suporte a push de servidor HTTP/2 em ext/curl

Support a push de servidor foi adicionado à extensão CURL (requer
versão 7.46 e superior). Isto pode ser aproveitado pela função
[curl\_multi\_setopt()](function.curl-multi-setopt.md) com a nova constante
**`CURLMOPT_PUSHFUNCTION`**. As constantes
**`CURL_PUSH_OK`** e **`CURL_PUSH_DENY`** também foram
adicionadas de forma que a execução da chamada de push do servidor possa ser tanto
aprovada quanto negada.

### Opções de Contexto de Fluxo

A opção de contexto de fluxo [tcp\_nodelay](context.socket.md#context.socket.tcp_nodelay)
foi adicionada.

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
