# Obtém o nome do sistema

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.posix-uname.php

---

# posix\_uname

(PHP 4, PHP 5, PHP 7, PHP 8)

posix\_uname — Obtém o nome do sistema

### Descrição

function **posix\_uname**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informações sobre o sistema.

POSIX exige que não sejam feitas suposições sobre o
formato dos valores, por exemplom, a suposição de que uma versão possa conter
três dígitos ou qualquer outra coisa retornada por esta função.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um hash de strings com informações sobre
o sistema. Os índices do hash são

- sysname - nome do sistema operacional (por exemplo, Linux)
- nodename - nome do sistema (por exemplo, valiant)
- release - versão do sistema operacional (por exemplo, 2.2.10)
- version - versão do sistema operacional (por exemplo, #4 Tue Jul 20
  17:01:36 MEST 1999)
- machine - arquitetura do sistema (por exemplo, i586)
- domainname - Nome de domínio DNS (por exemplo, example.com)

domainname é uma extensão GNU e não faz parte do POSIX.1, portanto,
este campo está disponível apenas em sistemas GNU ou ao usar a
libc GNU.

A função retorna **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de uso de **posix\_uname()****

```
<?php
$uname=posix_uname();
print_r($uname);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [sysname] => Linux
    [nodename] => funbox
    [release] => 2.6.20-15-server
    [version] => #2 SMP Sun Apr 15 07:41:34 UTC 2007
    [machine] => i686
)
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
