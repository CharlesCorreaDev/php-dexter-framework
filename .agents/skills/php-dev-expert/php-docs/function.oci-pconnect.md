# Conecta-se a um banco de dados Oracle usando uma conexão persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.oci-pconnect.php

---

# oci\_pconnect

(PHP 5, PHP 7, PHP 8, PECL OCI8 >= 1.1.0)

oci\_pconnect — Conecta-se a um banco de dados Oracle usando uma conexão persistente

### Descrição

function **oci\_pconnect**(  
    [string](language.types.string.md) `$username`,  
    [string](language.types.string.md) `$password`,  
    [?](language.types.null.md)[string](language.types.string.md) `$connection_string` = **`null`**,  
    [string](language.types.string.md) `$encoding` = "",  
    [int](language.types.integer.md) `$session_mode` = **`OCI_DEFAULT`**  
): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Cria uma conexão persistente com um servidor Oracle e efetua logon.

Conexões persistentes são armazenadas em cache e reutilizadas entre solicitações, resultando em
redução de sobrecarga a cada carregamento de página; uma aplicação PHP típica terá
uma única conexão persistente aberta em um servidor Oracle por processo filho do Apache
(ou processo PHP FPM). Consulte a seção [Manipulação de
Conexões e Pool de Conexões do OCI8](oci8.connection.md) para obter mais
informações.

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

### Examples

**Exemplo #1 Exemplo básico de **oci\_pconnect()** usando a sintaxe Easy Connect**

```
<?php

// Conecta-se ao serviço XE (ou seja, banco de dados) na máquina "localhost"
$conn = oci_pconnect('hr', 'welcome', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>
```

Consulte [oci\_connect()](function.oci-connect.md) para mais exemplos de uso de parâmetros.

### Notas

> **Nota**:
>
> O tempo de vida e o número máximo de conexões Oracle persistentes
> por processo PHP podem ser ajustados definindo os seguintes
> valores de configuração: [oci8.persistent\_timeout](oci8.configuration.md#ini.oci8.persistent-timeout),
> [oci8.ping\_interval](oci8.configuration.md#ini.oci8.ping-interval) e
> [oci8.max\_persistent](oci8.configuration.md#ini.oci8.max-persistent).

### Veja também

- [oci\_connect()](function.oci-connect.md) - Conecta-se a um banco de dados Oracle
- [oci\_new\_connect()](function.oci-new-connect.md) - Conecta-se ao servidor Oracle usando uma conexão exclusiva

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
