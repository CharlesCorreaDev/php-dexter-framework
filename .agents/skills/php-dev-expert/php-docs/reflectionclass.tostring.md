# Retorna a representação em string do objeto ReflectionClass

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.tostring.php

---

# ReflectionClass::\_\_toString

(PHP 5, PHP 7, PHP 8)

ReflectionClass::\_\_toString — Retorna a representação em string do objeto ReflectionClass

### Descrição

public function **ReflectionClass::\_\_toString**(): [string](language.types.string.md)

Retorna a representação em string do objeto ReflectionClass.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma representação em string desta instância de [ReflectionClass](class.reflectionclass.md).

### Examples

**Exemplo #1 Exemplo de **ReflectionClass::\_\_toString()****

```
<?php
$reflectionClass = new ReflectionClass('Exception');
echo $reflectionClass->__toString();
?>
```

O exemplo acima produzirá:

```
Class [ <internal:Core> class Exception ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [7] {
    Property [ <default> protected $message ]
    Property [ <default> private $string ]
    Property [ <default> protected $code ]
    Property [ <default> protected $file ]
    Property [ <default> protected $line ]
    Property [ <default> private $trace ]
    Property [ <default> private $previous ]
  }

  - Methods [10] {
    Method [ <internal:Core> final private method __clone ] {
    }

    Method [ <internal:Core, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> $message ]
        Parameter #1 [ <optional> $code ]
        Parameter #2 [ <optional> $previous ]
      }
    }

    Method [ <internal:Core> final public method getMessage ] {
    }

    Method [ <internal:Core> final public method getCode ] {
    }

    Method [ <internal:Core> final public method getFile ] {
    }

    Method [ <internal:Core> final public method getLine ] {
    }

    Method [ <internal:Core> final public method getTrace ] {
    }

    Method [ <internal:Core> final public method getPrevious ] {
    }

    Method [ <internal:Core> final public method getTraceAsString ] {
    }

    Method [ <internal:Core> public method __toString ] {
    }
  }
}
```

### Veja também

- [ReflectionClass::export()](reflectionclass.export.md) - Exporta uma classe
- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
