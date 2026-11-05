# Construtores e Destrutores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.decon.php

---

## Construtores e Destrutores

### Construtores

function **\_\_construct**([mixed](language.types.mixed.md) `...$values` = ""): [void](language.types.void.md)

O PHP permite aos desenvolvedores declararem métodos construtores para as classes.
Classes que têm um método construtor chamam o método a cada
objeto recém criado, sendo apropriado para qualquer inicialização que o
objeto necessite antes de ser utilizado.

> **Nota**:
>
> Construtores pais não são chamados implicitamente se a classe filha define
> um construtor. Para executar o construtor da classe pai, uma chamada a
> **parent::\_\_construct()** dentro do construtor da classe filha
> é necessária. Se a classe filha não definir um construtor, será herdado
> da classe pai como um método normal (se não foi declarado
> como privado).

**Exemplo #1 Construtoras em herança**

```
<?php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

// In BaseClass constructor
$obj = new BaseClass();

// In BaseClass constructor
// In SubClass constructor
$obj = new SubClass();

// In BaseClass constructor
$obj = new OtherSubClass();
?>
```

Diferente de outros métodos, [\_\_construct()](language.oop5.decon.md#object.construct)
não precisa seguir as regras usuais de
[compatibilidade de assinatura](language.oop5.basic.md#language.oop.lsp)
em objetos derivados.

Construtores são métodos ordinários que são chamados durante a criação
do objeto correspondente. Eles podem definir um número arbitrário de argumentos, quais
podem ser obrigatórios, podem ter um tipo, e podem ter valores padrão. Argumentos de construtores
são informados dentro de parênteses depois do nome da classe.

**Exemplo #2 Utilizando argumentos de construtor**

```
<?php
class Point {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
}

// Passagem de ambos os argumentos.
$p1 = new Point(4, 5);
// Passar somente o argumento obrigatório, $y terá o valor padrão zero.
$p2 = new Point(4);
// Com parâmetros nomeados (a partir do PHP 8.0):
$p3 = new Point(y: 5, x: 4);
?>
```

Se a classe não tem construtor, ou o construtor não tem argumentos obrigatórios, o parêntesis
pode ser omitido.

#### Construtores em estilo antigo

Anteriormente ao PHP 8.0.0 as classes no namespace global interpretam um método com o mesmo nome
da classe como sendo um construtor válido. Essa sintaxe foi descontinuada,
e gerará um erro **`E_DEPRECATED`** embora ainda continue funcionando como um construtor.
Se ambos o [\_\_construct()](language.oop5.decon.md#object.construct) e um método homônimo da classe
estiverem definidos, [\_\_construct()](language.oop5.decon.md#object.construct) que será chamado.

Em classes dentro de namespaces, ou quaisquer classes a partir do PHP 8, um método
homônimo ao nome da classe não tem um significado especial.

Sempre utilize [\_\_construct()](language.oop5.decon.md#object.construct) em novos códigos.

#### Promoção de propriedades no construtor

A partir do PHP 8, parâmetros de construtores podem ser promovidos a uma propriedade
do objeto. Isto é bastante comum quando parâmetros do construtor são informados
em uma propriedade no construtor, sem nenhum processamento. Promoção de construtor
fornece uma sintaxe reduzida para esse caso. O exemplo acima pode ser reescrito assim:

**Exemplo #3 Utilizando promoção de propriedades no construtor**

```
<?php
class Point {
    public function __construct(protected int $x, protected int $y = 0) {
    }
}
```

Quanto um argumento de construtor inclui um modificador, o PHP interpreta como sendo
uma propriedade de objeto e como um argumento do construtor, e assimilará o valor do argumento
a uma propriedade de mesmo nome. O corpo do construtor pode estar vazio ou conter outras operações.
Quaisquer operações serão executadas após os valores dos argumentos serem definidos
nas respectivas propriedades.

Nem todos os argumentos são promovidos. É possível misturar os argumentos promovidos e não promovidos
em qualquer ordem. Argumentos promovidos não têm impacto no código chamador do construtor.

> **Nota**:
>
> Utilizar um [modificador de visibilidade](language.oop5.visibility.md) (`public`,
> `protected` ou `private`) é o modo mais expressivo de gerar a promoção
> de propriedades, mas qualquer outro modificador (como por exemplo `readonly`) terá o mesmo efeito.

> **Nota**:
>
> Propriedades de objeto não podem ser do tipo [callable](language.types.callable.md) dado uma ambiguidade que isto poderia
> introduzir. Argumentos promovidos, portanto, não podem ser do tipo [callable](language.types.callable.md). Quaisquer
> outra [declaração de tipo](language.types.declarations.md) é permitida.

> **Nota**:
>
> Propriedades promovidas são convertidas em uma propriedade normal assim como um parâmetro de função,
> portanto todas as restrições de nomeação de propriedades e parâmetros se aplicam.

> **Nota**:
>
> [Atributos](language.attributes.md) informados em
> um argumento promovido será replicado tanto na propriedade como no
> no argumento. Valores padrão de argumentos promovidos no construtor serão replicados apenas no argumento, mas não na propriedade.

#### New em inicializadores de parâmetros

A partir do PHP 8.1.0, objetos podem ser utilizados como valores padrão de parâmetros,
variáveis estáticas e constantes globais, assim como argumentos de atributos.
Novos objetos também podem ser passados na instrução [define()](function.define.md).

> **Nota**:
>
> Não é permitido nomes de classe não-string ou classes anônimas.
> Não é permitido o espalhamento de argumentos.
> Não é permitido o uso de expressões.

**Exemplo #4 New em inicializações**

```
<?php

// Permitido:
static $x = new Foo;

const C = new Foo;

function test($param = new Foo) {}

#[AnAttribute(new Foo)]
class Test {
    public function __construct(
        public $prop = new Foo,
    ) {}
}

// Não permitido, resulta em erro de compilação:
function test(
    $a = new (CLASS_NAME_CONSTANT)(), // Nome dinâmico de classe
    $b = new class {}, // Classe anônima
    $c = new A(...[]), // Espalhamento de argumento
    $d = new B($abc), // Expressão
) {}
?>
```

#### Métodos de criação estáticos

O PHP suporta apenas um único construtor por classe. Em alguns casos pode ser
desejável de permitir a um objeto ser construído de maneiras diferentes, a partir de argumentos diferentes.
O método recomendado para realizar isso é através de métodos estáticos, utilizados como empacotadores do construtor.

**Exemplo #5 Utilizando métodos estáticos para construção**

```
<?php
$some_json_string = '{ "id": 1004, "name": "Elephpant" }';
$some_xml_string = "<animal><id>1005</id><name>Elephpant</name></animal>";

class Product {

    private ?int $id;
    private ?string $name;

    private function __construct(?int $id = null, ?string $name = null) {
        $this->id = $id;
        $this->name = $name;
    }

    public static function fromBasicData(int $id, string $name): static {
        $new = new static($id, $name);
        return $new;
    }

    public static function fromJson(string $json): static {
        $data = json_decode($json, true);
        return new static($data['id'], $data['name']);
    }

    public static function fromXml(string $xml): static {
        $data = simplexml_load_string($xml);
        $new = new static();
        $new->id = (int) $data->id;
        $new->name = $data->name;
        return $new;
    }
}

$p1 = Product::fromBasicData(5, 'Widget');
$p2 = Product::fromJson($some_json_string);
$p3 = Product::fromXml($some_xml_string);

var_dump($p1, $p2, $p3);
```

O construtor pode ser privado ou protegido para evitar que ele seja chamado externamente.
Nesses casos, apenas um construtor estático será capaz de instanciar a classe. Por estarem
na mesma definição de classe, os métodos estáticos são capazes de instanciar o objeto, mesmo em
uma instância diferente. O construtor privado é opcional e pode não fazer sentido em
todos os casos.

Os três métodos estáticos a seguir demonstram as maneiras diferentes de instanciar um objeto.

- `fromBasicData()` obtém os exatos parâmetros que são necessários, e então cria
  o objeto através da chamada do construtor e retorna o resultado
- `fromJson()` aceita uma string JSON, realiza algum pré-processamento para
  converter os dados no formato necessário ao construtor. Só então retorna o novo objeto.
- `fromXml()` aceita uma string XML, pré-processa, e então cria um objeto
  limpo. O construtor é chamado, mas com todos os parâmetros opcionais o método
  os ignora. Por fim, os valores nas propriedades do objeto são associados antes de retornar o resultado.

Nos três casos, a palavra chave `static` é convertida no nome da classe onde o código reside.
Nesse caso a classe `Product`.

### Destrutor

function **\_\_destruct**(): [void](language.types.void.md)

O PHP introduz um conceito de destrutor similar ao de outras
linguagens orientadas a objeto, como C++. O método destrutor será chamado
assim que todas as referências a um objeto particular forem removidas ou quando
o objeto for explicitamente destruído ou qualquer ordem na sequência de encerramento.

**Exemplo #6 Exemplo de Destrutor**

```
<?php

class MyDestructableClass
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();
```

Assim como os construtores, os destrutores da classe pai não serão chamados implicitamente pelo
PHP. Para executar o destrutor pai, deve-se fazer uma chamada
explícita a **parent::\_\_destruct()** no corpo do
destrutor. Assim como construtores, uma classe filha pode herdar o destrutor
caso não implemente um.

O destrutor será chamado mesmo se o script for terminado utilizando-se
[exit()](function.exit.md). Chamar [exit()](function.exit.md) em um destrutor
irá impedir que as demais rotinas de encerramento executem.

Se um destrutor criar novas referências ao seu objeto, ele não será chamado
uma segunda vez quando a contagem de referências atingir zero novamente ou durante a
sequência de desligamento.

A partir do PHP 8.4.0, quando
[ciclos de coleta](features.gc.collecting-cycles.md)
ocorrem durante a execução de uma
[Fiber](language.fibers.md), os destrutores de objetos
programados para coleta são executados em uma Fiber separada, chamada
`gc_destructor_fiber`.
Se esta Fiber for suspensa, uma nova será criada para executar quaisquer
destrutores restantes.
O `gc_destructor_fiber` anterior não será mais
referenciado pelo coletor de lixo e poderá ser coletado se não for
referenciado em outro lugar.
Objetos cujo destrutor está suspenso não serão coletados até que o
destrutor retorne ou a própria Fiber seja coletada.

> **Nota**:
>
> Destrutores chamados durante o encerramento da execução do script já enviaram os cabeçalhos HTTP.
> O diretório atual na fase de encerramento do script pode ser diferente
> em alguns SAPIs (e.g. Apache).

> **Nota**:
>
> Tentar disparar uma exceção em um destrutor (chamado no término
> do script), lançará um erro fatal.

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
