# Vincula as variáveis de instrução preparada como parâmetros

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mysql-xdevapi-expression.php

---

# expression

(No version information available, might only be in Git)

expression — Vincula as variáveis de instrução preparada como parâmetros

### Descrição

function **mysql\_xdevapi\expression**([string](language.types.string.md) `$expression`): [object](language.types.object.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`expression`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **mysql\_xdevapi\Expression()****

```
<?php
$expression = mysql_xdevapi\Expression("[idade,emprego]");

$res  = $coll->find("idade > 30")->fields($expression)->limit(3)->execute();
$data = $res->fetchAll();

print_r($data);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
<?php
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
