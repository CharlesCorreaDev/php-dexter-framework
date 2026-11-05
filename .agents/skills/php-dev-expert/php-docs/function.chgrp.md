# Altera o grupo do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chgrp.php

---

# chgrp

(PHP 4, PHP 5, PHP 7, PHP 8)

chgrp — Altera o grupo do arquivo

### Descrição

function **chgrp**([string](language.types.string.md) `$filename`, [string](language.types.string.md)|[int](language.types.integer.md) `$group`): [bool](language.types.boolean.md)

Tenta alterar o grupo do arquivo `filename` para
`group`.

Somente o superusuário pode alterar arbitrariamente o grupo de um arquivo; outros usuários
podem alterar o grupo de um arquivo para qualquer grupo do qual sejam membros.

### Parâmetros

`filename`
:   Caminho para o arquivo.

`group`
:   O nome ou número do grupo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Alterando o grupo de um arquivo**

```
<?php
$arquivo = 'arquivo_compartilhado.txt';
$formato = "ID do grupo de %s em %s: %d\n";
printf($formato, $arquivo, date('r'), filegroup($arquivo));
chgrp($arquivo, 8);
clearstatcache(); // não armazena em cache os resultados de filegroup()
printf($formato, $arquivo, date('r'), filegroup($arquivo));
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
> No Windows, esta função falha silenciosamente quando aplicada em um arquivo normal.

### Veja também

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
