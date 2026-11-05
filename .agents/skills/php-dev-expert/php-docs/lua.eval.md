# Avalia uma string como código Lua

> **Fonte / Source:** https://www.php.net/manual/pt_BR/lua.eval.php

---

# Lua::eval

(PECL lua >=0.9.0)

Lua::eval — Avalia uma string como código Lua

### Descrição

public function **Lua::eval**([string](language.types.string.md) `$statements`): [mixed](language.types.mixed.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`statements`

### Valor Retornado

Retorna o resultado do código avaliado, **`null`** para argumentos incorretos ou **`false`** para
outros tipos de falha.

### Examples

**Exemplo #1 Exemplo da função **Lua::eval()****

```
<?php
$lua = new Lua();
$lua->eval(<<<CODE
    print(2);
CODE
);
?>
```

O exemplo acima produzirá:

```
2
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
