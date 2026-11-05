# Define opções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.options.php

---

# mysqli::options

# mysqli\_options

(PHP 5, PHP 7, PHP 8)

mysqli::options -- mysqli\_options — Define opções

### Descrição

Estilo orientado a objetos

public function **mysqli::options**([int](language.types.integer.md) `$option`, [string](language.types.string.md)|[int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_options**([mysqli](class.mysqli.md) `$mysql`, [int](language.types.integer.md) `$option`, [string](language.types.string.md)|[int](language.types.integer.md) `$value`): [bool](language.types.boolean.md)

Usado para definir opções extras de conexão e afetar o comportamento de uma conexão.

Esta função pode ser chamada várias vezes para definir várias opções.

**mysqli\_options()** deve ser chamado depois de
[mysqli\_init()](mysqli.init.md) e antes de
[mysqli\_real\_connect()](mysqli.real-connect.md).

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`option`
:   A opção que você deseja definir. Pode ser um dos seguintes valores:

    **Valid options**

    | Name | Description |
    | --- | --- |
    | **`MYSQLI_OPT_CONNECT_TIMEOUT`** | Tempo limite de conexão em segundos |
    | **`MYSQLI_OPT_READ_TIMEOUT`** | Tempo limite do resultado da execução do comando em segundos. Disponível a partir do PHP 7.2.0. |
    | **`MYSQLI_OPT_LOCAL_INFILE`** | Ativar/desativar o uso de `LOAD LOCAL INFILE` |
    | **`MYSQLI_OPT_LOAD_DATA_LOCAL_DIR`** | Diretório a ser usado para `LOAD DATA LOCAL INFILE`. |
    | **`MYSQLI_INIT_COMMAND`** | Comando para executar após estabelecer conexão ao servidor MySQL |
    | **`MYSQLI_SET_CHARSET_NAME`** | O conjunto de caracteres a ser definido como padrão.. |
    | **`MYSQLI_READ_DEFAULT_FILE`** | Lê as opções do arquivo de opções nomeadas em vez de my.cnf Não suportado por mysqlnd. |
    | **`MYSQLI_READ_DEFAULT_GROUP`** | Leia as opções do grupo nomeado de my.cnf ou o arquivo especificado com **`MYSQL_READ_DEFAULT_FILE`**. Não suportado pelo mysqlnd. |
    | **`MYSQLI_SERVER_PUBLIC_KEY`** | Arquivo de chave pública RSA usado com a autenticação baseada em SHA-256. |
    | **`MYSQLI_OPT_NET_CMD_BUFFER_SIZE`** | O tamanho do buffer interno de comando/rede. Válido apenas para mysqlnd. |
    | **`MYSQLI_OPT_NET_READ_BUFFER_SIZE`** | Tamanho máximo do bloco de leitura em bytes ao ler o corpo de um pacote de comando do MySQL. Válido apenas para mysqlnd. |
    | **`MYSQLI_OPT_INT_AND_FLOAT_NATIVE`** | Converte colunas de números inteiros e pontos flutuantes de volta para números PHP ao usar instruções não preparadas. Válido apenas para mysqlnd. |
    | **`MYSQLI_OPT_SSL_VERIFY_SERVER_CERT`** | Informa se o certificado do servidor deve ser verificado. |
    | **`MYSQLI_OPT_CAN_HANDLE_EXPIRED_PASSWORDS`** | Informa se o cliente deve aceitar senhas expiradas. |
    | `1` | Informa se deve ser usada compressão na comunicação de rede. |

`value`
:   O valor da opção.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se o relatório de erros da extensão mysqli estiver habilitado (**`MYSQLI_REPORT_ERROR`**) e a operação solicitada falhar,
um aviso será gerado. Se, além disso, o modo for definido como **`MYSQLI_REPORT_STRICT`**,
uma exceção [mysqli\_sql\_exception](class.mysqli-sql-exception.md) será lançada em vez do aviso.

### Examples

Veja [mysqli\_real\_connect()](mysqli.real-connect.md).

### Notas

> **Nota**:
>
> O MySQLnd sempre assume o conjunto de caracteres padrão do servidor. Este conjunto de caracteres é enviado durante a
> criação/autenticação da conexão e será usado pelo mysqlnd.
>
> A libmysqlclient usa o conjunto de caracteres padrão definido no
> arquivo my.cnf ou definido por uma chamada explícita a **mysqli\_options()** antes de
> chamar [mysqli\_real\_connect()](mysqli.real-connect.md), mas depois de chamar [mysqli\_init()](mysqli.init.md).

### Veja também

- [mysqli\_init()](mysqli.init.md) - Inicializa o MySQLi e retorna um objeto a ser utilizado com mysqli\_real\_connect()
- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL

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
