# Exporta uma chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-export.php

---

# gnupg\_export

(PECL gnupg >= 0.1)

gnupg\_export — Exporta uma chave

### Descrição

function **gnupg\_export**([resource](language.types.resource.md) `$identifier`, [string](language.types.string.md) `$fingerprint`): [string](language.types.string.md)|[false](language.types.singleton.md)

Exporta a chave `fingerprint`.

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

`fingerprint`
:   A chave da impressão digital.

### Valor Retornado

Em caso de sucesso, esta função retorna os dados da chave.
Em caso de falha, esta função retorna **`false`**.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_export()****

```
<?php
$res = gnupg_init();
$export = gnupg_export($res,"8660281B6051D071D94B5B230549F9DC851566DC");
echo $export;
?>
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_export()****

```
<?php
$gpg = new gnupg();
$export = $gpg->export("8660281B6051D071D94B5B230549F9DC851566DC");
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
