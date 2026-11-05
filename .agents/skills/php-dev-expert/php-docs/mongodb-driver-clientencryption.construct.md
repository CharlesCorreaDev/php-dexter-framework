# Cria um novo objeto ClientEncryption

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.construct.php

---

# MongoDB\Driver\ClientEncryption::\_\_construct

(mongodb >=1.14.0)

MongoDB\Driver\ClientEncryption::\_\_construct — Cria um novo objeto ClientEncryption

### Descrição

final public function **MongoDB\Driver\ClientEncryption::\_\_construct**([array](language.types.array.md) `$options`)

Constrói um novo objeto [MongoDB\Driver\ClientEncryption](class.mongodb-driver-clientencryption.md) com as opções especificadas.

### Parâmetros

`options`
:   **Opções**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | keyVaultClient | [MongoDB\Driver\Manager](class.mongodb-driver-manager.md) | O gerenciador usado para rotear consultas de chave de dados. Esta opção é obrigatória (diferentemente de [MongoDB\Driver\Manager::createClientEncryption()](mongodb-driver-manager.createclientencryption.md)). |
    | keyVaultNamespace | [string](language.types.string.md) | Um namespace totalmente qualificado (por exemplo, `"nomeDoBancoDados.nomeDaColecao"`) denotando a coleção que contém todas as chaves de dados usadas para criptografia e descriptografia. Esta opção é obrigatória. |
    | kmsProviders | [array](language.types.array.md) | Um documento contendo a configuração de um ou mais provedores KMS, que são usados para criptografar chaves de dados. Os provedores compatíveis incluem `"aws"`, `"azure"`, `"gcp"`, `"kmip"` e `"local"` e pelo menos um deve ser especificado.  Se um documento vazio for especificado para `"aws"`, `"azure"`, ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials).  O formato para `"aws"` é o seguinte:  ``` aws: {     accessKeyId: <string>,     secretAccessKey: <string>,     sessionToken: <string opcional> } ```  O formato para `"azure"` é o seguinte:  ``` azure: {     tenantId: <string>,     clientId: <string>,     clientSecret: <string>,     identityPlatformEndpoint: <string opcional> // O padrão é "login.microsoftonline.com" } ```  O formato para `"gcp"` é o seguinte:  ``` gcp: {     email: <string>,     privateKey: <string base64>|<MongoDB\BSON\Binary>,     endpoint: <string opcional> // O padrão é "oauth2.googleapis.com" } ```  O formato para `"kmip"` é o seguinte:  ``` kmip: {     endpoint: <string> } ```  O formato para `"local"` é o seguinte:  ``` local: {     // Chave mestra de 96 bytes usada para criptografar/descriptografar chaves de dados     key: <string base64>|<MongoDB\BSON\Binary> } ``` |
    | tlsOptions | [array](language.types.array.md) | Um documento contendo a configuração TLS para um ou mais provedores KMS. Os provedores suportados incluem `"aws"`, `"azure"`, `"gcp"` e `"kmip"`. Todos os provedores suportam as seguintes opções:  ``` <provider>: {     tlsCaFile: <string opcional>,     tlsCertificateKeyFile: <string opcional>,     tlsCertificateKeyFilePassword: <string opcional>,     tlsDisableOCSPEndpointCheck: <booleano opcional> } ``` |

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) se a extensão foi compilada sem suporte libmongocrypt

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.16.0 | O provedor AWS KMS para criptografia do lado do cliente agora aceita uma opção `"sessionToken"`, que pode ser usada para autenticação com credenciais temporárias da AWS.  Adicionado `"tlsDisableOCSPEndpointCheck"` à opção `"tlsOptions"`.  Se um documento vazio for especificado para o provedor KMS `"azure"` ou `"gcp"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |
| PECL mongodb 1.15.0 | Se um documento vazio for especificado para o provedor KMS `"aws"`, o driver tentará configurar o provedor usando [» Credenciais Automáticas](https://github.com/mongodb/specifications/blob/master/source/client-side-encryption/client-side-encryption.rst#automatic-credentials). |

### Veja também

- [MongoDB\Driver\Manager::createClientEncryption()](mongodb-driver-manager.createclientencryption.md) - Cria um novo objeto ClientEncryption
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
