# Obtém o nome da organização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-org-by-name.php

---

# geoip\_org\_by\_name

(PECL geoip >= 0.2.0)

geoip\_org\_by\_name — Obtém o nome da organização

### Descrição

function **geoip\_org\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_org\_by\_name()** retornará o nome da
organização à qual um IP é atribuído.

Esta função está disponível atualmente apenas para usuários que adquiriram uma edição comercial
GeoIP Organization, ISP ou AS. Um aviso será emitido se o banco de dados
apropriado não puder ser localizado.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP.

### Valor Retornado

Retorna o nome da organização em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_org\_by\_name()****

Isso exibirá para quem o IP do host example.com está alocado.

```
<?php
$org = geoip_org_by_name('www.example.com');
if ($org) {
    echo 'Este host está alocado para: ' . $org;
}
?>
```

O exemplo acima produzirá:

```
Este host está alocado para: ICANN c/o Internet Assigned Numbers Authority
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
