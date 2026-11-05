# Retorna o nome da classe de um objeto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-class.php

---

# get\_class

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_class — Retorna o nome da classe de um objeto

### Descrição

function **get\_class**([object](language.types.object.md) `$object` = ?): [string](language.types.string.md)

Obtém o nome da classe do `object` informado.

### Parâmetros

`object`
:   O objeto testado.

    > **Nota**:
    >
    > Passar explicitamente **`null`** no parâmetro `object` não é
    > mais permitido a partir do PHP 7.2.0 e emite um **`E_WARNING`**.
    > A partir do 8.0.0, um [TypeError](class.typeerror.md) é emitido quando
    > **`null`** é usado.

### Valor Retornado

Retorna o nome da classe da qual `object` é uma
instância.

Se `object` for uma instância de uma classe que existe
em um espaço de nomes, o nome da classe qualificado com espaço de nomes é retornado.

### Erros/Exceções

Se **get\_class()** for chamada com qualquer outro parâmetro que não seja
um objeto, [TypeError](class.typeerror.md) é disparado. Antes do PHP 8.0.0,
um alerta **`E_WARNING`** era emitido.

Se **get\_class()** for chamada sem parâmetros de fora de uma classe,
um [Error](class.error.md) é disparado. Antes do PHP 8.0.0,
um alerta **`E_WARNING`** era emitido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **get\_class()** sem um argumento agora emite um alerta **`E_DEPRECATED`**; anteriormente, chamar esta função de dentro de uma classe retornava o nome dessa classe. |
| 8.0.0 | Chamar esta função de fora de uma classe, sem argumentos, agora dispara um [Error](class.error.md). Anteriormente, um alerta **`E_WARNING`** era emitido e a função retornava **`false`**. |
| 7.2.0 | Antes desta versão o valor padrão para `object` era **`null`** e tinha o mesmo efeito de não se passar nenhum valor. Agora, **`null`** foi removido do valor padrão para `object`, e não é mais uma entrada válida. |

### Examples

**Exemplo #1 Usando **get\_class()****

```
<?php

class foo {
    function name()
    {
        echo "Meu nome é " , get_class($this) , "\n";
    }
}

// cria um objeto
$bar = new foo();

// chamada externa
echo "Seu nome é " , get_class($bar) , "\n";

// chamada interna
$bar->name();

?>
```

O exemplo acima produzirá:

```
Meu nome é foo
Seu nome é foo
```

**Exemplo #2 Usando **get\_class()** em superclasse**

```
<?php

abstract class bar {
    public function __construct()
    {
        var_dump(get_class($this));
        var_dump(get_class());
    }
}

class foo extends bar {
}

new foo;

?>
```

O exemplo acima produzirá:

```
string(3) "foo"
string(3) "bar"
```

**Exemplo #3 Usando **get\_class()** em classe com espaço de nomes**

```
<?php

namespace Foo\Bar;

class Baz {
    public function __construct()
    {

    }
}

$baz = new \Foo\Bar\Baz;

var_dump(get_class($baz));
?>
```

O exemplo acima produzirá:

```
string(11) "Foo\Bar\Baz"
```

### Veja também

- [get\_called\_class()](function.get-called-class.md) - O nome da classe da qual o método estático foi chamado
- [get\_parent\_class()](function.get-parent-class.md) - Obtém o nome da classe pai para o objeto ou classe
- [gettype()](function.gettype.md) - Obtém o tipo de uma variável
- [get\_debug\_type()](function.get-debug-type.md) - Obtém o nome do tipo de uma variável de forma adequada a depuração
- [is\_subclass\_of()](function.is-subclass-of.md) - Verifica se o objeto tem esta classe como uma de suas classes pai

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
