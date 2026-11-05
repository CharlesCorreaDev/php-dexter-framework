# Retorna as informações de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gnupg-geterrorinfo.php

---

# gnupg\_geterrorinfo

(PECL gnupg >= 1.5)

gnupg\_geterrorinfo — Retorna as informações de erro

### Descrição

function **gnupg\_geterrorinfo**([resource](language.types.resource.md) `$identifier`): [array](language.types.array.md)

### Parâmetros

`identifier`
:   O identificador gnupg, obtido de uma chamada a
    [gnupg\_init()](function.gnupg-init.md) ou **gnupg**.

### Valor Retornado

Retorna um array com informações de erro.

### Examples

**Exemplo #1 Exemplo procedural de **gnupg\_geterrorinfo()****

```
<?php
$res = gnupg_init();
// isso é chamado sem nenhum erro
print_r(gnupg_geterrorinfo($res));
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["generic_message"]=>
  bool(false)
  ["gpgme_code"]=>
  int(0)
  ["gpgme_source"]=>
  string(18) "Unspecified source"
  ["gpgme_message"]=>
  string(7) "Success"
}
```

**Exemplo #2 Exemplo orientado a objeto de **gnupg\_geterrorinfo()****

```
<?php
$gpg = new gnupg();
// chamada com erro
$gpg->decrypt('abc');
// informações de erro devem ser exibidas
print_r($gpg->geterrorinfo());
?>
```

O exemplo acima produzirá:

```
array(4) {
  ["generic_message"]=>
  string(14) "decrypt failed"
  ["gpgme_code"]=>
  int(117440570)
  ["gpgme_source"]=>
  string(5) "GPGME"
  ["gpgme_message"]=>
  string(7) "No data"
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
