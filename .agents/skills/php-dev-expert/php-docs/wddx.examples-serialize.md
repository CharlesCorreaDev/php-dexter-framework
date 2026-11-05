# Exemplos de wddx

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wddx.examples-serialize.php

---

## Exemplos de wddx

Todas as funções que serializam variáveis usam o primeiro
elemento de um array para determinar se o array deve ser
serializado em um array ou estrutura. Se o primeiro elemento
tem uma chave string, então ele é serializado em uma estrutura, caso contrário,
em um array.

**Exemplo #1 Serializando um único valor com WDDX**

```
<?php
echo wddx_serialize_value("PHP to WDDX packet example", "PHP packet");
?>
```

Este exemplo irá produzir:

```
<wddxPacket version='1.0'><header comment='PHP packet'/><data>
<string>PHP to WDDX packet example</string></data></wddxPacket>
```

**Exemplo #2 Usando pacotes incrementais com WDDX**

```
<?php
$pi = 3.1415926;
$packet_id = wddx_packet_start("PHP");
wddx_add_vars($packet_id, "pi");

/* Suppose $cities came from database */
$cities = array("Austin", "Novato", "Seattle");
wddx_add_vars($packet_id, "cities");

$packet = wddx_packet_end($packet_id);
echo $packet;
?>
```

Este exemplo irá produzir:

```
<wddxPacket version='1.0'><header comment='PHP'/><data><struct>
<var name='pi'><number>3.1415926</number></var><var name='cities'>
<array length='3'><string>Austin</string><string>Novato</string>
<string>Seattle</string></array></var></struct></data></wddxPacket>
```

> **Nota**:
>
> Strings devem ser codificadas em UTF-8; para lidar com outras codificações, converta
> a string primeiramente usando [mb\_convert\_encoding()](function.mb-convert-encoding.md), você tem que primeiro
> [UConverter::transcode()](uconverter.transcode.md) ou [iconv()](function.iconv.md).

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
