# Retorna as informações do mecanismo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-getengineinfo.php

---

# gnupg\_getengineinfo

(PECL gnupg >= 1.5)

gnupg\_getengineinfo — Retorna as informações do mecanismo

### Descrição

function **gnupg\_getengineinfo**([resource](language.types.resource.md) `$identifier`): [array](language.types.array.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna um array com informações do mecanismo consistindo de `protocol` (protocolo),
`file_name` (nome do arquivo) e `home_dir` (diretório inicial).

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_getengineinfo()****

```
<?php
$res = gnupg_init();
print_r(gnupg_getengineinfo($res));
?>
```

O exemplo acima produzirá:

```
array(3) {
  ["protocol"]=>
  int(0)
  ["file_name"]=>
  string(12) "/usr/bin/gpg"
  ["home_dir"]=>
  string(0) ""
}
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_getengineinfo()****

```
<?php
$gpg = new gnupg(["file_name" => "/usr/bin/gpg2", "home_dir" => "/var/www/.gnupg"]);
print_r($gpg->getengineinfo());
?>
```

O exemplo acima produzirá:

```
array(3) {
  ["protocol"]=>
  int(0)
  ["file_name"]=>
  string(13) "/usr/bin/gpg2"
  ["home_dir"]=>
  string(15) "/var/www/.gnupg"
}
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
