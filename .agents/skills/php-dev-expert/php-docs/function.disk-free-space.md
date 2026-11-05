# Retorna o espaço disponível no sistema de arquivos ou partição de disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.disk-free-space.php

---

# disk\_free\_space

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

disk\_free\_space — Retorna o espaço disponível no sistema de arquivos ou partição de disco

### Descrição

function **disk\_free\_space**([string](language.types.string.md) `$directory`): [float](language.types.float.md)|[false](language.types.singleton.md)

Dado uma string contendo um diretório, esta função retornará o número
de bytes disponíveis no sistema de arquivos ou partição de
disco.

### Parâmetros

`directory`
:   Um diretório do sistema de arquivos ou partição de disco.

    > **Nota**:
    >
    > Dado um nome de arquivo ao invés de um diretório, o comportamento da
    > função não é especificado e pode ser diferente entre sistemas operacionais e
    > versões do PHP.

### Valor Retornado

Retorna o número de bytes disponíveis como um float
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **disk\_free\_space()****

```
<?php
// $df contém o número de bytes disponíveis em "/"
$df = disk_free_space("/");

// No Windows:
$df_c = disk_free_space("C:");
$df_d = disk_free_space("D:");
?>
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

### Veja também

- [disk\_total\_space()](function.disk-total-space.md) - Retorna o tamanho total de um sistema de arquivos ou partição de disco

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
