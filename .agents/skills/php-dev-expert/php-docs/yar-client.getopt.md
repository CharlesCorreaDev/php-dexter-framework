# Read a client option

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-client.getopt.php

---

# Yar\_Client::getOpt

(PECL yar >= 1.1.0)

Yar\_Client::getOpt — Read a client option

### Descrição

public function **Yar\_Client::getOpt**([int](language.types.integer.md) `$name`): [mixed](language.types.mixed.md)

Returns the value previously set with
[Yar\_Client::setOpt()](yar-client.setopt.md), or with the
`options` parameter of
[Yar\_Client::\_\_construct()](yar-client.construct.md).

### Parâmetros

`name`
:   One of the `YAR_OPT_*` constants, see
    [Yar\_Client::setOpt()](yar-client.setopt.md).

### Valor Retornado

The option value, or **`false`** if the option has not been set on this
client or the option name is unknown.

### Examples

**Exemplo #1 **Yar\_Client::getOpt()** example**

```
<?php
$client = new Yar_Client("http://api.example.com/operator.php");
$client->setOpt(YAR_OPT_TIMEOUT, 1000);

var_dump($client->getOpt(YAR_OPT_TIMEOUT));
var_dump($client->getOpt(YAR_OPT_PACKAGER));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1000)
bool(false)
```

### Veja também

- [Yar\_Client::setOpt()](yar-client.setopt.md) - Define contextos de chamada

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
