# Obtém o gancho previamente definido na função ou método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-hook.php

---

# uopz\_get\_hook

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_get\_hook — Obtém o gancho previamente definido na função ou método

### Descrição

function **uopz\_get\_hook**([string](language.types.string.md) `$function`): [Closure](class.closure.md)

function **uopz\_get\_hook**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [Closure](class.closure.md)

Obtém o gancho previamente definido na função ou método.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

### Valor Retornado

Retorna o gancho definido anteriormente em uma função ou método, ou **`null`** se nenhum gancho
tiver sido definido.

### Examples

**Exemplo #1 Uso básico de **uopz\_get\_hook()****

```
<?php
function foo() {
    echo 'foo';
}
uopz_set_hook('foo', function () {echo 'bar';});
var_dump(uopz_get_hook('foo'));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(Closure)#2 (0) {
}
```

### Veja também

- [uopz\_set\_hook()](function.uopz-set-hook.md) - Define o gancho a ser executado ao entrar em uma função ou método
- [uopz\_unset\_hook()](function.uopz-unset-hook.md) - Remove o gancho definido anteriormente na função ou método

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
