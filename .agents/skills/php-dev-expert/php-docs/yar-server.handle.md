# Inicia o servidor RPC

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yar-server.handle.php

---

# Yar\_Server::handle

(PECL yar >= 1.0.0)

Yar\_Server::handle — Inicia o servidor RPC

### Descrição

public function **Yar\_Server::handle**(): [bool](language.types.boolean.md)

Inicia um servidor HTTP RPC e fica pronto para aceitar solicitações RPC.
> **Nota**:
>
> Chamadas RPC comuns serão emitidas como requisições HTTP POST.
> Se uma requisição HTTP GET for emitida para a URI, as informações
> do serviço (seção comentada acima) serão impressas na página.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um booleano.

### Examples

**Exemplo #1 Exemplo de **Yar\_Server::handle()****

```
<?php
class API {
    /**
     * As informações do documento serão geradas automaticamente na página de informações do serviço.
     * @params
     * @return
     */
    public function some_method($parameter, $option = "foo") {
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

- [Yar\_Server::\_\_construct()](yar-server.construct.md) - Registra um servidor

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
