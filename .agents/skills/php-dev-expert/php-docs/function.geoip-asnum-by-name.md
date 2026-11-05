# Obtém os Números do Sistema Autônomo (ASN)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-asnum-by-name.php

---

# geoip\_asnum\_by\_name

(PECL geoip >= 1.1.0)

geoip\_asnum\_by\_name — Obtém os Números do Sistema Autônomo (ASN)

### Descrição

function **geoip\_asnum\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_asnum\_by\_name()** retornará os Números de
Sistema Autônomo (ASN) associados a um endereço IP.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP.

### Valor Retornado

Retorna o ASN em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_asnum\_by\_name()****

Isso gerará o ASN do host www.example.com.

```
<?php
$asn = geoip_asnum_by_name('www.example.com');

if ($asn) {
    echo 'O ASN é: ' . $asn;
}
?>
```

O exemplo acima produzirá:

```
O ASN é: AS15133 EdgeCast Networks, Inc
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
