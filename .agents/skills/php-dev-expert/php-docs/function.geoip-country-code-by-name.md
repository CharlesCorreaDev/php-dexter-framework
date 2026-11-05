# Obtém o código de país de duas letras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-country-code-by-name.php

---

# geoip\_country\_code\_by\_name

(PECL geoip >= 0.2.0)

geoip\_country\_code\_by\_name — Obtém o código de país de duas letras

### Descrição

function **geoip\_country\_code\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_country\_code\_by\_name()** retornará
o código de país de duas letras correspondente a um nome de host ou endereço IP.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP cuja localização deve ser consultada.

### Valor Retornado

Retorna o código ISO de duas letras do país em caso de sucesso, ou **`false`**
se o endereço não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_country\_code\_by\_name()****

Isso exibirá onde o host example.com está localizado.

```
<?php
$country = geoip_country_code_by_name('www.example.com');
if ($country) {
    echo 'Este host está localizado em: ' . $country;
}
?>
```

O exemplo acima produzirá:

```
Este host está localizado em: US
```

### Notas

**Cuidado**

Consulte
[» https://www.maxmind.com/en/iso3166](https://www.maxmind.com/en/iso3166) para
uma lista completa de possíveis valores de retorno, incluindo códigos especiais.

### Veja também

- [geoip\_country\_code3\_by\_name()](function.geoip-country-code3-by-name.md) - Obtenha o código de país de três letras
- [geoip\_country\_name\_by\_name()](function.geoip-country-name-by-name.md) - Obtém o nome completo do país

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
