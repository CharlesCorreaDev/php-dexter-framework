# Conexões

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.quickstart.connections.php

---

## Conexões

O servidor MySQL suporta o uso de diferentes camadas de
transporte para conexões. Conexões usam TCP/IP, sockets de domínio Unix ou
pipes nomeados do Windows.

O nome de servidor `localhost` tem um significado especial.
Ele é vinculado ao uso de sockets de domínio Unix.
Para abrir uma conexão TCP/IP ao servidor local, `127.0.0.1` deve ser usado
ao invés do nome `localhost`.

**Exemplo #1 Significado especial de localhost**

```
<?php

$mysqli = new mysqli("localhost", "user", "password", "database");

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "user", "password", "database", 3306);

echo $mysqli->host_info . "\n";
```

O exemplo acima produzirá:

```
Localhost via UNIX socket
127.0.0.1 via TCP/IP
```

**Padrão dos parâmetros de conexão**

Dependendo da função de conexão usada, alguns parâmetros
podem ser omitidos. Se um parâmetro não for fornecido, a extensão tenta
usar os valores padrões definidos no arquivo de configuração do PHP.

**Exemplo #2 Padrões de configuração**

```
mysqli.default_host=192.168.2.27
mysqli.default_user=root
mysqli.default_pw=""
mysqli.default_port=3306
mysqli.default_socket=/tmp/mysql.sock
```

Os valores dos parâmetros resultantes são então passados à biblioteca cliente
que é usada pela extensão. Se a biblioteca cliente detecta parâmetros vazios ou indefinidos,
ela pode usar seus próprios valores padrão internos.

**Padrões de conexão internos da biblioteca**

Se o valor do servidor for indefinido ou vazio, a biblioteca cliente irá
considerar uma conexão socket Unix em `localhost`.
Se o socket for indefinido ou vazio, e uma conexão socket Unix for solicitada,
é feita tentativa de conexão ao socket padrão em
`/tmp/mysql.sock`.

Em sistemas Windows, o nome de servidor '`.`' é interpretado
pela biblioteca cliente como uma tentativa de se abrir uma conexão baseada em pipe nomeado
do Windows. Neste caso, o parâmetro socket é interpretado como o nome do
pipe. Se não informado ou vazio, o socket (nome do pipe) será igual ao padrão
`\\.\pipe\MySQL`.

Se a conexão a ser estabelecida não for baseada em socket de domínio Unix nem em pipe nomeado Windows,
e o parâmetro da porta estiver indefinido, a biblioteca usará
o valor padrão de porta `3306`.

A biblioteca [mysqlnd](mysqlnd.overview.md) e a Biblioteca Cliente
MySQL (libmysqlclient) implementam a mesma lógica para determinar os padrões.

**Opções de conexão**

Opções de conexão estão disponíveis para, por exemplo, definir
comando de inicialização que são executados na conexão, ou para requisitar uso
de um conjunto de caracteres específico. Opções de conexão devem ser definidas antes que uma
conexão seja estabelecida.

Para definir uma opção de conexão, a operação de conexão deve ser
realizada em três passos: criar um manipulador de conexão com
[mysqli\_init()](mysqli.init.md) ou [mysqli::\_\_construct()](mysqli.construct.md),
definir as opções necessárias usando [mysqli::options()](mysqli.options.md),
e estabelecer a conexão à rede com [mysqli::real\_connect()](mysqli.real-connect.md).

**Agrupamento de conexão**

A extensão mysqli suporta conexões persistentes de banco de dados, que
são um tipo especial de conexões agrupadas. Por padrão, cada conexão ao banco
aberta por um script é explicitamente fechada pelo usuário durante a execução
ou liberada automaticamente ao final do script. Com uma conexão permanente
isso não acontece. Ao invés disso, ela é colocada em um grupo para reúso posterior, se
uma conexão ao mesmo servidor, usando o mesmo usuário, senha, socket, porta
e banco de dados padrão, for aberta. O reúso economiza tempo e reduz a sobrecarga de conexão.

Cada processo do PHP usa seu próprio agrupamento de conexões mysqli.
Dependendo do modelo de implantação do servidor web, um processo PHP pode servir a
uma ou múltiplas requisições. Portanto, uma conexão agrupada pode ser usada
por um ou mais scripts subsequentemente.

**Conexão persistente**

Se uma conexão persistente sem uso para uma certa combinação de servidor, usuário,
senha, socket, porta e banco padrão não puder ser encontrada no agrupamento,
a extensão mysqli abre uma nova conexão. O uso de conexões persistentes pode ser
habilitado e desabilitado usando a diretiva [mysqli.allow\_persistent](mysqli.configuration.md#ini.mysqli.allow-persistent) do PHP.
O número total de conexões abertas por um script pode ser limitado com
[mysqli.max\_links](mysqli.configuration.md#ini.mysqli.max-links). O número máximo de conexões persistentes
por processo PHP pode ser restringido com [mysqli.max\_persistent](mysqli.configuration.md#ini.mysqli.max-persistent).
Favor observar que o servidor web pode gerar muitos processos PHP.

Uma queixa comum sobre conexões permanentes é que seus estados não
são redefinidos antes do reúso. Por exemplo, transações abertas e não terminadas não são
automaticamente desfeitas. Além disso, mudanças de autorização, que aconteceram
no intervalo entre a inserção da conexão no agrupamento e seu reúso,
não terão efeito. Isto pode ser visto como um efeito colateral indesejado. De outro modo,
o nome `persistent`e pode ser entendido como uma promessa de
que o estado da conexão irá persistir..

A extensão mysqli suporta ambas as interpretações de conexão persistente:
persistência do estado, e redefinição do estado, antes do reúso. O padrão é redefinição.
Antes que uma conexão persistente seja reutilizada, a extensão mysqli chama
[mysqli::change\_user()](mysqli.change-user.md) implicitamente para redefinir o estado. A
conexão persistente aparece ao usuário como se tivesse acabado de ser aberta. Nenhum
artefato de usos anteriores é visível.

A chamada a [mysqli::change\_user()](mysqli.change-user.md) é uma operação custosa.
Para melhor desempenho, usuários podem querer recompilar a extensão com a opção
**`MYSQLI_NO_CHANGE_USER_ON_PCONNECT`** definida.

É deixado ao usuário a escolha entre comportamento seguro e melhor desempenho.
Ambos são objetivos de otimização válidos. Para facilidade de uso, o comportamento seguro
foi escolhido como padrão com o prejuízo do desempenho.

**Veja também**

- [mysqli::\_\_construct()](mysqli.construct.md)
- [mysqli\_init()](mysqli.init.md)
- [mysqli::options()](mysqli.options.md)
- [mysqli::real\_connect()](mysqli.real-connect.md)
- [mysqli::change\_user()](mysqli.change-user.md)
- [$mysqli::host\_info](mysqli.get-host-info.md)
- [Opções de Configuração MySQLi](mysqli.configuration.md)
- [Conexões Persistentes de Banco de Dados](features.persistent-connections.md)

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
