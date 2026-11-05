# Retorna o tamanho total de um sistema de arquivos ou partição de disco

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.disk-total-space.php

---

# disk\_total\_space

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

disk\_total\_space — Retorna o tamanho total de um sistema de arquivos ou partição de disco

### Descrição

function **disk\_total\_space**([string](language.types.string.md) `$directory`): [float](language.types.float.md)|[false](language.types.singleton.md)

Dado uma string contendo um diretório, esta função retornará o número
total de bytes do sistema de arquivos ou da partição de disco.

### Parâmetros

`directory`
:   Um diretório do sistema de arquivos ou uma partição de disco.

### Valor Retornado

Retorna o número total de bytes como um float
ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **disk\_total\_space()****

```
<?php
// $ds contém o numero total de bytes disponíveis em "/"
$ds = disk_total_space("/");

// No Windows:
disk_total_space("C:");
disk_total_space("D:");
?>
```

### Notas

> **Nota**:
>
> Esta função não funcionará em
> [arquivos remotos](features.remote-files.md), pois o arquivo a
> ser examinado deve ser acessível através do sistema de arquivos do servidor.

### Veja também

- [disk\_free\_space()](function.disk-free-space.md) - Retorna o espaço disponível no sistema de arquivos ou partição de disco

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
