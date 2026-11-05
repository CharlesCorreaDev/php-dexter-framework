# Constrói uma ReflectionClass

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionclass.construct.php

---

# ReflectionClass::\_\_construct

(PHP 5, PHP 7, PHP 8)

ReflectionClass::\_\_construct — Constrói uma ReflectionClass

### Descrição

public function **ReflectionClass::\_\_construct**([object](language.types.object.md)|[string](language.types.string.md) `$objectOrClass`)

Constrói um novo objeto [ReflectionClass](class.reflectionclass.md).

### Parâmetros

`objectOrClass`
:   Uma [string](language.types.string.md) contendo o nome da classe a ser
    refletir ou um [object](language.types.object.md).

### Erros/Exceções

Lança [ReflectionException](class.reflectionexception.md) se a classe a ser refletida não existir.

### Examples

**Exemplo #1 Uso básico de ReflectionClass**

```
<?php
$reflection = new ReflectionClass('Exception');
echo $reflection;
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Class [ <internal:Core> class Exception implements Stringable, Throwable ] {

  - Constants [0] {
  }

  - Static properties [0] {
  }

  - Static methods [0] {
  }

  - Properties [7] {
    Property [ protected $message = '' ]
    Property [ private string $string = '' ]
    Property [ protected $code = 0 ]
    Property [ protected string $file = '' ]
    Property [ protected int $line = 0 ]
    Property [ private array $trace = [] ]
    Property [ private ?Throwable $previous = NULL ]
  }

  - Methods [11] {
    Method [ <internal:Core> private method __clone ] {

      - Parameters [0] {
      }
      - Return [ void ]
    }

    Method [ <internal:Core, ctor> public method __construct ] {

      - Parameters [3] {
        Parameter #0 [ <optional> string $message = "" ]
        Parameter #1 [ <optional> int $code = 0 ]
        Parameter #2 [ <optional> ?Throwable $previous = null ]
      }
    }

    Method [ <internal:Core> public method __wakeup ] {

      - Parameters [0] {
      }
      - Tentative return [ void ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getMessage ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getCode ] {

      - Parameters [0] {
      }
    }

    Method [ <internal:Core, prototype Throwable> final public method getFile ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getLine ] {

      - Parameters [0] {
      }
      - Return [ int ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getTrace ] {

      - Parameters [0] {
      }
      - Return [ array ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getPrevious ] {

      - Parameters [0] {
      }
      - Return [ ?Throwable ]
    }

    Method [ <internal:Core, prototype Throwable> final public method getTraceAsString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }

    Method [ <internal:Core, prototype Stringable> public method __toString ] {

      - Parameters [0] {
      }
      - Return [ string ]
    }
  }
}
```

### Veja também

- [ReflectionObject::\_\_construct()](reflectionobject.construct.md) - Constrói um ReflectionObject
- [Constructors](language.oop5.decon.md#language.oop5.decon.constructor)

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
