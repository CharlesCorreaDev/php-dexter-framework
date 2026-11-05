# Cria um identificador Radius para contabilidade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-acct-open.php

---

# radius\_acct\_open

(PECL radius >= 1.1.0)

radius\_acct\_open — Cria um identificador Radius para contabilidade

### Descrição

function **radius\_acct\_open**(): [resource](language.types.resource.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um identificador em caso de sucesso e **`false`** em caso de erro. Esta função só falha se
não houver memória suficiente disponível.

### Examples

**Exemplo #1 Exemplo de **radius\_acct\_open()****

```
<?php
$res = radius_acct_open ()
    or die ("Não foi possível criar o identificador");
print "Identificador criado com sucesso";
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
