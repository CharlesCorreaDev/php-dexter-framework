# Retorna a hora do nascer do sol para um dia e uma localicação informados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.date-sunrise.php

---

# date\_sunrise

(PHP 5, PHP 7, PHP 8)

date\_sunrise — Retorna a hora do nascer do sol para um dia e uma localicação informados

**Aviso**

Esta função foi *DESCONTINUADA* desde o PHP 8.1.0.
Confiar nesta função é altamente desencorajado. Use
[date\_sun\_info()](function.date-sun-info.md) no lugar.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **date\_sunrise**(  
    [int](language.types.integer.md) `$timestamp`,  
    [int](language.types.integer.md) `$returnFormat` = [SUNFUNCS\_RET\_STRING](datetime.constants.md#constant.sunfuncs-ret-string),  
    [?](language.types.null.md)[float](language.types.float.md) `$latitude` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[float](language.types.float.md) `$longitude` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[float](language.types.float.md) `$zenith` = [null](reserved.constants.md#constant.null),  
    [?](language.types.null.md)[float](language.types.float.md) `$utcOffset` = [null](reserved.constants.md#constant.null)  
): [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[false](language.types.singleton.md)

A função **date\_sunrise()** retorna a hora do nascer do sol para um
dia (especificado como um `timestamp`) e uma localização informados.

### Parâmetros

`timestamp`
:   O `timestamp` do nascer do sol do dia
    desejado.

`returnFormat`
:   **Constantes de `returnFormat`**

    | Constante | Descrição | Exemplo |
    | --- | --- | --- |
    | SUNFUNCS\_RET\_STRING | Retorna o resultado como uma [string](language.types.string.md) | 16:46 |
    | SUNFUNCS\_RET\_DOUBLE | Retorna o resultado como um [float](language.types.float.md) | 16.78243132 |
    | SUNFUNCS\_RET\_TIMESTAMP | Retorna o resultado como um [int](language.types.integer.md) (timestamp) | 1095034606 |

`latitude`
:   Padronizado para o norte, passe um valor negativo para o sul.
    Veja também: [date.default\_latitude](datetime.configuration.md#ini.date.default-latitude)

`longitude`
:   Padronizado para o leste, passe um valor negativado para o oeste.
    Veja também: [date.default\_longitude](datetime.configuration.md#ini.date.default-longitude)

`zenith`
:   `zenith` é o ângulo entre o centro do sol
    e uma linha perpendicular à superfície da Terra. É padronizado para
    [date.sunrise\_zenith](datetime.configuration.md#ini.date.sunrise-zenith)

    **Ângulos comuns em relação ao `zenith`**

    | Ângulo | Descrição |
    | --- | --- |
    | 90°50' | Nascer do sol: o ponto onde o sol se torna visível. |
    | 96° | Amanhecer civil: convencionado para significar o início do amanhecer. |
    | 102° | Amanhecer náutico: o ponto no qual o horizonte começa a ficar visível no mar. |
    | 108° | Amanhecer astronômico: o ponto no qual o sol começa a se tornar fonte de iluminação. |

`utcOffset`
:   Especificado em horas.
    O parâmetro `utcOffset` é ignorado se
    `returnFormat` for
    **`SUNFUNCS_RET_TIMESTAMP`**.

### Valor Retornado

Retorna o horário do nascer do sol no `returnFormat` especificado
em caso de sucesso ou **`false`** em caso de falha. Um potencial motivo para falha é quando o
sol não nasce, o que acontece dentro dos círculos polares durante parte
do ano.

### Erros/Exceções

Toda chamada a uma função de data/hora gerará um **`E_WARNING`**
se o fuso horário não for válido. Veja também [date\_default\_timezone\_set()](function.date-default-timezone-set.md)

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Esta função foi descontinuada em favor de [date\_sun\_info()](function.date-sun-info.md). |
| 8.0.0 | `latitude`, `longitude`, `zenith` e `utcOffset` agora podem ser nulos. |

### Examples

**Exemplo #1 Exemplo da função **date\_sunrise()****

```
<?php

/* Calcula o nascer do sol em Lisboa, Portugal
Latitude: 38.4 norte
Longitude: 9 oeste
Zênite ~= 90
deslocamento UTC: +01:00
*/

echo date("D M d Y"). ', horário do nascer do sol : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);
```

O exemplo acima produzirá
algo semelhante a:

```
Deprecated: Constant SUNFUNCS_RET_STRING is deprecated in script on line 10
Deprecated: Function date_sunrise() is deprecated since 8.1, use date_sun_info() instead in script on line 10
Mon Dec 20 2004, horário do nascer do sol : 08:54
```

**Exemplo #2 Sem nascer do sol**

```
<?php
$solstice = strtotime('2017-12-21');
var_dump(date_sunrise($solstice, SUNFUNCS_RET_STRING, 69.245833, -53.537222));
```

O exemplo acima produzirá:

```
Deprecated: Constant SUNFUNCS_RET_STRING is deprecated in script on line 3
Deprecated: Function date_sunrise() is deprecated since 8.1, use date_sun_info() instead in script on line 3
bool(false)
```

### Veja também

- [date\_sun\_info()](function.date-sun-info.md) - Retorna um array com informações sobre pôr/nascer do sol e o início/fim do dia

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
