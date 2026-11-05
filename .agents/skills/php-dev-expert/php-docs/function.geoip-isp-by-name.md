# Obtém o nome do Provedor de Serviços de Internet (ISP)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-isp-by-name.php

---

# geoip\_isp\_by\_name

(PECL geoip >= 1.0.2)

geoip\_isp\_by\_name — Obtém o nome do Provedor de Serviços de Internet (ISP)

### Descrição

function **geoip\_isp\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_isp\_by\_name()** retornará o nome do
Provedor de Serviços de Internet (ISP) ao qual um IP é atribuído.

Esta função está disponível atualmente apenas para usuários que adquiriram uma edição comercial
GeoIP ISP. Um aviso será emitido se o banco de dados apropriado não puder
ser localizado.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP.

### Valor Retornado

Retorna o nome do ISP em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_isp\_by\_name()****

Isso exibirá o nome do ISP do host example.com.

```
<?php
$isp = geoip_isp_by_name('www.example.com');
if ($isp) {
    echo 'Este host é do ISP: ' . $isp;
}
?>
```

O exemplo acima produzirá:

```
Este host é do ISP: ICANN c/o Internet Assigned Numbers Authority
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
