# Cria um cliente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-client.construct.php

---

# Yar\_Client::\_\_construct

(PECL yar >= 1.0.0)

Yar\_Client::\_\_construct — Cria um cliente

### Descrição

final public function **Yar\_Client::\_\_construct**([string](language.types.string.md) `$url`, [array](language.types.array.md) `$options` = ?)

Cria um cliente [Yar\_Client](class.yar-client.md) de um servidor
[Yar\_Server](class.yar-server.md).

### Parâmetros

`url`
:   URL do servidor Yar.

### Valor Retornado

Intância de [Yar\_Client](class.yar-client.md).

### Examples

**Exemplo #1 Exemplo de **Yar\_Client::\_\_construct()****

```
<?php
$client = new Yar_Client("http://host/api/");
?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yar\_Client::\_\_call()](yar-client.call.md) - Chama o serviço
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
