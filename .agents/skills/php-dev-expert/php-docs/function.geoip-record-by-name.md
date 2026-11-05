# Retorna as informações detalhadas da cidade encontradas no banco de dados GeoIP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-record-by-name.php

---

# geoip\_record\_by\_name

(PECL geoip >= 0.2.0)

geoip\_record\_by\_name — Retorna as informações detalhadas da cidade encontradas no banco de dados GeoIP

### Descrição

function **geoip\_record\_by\_name**([string](language.types.string.md) `$hostname`): [array](language.types.array.md)

A função **geoip\_record\_by\_name()** retornará as
informações de registro correspondentes a um nome de host ou endereço IP.

Esta função está disponível tanto para o GeoLite City Edition quanto para o GeoIP
City Edition. Um aviso será emitido se o banco de dados apropriado não puder
ser localizado.

Os nomes das diferentes chaves do array associativo de retorno são os seguintes:

- "continent\_code" -- Código do continente de duas letras (a partir da versão 1.0.4 com
  libgeoip 1.4.3 ou mais recente)
- "country\_code" -- Código do país com duas letras (consulte
  [geoip\_country\_code\_by\_name()](function.geoip-country-code-by-name.md))
- "country\_code3" -- Código do país de três letras (consulte
  [geoip\_country\_code3\_by\_name()](function.geoip-country-code3-by-name.md))
- "country\_name" -- O nome do país (consulte
  [geoip\_country\_name\_by\_name()](function.geoip-country-name-by-name.md))
- "region" -- O código de região (ex: QC para Quebec)
- "city" -- A cidade.
- "postal\_code" -- O Código Postal, FSA ou CEP.
- "latitude" -- A latitude como um [float](language.types.float.md) com sinal.
- "longitude" -- A longitude como um [float](language.types.float.md) com sinal.
- "dma\_code" -- Código de área de mercado designado (somente EUA e Canadá)
- "area\_code" -- O código de área PSTN (ex: 212)

### Parâmetros

`hostname`
:   O nome do host ou endereço IP cujo registro deve ser consultado.

### Valor Retornado

Retorna o array associativo em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL geoip 1.0.4 | Adicionando o continent\_code apenas com a biblioteca GeoIP 1.4.3 ou mais recente |
| PECL geoip 1.0.3 | Adicionando country\_code3 e country\_name |

### Examples

**Exemplo #1 Um exemplo de **geoip\_record\_by\_name()****

Isso exibirá o array contendo o registro do host example.com.

```
<?php
$record = geoip_record_by_name('www.example.com');
if ($record) {
    print_r($record);
}
?>
```

O exemplo acima produzirá:

```
Array
(
    [continent_code] => NA
    [country_code] => US
    [country_code3] => USA
    [country_name] => United States
    [region] => CA
    [city] => Marina Del Rey
    [postal_code] =>
    [latitude] => 33.9776992798
    [longitude] => -118.435096741
    [dma_code] => 803
    [area_code] => 310
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
