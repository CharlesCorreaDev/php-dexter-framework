# Converte dados brutos em endereço IP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.radius-cvt-addr.php

---

# radius\_cvt\_addr

(PECL radius >= 1.1.0)

radius\_cvt\_addr — Converte dados brutos em endereço IP

### Descrição

function **radius\_cvt\_addr**([string](language.types.string.md) `$data`): [string](language.types.string.md)

Converte dados brutos em endereço IP.

### Parâmetros

`data`
:   Dados de entrada

### Valor Retornado

Retorna o endereço IP.

### Examples

**Exemplo #1 Exemplo de **radius\_cvt\_addr()****

```
<?php
while ($resa = radius_get_attr($res)) {

    if (!is_array($resa)) {
        printf ("Erro ao obter atributo: %s\n",  radius_strerror($res));
        exit;
    }

    $attr = $resa['attr'];
    $data = $resa['data'];

    switch ($attr) {

    case RADIUS_FRAMED_IP_ADDRESS:
        $ip = radius_cvt_addr($data);
        echo "IP: $ip<br>\n";
        break;

    case RADIUS_FRAMED_IP_NETMASK:
        $mask = radius_cvt_addr($data);
        echo "MASK: $mask<br>\n";
        break;
    }
}
?>
```

### Veja também

- [radius\_cvt\_int()](function.radius-cvt-int.md) - Converte dados brutos em número inteiro
- [radius\_cvt\_string()](function.radius-cvt-string.md) - Converte dados brutos em string

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
