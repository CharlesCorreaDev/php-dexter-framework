# Obtém o tipo de conexão com a Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-id-by-name.php

---

# geoip\_id\_by\_name

(PECL geoip >= 0.2.0)

geoip\_id\_by\_name — Obtém o tipo de conexão com a Internet

### Descrição

function **geoip\_id\_by\_name**([string](language.types.string.md) `$hostname`): [int](language.types.integer.md)

A função **geoip\_id\_by\_name()** retornará o tipo de conexão
de Internet correspondente a um nome de host ou endereço IP.

O valor de retorno é numérico e pode ser comparado às seguintes constantes:

- GEOIP\_UNKNOWN\_SPEED
- GEOIP\_DIALUP\_SPEED
- GEOIP\_CABLEDSL\_SPEED
- GEOIP\_CORPORATE\_SPEED

### Parâmetros

`hostname`
:   O nome do host ou endereço IP cujo tipo de conexão deve ser consultado.

### Valor Retornado

Retorna o tipo de conexão.

### Examples

**Exemplo #1 Um exemplo de **geoip\_id\_by\_name()****

Isso exibirá o tipo de conexão do host example.com.

```
<?php
$netspeed = geoip_id_by_name('www.example.com');

echo 'O tipo de conexão é ';

switch ($netspeed) {
    case GEOIP_DIALUP_SPEED:
        echo 'discada';
        break;
    case GEOIP_CABLEDSL_SPEED:
        echo 'a cabo ou DSL';
        break;
    case GEOIP_CORPORATE_SPEED:
        echo 'corporativa';
        break;
    case GEOIP_UNKNOWN_SPEED:
    default:
        echo 'desconhecida';
}
?>
```

O exemplo acima produzirá:

```
O tipo de conexão é corporativa
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
