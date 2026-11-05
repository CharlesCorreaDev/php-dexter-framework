# Chama o serviço

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-client.call.php

---

# Yar\_Client::\_\_call

(No version information available, might only be in Git)

Yar\_Client::\_\_call — Chama o serviço

### Descrição

public function **Yar\_Client::\_\_call**([string](language.types.string.md) `$method`, [array](language.types.array.md) `$parameters`): [void](language.types.void.md)

Emite uma chamada para o método RPC remoto.

### Parâmetros

`method`
:   Nome do método RPC remoto.

`parameters`
:   Parâmetros.

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **Yar\_Client::\_\_call()****

```
<?php

$client = new Yar_Client("http://host/api/");

/* chama serviço remoto */
$result = $client->some_method("parameter");
?>
```

O exemplo acima produzirá
algo semelhante a:

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
