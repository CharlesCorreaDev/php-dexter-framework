# Cria um identificador Radius para autenticação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-auth-open.php

---

# radius\_auth\_open

(PECL radius >= 1.1.0)

radius\_auth\_open — Cria um identificador Radius para autenticação

### Descrição

function **radius\_auth\_open**(): [resource](language.types.resource.md)

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um identificador em caso de sucesso e **`false`** em caso de erro. Esta função só falha se
não houver memória suficiente disponível.

### Examples

**Exemplo #1 Exemplo de **radius\_auth\_open()****

```
<?php
$radh = radius_auth_open()
    or die ("Não foi possível criar o identificador");
echo "Identificador criado com sucesso";
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
