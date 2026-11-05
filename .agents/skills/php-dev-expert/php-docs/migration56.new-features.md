# Novas funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.new-features.php

---

## Novas funcionalidades

### Expressões constantes

Agora é possível fornecer uma expressão escalar envolvendo literais
numéricos e strings e/ou constantes em contextos onde o PHP anteriormente esperava
um valor estático, como declarações de constantes e propriedades e argumentos
padrões para funções.

```
<?php
const UM = 1;
const DOIS = UM * 2;

class C {
    const TRES = DOIS + 1;
    const UM_TERCO = UM / self::TRES;
    const FRASE = 'O valor de TRES é '.self::TRES;

    public function f($a = UM + self::TRES) {
        return $a;
    }
}

echo (new C)->f()."\n";
echo C::FRASE;
?>
```

O exemplo acima produzirá:

```
4
O valor de TRES é 3
```

É possível também definir um [array](language.types.array.md) constante usando a
palavra-chave `const`:

```
<?php
const ARR = ['a', 'b'];

echo ARR[0];
?>
```

O exemplo acima produzirá:

```
a
```

### Funções variádicas via `...`

[Funções Variádicas](functions.arguments.md#functions.variable-arg-list) agora
podem ser implementadas usando o operador `...`, ao invés de
depender da função [func\_get\_args()](function.func-get-args.md).

```
<?php
function f($req, $opt = null, ...$params) {
    // $params é um array contendo os argumentos restantes.
    printf('$req: %d; $opt: %d; número de parâmetros: %d'."\n",
           $req, $opt, count($params));
}

f(1);
f(1, 2);
f(1, 2, 3);
f(1, 2, 3, 4);
f(1, 2, 3, 4, 5);
?>
```

O exemplo acima produzirá:

```
$req: 1; $opt: 0; número de parâmetros: 0
$req: 1; $opt: 2; número de parâmetros: 0
$req: 1; $opt: 2; número de parâmetros: 1
$req: 1; $opt: 2; número de parâmetros: 2
$req: 1; $opt: 2; número de parâmetros: 3
```

### Desempacotamento de argumentos via `...`

[Arrays](language.types.array.md) e objetos do tipo
[Traversable](class.traversable.md) podem ser desempacotados em
listas de argumentos ao chamar funções usando o operador `...`.
Isto também é conhecido como operador 'splat' em outras linguagens,
incluindo Ruby.

```
<?php
function add($a, $b, $c) {
    return $a + $b + $c;
}

$operators = [2, 3];
echo add(1, ...$operators);
?>
```

O exemplo acima produzirá:

```
6
```

### Exponenciação via `**`

Um operador associativo à direita, `**`, foi adicionado para
suportar exponenciação, juntamente com o operador curto de atribuição
`**=`.

```
<?php
printf("2 ** 3 ==      %d\n", 2 ** 3);
printf("2 ** 3 ** 2 == %d\n", 2 ** 3 ** 2);

$a = 2;
$a **= 3;
printf("a ==           %d\n", $a);
?>
```

O exemplo acima produzirá:

```
2 ** 3 ==      8
2 ** 3 ** 2 == 512
a ==           8
```

### `use function` e `use const`

O operador
[`use`](language.namespaces.importing.md)
foi estendido para suportar importação de funções e constantes
em adição à importação de classes. Isto pode ser realizado pelas construções
`use function` e `use const`,
respectivamente.

```
<?php
namespace Name\Space {
    const FOO = 42;
    function f() { echo __FUNCTION__."\n"; }
}

namespace {
    use const Name\Space\FOO;
    use function Name\Space\f;

    echo FOO."\n";
    f();
}
?>
```

O exemplo acima produzirá:

```
42
Name\Space\f
```

### phpdbg

O PHP agora inclui um depurador interativo chamado phpdbg, implementado como um
módulo SAPI. Para mais informações, visite a
[documentação sobre phpdbg](book.phpdbg.md).

### Codificação padrão de caracteres

[default\_charset](ini.core.md#ini.default-charset) é agora usado como
o conjunto de caracteres padrão para as funções [htmlentities()](function.htmlentities.md),
[html\_entity\_decode()](function.html-entity-decode.md) e
[htmlspecialchars()](function.htmlspecialchars.md). Observe que se as configurações de codificação
iconv e mbstring (agora descontinuadas) estiverem definidas, elas terão
precedência sobre default\_charset para funções iconv e mbstring,
respectivamente.

O valor padrão para esta configuração é `UTF-8`.

### [`php://input`](wrappers.php.md#wrappers.php.input) é reutilizável

[`php://input`](wrappers.php.md#wrappers.php.input)
agora pode ser reaberto e lido quantas vezes for necessário. Isto tem
resultado em uma grande redução de memória requerida para lidar
com dados de POST.

### Envio de grandes arquivos

Arquivos maiores que 2 gigabytes agora são aceitos.

### [GMP](book.gmp.md) suporta sobrecarga de operadores

Objetos [GMP](book.gmp.md) agora suportam sobrecarga de
operadores e conversão para tipos escalares. Isto permite mais expressividade
no código que usa GMP:

```
<?php
$a = gmp_init(42);
$b = gmp_init(17);

if (version_compare(PHP_VERSION, '5.6', '<')) {
    echo gmp_intval(gmp_add($a, $b)), PHP_EOL;
    echo gmp_intval(gmp_add($a, 17)), PHP_EOL;
    echo gmp_intval(gmp_add(42, $b)), PHP_EOL;
} else {
    echo $a + $b, PHP_EOL;
    echo $a + 17, PHP_EOL;
    echo 42 + $b, PHP_EOL;
}
?>
```

O exemplo acima produzirá:

```
59
59
59
```

### [hash\_equals()](function.hash-equals.md) para comparação de strings segura contra ataque de temporização

A função [hash\_equals()](function.hash-equals.md) foi adicionada para comparar
dois strings em tempo constante. Isto deve ser usado para mitigar ataques de
temporização; por exemplo, ao testar hashes de senha [crypt()](function.crypt.md)
(assumindo que não seja possível usar
[password\_hash()](function.password-hash.md) e
[password\_verify()](function.password-verify.md), que não são suscetíveis a ataques de
temporização).

```
<?php
$expected  = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$correct   = crypt('12345', '$2a$07$usesomesillystringforsalt$');
$incorrect = crypt('1234',  '$2a$07$usesomesillystringforsalt$');

var_dump(hash_equals($expected, $correct));
var_dump(hash_equals($expected, $incorrect));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(false)
```

### `__debugInfo()`

O método mágico [\_\_debugInfo()](language.oop5.magic.md#language.oop5.magic.debuginfo)
foi adicionado para permitir que objetos alterem suas propriedades e seus valores
que são mostrados quando estes objetos são argumentos da função
[var\_dump()](function.var-dump.md).

```
<?php
class C {
    private $prop;

    public function __construct($val) {
        $this->prop = $val;
    }

    public function __debugInfo() {
        return [
            'propSquared' => $this->prop ** 2,
        ];
    }
}

var_dump(new C(42));
?>
```

O exemplo acima produzirá:

```
object(C)#1 (1) {
  ["propSquared"]=>
  int(1764)
}
```

### Algoritmo de hash gost-crypto

O algoritmo de hash `gost-crypto` foi adicionado. Ele
implementa a função de hash GOST usando as tabelas S-box da CryptoPro S-box como
especificado pela
[» RFC 4357, section 11.2](https://datatracker.ietf.org/doc/html/rfc4357).

### Melhorias SSL/TLS

Uma ampla gama de melhorias foi aplicada no suporte a SSL/TLS no PHP
5.6. Estas incluem
[habilitação de verificação de servidor por padrão](migration56.incompatible.md#migration56.incompatible.peer-verification),
suporte a correspondência de impressão digital de certificado, mitigação contra ataques
de renegociação TLS, e muitas novas
[opções de contexto SSL](context.ssl.md) para permitir um controle
mais fino sobre o protocolo e configurações de verificação ao usar
fluxos criptografados.

Estas mudanças estão descritas com maior detalhe na seção
[Mudanças do OpenSSL no PHP 5.6.x](migration56.openssl.md)
deste guia de migração.

### Suporte a [pgsql](book.pgsql.md) assíncrono

A extensão [pgsql](book.pgsql.md) agora suporta
conexões e consultas assíncronas, assim habilitando comportamento
sem bloqueio ao interagir com banco de dados PostgreSQL. Conexões assíncronas
podem ser estabelecidas através da constante
**`PGSQL_CONNECT_ASYNC`**. As novas funções
[pg\_connect\_poll()](function.pg-connect-poll.md), [pg\_socket()](function.pg-socket.md),
[pg\_consume\_input()](function.pg-consume-input.md) e [pg\_flush()](function.pg-flush.md)
podem ser usadas para lidar com conexões e consultas assíncronas.

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
