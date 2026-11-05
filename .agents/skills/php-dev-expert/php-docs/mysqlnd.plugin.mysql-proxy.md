# Uma comparação de plugins mysqlnd com Proxy MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.mysql-proxy.php

---

## Uma comparação de plugins mysqlnd com Proxy MySQL

Plugins `Mysqlnd` e Proxy MySQL são tecnologias
diferentes que usam abordagens diferentes. Ambas são ferramentas válidas para
resolver uma variedade de tarefas comuns, como balanceamento de carga, monitoramento
e melhorias de desempenho. Uma diferença importante é que o Proxy
MySQL funciona com todos os clientes MySQL, enquanto
os plugins `mysqlnd` são específicos para aplicações PHP.

Como uma extensão PHP, um plugin `mysqlnd` é
instalado no servidor de aplicativos PHP, junto com o restante do PHP.
O Proxy MySQL pode ser executado no servidor de aplicativos PHP ou pode ser
instalado em uma máquina dedicada para lidar com vários servidores de aplicações
PHP.

A implantação do Proxy MySQL no servidor de aplicativos tem duas vantagens:

1. Nenhum ponto único de falha
2. Fácil de escalonar horizontalmente (escalonar por cliente)

O proxy MySQL (e os plugins `mysqlnd`) podem resolver
facilmente problemas que de outra forma exigiriam alterações em
aplicações existentes.

No entanto, o Proxy MySQL tem algumas desvantagens:

- Proxy MySQL é um novo componente e uma nova tecnologia para dominar e implantar.
- O Proxy MySQL requer conhecimento da linguagem de script Lua.

O proxy MySQL pode ser customizado com programação C e Lua. Lua é a
linguagem de script preferida do Proxy MySQL. Para a maioria dos especialistas em PHP, Lua
é uma nova linguagem para se aprender. Um plugin `mysqlnd` pode
ser escrito em C. Também é possível escrever plugins em PHP usando
[» PECL/mysqlnd\_uh](https://pecl.php.net/package/mysqlnd_uh).

O proxy MySQL é executado como um daemon - um processo em segundo plano. O proxy MySQL pode
recuperar decisões anteriores, pois todo o estado pode ser retido. Entretanto, um
plugin `mysqlnd` está vinculado ao ciclo de vida baseado em
solicitações do PHP. O Proxy MySQL também pode compartilhar resultados computados
únicos entre vários servidores de aplicativos. Um
plugin `mysqlnd` precisaria armazenar dados em um
meio persistente para poder fazer isso. Outro daemon precisaria ser
usado para essa finalidade, como o Memcache. Isso dá ao Proxy MySQL uma
vantagem neste caso.

O proxy MySQL funciona sobre o protocolo de fio. Com o Proxy MySQL é
necessário analisar e fazer engenharia reversa do protocolo MySQL Client Server.
As ações são limitadas àquelas que podem ser alcançadas através da manipulação do
protocolo de comunicação. Se o protocolo de fio for alterado (o que acontece
muito raramente), os scripts do proxy MySQL também precisarão ser alterados.

Os plugins `Mysqlnd` funcionam sobre a API C, que
espelha o cliente `libmysqlclient`.
Esta API C é basicamente um encapsulador em torno do protocolo clienten-servidor
MySQL, ou protocolo de fio, como às vezes é chamado. Pode-se
interceptar todas as chamadas da API C. O PHP faz uso da API C, portanto
pode-se conectar todas as chamadas PHP, sem a necessidade de programar
no nível do protocolo de fio.

`Mysqlnd` implementa o protocolo de fio. Os plugins podem,
portanto, analisar, fazer engenharia reversa, manipular e até mesmo substituir o
protocolo de comunicação. No entanto, isso geralmente não é necessário.

Como os plugins permitem criar implementações que utilizam dois níveis (API
C e protocolo de fio), eles têm maior flexibilidade que o Proxy
MySQL. Se um plugin `mysqlnd` for implementado usando
a API C, quaisquer alterações subsequentes no protocolo de fio não requerem
alterações no próprio plugin.

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
