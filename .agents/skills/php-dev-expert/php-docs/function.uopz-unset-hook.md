# Remove o gancho definido anteriormente na função ou método

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-unset-hook.php

---

# uopz\_unset\_hook

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_unset\_hook — Remove o gancho definido anteriormente na função ou método

### Descrição

function **uopz\_unset\_hook**([string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

function **uopz\_unset\_hook**([string](language.types.string.md) `$class`, [string](language.types.string.md) `$function`): [bool](language.types.boolean.md)

Remove o gancho definido anteriormente na função ou método.

### Parâmetros

`class`
:   O nome da classe.

`function`
:   O nome da função ou do método.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso básico de **uopz\_unset\_hook()****

```
<?php
function foo() {
    echo 'foo';
}
uopz_set_hook('foo', function () {echo 'bar';});
foo();
echo PHP_EOL;
uopz_unset_hook('foo');
foo();
?>
```

O exemplo acima produzirá:

```
barfoo
foo
```

### Veja também

- [uopz\_set\_hook()](function.uopz-set-hook.md) - Define o gancho a ser executado ao entrar em uma função ou método
- [uopz\_get\_hook()](function.uopz-get-hook.md) - Obtém o gancho previamente definido na função ou método

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
