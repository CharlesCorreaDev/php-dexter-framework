# Cria um novo objeto ClientEncryption

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-manager.createclientencryption.php

---

# MongoDB\Driver\Manager::createClientEncryption

(mongodb >=1.7.0)

MongoDB\Driver\Manager::createClientEncryption — Cria um novo objeto ClientEncryption

### Descrição

final public function **MongoDB\Driver\Manager::createClientEncryption**([array](language.types.array.md) `$options`): [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md)

Constrói um novo objeto [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md) com as opções especificadas.

### Parâmetros

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | keyVaultClient | [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) | O Manager usado para rotear consultas de chave de dados para um cluster MongoDB separado. Por padrão, o Manager e o cluster atuais são usados. |
    | keyVaultNamespace | [string](language.types.string.md) | Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`) denotando a coleção que contém todas as chaves de dados usadas para criptografia e descriptografia. Esta opção é obrigatória. |
    | kmsProviders | [array](language.types.array.md) | Um documento contendo a configuração de um ou mais provedores KMS, que são usados para criptografar chaves de dados. Os provedores compatíveis incluem `"aws"`, `"azure"`, `"gcp"`, `"kmip"` e `"local"` e pelo menos um deve ser especificado.  Se um documento vazio for especificado para `"aws"`, `"azure"`, ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials).  O formato para `"aws"` é o seguinte:  ``` aws: {     accessKeyId: <string>,     secretAccessKey: <string>,     sessionToken: <string opcional> } ```  O formato para `"azure"` é o seguinte:  ``` azure: {     tenantId: <string>,     clientId: <string>,     clientSecret: <string>,     identityPlatformEndpoint: <string opcional> // O padrão é "login.microsoftonline.com" } ```  O formato para `"gcp"` é o seguinte:  ``` gcp: {     email: <string>,     privateKey: <string base64>|<MongoDB\BSON\Binary>,     endpoint: <string opcional> // O padrão é "oauth2.googleapis.com" } ```  O formato para `"kmip"` é o seguinte:  ``` kmip: {     endpoint: <string> } ```  O formato para `"local"` é o seguinte:  ``` local: {     // Chave mestra de 96 bytes usada para criptografar/descriptografar chaves de dados     key: <string base64>|<MongoDB\BSON\Binary> } ``` |
    | tlsOptions | [array](language.types.array.md) | Um documento contendo a configuração TLS para um ou mais provedores KMS. Os provedores suportados incluem `"aws"`, `"azure"`, `"gcp"` e `"kmip"`. Todos os provedores suportam as seguintes opções:  ``` <provider>: {     tlsCaFile: <string opcional>,     tlsCertificateKeyFile: <string opcional>,     tlsCertificateKeyFilePassword: <string opcional>,     tlsDisableOCSPEndpointCheck: <booleano opcional> } ``` |

### Valor Retornado

Retorna uma nova instância de [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a extensão foi compilada sem suporte libmongocrypt

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.16.0 | O provedor AWS KMS para criptografia do lado do cliente agora aceita uma opção `"sessionToken"`, que pode ser usada para autenticação com credenciais temporárias da AWS.  Adicionado `"tlsDisableOCSPEndpointCheck"` à opção `"tlsOptions"`.  Se um documento vazio for especificado para o provedor KMS `"azure"` ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |
| PECL mongodb 1.15.0 | Se um documento vazio for especificado para o provedor KMS `"aws"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |
| PECL mongodb 1.12.0 | O KMIP agora é suportado como um provedor KMS para criptografia do lado do cliente e pode ser configurado na opção `"kmsProviders"`.  Adicionada a opção `"tlsOptions"`. |
| PECL mongodb 1.10.0 | O Azure e o GCP agora são suportados como provedores KMS para criptografia do lado do cliente e podem ser configurados na opção `"kmsProviders"`. Strings codificadas em Base64 agora são aceitas como uma alternativa ao [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) para opções dentro de `"kmsProviders"`. |

### Veja também

- [MongoDB\Driver\ClientEncryption::\_\_construct()](mongodb-driver-clientencryption.construct.md) - Cria um novo objeto ClientEncryption
- [» Criptografia explícita (manual) em nível de campo do lado do cliente](https://www.mongodb.com/docs/manual/core/security-explicit-client-side-encryption/) no manual do MongoDB

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
