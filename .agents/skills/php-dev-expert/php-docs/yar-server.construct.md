# Registra um servidor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-server.construct.php

---

# Yar\_Server::\_\_construct

(PECL yar >= 1.0.0)

Yar\_Server::\_\_construct — Registra um servidor

### Descrição

final public function **Yar\_Server::\_\_construct**([Object](language.types.object.md) `$obj`)

Configura um servidor Yar HTTP RPC. Todos os métodos públicos de $obj serão
registrados como um serviço RPC.

### Parâmetros

`obj`
:   Um objeto, todos os seus métodos públicos serão registrados
    como serviços RPC.

### Valor Retornado

Uma instância de [Yar\_Server](class.yar-server.md).

### Examples

**Exemplo #1 Exemplo de **Yar\_Server::\_\_construct()****

```
<?php
class API {
    /**
     * As informações do documento serão geradas automaticamente na página de informações do serviço.
     * @params
     * @return
     */
    public function some_method($parameter, $option = "foo") {
         return "some_method";
    }

    protected function client_can_not_see() {
    }
}

$service = new Yar_Server(new API());
$service->handle();
?>
```

O exemplo acima produzirá
algo semelhante a:

### Veja também

- [Yar\_Server::handle()](yar-server.handle.md) - Inicia o servidor RPC

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
