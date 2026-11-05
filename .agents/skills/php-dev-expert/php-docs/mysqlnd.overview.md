# Visão Geral

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqlnd.overview.php

---

# Visão Geral

**O que o mysqlnd não é**

Embora o Driver Nativo MySQL seja escrito como uma extensão PHP, é
importante observar que ele não fornece uma nova API para o programador
PHP. As APIs do programador para conectividade de banco de dados MySQL são
fornecidas pela extensão MySQL, `mysqli` e PDO
MYSQL. Essas extensões agora podem usar os serviços do Driver Nativo
MySQL para se comunicar com o servidor MySQL. Portanto, não se deve
pensar no Driver Nativo MySQL como uma API.

**Por que usá-lo?**

A utilização do Driver Nativo MySQL oferece uma série de vantagens
em relação à utilização da Biblioteca Cliente MySQL.

A antiga biblioteca cliente MySQL foi escrita pela MySQL AB (agora Oracle
Corporation) e, portanto, foi lançada sob a licença MySQL. Isso
acabou fazendo com que o suporte ao MySQL fosse desativado por padrão no PHP.
Porém, o Driver Nativo MySQL foi desenvolvido como parte do projeto
PHP, sendo portanto liberado sob a licença PHP. Isso elimina
problemas de licenciamento que foram problemáticos no passado.

Além disso, no passado, era necessário construir as extensões de banco de dados MySQL
com uma cópia da biblioteca cliente MySQL. Isso normalmente significava que
era necessário ter o MySQL instalado em uma máquina onde o código-fonte PHP
estivesse sendo compilado. Além disso, quando o aplicativo PHP estava em execução, as
extensões do banco de dados MySQL chamavam o arquivo da biblioteca do cliente
MySQL em tempo de execução, portanto, o arquivo precisava estar instalado no sistema.
Com o Driver Nativo MySQL isso não acontece mais, pois está incluído
como parte da distribuição padrão. Portanto, não é mais necessário o MySQL
instalado para construir o PHP ou executar aplicações de banco de dados PHP.

Como o Driver Nativo MySQL é escrito como uma extensão do PHP, ele está
fortemente acoplado ao funcionamento do PHP. Isso leva a ganhos de
eficiência, principalmente no que diz respeito ao uso de memória, já que o driver
utiliza o sistema de gerenciamento de memória PHP. Ele também suporta o limite de memória
do PHP. Usar o Driver Nativo MySQL leva a um desempenho comparável ou
melhor do que usar a Biblioteca Cliente MySQL, garantindo sempre o
uso mais eficiente da memória. Um exemplo de eficiência de memória é
o fato de que ao utilizar a Biblioteca Cliente MySQL, cada linha é armazenada
na memória duas vezes, enquanto no Driver Nativo MySQL cada linha é armazenada
apenas uma vez na memória.

> **Nota**:
> **Reportando o uso da memória**  
>
> Como o Driver Nativo MySQL utiliza o sistema de gerenciamento de memória PHP, seu
> uso de memória pode ser rastreado com [memory\_get\_usage()](function.memory-get-usage.md).
> Isso não é possível com a libmysqlclient porque ela usa a função C
> malloc().

**Special features**

O Driver Nativo MySQL também fornece alguns recursos especiais não disponíveis
quando as extensões de banco de dados MySQL utilizam a Biblioteca Cliente MySQL. Esses
recursos especiais estão listados abaixo:

- Conexões persistentes melhoradas
- A função especial [mysqli\_fetch\_all()](mysqli-result.fetch-all.md)
- Chamadas para estatísticas de desempenho:
  [mysqli\_get\_client\_stats()](function.mysqli-get-client-stats.md),
  [mysqli\_get\_connection\_stats()](mysqli.get-connection-stats.md)

O recurso de estatísticas de desempenho pode ser muito útil na
identificação de gargalos de desempenho.

O Driver Nativo MySQL também permite conexões persistentes quando utilizado
com a extensão `mysqli`.

**Suporte a SSL**

Driver Nativo MySQL suporta SSL.

**Suporte a Protocolo com Compressão**

Driver Nativo MySQL suporta o protocolo cliente-servidor
com compressão. A extensão `ext/mysqli`, se configurada para usar Driver Nativo MySQL,
também pode tomar vantagem deste recurso. Observe que `PDO_MYSQL`
*NÃO* suporta compressão quando usada junto com mysqlnd.

**Suporte a Tubos Nomeados**

Tubos nomeados podem ser usado para conexão em ambientes Windows.

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
