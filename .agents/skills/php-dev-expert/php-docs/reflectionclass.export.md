# Exporta uma classe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.export.php

---

# ReflectionClass::export

(PHP 5, PHP 7)

ReflectionClass::export — Exporta uma classe

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.4.0 e foi *REMOVIDA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

public static function **ReflectionClass::export**([mixed](language.types.mixed.md) `$argument`, [bool](language.types.boolean.md) `$return` = **`false`**): [string](language.types.string.md)

Exporta uma classe refletida.

### Parâmetros

`argument`
:   A reflexão a ser exportada.

`return`
:   Definir como **`true`** retornará a exportação,
    em vez de emiti-la. Definir como **`false`** (o padrão) fará o oposto.

### Valor Retornado

Se o parâmetro `return`
for definido como **`true`**, então a exportação será retornada como uma [string](language.types.string.md),
caso contrário, **`null`** será retornado.

### Examples

**Exemplo #1 Uso básico de **ReflectionClass::export()****

```
<?php
class Apple {
    public $var1;
    public $var2 = 'Orange';

    public function type() {
        return 'Apple';
    }
}
ReflectionClass::export('Apple');
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Class [ <user> class Apple ] {
  @@ php shell code 1-8

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [2] {
    Property [ <default> public $var1 ]
    Property [ <default> public $var2 ]
  }

  - Methods [1] {
    Method [ <user> public method type ] {
      @@ php shell code 5 - 7
    }
  }
}
```

### Veja também

- [ReflectionClass::getName()](reflectionclass.getname.md) - Obtém o nome da classe
- [ReflectionClass::\_\_toString()](reflectionclass.tostring.md) - Retorna a representação em string do objeto ReflectionClass

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
