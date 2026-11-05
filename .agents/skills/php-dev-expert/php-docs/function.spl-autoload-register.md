# Registra a função dada como implementação __autoload()

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.spl-autoload-register.php

---

# spl\_autoload\_register

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

spl\_autoload\_register — Registra a função dada como implementação \_\_autoload()

### Descrição

function **spl\_autoload\_register**([?](language.types.null.md)[callable](language.types.callable.md) `$callback` = **`null`**, [bool](language.types.boolean.md) `$throw` = **`true`**, [bool](language.types.boolean.md) `$prepend` = **`false`**): [bool](language.types.boolean.md)

Registrar uma função na fila de \_\_autoload fornecida pelo spl. Se a fila
ainda não estiver ativada, será ativada.

Se seu código tiver uma função [\_\_autoload()](function.autoload.md) existente, então
esta função deve ser registrada explicitamente na fila \_\_autoload. Isso
ocorre porque **spl\_autoload\_register()** substituirá
efetivamente o cache do mecanismo para a função [\_\_autoload()](function.autoload.md)
por [spl\_autoload()](function.spl-autoload.md) ou
[spl\_autoload\_call()](function.spl-autoload-call.md).

Se houver várias funções de carregamento automático, **spl\_autoload\_register()**
permite isso. Ele cria efetivamente uma fila de funções de carregamento automático e
executa cada uma delas na ordem em que são definidas. Em contraste,
[\_\_autoload()](function.autoload.md) só pode ser definido uma vez.

### Parâmetros

`callback`
:   A função de carregamento automático sendo registrada.
    Se for **`null`**, então a implementação padrão de
    [spl\_autoload()](function.spl-autoload.md) será registrada.

    function callback([string](language.types.string.md) `$class`): [void](language.types.void.md)

    A `class` não conterá a barra invertida
    inicial de um identificador totalmente qualificado.

`throw`
:   Este parâmetro especifica se
    **spl\_autoload\_register()** deve lançar
    exceções quando o `callback`
    não pode ser registrado.

    **Aviso**

    Este parâmetro é ignorado a partir do PHP 8.0.0, e um aviso será
    emitido se definido como **`false`**. **spl\_autoload\_register()**
    agora sempre lançará um [TypeError](class.typeerror.md) em argumentos
    inválidos.

`prepend`
:   Se **`true`**, **spl\_autoload\_register()** irá adicionar
    o carregador automático na fila de carregamento automático antes de anexá-lo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `callback` é anulável agora. |

### Examples

**Exemplo #1 **spl\_autoload\_register()** como substituição para um [\_\_autoload()](function.autoload.md) function**

```
<?php

// function __autoload($class) {
//     include 'classes/' . $class . '.class.php';
// }

function my_autoloader($class) {
    include 'classes/' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');

// Ou, usando uma função anônima
spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

?>
```

**Exemplo #2 **spl\_autoload\_register()** exemplo onde a classe não é carregada**

```
<?php

namespace Foobar;

class Foo {
    static public function test($class) {
        print '[['. $class .']]';
    }
}

spl_autoload_register(__NAMESPACE__ .'\Foo::test');

new InexistentClass;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
[[Foobar\InexistentClass]]
Fatal error: Class 'Foobar\InexistentClass' not found in ...
```

**Exemplo #3 O identificador será fornecido sem a barra invertida inicial**

```
<?php

spl_autoload_register(static function ($class) {
    var_dump($class);
});

class_exists('RelativeName');
class_exists('RelativeName\\WithNamespace');
class_exists('\\AbsoluteName');
class_exists('\\AbsoluteName\\WithNamespace');

?>
```

O exemplo acima produzirá:

```
string(12) "RelativeName"
string(26) "RelativeName\WithNamespace"
string(12) "AbsoluteName"
string(26) "AbsoluteName\WithNamespace"
```

### Veja também

- [\_\_autoload()](function.autoload.md) - Tenta carregar uma classe indefinida

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
