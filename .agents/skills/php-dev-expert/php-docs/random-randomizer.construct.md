# Constrói um novo Randomizer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/random-randomizer.construct.php

---

# Random\Randomizer::\_\_construct

(PHP 8 >= 8.2.0)

Random\Randomizer::\_\_construct — Constrói um novo Randomizer

### Descrição

public function **Random\Randomizer::\_\_construct**([?](language.types.null.md)[Random\Engine](class.random-engine.md) `$engine` = **`null`**)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`engine`
:   O [Random\Engine](class.random-engine.md) a ser usado para gerar aleatoriedade.

    Se `engine` for omitido ou **`null`**, um novo objeto [Random\Engine\Secure](class.random-engine-secure.md) será usado.

### Examples

**Exemplo #1 Exemplo de **Random\Randomizer::\_\_construct()****

```
<?php
$r = new \Random\Randomizer();
$r = new \Random\Randomizer(new \Random\Engine\Mt19937());
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
