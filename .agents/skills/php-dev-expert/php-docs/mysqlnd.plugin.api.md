# A API do plugin mysqlnd

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.plugin.api.php

---

## A API do plugin mysqlnd

A seguir está uma lista de funções fornecidas na API
do plugin `mysqlnd`:

- mysqlnd\_plugin\_register()
- mysqlnd\_plugin\_count()
- mysqlnd\_plugin\_get\_plugin\_connection\_data()
- mysqlnd\_plugin\_get\_plugin\_result\_data()
- mysqlnd\_plugin\_get\_plugin\_stmt\_data()
- mysqlnd\_plugin\_get\_plugin\_net\_data()
- mysqlnd\_plugin\_get\_plugin\_protocol\_data()
- mysqlnd\_conn\_get\_methods()
- mysqlnd\_result\_get\_methods()
- mysqlnd\_result\_meta\_get\_methods()
- mysqlnd\_stmt\_get\_methods()
- mysqlnd\_net\_get\_methods()
- mysqlnd\_protocol\_get\_methods()

Não existe uma definição formal do que é um plugin e como funciona
um mecanismo de plugin.

Os componentes frequentemente encontrados em mecanismos de plugins são:

- Um gerenciador de plugin
- Uma API de plugin
- Serviços (ou módulos) de aplicação
- APIs de serviço (ou APIs de módulo) de aplicação

O conceito do plugin `mysqlnd` emprega esses recursos e,
adicionalmente, desfruta de uma arquitetura aberta.

**Sem Restrições**

Um plugin tem acesso total ao funcionamento interno do
`mysqlnd`. Não há limites ou restrições de
segurança. Tudo pode ser sobrescrito para implementar algoritmos amigáveis ​​ou
hostis. É recomendado que se implante apenas plugins de uma
fonte confiável.

Conforme discutido anteriormente, os plugins podem usar ponteiros livremente. Esses
ponteiros não são restritos de forma alguma e podem apontar para dados
de outro plugin. A aritmética de deslocamento simples pode ser usada para ler
os dados de outro plugin.

É recomendado que se escreva plugins cooperativos e que sempre se
chame o método pai. Os plugins devem sempre cooperar
com o próprio `mysqlnd`.

**Questões: um exemplo de encadeamento e cooperação**

| Extensão | Ponteiro mysqlnd.query() | pilha de chamadas se estiver chamando o pai |
| --- | --- | --- |
| ext/mysqlnd | mysqlnd.query() | mysqlnd.query |
| ext/mysqlnd\_cache | mysqlnd\_cache.query() | 1. mysqlnd\_cache.query() 2. mysqlnd.query |
| ext/mysqlnd\_monitor | mysqlnd\_monitor.query() | 1. mysqlnd\_monitor.query() 2. mysqlnd\_cache.query() 3. mysqlnd.query |

Neste cenário, um cache (`ext/mysqlnd_cache`) e
um plugin de monitor (`ext/mysqlnd_monitor`) são carregados.
Ambas são sub-classes de `Connection::query()`. O registro
do plugin acontece em `MINIT` usando a lógica
mostrada anteriormente. O PHP chama extensões em ordem alfabética por
padrão. Os plugins não reconhecem uns aos outros e não definem dependências
de extensão.

Por padrão, os plugins chamam a implementação pai do método de
consulta em sua versão derivada do método.

**Recapitulação da Extensão PHP**

Esta é uma recapitulação do que acontece ao usar um plugin de exemplo,
`ext/mysqlnd_plugin`, que expõe a API do
plugin C `mysqlnd` ao PHP:

- Qualquer aplicação PHP MySQL tenta estabelecer uma conexão com
  192.168.2.29
- A aplicação PHP usará `ext/mysql`,
  `ext/mysqli` ou `PDO_MYSQL`. Todas
  as três extensões PHP MySQL usam `mysqlnd` para
  estabelecer a conexão com 192.168.2.29.
- `Mysqlnd` chama seu método de conexão, que agora é
  uma sub-classe de `ext/mysqlnd_plugin`.
- `ext/mysqlnd_plugin` chama o gancho do espaço de usuário
  `proxy::connect()` registrado pelo usuário.
- O gancho do espaço de usuário altera o IP do host de conexão de 192.168.2.29
  para 127.0.0.1 e retorna a conexão estabelecida por
  `parent::connect()`.
- `ext/mysqlnd_plugin` executa o equivalente a
  `parent::connect(127.0.0.1)` chamando o
  método `mysqlnd` original para estabelecer uma
  conexão.
- `ext/mysqlnd` estabelece uma conexão e retorna
  ao `ext/mysqlnd_plugin`.
  `ext/mysqlnd_plugin` também retorna.
- Qualquer que seja a extensão PHP MySQL utilizada pela aplicação, ela
  recebe uma conexão com 127.0.0.1. A própria extensão PHP MySQL
  retorna ao aplicativo PHP. E o ciclo se fecha.

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
