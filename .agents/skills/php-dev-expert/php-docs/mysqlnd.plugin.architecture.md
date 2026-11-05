# Arquitetura do Plugin do Driver Nativo MySQL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.architecture.php

---

## Arquitetura do Plugin do Driver Nativo MySQL

Esta seção fornece uma visão geral da arquitetura do plugin
`mysqlnd`.

**Visão Geral do Driver Nativo MySQL**

Antes de desenvolver plugins `mysqlnd`, é útil
saber um pouco de como o próprio `mysqlnd` é organizado.
`Mysqlnd` consiste nos seguintes módulos:

**O organograma mysqlnd, por módulo**

| Estatísticas de Módulos | mysqlnd\_statistics.c |
| --- | --- |
| Conexão | mysqlnd.c |
| Conjunto de resultados | mysqlnd\_result.c |
| Metadados do conjunto de resultados | mysqlnd\_result\_meta.c |
| Declaração | mysqlnd\_ps.c |
| Rede | mysqlnd\_net.c |
| Protocolo de fio | mysqlnd\_wireprotocol.c |

**Paradigma de C Orientado a Objetos**

No nível do código, `mysqlnd` usa um padrão C para
implementar orientação a objetos.

Em C você usa uma `struct` para representar um objeto.
Os membros da estrutura representam propriedades do objeto. Membros da estrutura
que apontam para funções representam métodos.

Ao contrário de outras linguagens como C++ ou Java, não existem regras
fixas sobre herança no paradigma do C orientado a objetos. No entanto,
existem algumas convenções que precisam ser seguidas e que serão
discutidas posteriormente.

**O Ciclo de Vida do PHP**

Ao considerar o ciclo de vida do PHP, existem dois ciclos básicos:

- Ciclo de inicialização e desligamento do mecanismo PHP
- Ciclo de requisição

Quando o mecanismo PHP for iniciado ele chamará a função de inicialização do módulo
(MINIT) de cada extensão registrada. Isso permite que cada
módulo configure variáveis ​​e aloque recursos que existirão durante
a vida útil do processo do mecanismo PHP. Quando o mecanismo PHP for desligado,
ele chamará a função de desligamento do módulo (MSHUTDOWN) de cada
extensão.

Durante a vida útil do mecanismo PHP, ele receberá diversas
solicitações. Cada solicitação constitui outro ciclo de vida. Em cada
solicitação, o mecanismo PHP chamará a função de inicialização de solicitação
de cada extensão. A extensão pode executar qualquer configuração de variável e
alocação de recursos necessária para o processamento de solicitações. À medida que o
ciclo de solicitação termina, o mecanismo chama a função de desligamento de solicitação (RSHUTDOWN)
de cada extensão para que ela possa realizar qualquer limpeza necessária.

**Como um plugin funciona**

Um plugin `mysqlnd` funciona interceptando chamadas feitas
para `mysqlnd` por extensões que usam
`mysqlnd`. Isto é conseguido obtendo a
tabela de funções `mysqlnd`, fazendo backup dela e
substituindo-a por uma tabela de funções customizada, que chama as funções do
plugin conforme necessário.

O código a seguir mostra como a tabela de funções `mysqlnd`
é substituída:

```
/* um lugar para armazenar a tabela de funções original */
struct st_mysqlnd_conn_methods org_methods;

void minit_register_hooks(TSRMLS_D) {
  /* tabela de funções ativas */
  struct st_mysqlnd_conn_methods * current_methods
    = mysqlnd_conn_get_methods();

  /* tabela de funções original de backup */
  memcpy(&org_methods, current_methods,
    sizeof(struct st_mysqlnd_conn_methods);

  /* instala novos métodos */
  current_methods->query = MYSQLND_METHOD(my_conn_class, query);
}
```

As manipulações da tabela de funções de conexão devem ser feitas durante a
inicialização do módulo (MINIT). A tabela de funções é um recurso global
compartilhado. Em um ambiente multithread, com construção de TSRM, a
manipulação de um recurso global compartilhado durante o processamento
da solicitação quase certamente resultará em conflitos.

> **Nota**:
>
> Não use nenhuma lógica de tamanho fixo ao manipular a
> tabela de funções `mysqlnd`: novos métodos podem ser adicionados
> ao final da tabela de funções. A tabela de funções pode mudar a
> qualquer momento no futuro.

**Chamando métodos da classe pai**

Se for feito backup das entradas originais da tabela de funções, ainda será
possível chamar as entradas originais da tabela de funções - os métodos
pai.

Em alguns casos, como em
`Connection::stmt_init()`, é vital chamar o
método pai antes de qualquer outra atividade no método derivado.

```
MYSQLND_METHOD(my_conn_class, query)(MYSQLND *conn,
  const char *query, unsigned int query_len TSRMLS_DC) {

  php_printf("my_conn_class::query(query = %s)\n", query);

  query = "SELECT 'query rewritten' FROM DUAL";
  query_len = strlen(query);

  return org_methods.query(conn, query, query_len); /* retorna com chamada ao método pai */
}
```

**Estendendo propriedades**

Um objeto `mysqlnd` é representado por uma estrutura C. Não
é possível adicionar um membro a uma estrutura C em tempo de execução. Usuários de
objetos `mysqlnd` não podem simplesmente adicionar propriedades aos
objetos.

Dados arbitrários (propriedades) podem ser adicionados a
um objeto `mysqlnd` usando uma função apropriada
da família
`mysqlnd_plugin_get_plugin_<object>_data()`.
Ao alocar um objeto, `mysqlnd` reserva
espaço no final do objeto para conter um ponteiro `void *`
para dados arbitrários. `mysqlnd` reserva espaço
para um ponteiro `void *` por plugin.

A tabela a seguir mostra como calcular a posição do
ponteiro para um plugin específico:

**Cálculo de ponteiro para mysqlnd**

| Endereço de memória | Conteúdo |
| --- | --- |
| 0 | Início da estrutura C do objeto mysqlnd |
| n | Final da estrutura C do objeto mysqlnd |
| n + (m x sizeof(void\*)) | void\* para dados do objeto do m-ésimo plugin |

Se for planejada uma sub-classe de qualquer dos construtores de objeto `mysqlnd`,
que é permitido, deve-se ter isto em mente!

O código a seguir mostra extensão de propriedades:

```
/* qualquer dado que se queira associar */
typedef struct my_conn_properties {
  unsigned long query_counter;
} MY_CONN_PROPERTIES;

/* id do plugin */
unsigned int my_plugin_id;

void minit_register_hooks(TSRMLS_D) {
  /* obtém ID único para o plugin */
  my_plugin_id = mysqlnd_plugin_register();
  /* recorte - consulte Estendendo Conexão: métodos */
}

static MY_CONN_PROPERTIES** get_conn_properties(const MYSQLND *conn TSRMLS_DC) {
  MY_CONN_PROPERTIES** props;
  props = (MY_CONN_PROPERTIES**)mysqlnd_plugin_get_plugin_connection_data(
    conn, my_plugin_id);
  if (!props || !(*props)) {
    *props = mnd_pecalloc(1, sizeof(MY_CONN_PROPERTIES), conn->persistent);
    (*props)->query_counter = 0;
  }
  return props;
}
```

O desenvolvedor do plugin é responsável pelo gerenciamento de memória dos
dados do plugin.

O uso do alocador de memória `mysqlnd` é recomendado
para dados do plugin. Essas funções são nomeadas usando a convenção:
`mnd_*loc()`. O alocador `mysqlnd`
possui alguns recursos úteis, como a capacidade de usar um
alocador de depuração em uma compilação sem depuração.

**Quando e como usar uma sub-classe**

|  | Quando usar uma sub-classe? | Cada instância tem sua própria tabela de funções privadas? | Como usar uma sub-classe |
| --- | --- | --- | --- |
| Conexão (MYSQLND) | MINIT | Não | mysqlnd\_conn\_get\_methods() |
| Conjunto de resultados (MYSQLND\_RES) | MINIT ou depois | Sim | mysqlnd\_result\_get\_methods() ou manipulação de tabela de funções de métodos de objeto |
| Metadados do conjunto de resultados (MYSQLND\_RES\_METADATA) | MINIT | Não | mysqlnd\_result\_metadata\_get\_methods() |
| Instrução (MYSQLND\_STMT) | MINIT | Não | mysqlnd\_stmt\_get\_methods() |
| Rede (MYSQLND\_NET) | MINIT ou depois | Sim | mysqlnd\_net\_get\_methods() ou manipulação de tabela de funções de métodos de objeto |
| Protocolo de fio (MYSQLND\_PROTOCOL) | MINIT ou depois | Sim | mysqlnd\_protocol\_get\_methods() ou manipulação de tabela de funções de métodos de objeto |

Não se deve manipular tabelas de funções em nenhum momento posterior ao MINIT
se isso não for permitido de acordo com a tabela acima.

Algumas classes contêm um ponteiro para a tabela de funções do método. Todas as
instâncias dessa classe compartilharão a mesma tabela de funções. Para
evitar o caos, especialmente em ambientes com threads, tais tabelas
de funções só devem ser manipuladas durante o MINIT.

Outras classes usam cópias de uma tabela de funções compartilhada globalmente. A
cópia da tabela de funções de classe é criada junto com o objeto. Cada
objeto usa sua própria tabela de funções. Isso dá duas opções: pode-se
manipular a tabela de funções padrão de um objeto no MINIT, e
também pode-se refinar os métodos de um objeto sem afetar
outras instâncias da mesma classe.

A vantagem da abordagem de tabela de funções compartilhadas é o desempenho.
Não há necessidade de copiar uma tabela de funções para cada objeto.

**Estado do construtor**

| Tipo | Alocação, construção, redefinição | Pode ser modificada? | Chamadora |
| --- | --- | --- | --- |
| Conexão (MYSQLND) | mysqlnd\_init() | Não | mysqlnd\_connect() |
| Conjunto de resultados (MYSQLND\_RES) | Alocação:  - Connection::result\_init()  Redefinida e reinicializada durante:  - Result::use\_result() - Result::store\_result | Sim, mas deve-se chamar o método pai! | - Connection::list\_fields() - Statement::get\_result() - Statement::prepare() (Somente metadados) - Statement::resultMetaData() |
| Metadados do conjunto de resultados (MYSQLND\_RES\_METADATA) | Connection::result\_meta\_init() | Sim, mas deve-se chamar o método pai! | Result::read\_result\_metadata() |
| Instrução (MYSQLND\_STMT) | Connection::stmt\_init() | Sim, mas deve-se chamar o método pai! | Connection::stmt\_init() |
| Rede (MYSQLND\_NET) | mysqlnd\_net\_init() | Não | Connection::init() |
| Protocolo de fio (MYSQLND\_PROTOCOL) | mysqlnd\_protocol\_init() | Não | Connection::init() |

É altamente recomendável que não se substitua totalmente um
construtor. Os construtores realizam alocações de memória. As alocações
de memória são vitais para a API do plugin `mysqlnd`
e para a lógica do objeto `mysqlnd`. Se não houver
preocupação com avisos e houver insistência em conectar os construtores, deve-se
pelo menos chamar o construtor pai antes de fazer qualquer coisa no
construtor.

Independentemente de todos os avisos, pode ser útil criar sub-classes de
construtores. Os construtores são o lugar perfeito para modificar as
tabelas de funções de objetos com tabelas de objetos não compartilhados, como
Conjunto de Resultados, Rede, Protocolo de Fio.

**Estado do destruidor**

| Tipo | Método derivado deve chamar o pai? | Destruidor |
| --- | --- | --- |
| Conexão | sim, após execução do método | free\_contents(), end\_psession() |
| Conjunto de resultados | sim, após execução do método | free\_result() |
| Metadados do conjunto de resultados | sim, após execução do método | free() |
| Instrução | sim, após execução do método | dtor(), free\_stmt\_content() |
| Rede | sim, após execução do método | free() |
| Protocolo de fio | sim, após execução do método | free() |

Os destruidores são o local apropriado para liberar propriedades,
`mysqlnd_plugin_get_plugin_<object>_data()`.

Os destruidores listados podem não ser equivalentes ao método
`mysqlnd` real que libera o próprio objeto. No entanto,
eles são o melhor lugar possível para se conectar e liberar os dados do
plugin. Tal como acontece com os construtores, pode-se substituir totalmente
os métodos, mas isso não é recomendado. Se vários métodos estiverem listados
na tabela acima, será necessário conectar todos os métodos listados
e liberar os dados do plugin em qualquer método chamado primeiro pelo
`mysqlnd`.

O método recomendado para plugins é simplesmente conectar os métodos,
liberar memória e chamar a implementação pai imediatamente
após isso.

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
