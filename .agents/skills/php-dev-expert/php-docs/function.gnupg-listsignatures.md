# Lista as assinaturas de clave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-listsignatures.php

---

# gnupg\_listsignatures

(PECL gnupg >= 0.5)

gnupg\_listsignatures — Lista as assinaturas de clave

### Descrição

function **gnupg\_listsignatures**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$keyid`): [?](language.types.null.md)[array](language.types.array.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`keyid`
:   O ID da chave para o qual as assinaturas serão listadas.

### Valor Retornado

Em caso de sucesso, esta função retorna um array de assinaturas de chave.
Em caso de falha, esta função retorna **`null`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_listsignatures()****

```
<?php
$res = gnupg_init();
$signatures = gnupg_listsignatures($res, "8660281B6051D071D94B5B230549F9DC851566DC");
print_r($signatures);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_listsignatures()****

```
<?php
$gpg = new gnupg();
$signatures = $gpg->listsignatures("8660281B6051D071D94B5B230549F9DC851566DC");
print_r($signatures);
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
