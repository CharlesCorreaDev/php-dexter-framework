# Conecta-se ao servidor Oracle usando uma conexão exclusiva

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-new-connect.php

---

# oci\_new\_connect

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_new\_connect — Conecta-se ao servidor Oracle usando uma conexão exclusiva

### Descrição

function **oci\_new\_connect**(  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$password`,  
    [?](language.types.null.md)[string](language.types.string.md) `$connection_string` = **`null`**,  
    [string](language.types.string.md) `$encoding` = "",  
    [int](language.types.integer.md) `$session_mode` = **`OCI_DEFAULT`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Estabelece uma nova conexão com um servidor Oracle e efetua logon.

Ao contrário de [oci\_connect()](function.oci-connect.md) e
[oci\_pconnect()](function.oci-pconnect.md), **oci\_new\_connect()**
não armazena conexões em cache e sempre retornará um identificador de conexão
recém-aberto. Isso é útil se sua aplicação precisar de
isolamento transacional entre dois conjuntos de consultas.

### Parâmetros

`username`
:   O nome de usuário do Oracle.

`password`
:   A senha para `username`.

`connection_string`
:   Contém
    a `instância do Oracle` à qual se conectar. Pode ser
    uma [» string Easy
    Connect](https://www.oracle.com/pls/topic/lookup?ctx=dblatest&id=GUID-E5358DEA-D619-4B7B-A799-3D2F802500F1) ou um Connect Name do
    arquivo tnsnames.ora ou o nome de uma instância
    local do Oracle.

    Se não especificado ou **`null`**, o PHP usará
    variáveis de ambiente como **`TWO_TASK`** (no Linux)
    ou **`LOCAL`** (no Windows)
    e **`ORACLE_SID`** para determinar a
    `instância do Oracle` à qual se conectar.

    Para usar o método de nomenclatura Easy Connect, o PHP precisa ter sido compilado com as bibliotecas
    Oracle Client 10*g* ou superiores. A string Easy Connect para o Oracle
    10*g* tem o formato:
    *[//]nome\_do\_servidor[:porta][/nome\_do\_servico]*. A partir do Oracle
    11*g* a sintaxe é:
    *[//]nome\_do\_servidor[:porta][/nome\_do\_servico][:tipo\_de\_servidor][/nome\_da\_instancia]*.
    Outras opções foram introduzidas com o Oracle 19c, incluindo as configurações de timeout
    e keep-alive. Consulte a documentação do Oracle. Os nomes dos serviços podem ser encontrados executando
    o utilitário Oracle `lsnrctl status` na máquina do servidor de
    banco de dados.

    O arquivo tnsnames.ora pode estar no caminho de pesquisa Oracle Net,
    que
    inclui /seu/caminho/para/instantclient/network/admin, $ORACLE\_HOME/network/admin
    e /etc. Como alternativa, defina `TNS_ADMIN`
    para que $TNS\_ADMIN/tnsnames.ora possa ser lido. Certifique-se de que o servidor
    web tem acesso de leitura ao arquivo.

`encoding`
:   Determina
    o conjunto de caracteres usado pelas bibliotecas Oracle Client. O conjunto de
    caracteres não precisa corresponder ao conjunto de caracteres usado pelo banco de dados. Se
    não corresponderem, o Oracle fará o possível para converter os dados de e para
    o conjunto de caracteres do banco de dados. Dependendo dos conjuntos de caracteres, isso pode
    não fornecer resultados utilizáveis. A conversão também adiciona alguma sobrecarga de tempo.

    Se não for especificado, as
    bibliotecas Oracle Client determinam um conjunto de caracteres a partir da
    variável de ambiente **`NLS_LANG`**.

    Passar este parâmetro pode
    reduzir o tempo necessário para conectar.

`session_mode`
:   Este
    parâmetro está disponível a partir do PHP 5 (PECL OCI8 1.1) e aceita os
    seguintes valores: **`OCI_DEFAULT`**,
    **`OCI_SYSOPER`** e **`OCI_SYSDBA`**.
    Se **`OCI_SYSOPER`** ou
    **`OCI_SYSDBA`** forem especificadas, esta função tentará
    estabelecer uma conexão privilegiada usando credenciais externas.
    Conexões privilegiadas estão desabilitadas por padrão. Para habilitá-las
    é preciso configurar [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect)
    para `On`.

    O PHP 5.3 (PECL OCI8 1.3.4) introduziu o valor
    de modo **`OCI_CRED_EXT`**. Ele informa ao Oracle para usar
    autenticação External ou OS, que deve ser configurada no
    banco de dados. A flag **`OCI_CRED_EXT`** só pode ser usada
    com o usuário "/" e uma senha vazia.
    [oci8.privileged\_connect](oci8.configuration.md#ini.oci8.privileged-connect)
    pode ser `On` ou `Off`.

    **`OCI_CRED_EXT`** pode ser combinado com os modos
    **`OCI_SYSOPER`** ou
    **`OCI_SYSDBA`**.

    **`OCI_CRED_EXT`** não é suportado no Windows por
    razões de segurança.

### Valor Retornado

Retorna um identificador de conexão ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL OCI8 3.0.0 | `connection_string` agora é anulável. |

### Examples

A seguir demonstramos como conexões podem ser separaradas.

**Exemplo #1 Exemplo de **oci\_new\_connect()****

```
<?php

// crie a tabela mytab (mycol number);

function query($name, $c)
{
    echo "Consultando $name\n";
    $s = oci_parse($c, "select * from mytab");
    oci_execute($s, OCI_NO_AUTO_COMMIT);
    $row = oci_fetch_array($s, OCI_ASSOC);
    if (!$row) {
        echo "Nenhuma linha\n";
    } else {
        do {
            foreach ($row as $item)
                echo $item . " ";
            echo "\n";
        } while (($row = oci_fetch_array($s, OCI_ASSOC)) != false);
    }
}

$c1 = oci_connect("hr", "welcome", "localhost/orcl");
$c2 = oci_new_connect("hr", "welcome", "localhost/orcl");

$s = oci_parse($c1, "insert into mytab values(1234)");
oci_execute($s, OCI_NO_AUTO_COMMIT);

query("conexão básica", $c1);
query("conexão nova", $c2);
oci_commit($c1);
query("conexão nova após confirmação", $c2);

// Resultado:
//   Consultando conexão básica
//   1234
//   Consultando conexão nova
//   "Nenhuma linha
//   Consultando conexão nova após confirmação
//   1234

?>
```

Consulte [oci\_connect()](function.oci-connect.md) para mais exemplos de uso dos parâmetros.

### Veja também

- [oci\_connect()](function.oci-connect.md) - Conecta-se a um banco de dados Oracle
- [oci\_pconnect()](function.oci-pconnect.md) - Conecta-se a um banco de dados Oracle usando uma conexão persistente

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
