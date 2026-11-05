# Usando o pacote do PHP no macOS para versões anteriores ao macOS Monterey

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.macosx.bundled.php

---

## Usando o pacote do PHP no macOS para versões anteriores ao macOS Monterey

O PHP vem incluído com o macOS desde a versão macOS X (10.0.0) até a versão macOS Monterey (12.0.0).
Habilitar o PHP no servidor web padrão requer apenas descomentar algumas linhas no
arquivo de configuração do Apache (httpd.conf) enquanto que
a versão CGI e/ou CLI estão disponíveis
automaticamente (facilmente acessíveis pelo Terminal).

Habilitar o PHP usando as instruções abaixo tem como objetivo configurar rapidamente
um ambiente de desenvolvimento local. É *altamente recomendado*
sempre atualizar o PHP para a versão mais nova. Como qualquer software ativo,
novas versões são criadas para corrigir problemas e adicionar funcionalidades e o PHP
não é diferente. As seguintes instruções são direcionadas para iniciantes,
os detalhes fornecidos permitem que uma configuração padrão funcione. Todos os
usuários são encorajados a compilar ou a instalar uma versão nova do pacote.

O tipo de instalação padrão é usando mod\_php, e habilitar o pacote
mod\_php no macOS para o servidor Apache (o servidor web padrão,
que é acessível via Preferências de Sistema) envolve os seguintes passos:

1. Localize e abra o arquivo de configuração do Apache. Normalmente, ele está
   em: /private/etc/apache2/httpd.conf

   Usar `Finder` ou `Spotlight` para encontrar
   esse arquivo pode ser complicado, já que ele normalmente é privado e o dono
   é o usuário `root`.

   > **Nota**:
   >
   > Uma maneira de modificar o arquivo é usando um editor de texto baseado em Unix no
   > Terminal, por exemplo `nano` e, como o proprietário do arquivo
   > é o `root`, será usado o comando `sudo`.
   > Para abri-lo (no usuário `root`), digite o seguinte comando no
   > `Terminal` (será necessário digitar
   > a senha):
   > `sudo nano /private/etc/apache2/httpd.conf`
   >
   > Comandos importantes do nano: `^w` (buscar),
   > `^o` (salvar), e `^x` (sair) onde
   > `^` representa a tecla Ctrl.

   > **Nota**:
   >
   > Versões do Mac OS X anteriores a 10.5 foram empacotadas com versões mais
   > antigas do PHP e do Apache. Devido a isso, o arquivo de configuração do
   > Apache pode estar em /etc/httpd/httpd.conf.
2. Com um editor de texto, descomente as linhas (removendo os #) que parecem
   com as linhas abaixo (essas duas linhas normalmente não estão juntas,
   localize ambas no arquivo):

   ```
   # LoadModule php5_module libexec/httpd/libphp5.so

   # AddModule mod_php5.c
   ```

   Observe a localização/caminho. Quando compilar o PHP no futuro, os
   arquivos acima devem ser substituídos ou comentados.
3. Certifique-se que as extensões desejadas serão avaliadas como códigos PHP (exemplos:
   .php, .html
   e .inc).

   Como a seguinte instrução já existe no
   httpd.conf (a partir do Mac Panther), uma vez que o PHP
   for habilitado, os arquivos .php serão automaticamente
   interpretados como código PHP.

   ```
   <IfModule mod_php5.c>
       # If php is turned on, we respect .php and .phps files.
       AddType application/x-httpd-php .php
       AddType application/x-httpd-php-source .phps

       # Since most users will want index.php to work we
       # also automatically enable index.php
       <IfModule mod_dir.c>
           DirectoryIndex index.html index.php
       </IfModule>
   </IfModule>
   ```

   > **Nota**:
   >
   > Antes do OS X 10.5 (Leopard), o PHP 4 vinha empacotado no lugar
   > do PHP 5, neste caso as instruções acima serão um pouco diferentes,
   > mudando de 5 para 4.
4. Assegure-se de que a diretiva DirectoryIndex carrega o arquivo de índice desejado.

   Isso também é configurável no arquivo httpd.conf. Tipicamente
   index.php e index.html são
   usados. Por padrão, index.php é habilitado porque
   também está na verificação mostrada abaixo. Modifique como desejar.
5. Configure a localização do arquivo php.ini ou use a padrão.

   Uma localização típica no macOS é
   /usr/local/php/php.ini e uma chamada à
   [phpinfo()](function.phpinfo.md) revelará essa informação.
   Se não for usado um arquivo php.ini, o PHP usará todos os valores padrão.
   Veja também o FAQ relacionado em
   [encontrando o php.ini](faq.installation.md#faq.installation.phpini).
6. Localize ou configure `DocumentRoot`.

   Esse é o diretório raiz para todos os arquivos do servidor. Os arquivos nesse diretório
   serão servidos pelo servidor web, então os arquivos PHP serão interpretados como PHP antes de
   terem seu resultado enviado para o servidor. Um caminho padrão para isso é
   /Library/WebServer/Documents mas isso pode ser modificado para
   qualquer outro no arquivo httpd.conf. Alternativamente, o
   DocumentRoot para usuários individuais é
   /Users/yourusername/Sites
7. Crie um arquivo [phpinfo()](function.phpinfo.md).

   A função [phpinfo()](function.phpinfo.md) mostrará informações sobre o PHP.
   Considere criar um arquivo no DocumentRoot com o seguinte código PHP:

   ```
   <?php phpinfo(); ?>
   ```
8. Reinicie o Apache e carregue o arquivo PHP criado acima.

   Para reiniciar, execute `sudo apachectl graceful` no
   shell ou stop/start na opção "Personal Web Server" nas Preferências do Sistema no
   macOS. Geralmente, carregar arquivos locais no navegador
   pode ser feito usando uma URL assim:
   http://localhost/info.php ou se estiver usando o
   diretório DocumentRoot dentro de um diretório de usuário, seria assim:
   http://localhost/~yourusername/info.php

A versão CLI (ou CGI em versões mais antigas) tem o
nome php e provavelmente está em
/usr/bin/php. Abra um terminal, leia a
[seção sobre linha de comando](features.commandline.md) do manual
PHP e execute `php -v` para verificar a versão do PHP usada.
Uma chamada ao [phpinfo()](function.phpinfo.md) também revelará
essa informação.

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
