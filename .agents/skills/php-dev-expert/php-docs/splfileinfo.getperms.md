# Obtém as permissões do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfileinfo.getperms.php

---

# SplFileInfo::getPerms

(PHP 5 >= 5.1.2, PHP 7, PHP 8)

SplFileInfo::getPerms — Obtém as permissões do arquivo

### Descrição

public function **SplFileInfo::getPerms**(): [int](language.types.integer.md)|[false](language.types.singleton.md)

Obtém as permissões para o arquivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna as permissões do arquivo em caso de sucesso, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SplFileInfo::getPerms()****

```
<?php
$info = new SplFileInfo('/tmp');
echo substr(sprintf('%o', $info->getPerms()), -4);

$info = new SplFileInfo(__FILE__);
echo substr(sprintf('%o', $info->getPerms()), -4);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
1777
0644
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
