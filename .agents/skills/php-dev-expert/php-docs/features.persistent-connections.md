# Conexões Persistentes com o Banco de Dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.persistent-connections.php

---

# Conexões Persistentes com o Banco de Dados

### O que são Conexões Persistentes?

Conexões persistentes são conexões que não fecham quando a
execução do script termina. Quando uma conexão persistente é
requisitada, o PHP verifica se uma conexão persistente
idêntica (que foi mantida aberta anteriormente) já existe; se existir,
ela é reutilizada, senão, uma nova conexão é criada. Uma conexão
'idêntica' é uma aberta para o mesmo host com o
mesmo nome de usuário e a mesma senha (onde for aplicável).

Não há nenhuma maneira de solicitar uma conexão específica ou de garantir
que a conexão retornada sera uma existente ou uma
nova (se todas as conexões existentes estiverem em uso ou se a solicitação estiver sendo
atendida por um trabalhador diferente, que tem um conjunto separado de conexões).

Portanto, conexões persistentes do PHP não podem ser usadas para, por exemplo:

- atribuir uma sessão de banco de dados específica a um usuário da web específico
- criar uma grande transação em várias solicitações
- iniciar uma consulta em uma solicitação e coletar os resultados em outra

Conexões persistentes não fornecem *nenhuma*
funcionalidade que não seria possível com conexões não persistentes.

### Solicitações da Web

Existem duas maneiras pelas quais um servidor web pode utilizar o PHP para gerar
páginas web:

O primeiro método é usar o PHP como um CGI "wrapper". Quando executado dessa
maneira, uma instância do interpretador do PHP é criada e destruída
para cada requisição de página (para uma página PHP) para o servidor web.
Como ela é destruída após cada requisição, quaisquer recursos que ela
adquirir (como uma conexão para um servidor de banco de dados SQL) são fechados quando
ela é destruída. Nesse caso, não há ganho em
usar conexões persistentes - elas simplesmente não persistem.

O segundo método, e o mais popular, é rodar o PHP-FPM ou o PHP como um módulo
em um servidor web com multi-processos (atualmente somente o Apache).
Essas configurações têm tipicamnente um processo (o pai) que
coordena uma série de processos (seus filhos) que realmente fazem
o trabalho de servir as páginas web. Quando uma requisição chega de um
cliente, ela é entregue à um dos filhos que já não estiver
servindo outro cliente. Isso significa que quando o mesmo cliente
faz uma segunda requisição para o servidor, ele pode ser atendido por um processo
filho diferente do que da primeira vez. Uma vez que uma conexão persistente tenha sido
aberta, cada página subsequente servida pelo mesmo processo filho pode reutilizar a
conexão já estabelecida ao servidor SQL.

> **Nota**:
>
> O método em uso pode ser consultado verificando o valor de
> "Server API" na saída de [phpinfo()](function.phpinfo.md) ou o valor de
> **`PHP_SAPI`**, executado a partir de uma solicitação web.
>
> Se a API do Servidor for "Apache 2 Handler" ou "FPM/FastCGI", as conexões
> persistentes serão usadas em todas as solicitações atendidas pelo mesmo trabalhador. Para qualquer
> outro valor, as conexões persistentes não persistirão após cada solicitação.

### Command-line Processes

Como a linha de comando PHP usa um novo processo para cada script, conexões persistentes
não são compartilhadas entre scripts de linha de comando, portanto, não há
nenhum valor em usá-las em scripts transitórios, como crons ou comandos.
No entanto, elas podem ser úteis, por exemplo, em um servidor de aplicação de longa
duração que atende a muitas solicitações ou tarefas, onde cada uma pode precisar
de sua própria conexão com o banco de dados.

### Por que usá-las?

Conexões persistentes são benéficas quando a sobrecarga para criar uma conexão ao
servidor SQL é alta. Se essa sobrecarga é realmente significativa depende
de vários fatores como o tipo de banco de dados, se reside na mesma
máquina do servidor web e o quão carregada está a máquina. Quando
a sobrecarga de conexão é alta, conexões persistentes podem ajudar consideravelmente:
cada processo filho se conecta uma vez só durante toda sua duração, e não
a cada vez que ele processa uma página que requer uma conexão ao servidor
SQL. Isso significa que cada filho que abre uma conexão persistente
manterá sua própria conexão persistente ao servidor. Por exemplo, se cada um de 20 processos
filhos diferentes rodarem um script que faz uma conexão persistente ao servidor
SQL, haverá 20 conexões separadas a esse servidor,
uma de cada filho.

### Possíveis desvantagens: limites de conexão

Perceba, no entanto, que isso pode ter desvantagens ao
usar um banco de dados com limite de conexões que são excedidas pela conexões
persistentes dos filhos. Se o banco de dados tem um limite de 16 conexões
simultâneas e durante uma sessão movimentada do servidor 17 processos
filhos tentarem se conectar, um deles falhará. Se houver
bugs nos scripts que não permitem que as conexões se fechem
(como loops infinitos), um banco de dados com apenas 16 conexões
pode rapidamente ficar atolado.

Conexões persistentes geralmente aumentam o número de conexões abertas
a qualquer momento, pois os trabalhadores ociosos ainda manterão as conexões
para as solicitações anteriores. Se um grande número de trabalhadores for criado para
lidar com um pico de solicitações, as conexões que eles abriram permanecerão até
que o trabalhador seja encerrado ou que o servidor de banco de dados feche a conexão.

Certifique-se de que o número máximo de conexões permitidas pelo servidor de banco de dados
seja maior que o número máximo de trabalhadores de solicitação da web (além de qualquer outro
uso, como crons ou conexões administrativas).

Consulte a documentação do banco de dados para obter informações sobre como lidar com conexões abandonadas ou
ociosas (tempo limite). Tempo limite longo pode aumentar significativamente o
número de conexões persistentes abertas ao mesmo tempo.

### Possíveis desvantagens: manter o estado de conexão

Algumas extensões de banco de dados realizam limpeza automática quando a conexão é
reutilizada; outras deixam essa tarefa a critério do desenvolvedor da aplicação.
Dependendo da extensão de banco de dados escolhida e do projeto da aplicação, a limpeza
manual pode ser necessária antes da saída do script. Alterações que podem deixar
conexões em um estado inesperado incluem:

- Banco de dados selecionado / padrão
- Bloqueio de tabelas
- Transações não confirmadas
- Tabelas temporárias
- Configurações ou recursos específicos de conexão, como perfilagem

Bloqueios de tabela e transações que não são limpos ou fechados podem fazer com que
outras consultas sejam bloqueadas indefinidamente e/ou causar a reutilização subsequente
da conexão, causando alterações inesperadas.

Selecionar o banco de dados errado fará com que a reutilização subsequente da
conexão não consiga executar as consultas conforme o esperado (ou executá-las no
banco de dados errado se os esquemas forem semelhantes o suficiente).

Se as tabelas temporárias não forem limpas, as solicitações subsequentes não conseguirão
recriar a mesma tabela.

Pode-se implementar a limpeza usando destruidores de classe ou
[register\_shutdown\_function()](function.register-shutdown-function.md). Podem ser considerados também
proxies de grupo de conexão dedicados que incluam isso como parte de
sua funcionalidade.

### Palavras Finais

Considerando seu comportamento e as potenciais desvantagens descritas acima, não se deve
usar conexões persistentes sem uma análise cuidadosa. Elas não devem ser
usadas sem implementar alterações adicionais na aplicação ou sem um configuração cuidadosa
do servidor de banco de dados e servidor web e/ou PHP-FPM.

Considere soluções alternativas, como investigar e corrigir as causas de
sobrecargas na criação de conexões (por exemplo, desabilitando pesquisas reversas de DNS no
servidor de banco de dados) ou proxies de grupo de conexões dedicados.

Para APIs da web de alto volume, considere usar tempos de execução alternativos ou servidores de
aplicações de longa execução.

### Veja também

- [ibase\_pconnect()](function.ibase-pconnect.md)
- [oci\_pconnect()](function.oci-pconnect.md)
- [odbc\_pconnect()](function.odbc-pconnect.md)
- [pfsockopen()](function.pfsockopen.md)
- [pg\_connect()](function.pg-connect.md)
- [MySQLi e Conexões Persistentes](mysqli.persistconns.md)
- [Gerenciamento de Conexões PDO](pdo.connections.md)

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
