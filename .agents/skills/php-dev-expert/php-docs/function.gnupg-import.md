# Importa uma chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-import.php

---

# gnupg\_import

(PECL gnupg >= 0.3)

gnupg\_import — Importa uma chave

### Descrição

function **gnupg\_import**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$keydata`): [array](language.types.array.md)|[false](language.types.singleton.md)

Importa a chave `keydata` e retorna um array com
informações sobre o processo de importação.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`keydata`
:   A chave de dados que está sendo importada.

### Valor Retornado

Em caso de sucesso, esta função retorna um array de informações sobre o processo de importação.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_import()****

```
<?php
$res = gnupg_init();
$info = gnupg_import($res,$keydata);
print_r($info);
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_import()****

```
<?php
$gpg = new gnupg();
$info = $gpg->import($keydata);
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
