# Pesquisa os itens confiáveis

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-gettrustlist.php

---

# gnupg\_gettrustlist

(PECL gnupg >= 0.5)

gnupg\_gettrustlist — Pesquisa os itens confiáveis

### Descrição

function **gnupg\_gettrustlist**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$pattern`): [?](language.types.null.md)[array](language.types.array.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`pattern`
:   Expressão para limitar a lista de itens confiáveis ​​somente àqueles que correspondem ao padrão.

### Valor Retornado

Em caso de sucesso, esta função retorna um array de itens confiáveis.
Em caso de falha, esta função retorna **`null`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_gettrustlist()****

```
<?php
$res = gnupg_init();
$items = gnupg_gettrustlist($res);
print_r($items);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_gettrustlist()****

```
<?php
$gpg = new gnupg();
$items = $gpg->gettrustlist();
print_r($items);
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
