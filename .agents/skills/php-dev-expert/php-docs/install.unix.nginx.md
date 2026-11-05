# Nginx 1.4.x em sistemas Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.nginx.php

---

## Nginx 1.4.x em sistemas Unix

Esta documentação cobrirá a instalação e configuração do PHP com
PHP-FPM para um servidor HTTP Nginx 1.4.x.

Este guia assume que o Nginx foi construído a partir da fonte e portanto
todos os binários e arquivos de configuração estão localizados em
`/usr/local/nginx`. Se não for este o caso e o Nginx foi
obtido de outro modo então favor se referir à
[» Wiki Nginx](https://www.nginx.com/resources/wiki/) para traduzir
este manual para a sua configuração.

Este guia cobrirá o básico da configuração de um servidor Nginx para
processar aplicações PHP e servi-las na porta 80. Recomenda-se que a
documentação do Nginx e do PHP-FPM seja estudada se for desejado
otimizar a configuração além do escopo desta documentação.

Favor notar que, ao longo desta documentação, números de versões foram
trocados por um 'x' para assegurar que a informação se mantenha correta no futuro.
Favor trocar, conforme necessário, com os números das versões correspondentes.

1. Recomenda-se a visita à página de
   [» instalação](https://www.nginx.com/resources/wiki/start/topics/tutorials/install/) da Wiki Nginx
   para obter e instalar o Nginx no seu sistema.
2. Obtenha e descompacte a fonte do PHP:

   ```
   tar zxf php-x.x.x
   ```
3. Configure e construa o PHP. Aqui é onde o PHP é customizado
   com várias opções, como quais extensões serão habilitadas. Execute
   ./configure --help para uma lista de opções disponíveis. No nosso exemplo
   faremos uma configuração simples com PHP-FPM e suporte MySQLi.

   ```
   cd ../php-x.x.x
   ./configure --enable-fpm --with-mysqli
   make
   sudo make install
   ```
4. Obtenha e mova os arquivos de configuração para suas localizações corretas

   ```
   cp php.ini-development /usr/local/php/php.ini
   cp /usr/local/etc/php-fpm.d/www.conf.default /usr/local/etc/php-fpm.d/www.conf
   cp sapi/fpm/php-fpm /usr/local/bin
   ```
5. É importante evitar que o Nginx passe requisições ao processo interno
   do PHP-FPM se o arquivo não existe, fazendo com que se impeça
   a injeção arbitrária de scripts.

   Isto pode ser feito configurando-se a diretiva
   [cgi.fix\_pathinfo](ini.core.md#ini.cgi.fix-pathinfo)
   para `0` no arquivo php.ini.

   Abra o php.ini:

   ```
   vim /usr/local/php/php.ini
   ```

   Localiza `cgi.fix_pathinfo=` e modifique como a seguir:

   ```
   cgi.fix_pathinfo=0
   ```
6. php-fpm.conf deve ser modificado para especificar que o php-fpm deve rodar como o usuário
   www-data e o grupo www-data antes do serviço ser iniciado:

   ```
   vim /usr/local/etc/php-fpm.d/www.conf
   ```

   Encontre e modifique o seguinte:

   ```
   ; Usuário/grupo de processos Unix
   ; Nota: O usuário é mandatório. Se o grupo não for definido, o grupo padrão do usuário
   ;       será usado.
   user = www-data
   group = www-data
   ```

   O serviço php-fpm pode agora ser iniciado:

   ```
   /usr/local/bin/php-fpm
   ```

   Este guia não irá configurar o php-fpm além disso, se houver interesse
   em configuração adicional do php-fpm favor consultar a documentação.
7. Nginx agora deve ser configurado para suportar o processamento de aplicações PHP:

   ```
   vim /usr/local/nginx/conf/nginx.conf
   ```

   Modifique o bloco de localização padrão para avisar que ele deve tentar
   servir arquivos .php:

   ```
   location / {
       root   html;
       index  index.php index.html index.htm;
   }
   ```

   O próximo passo é assegurar que os arquivos .php são passados ao
   processo interno do PHP-FPM. Abaixo do bloco comentado de localização padrão do PHP,
   entre com o seguinte:

   ```
   location ~* \.php$ {
       fastcgi_index   index.php;
       fastcgi_pass    127.0.0.1:9000;
       include         fastcgi_params;
       fastcgi_param   SCRIPT_FILENAME    $document_root$fastcgi_script_name;
       fastcgi_param   SCRIPT_NAME        $fastcgi_script_name;
   }
   ```

   Reinicie o Nginx.

   ```
   sudo /usr/local/nginx/sbin/nginx -s stop
   sudo /usr/local/nginx/sbin/nginx
   ```
8. Crie um arquivo de teste

   ```
   rm /usr/local/nginx/html/index.html
   echo "<?php phpinfo(); ?>" >> /usr/local/nginx/html/index.php
   ```

   Agora navegue até http://localhost. A informação de phpinfo() agora deve ser mostrada.

Ao seguir os passos acima o servidor web Nginx será executado com
suporte para PHP como um módulo `SAPI` `FPM`. Obviamente existem
muitas opções de configurações adicionais disponíveis para Nginx e PHP. Para mais
informação digite **./configure --help** na pasta
correspondente a cada fonte.

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
