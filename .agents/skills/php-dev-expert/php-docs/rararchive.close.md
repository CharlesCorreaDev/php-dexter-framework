# Fecha o arquivo RAR e libera todos os recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.close.php

---

# RarArchive::close

# rar\_close

(PECL rar >= 2.0.0)

RarArchive::close -- rar\_close — Fecha o arquivo RAR e libera todos os recursos

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::close**(): [bool](language.types.boolean.md)

Estilo procedural:

function **rar\_close**([RarArchive](class.rararchive.md) `$rarfile`): [bool](language.types.boolean.md)

Fecha o arquivo RAR e libera todos os recursos alocados.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 2.0.0 | As entradas RAR retornadas por [RarArchive::getEntry()](rararchive.getentry.md) e [RarArchive::getEntries()](rararchive.getentries.md) agora são invalidadas ao chamar este método. Isso significa que todos os métodos de instância chamados para tais entradas não têm garantia de sucesso. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$rar_arch = RarArchive::open('latest_winrar.rar');
echo $rar_arch."\n";
$rar_arch->close();
echo $rar_arch."\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar"
RAR Archive "D:\php_rar\trunk\tests\latest_winrar.rar" (closed)
```

**Exemplo #2 Estilo procedural**

```
<?php
$rar_arch = rar_open('latest_winrar.rar');
echo $rar_arch."\n";
rar_close($rar_arch);
echo $rar_arch."\n";
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
