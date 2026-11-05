# Define o modo de persistência do SoapServer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.setpersistence.php

---

# SoapServer::setPersistence

(PHP 5, PHP 7, PHP 8)

SoapServer::setPersistence — Define o modo de persistência do SoapServer

### Descrição

public function **SoapServer::setPersistence**([int](language.types.integer.md) `$mode`): [void](language.types.void.md)

Esta função permite alterar o estado de persistência de um objeto SoapServer entre
solicitações. Esta função permite salvar dados entre solicitações utilizando sessões PHP. Este método
só tem efeito em um SoapServer após ele ter exportado funções utilizando [SoapServer::setClass()](soapserver.setclass.md).

> **Nota**:
>
> A persistência de **`SOAP_PERSISTENCE_SESSION`** faz apenas
> objetos de uma determinada classe persistentes, mas não os dados estáticos da classe. Neste
> caso, use $this->bar em vez de self::$bar.

> **Nota**:
>
> **`SOAP_PERSISTENCE_SESSION`** serializa dados no objeto de classe entre solicitações. Para utilizar adequadamente os recursos (por exemplo, [PDO](class.pdo.md)), [\_\_wakeup()](language.oop5.magic.md#object.wakeup) e [\_\_sleep()](language.oop5.magic.md#object.sleep) métodos mágicos devem ser utilizados.

### Parâmetros

`mode`
:   Uma das constantes **`SOAP_PERSISTENCE_*`**.

    **`SOAP_PERSISTENCE_REQUEST`** - Os dados do SoapServer não persistem entre
    solicitações. Este é o comportamento **padrão** de qualquer objeto SoapServer
    após setClass ser chamado.

    **`SOAP_PERSISTENCE_SESSION`** - Os dados do SoapServer persistem entre as solicitações.
    Isso é feito serializando os dados da classe SoapServer em
    [$\_SESSION['\_bogus\_session\_name']](reserved.variables.session.md), por causa disso
    [session\_start()](function.session-start.md) deve ser chamado antes que este modo de persistência seja definido.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | **`SOAP_PERSISTENCE_SESSION`** agora funciona quando a extensão de sessões é compilada como um módulo compartilhado; anteriormente ela falhava silenciosamente. **SoapServer::setPersistence()** agora também lança um [Error](class.error.md) quando **`SOAP_PERSISTENCE_SESSION`** é solicitada quando a extensão de sessões não está disponível. |

### Examples

**Exemplo #1 Exemplo de **SoapServer::setPersistence()****

```
<?php
 class MyFirstPersistentSoapServer {
     private $resource; // (Such as PDO, mysqli, etc..)
     public $myvar1;
     public $myvar2;

     public function __construct() {
         $this->__wakeup(); // We're calling our wakeup to handle starting our resource
     }

     public function __wakeup() {
         $this->resource = CodeToStartOurResourceUp();
     }

     public function __sleep() {
         // Certificamo-nos de deixar $resource de fora aqui, para que nossos dados de sessão permaneçam persistentes
         // Não fazer isso resultará em falha durante a desserialização dos dados
         // na próxima solicitação; portanto, nosso SoapObject não seria persistente nas solicitações.
         return array('myvar1','myvar2');
     }
 }

 try {
     session_start();
     $server = new SoapServer(null, array('uri' => $_SERVER['REQUEST_URI']));
     $server->setClass('MyFirstPersistentSoapServer');
     // setPersistence DEVE ser chamado depois de setClass, porque o comportamento de setClass
     // define SESSION_PERSISTENCE_REQUEST ao ativar o método.
     $server->setPersistence(SOAP_PERSISTENCE_SESSION);
     $server->handle();
 } catch(SoapFault $e) {
     error_log("SOAP ERROR: ". $e->getMessage());
 }
?>
```

### Veja também

- [SoapServer::setClass()](soapserver.setclass.md) - Define a classe que trata as solicitações SOAP

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
