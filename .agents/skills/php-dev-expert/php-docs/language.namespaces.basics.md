# Usando namespaces: Fundamentos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.basics.php

---

## Usando namespaces: Fundamentos

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Antes de discutir o uso de namespaces, é importante entender como o PHP
sabe qual elemento de namespace seu código está solicitando. Uma analogia simples pode ser feita
entre os namespaces do PHP e um sistema de arquivos. Existem três maneiras de acessar um arquivo em um
sistema de arquivos:

1. Nome de arquivo relativo como `foo.txt`. Será resolvido para
   `diretorioatual/foo.txt` onde `diretorioatual` é o
   diretório ocupado atualmente. Então, se o diretório atual for
   `/home/foo`, o nome será resolvido para `/home/foo/foo.txt`.
2. Nome de caminho relativo como `subdiretorio/foo.txt`. Será resolvido
   para `diretorioatual/subdiretorio/foo.txt`.
3. Nome de caminho absoluto como `/main/foo.txt`. Será resolvido
   para `/main/foo.txt`.

O mesmo princípio pode ser aplicado a elementos com namespace no PHP. Por
exemplo, um nome de classe pode ser referenciado de três maneiras:

1. Nome não qualificado ou nome de classe sem prefixo como
   `$a = new foo();` ou
   `foo::metodoestatico();`. Se o namespace atual for
   `namespaceatual`, ele será resolvido para
   `namespaceatual\foo`. Se
   o código for global, sem namespace, ele será resolvido para `foo`.

   Uma ressalva: nomes não qualificados para funções e constantes
   serão resolvidos para funções e constantes globais se a função ou constante com namespace
   não for definida. Veja [Usando namespaces:
   recorrendo a funções/constantes globais](language.namespaces.fallback.md) para obter detalhes.
2. Nome qualificado ou um nome de classe prefixado como
   `$a = new subnamespace\foo();` ou
   `subnamespace\foo::metodoestatico();`. Se o namespace atual for
   `namespaceatual`, ele será resolvido para
   `namespaceatual\subnamespace\foo`. Se
   o código for global, sem namespace, ele será resolvido para `subnamespace\foo`.
3. Nome totalmente qualificado ou um nome prefixado com um operador de prefixo global como
   `$a = new \namespaceatual\foo();` ou
   `\namespaceatual\foo::metodoestatico();`. Ele sempre será resolvido
   para o nome literal especificado no código, `namespaceatual\foo`.

Aqui está um exemplo dos três tipos de sintaxe em código real:

arquivo1.php

```
<?php
namespace Foo\Bar\subnamespace;

const FOO = 1;
function foo() {}
class foo
{
    static function metodoestatico() {}
}
```

arquivo2.php

```
<?php
namespace Foo\Bar;
include 'arquivo1.php';

const FOO = 2;
function foo() {}
class foo
{
    static function metodoestatico() {}
}

/* Nome não qualificado */
foo(); // será resolvido para a função Foo\Bar\foo
foo::metodoestatico(); // será resolvido para a classe Foo\Bar\foo, método metodoestatico
echo FOO; // será resolvido para a constante Foo\Bar\FOO

/* Nome qualificado */
subnamespace\foo(); // será resolvido para a função Foo\Bar\subnamespace\foo
subnamespace\foo::metodoestatico(); // será resolvido para a classe Foo\Bar\subnamespace\foo,
                                    // método metodoestatico
echo subnamespace\FOO; // será resolvido para a constante constant Foo\Bar\subnamespace\FOO

/* Nome totalmente qualificado */
\Foo\Bar\foo(); // será resolvido para a função Foo\Bar\foo
\Foo\Bar\foo::metodoestatico(); // será resolvido para a classe Foo\Bar\foo, método metodoestatico
echo \Foo\Bar\FOO; // será resolvido para a constante Foo\Bar\FOO
```

Note que para acessar qualquer classe,
função ou constante global, um nome totalmente qualificado pode ser usado, como
[\strlen()](function.strlen.md) ou [\Exception](class.exception.md) ou
\**`INI_ALL`**.

**Exemplo #1 Acessando classes, funções e constantes globais em um namespace**

```
<?php
namespace Foo;

function strlen() {}
const INI_ALL = 3;
class Exception {}

print \strlen('olá') . "\n"; // chama a função global strlen
print \INI_ALL . "\n"; // acessa a constante global INI_ALL
$c = new \Exception('erro'); // instancia um objeto da classe global Exception
print $c::class . "\n";
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
