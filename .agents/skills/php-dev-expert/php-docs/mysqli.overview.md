# Visão Geral

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.overview.php

---

# Visão Geral

Esta seção fornece uma introdução às opções disponíveis ao desenvolver
um aplicativo PHP que precisa interagir com um banco de
dados MySQL.

**O que é uma API?**

Uma interface de programação de aplicativos, ou API, define as classes,
métodos, funções e variáveis que seu aplicativo precisará chamar
para executar a tarefa desejada. No caso de aplicativos PHP
que precisam se comunicar com bancos de dados,
as APIs necessárias geralmente são expostas por meio de extensões PHP.

As APIs podem ser processuais ou orientadas a objetos. Com uma API procedural, você
chama funções para realizar tarefas, com a API orientada a objetos você
instancia classes e então chama métodos nos objetos resultantes.
Das duas, a última costuma ser a interface preferida, pois é
mais moderna e leva a um código mais organizado.

Ao escrever aplicativos PHP que precisam se conectar ao servidor MySQL,
existem várias opções de API disponíveis. Este documento discute
o que está disponível e como selecionar a melhor solução
para sua aplicação.

**O que é um Conector?**

Na documentação do MySQL, o termo *conector*
refere-se a um software que permite que seu aplicativo
se conecte ao servidor de banco de dados MySQL. MySQL fornece conectores
para uma variedade de linguagens, incluindo PHP.

Se seu aplicativo PHP precisar se comunicar com um servidor de banco de dados,
você precisará escrever código PHP para executar atividades como
conectar-se ao servidor de banco de dados, consultar o banco de dados e outras
funções relacionadas ao banco de dados. O software é necessário para fornecer a API
que seu aplicativo PHP usará e também para lidar com a comunicação entre seu aplicativo
e o servidor de banco de dados, possivelmente usando outras bibliotecas intermediárias
quando necessário. Este software é conhecido genericamente como conector,
pois permite que sua aplicação se *connect*
a um servidor de banco de dados.

**O que é um Driver?**

Um driver é um software projetado para se comunicar com um tipo
específico de servidor de banco de dados. O driver também pode chamar
uma biblioteca, como a MySQL Client Library ou o MySQL Native
Driver. Essas bibliotecas implementam o protocolo de baixo nível usado
para se comunicar com o servidor de banco de dados MySQL.

A título de exemplo, a camada de abstração do banco de dados [PHP
Data Objects (PDO)](mysqli.overview.md#mysqli.overview.pdo) pode usar um dos vários drivers específicos do
banco de dados. Um dos drivers disponíveis
é o driver PDO MYSQL, que permite a interface
com o servidor MySQL.

Às vezes, as pessoas usam os termos conector e driver de forma intercambiável,
o que pode ser confuso. Na documentação relacionada ao MySQL, o termo
"driver" é reservado para software que fornece a parte específica
do banco de dados de um pacote de conector.

**O que é uma Extensão?**

Na documentação do PHP, você encontrará outro termo -
*extension*. O código PHP consiste em um núcleo,
com extensões opcionais para a funcionalidade principal. As extensões
relacionadas ao MySQL do PHP, como a extensão mysqli e a
extensão do driver PDO MySQL, são
implementadas usando a estrutura de extensão do PHP.

Uma extensão normalmente expõe uma API ao programador PHP, para
permitir que suas facilidades sejam usadas programaticamente. No entanto,
algumas extensões que usam a estrutura de extensão PHP não expõem uma
API ao programador PHP.

A extensão do driver PDO MySQL, por exemplo, não expõe uma API ao
programador PHP, mas fornece uma interface para a camada
PDO acima dela.

Os termos API e extensão não devem significar a mesma coisa,
pois uma extensão pode não necessariamente expor uma API
ao programador.

**Quais são as principais ofertas de API do PHP para usar o
MySQL?**

Existem duas opções principais de API ao considerar a conexão com um
servidor de banco de dados MySQL:

- Extensão mysqli do PHP
- Objetos de Dados PHP (PDO)

Cada um tem suas próprias vantagens e desvantagens. A discussão a
seguir visa fornecer uma breve introdução aos principais aspectos de
cada API.

**O que é a extensão mysqli do PHP?**

A extensão `mysqli`, ou como às vezes é
conhecida, a extensão *improved* do MySQL, foi desenvolvida
para aproveitar os novos recursos encontrados nos
sistemas MySQL versões 4.1.3 e mais recentes. A extensão `mysqli`
está incluída nas versões 5 e posteriores do PHP.

A extensão `mysqli` tem vários benefícios,
sendo os principais aprimoramentos sobre a
extensão `mysql`:

- Interface orientada a objetos
- Suporte para Declarações Preparadas
- Suporte para várias declarações
- Suporte para transações
- Recursos de depuração aprimorados

Assim como a interface orientada a objetos, a extensão também fornece uma
interface processual.

A extensão `mysqli` é construída usando a e
strutura de extensão PHP, seu código fonte está localizado no diretório
ext/mysqli.

Para obter mais informações sobre a extensão `mysqli`,
consulte [MySQLi](book.mysqli.md).

**O que é PDO?**

PHP Data Objects, ou PDO, é uma camada de abstração
de banco de dados especificamente para aplicativos PHP. O PDO fornece uma API consistente
para seu aplicativo PHP, independentemente do tipo de servidor de
banco de dados ao qual seu aplicativo se conectará. Em teoria, se você estiver usando a
API PDO, você pode mudar o servidor de banco de dados que você usou, digamos
Firebird para MySQL, e só precisa fazer pequenas alterações em seu
código PHP.

Outros exemplos de camadas de abstração de banco de dados incluem JDBC para
aplicativos Java e DBI para Perl.

Embora o PDO tenha suas vantagens, como uma API limpa, simples e portátil,
sua principal desvantagem é que ele não permite que você use todos os
recursos avançados disponíveis nas versões mais recentes do
servidor MySQL. Por exemplo, PDO não permite que você use o suporte do MySQL
para Multiple Statements.

PDO é implementado usando o framework de extensão PHP, seu código
fonte está localizado no diretório ext/pdo.

Para mais informações sobre PDO, consulte o
[PDO](book.pdo.md).

**O que é o driver PDO MYSQL?**

O driver PDO MYSQL não é uma API como tal, pelo menos da
perspectiva do programador PHP. Na verdade, o driver PDO MYSQL fica na
camada abaixo do próprio PDO e fornece funcionalidade específica do MySQL.
O programador ainda chama a API PDO, mas o PDO usa o driver PDO MYSQL
para realizar a comunicação com o servidor MySQL.

O driver PDO MYSQL é um dos vários drivers PDO disponíveis. Outros
drivers PDO disponíveis incluem aqueles para os servidores de banco de dados
Firebird e PostgreSQL.

O driver PDO MYSQL é implementado usando a estrutura de
extensão PHP. Seu código-fonte está localizado no diretório
ext/pdo\_mysql. Ele não expõe uma API ao
programador PHP.

Para obter mais informações sobre o driver PDO MYSQL, consulte
[Driver PDO do MySQL](ref.pdo-mysql.md).

**O que é o driver nativo MySQL do PHP?**

Para se comunicar com o servidor de banco de dados MySQL, `mysqli` e
o driver PDO MYSQL usam uma biblioteca de baixo nível que implementa
o protocolo necessário. No passado, a única biblioteca disponível era a
MySQL Client Library, também conhecida como
`libmysqlclient`.

No entanto, a interface apresentada pelo `libmysqlclient` não
foi otimizada para comunicação com aplicativos PHP, pois
`libmysqlclient` foi originalmente projetado com
aplicativos C em mente. Por esta razão, o MySQL Native Driver,
`mysqlnd`, foi desenvolvido como uma alternativa ao
`libmysqlclient` para aplicações PHP.

Tanto a extensão `mysqli` quanto o driver PDO MySQL podem
ser configurados individualmente para usar
`libmysqlclient`ou `mysqlnd`. Como o
`mysqlnd` foi projetado especificamente para ser utilizado
no sistema PHP, ele possui vários aprimoramentos de memória e velocidade em relação ao
`libmysqlclient`. Você é fortemente encorajado a
aproveitar essas melhorias.

O MySQL Native Driver é implementado usando a estrutura de
extensão PHP. O código-fonte está localizado em
ext/mysqlnd. Ele não expõe uma API ao
programador PHP.

**Comparação de recursos**

A tabela a seguir compara a funcionalidade dos principais
métodos de conexão ao MySQL a partir do PHP:

**Comparação das opções da API do MySQL para PHP**

|  | Extensão mysqli do PHP | PDO (usando PDO MySQL Driver e MySQL Native Driver) |
| --- | --- | --- |
| Versão do PHP introduzida | 5.0 | 5.0 |
| Status de desenvolvimento do MySQL | Desenvolvimento ativo | Desenvolvimento ativo |
| API suporta conjuntos de caracteres | Sim | Sim |
| A API oferece suporte a instruções preparadas do lado do servidor | Sim | Sim |
| A API oferece suporte a declarações preparadas do lado do cliente | Não | Sim |
| API suporta procedimentos armazenados | Sim | Sim |
| A API oferece suporte a várias instruções | Sim | A maioria |
| Suporta todas as funcionalidades do MySQL 4.1+ | Sim | A maioria |

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
