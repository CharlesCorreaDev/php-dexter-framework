# Introdução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.intro.php

---

# Introdução

PHP é uma linguagem poderosa e um interpretador, seja incluído
em um servidor web como um módulo ou executado separadamente como
binário CGI, é possível acessar arquivos, executar
comandos e abrir conexões de rede no servidor. Essas propriedades
fazem qualquer coisa executando em um servidor web inseguras por padrão.
PHP é desenhado especificamente para ser uma linguagem mais segura para
escrever programas CGI que Perl ou C, e com a escolha correta de
opções de configuração em tempo compilação ou de execução, e práticas
corretas de programação, ela pode dar a combinação exata de liberdade
e segurança que você precisa.

Como existem diferentes maneiras de utilizar o PHP, existem várias
opções de configuração controlando seu comportamento. Um grande
leque de opções garante que você pode usar o PHP para vários
propósitos, mas também significa que existem combinações dessas
opções e configurações do servidor que resultam em uma instalação
insegura.

A flexibilidade de configuração do PHP é comparável com a
flexibilidade de código. PHP pode ser usado para montar um servidor de
aplicações completo, com todo o poder de um usuário shell, ou pode ser
usado para inclusão simples de arquivos no lado do servidor com pouco risco
em um ambiente bem controlado. Como montar o ambiente, e o quão
seguro ele é, depende muito do desenvolvedor.

Esse capítulo começa com alguns conselhos genéricos de segurança, explica
as diferentes combinações de opções de configuração e as situações
nas quais elas podem ser usadas com segurança e descreve diferentes considerações
quanto ao desenvolvimento para diferentes níveis de segurança.

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
