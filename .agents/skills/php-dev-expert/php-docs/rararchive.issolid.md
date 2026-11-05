# Verifica se o arquivo RAR é sólido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.issolid.php

---

# RarArchive::isSolid

# rar\_solid\_is

(PECL rar >= 2.0.0)

RarArchive::isSolid -- rar\_solid\_is — Verifica se o arquivo RAR é sólido

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::isSolid**(): [bool](language.types.boolean.md)

Estilo procedural:

function **rar\_solid\_is**([RarArchive](class.rararchive.md) `$rarfile`): [bool](language.types.boolean.md)

Verifique se o arquivo RAR é sólido. A extração de arquivos individuais é mais lenta em
arquivos sólidos.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

### Valor Retornado

Retorna **`true`** se o arquivo for sólido, **`false`** caso contrário.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$arch1 = RarArchive::open("store_method.rar");
$arch2 = RarArchive::open("solid.rar");
echo "$arch1: " . ($arch1->isSolid()?'yes':'no') ."\n";
echo "$arch2: " . ($arch2->isSolid()?'yes':'no') . "\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
RAR Archive "C:\php_rar\trunk\tests\store_method.rar": no
RAR Archive "C:\php_rar\trunk\tests\solid.rar": yes
```

**Exemplo #2 Estilo procedural**

```
<?php
$arch1 = rar_open("store_method.rar");
$arch2 = rar_open("solid.rar");
echo "$arch1: " . (rar_solid_is($arch1)?'yes':'no') ."\n";
echo "$arch2: " . (rar_solid_is($arch2)?'yes':'no') . "\n";
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
