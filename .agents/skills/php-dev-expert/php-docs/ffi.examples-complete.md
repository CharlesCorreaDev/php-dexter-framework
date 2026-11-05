# Um exemplo completo de PHP/FFI/pré-carregamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.examples-complete.php

---

## Um exemplo completo de PHP/FFI/pré-carregamento

php.ini

```
ffi.enable=preload
opcache.preload=preload.php
```

preload.php

```
<?php
FFI::load(__DIR__ . "/dummy.h");
opcache_compile_file(__DIR__ . "/dummy.php");
?>
```

dummy.h

```
#define FFI_SCOPE "DUMMY"
#define FFI_LIB "libc.so.6"

int printf(const char *format, ...);
```

dummy.php

```
<?php
final class Dummy {
    private static $ffi = null;
    function __construct() {
        if (is_null(self::$ffi)) {
            self::$ffi = FFI::scope("DUMMY");
        }
    }
    function printf($format, ...$args) {
       return (int) self::$ffi->printf($format, ...$args);
    }
}
?>
```

test.php

```
<?php
$d = new Dummy();
$d->printf("Olá, %s!\n", "mundo");
?>
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
