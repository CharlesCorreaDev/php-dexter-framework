# Obtém o objeto de entrada do arquivo RAR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.getentry.php

---

# RarArchive::getEntry

# rar\_entry\_get

(PECL rar >= 2.0.0)

RarArchive::getEntry -- rar\_entry\_get — Obtém o objeto de entrada do arquivo RAR

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::getEntry**([string](language.types.string.md) `$entryname`): [RarEntry](class.rarentry.md)|[false](language.types.singleton.md)

Estilo procedural:

function **rar\_entry\_get**([RarArchive](class.rararchive.md) `$rarfile`, [string](language.types.string.md) `$entryname`): [RarEntry](class.rarentry.md)|[false](language.types.singleton.md)

Obtém o objeto de entrada (arquivo ou diretório) do arquivo RAR.

> **Nota**:
>
> Você também pode obter objetos de entrada usando [RarArchive::getEntries()](rararchive.getentries.md).
>
> Observe que um arquivo RAR pode ter múltiplas entradas com o mesmo nome; este método
> recuperará apenas o primeiro.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

`entryname`
:   Caminho para a entrada no arquivo RAR.

    > **Nota**:
    >
    > O caminho deve ser o mesmo retornado por
    > [RarEntry::getName()](rarentry.getname.md).

### Valor Retornado

Retorna o objeto [RarEntry](class.rarentry.md) correspondente ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$rar_arch = RarArchive::open('solid.rar');
if ($rar_arch === FALSE)
    die("Não foi possível abrir o arquivo RAR.");
$rar_entry = $rar_arch->getEntry('tese.txt');
if ($rar_entry === FALSE)
    die("Não foi possível recupera esta entrada");
echo get_class($rar_entry)."\n";
echo $rar_entry;
$rar_arch->close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
RarEntry
RarEntry for file "tese.txt" (23b93a7a)
```

**Exemplo #2 Estilo procedural**

```
<?php
$rar_arch = rar_open('solid.rar');
if ($rar_arch === FALSE)
    die("Não foi possível abrir o arquivo RAR.");
$rar_entry = rar_entry_get($rar_arch, 'tese.txt');
if ($rar_entry === FALSE)
    die("Não foi possível recupera esta entrada");
echo get_class($rar_entry)."\n";
echo $rar_entry;
rar_close($rar_arch);
?>
```

### Veja também

- [RarArchive::getEntries()](rararchive.getentries.md) - Obtém a lista completa de entradas do arquivo RAR
- Empacotador [`rar://`](wrappers.rar.md)

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
