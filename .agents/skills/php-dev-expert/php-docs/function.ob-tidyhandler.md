# Função de retorno ob_start para reparar o buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-tidyhandler.php

---

# ob\_tidyhandler

(PHP 5, PHP 7, PHP 8)

ob\_tidyhandler — Função de retorno ob\_start para reparar o buffer

### Descrição

function **ob\_tidyhandler**([string](language.types.string.md) `$input`, [int](language.types.integer.md) `$mode` = ?): [string](language.types.string.md)

Função de retorno para [ob\_start()](function.ob-start.md) reparar o buffer.

### Parâmetros

`input`
:   O buffer.

`mode`
:   O modo de buffer.

### Valor Retornado

Retorna o buffer modificado.

### Examples

**Exemplo #1 Exemplo de **ob\_tidyhandler()****

```
<?php
ob_start('ob_tidyhandler');

echo '<p>test</i>';
?>
```

O exemplo acima produzirá:

```
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title></title>
</head>
<body>
<p>test</p>
</body>
</html>
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída

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
