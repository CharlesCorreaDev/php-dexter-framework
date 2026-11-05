# Novas Funcionalidades

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.new-features.php

---

## Novas Funcionalidades

### Núcleo do PHP

#### Operador Pipe

Adicionado o [operador pipe
(`|>`)](language.operators.functional.md).

```
<?php
$result = "Olá, Mundo!" |> strlen(...);
print $result . PHP_EOL;  // Exibe "11"
```

#### Closure em expressões constantes

Adicionado suporte a [Closures](class.closure.md) e
[chamáveis de primeira classe](functions.first_class_callable_syntax.md)
em expressões constantes. Isto inclui:

- Parâmetros de atributo.
- Valores padrão de propriedades e parâmetros.
- Constantes regulares e de classe.

#### Atributo #[\NoDiscard]

Adicionado o atributo [NoDiscard](class.nodiscard.md) para indicar que um
valor de retorno de uma função é importante e deve ser consumido.

Além disso, foi adicionada a conversão `(void)` para indicar a intenção de não se usar um valor.
A conversão `(void)` não tem efeito na execução do programa em si mas
pode ser usada para suprimir avisos emitidos por `#[\NoDiscard]` e possivelmente
também por diagnósticos emitidos por IDEs externos ou por ferramentas de análise estática.

```
<?php

#[\NoDiscard]
function concat(string $a, string $b): string {
    return $a . $b;
}

// Warning: The return value of function concat() should either be used or
// intentionally ignored by casting it as (void) in xxx.php
concat("a", "b");

// Nenhum aviso porque o valor de retorno é consumido pela atribuição.
$results = concat("a", "b");

// Nenhum aviso porque a conversão (void) é usada.
(void)concat("a", "b");
```

#### Atributos em Constantes

Adicionado suporte a atributos em constantes que não sejam de classe no momento da compilação
(ex.: `const MY_CONST = 1;` em vez de
`define('MY_CONST', 1);`).

O atributo [Deprecated](class.deprecated.md) agora pode ser usado em constantes.

#### Atributo `#[\DelayedTargetValidation]`

O novo atributo [DelayedTargetValidation](class.delayedtargetvalidation.md) pode ser usado
para suprimir erros de compilação de atributos do núcleo (ou de extensão) que são
usados em destinos inválidos. Estes erros são por sua vez reportados no momento da execução se e
quando [ReflectionAttribute::newInstance()](reflectionattribute.newinstance.md) for chamado.

#### `#[\Override]` para propriedades

O atributo [Override](class.override.md) agora pode ser aplicado a propriedades.

#### Visibilidade Assimétrica para Propriedade Estática

Adicionado o suporte a [visibilidade
assimétrica](language.oop5.visibility.md#language.oop5.visibility-members-aviz) para propriedades estáticas.

#### Rastreamento de Pilha para Erros Fatais

Erros fatais (tal como um tempo de execução máximo excedido) agora incluem um
rastreamento de pilha.

#### Promoção de construtor para propriedade final

A [promoção de propriedade
de construtor](language.oop5.decon.md#language.oop5.decon.constructor.promotion) agora pode ser usada para propriedades finais.

#### Conversões em expressões constantes

Adicionado suporte para conversões em expressões constantes.

```
<?php
const T1 = (int) 0.3; // Anteriormente: "Fatal error: Constant expression contains invalid operations"
print T1 . PHP_EOL;   // Exibe "0"
```

#### Função de clonagem

A [construção de linguagem 'clone'](language.oop5.cloning.md)
agora é uma função e suporta reatribuição de propriedades (somente-leitura) durante
a clonagem através do novo parâmetro $withProperties.

### cURL

Adicionado suporte para
[identificador compartilhado](class.curlsharepersistenthandle.md)
que persistem por múltiplas requisições PHP, permitindo reúso mais efetivo de conexões
de forma segura.

Adicionado suporte a **`CURLINFO_USED_PROXY`** (libcurl >= 8.7.0),
**`CURLINFO_HTTPAUTH_USED`**
e **`CURLINFO_PROXYAUTH_USED`** (libcurl >= 8.12.0)
para a função [curl\_getinfo()](function.curl-getinfo.md).
Quando [curl\_getinfo()](function.curl-getinfo.md) retorna um array, a mesma informação
fica disponível nas chaves `"used_proxy"`,
`"httpauth_used"` e
`"proxyauth_used"`.
**`CURLINFO_USED_PROXY`** é definida para zero se nenhum proxy foi usado na
transferência anterior ou para um valor diferente de zero se um proxy foi usado.
**`CURLINFO_HTTPAUTH_USED`** e
**`CURLINFO_PROXYAUTH_USED`** recebem máscaras de bits
indicando os métodos de autenticação HTTP e proxy que foram
usados na requisição anterior.
Consulte as constantes **`CURLAUTH_*`** para
os valores possíveis.

Adicionado suporte à opção cURL **`CURLOPT_INFILESIZE_LARGE`**, que é uma substituta segura
para **`CURLOPT_INFILESIZE`**. Em certos sistemas,
**`CURLOPT_INFILESIZE`** aceita somente um inteiro de 32 bits com sinal para indicar
o tamanho do arquivo (2.0 GiB) mesmo em sistemas de 64 bits.
**`CURLOPT_INFILESIZE_LARGE`** aceita o maior valor inteiro
que o sistema permitir.

Adicionadas os valores **`CURLFOLLOW_OBEYCODE`**,
**`CURLFOLLOW_FIRSTONLY`** e **`CURLFOLLOW_ALL`**
para a opção **`CURLOPT_FOLLOWLOCATION`** da função
[curl\_setopt()](function.curl-setopt.md).
**`CURLFOLLOW_OBEYCODE`** passa a seguir mais rigorosamente em relação ao
redirecionamento, se permitido.
**`CURLFOLLOW_FIRSTONLY`** segue apenas o primeiro redirecionamento, portanto
se houver algum redirecionamento subsequente, ela não irá além disso.
**`CURLFOLLOW_ALL`** é equivalente a definir
**`CURLOPT_FOLLOWLOCATION`** para 'true'.

Adicionado suporte à constante **`CURLINFO_CONN_ID`** (libcurl >= 8.2.0)
para a função [curl\_getinfo()](function.curl-getinfo.md). Esta constante permite recuperar
o ID exclusivo da conexão usada por uma transferência cURL. É principalmente
útil quando a reutilização de conexões ou a lógica de agrupamento de conexões é necessária em
aplicações de nível PHP. Quando [curl\_getinfo()](function.curl-getinfo.md) retorna um array,
esse valor está disponível como a chave `"conn_id"`.

Adicionado suporte à constante **`CURLINFO_QUEUE_TIME_T`** (libcurl >= 8.6.0)
para a função [curl\_getinfo()](function.curl-getinfo.md). Esta constante permite
recuperar o tempo (em microssegundos) que a requisição passou na fila
de conexões do libcurl antes de ser enviada.
Este valor também pode ser obtido passando
**`CURLINFO_QUEUE_TIME_T`** para o parâmetro
`option` da função [curl\_getinfo()](function.curl-getinfo.md).

Adicionado suporte à constante **`CURLOPT_SSL_SIGNATURE_ALGORITHMS`** para
especificar os algoritmos de assinatura a serem usados ​​para TLS.

### DOM

Adicionada a propriedade [Dom\Element::$outerHTML](class.dom-element.md#dom-element.props.outerhtml).

Adicionada a propriedade $children às
implementações [Dom\ParentNode](class.dom-parentnode.md).

### EXIF

Adicionado suporte às etiquetas Exif `OffsetTime*`.

Adicionado suporte para HEIF/HEIC.

### Filter

Adicionada a nova opção **`FILTER_THROW_ON_FAILURE`** que pode ser
passada para as funções de filtro e forçará o lançamento de uma exceção
quando a validação falhar.
A nova opção não pode ser combinada com
**`FILTER_NULL_ON_FAILURE`**; tentar fazer isso resultará
no lançamento de um [ValueError](class.valueerror.md).

### Intl

Adicionadas as constantes de classe **`NumberFormatter::CURRENCY_ISO`**,
**`NumberFormatter::CURRENCY_PLURAL`**,
**`NumberFormatter::CASH_CURRENCY`**
e **`NumberFormatter::CURRENCY_STANDARD`**
para varios formatos de números relacionados a moeda.

Adicionados os métodos [Locale::addLikelySubtags()](locale.addlikelysubtags.md) e
[Locale::minimizeSubtags()](locale.minimizesubtags.md) para lidar com possíveis etiquetas
em uma dada localidade.

Adicionada a classe [IntlListFormatter](class.intllistformatter.md) para formatar, ordenar e
pontuar uma lista de itens com uma dada localidade; operandos
**`IntlListFormatter::TYPE_AND`**,
**`IntlListFormatter::TYPE_OR`**,
**`IntlListFormatter::TYPE_UNITS`**; e larguras
**`IntlListFormatter::WIDTH_WIDE`**,
**`IntlListFormatter::WIDTH_SHORT`** e
**`IntlListFormatter::WIDTH_NARROW`**.
É suportado a partir da ICU 67.

### PDO\_Sqlite

Adicionada a constante de classe **`Pdo\Sqlite::ATTR_BUSY_STATEMENT`**.

Adicionadas as constantes de classe **`Pdo\Sqlite::ATTR_EXPLAIN_STATEMENT`**,
**`Pdo\Sqlite::EXPLAIN_MODE_PREPARED`**,
**`Pdo\Sqlite::EXPLAIN_MODE_EXPLAIN`**,
**`Pdo\Sqlite::EXPLAIN_MODE_EXPLAIN_QUERY_PLAN`**.

Adicionado o atributo de conexão **`Pdo\Sqlite::ATTR_TRANSACTION_MODE`**
com valores possíveis de **`Pdo\Sqlite::TRANSACTION_MODE_DEFERRED`**,
**`Pdo\Sqlite::TRANSACTION_MODE_IMMEDIATE`**
e **`Pdo\Sqlite::TRANSACTION_MODE_EXCLUSIVE`**,
permitindo configurar a o modo de transação a ser usado por beginTransaction().

### Session

[session\_set\_cookie\_params()](function.session-set-cookie-params.md),
[session\_get\_cookie\_params()](function.session-get-cookie-params.md)
e [session\_start()](function.session-start.md) agora suportam cookies particionados através da chave
`"partitioned"`.

### SOAP

Os casos de enumeração agora são despejados em [SoapClient::\_\_getTypes()](soapclient.gettypes.md).

Adicionado suporte para o atributo xml:lang do "Reason Text" do SOAP 1.2.

As assinaturas de [SoapFault::\_\_construct()](soapfault.construct.md) e
[SoapServer::fault()](soapserver.fault.md) agora possuem um
parâmetro opcional `lang`.
Esse suporte resolve a compatibilidade com clientes SOAP do .NET.

### Standard

A função [mail()](function.mail.md) agora retorna o erro real do sendmail e detecta
se o processo do sendmail foi encerrado inesperadamente.
Nesses casos, um aviso é emitido e a função retorna 'false'.
Anteriormente, esses erros eram ignorados silenciosamente.
Essa alteração afeta apenas o transporte do sendmail.

[getimagesize()](function.getimagesize.md) agora suporta imagens HEIF/HEIC.

[getimagesize()](function.getimagesize.md) agora suporta imagens SVG quando a extensão libxml
também estiver carregada.
De forma similar, [image\_type\_to\_extension()](function.image-type-to-extension.md) e
[image\_type\_to\_mime\_type()](function.image-type-to-mime-type.md)
agora também suportam IMAGETYPE\_SVG.

O array retornado por [getimagesize()](function.getimagesize.md) agora possui duas entradas adicionais:
`"width_unit"` e `"height_unit"` para indicar em
quais unidades as dimensões são expressas. Essas unidades são px por padrão. Elas não são
necessariamente as mesmas (apenas para dar um exemplo: uma pode ser cm e a outra pode ser px).

[setcookie()](function.setcookie.md) e [setrawcookie()](function.setrawcookie.md) agora suportam a chave
`"partitioned"`.

### URI

Uma extensão URI sempre habilitada foi adicionada e pode ser usada para lidar com
URIs e URLs de acordo com a RFC 3986 e a WHATWG URL.

### XSL

O argumento `namespace` de [XSLTProcessor::getParameter()](xsltprocessor.getparameter.md),
[XSLTProcessor::setParameter()](xsltprocessor.setparameter.md) e
[XSLTProcessor::removeParameter()](xsltprocessor.removeparameter.md) agora funciona de fato
em vez de ser tratado como vazio.
Isso só funciona se o argumento `name` não usar a notação Clark e não for um
QName, pois nesses casos o namespace é obtido do 'href' do namespace ou
do prefixo, respectivamente.

### Zlib

[flock()](function.flock.md) agora é compatível com fluxos zlib. Anteriormente,
isso sempre falhava ao executar qualquer ação de bloqueio.

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
