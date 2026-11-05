# Ganchos de Propriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.property-hooks.php

---

## Ganchos de Propriedade

Ganchos de propriedade, também conhecidos como "acessadores de propriedade" em algumas outras linguagens,
são uma forma de interceptar e substituir o comportamento de leitura e gravação de uma propriedade.
Esta funcionalidade tem dois propósitos:

1. Permite que as propriedades sejam usadas diretamente, sem os métodos 'get' e 'set',
   deixando aberta a opção de incluir comportamento adicional no futuro.
   Isso torna desnecessários a maioria dos métodos 'get'/'set' padronizados,
   mesmo sem usar ganchos.
2. Permite propriedades que descrevem um objeto sem a necessidade de armazenar
   um valor diretamente.

Existem dois ganchos disponíveis em propriedades não estáticas: `get` e `set`.
Eles permitem substituir o comportamento de leitura e gravação de uma propriedade, respectivamente.
Os ganchos estão disponíveis para propriedades tipadas e não tipadas.

Uma propriedade pode ser "apoiada" ou "virtual".
Uma propriedade apoiada é aquela que realmente armazena um valor.
Qualquer propriedade que não tenha ganchos será apoiada.
Uma propriedade virtual é aquela que possui ganchos e esses ganchos não interagem com a propriedade em si.
Nesse caso, os ganchos são efetivamente iguais aos métodos,
e o objeto não usa nenhum espaço para armazenar um valor para aquela propriedade.

Ganchos de propriedade são incompatíveis com propriedades `readonly` (somente-leitura).
Se houver necessidade de restringir acesso a uma operação `get` ou `set`
além de alterar seu comportamento, deve ser usada a
[visibilidade de propriedade assimétrica](language.oop5.visibility.md#language.oop5.visibility-members-aviz).

> **Nota**:
> **Informação de Versão**  
>
> Ganchos de Propriedade foram introduzidos no PHP 8.4.

### Sintaxe Básica de Gancho

A sintaxe geral para declarar um gancho é a seguinte.

**Exemplo #1 Ganchos de propriedade (versão completa)**

```
<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get {
            if ($this->modified) {
                return $this->foo . ' (modified)';
            }
            return $this->foo;
        }
        set(string $value) {
            $this->foo = strtolower($value);
            $this->modified = true;
        }
    }
}

$example = new Example();
$example->foo = 'changed';
print $example->foo;
?>
```

A propriedade $foo termina com `{}`, em vez de ponto e vírgula.
Isso indica a presença de ganchos.
Ambos os ganchos `get` e `set` são definidos,
embora seja permitido definir apenas um ou outro.
Ambos os ganchos possuem um corpo, indicado por `{}`, que pode conter código arbitrário.

O gancho `set` permite adicionalmente especificar o tipo e o nome de um valor recebido,
usando a mesma sintaxe de um método.
O tipo deve ser igual ao tipo da propriedade
ou uma [contravariante](language.oop5.variance.md#language.oop5.variance.contravariance) (mais amplo) a ela.
Por exemplo, uma propriedade do tipo [string](language.types.string.md) poderia ter um
gancho `set` que aceita [string](language.types.string.md)|[Stringable](class.stringable.md),
mas não aquele que aceita apenas [array](language.types.array.md).

Pelo menos um dos ganchos faz referência a `$this->foo`, a própria propriedade.
Isso significa que a propriedade será "apoiada".
Ao chamar `$example->foo = 'changed'`,
a string fornecida será primeiro convertida em minúsculas e depois salva no valor de apoio.
Ao ler a propriedade, o valor salvo anteriormente pode ser anexado condicionalmente
com texto adicional.

Existem também várias variantes de sintaxe abreviada para lidar com casos comuns.

Se o gancho `get` for uma expressão única,
`{}` poderá ser omitido e substituído por uma expressão de seta.

**Exemplo #2 Expressão para leitura de propriedade**

Este exemplo é equivalente ao anterior.

```
<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get => $this->foo . ($this->modified ? ' (modified)' : '');

        set(string $value) {
            $this->foo = strtolower($value);
            $this->modified = true;
        }
    }
}
?>
```

Se o tipo de parâmetro do gancho `set` for igual ao tipo de propriedade (o que é típico),
ele poderá ser omitido. Nesse caso, o valor a ser definido recebe automaticamente o nome $value.

**Exemplo #3 Padrão de definição de propriedade**

Este exemplo é equivalente ao anterior.

```
<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get => $this->foo . ($this->modified ? ' (modified)' : '');

        set {
            $this->foo = strtolower($value);
            $this->modified = true;
        }
    }
}
?>
```

Se o gancho `set` estiver apenas definindo uma versão modificada do valor passado,
então ele também poderá ser simplificado para uma expressão de seta.
O valor avaliado pela expressão será definido no valor de apoio.

**Exemplo #4 Expressão para definição de propriedade**

```
<?php
class Example
{
    private bool $modified = false;

    public string $foo = 'default value' {
        get => $this->foo . ($this->modified ? ' (modified)' : '');
        set => strtolower($value);
    }
}
?>
```

Este exemplo não é exatamente equivalente ao anterior,
pois também não modifica `$this->modified`.
Se várias instruções forem necessárias no corpo do gancho definido, use a versão entre chaves.

Uma propriedade pode implementar zero, um ou ambos os ganchos conforme a situação exigir.
Todas as versões abreviadas são mutuamente independentes.
Ou seja, usar um 'get' curto com um 'set' longo,
ou um 'set' curto com um tipo explícito, ou assim por diante, é válido.

Em uma propriedade apoiada, omitir um gancho `get` ou `set`
significa que o comportamento padrão de leitura ou gravação será usado.

> **Nota**:
>
> Ganchos podem ser definidos ao usar
> [promoção de propriedade de construtor](language.oop5.decon.md#language.oop5.decon.constructor.promotion).
> No entanto, quando isso é feito, os valores fornecidos
> ao construtor precisam ter o tipo associado à propriedade correspondido,
> independentemente do que o gancho `set` possa permitir.
>
> Considere o seguinte:
>
> ```
> <?php
> class Example
> {
>     public function __construct(
>         public private(set) DateTimeInterface $created {
>             set (string|DateTimeInterface $value) {
>                 if (is_string($value)) {
>                     $value = new DateTimeImmutable($value);
>                 }
>                 $this->created = $value;
>             }
>         },
>     ) {
>     }
> }
> ```
>
> Internamente, o mecanismo decompõe para o seguinte:
>
> ```
> <?php
> class Example
> {
>     public private(set) DateTimeInterface $created {
>         set (string|DateTimeInterface $value) {
>             if (is_string($value)) {
>                 $value = new DateTimeImmutable($value);
>             }
>             $this->created = $value;
>         }
>     }
>
>     public function __construct(
>         DateTimeInterface $created,
>     ) {
>         $this->created = $created;
>     }
> }
> ```
>
> Quaisquer tentativas de definir a propriedade fora do construtor
> permitirão valores do tipo [string](language.types.string.md) ou [DateTimeInterface](class.datetimeinterface.md)
> mas o construtor permitirá apenas [DateTimeInterface](class.datetimeinterface.md).
> Isto acontece porque o tipo definido para a propriedade ([DateTimeInterface](class.datetimeinterface.md))
> é usado como o tipo do parâmetro dentro da assinatura do construtor, não importando o que
> o gancho `set` permite.
>
> Se este tipo de comportamento do construtor for necessário, a promoção de
> propriedade no construtor não pode ser usada.

### Propriedades virtuais

Propriedades virtuais são propriedades que não possuem valor de apoio.
Uma propriedade é virtual se nem seu gancho `get`
nem seu gancho `set` fizerem referência à própria propriedade usando sintaxe exata.
Ou seja, uma propriedade chamada `$foo` cujo gancho contém `$this->foo` será apoiada.
Mas a seguinte não é uma propriedade apoiada e causará erro:

**Exemplo #5 Propriedade virtual inválida**

```
<?php
class Example
{
    public string $foo {
        get {
            $temp = __PROPERTY__;
            return $this->$temp; // Não faz referência a $this->foo, por isso não é válida.
        }
    }
}
?>
```

Para propriedades virtuais, se um gancho for omitido, essa operação
não existe e tentar usá-la produzirá um erro.
As propriedades virtuais não ocupam espaço de memória em um objeto.
As propriedades virtuais são adequadas para propriedades "derivadas",
como aquelas que são a combinação de duas outras propriedades.

**Exemplo #6 Propriedade virtual**

```
<?php
class Rectangle
{
    // Uma propriedade virtual.
    public int $area {
        get => $this->h * $this->w;
    }

    public function __construct(public int $h, public int $w) {}
}

$s = new Rectangle(4, 5);
print $s->area; // exibe 20
$s->area = 30; // Erro, pois não há operação 'set' definida.
?>
```

Definir ambos os ganchos `get` e `set` em uma propriedade virtual também é permitido.

### Escopo

Todos os ganchos operam no escopo do objeto que está sendo modificado.
Isso significa que eles têm acesso a todos os métodos públicos, privados ou protegidos do objeto,
bem como a quaisquer propriedades públicas, privadas ou protegidas,
incluindo propriedades que possam ter seus próprios ganchos de propriedade.
Acessar outra propriedade de dentro de um gancho não ignora os ganchos definidos nesta propriedade.

A implicação mais notável disso é que ganchos não triviais podem fazer subchamadas
a um método arbitrariamente complexo, se desejarem.

**Exemplo #7 Chamando um método a partir de um gancho**

```
<?php
class Person {
    public string $phone {
        set => $this->sanitizePhone($value);
    }

    private function sanitizePhone(string $value): string {
        $value = ltrim($value, '+');
        $value = ltrim($value, '1');

        if (!preg_match('/\d\d\d\-\d\d\d\-\d\d\d\d/', $value)) {
            throw new \InvalidArgumentException();
        }
        return $value;
    }
}
?>
```

### Referências

Como a presença de ganchos intercepta o processo de leitura e gravação de propriedades,
eles causam problemas ao adquirir uma referência a uma propriedade ou com modificação
indireta, como `$this->arrayProp['chave'] = 'valor';`.
Isso ocorre porque qualquer tentativa de modificação do valor por referência ignoraria um gancho 'set',
se algum estiver definido.

No caso raro de ser necessário obter uma referência a uma propriedade que tenha ganchos definidos,
o gancho `get` pode ser prefixado com `&`
para fazer com que ele retorne por referência.
Definir `get` e `&get` na
mesma propriedade é um erro de sintaxe.

Não é permitido definir ganchos `&get` e `set` em uma propriedade apoiada.
Conforme observado acima, escrever no valor retornado por referência ignoraria o gancho `set`.
Nas propriedades virtuais, não há nenhum valor comum necessário compartilhado entre os dois ganchos, portanto, é permitido definir ambos.

Escrever em um índice de uma propriedade de array também envolve uma referência implícita.
Por esse motivo, gravar em uma propriedade de array apoiada com ganchos definidos é
permitido se e somente se ela definir apenas um gancho `&get`.
Em uma propriedade virtual, escrever no array retornado de
`get` ou `&get` é legal,
mas se isso terá algum impacto no objeto depende da implementação do gancho.

Substituir toda a propriedade do array é aceitável e se comporta da mesma forma que qualquer outra propriedade.
Somente trabalhar com elementos do array é que requer cuidados especiais.

### Herança

#### Ganchos finais

Um gancho pode também ser declarado como [final](language.oop5.final.md),
neste caso ele não pode ser substituído.

**Exemplo #8 Ganchos finais**

```
<?php
class User
{
    public string $username {
        final set => strtolower($value);
    }
}

class Manager extends User
{
    public string $username {
        // Isto é permitido
        get => strtoupper($this->username);

        // Mas isto NÃO é permitido, porque 'set' é final na classe superior.
        set => strtoupper($value);
    }
}
?>
```

Uma propriedade também pode ser declarada como [final](language.oop5.final.md).
Uma propriedade final não pode ser declarada novamente por uma classe filha de forma alguma,
o que impede a alteração de ganchos ou a ampliação de seu acesso.

Declarar ganchos como finais em uma propriedade declarada como final é redundante
e será silenciosamente ignorado.
Este é o mesmo comportamento dos métodos finais.

Uma classe filha pode definir ou redefinir ganchos individuais em uma propriedade
redefinindo a propriedade e apenas os ganchos que deseja substituir.
Uma classe filha também pode adicionar ganchos a uma propriedade que não possui nenhum.
Isto é, essencialmente, como se os ganchos fossem métodos.

**Exemplo #9 Herança de gancho**

```
<?php
class Point
{
    public int $x;
    public int $y;
}

class PositivePoint extends Point
{
    public int $x {
        set {
            if ($value < 0) {
                throw new \InvalidArgumentException('Muito pequeno');
            }
            $this->x = $value;
        }
    }
}
?>
```

Cada gancho substitui as implementações pai independentemente umas das outras.
Se uma classe filha adicionar ganchos, qualquer valor padrão definido na propriedade será removido e deverá ser declarado novamente.
Isso é consistente com o modo como a herança funciona em propriedades sem gancho.

#### Acessando ganchos pais

Um gancho em uma classe filha pode acessar a propriedade da classe pai usando a
palavra-chave `parent::$prop`, seguida pelo gancho desejado.
Por exemplo, `parent::$propName::get()`.
Pode ser lido como "acessar a prop definida na classe pai
e então executar sua operação 'get'" (ou operação 'set', conforme apropriado).

Se não for acessado dessa forma, o gancho da classe pai será ignorado.
Esse comportamento é consistente com o funcionamento de todos os métodos.
Isso também oferece uma maneira de acessar o armazenamento da classe pai, se houver.
Se não houver gancho na propriedade pai,
seu comportamento 'get'/'set' padrão será usado.
Os ganchos não podem acessar nenhum outro gancho, exceto seu próprio pai em sua própria propriedade.

O exemplo acima poderia ser reescrito da seguinte maneira, que permitiria que
a classe `Point` adicionasse seu próprio grancho `set`
no futuro sem problemas (no exemplo anterior, um gancho adicionado à
classe pai seria ignorado na classe filha).

**Exemplo #10 Acessando gancho pai ('set')**

```
<?php
class Point
{
    public int $x;
    public int $y;
}

class PositivePoint extends Point
{
    public int $x {
        set {
            if ($value < 0) {
                throw new \InvalidArgumentException('Muito pequeno');
            }
            parent::$x::set($value);
        }
    }
}
?>
```

Um exemplo de substituição apenas de um gancho 'get' poderia ser:

**Exemplo #11 Acessando gancho pai ('get')**

```
<?php
class Strings
{
    public string $val;
}

class CaseFoldingStrings extends Strings
{
    public bool $uppercase = true;

    public string $val {
        get => $this->uppercase
            ? strtoupper(parent::$val::get())
            : strtolower(parent::$val::get());
    }
}
?>
```

### Serialização

O PHP possui diversas maneiras diferentes pelas quais um objeto pode ser serializado,
seja para consumo público ou para fins de depuração.
O comportamento dos ganchos varia dependendo do caso de uso.
Em alguns casos, o valor bruto de apoio de uma propriedade será usado,
ignorando quaisquer ganchos.
Em outros, a propriedade será lida ou escrita "através" do gancho,
assim como qualquer outra ação normal de leitura/gravação.

- [var\_dump()](function.var-dump.md): Usa valor bruto
- [serialize()](function.serialize.md): Usa valor bruto
- [unserialize()](function.unserialize.md): Usa valor bruto
- [\_\_serialize()](language.oop5.magic.md#object.serialize)/[\_\_unserialize()](language.oop5.magic.md#object.unserialize): Lógica customizada, usa gancho 'get'/'set'
- Conversão de array: Usa valor bruto
- [var\_export()](function.var-export.md): Usa gancho 'get'
- [json\_encode()](function.json-encode.md): Usa gancho 'get'
- [JsonSerializable](class.jsonserializable.md): Lógica customizada, usa gancho 'get'
- [get\_object\_vars()](function.get-object-vars.md): Usa gancho 'get'
- [get\_mangled\_object\_vars()](function.get-mangled-object-vars.md): Usa valor bruto

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
