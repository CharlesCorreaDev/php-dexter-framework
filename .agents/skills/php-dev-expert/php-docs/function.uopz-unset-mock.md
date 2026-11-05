# Remove a definição de um mock previamente definido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-unset-mock.php

---

# uopz\_unset\_mock

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_unset\_mock — Remove a definição de um mock previamente definido

### Descrição

function **uopz\_unset\_mock**([string](language.types.string.md) `$class`): [void](language.types.void.md)

Remove a definição de um mock previamente definido para a classe em `class`.

### Parâmetros

`class`
:   O nome da classe com mock.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Uma [RuntimeException](class.runtimeexception.md) é lançada se nenhum mock foi
definido anteriormente para `class`.

### Examples

**Exemplo #1 Exemplo de **uopz\_unset\_mock()****

```
<?php
class A {
    public static function who() {
        echo "A";
    }
}

class mockA {
    public static function who() {
        echo "mockA";
    }
}

uopz_set_mock(A::class, mockA::class);
uopz_unset_mock(A::class);
A::who();
?>
```

O exemplo acima produzirá:

```
A
```

### Veja também

- [uopz\_set\_mock()](function.uopz-set-mock.md) - Usa mock em vez de classe para novos objetos
- [uopz\_get\_mock()](function.uopz-get-mock.md) - Obtém o mock atual para uma classe

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
