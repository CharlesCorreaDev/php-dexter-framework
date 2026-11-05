# Novos Recursos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.new-features.php

---

## Novos Recursos

### Núcleo do PHP

#### Ganchos de Propriedades

Propriedades de objetos agora podem ter uma lógica adicional associada com suas
operações `get` e `set`.
Dependendo do uso, isso pode ou não tornar a propriedade virtual,
ou seja, não existe nenhum valor de apoio.

```
<?php
class Person
{
    // Uma propriedade "virtual". Não pode ser definida explicitamente.
    public string $fullName {
        get => $this->firstName . ' ' . $this->lastName;
    }

    // Todas as operações de escrita passam por este gancho e o resultado é o que for escrito.
    // Acesso de leitura ocorre normalmente.
    public string $firstName {
        set => ucfirst(strtolower($value));
    }

    // Todas as operações de escrita passam por este gancho, que precisa escrever no próprio valor de apoio.
    // Acesso de leitura ocorre normalmente.
    public string $lastName {
        set {
            if (strlen($value) < 2) {
                throw new \InvalidArgumentException('Muito curto');
            }
            $this->lastName = $value;
        }
    }
}

$p = new Person();

$p->firstName = 'pedro';
print $p->firstName; // Exibe "Pedro"
$p->lastName = 'Pedroso';
print $p->fullName; // Exibe "Pedro Pedroso"

$p->fullName = "Pedro 'Pedrão' Pedroso"; // Lança Error: "Property Person::$fullName is read-only"
```

#### Visibilidade de Propriedade Assimétrica

Propriedades de objetos agora podem ter suas visibilidades `set`
controladas separadamente das visibilidades `get`.

```
<?php
class Example
{
    // O primeiro modificador controla a visibilidade "get", e o segundo
    // controla a visibilidade "set". A visibilidade "get" não pode ser mais restrita que a "set".
    public protected(set) string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
```

#### Objetos Lentos

Agora é possível criar objetos cuja inicialização é adiada até
serem acessados. Bibliotecas e estruturas podem aproveitar esses objetos lentos
para adiar a busca de dados ou dependências necessárias para inicialização.

```
<?php
class Example
{
    public function __construct(private int $data)
    {
    }

    // ...
}

$initializer = static function (Example $ghost): void {
    // Busca dados ou dependências
    $data = getData();
    // Inicializa
    $ghost->__construct($data);
};

$reflector = new ReflectionClass(Example::class);
$object = $reflector->newLazyGhost($initializer);
```

#### Atributo `#[\Deprecated]`

O novo atributo [Deprecated](class.deprecated.md) pode ser usado para marcar funções, métodos
e constantes de classe como descontinuados. O comportamento da funcionalidade descontinuada com este
atributo corresponde ao comportamento do mecanismo de descontinuação existente para as funcionalidades
fornecidas pelo próprio PHP. A única exceção é que o código de erro emitido é
**`E_USER_DEPRECATED`** ao invés de **`E_DEPRECATED`**.

Descontinuações existentes nas funcionalidades fornecidas pelo próprio PHP foram atualizadas para usar
o atributo, melhorando as mensagens de erro emitidas através da inclusão de uma breve explicação.

#### Analisando solicitações RFC1867 (multipartes) em solicitações HTTP não-POST

Adicionada a função [request\_parse\_body()](function.request-parse-body.md) que permite analisar
solicitações RFC1867 (multipartes) em solicitações HTTP não-POST.

#### Encadeando expressões [`new`](language.oop5.basic.md#language.oop5.basic.new) sem parênteses

Novas expressões com argumentos de construtor agora são desreferenciáveis, o que significa que
permitem encadear chamadas de métodos, acessos a propriedades etc., sem colocar
a expressão entre parênteses.

#### Informação de Depuração Melhorada para [WeakReference](class.weakreference.md)

A obtenção de informação de depuração para a classe [WeakReference](class.weakreference.md) agora
também conterá o objeto referenciado, ou **`null`** se a referência não
for mais válida.

#### Informação de Depuração Melhorada para [Closure](class.closure.md)

A saída do método **Closure::\_\_debugInfo()** agora inclui
o nome, o arquivo e a linha do [Closure](class.closure.md).

#### Definindo Símbolos Idênticos em Diferentes Blocos de Espaços de Nomes

Sair de um espaço de nomes agora limpa os símbolos visíveis.
Isso permite usar um símbolo em um bloco de espaço de nomes, mesmo que um
bloco de espaço de nomes anterior tenha declarado um símbolo com o mesmo nome.

### cURL

[curl\_version()](function.curl-version.md) retorna um valor
`feature_list` adicional, que é um array associativo
de todos os recursos cURL conhecidos, e se eles são suportados (**`true`**)
ou não (**`false`**).

Adicionadas as constantes **`CURL_HTTP_VERSION_3`** e
**`CURL_HTTP_VERSION_3ONLY`** (disponíveis
desde a libcurl 7.66 e 7.88) como opções possíveis para
**`CURLOPT_HTTP_VERSION`**.

Adicionada a constante **`CURLOPT_PREREQFUNCTION`** como uma opção do cURL que
aceita um [callable](language.types.callable.md) para ser chamado depois que a conexão tenha sido feita,
mas antes que a requisição seja enviada.
Esta chamável precisa retornar **`CURL_PREREQFUNC_OK`** ou
**`CURL_PREREQFUNC_ABORT`** para permitir ou abortar a requisição.

Adicionada a constante **`CURLOPT_SERVER_RESPONSE_TIMEOUT`**,
que era anteriormente conhecida como **`CURLOPT_FTP_RESPONSE_TIMEOUT`**.
Ambas as constantes contêm o mesmo valor.

Adicionada a constante **`CURLOPT_DEBUGFUNCTION`** como uma opção do cURL que
aceita um [callable](language.types.callable.md) que é chamado durante o tempo de vida da requisição
com o objeto [CurlHandle](class.curlhandle.md),
um inteiro contendo o tipo da mensagem de depuração, e uma string contendo a
mensagem de depuração.
O tipo da mensagem de depuração é uma das seguintes constantes:

- **`CURLINFO_TEXT`**
- **`CURLINFO_HEADER_IN`**
- **`CURLINFO_HEADER_OUT`**
- **`CURLINFO_DATA_IN`**
- **`CURLINFO_DATA_OUT`**
- **`CURLINFO_SSL_DATA_IN`**
- **`CURLINFO_SSL_DATA_OUT`**

Uma vez que esta opção é definida, **`CURLINFO_HEADER_OUT`**
não pode ser definida porque ela usa a mesma funcionalidade da libcurl.

A função [curl\_getinfo()](function.curl-getinfo.md) agora retorna uma chave adicional
`posttransfer_time_us`, contendo o número de
microssegundos desde o início até o último byte ser enviado.
Quando um redirecionamento é seguido, o tempo de cada requisição é adicionado cumulativamente.
Este valor também pode ser recuperado passando
**`CURLINFO_POSTTRANSFER_TIME_T`** para o parâmetro
`option` da função [curl\_getinfo()](function.curl-getinfo.md).
Requer libcurl 8.10.0 ou posterior.

### DOM

Adicionado o espaço de nomes Dom com novas classes como contrapartes
às classes DOM existentes (ex.: [Dom\Node](class.dom-node.md) é a nova
[DOMNode](class.domnode.md)).
Estas classes são compatíveis com HTML 5 e cumprem as especificações WHATWG;
resolvendo problemas antigos na extensão DOM.
As classes DOM antigas continuam disponíveis para compatibilidade com versões anteriores.

Adicionado o método [DOMNode::compareDocumentPosition()](domnode.comparedocumentposition.md)
com suas constantes associadas:

- **`DOMNode::DOCUMENT_POSITION_DISCONNECTED`**
- **`DOMNode::DOCUMENT_POSITION_PRECEDING`**
- **`DOMNode::DOCUMENT_POSITION_FOLLOWING`**
- **`DOMNode::DOCUMENT_POSITION_CONTAINS`**
- **`DOMNode::DOCUMENT_POSITION_CONTAINED_BY`**
- **`DOMNode::DOCUMENT_POSITION_IMPLEMENTATION_SPECIFIC`**

Agora é possível passar qualquer chamável para
[DOMXPath::registerPhpFunctions()](domxpath.registerphpfunctions.md).
Além disso, com [DOMXPath::registerPhpFunctionNs()](domxpath.registerphpfunctionns.md),
agora podem ser registradas funções de retorno que usarão sintaxe de chamada de função nativa
em vez de usar `php:function('name')`.

### Intl

Adicionada a constante **`NumberFormatter::ROUND_HALFODD`** para
complementar a funcionalidade existente da constante
**`NumberFormatter::ROUND_HALFEVEN`**.

### OpenSSL

Adicionado suporte para chaves baseadas em Curve25519 + Curve448.
Especificamente, os campos x25519, ed25519, x448 e ed448 são suportados em
[openssl\_pkey\_new()](function.openssl-pkey-new.md),
[openssl\_pkey\_get\_details()](function.openssl-pkey-get-details.md) e
[openssl\_sign()](function.openssl-sign.md) e
[openssl\_verify()](function.openssl-verify.md) foi estendida para suportar essas chaves.

Implementado o hash de senha PASSWORD\_ARGON2.
Requer OpenSSL 3.2 e compilação NTS do PHP.

### PCRE

A biblioteca integrada pcre2lib foi atualizada para a versão 10.44.
Como consequência, o suporte a LoongArch JIT foi adicionado, espaços
agora são permitidos entre chaves em itens compatíveis com Perl, e
afirmações retroativas de comprimento variável agora são suportadas.

Com a biblioteca pcre2lib versão 10.44, o comprimento máximo de grupos de captura nomeados
foi alterado de `32` para `128`.

Adicionado suporte para o modificador `r` (PCRE2\_EXTRA\_CASELESS\_RESTRICT),
e também para o modificador de modo `(?r)`.
Quando habilitados juntos com o modificador de insensibilidade a maiúsculas/minúsculas (`i`),
a expressão bloqueia a mistura de caracteres ASCII e não ASCII.

### PDO

Adicionado suporte para subclasses de drivers específicos para suportar melhor
as funcionalidades específicas de cada banco de dados.
As novas classes são instanciáveis tanto pela chamada ao método
[PDO::connect()](pdo.connect.md) quanto pela instanciação direta
de uma das subclasses específicas do driver.

Adicionado suporte para analisadores SQL específicos de drivers.
Quando um analisador específico do driver não está disponível, o analisador padrão é usado.
Os analisador padrão suporta:

- literais com aspas simples e duplas, com a duplicação como um mecanismo de escape
- comentários no estilo C não aninhados e comentários de dois hífens

### PDO\_MYSQL

Adicionado suporte a analisador personalizado:

- literais com aspas simples e duplas, com a duplicação e a barra invertida como mecanismos
  de escape
- identificadores de literais com acento grave (`), com a duplicação como mecanismo de escape
- comentários de dois hífens seguidos por pelo menos 1 espaço, comentários no estilo C não aninhados,
  e comentários hash

### PDO\_PGSQL

Adicionado suporte a analisador personalizado:

- literais com aspas simples e duplas, com a duplicação como mecanismo de escape
- strings literais de "escape" no estilo C (`E'string'`)
- strings literais envolvidos por cifrão
- comentários com dois hífens e no estilo C (não aninhados)
- suporte para `??` como sequência de escape para o
  operador `?`

### PDO\_SQLITE

Adicionado suporte a analisador personalizado:

- literais com aspas simples (''), aspas duplas (""), e acentos graves (``), com a duplicação como
  mecanismo de escape
- marcação com colchetes para identificadores
- comentários de dois hífens e comentários no estilo C (não aninhados)

### Phar

Adicionado suporte para a extensão de timestamp Unix para arquivos Zip.

### Readline

Adicionada a capacidade de alteração do caminho de `.php_history` através
da variável de ambiente PHP\_HISTFILE.

### Reflection

[ReflectionAttribute](class.reflectionattribute.md) agora contém uma
propriedade name para melhorar a experiência de depuração.

[ReflectionClassConstant::\_\_toString()](reflectionclassconstant.tostring.md) e
[ReflectionProperty::\_\_toString()](reflectionproperty.tostring.md) agora retornam os
comentários do documento anexado.

Vários novos métodos e constantes relacionados com a funcionalidade de objetos lentos
foram adicionados:

- [ReflectionClass::newLazyGhost()](reflectionclass.newlazyghost.md)
- [ReflectionClass::newLazyProxy()](reflectionclass.newlazyproxy.md)
- [ReflectionClass::resetAsLazyGhost()](reflectionclass.resetaslazyghost.md)
- [ReflectionClass::resetAsLazyProxy()](reflectionclass.resetaslazyproxy.md)
- [ReflectionClass::isUninitializedLazyObject()](reflectionclass.isuninitializedlazyobject.md)
- [ReflectionClass::initializeLazyObject()](reflectionclass.initializelazyobject.md)
- [ReflectionClass::markLazyObjectAsInitialized()](reflectionclass.marklazyobjectasinitialized.md)
- [ReflectionClass::getLazyInitializer()](reflectionclass.getlazyinitializer.md)
- [ReflectionProperty::skipLazyInitialization()](reflectionproperty.skiplazyinitialization.md)
- [ReflectionProperty::setRawValueWithoutLazyInitialization()](reflectionproperty.setrawvaluewithoutlazyinitialization.md)
- **`ReflectionClass::SKIP_INITIALIZATION_ON_SERIALIZE`**
- **`ReflectionClass::SKIP_DESTRUCTOR`**

### SOAP

Adicionado suporte para notação Clark para espaços de nomes no mapa de classes.
Agora é possível especificar entradas em um mapa de classes com notação Clark
para resolver um tipo com um espaço de nomes específico para uma classe específica.
Por exemplo: `'{http://example.com}foo' => 'FooClass'`.

Instâncias de [DateTimeInterface](class.datetimeinterface.md) que são
passadas para `xsd:datetime` ou elementos similares agora são
serializadas como tais ao invés de serem serializadas como uma string vazia.

A persistência de sessão agora funciona com um módulo de sessão compartilhada.

### Standard

Adicionada uma nova enumeração [RoundingMode](enum.roundingmode.md) com nome mais claros
e capacidade de descoberta melhorada quando comparada com as
constantes **`PHP_ROUND_*`**.
Mais ainda, quatro novos modes de arredondamento foram adicionados, que estão disponíveis somente
através da nova enumeração [RoundingMode](enum.roundingmode.md).

### XSL

Agora é possível usar parâmetros que contenham tanto aspas simples quanto aspas
duplas.

Agora é possível passar qualquer chamável para o método
[XSLTProcessor::registerPhpFunctions()](xsltprocessor.registerphpfunctions.md).

Adicionada as propriedades [XSLTProcessor::$maxTemplateDepth](class.xsltprocessor.md#xsltprocessor.props.maxtemplatedepth) e
[XSLTProcessor::$maxTemplateVars](class.xsltprocessor.md#xsltprocessor.props.maxtemplatevars)
para controlar a profundidade de recursão da avaliação de modelo XSL.

### Zip

Adicionada a constante **`ZipArchive::ER_TRUNCATED_ZIP`**,
que foi adicionada na libzip 1.11.

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
