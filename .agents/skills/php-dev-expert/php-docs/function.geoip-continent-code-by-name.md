# Obtém o código de duas letras do continente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-continent-code-by-name.php

---

# geoip\_continent\_code\_by\_name

(PECL geoip >= 1.0.3)

geoip\_continent\_code\_by\_name — Obtém o código de duas letras do continente

### Descrição

function **geoip\_continent\_code\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_continent\_code\_by\_name()** retornará
o código de continente de duas letras correspondente a um nome de host ou endereço IP.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP cuja localização deve ser consultada.

### Valor Retornado

Retorna o código de continente de duas letras em caso de sucesso, ou **`false`** se o
endereço não puder ser encontrado no banco de dados.

**Continent codes**

| Código | Nome do continente |
| --- | --- |
| `AF` | África |
| `AN` | Antártida |
| `AS` | Ásia |
| `EU` | Europa |
| `NA` | América do Norte |
| `OC` | Oceania |
| `SA` | América do Sul |

### Examples

**Exemplo #1 Um exemplo de **geoip\_continent\_code\_by\_name()****

Isso exibirá onde o host example.com está localizado.

```
<?php
$continent = geoip_continent_code_by_name('www.example.com');
if ($continent) {
    echo 'Este host está localizado em: ' . $continent;
}
?>
```

O exemplo acima produzirá:

```
Este host está localizado em: NA
```

### Veja também

- [geoip\_country\_code\_by\_name()](function.geoip-country-code-by-name.md) - Obtém o código de país de duas letras

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
