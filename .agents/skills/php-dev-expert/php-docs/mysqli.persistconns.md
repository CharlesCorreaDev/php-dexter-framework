# A extensão mysqli e conexões persistentes

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.persistconns.php

---

# A extensão mysqli e conexões persistentes

A ideia por trás das conexões persistentes é
que uma conexão entre um processo cliente e um banco de dados pode ser
reutilizada por um processo cliente, em vez de ser criada e destruída
várias vezes. Isso reduz a sobrecarga de criar novas conexões
sempre que uma é necessária, pois as conexões não utilizadas
são armazenadas em cache e estão prontas para serem reutilizadas.

Ao contrário da extensão mysql, mysqli não fornece uma função separada
para abrir conexões persistentes. Para abrir uma conexão persistente,
você deve preceder `p:` ao nome do host ao conectar.

O problema com conexões persistentes é que elas podem ser deixadas em
estados imprevisíveis pelos clientes. Por exemplo, um bloqueio de tabela
pode ser ativado antes que um cliente seja encerrado inesperadamente. Um novo
processo cliente reutilizando essa conexão persistente obterá a conexão
"como está". Qualquer limpeza precisaria ser feita pelo novo
processo cliente antes que ele pudesse fazer bom uso da conexão ]
persistente, aumentando a carga do programador.

A conexão persistente da extensão `mysqli`,
no entanto, fornece código de manipulação de limpeza integrado. A limpeza
realizada pelo `mysqli` inclui:

- Reverter transações ativas
- Fechar e descartar tabelas temporárias
- Desbloquear tabelas
- Redefinir variáveis de sessão
- Fechar declarações preparadas (sempre acontece com PHP)
- Fechar manipulador
- Liberar bloqueios adquiridos com **GET\_LOCK()**

Isso garante que as conexões persistentes estejam em um estado limpo ao
retornar do pool de conexões, antes que o processo do cliente as use.

A extensão `mysqli` faz essa limpeza
chamando automaticamente a função C-API
`mysql_change_user()`.

O recurso de limpeza automática tem vantagens e desvantagens.
A vantagem é que o programador não precisa mais se preocupar em
adicionar código de limpeza, pois ele é chamado automaticamente. No entanto, a
desvantagem é que o código pode ser um *pouco*
mais lento, pois o código para executar a limpeza precisa ser executado
sempre que uma conexão é retornada do pool de conexões.

É possível desligar o código de limpeza automática, compilando o
PHP com
**`MYSQLI_NO_CHANGE_USER_ON_PCONNECT`**
definido.

> **Nota**:
>
> A extensão `mysqli` suporta conexões
> persistentes ao usar MySQL Native Driver ou MySQL Client
> Library.

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
