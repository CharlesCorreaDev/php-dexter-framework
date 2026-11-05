# Apache 2.0 em sistemas Unix

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.unix.apache2.php

---

## Apache 2.0 em sistemas Unix

Esta seção contém notas e dicas específicas para a instalação do PHP no Apache 2.x
em sistemas Unix.

**Aviso**

Não recomendamos usar um
MPM com threads no Apache 2 em produção. Use o módulo prefork, que é
o MPM padrão no Apache 2.0 e 2.2 e não usa threads.
Para obter informações sobre o motivo, leia a FAQ sobre o uso do
[Apache2 com MPM com threads](faq.installation.md#faq.installation.apache2).

A [» documentação do Apache](https://httpd.apache.org/docs/current/)
é a fonte de informação com maior autoridade sobre o servidor Apache 2.x.
Mais informações sobre opções de instalação para o Apache podem ser encontradas
lá.

A versão mais recente do Servidor HTTP do Apache pode ser obtida do
[» site de download Apache](https://httpd.apache.org/),
e uma versão correspondente do PHP pode ser obtida dos locais mencionados anteriormente.
Esse guia rápido cobre apenas o básico para iniciar o uso do Apache 2.x
e do PHP. Para mais informações, leia a
[» documentação do Apache](https://httpd.apache.org/docs/current/).
Os números de versão estão omitidos aqui, para garantir que
as instruções não fiquem desatualizadas. Nos exemplos abaixo, 'NN' deve
ser substituído com a versão específica do Apache utilizado.

Atualmente há duas versões do Apache 2.x. - 2.4 e 2.2.
Embora haja várias razões para escolher entre elas, 2.4 é a versão mais
atual, e aquela recomendada, se essa opção estiver
disponível. Entretanto, as instruções aqui funcionarão para
ambas as versões, 2.4 ou 2.2. Importante notar que o Apache httpd 2.2 está no final de sua vida,
e nenhum novo desenvolvimento ou correções serão realizados nele.

1. Obtenha o Apache HTTP do endereço acima e
   descompacte:

   ```
   tar -xzf httpd-2.x.NN.tar.gz
   ```
2. Da mesma forma, obtenha e descompacte o código-fonte do PHP:

   ```
   tar -xzf php-NN.tar.gz
   ```
3. Compile e instale o Apache. Consulte a documentação de instalação do Apache para
   mais detalhes de compilação.

   ```
   cd httpd-2_x_NN
   ./configure --enable-so
   make
   make install
   ```
4. Agora haverá um Apache 2.x.NN disponível em /usr/local/apache2,
   configurado com suporte a módulos carregáveis e o MPM prefork padrão.
   Para testar a instalação, utilize o procedimento usual de inicialização
   do servidor Apache. Por exemplo:

   ```
   /usr/local/apache2/bin/apachectl start
   ```

   e depois pare o servidor para configurar o PHP:

   ```
   /usr/local/apache2/bin/apachectl stop
   ```
5. Agora configure e compile o PHP. Aqui pode-se personalizar o PHP
   com várias opções como, por exemplo, quais extensões estarão disponíveis. Execute
   **'./configure --help'** para uma lista de opções disponíveis. Em nosso exemplo,
   iremos configurar apenas com suporte ao Apache 2 e MySQL.

   Se o Apache foi compilado a partir do código-fonte como descrito acima, os exemplos abaixo terão
   caminhos coincidentes do **apxs**, mas se foi instalado de outra forma, o caminho
   para o **apxs** precisará ser ajustado. Observe que algumas distribuições podem renomear
   **apxs** para **apxs2**.

   ```
   cd ../php-NN
   ./configure --with-apxs2=/usr/local/apache2/bin/apxs --with-pdo-mysql
   make
   make install
   ```

   Se for decidido modificar as configurações depois da instalação,
   os comandos **configure**, **make**
   e **make install** precisarão ser executados novamente.
   Só será necessário reiniciar o Apache para que o novo módulo seja carregado.
   Uma recompilação do Apache não será necessária.

   Note que, por padrão, **make install** também instalará o
   [» PEAR](https://pear.php.net/),
   várias ferramentas do PHP como [phpize](install.pecl.phpize.md),
   o PHP CLI, entre outros.
6. Configure o php.ini:

   ```
   cp php.ini-development /usr/local/lib/php.ini
   ```

   Pode-se editar o arquivo `.ini` para definir opções do PHP. Se desejar ter
   um php.ini em outra localização,
   utilize `--with-config-file-path=/algum/caminho` no passo 5.

   Se for preferível utilizar o php.ini-production, leia atentamente
   a lista de modificações desse arquivo, já que ele afeta o comportamento do PHP.
7. Edite o httpd.conf para carregar o módulo do PHP. O caminho à direita
   da instrução `LoadModule` precisa apontar para o caminho do módulo do PHP
   no sistema. O **make install** acima pode ter feito isso
   automaticamente, mas é bom confirmar.

   No PHP 8:

   ```
   LoadModule php_module modules/libphp.so
   ```

   No PHP 7:

   ```
   LoadModule php7_module modules/libphp7.so
   ```
8. Configure o Apache para interpretar certas extensões de arquivos como PHP. Por exemplo, configurar
   o Apache para interpretar arquivos `.php` como scripts PHP. Em vez de utilizar apenas a diretiva `AddType`
   do Apache, é recomendado evitar uploads potencialmente perigosos e nomes de
   arquivos como exploit.php.jpg que possam ser executados como scripts PHP. Nesse
   exemplo, pode-se ter quaisquer extensões interpretadas como PHP, simplesmente adicionando-as.
   Adicionaremos `.php` como demonstração.

   ```
   <FilesMatch \.php$>
       SetHandler application/x-httpd-php
   </FilesMatch>
   ```

   Alternativamente, para permitir que arquivos `.php`, `.php2`,
   `.php3`, `.php4`, `.php5`,
   `.php6` e `.phtml` sejam
   executados como PHP, mas nenhum outro, seria desta forma:

   ```
   <FilesMatch "\.ph(p[2-6]?|tml)$">
       SetHandler application/x-httpd-php
   </FilesMatch>
   ```

   Para permitir que arquivos `.phps` sejam interpretados pelo filtro de fontes do PHP e
   exibidos como código fonte destacado, utilize isto:

   ```
   <FilesMatch "\.phps$">
       SetHandler application/x-httpd-php-source
   </FilesMatch>
   ```

   Para permitir o uso de um arquivo PHP como manipulador padrão se nenhum outro for encontrado,
   por exemplo ao usar um mecanismo de roteamento, a diretiva `FallbackResource` pode ser usada.
   Isto está disponível no Apache 2.4.4 e posteriores.

   Como a diretiva `SetHandler` é aplicada se o arquivo existir ou não, e a
   diretiva `FallbackResource` é aplicada somente se um manipulador ainda não foi definido,
   pode ser necessário usar a diretiva `If` para garantir que o manipulador seja aplicado
   somente se o arquivo existir.
   Isto permite que `FallbackResource` manipule caminhos que terminam em `.php`
   mas não existem, o que pode ser útil para manipulação de erros e roteamento.

   ```
   <FilesMatch "\.php$">
       <If "-f %{REQUEST_FILENAME}">
           SetHandler application/x-httpd-php
       </If>
   </FilesMatch>
   FallbackResource /index.php
   ```

   `mod_rewrite` pode ser utilizado para permitir que qualquer arquivo `.php` seja exibido
   como código-fonte destacado, sem precisar ser renomeado ou copiado
   para um arquivo `.phps`:

   ```
   RewriteEngine On
   RewriteRule (.*\.php)s$ $1 [H=application/x-httpd-php-source]
   ```

   O filtro de fontes PHP não deve ser ativado em ambiente de produção, onde
   pode expor informações confidenciais ou sensíveis incorporadas no
   código-fonte.
9. Depois, utilize o procedimento normal de iniciar o servidor Apache, por exemplo:

   ```
   /usr/local/apache2/bin/apachectl start
   ```

   ou

   ```
   service httpd restart
   ```

Seguindo os passos acima, o servidor web Apache2 será executado com
suporte ao PHP como um módulo `SAPI`. Existem muitas outras
opções de configuração disponíveis para o Apache e para o PHP. Para mais
informações execute **./configure --help** no diretório
do código-fonte correspondente.

O Apache pode ser construído com suporte a multi-tarefas através da seleção
do MPM worker, em vez do padrão
MPM prefork. Isso é possível
acrescentado-se a seguinte opção ao argumento passado para **./configure** no
passo 3 acima:

```
--with-mpm=worker
```

Isto não deve ser feito sem conhecer as consequências
desta decisão, ou pelo menos ter uma boa noção de
suas implicações. A documentação do Apache
sobre [» módulos MPM](https://httpd.apache.org/docs/current/mpm.html)
discute essas questões com muito mais detalhes.

> **Nota**:
>
> A seção de [Perguntas Frequentes
> do Apache MultiViews](faq.installation.md#faq.installation.apache.multiviews) discute o uso de MultiViews com o PHP.

> **Nota**:
>
> Para construir uma versão multi-tarefa do Apache, o sistema de destino precisa suportar threads.
> Neste caso, o PHP também deve ser construído
> com o Zend Thread Safety (ZTS). Nesta configuração, nem todas as extensões estarão disponíveis.
> A configuração recomendada é construir o Apache com o módulo
> MPM prefork padrão.

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
