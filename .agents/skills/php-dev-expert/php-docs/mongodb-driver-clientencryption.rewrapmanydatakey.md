# Reencapsula chaves de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb-driver-clientencryption.rewrapmanydatakey.php

---

# MongoDB\Driver\ClientEncryption::rewrapManyDataKey

(mongodb >=1.15.0)

MongoDB\Driver\ClientEncryption::rewrapManyDataKey — Reencapsula chaves de dados

### Descrição

final public function **MongoDB\Driver\ClientEncryption::rewrapManyDataKey**([array](language.types.array.md)|[object](language.types.object.md) `$filter`, [?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [object](language.types.object.md)

Reencapsula (ou seja, descriptografa e criptografa novamente) zero ou mais chaves de dados na coleção
de cofres de chaves que correspondem ao filtro fornecido no parâmetro `filter`.

Se a opção `"provider"` não for especificada, as chaves de dados
correspondentes serão reencapsuladas com seu provedor KMS atual. Caso contrário, as chaves de dados
correspondentes serão criptografadas novamente de acordo com as opções
`"provider"` e `"masterKey"` especificadas.

### Parâmetros

`filter` ([array](language.types.array.md)|[object](language.types.object.md))
:   O [» predicado de consulta](https://www.mongodb.com/docs/manual/tutorial/query-documents/).
    Um predicado vazio corresponderá a todos os documentos da coleção.

    > **Nota**:
    >
    > Ao avaliar os critérios de consulta, o MongoDB compara os tipos e valores de acordo com suas próprias [» regras de comparação para tipos BSON](https://www.mongodb.com/docs/manual/reference/bson-type-comparison-order/), que diferem das regras de [comparação](types.comparisons.md) e do [malabarismo de tipos](language.types.type-juggling.md) do PHP. Ao corresponder a um tipo especial de BSON, os critérios de consulta devem usar a respectiva [classe BSON](mongodb.bson.md) (por exemplo, use [MongoDB\BSON\ObjectId](class.mongodb-bson-objectid.md) para corresponder a um [» ObjectId](https://www.mongodb.com/docs/manual/reference/bson-types/#objectid)).

`options`
:   **Opções de RewrapManyDataKey**

    | Opção | Tipo | Descrição |
    | --- | --- | --- |
    | provider | [string](language.types.string.md) | O provedor KMS (por exemplo, `"local"`, `"aws"`) que será usado para criptografar novamente as chaves de dados correspondentes.  Se um provedor KMS não for especificado, as chaves de dados correspondentes serão criptografadas novamente com seu provedor KMS atual. |
    | masterKey | [array](language.types.array.md) | A masterKey identifica uma chave específica do KMS usada para criptografar a nova chave de dados. Esta opção não deve ser especificada sem a opção `"provider"`. Esta opção é necessária se `"provider"` for especificada e não `"local"`.  **Opções do provedor `"aws"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | region | string | Obrigatória. | | key | string | Obrigatória. O Nome de Recurso da Amazon (ARN) para a chave mestra do cliente (CMK) da AWS. | | endpoint | string | Opcional. Um identificador de servidor alternativo para o qual enviar requisições KMS. Pode incluir o número da porta. |  **Opções do provedor `"azure"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | keyVaultEndpoint | string | Obrigatória. Servidor com porta opcional (por exemplo, "example.vault.azure.net"). | | keyName | string | Obrigatória. | | keyVersion | string | Opcional. Uma versão específica da chave nomeada. O padrão é usar a versão primária da chave. |  **Opções do provedor `"gcp"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | projectId | string | Obrigatória. | | location | string | Obrigatória. | | keyRing | string | Obrigatória. | | keyName | string | Obrigatória. | | keyVersion | string | Opcional. Uma versão específica da chave nomeada. O padrão é usar a versão primária da chave. | | endpoint | string | Opcional. Servidor com porta opcional. O padrão é "cloudkms.googleapis.com". |  **Opções do provedor `"kmip"`**  | Opção | Tipo | Descrição | | --- | --- | --- | | keyId | string | Opcional. Identificador único para um objeto gerenciado de dados secretos KMIP de 96 bytes. Se não especificado, o driver cria um objeto gerenciado de dados secretos KMIP aleatório de 96 bytes. | | endpoint | string | Opcional. Servidor com porta opcional. | | delegated | bool | Opcional. Se verdadeira, esta chave deve ser descriptografada pelo servidor KMIP. | |

### Valor Retornado

Retorna um objeto, que terá uma propriedade opcional
`bulkWriteResult` contendo o resultado da operação
interna `bulkWrite` como um objeto. Se nenhuma chave de dados
corresponder ao filtro ou a gravação não for reconhecida, a
propriedade `bulkWriteResult` será **`null`**.

### Erros/Exceções

- Lança uma exceção [MongoDB\Driver\Exception\InvalidArgumentException](class.mongodb-driver-exception-invalidargumentexception.md) em caso de erro ao analisar argumentos.
- Lança uma exceção [MongoDB\Driver\Exception\ConnectionException](class.mongodb-driver-exception-connectionexception.md) se a conexão com o servidor falhar (por outros motivos além da autenticação).
- Lança uma exceção [MongoDB\Driver\Exception\AuthenticationException](class.mongodb-driver-exception-authenticationexception.md) se a autenticação for necessária e falhar.
- Lança [MongoDB\Driver\Exception\EncryptionException](class.mongodb-driver-exception-encryptionexception.md) se ocorrer um erro ao descriptografar ou criptografar novamente uma chave de dados.
- Lança [MongoDB\Driver\Exception\RuntimeException](class.mongodb-driver-exception-runtimeexception.md) em outros erros.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL mongodb 1.20.0 | Adicionada a opção `"delegated"` às opções masterKey do provedor KMIP. |

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
