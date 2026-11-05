# Retorna um array com informações sobre todas as chaves que correspondem ao padrão fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-keyinfo.php

---

# gnupg\_keyinfo

(PECL gnupg >= 0.1)

gnupg\_keyinfo — Retorna um array com informações sobre todas as chaves que correspondem ao padrão fornecido

### Descrição

function **gnupg\_keyinfo**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$pattern`): [array](language.types.array.md)|[false](language.types.singleton.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`pattern`
:   O padrão sendo verificado em relação às chaves.

### Valor Retornado

Retorna um array com informações sobre todas as chaves que correspondem ao padrão
fornecido ou **`false`**, se ocorreu um erro.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_keyinfo()****

```
<?php
$res = gnupg_init();
$info = gnupg_keyinfo($res, 'test');
print_r($info);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_keyinfo()****

```
<?php
$gpg = new gnupg();
$info = $gpg->keyinfo("test");
print_r($info);
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
