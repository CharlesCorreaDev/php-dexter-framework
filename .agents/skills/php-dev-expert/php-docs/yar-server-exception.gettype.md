# Recupera o tipo da exceção

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-server-exception.gettype.php

---

# Yar\_Server\_Exception::getType

(PECL yar >= 1.0.0)

Yar\_Server\_Exception::getType — Recupera o tipo da exceção

### Descrição

public function **Yar\_Server\_Exception::getType**(): [string](language.types.string.md)

Obtém o tipo original de exceção lançado pelo servidor.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma string.

### Examples

**Exemplo #1 Exemplo de **Yar\_Server\_Exception::getType()****

```
// Server.php
<?php
class Custom_Exception extends Exception {};

class API {
    public function throw_exception($name) {
        throw new Custom_Exception($name);
    }
}

$service = new Yar_Server(new API());
$service->handle();
?>

// Client.php
<?php
$client = new Yar_Client("http://host/api.php");

try {
    $client->throw_exception("client");
} catch (Yar_Server_Exception $e) {
    var_dump($e->getType());
    var_dump($e->getMessage());
}
```

O exemplo acima produzirá
algo semelhante a:

```
string(16) "Custom_Exception"
string(6) "client"
```

### Veja também

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
