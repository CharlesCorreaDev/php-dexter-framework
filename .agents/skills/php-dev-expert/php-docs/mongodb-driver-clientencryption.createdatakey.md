# Cria um documento de chave

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.createdatakey.php

---

# MongoDB\Driver\ClientEncryption::createDataKey

(mongodb >=1.7.0)

MongoDB\Driver\ClientEncryption::createDataKey — Cria um documento de chave

### Descrição

final public function **MongoDB\Driver\ClientEncryption::createDataKey**([string](language.types.string.md) `$kmsProvider`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [MongoDB\BSON\Binary](class.mongodb-bson-binary.md)

Cria um novo documento de chave e insere-o na coleção do cofre de chaves.

### Parâmetros

`kmsProvider`
:   O provedor KMS (por exemplo, `"local"`,
    `"aws"`) que será usado para criptografar a nova chave de dados.

`options`
:   **Opções de chave de dados**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | masterKey | [array](language.types.array.md) | O documento masterKey identifica uma chave específica do KMS usada para criptografar a nova chave de dados. Esta opção é obrigatória, a menos que `kmsProvider` seja `"local"`.  **Opções do provedor `"aws"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | region | string | Obrigatória. | | key | string | Obrigatória. O Nome de Recurso da Amazon (ARN) para a chave mestra do cliente (CMK) da AWS. | | endpoint | string | Opcional. Um identificador de servidor alternativo para o qual enviar requisições KMS. Pode incluir o número da porta. |  **Opções do provedor `"azure"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | keyVaultEndpoint | string | Obrigatória. Servidor com porta opcional (por exemplo, "example.vault.azure.net"). | | keyName | string | Obrigatória. | | keyVersion | string | Opcional. Uma versão específica da chave nomeada. O padrão é usar a versão primária da chave. |  **Opções do provedor `"gcp"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | projectId | string | Obrigatória. | | location | string | Obrigatória. | | keyRing | string | Obrigatória. | | keyName | string | Obrigatória. | | keyVersion | string | Opcional. Uma versão específica da chave nomeada. O padrão é usar a versão primária da chave. | | endpoint | string | Opcional. Servidor com porta opcional. O padrão é "cloudkms.googleapis.com". |  **Opções do provedor `"kmip"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | keyId | string | Opcional. Identificador único para um objeto gerenciado de dados secretos KMIP de 96 bytes. Se não especificado, o driver cria um objeto gerenciado de dados secretos KMIP aleatório de 96 bytes. | | endpoint | string | Opcional. Servidor com porta opcional. | | delegated | bool | Opcional. Se verdadeira, esta chave deve ser descriptografada pelo servidor KMIP. | |
    | keyAltNames | [array](language.types.array.md) | Uma lista opcional de nomes alternativos de string usados ​​para fazer referência a uma chave. Se uma chave for criada com nomes alternativos, a criptografia poderá referir-se à chave pelo nome alternativo exclusivo em vez de por `_id`. |
    | keyMaterial | [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) | Um valor opcional de 96 bytes para usar como material de chave personalizado para a chave de dados que está sendo criada. Se keyMaterial for fornecido, o material de chave personalizado será usado para criptografar e descriptografar dados. Caso contrário, o material de chave para a nova chave de dados é gerado a partir de um dispositivo aleatório criptograficamente seguro. |

### Valor Retornado

Retorna o identificador da nova chave como
um objeto [MongoDB\BSON\Binary](class.mongodb-bson-binary.md) com subtipo 4 (UUID).

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.20.0 | Adicionada a opção `"delegated"` à opções masterKey do provedor KMIP. |
| PECL mongodb 1.15.0 | Adicionada a opção `"keyMaterial"`. |
| PECL mongodb 1.10.0 | O Azure e o GCP agora têm suporte como provedores KMS para criptografia do lado do cliente. |

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
