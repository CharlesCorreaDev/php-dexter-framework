# Obtém o mock atual para uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-get-mock.php

---

# uopz\_get\_mock

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_get\_mock — Obtém o mock atual para uma classe

### Descrição

function **uopz\_get\_mock**([string](language.types.string.md) `$class`): [mixed](language.types.mixed.md)

Retorna o mock atual para `class`.

### Parâmetros

`class`
:   O nome da classe simulada.

### Valor Retornado

Uma string contendo o nome do mock, ou um objeto,
ou **`null`** se nenhum mock tiver sido definido.

### Examples

**Exemplo #1 Exemplo de **uopz\_get\_mock()****

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
echo uopz_get_mock(A::class);
?>
```

O exemplo acima produzirá:

```
mockA
```

### Veja também

- [uopz\_set\_mock()](function.uopz-set-mock.md) - Usa mock em vez de classe para novos objetos
- [uopz\_unset\_mock()](function.uopz-unset-mock.md) - Remove a definição de um mock previamente definido

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
