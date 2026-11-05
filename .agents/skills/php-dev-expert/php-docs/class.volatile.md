# A classe Volatile

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.volatile.php

---

# A classe Volatile

(PECL pthreads >= 3.0.0)

## Introdução

A classe **Volatile** é nova no pthreads v3. Sua
introdução é consequência da nova semântica de imutabilidade dos membros
[Threaded](class.threaded.md) das classes [Threaded](class.threaded.md).
A classe **Volatile** permite a mutabilidade de seus
membros [Threaded](class.threaded.md) e também é usada para armazenar
arrays PHP em contextos [Threaded](class.threaded.md).

## Resumo da classe

class **Volatile**

extends
[Threaded](class.threaded.md)
implements
[Collectable](class.collectable.md), [Traversable](class.traversable.md) {

/\* Métodos herdados \*/

public function [Threaded::chunk](threaded.chunk.md)([int](language.types.integer.md) `$size`, [bool](language.types.boolean.md) `$preserve`): [array](language.types.array.md)

public function [Threaded::count](threaded.count.md)(): [int](language.types.integer.md)

public function [Threaded::extend](threaded.extend.md)([string](language.types.string.md) `$class`): [bool](language.types.boolean.md)

public function [Threaded::isRunning](thread.isrunning.md)(): [bool](language.types.boolean.md)

public function [Threaded::isTerminated](threaded.isterminated.md)(): [bool](language.types.boolean.md)

public function [Threaded::merge](threaded.merge.md)([mixed](language.types.mixed.md) `$from`, [bool](language.types.boolean.md) `$overwrite` = ?): [bool](language.types.boolean.md)

public function [Threaded::notify](threaded.notify.md)(): [bool](language.types.boolean.md)

public function [Threaded::notifyOne](threaded.notifyone.md)(): [bool](language.types.boolean.md)

public function [Threaded::pop](threaded.pop.md)(): [bool](language.types.boolean.md)

public function [Threaded::run](threaded.run.md)(): [void](language.types.void.md)

public function [Threaded::shift](threaded.shift.md)(): [mixed](language.types.mixed.md)

public function [Threaded::synchronized](threaded.synchronized.md)([Closure](class.closure.md) `$block`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

public function [Threaded::wait](threaded.wait.md)([int](language.types.integer.md) `$timeout` = ?): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 Nova semântica de imutabilidade do Threaded**

```
<?php

class Task extends Threaded
{
    public function __construct()
    {
        $this->data = new Threaded();

        // tentativa de substituir uma propriedade Threaded de uma classe Threaded (inválida)
        $this->data = new stdClass();
    }
}

var_dump((new Task())->data);
```

O exemplo acima produzirá
algo semelhante a:

```
RuntimeException: Threaded members previously set to Threaded objects are immutable, cannot overwrite data in %s:%d
```

**Exemplo #2 Volatile use-case**

```
<?php

class Task extends Volatile
{
    public function __construct()
    {
        $this->data = new Threaded();

        // tentativa de substituir uma propriedade Threaded de uma classe Volatile (válido)
        $this->data = new stdClass();
    }
}

var_dump((new Task())->data);
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#3 (0) {
}
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
