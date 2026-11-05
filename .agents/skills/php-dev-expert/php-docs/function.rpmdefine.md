# Define ou altera um valor de macro RPM

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rpmdefine.php

---

# rpmdefine

(PECL rpminfo >= 1.2.0)

rpmdefine — Define ou altera um valor de macro RPM

### Descrição

function **rpmdefine**([string](language.types.string.md) `$text`): [bool](language.types.boolean.md)

Define ou altera um valor de macro RPM.

Isso pode ser usado para selecionar o caminho do banco de dados e o backend a serem usados
em vez do padrão do sistema.

### Parâmetros

`text`
:   Nome da macro, opções, corpo.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Um exemplo de **rpmdefine()****

```
<?php
// usa um banco de dados antigo (bdb) de um chroot EL-8
rpmdefine("_dbpath /var/lib/mock/almalinux-8-x86_64/root/var/lib/rpm");
rpmdefine("_db_backend bdb_ro");
print_r(rpmdbinfo("almalinux-release")[0]["Summary"]);

// usa um novo banco de dados (sqlite) de um chroot Fedora-41
rpmdefine("_dbpath /var/lib/mock/fedora-41-x86_64/root/usr/lib/sysimage/rpm");
rpmdefine("_db_backend sqlite");
print_r(rpmdbinfo("fedora-release")[0]["Summary"]);
?>
```

O exemplo acima produzirá:

```
AlmaLinux release file
Fedora release files
```

### Veja também

- [rpmexpand()](function.rpmexpand.md) - Recupera o valor expandido de uma macro RPM
- [rpmdbinfo()](function.rpmdbinfo.md) - Obtém informações do RPM instalado

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
