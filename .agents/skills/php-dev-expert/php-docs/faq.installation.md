# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.installation.php

---

# Instalação

Esta seção contém perguntas comuns sobre a maneira de instalar
o PHP. O PHP está disponível para quase todos os sistemas operacionais, e praticamente qualquer servidor web.

Para instalar o PHP, siga as instruções em [Instalação e Configuração](install.md).

1. [Por que não devemos usar o Apache2 com um módulo MPM com threads em um ambiente de produção?](#faq.installation.apache2)
2. [Unix/Windows: Onde deveria estar localizado meu arquivo
   php.ini?](#faq.installation.phpini)
3. [Unix: Eu instalei o PHP, mas toda vez que carrego um documento, recebo a
   mensagem 'Document Contains No Data'! O que está acontecendo?](#faq.installation.nodata)
4. [Unix: Eu instalei o PHP usando RPMS, mas o Apache não está processando as
   páginas PHP! O que está acontecendo aqui?](#faq.installation.processing)
5. [Unix: Eu corrigi o Apache com o patch das extensões FrontPage, e
   repentinamente o PHP parou de funcionar. O PHP é incompatível com as
   extensões FrontPage do Apache?](#faq.installation.frontpage)
6. [Unix/Windows: Eu tenho o PHP instalado, mas quando tento
   acessar um arquivo de script PHP através do meu browser, recebo uma tela em branco.](#faq.installation.blankscreen)
7. [Unix/Windows: Eu instalei o PHP, mas quando tento
   acessar um arquivo de script PHP através do meu browser,
   recebo um erro 500 do servidor.](#faq.installation.500error)
8. [Alguns sistemas operacionais: Eu instalei o PHP sem erros,
   mas quando eu tento iniciar o Apache recebo erros de undefined symbol:
   [mybox:user /src/php5] root# apachectl configtest
   apachectl: /usr/local/apache/bin/httpd Undefined symbols:
   \_compress
   \_uncompress](#faq.installation.undefinedsyms)
9. [Windows: Eu instalei o PHP, mas quando tento acessar
   um arquivo de script PHP através do meu navegador, eu recebo o erro:
   cgi error:
   The specified CGI application misbehaved by not
   returning a complete set of HTTP headers.
   The headers it did return are:](#faq.installation.cgierror)
10. [Windows: Eu segui todas as instruções, mas ainda não consegui
    fazer o PHP e o IIS trabalharem juntos!](#faq.installation.phpandiis)
11. [Quando executo o PHP como CGI com o IIS, PWS, OmniHTTPD ou Xitami,
    recebo o seguinte erro: Security Alert! PHP CGI
    cannot be accessed directly..](#faq.installation.forceredirect)
12. [Como eu sei se meu php.ini está sendo encontrado e lido?
    Parece que ele não está, já que as minhas alterações não estão sendo efetuadas.](#faq.installation.findphpini)
13. [Como eu adiciono meu diretório PHP ao PATH
    do Windows?](#faq.installation.addtopath)
14. [Como eu torno o arquivo php.ini disponível para o PHP no Windows?](#faq.installation.phprc)
15. [Windows: Como verificar se o PHP pode escrever no diretório temporário
    com o IIS?](#faq.installation.windows-temporary-path)
16. [É possível usar a negociação de conteúdo do Apache (opção MultiViews)
    com o PHP?](#faq.installation.apache.multiviews)
17. [O PHP é limitado a processar apenas os métodos de requisições GET e POST?](#faq.installation.requestmethods)

**Por que não devemos usar o Apache2 com um módulo MPM com threads em um ambiente de produção?**
:   O PHP é como uma cola. É a cola usada para construir aplicações web legais
    unindo dezenas de bibliotecas de terceiros e fazendo tudo parecer como
    uma entidade coerente através de uma interface de linguagem intuitiva e fácil de
    aprender. A flexibilidade e poder do PHP dependem da estabilidade e
    robustez da plataforma subjacente. Ele precisa de um sistema operacional funcionando, um
    servidor web funcionando e bibliotecas de terceiros funcionando para juntar. Quando qualquer
    um desses elementos para de funcionar o PHP precisa de meios de identificar e remediar os problemas
    rapidamente. Quando tornamos a arquitetura subjacente mais complexa por não ter
    threads de execução completamente separadas, segmentos de memória completamente
    separados e uma sandbox sólida onde cada requisição é executada, mais
    problemas são introduzidos ao sistema do PHP.

    Se quiser utilizar um módulo MPM com threads, veja uma configuração FastCGI
    onde o PHP seja executado em seu próprio espaço de memória.

**Unix/Windows: Onde deveria estar localizado meu arquivo php.ini?**
:   Por padrão no Unix ele deve estar em /usr/local/lib
    que é o <install-path>/lib.
    A maioria das pessoas vai querer mudar isso em tempo de compilação com a flag
    [--with-config-file-path](configure.about.md#configure.with-config-file-path).
    Poderíamos, por exemplo, configurá-la com algo como:

    ```
    --with-config-file-path=/etc
    ```

    E então poderíamos copiar php.ini-development do
    local de origem da instalação para /etc/php.ini e
    editá-lo para fazer quaisquer alterações locais que desejássemos.

    ```
    --with-config-file-scan-dir=PATH
    ```

    No Windows, o caminho padrão para o arquivo php.ini é o diretório
    Windows. Se estivermos usando o servidor web Apache, o php.ini primeiro é
    procurado no diretório de instalação do Apache, por exemplo, c:\program
    files\apache group\apache. Desta maneira, poderíamos ter
    diferentes arquivos php.ini para diferentes versões do Apache na mesma
    máquina.

    Veja também o capítulo sobre o [arquivo de configuração](configuration.file.md).

**Unix: Eu instalei o PHP, mas toda vez que carrego um documento, recebo a mensagem 'Document Contains No Data'! O que está acontecendo?**
:   Isso provavelmente significa que o PHP está tendo algum tipo de problema
    e está sofrendo um core dump (fim com despejo de memória). Olhe nos logs de erro do servidor web para ver se
    este é o caso, e então tente reproduzir o problema com
    um pequeno caso de teste. Se você souber como usar 'gdb', é muito
    útil quando você pode fornecer um backtrace com seu relatório de erros
    para ajudar os desenvolvedores a identificar o problema. Se estiver usando
    o PHP como um módulo do Apache tente algo como:

    - Pare seus processos httpd
    - gdb httpd
    - Pare seus processos httpd
    - > execute -X -f /caminho/para/httpd.conf
    - Então acesse o URL que está causando problemas com seu browser.
    - > execute -X -f /caminho/para/httpd.conf
    - Se estiver ocorrendo um core dump, o gdb deverá informar sobre isso agora
    - type: bt
    - Você deve incluir o backtrace no seu relatório de erros. Envie o relatório para
      [» https://github.com/php/php-src/issues](https://github.com/php/php-src/issues)

    Se o seu script usa as funções de expressões regulares
    ([preg\_match()](function.preg-match.md) e demais), você deve ter certeza
    de que compilou o PHP e o Apache com a mesma versão do pacote de expressões
    regulares. Isso deve acontecer automaticamente com o
    PHP e Apache 1.3.x.

**Unix: Eu instalei o PHP usando RPMS, mas o Apache não está processando as páginas PHP! O que está acontecendo aqui?**
:   Supondo que você instalou tanto o Apache quanto o PHP a partir dos pacotes RPM,
    você precisa descomentar ou adicionar algumas ou
    todas as linhas a seguir ao seu arquivo httpd.conf:

    ```
    # Módulos extra
    AddModule mod_php.c
    AddModule mod_perl.c

    # Módulos extra
    LoadModule php_module         modules/mod_php.so
    LoadModule php5_module        modules/libphp5.so
    LoadModule perl_module        modules/libperl.so
    ```

    E adicionar:

    ```
    AddType application/x-httpd-php .php
    ```

    ... às propriedades globais, ou às propriedades do
    VirtualDomain ao qual você deseja adicionar o suporte ao PHP.

**Unix: Eu corrigi o Apache com o patch das extensões FrontPage, e repentinamente o PHP parou de funcionar. O PHP é incompatível com as extensões FrontPage do Apache?**
:   Não, O PHP funciona bem com as extensões FrontPage. O problema
    é que o patch do FrontPage modifica diversas estruturas do Apache,
    das quais o PHP depende. Recompilar o PHP (usando 'make clean ; make')
    depois de aplicar o patch FP deve resolver o problema.

**Unix/Windows: Eu tenho o PHP instalado, mas quando tento acessar um arquivo de script PHP através do meu browser, recebo uma tela em branco.**
:   Faça um 'view source' no navegador web e provavelmente
    descobrirá que pode ver o código fonte do seu script PHP.
    Isto significa que o seu servidor web não enviou o script para
    o interpretador do PHP. Algo está errado com as configurações do seu servidor - verifique novamente
    as configurações de seu servidor, com base nas instruções de
    instalação do PHP.

**Unix/Windows: Eu instalei o PHP, mas quando tento acessar um arquivo de script PHP através do meu browser, recebo um erro 500 do servidor.**
:   Alguma coisa deu errado quando o servidor tentou executar o PHP. Para
    conseguir ver uma mensagem de erro razoável, na linha de comando,
    mude para o diretório que contém o executável do PHP
    (php.exe no Windows) e execute
    **php -i**. Se o PHP tiver algum problema para rodar,
    então uma mensagem de erro apropriada será exibida, o que lhe
    dará pistas do que precisa ser feito em seguida. Se você
    receber uma tela cheia de códigos HTML (a saída da função
    [phpinfo()](function.phpinfo.md)) então o PHP está funcionando,
    e seu problema pode ser relacionado à configuração do seu
    servidor, que você deve verificar novamente.

**Alguns sistemas operacionais: Eu instalei o PHP sem erros, mas quando eu tento iniciar o Apache recebo erros de undefined symbol: ``` [mybox:user /src/php5] root# apachectl configtest apachectl: /usr/local/apache/bin/httpd Undefined symbols: _compress _uncompress ```**
:   Isto não tem nada a ver com o PHP, mas com as bibliotecas do
    cliente MySQL. Algumas necessitam de **--with-zlib**, outras não. Isso
    também é abordado nas FAQ do MySQL.

**Windows: Eu instalei o PHP, mas quando tento acessar um arquivo de script PHP através do meu navegador, eu recebo o erro: ``` cgi error: The specified CGI application misbehaved by not returning a complete set of HTTP headers. The headers it did return are: ```**
:   Esta mensagem de erro significa que o PHP falhou em gerar
    qualquer saída. Para começar a ver uma mensagem de erro razoável,
    na linha de comando, mude para o diretório que contém o
    executável PHP (php.exe no Windows) e execute
    **php -i**. Se o PHP estiver com algum problema para rodar,
    então uma mensagem de erro adequada será exibida, o que
    lhe dará uma ideia do que precisa ser feito em seguida. Se você
    receber uma tela cheia de códigos HTML (a saída da função
    [phpinfo()](function.phpinfo.md)) então o PHP está funcionando.

    Uma vez que o PHP esteja funcionando na linha do comando, tente acessar o
    script via navegador novamente. Se ele ainda falhar, então
    pode ser um dos seguintes:

    - As permissões de arquivo no seu script PHP,
      php.exe, php5ts.dll,
      php.ini ou qualquer extensão do PHP que você está tentando carregar são tais
      que o usuário anônimo
      `ISUR_<machinename>` não pode acessá-los.
    - O arquivo de script não existe (ou provavelmente não está onde você
      acha que ele está em relação ao seu diretório root web). Note que
      com o IIS você pode interceptar o erro marcando a opção 'verificar se o arquivo
      existe' quando configurar os mapeamentos de script no
      Gerenciador de Serviços de Internet. Se um arquivo de script não existe
      então o servidor web irá retornar um erro 404. Há
      também o benefício adicional que o IIS fará qualquer
      autenticação exigida para você com base nas permissões
      NTLanMan no seu arquivo de script.

**Windows: Eu segui todas as instruções, mas ainda não consegui fazer o PHP e o IIS trabalharem juntos!**
:   Certifique-se de que qualquer usuário que precise executar um script PHP tem
    permissão para executar o php.exe! O IIS usa um usuário anônimo
    que é adicionado no momento que o IIS é instalado. Este usuário precisa
    de permissões para o php.exe. Além disso, qualquer usuário
    autenticado também precisará ter permissão para executar o php.exe.
    E para o IIS4 você precisa dizer que o PHP é um engine de script.
    Além disso, você também vai querer ler
    [esta FAQ](faq.installation.md#faq.installation.forceredirect).

**Quando executo o PHP como CGI com o IIS, PWS, OmniHTTPD ou Xitami, recebo o seguinte erro: `Security Alert! PHP CGI cannot be accessed directly.`.**
:   Você deve definir a diretiva [cgi.force\_redirect](ini.core.md#ini.cgi.force-redirect) para `0`.
    O padrão é `1`, então certifique-se que
    a diretiva não está comentada (com um `;`). Como
    todas as diretivas, esta é definida no php.ini

    Pelo fato do padrão ser `1`, é fundamental
    que você tenha certeza de que o arquivo php.ini correto está sendo
    lido. Leia [esta FAQ](faq.installation.md#faq.installation.findphpini) para detalhes.

**Como eu sei se meu php.ini está sendo encontrado e lido? Parece que ele não está, já que as minhas alterações não estão sendo efetuadas.**
:   Para ter certeza de que seu php.ini está sendo lido pelo PHP, faça uma chamada
    à função [phpinfo()](function.phpinfo.md). Próximo ao topo, haverá uma
    lista chamada `Configuration File (php.ini)`.
    Esta irá lhe dizer onde o PHP está procurando o php.ini e
    se ele está sendo lido ou não. Se houver apenas um diretório do PATH,
    então ele não está sendo lido e você deve colocar seu php.ini
    neste diretório. Se o php.ini está incluso dentro do PATH,
    ele está sendo lido.

    Se o php.ini está sendo lido e seu PHP está sendo executado como um módulo,
    então certifique-se de reiniciar seu servidor web depois de fazer alterações no
    php.ini.

    Veja também [php\_ini\_loaded\_file()](function.php-ini-loaded-file.md).

**Como eu adiciono meu diretório PHP ao PATH do Windows?**
:   No Windows:

    - Vá até o Painel de Controle e abra o ícone de Sistema (Iniciar → Painel de Controle)
    - Vá até a aba Avançado
    - Clique no botão 'Variáveis de Ambiente'
    - Procure o painel 'Variáveis do Sistema'
    - Encontre o item Path (talvez você precise rolar a lista para encontrá-lo)
    - Dê um duplo clique no item Path
    - Adicione seu diretório do PHP ao final, incluindo ';' antes (por exemplo,
      `;C:\php`)
    - Aperte OK e reinicie seu computador

    > **Nota**:
    >
    > Certifique-se de reiniciar depois de seguir os passos acima para garantir que as
    > alterações ao PATH sejam aplicadas.

**Como eu torno o arquivo php.ini disponível para o PHP no Windows?**
:   Existem várias maneiras de fazer isso. Se você estiver usando o Apache,
    consulte a documentação do Apache, caso contrário,
    você deve definir a variável de ambiente PHPRC.

**Windows: Como verificar se o PHP pode escrever no diretório temporário com o IIS?**
:   1. Clique com o botão direito no diretório temporário (%TEMP%)
       no Explorador de Arquivos para obter as permissões.
       O diretório temporário está disponível na configuração ou através da função
       [phpinfo()](function.phpinfo.md).
    2. Para o IIS, verifique que o usuário `IIS_User` tem
       permissão de `MODIFY` (alteração).

**É possível usar a negociação de conteúdo do Apache (opção MultiViews) com o PHP?**
:   Se os links para arquivos PHP incluem extensões, tudo funcionará perfeitamente. Esta
    FAQ é apenas para o caso em que links para arquivos PHP não incluem a extensão
    e você quer usar a negociação de conteúdo para selecionar arquivos PHP a partir de URLs
    sem nenhuma extensão.
    Neste caso, substitua a linha `AddType application/x-httpd-php
    .php` por:

    ```
    AddHandler php5-script php
    AddType text/html php
    ```

    Esta solução não funciona para o Apache 1, pois o módulo PHP não captura
    `php-script`.

**O PHP é limitado a processar apenas os métodos de requisições GET e POST?**
:   Não, é possível lidar com qualquer método de requisição, por exemplo, CONNECT. Status
    de respostas adequados podem ser enviados com [header()](function.header.md).
    Se somente os métodos GET e POST devem ser manipulados, isso pode ser
    alcançado com esta configuração do Apache:

    ```
    <LimitExcept GET POST>
    Deny from all
    </LimitExcept>
    ```

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
