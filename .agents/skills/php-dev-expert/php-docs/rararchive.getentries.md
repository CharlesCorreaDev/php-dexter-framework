# Obtém a lista completa de entradas do arquivo RAR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.getentries.php

---

# RarArchive::getEntries

# rar\_list

(PECL rar >= 2.0.0)

RarArchive::getEntries -- rar\_list — Obtém a lista completa de entradas do arquivo RAR

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::getEntries**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Estilo procedural:

function **rar\_list**([RarArchive](class.rararchive.md) `$rarfile`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém a lista de entradas (arquivos e diretórios) do arquivo RAR.

> **Nota**:
>
> Se o arquivo tiver
> entradas com o mesmo nome, este método, juntamente com a iteração [RarArchive](class.rararchive.md)
> `foreach` e o acesso tipo array com índices numéricos,
> são os únicos a acessar todas as entradas (ou seja,
> [RarArchive::getEntry()](rararchive.getentry.md) e o [empacotador `rar://`](wrappers.rar.md) são insuficientes).

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

### Valor Retornado

**rar\_list()** retorna um array de objetos [RarEntry](class.rarentry.md)
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL rar 3.0.0 | O suporte para arquivos RAR com nomes de entrada repetidos não apresenta mais defeitos. |

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$rar_arch = RarArchive::open('solid.rar');
if ($rar_arch === FALSE)
    die("Não foi possível abrir o arquivo RAR.");

$rar_entries = $rar_arch->getEntries();
if ($rar_entries === FALSE)
    die("Não foi possível recuperar entradas.");

echo "Encontradas " . count($rar_entries) . " entradas.\n";

foreach ($rar_entries as $e) {
    echo $e;
    echo "\n";
}
$rar_arch->close();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Encontradas 2 entradas.
RarEntry for file "tese.txt" (23b93a7a)
RarEntry for file "unrardll.txt" (2ed64b6e)
```

**Exemplo #2 Estilo procedural**

```
<?php
$rar_arch = rar_open('solid.rar');
if ($rar_arch === FALSE)
    die("Não foi possível abrir o arquivo RAR.");

$rar_entries = rar_list($rar_arch);
if ($rar_entries === FALSE)
    die("Não foi possível recuperar entradas.");

echo "Encontradas " . count($rar_entries) . " entradas.\n";

foreach ($rar_entries as $e) {
    echo $e;
    echo "\n";
}
rar_close($rar_arch);
?>
```

### Veja também

- [RarArchive::getEntry()](rararchive.getentry.md) - Obtém o objeto de entrada do arquivo RAR
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
