# Ataque Possível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/security.cgi-bin.attacks.php

---

## Ataque Possível

Usando o PHP como binário CGI é uma opção de
instalação que por alguma razão não deseja integrar o PHP como um
módulo no servidor (como o Apache), ou usará o PHP com
tipos diferentes de empacotadores CGI para criar ambientes
**chroot** e **setuid** seguros
para os scripts. Esta configuração geralmente envolve a instalação
do binário **php** executável para o diretório cgi-bin do servidor web.
A CERT Advisory [» CA-96.11](https://www.cert.org/advisories/CA-1996-11.html) recomenda
não colocar nenhum interpretador em cgi-bin.
Mesmo se o binário **php** possa ser usado como um interpretador autônomo,
o PHP foi projetado para evitar os ataques que essa forma de instalação torna possível:

- Acessar arquivos de sistema: http://my.host/cgi-bin/php?/etc/passwd

  A informação de consulta em uma URL depois da interrogação (`?`) é
  passada como argumentos de linha de comando para o interpretador pela
  interface CGI. Normalmente os interpretadores abrem e executam o arquivo
  especificado como primeiro argumento na linha de comando.

  Quando invocado como binário CGI, o **php** se recusa a interpretar os
  argumentos de linha de comando.
- Acessar qualquer domento web no servidor: http://my.host/cgi-bin/php/secret/doc.html

  A parte de informação de caminho da URL depois do nome do binário do PHP,
  /secret/doc.html é
  convencionalmente usada para especificar o nome do arquivo a ser
  aberto e interpretado pelo programa CGI
  Normalmente algumas diretivas de configuração do servidor web (Apache:
  `Action`) são usadas para redirecionar requisições para documentos como
  http://my.host/secret/script.php para o
  interpretados do PHP. Dessa maneira, o servidor web primeiro checa
  as permissões de acesso ao diretório /secret, e depois cria a
  requisição redirecionada http://my.host/cgi-bin/php/secret/script.php.
  Infelizmente, se a requisição é dada originalmente nessa forma,
  a checagem de permissão não é feita para o arquivo /secret/script.php, mas apenas para o arquivo
  /cgi-bin/php. Dessa maneira
  qualquer usuário que pode acessar /cgi-bin/php pode acessar quaisquer
  documentos protegidos no servidor web.

  No PHP, as diretivas de tempo de execução [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect), [doc\_root](ini.core.md#ini.doc-root) e [user\_dir](ini.core.md#ini.user-dir) podem ser usadas para prevenir
  esse ataque, se a árvore de documentos do servidor tiver qualquer diretório
  com restrições de acesso. Veja abaixo a explicação completa
  das diferentes combinações.

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
