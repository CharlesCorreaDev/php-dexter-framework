# Usando namespaces: Apelidando/Importando

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.namespaces.importing.php

---

## Usando namespaces: Apelidando/Importando

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

A capacidade de se referir a um nome totalmente qualificado externo com um apelido, ou importação,
é um recurso importante dos namespaces. Isso é semelhante à
capacidade dos sistemas de arquivos baseados em Unix de criar links simbólicos para um arquivo ou diretório.

O PHP pode apelidar ou importar constantes, funções, classes, interfaces, traits, enums e namespaces.

A criação de apelidos é realizada com o operador `use`.
Aqui está um exemplo mostrando todos os 5 tipos de importação:

**Exemplo #1 Importando ou apelidando com o operador use**

```
<?php
namespace foo;
use Caminho\Completo\Classe as Outra;

// Isso é o mesmo que use Caminho\Completo\NomeNamespace as NomeNamespace
use Caminho\Completo\NomeNamespace;

// Importando uma classe global
use ArrayObject;

// Importando uma função
use function Caminho\Completo\nomeFuncao;

// Apelidando uma função
use function Caminho\Completo\nomeFuncao as funcao;

// Importando uma constante
use const Caminho\Completo\CONSTANTE;

$obj = new namespace\Outra; // Instancia um objeto da classe foo\Outra
$obj = new Outra; // Instancia um objeto da classe Caminho\Completo\Classe
NomeNamespace\SubNamespace\funcao(); // Chama a função Caminho\Completo\NomeNamespace\SubNamespace\funcao
$a = new ArrayObject(array(1)); // Instancia um objeto da classe ArrayObject
// Sem a declaração "use ArrayObject" teria sido instanciado um objeto da classe foo\ArrayObject
funcao(); // chama a função Caminho\Completo\nomeFuncao
echo CONSTANTE; // imprime o valor de Caminho\Completo\CONSTANTE
```

Note que para nomes com namespaces (nomes de namespaces totalmente qualificados contendo
o separador de namespace, como `Foo\Bar`, em oposição a nomes globais sem
separadores, como `FooBar`), a barra invertida inicial não é necessária e não
é recomendada, pois nomes importados precisam
ser totalmente qualificados e não são processados em relação ao namespace atual.

O PHP também suporta um atalho de conveniência para colocar várias instruções use
na mesma linha.

**Exemplo #2 Importando ou criando apelidos com várias declarações use combinadas**

```
<?php
use Caminho\Completo\Classe as Outra, Caminho\Completo\NomeNamespace;

$obj = new Outra;    // Instancia um objeto da classe Caminho\Completo\Classe
NomeNamespace\SubNamespace\funcao(); // Chama a função Caminho\Completo\NomeNamespace\SubNamespace\funcao
```

A importação é realizada em tempo de compilação e por isso, não afeta classes, funções
ou nomes de constantes gerados dinamicamente.

**Exemplo #3 Importação e nomes dinâmicos**

```
<?php
use Caminho\Completo\Classe as Outra, Caminho\Completo\NomeNamespace;

$obj = new Outra; // Instancia um objeto da classe Caminho\Completo\Classe
$a = 'Outra';
$obj = new $a;    // Instancia um objeto da classe Outra
```

Além disso, a importação afeta apenas nomes não qualificados e qualificados. Nomes totalmente
qualificados são absolutos e não são afetados pelas importações.

**Exemplo #4 Importação e nomes completamente qualificados**

```
<?php
use Caminho\Completo\Classe as Outra, Caminho\Completo\NomeNamespace;

$obj = new Outra;        // Instancia um objeto da classe Caminho\Completo\Classe
$obj = new \Outra;       // Instancia um objeto da classe Outra
$obj = new Outra\Coisa;  // Instancia um objeto da classe Caminho\Completo\Classe\Coisa
$obj = new \Outra\Coisa; // Instancia um objeto da classe Outra\Coisa
```

### Regras de escopo para importação

A palavra-chave `use` precisa ser declarada no
escopo mais externo do arquivo (o escopo global) ou dentro de declarações
de namespaces. Isso ocorre por a importação ser realizada em tempo de
compilação e não em tempo de execução, portanto, não pode ter escopo de bloco. O exemplo
a seguir mostra um uso inválido da palavra-chave
`use`:

**Exemplo #5 Regra de importação inválida**

```
<?php
namespace Linguas;

function paraGroenlandes()
{
    use Linguas\Dinamarques;

    // ...
}
```

> **Nota**:
>
> As regras de importação são por arquivo, o que significa que os arquivos incluídos
> *NÃO* herdarão as regras de importação do arquivo pai.

### Declarações `use` em grupo

Classes, funções e constantes importadas do
mesmo [`namespace`](language.namespaces.definition.md) podem ser agrupadas numa única declaração
[`use`](language.namespaces.importing.md).

```
<?php

use algum\namespace\ClasseA;
use algum\namespace\ClasseB;
use algum\namespace\ClasseC as C;

use function algum\namespace\fn_a;
use function algum\namespace\fn_b;
use function algum\namespace\fn_c;

use const algum\namespace\ConstA;
use const algum\namespace\ConstB;
use const algum\namespace\ConstC;

// É equivalente à seguinte declaração "use" agrupada
use algum\namespace\{ClasseA, ClasseB, ClasseC as C};
use function algum\namespace\{fn_a, fn_b, fn_c};
use const algum\namespace\{ConstA, ConstB, ConstC};
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
