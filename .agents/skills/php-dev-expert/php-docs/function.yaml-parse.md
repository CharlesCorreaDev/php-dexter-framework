# Analisa um fluxo YAML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaml-parse.php

---

# yaml\_parse

(PECL yaml >= 0.4.0)

yaml\_parse — Analisa um fluxo YAML

### Descrição

function **yaml\_parse**(  
    [string](language.types.string.md) `$input`,  
    [int](language.types.integer.md) `$pos` = 0,  
    [int](language.types.integer.md) `&$ndocs` = ?,  
    [array](language.types.array.md) `$callbacks` = **`null`**  
): [mixed](language.types.mixed.md)

Converte todo ou parte de um fluxo de documentos YAML em uma variável PHP.

### Parâmetros

`input`
:   A [string](language.types.string.md) a ser analisada como um fluxo de documentos YAML.

`pos`
:   Documento a ser extraído do fluxo (`-1` para todos
    os documentos, `0` para o primeiro documento, ...).

`ndocs`
:   Se `ndocs` for fornecido, será preenchido com o
    número de documentos encontrados no fluxo.

`callbacks`
:   Manipuladores de conteúdo para nós YAML. Um [array](language.types.array.md) associativo
    para mapeamento de etiqueta => [callable](language.types.callable.md). Consulte
    [funções de análise](yaml.callbacks.parse.md) para mais
    detalhes.

### Valor Retornado

Retorna o valor codificado em `input` no tipo PHP
apropriado ou **`false`** em caso de falha. Se `pos` for `-1`, um
[array](language.types.array.md) será retornado com uma entrada para cada documento encontrado
no fluxo.

### Examples

**Exemplo #1 Exemplo de **yaml\_parse()****

```
<?php
$yaml = <<<EOD
---
invoice: 34843
date: "2001-01-23"
bill-to: &id001
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
ship-to: *id001
product:
- sku: BL394D
  quantity: 4
  description: Basketball
  price: 450
- sku: BL4438H
  quantity: 1
  description: Super Hoop
  price: 2392
tax: 251.420000
total: 4443.520000
comments: Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.
...
EOD;

$parsed = yaml_parse($yaml);
var_dump($parsed);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(8) {
  ["invoice"]=>
  int(34843)
  ["date"]=>
  string(10) "2001-01-23"
  ["bill-to"]=>
  &array(3) {
    ["given"]=>
    string(5) "Chris"
    ["family"]=>
    string(6) "Dumars"
    ["address"]=>
    array(4) {
      ["lines"]=>
      string(34) "458 Walkman Dr.
        Suite #292"
      ["city"]=>
      string(9) "Royal Oak"
      ["state"]=>
      string(2) "MI"
      ["postal"]=>
      int(48046)
    }
  }
  ["ship-to"]=>
  &array(3) {
    ["given"]=>
    string(5) "Chris"
    ["family"]=>
    string(6) "Dumars"
    ["address"]=>
    array(4) {
      ["lines"]=>
      string(34) "458 Walkman Dr.
        Suite #292"
      ["city"]=>
      string(9) "Royal Oak"
      ["state"]=>
      string(2) "MI"
      ["postal"]=>
      int(48046)
    }
  }
  ["product"]=>
  array(2) {
    [0]=>
    array(4) {
      ["sku"]=>
      string(6) "BL394D"
      ["quantity"]=>
      int(4)
      ["description"]=>
      string(10) "Basketball"
      ["price"]=>
      int(450)
    }
    [1]=>
    array(4) {
      ["sku"]=>
      string(7) "BL4438H"
      ["quantity"]=>
      int(1)
      ["description"]=>
      string(10) "Super Hoop"
      ["price"]=>
      int(2392)
    }
  }
  ["tax"]=>
  float(251.42)
  ["total"]=>
  float(4443.52)
  ["comments"]=>
  string(68) "Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338."
}
```

### Notas

**Aviso**

Processar entradas não confiáveis de usuários ​​com **yaml\_parse()**
é perigoso se o uso de [unserialize()](function.unserialize.md) estiver habilitado para
nós que usam a etiqueta `!php/object`. Este comportamento pode ser
desativado usando a configuração INI `yaml.decode_php`.

### Veja também

- [yaml\_parse\_file()](function.yaml-parse-file.md) - Analisa um fluxo YAML de um arquivo
- [yaml\_parse\_url()](function.yaml-parse-url.md) - Analisa um fluxo Yaml de um URL
- [yaml\_emit()](function.yaml-emit.md) - Retorna a representação YAML de um valor

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
