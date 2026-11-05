# Inspect how a configuration value is stored

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaconf.debug-info.php

---

# Yaconf::\_\_debug\_info

(PECL yaconf >= 1.1.0)

Yaconf::\_\_debug\_info — Inspect how a configuration value is stored

### Descrição

public static function **Yaconf::\_\_debug\_info**([string](language.types.string.md) `$name`): [?](language.types.null.md)[array](language.types.array.md)

Returns debugging information about the value stored under
`name`: the memory address of the stored value
and whether the value still lives inside Yaconf's compacted storage
block.

**Aviso**

This method exists solely for Yaconf's own test suite, which
uses it to verify that the extension is working correctly.
Do not use it in production code, and do not rely on the
format of its output: the returned array may change at any
time.

### Parâmetros

`name`
:   The configuration name to inspect, using the same dot notation as
    [Yaconf::get()](yaconf.get.md).

### Valor Retornado

An [array](language.types.array.md) with four entries when the configuration
exists, **`null`** otherwise:

- `key` — the name that was looked up.
- `address` — the memory address of the stored
  value. Values are stored as interned strings or immutable arrays,
  so this address stays constant until the configuration is
  reloaded.
- `val` — the stored value itself.
- `changed` — **`false`** while the value's data still
  lives inside the compacted storage block, meaning the operating
  system has not had to copy the page (copy-on-write still applies);
  **`true`** when the value has been re-allocated outside the block.

### Examples

**Exemplo #1 **Yaconf::\_\_debug\_info()** example**

```
<?php
// assuming app.ini contains name="shop"
var_dump(Yaconf::__debug_info("app.name"));
/*
array(4) {
  ["key"]=>
  string(8) "app.name"
  ["address"]=>
  string(14) "0x7f8b1c0a3d20"
  ["val"]=>
  string(4) "shop"
  ["changed"]=>
  bool(false)
}
*/

var_dump(Yaconf::__debug_info("app.missing")); // NULL
?>
```

### Veja também

- [Yaconf::get()](yaconf.get.md) - Recupera um item
- [Yaconf::has()](yaconf.has.md) - Determina se um item existe

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
