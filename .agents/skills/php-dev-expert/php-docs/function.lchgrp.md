# Modifica o grupo de proprietário da ligação simbólica

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.lchgrp.php

---

# lchgrp

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

lchgrp — Modifica o grupo de proprietário da ligação simbólica

### Descrição

function **lchgrp**([string](language.types.string.md) `$filename`, [string](language.types.string.md)|[int](language.types.integer.md) `$group`): [bool](language.types.boolean.md)

Tenta modificar o grupo da ligação simbólica `filename`
para o valor do parâmetro `group`.

Somente o superusuário pode alterar arbitrariamente o grupo de uma ligação simbólica; outros
usuários podem alterar o grupo de uma ligação simbólica para qualquer grupo do qual esse usuário
seja um membro.

### Parâmetros

`filename`
:   Caminho para a ligação simbólica.

`group`
:   O grupo especificado por nome ou número.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando um grupo de um ligação simbólica**

```
<?php
$target = 'output.php';
$link = 'output.html';
symlink($target, $link);

lchgrp($link, 8);
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

- [chgrp()](function.chgrp.md) - Altera o grupo do arquivo
- [lchown()](function.lchown.md) - Modifica o proprietário da ligação simbólica
- [chown()](function.chown.md) - Modifica o proprietário do arquivo
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
