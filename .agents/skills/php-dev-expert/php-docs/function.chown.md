# Modifica o proprietário do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chown.php

---

# chown

(PHP 4, PHP 5, PHP 7, PHP 8)

chown — Modifica o proprietário do arquivo

### Descrição

function **chown**([string](language.types.string.md) `$filename`, [string](language.types.string.md)|[int](language.types.integer.md) `$user`): [bool](language.types.boolean.md)

Tenta modificar o proprietário do `filename` para
`user`. Somente o superusuário pode modificar o
proprietário de um arquivo.

### Parâmetros

`filename`
:   Caminho para o arquivo.

`user`
:   O nome do usuário ou número.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Uso simples de **chown()****

```
<?php

// Nome de usuário e do arquivo que serão usados
$file_name= "foo.php";
$path = "/home/sites/php.net/public_html/sandbox/" . $file_name ;
$user_name = "root";

// Define o usuário proprietário
chown($path, $user_name);

// Verifica o resultado
$stat = stat($path);
print_r(posix_getpwuid($stat['uid']));

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [name] => root
    [passwd] => x
    [uid] => 0
    [gid] => 0
    [gecos] => root
    [dir] => /root
    [shell] => /bin/bash
)
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

> **Nota**:
>
> No Windows, esta função falha silenciosamente quando aplicada a um arquivo normal.

### Veja também

- [chmod()](function.chmod.md) - Modifica as permissões do arquivo
- [chgrp()](function.chgrp.md) - Altera o grupo do arquivo

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
