# Visão geral de terminologia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlinfo.terminology.php

---

# Visão geral de terminologia

Esta seção fornece uma introdução às opções disponíveis
ao desenvolver aplicações PHP que precisem interagir com um
banco de dados MySQL.

**O que é uma API?**

Uma Interface de Programação para Aplicações, ou API, define as classes,
métodos, funções e variáveis que a aplicação precisará chamar
para que consiga efetuar a tarefa desejada. No caso de aplicações
PHP que precisem comunicar com banco de dados, as APIs
necessárias são normalmente expostas através de extensões do PHP.

APIs podem ser procedurais ou orientadas a objeto. Com uma API procedural, pode-se
chamar funções para realizar tarefas, e com uma API orientada a objeto, pode-se
instanciar classes e então chamar métodos nos objetos resultantes.
Entre as duas opções, a última é a interface recomendada, já que é
mais moderna e leva a um código mais organizado.

Ao escrever aplicações PHP que precisam se conectar ao servidor
MySQL, existem várias opções de API disponíveis. Este documento
discute o que está disponível e como selecionar a melhor solução para
cada aplicação.

**O que é um conector?**

Na documentação MySQL, o termo *conector*
se refere a uma parte do software que permite à aplicação se
conectar ao servidor de banco de dados MySQL. O MySQL fornece conectores para
uma variedade de linguagens, incluindo o PHP.

Se uma aplicação PHP precisa se comunicar com um servidor de banco de dados
será necessário escrever código PHP para realizar tais atividades como
conexão ao banco de dados, consultas ao banco e outras
funções relacionadas. Software é requerido para fornecer a API
que a aplicação PHP irá utilizar, e também para lidar com a
comunicação entre a aplicação e o servidor de banco de dados,
possivelmente usando outras bibliotecas intermediárias quando necessário. Este
software é conhecimento genericamente como conector, já que ele permite à
aplicação se *conectar* ao servidor de banco de dados.

**O que é um Driver?**

Um driver é uma parte do software projetada para se comunicar com um
tipo específico de servidor de banco de dados. O driver também pode chamar uma
biblioteca, tal como a Bliblioteca Cliente MySQL ou o Driver Nativo
MySQL. Estas bibliotecas implementam o protocolo de baixo nível usado para
comunicação com o servidor de dados MySQL.

Para exemplificar, a camada de abstração de banco da dados [PDO - Objetos
de Dados PHP](mysqli.overview.md#mysqli.overview.pdo) pode usar um dos
vários drivers específicos para banco de dados. Um dos drivers
disponíveis é o driver PDO MYSQL, que permite fazer interface com
o servidor MySQL.

Algumas vezes os termos conector e driver são usados de maneira intercambiável,
o que pode ser confuso. Na documentação relacionada com o MySQL o termo
"driver" é reservado para o software que fornece
a parte específica de banco de dados de um pacote de conector.

**O que é uma Extensão?**

Na documentação PHP, encontramos um outro termo -
*extensão*. O código PHP consiste de um núcleo,
com extensões opcionais à funcionalidade do núcleo. A extensão
do PHP relacionada com o MySQL, `mysqli`, é
implementada usando o framework de extensão PHP.

Uma extensão tipicamente expõe uma API para o programador PHP, para
permitir que suas instalações possam ser usadas programaticamente. Entretanto, algumas
extensões que usam o framework de extensão PHP não expõem uma
API ao programador PHP.

A extensão do driver de PDO MySQL, por exemplo, não expõe uma API
ao programador PHP, mas fornece uma interface à camada PDO
acima dela.

Os termos API e extensão não podem ser considerados com o mesmo
significado, já que uma extensão não necessáriamente expões uma API ao
programador.

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
