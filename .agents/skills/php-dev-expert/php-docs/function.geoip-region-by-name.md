# Obtém o código do país e a região

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-region-by-name.php

---

# geoip\_region\_by\_name

(PECL geoip >= 0.2.0)

geoip\_region\_by\_name — Obtém o código do país e a região

### Descrição

function **geoip\_region\_by\_name**([string](language.types.string.md) `$hostname`): [array](language.types.array.md)

A função **geoip\_region\_by\_name()** retornará o país
e a região correspondentes a um nome de host ou endereço IP.

Esta função está disponível atualmente apenas para usuários que adquiriram uma versão GeoIP
Region Edition. Um aviso será emitido se o banco de dados apropriado não puder ser
localizado.

Os nomes das diferentes chaves do array associativo de retorno são os seguintes:

- "country\_code" -- Código do país com duas letras (consulte
  [geoip\_country\_code\_by\_name()](function.geoip-country-code-by-name.md))
- "region" -- O código da região (ex: QC para Quebec)

### Parâmetros

`hostname`
:   O nome do host ou endereço IP cuja região deve ser consultada.

### Valor Retornado

Retorna o array associativo em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_region\_by\_name()****

Isso exibirá o array contendo o código do país e a região
do host example.com.

```
<?php
$region = geoip_region_by_name('www.example.com');
if ($region) {
    print_r($region);
}
?>
```

O exemplo acima produzirá:

```
Array
(
    [country_code] => US
    [region] => CA
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
