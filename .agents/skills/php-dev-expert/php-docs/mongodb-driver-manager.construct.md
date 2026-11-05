# Cria um novo gerenciador MongoDB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.construct.php

---

# MongoDB\Driver\Manager::\_\_construct

(mongodb >=1.0.0)

MongoDB\Driver\Manager::\_\_construct — Cria um novo gerenciador MongoDB

### Descrição

final public function **MongoDB\Driver\Manager::\_\_construct**([?](language.types.null.md)[string](language.types.string.md) `$uri` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$uriOptions` = **`null`**, [?](language.types.null.md)[array](language.types.array.md) `$driverOptions` = **`null`**)

Constrói um novo objeto [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) com as opções especificadas.

> **Nota**:
>
> De acordo com a [» Especificação de descoberta e monitoramento de servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md#single-threaded-client-construction),
> esse construtor não executa E/S. As conexões serão inicializadas sob demanda,
> quando a primeira operação for executada.

> **Nota**:
>
> Ao especificar qualquer opção de URI SSL ou TLS por meio da string de conexão ou
> do parâmetro `uriOptions`, a extensão habilitará
> implicitamente o TLS para suas conexões. Para evitar isso, a opção
> `tls` deve ser desabilitada explicitamente ou nenhuma opção de TLS deve ser especificada.

> **Nota**:
>
> Em plataformas Unix, a extensão é sensível a scripts que usam a
> chamada de sistema fork() sem chamar também exec(). Os usuários são aconselhados a não
> reusar instâncias de [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) em um
> processo filho bifurcado.

### Parâmetros

`uri`
:   Uma URI de conexão [» mongodb://](https://www.mongodb.com/docs/manual/reference/connection-string/):

    ```
    mongodb://[usuário:senha@]servidor1[:porta1][,servidor2[:porta2],...[,servidorN[:portaN]]][/[BD_autenticacao_padrão][?opções]]
    ```

    O padrão é `"mongodb://127.0.0.1:27017"` se não especificado.

    Para obter detalhes sobre as opções de URI suportadas, consulte
    [» Opções de string de conexão](https://www.mongodb.com/docs/manual/reference/connection-string/#connections-connection-options)
    no manual do MongoDB.
    [» Opções de pool de conexões](https://www.mongodb.com/docs/manual/reference/connection-string/#connection-pool-options)
    não são suportadas, pois a extensão não implementa pools de conexões.

    O `uri` é um URL, portanto, quaisquer caracteres especiais
    em seus componentes precisam ser codificados em URL de acordo com a
    [» RFC 3986](https://datatracker.ietf.org/doc/html/rfc3986). Isto é particularmente
    relevante para o nome de usuário e a senha, que muitas vezes podem incluir caracteres
    especiais como `@`, `:` ou
    `%`. Ao conectar através de um soquete de domínio Unix, o caminho
    do soquete pode conter caracteres especiais, como barras, e deve ser codificado.
    A função [rawurlencode()](function.rawurlencode.md) pode ser usada para codificar
    partes constituintes do URI.

    O componente `defaultAuthDb` pode ser usado para especificar o
    nome do banco de dados associado às credenciais do usuário; entretanto, a
    opção de URI `authSource` terá prioridade se especificada.
    Se nem `defaultAuthDb` nem
    `authSource` forem especificados, o banco de dados `admin`
    será usado por padrão. O componente `defaultAuthDb`
    não tem efeito na ausência de credenciais do usuário.

`uriOptions`
:   [» Opções de string de conexão](https://www.mongodb.com/docs/manual/reference/connection-string/#connections-connection-options)
    adicionais,
    que substituirão quaisquer opções com o mesmo nome no
    parâmetro `uri`.

    **Opções de URI**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | appname | [string](language.types.string.md) | O MongoDB 3.4+ tem a capacidade de anotar conexões com metadados fornecidos pelo cliente conectado. Esses metadados são incluídos nos registros do servidor ao estabelecer uma conexão e também incluídos nos registros de consultas lentas quando a perfilagem do banco de dados está habilitada.  Esta opção pode ser usada para especificar um nome de aplicação, que será incluído nos metadados. O valor não pode exceder 128 caracteres. |
    | authMechanism | [string](language.types.string.md) | O mecanismo de autenticação que o MongoDB usará para autenticar a conexão. Para obter detalhes adicionais e uma lista de valores suportados, consulte [» Opções de autenticação](https://www.mongodb.com/docs/manual/reference/connection-string/#urioption.authMechanism) no manual do MongoDB. |
    | authMechanismProperties | [array](language.types.array.md) | Propriedades do mecanismo de autenticação selecionado. Para obter detalhes adicionais e uma lista de propriedades suportadas, consulte a [» Especificação de autenticação do driver](https://github.com/mongodb/specifications/blob/master/source/auth/auth.rst#auth-related-options).  **Nota**: Quando não especificada na string URI, esta opção é expressa como um array de pares chave/valor. As chaves e valores neste array devem ser strings. |
    | authSource | [string](language.types.string.md) | O nome do banco de dados associado às credenciais do usuário. O padrão é o componente de banco de dados do URI de conexão ou o banco de dados `admin` se ambos não forem especificados.  Para mecanismos de autenticação que delegam o armazenamento de credenciais a outros serviços (por exemplo, GSSAPI), deve ser `"$external"`. |
    | compressors | [string](language.types.string.md) | Uma lista priorizada e delimitada por vírgulas de compressores que o cliente deseja usar. As mensagens só serão compactadas se o cliente e o servidor compartilharem algum compressor em comum, e o compressor usado em cada direção dependerá da configuração individual do servidor ou driver. Consulte a [» Especificação de compactação do driver](https://github.com/mongodb/specifications/blob/master/source/compression/OP_COMPRESSED.rst#compressors) para obter mais informações. |
    | connectTimeoutMS | [int](language.types.integer.md) | O tempo em milissegundos para tentar uma conexão antes de atingir o tempo limite. O padrão é 10000 milissegundos. |
    | directConnection | [bool](language.types.boolean.md) | Esta opção pode ser usada para controlar o comportamento de descoberta do conjunto de réplicas quando apenas um único servidor é fornecido na string de conexão. Por padrão, fornecer um único membro na string de conexão estabelecerá uma conexão direta ou descobrirá membros adicionais dependendo se a opção de URI `"replicaSet"` estiver omitida ou presente, respectivamente. Especifique **`false`** para forçar a ocorrência da descoberta (se `"replicaSet"` for omitido) ou especifique **`true`** para forçar uma conexão direta (se `"replicaSet"` estiver presente). |
    | enableOverloadRetargeting | [bool](language.types.boolean.md) | Quando definido para **`true`**, força a seleção do servidor após um `SystemOverloadedError`. O padrão é **`false`**. |
    | heartbeatFrequencyMS | [int](language.types.integer.md) | Especifica o intervalo em milissegundos entre as verificações do driver da topologia MongoDB, contado do final da verificação anterior até o início da próxima. O padrão é 60000 milissegundos.  Pela [» Especificação de descoberta e monitoramento de servidor](https://github.com/mongodb/specifications/blob/master/source/server-discovery-and-monitoring/server-discovery-and-monitoring.md#heartbeatfrequencyms), esse valor não pode ser inferior a 500 milissegundos. |
    | journal | [bool](language.types.boolean.md) | Corresponde ao parâmetro `journal` da preocupação de gravação padrão. Se for igual a **`true`**, as gravações exigirão o reconhecimento do MongoDB de que a operação foi gravada no diário. Para obter detalhes, consulte [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
    | loadBalanced | [bool](language.types.boolean.md) | Especifica se o driver está se conectando a um cluster MongoDB por meio de um balanceador de carga. Se for igual a **`true`**, o driver só pode se conectar a um único servidor (especificado pela string de conexão ou pela pesquisa SRV), a opção de URI `"directConnection"` não pode ser **`true`**, e a opção `"replicaSet"` do URI deve ser omitida. O padrão é **`false`**. |
    | localThresholdMS | [int](language.types.integer.md) | O tamanho em milissegundos da janela de latência para selecionar entre várias instâncias adequadas do MongoDB ao resolver uma preferência de leitura. O padrão é 15 milissegundos. |
    | maxAdaptiveRetries | [int](language.types.integer.md) | Esta opção pode ser usada para alterar o número máximo de novas tentativas quando um `SystemOverloadedError` ocorre. Precisa ser um inteiro positivo; o padrão é `2`. |
    | maxStalenessSeconds | [int](language.types.integer.md) | Corresponde ao `"maxStalenessSeconds"` da preferência de leitura. Especifica, em segundos, o quão inativo um secundário pode ficar antes que o cliente pare de usá-lo para operações de leitura. Por padrão, não há inatividade máxima e os clientes não considerarão o atraso do secundário ao escolher para onde direcionar uma operação de leitura. Para obter detalhes, consulte [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md).  Se especificada, a inatividade máxima deve ser um número inteiro com sinal de 32 bits maior ou igual a **`MongoDB\Driver\ReadPreference::SMALLEST_MAX_STALENESS_SECONDS`** (ou seja, 90 segundos). |
    | password | [string](language.types.string.md) | A senha do usuário que está sendo autenticado. Esta opção é útil se a senha contiver caracteres especiais, que de outra forma precisariam ser codificados em URL para o URI de conexão. |
    | readConcernLevel | [string](language.types.string.md) | Corresponde ao parâmetro `level` da preocupação de leitura. Especifica o nível de isolamento de leitura. Para obter detalhes, consulte [MongoDB\Driver\ReadConcern](class.mongodb-driver-readconcern.md). |
    | readPreference | [string](language.types.string.md) | Corresponde ao parâmetro `mode` da preferência de leitura. O padrão é `"primary"`. Para obter detalhes, consulte [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md). |
    | readPreferenceTags | [array](language.types.array.md) | Corresponde ao parâmetro `tagSets` da preferência de leitura. Os conjuntos de etiquetas permitem direcionar operações de leitura para membros específicos de um conjunto de réplicas. Para obter detalhes, consulte [MongoDB\Driver\ReadPreference](class.mongodb-driver-readpreference.md).  **Nota**: Quando não especificada na string URI, esta opção é expressa como um array consistente com o formato esperado por [MongoDB\Driver\ReadPreference::\_\_construct()](mongodb-driver-readpreference.construct.md). |
    | replicaSet | [string](language.types.string.md) | Especifica o nome do conjunto de réplicas. |
    | retryReads | [bool](language.types.boolean.md) | Especifica se o driver deve ou não repetir automaticamente determinadas operações de leitura que falham devido a erros transitórios de rede ou eleições de conjunto de réplicas. Esta funcionalidade requer o MongoDB 3.6+. O padrão é **`true`**.  Consulte a [» Especificação de leituras repetíveis](https://github.com/mongodb/specifications/blob/master/source/retryable-reads/retryable-reads.rst) para mais informações. |
    | retryWrites | [bool](language.types.boolean.md) | Especifica se o driver deve ou não repetir automaticamente determinadas operações de gravação que falham devido a erros transitórios de rede ou eleições de conjunto de réplicas. Esta funcionalidade requer o MongoDB 3.6+. O padrão é **`true`**.  Consulte [» Gravações Repetíveis](https://www.mongodb.com/docs/manual/core/retryable-writes/) no manual do MongoDB para obter mais informações. |
    | serverSelectionTimeoutMS | [int](language.types.integer.md) | Especifica quanto tempo, em milissegundos, deve-se bloquear para seleção de servidor antes de lançar uma exceção. O padrão é 30000 milissegundos. |
    | serverSelectionTryOnce | [bool](language.types.boolean.md) | Quando **`true`**, instrui o driver a verificar a implantação do MongoDB exatamente uma vez após a falha na seleção do servidor e, em seguida, selecionar um servidor ou gerar um erro. Quando **`false`**, o driver bloqueia e procura um servidor até o valor `"serverSelectionTimeoutMS"`. O padrão é **`true`**. |
    | socketCheckIntervalMS | [int](language.types.integer.md) | Se um soquete não tiver sido usado recentemente, o driver precisará verificá-lo através do comando `hello` antes de usá-lo para qualquer operação. O padrão é 5000 milissegundos. |
    | socketTimeoutMS | [int](language.types.integer.md) | O tempo em milissegundos para tentar enviar ou receber em um soquete antes de atingir o tempo limite. O padrão é 300000 milissegundos (ou seja, cinco minutos). |
    | srvMaxHosts | [int](language.types.integer.md) | O número máximo de resultados de SRV a serem selecionados aleatoriamente ao preencher inicialmente a lista de valores iniciais ou, durante a sondagem de SRV, ao incluir novos servidores na topologia. O padrão é `0` (ou seja, sem máximo). |
    | srvServiceName | [string](language.types.string.md) | O nome do serviço a ser usado para consulta de SRV na descoberta inicial da lista de valores iniciais de DNS e na sondagem de SRV. O padrão é `"mongodb"`. |
    | tls | [bool](language.types.boolean.md) | Inicia a conexão com TLS/SSL se for igual a **`true`**. O padrão é **`false`**. |
    | tlsAllowInvalidCertificates | [bool](language.types.boolean.md) | Especifica se o driver deve ou não apresentar erro quando o certificado TLS do servidor for inválido. O padrão é **`false`**.  **Aviso** Desabilitar a validação de certificado cria uma vulnerabilidade. |
    | tlsAllowInvalidHostnames | [bool](language.types.boolean.md) | Especifica se o driver deve ou não apresentar erro quando há uma incompatibilidade entre o nome do host do servidor e o nome do host especificado pelo certificado TLS. O padrão é **`false`**.  **Aviso** Desabilitar a validação de certificado cria uma vulnerabilidade. Permitir nomes de servidores inválidos pode expor o driver a um [» ataque MITM](https://en.wikipedia.org/wiki/Man-in-the-middle_attack). |
    | tlsCAFile | [string](language.types.string.md) | Caminho para arquivo com uma única autoridade de certificação ou um pacote de autoridades de certificação a ser considerado confiável ao fazer uma conexão TLS. O armazenamento de certificados do sistema será usado por padrão. |
    | tlsCertificateKeyFile | [string](language.types.string.md) | Caminho para o arquivo de certificado do cliente ou arquivo de chave privada do cliente; caso ambos sejam necessários, os arquivos deverão ser concatenados. |
    | tlsCertificateKeyFilePassword | [string](language.types.string.md) | Senha para descriptografar a chave privada do cliente (ou seja, opção de URI `"tlsCertificateKeyFile"`) a ser usada para conexões TLS. |
    | tlsDisableCertificateRevocationCheck | [bool](language.types.boolean.md) | Se **`true`**, o driver não tentará verificar o status de revogação do certificado (por exemplo, OCSP, CRL). O padrão é **`false`**. |
    | tlsDisableOCSPEndpointCheck | [bool](language.types.boolean.md) | Se **`true`**, o driver não tentará contactar um ponto de extremidade de um respondedor OCSP, se necessário (ou seja, uma resposta OCSP não é grampeada). O padrão é **`false`**. |
    | tlsInsecure | [bool](language.types.boolean.md) | Relaxa as restrições de TLS tanto quanto possível. Especificar **`true`** para esta opção tem o mesmo efeito que especificar **`true`** para as opções de URI `"tlsAllowInvalidCertificates"` e `"tlsAllowInvalidHostnames"`. O padrão é **`false`**.  **Aviso** Desabilitar a validação de certificado cria uma vulnerabilidade. Permitir nomes de servidores inválidos pode expor o driver a um [» ataque MITM](https://en.wikipedia.org/wiki/Man-in-the-middle_attack). |
    | username | [string](language.types.string.md) | O nome do usuário que está sendo autenticado. Esta opção é útil se o nome de usuário contiver caracteres especiais, que de outra forma precisariam ser codificados em URL para o URI de conexão. |
    | w | [int](language.types.integer.md)|[string](language.types.string.md) | Corresponde ao parâmetro `w` da preocupação de gravação padrão. Para obter detalhes, consulte [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md). |
    | wTimeoutMS | [int](language.types.integer.md)|[string](language.types.string.md) | Corresponde ao parâmetro `wtimeout` da preocupação de gravação padrão. Especifica um limite de tempo, em milissegundos, para a preocupação de gravação. Para obter detalhes, consulte [MongoDB\Driver\WriteConcern](class.mongodb-driver-writeconcern.md).  Se especificado, `wTimeoutMS` deve ser um número inteiro de 32 bits sem sinal maior ou igual a zero. |
    | zlibCompressionLevel | [int](language.types.integer.md) | Especifica o nível de compactação a ser usado para o compressor zlib. Esta opção não tem efeito se `zlib` não estiver incluído na opção URI `"compressors"`. Consulte a [» Especificação de Compactação de Driver](https://github.com/mongodb/specifications/blob/master/source/compression/OP_COMPRESSED.rst#zlibcompressionlevel) para obter mais informações. |

`driverOptions`
:   **Opções do Driver**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | autoEncryption | [array](language.types.array.md) | Fornece opções para ativar a criptografia automática em nível de campo do lado do cliente. A lista de opções está descrita na [tabela abaixo](mongodb-driver-manager.construct.md#mongodb-driver-manager.construct-autoencryption).  **Nota**: A criptografia automática é um recurso exclusivo da versão Enterprise que se aplica apenas a operações em uma coleção. A criptografia automática não é suportada para operações em um banco de dados ou visualização, e as operações que não são ignoradas resultarão em erro (consulte [» libmongocrypt: lista de permissões de criptografia automática](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.md#libmongocrypt-auto-encryption-allow-list)). Para ignorar a criptografia automática para todas as operações, `bypassAutoEncryption` deve ser definido como **`true`**.  A criptografia automática exige que o usuário autenticado tenha a ação de privilégio [» listCollections](https://www.mongodb.com/docs/manual/reference/command/listCollections/#required-access).  A criptografia/descriptografia explícita e a descriptografia automática são um recurso da versão Community. O driver ainda pode descriptografar automaticamente quando `bypassAutoEncryption` for igual a **`true`**. |
    | ca\_dir | [string](language.types.string.md) | Caminho para um diretório de certificado com hash correto. O armazenamento de certificados do sistema será usado por padrão. |
    | crl\_file | [string](language.types.string.md) | Caminho para um arquivo de lista de certificados revogados. |
    | disableClientPersistence | [bool](language.types.boolean.md) | Se **`true`**, este gerenciador usará um novo cliente libmongoc, que não será persistido ou compartilhado com outros objetos do gerenciador. Quando este objeto de gerenciador for liberado, seu cliente será destruído e todas as conexões serão fechadas. O padrão é **`false`**.  **Nota**: Geralmente, desabilitar a persistência do cliente não é recomendado. |
    | driver | [array](language.types.array.md) | Permite que uma biblioteca de nível superior anexe seus próprios metadados ao "handshake" com o servidor. Por padrão, a extensão envia seu próprio nome, versão e plataforma (ou seja, versão PHP) nesta comunicação inicial. Strings podem ser especificadas para as chaves `"name"`, `"version"` e `"platform"` deste array e serão anexadas ao respectivos campos no documento de "handshake".  **Nota**: As informações de "handshake" são limitadas a 512 bytes. A extensão truncará os dados do "handshake" para caber nesta sequência de 512 bytes. Bibliotecas de nível superior são encorajadas a manter seus próprios metadados concisos. |
    | serverApi | [MongoDB\Driver\ServerApi](class.mongodb-driver-serverapi.md) | Esta opção é usada para declarar uma versão da API do servidor para o gerenciador. Se omitida, nenhuma versão da API será declarada. |

    Opções suportadas pela criptografia automática através da opção `autoEncryption` do driver:

    **Opções para criptografia automática**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | keyVaultClient | [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) | O Manager usado para rotear consultas de chave de dados para um cluster MongoDB separado. Por padrão, o Manager e o cluster atuais são usados. |
    | keyVaultNamespace | [string](language.types.string.md) | Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`) denotando a coleção que contém todas as chaves de dados usadas para criptografia e descriptografia. Esta opção é obrigatória. |
    | kmsProviders | [array](language.types.array.md) | Um documento contendo a configuração de um ou mais provedores KMS, que são usados para criptografar chaves de dados. Os provedores compatíveis incluem `"aws"`, `"azure"`, `"gcp"`, `"kmip"` e `"local"` e pelo menos um deve ser especificado.  Se um documento vazio for especificado para `"aws"`, `"azure"`, ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials).  O formato para `"aws"` é o seguinte:  ``` aws: {     accessKeyId: <string>,     secretAccessKey: <string>,     sessionToken: <string opcional> } ```  O formato para `"azure"` é o seguinte:  ``` azure: {     tenantId: <string>,     clientId: <string>,     clientSecret: <string>,     identityPlatformEndpoint: <string opcional> // O padrão é "login.microsoftonline.com" } ```  O formato para `"gcp"` é o seguinte:  ``` gcp: {     email: <string>,     privateKey: <string base64>|<MongoDB\BSON\Binary>,     endpoint: <string opcional> // O padrão é "oauth2.googleapis.com" } ```  O formato para `"kmip"` é o seguinte:  ``` kmip: {     endpoint: <string> } ```  O formato para `"local"` é o seguinte:  ``` local: {     // Chave mestra de 96 bytes usada para criptografar/descriptografar chaves de dados     key: <string base64>|<MongoDB\BSON\Binary> } ``` |
    | tlsOptions | [array](language.types.array.md) | Um documento contendo a configuração TLS para um ou mais provedores KMS. Os provedores suportados incluem `"aws"`, `"azure"`, `"gcp"` e `"kmip"`. Todos os provedores suportam as seguintes opções:  ``` <provider>: {     tlsCaFile: <string opcional>,     tlsCertificateKeyFile: <string opcional>,     tlsCertificateKeyFilePassword: <string opcional>,     tlsDisableOCSPEndpointCheck: <booleano opcional> } ``` |
    | schemaMap | [array](language.types.array.md)|[object](language.types.object.md) | Mapa de espaços de nomes de coleção para um esquema JSON local. Isso é usado para configurar a criptografia automática. Consulte [» Regras de criptografia automática](https://www.mongodb.com/docs/manual/reference/security-client-side-automatic-json-schema/) no manual do MongoDB para obter mais informações. É um erro especificar uma coleção em `schemaMap` e em `encryptedFieldsMap` ao mesmo tempo.  **Nota**: Fornecer um `schemaMap` oferece mais segurança do que confiar em esquemas JSON obtidos do servidor. Ele protege contra um servidor malicioso que anuncia um esquema JSON falso, que poderia induzir o cliente a enviar dados não criptografados que deveriam estar criptografados.  **Nota**: Os esquemas fornecidos no `schemaMap` aplicam-se apenas à configuração da criptografia automática para criptografia do lado do cliente. Outras regras de validação no esquema JSON não serão aplicadas pelo driver e resultarão em erro. |
    | bypassAutoEncryption | [bool](language.types.boolean.md) | Se **`true`**, `mongocryptd` não será executado automaticamente. Isso é usado para desativar a criptografia automática. O padrão é **`false`**. |
    | bypassQueryAnalysis | [bool](language.types.boolean.md) | Se **`true`**, a análise automática dos comandos enviados será desativada e o `mongocryptd` não será executado automaticamente. Isso permite o caso de uso de criptografia explícita para consultar campos indexados sem exigir a biblioteca `crypt_shared` licenciada pela versão Enterprise ou o processo `mongocryptd`. O padrão é **`false`**. |
    | encryptedFieldsMap | [array](language.types.array.md)|[object](language.types.object.md) | Mapa de espaçoes de nomes de coleção para um documento `encryptedFields`. Isso é usado para configurar a criptografia consultável. Consulte [» Criptografia de campo e consultabilidade](https://www.mongodb.com/docs/manual/core/queryable-encryption/fundamentals/encrypt-and-query/) no manual do MongoDB para obter mais informações. É um erro especificar uma coleção em `encryptedFieldsMap` e em `schemaMap` ao mesmo tempo.  **Nota**: Fornecer um `encryptedFieldsMap` fornece mais segurança do que confiar em um `encryptedFields` obtido do servidor. Ele protege contra um servidor malicioso que anuncia um `encryptedFields` falso. |
    | extraOptions | [array](language.types.array.md) | As `extraOptions` estão relacionadas ao processo `mongocryptd`. As seguintes opções são suportadas:  - `mongocryptdURI` ([string](language.types.string.md)): URI para conectar-se a um processo `mongocryptd` existente. O padrão é `"mongodb://localhost:27020"`. - `mongocryptdBypassSpawn` ([bool](language.types.boolean.md)): Se **`true`**, evita que o driver execute o `mongocryptd`. O padrão é **`false`**. - `mongocryptdSpawnPath` ([string](language.types.string.md)): Caminho absoluto para procurar o binário `mongocryptd`. O padrão é uma string vazia e consulta os caminhos do sistema. - `mongocryptdSpawnArgs` ([array](language.types.array.md)): Array de argumentos de string para passar para `mongocryptd` durante a execução. O padrão é `["--idleShutdownTimeoutSecs=60"]`. - `cryptSharedLibPath` ([string](language.types.string.md)): Caminho absoluto para a biblioteca compartilhada `crypt_shared`. O padrão é uma string vazia e consulta os caminhos do sistema. - `cryptSharedLibRequired` ([bool](language.types.boolean.md)): Se **`true`**, exige que o driver carregue `crypt_shared`. O padrão é **`false`**.  Consulte a [» Especificação de criptografia do lado do cliente](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#extraoptions) para obter mais informações. |

    > **Nota**:
    >
    > A criptografia automática é um recurso exclusivo da versão "enterprise" que se aplica
    > apenas a operações em uma coleção. A criptografia automática não é
    > suportada para operações em um banco de dados ou visualização, e as operações que
    > não são ignoradas resultarão em erro. Para ignorar a criptografia
    > automática para todas as operações, defina `bypassAutoEncryption=true`
    > em `autoEncryption`. Para obter mais informações sobre
    > operações permitidas, consulte
    > [» Especificação de criptografia do lado do cliente](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#libmongocrypt-auto-encryption-whitelist).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se o formato de `uri` for inválido

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 2.0.0 | A opção de URI `"canonicalizeHostname"` foi removida. Em vez disso, use a propriedade `"CANONICALIZE_HOST_NAME"` da opção de URI `"authMechanismProperties"`.  A opção de URI `"gssapiServiceName"` foi removida. Em vez disso, use a propriedade `"SERVICE_NAME"` da opção de URI `"authMechanismProperties"`.  A opção de URI `"safe"` foi removida. Use as opções de URI `"w"` e `"wTimeoutMS"`.  A opção de URI `"ssl"` foi removida. Em vez disso, use a opção de URI `"tls"`.  A opção de driver `"allow_invalid_hostname"` foi removida. Em vez disso, use a opção de URI `"tlsAllowInvalidHostnames"`.  A opção de driver `"ca_file"` foi removida. Em vez disso, use a opção de URI `"tlsCAFile"`.  A opção de driver `"context"` foi removida. Todas as opções de contexto foram descontinuadas em favor das diversas opções de URI relacionadas ao TLS.  A opção de driver `"pem_file"` foi removida. Em vez disso, use a opção de URI `"tlsCertificateKeyFile"`.  A opção de driver `"pem_pwd"` foi removida. Em vez disso, use a opção de URI `"tlsCertificateKeyFilePassword"`.  A opção de driver `"weak_cert_validation"` foi removida. Em vez disso, use a opção de URI `"tlsAllowInvalidCertificates"`. |
| PECL mongodb 1.16.0 | O provedor AWS KMS para criptografia do lado do cliente agora aceita uma opção `"sessionToken"`, que pode ser usada para autenticação com credenciais temporárias da AWS.  Adicionada a opção `"tlsDisableOCSPEndpointCheck"` para o campo `"tlsOptions"` da opção `"autoEncryption"` do driver.  Se um documento vazio for especificado para o provedor KMS `"azure"` ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |
| PECL mongodb 1.15.0 | Se um documento vazio for especificado para o provedor KMS `"aws"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |
| PECL mongodb 1.14.0 | Adicionadas as opções de criptografia automática `"bypassQueryAnalysis"` e `"encryptedFieldsMap"`. Opções adicionais pertencentes a `crypt_shared` agora são suportadas na opção de criptografia automática `"extraOptions"`. |
| PECL mongodb 1.13.0 | Adicionadas as opções de URI `"srvMaxHosts"` e `"srvServiceName"`. |
| PECL mongodb 1.12.0 | KMIP agora é suportado como um provedor KMS para criptografia do lado do cliente e pode ser configurado no campo `"kmsProviders"` da opção de driver `"autoEncryption"`. Além disso, as opções de TLS para provedores KMS agora podem ser configuradas no campo `"tlsOptions"` da opção do driver `"autoEncryption"`. |
| PECL mongodb 1.11.0 | Adicionada a opção de URI `"loadBalanced"`. |
| PECL mongodb 1.10.0 | Adicionada a opção de driver `"disableClientPersistence"`.  Azure e GCP agora são suportados como provedores KMS para criptografia do lado do cliente e podem ser configurados no campo `"kmsProviders"` da opção de driver `"autoEncryption"`. Strings codificadas em Base64 agora são aceitas como uma alternativa ao [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) para opções dentro de `"kmsProviders"`. |
| PECL mongodb 1.8.0 | Adicionadas as opções de URI `"directConnection"`, `"tlsDisableCertificateRevocationCheck"` e `"tlsDisableOCSPEndpointCheck"`.  Adicionada a opção de driver `"driver"`. |
| PECL mongodb 1.7.0 | Adicionada a opção de driver `"autoEncryption"`.  Especificar qualquer opção SSL ou TLS por meio do parâmetro `driverOptions` agora ativará implicitamente o TLS, como é feito para as opções de URI correspondentes. |
| PECL mongodb 1.6.0 | Adicionadas as opções de URI `"retryReads"`, `"tls"`, `"tlsAllowInvalidCertificates"`, `"tlsAllowInvalidHostnames"`, `"tlsCAFile"`, `"tlsCertificateKeyFile"`, `"tlsCertificateKeyFilePassword"` e `"tlsInsecure"`.  A opção de URI `"retryWrites"` tem como padrão **`true`**.  Especificar qualquer opção de URI SSL ou TLS por meio da string de conexão ou do parâmetro `uriOptions` agora ativará implicitamente o TLS, a menos que `ssl` ou `tls` seja **`false`**. O TLS *não* está implicitamente habilitado para nenhuma opção no parâmetro `driverOptions`, que permanece inalterado em relação às versões anteriores. |
| PECL mongodb 1.5.0 | `"wtimeoutMS"` agora é sempre validado e aplicado à preocupação de gravação. Anteriormente, a opção era ignorada se `"w"` fosse <= 1, pois o tempo limite só se aplica à replicação. |
| PECL mongodb 1.4.0 | Adicionadas as opções de URI `"compressors"`, `"retryWrites"` e `"zlibCompressionLevel"`. |
| PECL mongodb 1.3.0 | O parâmetro `uriOptions` agora aceita as opções `"authMechanism"` e `"authMechanismProperties"`. Anteriormente, estas opções eram suportadas somente no parâmetro `uri`. |
| PECL mongodb 1.2.0 | O padrão para o parâmetro `uri` passa a ser `"mongodb://127.0.0.1/"`. A porta padrão permanece `27017`.  Adicionada a opção de URI `"appname"`.  Adicionadas as opções de driver `"allow_invalid_hostname"`, `"ca_file"`, `"ca_dir"`, `"clr_file"`, `"pem_file"`, `"pem_pwd"` e `"weak_cert_validation"`.  A API de Fluxos do PHP não é mais usada para comunicação de soquete. A opção de URI `"connectTimeoutMS"` agora tem como padrão 10 segundos em vez de [default\_socket\_timeout](filesystem.configuration.md#ini.default-socket-timeout) nas versões anteriores. Além disso, a extensão não suporta mais todas as [opções de contexto SSL](context.ssl.md) através da opção de driver `"context"`. |
| PECL mongodb 1.1.0 | O parâmetro `uri` passa a ser opcional com o padrão de `"mongodb://localhost:27017/"`. |

### Examples

**Exemplo #1 Exemplos básicos de **MongoDB\Driver\Manager::\_\_construct()****

Conexão a um nó independente do MongoDB:

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://example.com:27017");

?>
```

Conectando-se ao nó independente do MongoDB por meio de um soquete de domínio Unix. O caminho
do soquete pode incluir caracteres especiais como barras e deve ser codificado
com [rawurlencode()](function.rawurlencode.md).

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://" . rawurlencode("/tmp/mongodb-27017.sock"));

?>
```

Conectando-se a um conjunto de réplicas:

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://rs1.example.com,rs2.example.com/?replicaSet=myReplicaSet");

?>
```

Conectando-se a um cluster fragmentado (ou seja, uma ou mais instâncias do mongos):

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://mongos1.example.com,mongos2.example.com/");

?>
```

Conectando-se ao MongoDB com credenciais de autenticação para um usuário e banco de dados específicos:

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://meuUsuario:minhaSenha@example.com/?authSource=nomeBancoDeDados");

?>
```

Conectando-se ao MongoDB com credenciais de autenticação para um usuário e
banco de dados específicos, onde o nome de usuário ou senha inclui caracteres
especiais (por exemplo, `@`, `:`,
`%`). No exemplo a seguir, a string de senha
`myp@ss:w%rd` foi escapada manualmente; entretanto,
[rawurlencode()](function.rawurlencode.md) também pode ser usado para escapar componentes URI
que podem conter caracteres especiais.

```
<?php

$manager = new MongoDB\Driver\Manager("mongodb://meuUsuario:myp%40ss%3Aw%25rd@example.com/?authSource=nomeBancoDeDados");

?>
```

Conectando-se ao MongoDB com autenticação X509:

```
<?php

$manager = new MongoDB\Driver\Manager(
    "mongodb://example.com/?ssl=true&authMechanism=MONGODB-X509",
    [],
    [
        "pem_file" => "/caminho/para/cliente.pem",
    ]
);
?>
```

### Veja também

- [Manipulação de conexão e persistência](mongodb.connection-handling.md)
- [» Formato de string de conexão MongoDB](https://www.mongodb.com/docs/manual/reference/connection-string/)

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
