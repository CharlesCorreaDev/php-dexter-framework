# Construtor de SoapClient

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapclient.construct.php

---

# SoapClient::\_\_construct

(PHP 5, PHP 7, PHP 8)

SoapClient::\_\_construct — Construtor de SoapClient

### Descrição

public function **SoapClient::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$wsdl`, [array](language.types.array.md) `$options` = [])

Cria um objeto [SoapClient](class.soapclient.md) para conectar-se a um serviço SOAP.

### Parâmetros

`wsdl`
:   URI de um arquivo WSDL que descreve o serviço, que é usado para
    configurar o cliente. Se não for fornecido, o cliente operará em modo
    não WSDL.

    > **Nota**:
    >
    > Por padrão, o arquivo WSDL será armazenado em cache para desempenho. Para desabilitar
    > ou configurar esse cache, consulte
    > [Opções de Configuração de SOAP](soap.configuration.md#soap.configuration.list)
    > e a [opção `cache_wsdl`](soapclient.construct.md#soapclient.construct.options.cache-wsdl).

`options`
:   Um array associativo que especifica opções adicionais para o cliente SOAP.
    Se `wsdl` for fornecido, isso será opcional; caso contrário,
    pelo menos `location` e `url` devem ser
    fornecidos.

    `location` [string](language.types.string.md)
    :   A URL do servidor SOAP para o qual a solicitação será enviada.

        Obrigatório se o parâmetro `wsdl` não for fornecido.
        Se ambos o parâmetro `wsdl` e a
        opção `location` são fornecidos, a
        opção `location` substituirá qualquer local
        especificado no arquivo WSDL.

    `uri` [string](language.types.string.md)
    :   O namespace de destino do serviço SOAP.

        Obrigatório se o parâmetro `wsdl` não for fornecido;
        ignorado caso contrário.

    `style` [int](language.types.integer.md)
    :   Especifica o estilo de ligação a ser usado para este cliente, usando as constantes
        **`SOAP_RPC`** e **`SOAP_DOCUMENT`**.
        **`SOAP_RPC`** indica ligação no estilo "RPC", onde o
        corpo da solicitação SOAP contém uma codificação padrão de uma chamada de função.
        **`SOAP_DOCUMENT`** indica vinculação no estilo documento,
        onde o corpo da solicitação SOAP contém um documento XML com
        significado definido pelo serviço.

        Se o parâmetro `wsdl` for fornecido, esta
        opção é ignorada e o estilo é lido no arquivo WSDL.

        Se nem esta opção nem o parâmetro `wsdl`
        forem fornecidos, o estilo "RPC" é usado.

    `use` [int](language.types.integer.md)
    :   Especifica o estilo de codificação a ser usado para este cliente, usando as
        constantes **`SOAP_ENCODED`** ou **`SOAP_LITERAL`**.
        **`SOAP_ENCODED`** indica codificação usando os tipos
        definidos na especificação SOAP.
        **`SOAP_LITERAL`** indica codificação usando um esquema
        definido pelo serviço.

        Se o parâmetro `wsdl` for fornecido, esta
        opção é ignorada e a codificação é lida no arquivo WSDL.

        Se nem esta opção nem o parâmetro `wsdl`
        forem fornecidos, o estilo "encoded" é usado.

    `soap_version` [int](language.types.integer.md)
    :   Especifica a versão do protocolo SOAP a ser usada:
        **`SOAP_1_1`** para SOAP 1.1,
        ou **`SOAP_1_2`** para SOAP 1.2.

        Se omitido, será usado SOAP 1.1.

    `authentication` [int](language.types.integer.md)
    :   Especifica o método de autenticação ao usar a autenticação HTTP
        em solicitações. O valor pode ser
        **`SOAP_AUTHENTICATION_BASIC`**
        ou **`SOAP_AUTHENTICATION_DIGEST`**.

        Se omitido, e a opção `login` for fornecida,
        a autenticação básica é usada.

    `login` [string](language.types.string.md)
    :   Nome de usuário a ser usado com autenticação HTTP Basic ou Digest.

    `password` [string](language.types.string.md)
    :   Senha a ser usada com autenticação HTTP Basic ou Digest.

        Não deve ser confundido com `passphrase`,
        que é usado com autenticação de certificado de cliente HTTPS.

    `local_cert` [string](language.types.string.md)
    :   Caminho para um certificado de cliente para uso com autenticação HTTPS.
        Deve ser um arquivo codificado em PEM que contém o certificado
        e a chave privada.

        O arquivo também pode incluir uma cadeia de emissores, que deve vir
        após o certificado do cliente.

        Também pode ser definido via
        [`stream_context`](soapclient.construct.md#soapclient.construct.options.stream-context),
        que também suporta a especificação de um arquivo de chave privada separado.

    `passphrase` [string](language.types.string.md)
    :   A senha do certificado do cliente especificada na
        opção `local_cert`.

        Não deve ser confundido com `password`,
        que é usado para autenticação Basic ou Digest.

        Também pode ser definido via
        [`stream_context`](soapclient.construct.md#soapclient.construct.options.stream-context).

    `proxy_host` [string](language.types.string.md)
    :   Nome do host a ser usado como servidor proxy para solicitações HTTP.

        A opção `proxy_port` também deve ser especificada.

    `proxy_port` [int](language.types.integer.md)
    :   Porta TCP a ser usada ao conectar ao servidor proxy
        especificado em `proxy_host`.

    `proxy_login` [string](language.types.string.md)
    :   Nome de usuário opcional para autenticação com o servidor proxy
        especificado em `proxy_host`, usando Autenticação
        HTTP Básica.

    `proxy_password` [string](language.types.string.md)
    :   Senha opcional para autenticação com o servidor proxy
        especificado em `proxy_host`, usando Autenticação
        HTTP Básica.

    `compression` [int](language.types.integer.md)
    :   Permite compactação de solicitações e respostas HTTP SOAP.

        O valor deve ser a operação OR binária de três partes:
        um **`SOAP_COMPRESSION_ACCEPT`** opcional,
        para enviar um cabeçalho "Accept-Encoding";
        **`SOAP_COMPRESSION_GZIP`**
        ou **`SOAP_COMPRESSION_DEFLATE`** para indicar
        o algoritmo de compressão a ser usado; e um número entre 1 e 9
        para indicar o nível de compactação a ser usado na solicitação.
        Por exemplo, para ativar a compactação gzip bidirecional com o máximo
        nível de compressão, use
        `SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 9`.

    `encoding` [string](language.types.string.md)
    :   Define a codificação interna de caracteres. As solicitações são sempre enviadas
        em UTF-8 e convertido para e desta codificação.

    `trace` [bool](language.types.boolean.md)
    :   Captura informações de solicitação e resposta, que podem então ser
        acessado com os métodos
        [SoapClient::\_\_getLastRequest()](soapclient.getlastrequest.md),
        [SoapClient::\_\_getLastRequestHeaders()](soapclient.getlastrequestheaders.md),
        [SoapClient::\_\_getLastResponse()](soapclient.getlastresponse.md),
        e [SoapClient::\_\_getLastResponseHeaders()](soapclient.getlastresponseheaders.md).

        Se omitido, o padrão é **`false`**

    `classmap` [array](language.types.array.md)
    :   Usado para mapear tipos definidos no WSDL para classes PHP.
        Deve ser especificado como um [array](language.types.array.md) associativo com
        nomes do WSDL como chaves e nomes de classes PHP como valores.
        Observe que o nome do tipo de um elemento não é necessariamente igual ao
        nome (etiqueta) do elemento.

        Os nomes de classe fornecidos devem sempre ser totalmente qualificados com
        [namespaces](language.namespaces.md), e nunca
        começar com um `\`. A forma correta pode ser
        gerada usando
        [::class](language.oop5.basic.md#language.oop5.basic.class.class).

        Observe que ao criar uma classe, o construtor não será chamado,
        mas os métodos mágicos [\_\_set()](language.oop5.overloading.md#object.set) e
        [\_\_get()](language.oop5.overloading.md#object.get) para propriedades
        individuais serão.

        A partir do PHP 8.4.0, chaves também podem ser especificadas usando a notação Clark,
        na forma `{namespace}type`, para mapear um tipo a partir de um
        namespace XML específico, por exemplo
        `'{http://example.com}foo'`. Isto é útil quando
        o mesmo nome de tipo é definido em mais de um namespace.

    `typemap` [array](language.types.array.md)
    :   Usado para definir mapeamentos de tipo usando funções de retorno definidas pelo usuário.
        Cada mapeamento de tipo deve ser um array com chaves
        `type_name` ([string](language.types.string.md) especificando o
        tipo de elemento XML);
        `type_ns` ([string](language.types.string.md) contendo namespace
        URI);
        `from_xml` ([callable](language.types.callable.md) aceitando um
        parâmetro string e retornando um objeto) e
        `to_xml` ([callable](language.types.callable.md) aceitando um
        parâmetro de objeto e retornando uma string).

    `exceptions` [bool](language.types.boolean.md)
    :   Define se os erros lançam exceções do tipo
        [SoapFault](class.soapfault.md).

        O padrão é **`true`**

    `connection_timeout` [int](language.types.integer.md)
    :   Define um tempo limite em segundos para conexão com o serviço SOAP.
        Esta opção não define timeout para serviços com respostas lentas.
        Para limitar o tempo de espera até que as chamadas terminem a
        opção [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout)
        de configuração está disponível.

    `cache_wsdl` [int](language.types.integer.md)
    :   Se o parâmetro `wsdl` for fornecido e a
        opção [soap.wsdl\_cache\_enabled](soap.configuration.md#ini.soap.wsdl-cache-enabled)
        de configuração estiver ativada, esta opção determina o tipo de armazenamento em cache.
        Um de **`WSDL_CACHE_NONE`**,
        **`WSDL_CACHE_DISK`**,
        **`WSDL_CACHE_MEMORY`** ou
        **`WSDL_CACHE_BOTH`**.

        Dois tipos de cache estão disponíveis: cache na memória, que armazena em cache o WSDL
        na memória do processo atual; e cache de disco, que armazena em cache o
        WSDL em um arquivo em disco, compartilhado entre todos os processos.
        O diretório a ser usado para o cache de disco é determinado pela
        opção [soap.wsdl\_cache\_dir](soap.configuration.md#ini.soap.wsdl-cache-dir)
        de configuração.
        Ambos os caches usam o mesmo tempo de vida, determinado pela
        opção [soap.wsdl\_cache\_ttl](soap.configuration.md#ini.soap.wsdl-cache-ttl)
        de configuração. O cache na memória também possui um número máximo de entradas
        determinado pela
        opção [soap.wsdl\_cache\_limit](soap.configuration.md#ini.soap.wsdl-cache-limit)
        de configuração.

        Se não for especificado, a opção [soap.wsdl\_cache](soap.configuration.md#ini.soap.wsdl-cache) de configuração será usada.

    `user_agent` [string](language.types.string.md)
    :   O valor a ser usado no cabeçalho HTTP `User-Agent`
        ao fazer solicitações.

        Também pode ser definido via [`stream_context`](soapclient.construct.md#soapclient.construct.options.stream-context).

        Se não for especificado, o agente do usuário será `"PHP-SOAP/"`
        seguido pelo valor de **`PHP_VERSION`**.

    `stream_context` [resource](language.types.resource.md)
    :   Um [contexto de fluxo](context.md) criado por
        [stream\_context\_create()](function.stream-context-create.md), que permite
        opções a serem definidas.

        O contexto pode incluir [opções de contexto de socket](context.socket.md),
        [Opções de contexto SSL](context.ssl.md),
        além de [opções de contexto HTTP](context.http.md) selecionadas:
        `content_type`, `header`,
        `max_redirects`, `protocol_version`,
        e `user_agent`.

        Observe que os seguintes cabeçalhos HTTP são gerados automaticamente ou a partir de outras
        opções e serão ignorados se especificados na opção de contexto `'header'`:
        `host`, `connection`,
        `user-agent`, `content-length`,
        `content-type`, `cookie`,
        `authorization` e `proxy-authorization`

    `features` [int](language.types.integer.md)
    :   Uma máscara de bits para ativar um ou mais dos seguintes recursos:

        **`SOAP_SINGLE_ELEMENT_ARRAYS`**
        :   Ao decodificar uma resposta para um array, o comportamento padrão é detectar se
            um nome de elemento aparece uma ou várias vezes em um elemento pai específico.
            Para elementos que aparecem apenas uma vez, uma propriedade de objeto permite acesso direto ao
            conteúdo; para elementos que aparecem mais de uma vez, a propriedade contém um
            array com o conteúdo de cada elemento correspondente.

            Se o recurso **`SOAP_SINGLE_ELEMENT_ARRAYS`** estiver ativado,
            elementos que aparecem apenas uma vez são colocados em um array de elemento único, de modo que
            o acesso é consistente para todos os elementos. Isso só tem efeito ao usar um WSDL
            contendo um esquema para a resposta. Consulte a seção Exemplos para obter uma ilustração.

        **`SOAP_USE_XSI_ARRAY_TYPE`**
        :   Quando a [opção `use`](soapclient.construct.md#soapclient.construct.options.use) ou propriedade WSDL está definida como `encoded`,
            força arrays a usar um tipo de `SOAP-ENC:Array`, em vez de um
            tipo específico do esquema.

        **`SOAP_WAIT_ONE_WAY_CALLS`**
        :   Aguarda uma resposta mesmo que o WSDL indique uma solicitação unidirecional.

    `keep_alive` [bool](language.types.boolean.md)
    :   um valor booleano que define se
        envia o cabeçalho `Connection: Keep-Alive` ou
        `Connection: close`.

        O padrão é **`true`**

    `ssl_method` [string](language.types.string.md)
    :   Especifica a versão do protocolo SSL ou TLS a ser usada com conexões HTTP
        seguras, em vez da negociação padrão.
        Especificar **`SOAP_SSL_METHOD_SSLv2`**
        ou **`SOAP_SSL_METHOD_SSLv3`** forçará o uso de SSL 2
        ou SSL 3, respectivamente.
        Especificar **`SOAP_SSL_METHOD_SSLv23`** não tem efeito;
        a constante existe apenas para compatibilidade com versões anteriores.
        A partir do PHP 7.2.0, especificar **`SOAP_SSL_METHOD_TLS`**
        também não tem efeito; em versões anteriores, forçava o uso do TLS 1.0.

        Observe que as versões 2 e 3 do SSL são consideradas inseguras e não podem
        ser suportado pela biblioteca OpenSSL instalada.

        Esta opção está **descontinuada** a partir do PHP 8.1.0.
        Uma alternativa mais flexível, que permite especificar
        versões individuais do TLS, é usar a
        [opção `stream_context`](soapclient.construct.md#soapclient.construct.options.stream-context) com
        o parâmetro de contexto 'crypto\_method'.

        ```
        <?php
        // Especificando o uso somente do TLS 1.3
        $context = stream_context_create([
            'ssl' => [
                'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT
             ]
        ]);
        $client = new SoapClient("some.wsdl", ['context' => $context]);
        ```

### Erros/Exceções

**SoapClient::\_\_construct()** irá gerar um erro
**`E_ERROR`** se as opções `location` e
`uri` não são fornecidas no modo não WSDL.

Uma exceção [SoapFault](class.soapfault.md) será lançada se o
URI `wsdl` não puder ser carregado.

### Examples

**Exemplo #1
Exemplo de **SoapClient::\_\_construct()****

```
<?php

$client = new SoapClient("some.wsdl");

$client = new SoapClient("some.wsdl", array('soap_version'   => SOAP_1_2));

$client = new SoapClient("some.wsdl", array('login'          => "some_name",
                                            'password'       => "some_password"));

$client = new SoapClient("some.wsdl", array('proxy_host'     => "localhost",
                                            'proxy_port'     => 8080));

$client = new SoapClient("some.wsdl", array('proxy_host'     => "localhost",
                                            'proxy_port'     => 8080,
                                            'proxy_login'    => "some_name",
                                            'proxy_password' => "some_password"));

$client = new SoapClient("some.wsdl", array('local_cert'     => "cert_key.pem"));

$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));

$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/",
                                     'style'    => SOAP_DOCUMENT,
                                     'use'      => SOAP_LITERAL));

$client = new SoapClient("some.wsdl",
  array('compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 9));

$client = new SoapClient("some.wsdl", array('encoding'=>'ISO-8859-1'));

class MyBook {
    public $title;
    public $author;
}

$client = new SoapClient("books.wsdl", array('classmap' => array('book' => "MyBook")));

$typemap = array(
    array("type_ns"  => "http://schemas.example.com",
         "type_name" => "book",
         "from_xml"  => "unserialize_book",
         "to_xml"    => "serialize_book")
);
$client = new SoapClient("books.wsdl", array('typemap' => $typemap));

?>
```

**Exemplo #2 Usando o recurso **`SOAP_SINGLE_ELEMENT_ARRAYS`****

```
<?php
/* Assumindo uma resposta como esta e um WSDL apropriado:
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns="urn:example">
    <SOAP-ENV:Body>
        <response>
            <collection>
                <item>Único</item>
            </collection>
            <collection>
                <item>Primeiro</item>
                <item>Segundo</item>
            </collection>
        </response>
    </SOAP-ENV:Body>
</SOAP-ENV:Envelope>
*/

echo "Padrão:\n";

$client = new TestSoapClient(__DIR__ . '/temp.wsdl');
$response = $client->exampleRequest();
var_dump( $response->collection[0]->item );
var_dump( $response->collection[1]->item );

echo "\nCom SOAP_SINGLE_ELEMENT_ARRAYS:\n";

$client = new TestSoapClient(__DIR__ . '/temp.wsdl', ['features' => SOAP_SINGLE_ELEMENT_ARRAYS]);
$response = $client->exampleRequest();
var_dump( $response->collection[0]->item );
var_dump( $response->collection[1]->item );
```

O exemplo acima produzirá:

```
Padrão:
string(6) "Único"
array(2) {
  [0] =>
  string(5) "Primeiro"
  [1] =>
  string(6) "Segundo"
}

Com SOAP_SINGLE_ELEMENT_ARRAYS:
array(1) {
  [0] =>
  string(6) "Único"
}
array(2) {
  [0] =>
  string(5) "Primeiro"
  [1] =>
  string(6) "Segundo"
}
```

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
