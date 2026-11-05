# Perguntas Frequentes: Coisas que você precisa saber sobre namespaces

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.faq.php

---

## Perguntas Frequentes: Coisas que você precisa saber sobre namespaces

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

Estas perguntas frequentes são divididas em duas seções: perguntas comuns e alguns detalhes de
implementação úteis para entender os pormenores.

Primeiro, as perguntas comuns.

1. [Se não usar namespaces, devo
   me importar com esta documentação?](language.namespaces.faq.md#language.namespaces.faq.shouldicare)
2. [Como usar classes internas ou globais
   em um namespace?](language.namespaces.faq.md#language.namespaces.faq.globalclass)
3. [Como usar classes,
   funções ou constantes de namespace em seu próprio namespace?](language.namespaces.faq.md#language.namespaces.faq.innamespace)
4. [Como nomes como `\meu\nome` ou `\nome`
   são resolvidos?](language.namespaces.faq.md#language.namespaces.faq.full)
5. [Como um nome como
   `meu\nome` é resolvido?](language.namespaces.faq.md#language.namespaces.faq.qualified)
6. [Como um nome de classe não qualificado
   como `nome` é resolvido?](language.namespaces.faq.md#language.namespaces.faq.shortname1)
7. [Como um nome de função
   não qualificado ou nome de constante não qualificado
   como `nome` é resolvido?](language.namespaces.faq.md#language.namespaces.faq.shortname2)

Há alguns detalhes de implementação dos namespaces úteis para
entendê-los melhor.

1. [Nomes de importação não devem entrar em conflito com
   classes definidas no mesmo arquivo](language.namespaces.faq.md#language.namespaces.faq.conflict)
2. [Namespaces aninhados não são permitidos.](language.namespaces.faq.md#language.namespaces.faq.nested)
3. [Nomes de namespace dinâmicos (identificadores
   entre aspas) devem escapar a barra invertida](language.namespaces.faq.md#language.namespaces.faq.quote)
4. [Constantes indefinidas referenciadas
   usando qualquer barra invertida geram erro fatal](language.namespaces.faq.md#language.namespaces.faq.constants)
5. [Não é possível substituir
   as constantes especiais **`null`**, **`true`** ou **`false`**](language.namespaces.faq.md#language.namespaces.faq.builtinconst)

### Se não usar namespaces, devo me importar com esta documentação?

Não. Namespaces não afetam nenhum código existente de forma alguma, ou qualquer
código ainda a ser escrito que não contenha namespaces. Você pode
escrever este código se desejar:

**Exemplo #1 Acessando classes globais fora de um namespace**

```
<?php
$a = new \stdClass;
print $a::class;
```

O exemplo acima é equivalente ao seguinte código:

**Exemplo #2 Acessando classes globais fora de um namespace**

```
<?php
$a = new stdClass;
print $a::class;
```

### Como usar classes internas ou globais em um namespace?

**Exemplo #3 Acessando classes internas em namespaces**

```
<?php
namespace foo;
$a = new \stdClass;
print $a::class;

function test(?\ArrayObject $parameter_type_example = null) {}

$a = \FilesystemIterator::CURRENT_AS_FILEINFO;
print $a . "\n";

// estendendo uma classe interna ou global
class MinhaExcecao extends \Exception {}
print MinhaExcecao::class . "\n";
```

### Como usar classes, funções ou constantes de namespace em seu próprio namespace?

**Exemplo #4 Acessando classes, funções ou constantes internas em namespaces**

```
<?php
namespace foo;

class MinhaClasse {}

// usando uma classe do namespace atual como tipo de parâmetro
function test(?MinhaClasse $exemplo_com_tipo_de_parametro = null) {}
// outra forma de usar a classe do namespace atual como tipo de parâmetro
function test(?\foo\MinhaClasse $exemplo_com_tipo_de_parametro = null) {}

// estendendo uma classe do namespace atual
class Estendida extends MinhaClasse {}
print Estendida::class . "\n";

// acessando uma função global
$a = \strlen("teste");
print $a . "\n";

// acessando uma constante global
$b = \INI_ALL;
print $b . "\n";
```

### Como nomes como `\meu\nome` ou `\nome` são resolvidos?

Nomes que começam com uma barra invertida (`\`) sempre são resolvidos
para seu conteúdo exato, então `\meu\nome` é o mesmo que `meu\nome`
e `\Exception` é o mesmo que `Exception`.

**Exemplo #5 Nomes totalmente qualificados**

```
<?php
namespace foo;
$a = new \meu\nome(); // instancia um objeto da classe "meu\nome"
echo \strlen('olá'); // invoca a função "strlen"
$a = \INI_ALL; // define $a com o valor da constante "INI_ALL"
```

### Como um nome como `meu\nome` é resolvido?

Nomes que contêm barra invertida, mas não começam com uma barra invertida, como
`meu\nome` podem ser resolvidos de duas maneiras diferentes.

Se houver
uma instrução de importação que cria o apelido `meu` para outro nome, então
o apelido da importação será aplicado ao `meu` em `meu\nome`.

Caso contrário, o nome do namespace atual será prefixado a `meu\nome`.

**Exemplo #6 Nomes qualificados**

```
<?php
namespace foo;
use bla\bla as foo;

$a = new meu\nome(); // instancia um objeto da classe "foo\meu\nome"
foo\bar::nome(); // chama o método estático "nome" na classe "bla\bla\bar"
minha\bar(); // chama a função "foo\minha\bar"
$a = minha\BAR; // define $a com o valor da constante "foo\minha\BAR"
```

### Como um nome de classe não qualificado como `nome` é resolvido?

Nomes de classes que não contêm barra invertida como
`nome` podem ser resolvidos de duas maneiras diferentes.

Se houver
uma instrução de importação que cria o apelido `nome` para outro nome, então
o apelido da importação será aplicado.

Caso contrário, o nome do namespace atual será prefixado a `nome`.

**Exemplo #7 Nomes de classe não qualificados**

```
<?php
namespace foo;
use bla\bla as foo;

$a = new nome(); // instancia um objeto da classe "foo\nome"
foo::nome(); // chama o método estático "nome" na classe "bla\bla"
```

### Como um nome de função não qualificado ou nome de constante não qualificado como `nome` é resolvido?

Nomes de funções ou constantes que não contêm barra invertida como
`nome` podem ser resolvidos de duas maneiras diferentes.

Primeiro, o nome do namespace atual será prefixado a `nome`.

Finalmente, se a constante ou função `nome` não existir
no namespace atual, uma constante ou função global `nome`
será usada se existir.

**Exemplo #8 Nomes de funções ou constantes não qualificados**

```
<?php
namespace foo;
use bla\bla as foo;

const FOO = 1;

function minha() {
    print __FUNCTION__ . "\n";
}
function foo() {
    print __FUNCTION__ . "\n";
}
function sort(&$a)
{
    \sort($a); // chama a função global "sort"
    $a = array_flip($a);
    return $a;
}

minha(); // chama "foo\minha"
print strlen('olá') . "\n"; // chama a função global "strlen" porque não existe "foo\strlen"
$arr = array(1,3,2);
$b = sort($arr); // chama a função "foo\sort"
var_dump($b);
foo(); // chama a função "foo\foo" - a importação não é aplicada

$a = FOO; // define $a com o valor da constante "foo\FOO" - a importação não é aplicada
print $a;
$b = INI_ALL; // define $b com o valor da constante global "INI_ALL"
print $b;
```

### Nomes de importação não devem entrar em conflito com classes definidas no mesmo arquivo

As seguintes combinações de script são válidas:

arquivo1.php

```
<?php
namespace minha\coisa;
class MinhaClasse {}
```

outra.php

```
<?php
namespace outra;
class coisa {}
```

arquivo2.php

```
<?php
namespace minha\coisa;
include 'arquivo1.php';
include 'outra.php';

use outra\coisa as MinhaClasse;
$a = new MinhaClasse; // instancia um objeto da classe coisa do namespace outra
```

Não há conflito de nomes, mesmo que a classe `MinhaClasse` exista
dentro do namespace `minha\coisa`, porque a definição de MinhaClasse está
em um arquivo separado. No entanto, o próximo exemplo causa um erro fatal de conflito de nomes
porque MinhaClasse está definida no mesmo arquivo que a declaração use.

```
<?php
namespace minha\coisa;
use outra\coisa as MinhaClasse;
class MinhaClasse {} // erro fatal: MinhaClasse está em conflito com a declaração de importação
$a = new MinhaClasse;
```

### Namespaces aninhados não são permitidos

O PHP não permite aninhar namespaces.

```
<?php
namespace minha\coisa {
    namespace aninhada {
        class foo {}
    }
}
```

No entanto, é fácil simular namespaces aninhados da seguinte forma:

```
<?php
namespace minha\coisa\aninhada {
    class foo {}
}
```

### Nomes de namespace dinâmicos (identificadores entre aspas) devem escapar a barra invertida

É muito importante perceber que, como a barra invertida é usada como um caractere de escape
dentro de strings, ela sempre deve ser duplicada quando usada em uma string. Caso contrário,
existe o risco de consequências não desejadas:

**Exemplo #9 Perigos do uso de nomes com namespace em uma string com aspas duplas**

```
<?php
$a = "\nome\perigoso"; // \n é uma nova linha dentro de strings com aspas duplas!
$obj = new $a;

$a = 'nada\perigoso'; // não há problemas aqui.
$obj = new $a;
```

Dentro de uma string com aspas simples, a sequência de escape da barra invertida é muito mais segura de usar, mas
ainda é uma prática recomendada escapar as barras invertidas em todas as strings.

### Constantes indefinidas referenciadas usando qualquer barra invertida geram erro fatal

Qualquer constante indefinida não qualificada como `FOO` gerará
um alerta explicando que o PHP assumiu que `FOO` era o valor
da constante. Qualquer constante, qualificada ou totalmente qualificada, que contenha
uma barra invertida produzirá um erro fatal se não for encontrada.

**Exemplo #10 Constantes não definidas**

```
<?php
namespace bar;
$a = FOO; // Produz um alerta - constante indefinida FOO assumiu "FOO"
$a = \FOO; // Erro fatal, constante de namespace indefinida FOO
$a = Bar\FOO; // Erro fatal, constante de namespace indefinida bar\Bar\FOO
$a = \Bar\FOO; // Erro fatal, constante de namespace indefinida Bar\FOO
```

### Não é possível substituir as constantes especiais **`null`**, **`true`** ou **`false`**

Qualquer tentativa de definir uma constante de namespace que seja uma constante especial nativa
resultará em um erro fatal.

**Exemplo #11 Constantes não definidas**

```
<?php
namespace bar;
const NULL = 0; // Erro fatal
const true = 'verdadeiro'; // Também um erro fatal
// etc.
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
