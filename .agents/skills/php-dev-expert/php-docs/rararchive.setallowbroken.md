# Se é permitido abrir arquivos quebrados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.setallowbroken.php

---

# RarArchive::setAllowBroken

(PECL rar >= 3.0.0)

RarArchive::setAllowBroken — Se é permitido abrir arquivos quebrados

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::setAllowBroken**([bool](language.types.boolean.md) `$allow_broken`): [bool](language.types.boolean.md)

Estilo procedural:

function **rar\_allow\_broken\_set**([RarArchive](class.rararchive.md) `$rarfile`, [bool](language.types.boolean.md) `$allow_broken`): [bool](language.types.boolean.md)

Este método define se os arquivos quebrados podem ser lidos ou se todas as operações que
tentam extrair as entradas do arquivo falharão. Arquivos quebrados são arquivos para
os quais nenhum erro é detectado quando o arquivo é aberto, mas ocorre um erro ao ler
as entradas.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

`allow_broken`
:   Se deve permitir a leitura de arquivos quebrados (**`true`**) ou não (**`false`**).

### Valor Retornado

Retorna **`true`** ou **`false`** em caso de falha. Só falhará se o arquivo já tiver
sido fechado.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
function retnull() { return null; }
$file = dirname(__FILE__) . "/multi_broken.part1.rar";
/* O terceiro argumento omite a mensagem "volume not found" */
$a = RarArchive::open($file, null, 'retnull');
$a->setAllowBroken(true);
foreach ($a->getEntries() as $e) {
    echo "$e\n";
}
var_dump(count($a));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
RarEntry for file "file1.txt" (52b28202)
int(1)
```

**Exemplo #2 Estilo procedural**

```
<?php
function retnull() { return null; }
$file = dirname(__FILE__) . "/multi_broken.part1.rar";
/* O terceiro argumento omite a mensagem "volume not found" */
$a = rar_open($file, null, 'retnull');
rar_allow_broken_set($a, true);
foreach (rar_list($a) as $e) {
    echo "$e\n";
}
var_dump(count($a));
?>
```

### Veja também

- [RarArchive::isBroken()](rararchive.isbroken.md) - Testa se um arquivo está quebrado (incompleto)

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
