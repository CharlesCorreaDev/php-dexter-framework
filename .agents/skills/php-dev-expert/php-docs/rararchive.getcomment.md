# Obtém o texto de comentário do arquivo RAR

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rararchive.getcomment.php

---

# RarArchive::getComment

# rar\_comment\_get

(PECL rar >= 2.0.0)

RarArchive::getComment -- rar\_comment\_get — Obtém o texto de comentário do arquivo RAR

### Descrição

Estilo orientado a objetos (method):

public function **RarArchive::getComment**(): [string](language.types.string.md)

Estilo procedural:

function **rar\_comment\_get**([RarArchive](class.rararchive.md) `$rarfile`): [string](language.types.string.md)

Obtém o comentário (global) armazenado no arquivo RAR. Pode ter até 64 KiB de comprimento.

> **Nota**:
>
> Esta extensão não oferece suporte a comentários no nível de entrada.

### Parâmetros

`rarfile`
:   Um objeto [RarArchive](class.rararchive.md), aberto com [rar\_open()](rararchive.open.md).

### Valor Retornado

Retorna o comentário ou **`null`** se não houver nenhum.

> **Nota**:
>
> Atualmente, o RAR não oferece suporte para comentários Unicode. A codificação do
> resultado desta função não está especificada, mas provavelmente será
> Windows-1252.

### Examples

**Exemplo #1 Estilo orientado a objetos**

```
<?php
$rar_arch = RarArchive::open('commented.rar');
echo $rar_arch->getComment();
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Este é o comentário do arquivo commented.rar.
```

**Exemplo #2 Estilo procedural**

```
<?php
$rar_arch = rar_open('commented.rar');
echo rar_comment_get($rar_arch);
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
