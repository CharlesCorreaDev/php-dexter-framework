# Autocarregamento de Classes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.oop5.autoload.php

---

## Autocarregamento de Classes

Muitos programadores, ao desenvolver aplicações orientadas a objeto, criam
um arquivo PHP para cada definição de classe. Um dos maiores contratempos é
ter de escrever uma longa lista de "includes" no início de cada script (um
para cada classe).

A função [spl\_autoload\_register()](function.spl-autoload-register.md) registra qualquer número de
autocarregadores, permitindo que classes e interfaces sejam automaticamente carregadas
se elas não ainda não tiverem sido definidas. Ao registrar autocarregadores, o PHP tem uma última chance
de carregar classes e interfaces antes que falhem com um erro.

Qualquer construção semelhante a uma classe pode ser carregada automaticamente da mesma maneira. Isso inclui classes,
interfaces, traits e enumerações.

**Cuidado**

Antes do PHP 8.0.0, era possível usar [\_\_autoload()](function.autoload.md)
para fazer autocarregamento de classes e interfaces. No entanto, ela é uma alternativa menos
flexível a [spl\_autoload\_register()](function.spl-autoload-register.md) e
[\_\_autoload()](function.autoload.md) está descontinuada a partir do PHP 7.2.0, e removida
a partir do PHP 8.0.0.

> **Nota**:
>
> [spl\_autoload\_register()](function.spl-autoload-register.md) pode ser chamada várias vezes para
> registrar múltiplos autocarregadores. No entanto, lançar uma exceção em uma função de autocarregamento
> interrompe esse processo e não permitirá que outras funções de autocarregamento sejam
> executadas. Por esse motivo, o lançamento de exceções em funções de autocarregamento é altamente
> desencorajado.

**Exemplo #1 Exemplo de autocarregamento**

Esse exemplo tenta carregar as classes `MyClass1`
e `MyClass2` dos arquivos MyClass1.php
e MyClass2.php, respectivamente.

```
<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj2 = new MyClass2();
?>
```

**Exemplo #2 Outro exemplo de autocarregamento**

Este exemplo tenta carregar a interface `ITest`.

```
<?php

spl_autoload_register(function ($name) {
    var_dump($name);
});

class Foo implements ITest {
}

/*
string(5) "ITest"

Fatal error: Interface 'ITest' not found in ...
*/
?>
```

**Exemplo #3 Usando o autocarregador do Composer**

[» Composer](https://getcomposer.org/) gera um `vendor/autoload.php`
que é configurado para carregar automaticamente pacotes gerenciados
pelo Composer. Ao incluir este arquivo, esses pacotes podem ser usados sem
nenhum trabalho adicional.

```
<?php
require __DIR__ . '/vendor/autoload.php';

$uuid = Ramsey\Uuid\Uuid::uuid7();

echo "Gerado novo UUID -> ", $uuid->toString(), "\n";
?>
```

### Veja também

- [unserialize()](function.unserialize.md)
- [unserialize\_callback\_func](var.configuration.md#ini.unserialize-callback-func)
- [unserialize\_max\_depth](var.configuration.md#ini.unserialize-max-depth)
- [spl\_autoload\_register()](function.spl-autoload-register.md)
- [spl\_autoload()](function.spl-autoload.md)
- [\_\_autoload()](function.autoload.md)

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
