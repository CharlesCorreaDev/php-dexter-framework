# Modifica o proprietário da ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lchown.php

---

# lchown

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

lchown — Modifica o proprietário da ligação simbólica

### Descrição

function **lchown**([string](language.types.string.md) `$filename`, [string](language.types.string.md)|[int](language.types.integer.md) `$user`): [bool](language.types.boolean.md)

Tenta modificar o proprietário da ligação simbólica `filename`
para o usuário `user`.

Somente o superusuário pode mudar o proprietário de uma ligação simbólica.

### Parâmetros

`filename`
:   Caminho para o arquivo.

`user`
:   O nome do usuário ou número.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando o proprietário de uma ligação simbólica**

```
<?php
$target = 'output.php';
$link = 'output.html';
symlink($target, $link);

lchown($link, 8);
?>
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

> **Nota**:
>
> Esta função não foi
> implementada em plataformas Windows.

### Veja também

- [chown()](function.chown.md) - Modifica o proprietário do arquivo
- [lchgrp()](function.lchgrp.md) - Modifica o grupo de proprietário da ligação simbólica
- [chgrp()](function.chgrp.md) - Altera o grupo do arquivo
- [chmod()](function.chmod.md) - Modifica as permissões do arquivo

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
