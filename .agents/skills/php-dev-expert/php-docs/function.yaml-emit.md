# Retorna a representação YAML de um valor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.yaml-emit.php

---

# yaml\_emit

(PECL yaml >= 0.5.0)

yaml\_emit — Retorna a representação YAML de um valor

### Descrição

function **yaml\_emit**(  
    [mixed](language.types.mixed.md) `$data`,  
    [int](language.types.integer.md) `$encoding` = YAML\_ANY\_ENCODING,  
    [int](language.types.integer.md) `$linebreak` = YAML\_ANY\_BREAK,  
    [array](language.types.array.md) `$callbacks` = **`null`**  
): [string](language.types.string.md)

Gera uma representação YAML dos dados fornecidos em `data`.

### Parâmetros

`data`
:   Os dados a serem codificados. `data` pode ser de qualquer tipo exceto
    [resource](language.types.resource.md).

`encoding`
:   Codificação de caracteres de saída escolhida entre
    **`YAML_ANY_ENCODING`**,
    **`YAML_UTF8_ENCODING`**,
    **`YAML_UTF16LE_ENCODING`**,
    **`YAML_UTF16BE_ENCODING`**.

`linebreak`
:   Estilo de quebra de linha de saída escolhido entre
    **`YAML_ANY_BREAK`**,
    **`YAML_CR_BREAK`**,
    **`YAML_LN_BREAK`**,
    **`YAML_CRLN_BREAK`**.

`callbacks`
:   Manipuladores de conteúdo para emissão dos nós YAML. Um [array](language.types.array.md) associativo
    para mapeamento de classe => [callable](language.types.callable.md). Consulte
    [funções de emissão](yaml.callbacks.emit.md) para mais
    detalhes.

### Valor Retornado

Retorna uma [string](language.types.string.md) codificada em YAML em caso de sucesso.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL yaml 1.1.0 | O parâmetro `callbacks` foi adicionado. |

### Examples

**Exemplo #1 Exemplo de **yaml\_emit()****

```
<?php
$addr = array(
    "given" => "Chris",
    "family"=> "Dumars",
    "address"=> array(
        "lines"=> "458 Walkman Dr.
        Suite #292",
        "city"=> "Royal Oak",
        "state"=> "MI",
        "postal"=> 48046,
      ),
  );
$invoice = array (
    "invoice"=> 34843,
    "date"=> 980208000,
    "bill-to"=> $addr,
    "ship-to"=> $addr,
    "product"=> array(
        array(
            "sku"=> "BL394D",
            "quantity"=> 4,
            "description"=> "Basketball",
            "price"=> 450,
          ),
        array(
            "sku"=> "BL4438H",
            "quantity"=> 1,
            "description"=> "Super Hoop",
            "price"=> 2392,
          ),
      ),
    "tax"=> 251.42,
    "total"=> 4443.52,
    "comments"=> "Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.",
  );
var_dump(yaml_emit($invoice));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(628) "---
invoice: 34843
date: 980208000
bill-to:
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
ship-to:
  given: Chris
  family: Dumars
  address:
    lines: |-
      458 Walkman Dr.
              Suite #292
    city: Royal Oak
    state: MI
    postal: 48046
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
"
```

### Veja também

- [yaml\_emit\_file()](function.yaml-emit-file.md) - Envia a representação YAML de um valor para um arquivo
- [yaml\_parse()](function.yaml-parse.md) - Analisa um fluxo YAML

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
