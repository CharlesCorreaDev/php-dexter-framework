# Testa se um arquivo está quebrado (incompleto)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.isbroken.php

---

# RarArchive::isBroken

# rar\_broken\_is

(PECL rar >= 3.0.0)

RarArchive::isBroken -- rar\_broken\_is — Testa se um arquivo está quebrado (incompleto)

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::isBroken**(): [bool](language.types.boolean.md)

Estilo procedural:

function **rar\_broken\_is**([RarArchive](class.rararchive.md) `$rarfile`): [bool](language.types.boolean.md)

Esta função determina se um arquivo está incompleto, ou seja, se um volume está faltando ou se um volume está truncado.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

### Valor Retornado

Retorna **`true`** se o arquivo estiver quebrado, **`false`** caso contrário. Esta função também pode
retornar **`false`** se o arquivo passado já tiver sido fechado. A única maneira
de diferenciar os dois casos é habilitar
exceções com [RarException::setUsingExceptions()](rarexception.setusingexceptions.md); entretanto,
isso deve ser desnecessário, pois um programa não deve operar em arquivos fechados.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
function retnull() { return null; }
$file = dirname(__FILE__) . "/multi_broken.part1.rar";
/* O terceiro argumento é usado para omitir o aviso */
$arch = RarArchive::open($file, null, 'retnull');
var_dump($arch->isBroken());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
```

**Exemplo #2 Estilo procedural**

```
<?php
function retnull() { return null; }
$file = dirname(__FILE__) . "/multi_broken.part1.rar";
/* O terceiro argumento é usado para omitir o aviso */
$arch = rar_open($file, null, 'retnull');
var_dump(rar_broken_is($arch));
?>
```

### Veja também

- [RarArchive::setAllowBroken()](rararchive.setallowbroken.md) - Se é permitido abrir arquivos quebrados

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
