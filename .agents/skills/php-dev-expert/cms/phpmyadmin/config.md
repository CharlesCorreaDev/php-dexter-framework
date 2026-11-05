# Configuração — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/config.html

---

# Configuração[¶](#configuration "Link permanente para este título")

All configurable data is placed in `config.inc.php` in phpMyAdmin’s
toplevel directory. If this file does not exist, please refer to the
[Instalação](setup.md#setup) section to create one. This file only needs to contain the
parameters you want to change from their corresponding default value.

Ver também

[Exemplos](#config-examples) para exemplos de configurações

Se um parâmetro estiver faltando de seu arquivo, você pode simplesmente adicionar outra linha ao arquivo. Esse arquivo é para sobrescrever os padrões; se você quiser usar o valor padrão não será necessário adicionar uma linha aqui.

Os parâmetros que são relativos ao design (como cores) estão localizados em `themes/themename/scss/_variables.scss`. Você pode também querer criar os arquivos `config.footer.inc.php` e `config.header.inc.php` para adicionar um código específico no início e final de cada página do seu site.

Nota

Algumas distribuições (ex: Debian ou Ubuntu) armazenam o arquivo `config.inc.php` em `/etc/phpmyadmin` em vez de na pasta sources do phpMyAdmin.

## Configurações básicas[¶](#basic-settings "Link permanente para este título")

`$cfg['PmaAbsoluteUri']`[¶](#cfg_PmaAbsoluteUri "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Alterado na versão 4.6.5: Esta configuração não estava disponível no phpMyAdmin 4.6.0 - 4.6.4.

    Define aqui a [URL](glossary.md#term-url) (com o caminho completo) para o diretório de instalação do seu phpMyAdmin. Ex: `https://www.example.net/caminho_para_o_seu_diretório_phpMyAdmin/`. Observe também que a [URL](glossary.md#term-url) diferencia maiúsculas e minúsculas na maioria dos servidores web (até mesmo no Windows). Não esqueça a barra de escape no final.

    A partir da versão 2.3.0, recomenda-se deixar isto em branco. Na maior parte dos casos o phpMyAdmin automaticamente detecta a configuração mais apropriada. Aqueles que utilizam redirecionamento de portas ou uma configuração complexa de proxy reverso podem precisar definir isso.

    Um bom teste é navegar numa tabela, editar um registro e salvá-lo. Deveria aparecer uma mensagem de erro se o phpMyAdmin estiver tendo problemas em auto-detectar o valor correto. Se você encontrar um erro que isto deva ser configurado ou se o código de auto-detectação falhar em detectar o caminho, por favor envie um relatório de bug para o nosso rastreador de bugs para podermos melhorar o código.

    Ver também

    [1.40 Quando acesso o phpMyAdmin via um proxy reverso do Apache, o login por cookies não funciona.](faq.md#faq1-40), [2.5 Cada vez que eu tento inserir ou mudar um registro ou eliminar um banco de dados ou tabela, um erro 404 (página não encontrada) é mostrado ou, com a autenticação por cookie ou HTTP, é pedido para que eu entre novamente. Qual o problema?](faq.md#faq2-5), [4.7 A janela de autenticação é mostrada mais de uma vez, porque?](faq.md#faq4-7), [5.16 Com o Internet Explorer, eu recebo erros de JavaScript “Acesso negado”. Ou eu não consigo fazer o phpMyAdmin funcionar dentro do Windows.](faq.md#faq5-16)

`$cfg['PmaNoRelation_DisableWarning']`[¶](#cfg_PmaNoRelation_DisableWarning "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    A partir da versão 2.3.0 o phpMyAdmin oferece muitos recursos para trabalhar com tabelas mestre/estrangeiras (veja a configuração [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb)).

    Se você tentou definir uma configuração e ela não funcionar para você, dê uma olhada na página Structure de um banco de dados onde você gostaria de usá-la. Você vai encontrar um link que analisa porque essas configurações foram desativadas.

    Se você não quiser usar essas funções configure esta variável para `true` para que a mensagem pare de aparecer.

`$cfg['AuthLog']`[¶](#cfg_AuthLog "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'auto'` |

    Novo na versão 4.8.0: Isso é suportado desde o phpMyAdmin 4.8.0.

    Configure o destino do log de autenticação. As tentativas de autenticação com falha (ou todas, dependendo do [`$cfg['AuthLogSuccess']`](#cfg_AuthLogSuccess)) serão registradas de acordo com esta diretiva:

    `auto`
    :   Deixe o phpMyAdmin escolher automaticamente entre `syslog` e `php`.

    `syslog`
    :   Registra usando syslog, usando o recurso AUTH, na maioria dos sistemas isso vai parar em `/var/log/auth.log`.

    `php`
    :   Registra no log de erro do PHP.

    `sapi`
    :   Registra no log da SAPI do PHP.

    `/caminho/para/o/arquivo`
    :   Qualquer outro valor é tratado como um nome de arquivo e as entradas de log serão escritas lá.

    Nota

    Ao definir um arquivo de log, verifique se as permissões estão corretamente configuradas para um usuário do servidor web, a instalação deve corresponder às instruções descritas em [`$cfg['TempDir']`](#cfg_TempDir):

`$cfg['AuthLogSuccess']`[¶](#cfg_AuthLogSuccess "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Novo na versão 4.8.0: Isso é suportado desde o phpMyAdmin 4.8.0.

    Se deseja registrar tentativas de autenticação bem sucedidas no [`$cfg['AuthLog']`](#cfg_AuthLog).

`$cfg['SuhosinDisableWarning']`[¶](#cfg_SuhosinDisableWarning "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Um alerta é exibido na página principal se o pacote Suhosin for detectado.

    Você pode configurar esse parâmetro para `true` para que esta mensagem pare de aparecer.

`$cfg['LoginCookieValidityDisableWarning']`[¶](#cfg_LoginCookieValidityDisableWarning "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Um alerta é disparado na página principal se o parâmetro session.gc\_maxlifetime do PHP estiver mais baixo do que o cookie de validade configurado no phpMyAdmin.

    Você pode configurar esse parâmetro para `true` para que esta mensagem pare de aparecer.

`$cfg['ServerLibraryDifference_DisableWarning']`[¶](#cfg_ServerLibraryDifference_DisableWarning "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Obsoleto desde a versão 4.7.0: Esta configuração foi removida, pois o aviso foi removido também.

    Um aviso é mostrado na página principal se houver uma diferença entre a biblioteca MySQL e a versão do servidor.

    Você pode configurar esse parâmetro para `true` para que esta mensagem pare de aparecer.

`$cfg['ReservedWordDisableWarning']`[¶](#cfg_ReservedWordDisableWarning "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Esse aviso é exibido na página Estrutura de uma tabela se um ou mais nomes de campos forem iguais a palavras reservadas do MySQL.

    Se você quiser desativar esse aviso, você pode configurá-la para `true` e o aviso não será mais exibido.

`$cfg['TranslationWarningThreshold']`[¶](#cfg_TranslationWarningThreshold "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 80 |

    Mostra aviso a respeito de traduções incompletas em certa seção.

`$cfg['SendErrorReports']`[¶](#cfg_SendErrorReports "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'perguntar'` |

    Os valores válidos são:

    - `ask`
    - `always`
    - `never`

    Define o comportamento padrão do relatório de erros do JavaScript.

    Sempre que um erro for detectado na execução do JavaScript, um relatório de erro poderá ser enviado ao time do phpMyAdmin se o usuário concordar.

    O padrão de `'perguntar'` irá perguntar ao usuário toda vez que houver um novo relatório de erro. No entanto você pode definir esse parâmetro como `'sempre'` para enviar relatórios de erro sem pedir por confirmação ou como `'nunca'` para nunca enviar relatórios de erro.

    Essa diretiva está disponível tanto no arquivo de configuração quanto nas preferências de usuário. Se a pessoa a cargo de uma instalação multi-usuário preferir desativar essa função para todos os usuários, o valor de `'nunca'` será definido, e a diretiva [`$cfg['UserprefsDisallow']`](#cfg_UserprefsDisallow) deverá conter `'SendErrorReports'` em um dos valores de seu vetor.

`$cfg['ConsoleEnterExecutes']`[¶](#cfg_ConsoleEnterExecutes "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Setting this to `true` allows the user to execute queries by pressing Enter
    instead of Ctrl+Enter. A new line can be inserted by pressing Shift+Enter.

    O comportamento do console pode ser temporariamente modificado usando a sua interface de configurações.

`$cfg['AllowThirdPartyFraming']`[¶](#cfg_AllowThirdPartyFraming "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean|string |
    | Valor padrão: | false |

    Configurar este parâmetro para `true` permite ao phpMyAdmin ser incluído dentro de um frame, e é uma potencial brecha de segurança que permite ataque de scripts cross-frame ou sequestro de cliques. Configurar isto para ‘sameorigin’ previne phpMyAdmin de ser incluído a partir de outro documento em um frame, a menos que o documento pertença ao mesmo domínio.

## Configurações de conexão de servidor[¶](#server-connection-settings "Link permanente para este título")

`$cfg['Servers']`[¶](#cfg_Servers "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | um conjunto de servidores com as configurações listadas abaixo |

    Since version 1.4.2, phpMyAdmin supports the administration of multiple
    MySQL servers. Therefore, a [`$cfg['Servers']`](#cfg_Servers)-array has been
    added which contains the login information for the different servers. The
    first [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host) contains the hostname of
    the first server, the second [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host)
    the hostname of the second server, etc. You can put as many sections for server definition as you need in
    `config.inc.php`, copy that block or needed parts (you don’t have to
    define all settings, just those you need to change).

    Nota

    The [`$cfg['Servers']`](#cfg_Servers) array starts with
    $cfg[‘Servers’][1]. Do not use $cfg[‘Servers’][0]. If you want more
    than one server, just copy following section (including $i
    increment) several times. There is no need to define full server
    array, just define values you need to change.

`$cfg['Servers'][$i]['host']`[¶](#cfg_Servers_host "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'localhost'` |

    O hostname ou o endereço [IP](glossary.md#term-ip) do seu enésimo servidor MySQL. Ex: `localhost`.

    Os valores disponíveis são:

    - hostname, ex: `'localhost'` ou `'mydb.example.org'`
    - endereço IP, ex: `'127.0.0.1'` ou `'192.168.10.1'`
    - Endereço IPv6, por exemplo: `2001:cdba:0000:0000:0000:0000:3257:9652`
    - ponto - `'.'`, ou seja, use fluxos nomeados em sistemas Windows
    - vazio - `''`, desativa este servidor

    Nota

    O nome de host `localhost` é tratado de forma especial pelo MySQL e ele usa o protocolo de conexão baseado em soquete. Para usar a rede TCP/IP, use um endereço IP ou um nome de host, tais como `127.0.0.1` ou `db.example.com`. Você pode configurar o caminho para o soquete com [`$cfg['Servers'][$i]['socket']`](#cfg_Servers_socket).

    Ver também

    [`$cfg['Servers'][$i]['port']`](#cfg_Servers_port),
    <<https://dev.mysql.com/doc/refman/8.0/en/connecting.html>>

`$cfg['Servers'][$i]['port']`[¶](#cfg_Servers_port "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O número da porta do seu enésimo servidor MySQL. O padrão é 3306 (deixe em branco).

    Nota

    Se você usa `localhost` como o hostname, o MySQL ignora este número de porta e conecta via socket, então caso queira conectar com uma porta diferente da porta padrão, use `127.0.0.1` ou um hostname verdadeiro em [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host).

    Ver também

    [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host),
    <<https://dev.mysql.com/doc/refman/8.0/en/connecting.html>>

`$cfg['Servers'][$i]['socket']`[¶](#cfg_Servers_socket "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O caminho para o socket a ser usado. Deixe em branco para usar o padrão. Para determinar o socket correto, verifique a sua configuração MySQL ou, use o cliente **mysql** de linha de comando, passando o comando `status`. Dentre os resultados obtidos estará também o socket em uso.

    Nota

    Isso só produz efeito se [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host) estiver configurado para `localhost`.

    Ver também

    [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host),
    <<https://dev.mysql.com/doc/refman/8.0/en/connecting.html>>

`$cfg['Servers'][$i]['ssl']`[¶](#cfg_Servers_ssl "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Se deve habilitar SSL para a conexão entre o phpMyAdmin e o servidor MySQL para proteger a conexão.

    Quando usada a extensão `'mysql'`, nenhuma das opções de configuração `'ssl...'` restantes se aplicam.

    Nós recomendamos fortemente usar a extensão `'mysqli'` quando usar esta opção.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_key']`[¶](#cfg_Servers_ssl_key "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | null |

    Caminho para o arquivo de chave do cliente ao usar SSL para se conectar ao servidor MySQL. Isso é usado para autenticar o cliente no servidor.

    Por exemplo:

    ```
    $cfg['Servers'][$i]['ssl_key'] = '/etc/mysql/server-key.pem';
    ```

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_cert']`[¶](#cfg_Servers_ssl_cert "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | null |

    Caminho para o arquivo de certificado do cliente ao usar SSL para se conectar ao servidor MySQL. Isso é usado para autenticar o cliente no servidor.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_ca']`[¶](#cfg_Servers_ssl_ca "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | null |

    Caminho para o arquivo CA quando usar SSL para conectar ao servidor MySQL.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_ca_path']`[¶](#cfg_Servers_ssl_ca_path "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | null |

    Diretório contendo certificados das CAs SSL em formato PEM.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_ciphers']`[¶](#cfg_Servers_ssl_ciphers "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | null |

    Lista das cifras permitíveis para conexões SSL com o servidor MySQL.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['ssl_verify']`[¶](#cfg_Servers_ssl_verify "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Novo na versão 4.6.0: Isso é suportado desde o phpMyAdmin 4.6.0.

    Se a sua instalação do PHP usa o Driver Nativo do MySQL (mysqlnd), seu servidor MySQL é 5.6 ou posterior e seu certificado SSL é auto-assinado, há uma chance de sua conexão SSL falhar devido à validação. Definir isso como `false` desativará a verificação de validação.

    Desde o PHP 5.6.0 ele também verifica se o nome do servidor corresponde ao CN do seu certificado. Atualmente, não há como desabilitar apenas esta verificação sem desativar a verificação SSL completa.

    Aviso

    Desativar a verificação do certificado acaba com o propósito de usar o SSL. Isso tornará a conexão vulnerável a ataques man-in-the-middle.

    Nota

    Essa flag só funciona com PHP 5.6.16 ou versões mais recentes.

    Ver também

    [Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
    [Google Cloud SQL com SSL](#example-google-ssl),
    [Amazon RDS Aurora with SSL](#example-aws-ssl),
    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

`$cfg['Servers'][$i]['connect_type']`[¶](#cfg_Servers_connect_type "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'TCP'` |

    Obsoleto desde a versão 4.7.0: Esta configuração não é mais utilizada a partir do 4.7.0, uma vez que o MySQL decide o tipo de conexão com base no host, logo isso poderia levar a resultados inesperados. Ao invés disso, por favor configure o [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host) de acordo.

    Que tipo de conexão utilizar com o servidor MySQL. Suas opções são `'socket'` e `'tcp'`. O padrão é tcp pois ele é quase garantido que esteja disponível em todos os servidores MySQL, enquanto que sockets não são suportados em algumas plataformas. Para usar o modo socket, seu servidor MySQL deve estar na mesma máquina que o servidor web.

`$cfg['Servers'][$i]['compress']`[¶](#cfg_Servers_compress "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Caso queira usar ou não o protocolo de compressão para a conexão com o servidor MySQL (em fase experimental).

`$cfg['Servers'][$i]['controlhost']`[¶](#cfg_Servers_controlhost "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Permite usar um host alternativo para guardar os dados de configurações de armazenamento.

    Ver também

    [`$cfg['Servers'][$i]['control_*']`](#cfg_Servers_control_*)

`$cfg['Servers'][$i]['controlport']`[¶](#cfg_Servers_controlport "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Permite usar uma porta alternativa para conectar ao host que guarda o aramazenamento de configurações.

    Ver também

    [`$cfg['Servers'][$i]['control_*']`](#cfg_Servers_control_*)

`$cfg['Servers'][$i]['controluser']`[¶](#cfg_Servers_controluser "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

`$cfg['Servers'][$i]['controlpass']`[¶](#cfg_Servers_controlpass "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Esta conta especial é usada para acessar [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables). Você não precisa disso no caso de usuário único, mas se o phpMyAdmin é compartilhado, é recomendado dar acesso a [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) somente para este usuário e configurar o phpMyAdmin para usá-lo. Todos os usuários poderão então usar os recursos sem ter acesso direto a [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables).

    Alterado na versão 2.2.5: esses eram chamados `stduser` e `stdpass`

    Ver também

    [Instalação](setup.md#setup),
    [Usando os modos de autenticação](setup.md#authentication-modes),
    [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables),
    [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb),
    [`$cfg['Servers'][$i]['controlhost']`](#cfg_Servers_controlhost),
    [`$cfg['Servers'][$i]['controlport']`](#cfg_Servers_controlport),
    [`$cfg['Servers'][$i]['control_*']`](#cfg_Servers_control_*)

`$cfg['Servers'][$i]['control_*']`[¶](#cfg_Servers_control_* "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | misto |

    Novo na versão 4.7.0.

    Você pode alterar qualquer configuração de conexão MySQL para o link de controle (usado para acessar [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables)) usando a configuração prefixada com `control_`.

    Isso pode ser usado para alterar qualquer aspecto da conexão de controle, que por padrão usa os mesmos parâmetros que os de usuário.

    Por exemplo, você pode configurar o SSL para a conexão de controle:

    ```
    // Enable SSL
    $cfg['Servers'][$i]['control_ssl'] = true;
    // Client secret key
    $cfg['Servers'][$i]['control_ssl_key'] = '../client-key.pem';
    // Client certificate
    $cfg['Servers'][$i]['control_ssl_cert'] = '../client-cert.pem';
    // Server certification authority
    $cfg['Servers'][$i]['control_ssl_ca'] = '../server-ca.pem';
    ```

    Ver também

    [`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
    [`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
    [`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
    [`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
    [`$cfg['Servers'][$i]['ssl_ca_path']`](#cfg_Servers_ssl_ca_path),
    [`$cfg['Servers'][$i]['ssl_ciphers']`](#cfg_Servers_ssl_ciphers),
    [`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify),
    [`$cfg['Servers'][$i]['socket']`](#cfg_Servers_socket),
    [`$cfg['Servers'][$i]['compress']`](#cfg_Servers_compress),
    [`$cfg['Servers'][$i]['hide_connection_errors']`](#cfg_Servers_hide_connection_errors)

`$cfg['Servers'][$i]['auth_type']`[¶](#cfg_Servers_auth_type "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'cookie'` |

    Uso de autenticação por configuração, cookie, “signon” ou [HTTP](glossary.md#term-http) neste servidor.

    - A autenticação ‘config’ (`$auth_type = 'config'`) é a maneira antiga: o nome de usuário e a senha são armazenados no `config.inc.php`.
    - O modo de autenticação ‘cookie’ (`$auth_type = 'cookie'`) permite logar como qualquer usuário válido do MySQL com o auxílio de cookies.
    - O modo de autenticação ‘http’ te permite logar como qualquer usuário válido do MySQL através do HTTP-Auth.
    - O modo de autenticação ‘signon’ (`$auth_type = 'signon'`) permite logar através de dados de sessão PHP preparados ou através de um script PHP fornecido.

    Ver também

    [Usando os modos de autenticação](setup.md#authentication-modes)

`$cfg['Servers'][$i]['auth_http_realm']`[¶](#cfg_Servers_auth_http_realm "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Quando usar o auth\_type = ‘http’, este campo permite definir um domínio de autenticação básico por [HTTP](glossary.md#term-http) customizado que será exibido para o usuário. Se não for explicitamente especificado na sua configuração, uma string combinada de “phpMyAdmin ” e [`$cfg['Servers'][$i]['verbose']`](#cfg_Servers_verbose) ou [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host) será usada.

`$cfg['Servers'][$i]['auth_swekey_config']`[¶](#cfg_Servers_auth_swekey_config "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Novo na versão 3.0.0.0: This setting was named $cfg[‘Servers’][$i][‘auth\_feebee\_config’] and was renamed before the 3.0.0.0 release.

    Obsoleto desde a versão 4.6.4: This setting was removed because their servers are no longer working and it was not working correctly.

    Obsoleto desde a versão 4.0.10.17: This setting was removed in a maintenance release because their servers are no longer working and it was not working correctly.

    The name of the file containing swekey ids and login names for hardware
    authentication. Leave empty to deactivate this feature.

`$cfg['Servers'][$i]['user']`[¶](#cfg_Servers_user "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'root'` |

`$cfg['Servers'][$i]['password']`[¶](#cfg_Servers_password "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Quando usar [`$cfg['Servers'][$i]['auth_type']`](#cfg_Servers_auth_type) definida como ‘config’ , esta será a combinação usuário/senha que o phpMyAdmin vai utilizar para conectar-se ao servidor MySQL. Este par usuário/senha não é necessário quando usar o método de autenticação por [HTTP](glossary.md#term-http) ou cookie e eles deveriam ficar vazios.

`$cfg['Servers'][$i]['nopassword']`[¶](#cfg_Servers_nopassword "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Obsoleto desde a versão 4.7.0: Essa configuração foi removida, pois pode produzir resultados inesperados.

    Permite tentar um login sem senha quando um login com senha falhar. Isto pode ser usado em conjunto com a autenticação por modo http, quando a autenticação é feita de alguma outra forma e o phpMyAdmin pega então o nome do usuário da autenticação e usa uma senha em branco para conectar-se ao MySQL. A primeira tentativa de login ainda é com senha, mas como ‘quebra-galho’, o método sem senha é usado.

    Nota

    It is possible to allow logging in with no password with
    the [`$cfg['Servers'][$i]['AllowNoPassword']`](#cfg_Servers_AllowNoPassword) directive.

`$cfg['Servers'][$i]['only_db']`[¶](#cfg_Servers_only_db "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou vetor |
    | Valor padrão: | `''` |

    Caso configurado para um (um array de) nome(s) de banco(s) de dados, somente este(s) banco(s) de dados serão mostrados ao usuário. Desde o phpMyAdmin 2.2.1, este(s) nome(s) de banco(s) de dados pode(m) conter caracteres especiais do MySQL (“\_” and “%”): se você quiser utilizar instâncias literais destes caracteres, use o caractere de escape também (ex: use `'my\_db'` e não `'my_db'`).

    Esta configuração é uma forma eficiente de reduzir a carga do servidor pois este último não necessita enviar requisições ao MySQL para construir a lista de bancos de dados disponíveis. Porém, **ela não substitui as regras de privilégio do servidor MySQL**. Se configurado, significa somente que estes bancos de dados serão exibidos mas **nem todos os bancos de dados poderão ser acessados.**

    Um exemplo de uso de mais de um banco de dados:

    ```
    $cfg['Servers'][$i]['only_db'] = ['db1', 'db2'];
    ```

    Alterado na versão 4.0.0: Versões anteriores permitiam especificar a ordem de exibição dos nomes de bancos de dados via essa diretiva.

`$cfg['Servers'][$i]['hide_db']`[¶](#cfg_Servers_hide_db "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Expressão regular para omitir alguns bancos de dados de usuários sem privilégios. Isto só esconde eles da listagem, mas um usuário ainda é capaz de acessá-los (usando, por exemplo, a área de query SQL). Para realmente limitar o acesso, utilize o sistema de privilégios do MySQL. Por exemplo, para esconder todos os bancos de dados começando com a letra “a”, use

    ```
    $cfg['Servers'][$i]['hide_db'] = '^a';
    ```

    e para esconder ambos “db1” e “db2” use

    ```
    $cfg['Servers'][$i]['hide_db'] = '^(db1|db2)$';
    ```

    Mais informações sobre expressões regulares podem ser encontradas na parte do manual de referência do PHP em [padrão de sintaxe PCRE](https://www.php.net/manual/en/reference.pcre.pattern.syntax.php).

`$cfg['Servers'][$i]['verbose']`[¶](#cfg_Servers_verbose "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Somente útil quando usado com a opção de múltiplos servidores do phpMyAdmin. Caso configurado, esta informação será exibida no lugar do hostname, no menu superior da página principal. Isto pode ser útil caso você queira mostrar somente alguns dos bancos de dados no seu sistema, por exemplo. Para autenticação por HTTP, todos os caracteres não-ASCII-US serão subtraídos.

`$cfg['Servers'][$i]['extension']`[¶](#cfg_Servers_extension "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'mysqli'` |

    Obsoleto desde a versão 4.2.0: Esta configuração foi removida. A extensão `mysql` será usada somente quando a extensão `mysqli` não estiver disponível. A partir da versão 5.0.0, apenas a extensão `mysqli` pode ser usada.

    A extensão PHP MySQL a ser usada (`mysql` ou `mysqli`).

    Recomenda-se usar `mysqli` em todas as instalações.

`$cfg['Servers'][$i]['pmadb']`[¶](#cfg_Servers_pmadb "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O nome do banco de dados onde estão armazenadas as configurações do phpMyAdmin.

    Veja a seção [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables) neste documento para ver os benefícios desta função, e para uma rápida forma de criar este banco de dados e suas tabelas necessárias.

    Se você for o único usuário desta instalação do phpMyAdmin, você pode utilizar o seu banco de dados atual para armazenar estas tabelas especiais; neste caso, apenas informe o nome do seu banco de dados atual em [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb). Para instalações multi-usuário, configure este parâmetro com o nome do seu banco de dados central onde estão armazenadas as configurações do phpMyAdmin.

`$cfg['Servers'][$i]['bookmarktable']`[¶](#cfg_Servers_bookmarktable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.2.0.

    A partir da versão 2.2.0 o phpMyAdmin permite que os suários salvem as suas queries favoritas. Este recurso pode ser útil para as queries que você roda frequentemente. Para permitir o uso dessa funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - informe o nome da tabela em [`$cfg['Servers'][$i]['bookmarktable']`](#cfg_Servers_bookmarktable)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['relation']`[¶](#cfg_Servers_relation "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.2.4.

    A partir da versão 2.2.4 você pode descrever, em um tabela especial de ‘relacionamento’, qual campo é chave para outra tabela (uma chave estrangeira). O phpMyAdmin atualmente utiliza esta para:

    - torna clicável, quando você pesquisar a tabela mestre, os valores de dados que referenciam a tabela estrangeira;
    - exibe em um tool-tip opcional a opção “mostrar campo” quando navegar pela tabela mestre, se você mover o mouse para uma coluna que contém uma chave estrangeira (use também a tabela ‘table\_info’); (veja [6.7 Como eu posso usar a função “exibir coluna”?](faq.md#faqdisplay))
    - no modo editar/inserir, exibe uma lista drop-down das possíveis chaves estrangeiras (valor da chave e “mostrar campo” são mostrados) (veja [6.21 Em modo de edição/inserimento, como eu posso ver uma lista dos valores disponíveis para uma coluna, baseado em alguma tabela estrangeira?](faq.md#faq6-21))
    - exibe os links na página de propriedades de tabela, para verificar a integridade referencial (exibe chave estrangeiras faltantes) para cada chave descrita;
    - em query-por-exemplo, cria joins automaticamente (veja [6.6 Como eu posso usar a tabela de relações em query-por-exemplo?](faq.md#faq6-6))
    - permite você gerar um esquema [PDF](glossary.md#term-pdf) do seu banco de dados (usa também a tabela table\_coords).

    As chaves podem ser numéricas ou caracteres.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - insira o nome da tabela relacionada em [`$cfg['Servers'][$i]['relation']`](#cfg_Servers_relation)
    - agora como um usuário comum abra o phpMyAdmin e para cada uma de suas tabelas onde você queira utilizar este recurso, clique em Structure/Relation view/ e escolha as colunas estrangeiras.

    Este recurso pode ser desativado mudando a configuração para `false`.

    Nota

    Na versão atual, `master_db` deve ser o mesmo que `foreign_db`. Estas colunas foram colocadas para desenvolvimento futuro dos relacionamentos inter-bancos.

`$cfg['Servers'][$i]['table_info']`[¶](#cfg_Servers_table_info "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.3.0.

    A partir da versão 2.3.0 você pode descrever, em uma tabela ‘table\_info’ especial, qual a coluna que é para ser exibida como uma tool-tip quando mover o cursor sobre a chave correspondente. Essa variável da configuração irá guardar o nome dessa tabela especial. Para permitir o uso dessa funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['table_info']`](#cfg_Servers_table_info) (ex: `pma_table_info`)
    - então, para cada tabela onde você quiser utilizar esta função, clique em “Estutura/Relacionamentos/Selecione a coluna para mostrar” para que possa selecionar a coluna.

    Este recurso pode ser desativado mudando a configuração para `false`.

    Ver também

    [6.7 Como eu posso usar a função “exibir coluna”?](faq.md#faqdisplay)

`$cfg['Servers'][$i]['table_coords']`[¶](#cfg_Servers_table_coords "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    O recurso de design pode salvar o layout da página;Ao pressionar o botão “Salvar página” ou “Salvar página como” no menu de expansão do designer, você pode personalizar o layout e carregá-lo na próxima vez que você usar o designer. Esse layout está armazenado nesta tabela. Além disso, esta tabela também é necessária para usar o recurso de exportação de relação PDF, veja [`$cfg['Servers'][$i]['pdf_pages']`](#cfg_Servers_pdf_pages) para mais detalhes.

`$cfg['Servers'][$i]['pdf_pages']`[¶](#cfg_Servers_pdf_pages "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.3.0.

    Desde a versão 2.3.0 você pode fazer o phpMyAdmin criar páginas [PDF](glossary.md#term-pdf) mostrando as relações entre suas tabelas. Para fazer isso, ele precisa de duas tabelas “pdf\_pages” (armazenando informação sobre as páginas [PDF](glossary.md#term-pdf) disponíveis) e “table\_coords” (armazenando as coordenadas onde cada tabela será colocada em uma esquema de saída [PDF](glossary.md#term-pdf)). Para isso, você deve estar usando a função “relacionamento”.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque os nomes corretos das tabelas em [`$cfg['Servers'][$i]['table_coords']`](#cfg_Servers_table_coords) e em [`$cfg['Servers'][$i]['pdf_pages']`](#cfg_Servers_pdf_pages)

    Esse recurso pode ser desativado mudando qualquer uma das configurações para `false`.

    Ver também

    [6.8 Como eu posso produzir um esquema PDF do meu banco de dados?](faq.md#faqpdf).

`$cfg['Servers'][$i]['designer_coords']`[¶](#cfg_Servers_designer_coords "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Novo na versão 2.10.0: Desde a versão 2.10.0 uma interface de Designer está disponível; ela permite gerenciar visualmente as relações.

    Obsoleto desde a versão 4.3.0: This setting was removed and the Designer table positioning data is now stored into [`$cfg['Servers'][$i]['table_coords']`](#cfg_Servers_table_coords).

    Nota

    You can now delete the table pma\_\_designer\_coords from your phpMyAdmin configuration storage database and remove [`$cfg['Servers'][$i]['designer_coords']`](#cfg_Servers_designer_coords) from your configuration file.

`$cfg['Servers'][$i]['column_info']`[¶](#cfg_Servers_column_info "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.3.0.

    Essa parte exige uma atualização de conteúdo! Desde a versão 2.3.0 você pode armazenar comentários para descrever cada coluna para cada tabela. Eles será então mostrados na “printview”.

    A partir da versão 2.5.0, os comentários são consequentemente usados nas páginas de propriedades de tabela e na visualização de tabela, mostrando como tool-tips acima do nome da tabela (propriedades da página) ou embutidas dentro do cabeçalho da tabela na visualização. Elas também podem ser mostradas em um despejo de tabela. Favor ver as diretivas de configuração relevantes mais tarde.

    Também novo na versão 2.5.0 é o sistema de transformação de MIME que também é baseado na estrutura da tabela seguinte. Veja [Transformações](transformations.md#transformations) para mais informações. Para usar o sistema de transformação de MIME, sua tabela column\_info tem que possuir os três novos campos ‘mimetype’, ‘transformation’ e ‘transformation\_options’.

    Começando com a versão 4.3.0, um novo sistema de transformação de entrada-orientada tem sido introduzido. O código de compatibilidade subdesenvolvido usado em sistemas de transformações antigos foi removido também. Como resultado, uma atualização da tabela column\_info é necessária para transformações prévias e para os novos sistemas de transformação de entrada-orientada trabalharem. phpMyAdmin atualizará isso automaticamente para você analisando sua atual estrutura da tabela column\_info. Entretanto, se alguma coisa der errado com a auto-atualização então você pode usar o script SQL encontrado em `./sql/upgrade_column_info_4_3_0+.sql` para atualizar isso manualmente.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['column_info']`](#cfg_Servers_column_info) (ex: `pma_column_info`)
    - para atualizar sua tabela Column\_comments PRE-2.5.0 use isso: e lembre que a variável em `config.inc.php` foi renomeada de `$cfg['Servers'][$i]['column_comments']` para [`$cfg['Servers'][$i]['column_info']`](#cfg_Servers_column_info)

      ```
      ALTER TABLE `pma__column_comments`
      ADD `mimetype` VARCHAR( 255 ) NOT NULL,
      ADD `transformation` VARCHAR( 255 ) NOT NULL,
      ADD `transformation_options` VARCHAR( 255 ) NOT NULL;
      ```
    - para atualizar sua tabela Column\_info PRE-4.3.0 manualmente use esse script SQL `./sql/upgrade_column_info_4_3_0+.sql`.

    Este recurso pode ser desativado mudando a configuração para `false`.

    Nota

    For auto-upgrade functionality to work, your
    [`$cfg['Servers'][$i]['controluser']`](#cfg_Servers_controluser) must have ALTER privilege on
    `phpmyadmin` database. See the [MySQL documentation for GRANT](https://dev.mysql.com/doc/refman/8.0/en/grant.html) on how to
    `GRANT` privileges to a user.

`$cfg['Servers'][$i]['history']`[¶](#cfg_Servers_history "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 2.5.0.

    Desde a versão 2.5.0 você pode armazenar seu histórico [SQL](glossary.md#term-sql), o que significa todas as queries que você inseriu manualmente na interface do phpMyAdmin. Se você não quer usar um histórico baseado em tabelas, você pode usar o histórico baseado em JavaScript.

    Usando isso, todos os items do seu histórico são deletados quando fechar a janela. Usando [`$cfg['QueryHistoryMax']`](#cfg_QueryHistoryMax) você pode especificar uma quantidade de items de histórico que você quer guardar. A cada login, essa lista é cortada no limite máximo.

    O histórico de queries está disponível somente se o JavaScript estiver ativado no seu navegador.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['history']`](#cfg_Servers_history) (ex: `pma_history`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['recent']`[¶](#cfg_Servers_recent "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 3.5.0.

    Desde a versão 3.5.0 você pode mostrar tabelas recentemente usadas no painel de navegação. Isso ajuda você a pular diretamente através da tabela, sem a necessidade de selecionar o banco de dados, e então selecionar a tabela. Usando [`$cfg['NumRecentTables']`](#cfg_NumRecentTables) você pode configurar o número máximo de tabelas recentes mostrado. Quando você selecionar uma tabela da lista, ela irá pular para a página especificada em [`$cfg['NavigationTreeDefaultTabTable']`](#cfg_NavigationTreeDefaultTabTable).

    Sem configurar o armazenamento, você ainde consegue acessar as tabelas recentemente usadas, mas elas irão desaparecer após você sair.

    Para permtir o uso desta funcionalidade permanentemente:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['recent']`](#cfg_Servers_recent) (ex: `pma_recent`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['favorite']`[¶](#cfg_Servers_favorite "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.2.0.

    Desde a versão 4.2.0, você pode mostrar uma lista de tabelas selecionadas no painel de navegação. Isso te ajuda a pular para a tabela diretamente, sem a necessidade de selecionar o banco de dados e, em seguida, selecionar a tabela. Quando você seleciona uma tabela da lista, ela irá pular para a página especificada em [`$cfg['NavigationTreeDefaultTabTable']`](#cfg_NavigationTreeDefaultTabTable).

    Você pode adicionar tabelas nesta lista ou remover tabelas dela na página de estrutura do banco de dados clicando nos ícones de estrela próximos aos nomes das tabelas. Usando [`$cfg['NumFavoriteTables']`](#cfg_NumFavoriteTables) você pode configurar o número máximo de tabelas favoritas mostradas.

    Sem configurar o armazenamento, você ainda consegue acessar as tabelas favoritas, mas elas irão desaparecer após você sair.

    Para permtir o uso desta funcionalidade permanentemente:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['favorite']`](#cfg_Servers_favorite) (por exemplo `pma__favorite`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['table_uiprefs']`[¶](#cfg_Servers_table_uiprefs "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 3.5.0.

    Desde a versão 3.5.0 o phpMyAdmin pode ser configurado para lembrar várias coisas (coluna ordenada [`$cfg['RememberSorting']`](#cfg_RememberSorting), ordem das colunas, e visibilidade de colunas de uma tabela de banco de dados) para visualização de tabelas. Sem configurar o armazenamento, essas funções ainda podem ser usadas, mas os valores desaparecerão após você sair.

    Para permtir o uso desta funcionalidade permanentemente:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['table_uiprefs']`](#cfg_Servers_table_uiprefs) (ex: `pma_table_uiprefs`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['users']`[¶](#cfg_Servers_users "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    The table used by phpMyAdmin to store user name information for associating with user groups.
    See the next entry on [`$cfg['Servers'][$i]['usergroups']`](#cfg_Servers_usergroups) for more details
    and the suggested settings.

`$cfg['Servers'][$i]['usergroups']`[¶](#cfg_Servers_usergroups "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.1.0.

    Desde a versão 4.1.0 você pode criar grupos de usuários diferentes com items de menu atrelados a eles. Os usuários podem ser relacionados a estes grupos e o usuário logado iria ver somente os itens configurados no grupo de usuário em que está cadastrado. Para fazer isso é necessário duas tabelas “usergroups” (armazenando itens de menu permitidos para cada grupo de usuário) e “usuários” (armazenando usuários e suas participações em grupos de usuários).

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque os nomes corretos das tabelas em [`$cfg['Servers'][$i]['users']`](#cfg_Servers_users) (ex: `pma__users`) e em [`$cfg['Servers'][$i]['usergroups']`](#cfg_Servers_usergroups) (ex: pma\_\_usergroups`)

    Esse recurso pode ser desativado mudando qualquer uma das configurações para `false`.

    Ver também

    [Menus configuráveis e grupos de usuários](privileges.md#configurablemenus)

`$cfg['Servers'][$i]['navigationhiding']`[¶](#cfg_Servers_navigationhiding "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.1.0.

    Desde a versão 4.1.0 você pode esconder/mostrar itens na árvore de navegação.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['navigationhiding']`](#cfg_Servers_navigationhiding) (ex: `pma__navigationhiding`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['central_columns']`[¶](#cfg_Servers_central_columns "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.3.0.

    Desde a versão 4.3.0 você pode ter uma lista central de colunas por banco de dados. Você pode adicionar/remover colunas para a lista de acordo com a sua exigência. Essas colunas na lista central estarão disponíveis para usar enquanto você cria uma nova coluna para a tabela ou cria-se uma tabela. Você pode selecionar uma coluna de uma lista central enquanto cria uma nova coluna, ela poupará você de escrever a mesma definição de coluna mais uma vez ou de escrever diferentes nomes para uma coluna similar.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['central_columns']`](#cfg_Servers_central_columns) (ex: `pma__central_columns`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['designer_settings']`[¶](#cfg_Servers_designer_settings "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.5.0.

    Desde o release 4.5.0 as configurações de seu designer podem ser lembradas. Suas escolhas referentes a ‘Ligações Angulares/Diretas’, ‘Ajustar a Grade’, ‘Linhas de Relação de Alternância’, ‘Pequenas/Grandes’, ‘Mover Menu’ e ‘Marcar Texto’ podem ser lembradas de forma persistente.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['designer_settings']`](#cfg_Servers_designer_settings) (por exemplo `pma__designer_settings`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['savedsearches']`[¶](#cfg_Servers_savedsearches "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.2.0.

    Desde a versão 4.2.0 você pode salvar e carregar pesquisas de exemplo-por-consulta do Banco de Dados > Painel de Consulta.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['savedsearches']`](#cfg_Servers_savedsearches) (ex: `pma__savedsearches`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['export_templates']`[¶](#cfg_Servers_export_templates "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 4.5.0.

    Desde a versão 4.5.0 você pode salvar e carregar modelos de exportação.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['export_templates']`](#cfg_Servers_export_templates) (por exemplo `pma__export_templates`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['tracking']`[¶](#cfg_Servers_tracking "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 3.3.x.

    Desde a versão 3.3.x um mecanismo de rastreamento está disponível. Ele ajuda você a rastrear cada comando [SQL](glossary.md#term-sql) que é executado pelo phpMyAdmin. O mecanismo suporta log de manipulação de dados e dados de definição de instruções. Após ativá-lo, você pode criar versões das tabelas.

    A criação de uma versão possui dois efeitos:

    - o phpMyAdmin salva uma fotografia da tabela, incluindo estruturas e índices.
    - o phpMyAdmin guarda log de todos os comandos que mudarem a estrutura e/ou dados da tabela e referencia esses comandos na nova versão.

    É claro que você pode ver as mudanças rastreadas. Na página Tracking está disponível um relatório completo para cada versão. Você pode usar filtros para o relatório, como por exemplo, você pode pegar uma lista de instruções dentro de uma data definida. Quando você quiser filtrar nomes de usuários, você pode entrar \* para todos os nomes ou você pode inserir uma lista dos nomes separados por “,”. Além disso, você pode exportar os relatórios (filtrados) para um arquivo ou para um banco de dados temporário.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['tracking']`](#cfg_Servers_tracking) (ex: `pma_tracking`)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['tracking_version_auto_create']`[¶](#cfg_Servers_tracking_version_auto_create "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Quando o mecanismo de rastreamento cria versões de tabelas e visões automaticamente.

    Se isso estiver definido como true e você criar uma tabela ou view com

    - CREATE TABLE …
    - CREATE VIEW …

    e nenhuma versão existir para ela, o mecanismo irá criar uma versão para você automaticamente.

`$cfg['Servers'][$i]['tracking_default_statements']`[¶](#cfg_Servers_tracking_default_statements "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'CREATE TABLE, ALTER TABLE, DROP TABLE, RENAME TABLE, CREATE INDEX, DROP INDEX, INSERT, UPDATE, DELETE, TRUNCATE, REPLACE, CREATE VIEW, ALTER VIEW, DROP VIEW, CREATE DATABASE, ALTER DATABASE, DROP DATABASE'` |

    Define a lista de comandos que a auto-criação usa para novas versões.

`$cfg['Servers'][$i]['tracking_add_drop_view']`[¶](#cfg_Servers_tracking_add_drop_view "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Whether a DROP VIEW IF EXISTS statement will be added as first line to
    the log when creating a view.

`$cfg['Servers'][$i]['tracking_add_drop_table']`[¶](#cfg_Servers_tracking_add_drop_table "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Whether a DROP TABLE IF EXISTS statement will be added as first line
    to the log when creating a table.

`$cfg['Servers'][$i]['tracking_add_drop_database']`[¶](#cfg_Servers_tracking_add_drop_database "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Whether a DROP DATABASE IF EXISTS statement will be added as first
    line to the log when creating a database.

`$cfg['Servers'][$i]['userconfig']`[¶](#cfg_Servers_userconfig "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou false |
    | Valor padrão: | `''` |

    Novo na versão 3.4.x.

    Desde a versão 3.4.x o phpMyAdmin permite aos usuários configurar a maior parte das preferências e armazená-las no banco de dados.

    Se você não permite armazenar as preferências em [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb), os usuários ainda conseguem personalizar o phpMyAdmin, mas as configurações serão salvas no armazenamento local do navegador, ou, se isso estiver indisponível, até o fim da sessão.

    Para permtir o uso desta funcionalidade:

    - configure [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e o storage de configurações do phpMyAdmin
    - coloque o nome da tabela em [`$cfg['Servers'][$i]['userconfig']`](#cfg_Servers_userconfig)

    Este recurso pode ser desativado mudando a configuração para `false`.

`$cfg['Servers'][$i]['MaxTableUiprefs']`[¶](#cfg_Servers_MaxTableUiprefs "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 100 |

    Número máximo de linhas salvas na tabela: [`$cfg['Servers'][$i]['table_uiprefs']`](#cfg_Servers_table_uiprefs).

    Quando as tabelas são eliminadas ou renomeadas, [`$cfg['Servers'][$i]['table_uiprefs']`](#cfg_Servers_table_uiprefs) poderá conter dados inválidos (referindo às tabelas que não existem mais). Nós só mantemos esse número de mais novos campos em [`$cfg['Servers'][$i]['table_uiprefs']`](#cfg_Servers_table_uiprefs) e automaticamente deletamos os campos mais antigos.

`$cfg['Servers'][$i]['SessionTimeZone']`[¶](#cfg_Servers_SessionTimeZone "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Sets the time zone used by phpMyAdmin. Leave blank to use the time zone of your
    database server. Possible values are explained at
    <https://dev.mysql.com/doc/refman/8.0/en/time-zone-support.html>

    Isso é útil quando seu banco de dados usa uma zona de tempo que é diferente da zona de tempo que você quer usar no phpMyAdmin.

`$cfg['Servers'][$i]['AllowRoot']`[¶](#cfg_Servers_AllowRoot "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Quando permitir acesso como root. Isso é apenas um atalho para [`$cfg['Servers'][$i]['AllowDeny']['rules']`](#cfg_Servers_AllowDeny_rules) abaixo.

`$cfg['Servers'][$i]['AllowNoPassword']`[¶](#cfg_Servers_AllowNoPassword "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Quando permitir autenticações sem senha. O valor padrão é `false` para esse parâmetro a fim de prevenir acessos não-desejados a um sevidor MySQL que foi deixado com uma senha vazia para root ou no qual há um usuário anônimo (em branco).

`$cfg['Servers'][$i]['AllowDeny']['order']`[¶](#cfg_Servers_AllowDeny_order "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Se sua ordem de regras está vazia, então a autorização de [IP](glossary.md#term-ip) está desabilitada.

    Se sua orgem de regras está definida como `'deny,allow'` então o sistema aplica todas as regras de negação seguidas pelas regras de permissão. O acesso é permitido por padrão. Qualquer cliente que não se encontra num comando Deny ou que se encontra num comando Allow terá acesso permitido ao servidor.

    Se sua orgem de regras está definida como `'allow,deny'` então o sistema aplica todas as regras de permissão seguido das regras de negação. O acesso é negado por padrão. Qualquer cliente que não se encontra num diretiva Allow ou que se encontra numa diretiva Deny terá acesso negado ao servidor.

    Se sua ordem de regras está definida como `'explicit'`, a autorização é realizada num estilo similar à regra ‘deny,allow’, com a restrição adicional que a combinação do seu host/username **deve** ser listada nas regras *allow*, e não listada nas regras *deny*. Isso é o meio **mais** seguro de usar as regras Allow/Deny, e estava disponível no Apache através da especificação das regras allow e deny sem definição de qualquer ordem.

    Favor também ver [`$cfg['TrustedProxies']`](#cfg_TrustedProxies) para detectar endereços IP por trás de proxies.

`$cfg['Servers'][$i]['AllowDeny']['rules']`[¶](#cfg_Servers_AllowDeny_rules "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor de strings |
    | Valor padrão: | array() |

    O formato geral para as regras é assim:

    ```
    <'allow' | 'deny'> <username> [from] <ipmask>
    ```

    Se você deseja marcar todos os usuários, é possível usar um `'%'` como curinga no campo *username*.

    Existem alguns atalhos que você pode usar no campo da *máscara IP* também (favor observar que aqueles contendo SERVER\_ADDRESS podem não estar disponíveis em todos os servidores web):

    ```
    'all' -> 0.0.0.0/0
    'localhost' -> 127.0.0.1/8
    'localnetA' -> SERVER_ADDRESS/8
    'localnetB' -> SERVER_ADDRESS/16
    'localnetC' -> SERVER_ADDRESS/24
    ```

    Ter uma lista de regras vazia é equivalente a usar `'allow % from all'` se sua ordem de regras está configurada como `'deny,allow'` ou `'deny % from all'` se sua ordem de regras está configurada como `'allow,deny'` ou `'explicit'`.

    For the [IP Address](glossary.md#term-ip-address) matching
    system, the following work:

    - `xxx.xxx.xxx.xxx` (an exact [IP Address](glossary.md#term-ip-address))
    - `xxx.xxx.xxx.[yyy-zzz]` (an [IP Address](glossary.md#term-ip-address) range)
    - `xxx.xxx.xxx.xxx/nn` (Endereços [IP](glossary.md#term-ip) de tipo CIDR, Classless Inter-Domain Routing - Roteamento Sem Classe entre Domínios)

    Mas os endereços a seguir não funcionam:

    - `xxx.xxx.xxx.xx[yyy-zzz]` (alcance parcial de endereço [IP](glossary.md#term-ip))

    Para endereços [IPv6](glossary.md#term-ipv6), os endereços a seguir funcionam:

    - `xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx` (um endereço [IPv6](glossary.md#term-ipv6) exato)
    - `xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:[yyyy-zzzz]` (um alcance de endereço [IPv6](glossary.md#term-ipv6))
    - `xxxx:xxxx:xxxx:xxxx/nn` (Endereços [IPv6](glossary.md#term-ipv6) de tipo CIDR, Classless Inter-Domain Routing - Roteamento sem Classe Entre Domínios)

    Mas os endereços a seguir não funcionam:

    - `xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xxxx:xx[yyy-zzz]` (alcance parcial de um endereço [IPv6](glossary.md#term-ipv6))

    Exemplos:

    ```
    $cfg['Servers'][$i]['AllowDeny']['order'] = 'allow,deny';
    $cfg['Servers'][$i]['AllowDeny']['rules'] = ['allow bob from all'];
    // Allow only 'bob' to connect from any host

    $cfg['Servers'][$i]['AllowDeny']['order'] = 'allow,deny';
    $cfg['Servers'][$i]['AllowDeny']['rules'] = ['allow mary from 192.168.100.[50-100]'];
    // Allow only 'mary' to connect from host 192.168.100.50 through 192.168.100.100

    $cfg['Servers'][$i]['AllowDeny']['order'] = 'allow,deny';
    $cfg['Servers'][$i]['AllowDeny']['rules'] = ['allow % from 192.168.[5-6].10'];
    // Allow any user to connect from host 192.168.5.10 or 192.168.6.10

    $cfg['Servers'][$i]['AllowDeny']['order'] = 'allow,deny';
    $cfg['Servers'][$i]['AllowDeny']['rules'] = ['allow root from 192.168.5.50','allow % from 192.168.6.10'];
    // Allow any user to connect from 192.168.6.10, and additionally allow root to connect from 192.168.5.50
    ```

`$cfg['Servers'][$i]['DisableIS']`[¶](#cfg_Servers_DisableIS "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Desativa o uso de `INFORMATION_SCHEMA` para recuperar informação (use os comandos `SHOW` em vez disso), por causa de problemas de velocidade quando houver muitos bancos de dados presentes.

    Nota

    A habilitação desta opção pode dar a você uma grande performance em servidores MySQL antigos.

`$cfg['Servers'][$i]['SignonScript']`[¶](#cfg_Servers_SignonScript "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Novo na versão 3.5.0.

    Nome do script PHP a ser buscado e executado para obter as credenciais de autenticação. Essa é uma técnica alternativa de autenticação baseada em sessão única. O script deve conter uma função chamada `get_login_credentials` que retorna a lista de usuário e senha, aceitando como único parâmetro um nome de usuário existente (pode ser vazio). Veja o arquivo `examples/signon-script.php` para um exemplo:

    ```
    <?php
    /**
     * Single signon for phpMyAdmin
     *
     * This is just example how to use script based single signon with
     * phpMyAdmin, it is not intended to be perfect code and look, only
     * shows how you can integrate this functionality in your application.
     */

    declare(strict_types=1);

    // phpcs:disable Squiz.Functions.GlobalFunction

    /**
     * This function returns username and password.
     *
     * It can optionally use configured username as parameter.
     *
     * @param string $user User name
     *
     * @return array<int,string>
     */
    function get_login_credentials(string $user): array
    {
        /* Optionally we can use passed username */
        if (! empty($user)) {
            return [$user, 'password'];
        }

        /* Here we would retrieve the credentials */
        return ['root', ''];
    }
    ```

    Ver também

    [Modo de autenticação tradicional](setup.md#auth-signon)

`$cfg['Servers'][$i]['SignonSession']`[¶](#cfg_Servers_SignonSession "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Nome da sessão que deverá ser usado no método de autenticação. Você deveria usar algo diferente de `phpMyAdmin`, já que essa é a sessão usada internamente pelo phpMyAdmin. Surte efeito somente se [`$cfg['Servers'][$i]['SignonScript']`](#cfg_Servers_SignonScript) não estiver configurado.

    Ver também

    [Modo de autenticação tradicional](setup.md#auth-signon)

`$cfg['Servers'][$i]['SignonCookieParams']`[¶](#cfg_Servers_SignonCookieParams "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | `array()` |

    Novo na versão 4.7.0.

    Um vetor associativo de parâmetros de cookies de sessão de outro sistema de autenticação. Não é necessário se o outro sistema não usar session\_set\_cookie\_params(). As chaves devem incluir ‘lifetime’, ‘path’, ‘domain’, ‘secure’ ou ‘httponly’. Os valores válidos são mencionados em session\_get\_cookie\_params <https://www.php.net/manual/pt\_BR/function.session-get-cookie-params.php> e devem ser configurados com os mesmos valores que a outra aplicação usa. Tem efeito somente se [`$cfg['Servers'][$i]['SignonScript']`](#cfg_Servers_SignonScript) não estiver configurado.

    Ver também

    [Modo de autenticação tradicional](setup.md#auth-signon)

`$cfg['Servers'][$i]['SignonURL']`[¶](#cfg_Servers_SignonURL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    [URL](glossary.md#term-url) onde o usuário será redirecionado para entrar com o método de autenticação. Deve ser absoluta, incluindo o protocolo.

    Ver também

    [Modo de autenticação tradicional](setup.md#auth-signon)

`$cfg['Servers'][$i]['LogoutURL']`[¶](#cfg_Servers_LogoutURL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    [URL](glossary.md#term-url) onde o usuário será redirecionado após a saída (não afeta o método de autenticação por configuração). Deve ser absoluta, incluindo o protocolo.

`$cfg['Servers'][$i]['hide_connection_errors']`[¶](#cfg_Servers_hide_connection_errors "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Novo na versão 4.9.8.

    Whether to show or hide detailed MySQL/MariaDB connection errors on the login page.

    Nota

    This error message can contain the target database server hostname or IP address,
    which may reveal information about your network to an attacker.

## Configurações genéricas[¶](#generic-settings "Link permanente para este título")

`$cfg['DisableShortcutKeys']`[¶](#cfg_DisableShortcutKeys "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    You can disable phpMyAdmin shortcut keys by setting [`$cfg['DisableShortcutKeys']`](#cfg_DisableShortcutKeys) to true.

`$cfg['ServerDefault']`[¶](#cfg_ServerDefault "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 1 |

    Se você tiver mais que um servidor configurado, você pode definir [`$cfg['ServerDefault']`](#cfg_ServerDefault) para qualquer um deles para auto-conectar ao servidor quando o phpMyAdmin for iniciado, ou definir para 0 para receber uma lista dos servidores sem autenticar.

    Se você tiver somente um servidor configurado, [`$cfg['ServerDefault']`](#cfg_ServerDefault) DEVE estar definido neste servidor.

`$cfg['VersionCheck']`[¶](#cfg_VersionCheck "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Enables check for latest versions using JavaScript on the main phpMyAdmin
    page or by directly accessing index.php?route=/version-check.

    Nota

    Essa configuração pode ser ajustada pelo seu vendedor.

`$cfg['ProxyUrl']`[¶](#cfg_ProxyUrl "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    A URL do proxy a ser usada quando o phpMyAdmin precisar acessar a internet externa para procurar informações da versão mais recente ou para enviar relatórios de erro. Você precisa disso se o servidor onde o phpMyAdmin estiver instalado não tiver acesso direto à internet. O formato é “nome de host:número de porta”

`$cfg['ProxyUser']`[¶](#cfg_ProxyUser "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O usuário para autenticar no proxy. Por padrão, nenhuma autenticação é efetuada. Se for fornecido um usuário, será efetuada uma Autenticação Básica. Nenhum outro tipo de autenticação é suportado atualmente.

`$cfg['ProxyPass']`[¶](#cfg_ProxyPass "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    A senha para autenticar no proxy.

`$cfg['MaxDbList']`[¶](#cfg_MaxDbList "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 100 |

    O número máximo de nomes de bancos de dados a ser mostrado na lista do painel principal de bancos de dados.

`$cfg['MaxTableList']`[¶](#cfg_MaxTableList "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 250 |

    O número máximo de nomes de tabela a serem exibidos na lista do painel principal (exceto na página Exportação).

`$cfg['ShowHint']`[¶](#cfg_ShowHint "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se mostra ou não dicas (por exemplo, dicas quando estiver com o mouse sobre cabeçalhos de tabela).

`$cfg['MaxCharactersInDisplayedSQL']`[¶](#cfg_MaxCharactersInDisplayedSQL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 1000 |

    O número máximo de caracteres quando uma query [SQL](glossary.md#term-sql) for mostrada. O limite padrão de 1000 deve ser corrigido para evitar a exibição de toneladas de códigos hexadecimais que representam BLOBs, mas alguns usuários tem queries [SQL](glossary.md#term-sql) reais que tem mais de 1000 caracteres. Além disso, se o comprimento de uma query exceder esse limite, essa query não será guardada no histórico.

`$cfg['PersistentConnections']`[¶](#cfg_PersistentConnections "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Whether [persistent connections](https://www.php.net/manual/en/features.persistent-connections.php) should be used or not.

Ver também

[mysqli documentation for persistent connections](https://www.php.net/manual/en/mysqli.persistconns.php)

`$cfg['ForceSSL']`[¶](#cfg_ForceSSL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Obsoleto desde a versão 4.6.0: Esta configuração não está mais disponível desde o phpMyAdmin 4.6.0. Por favor, ajuste seu servidor web em vez disso.

    Se força o uso de https quando acessa o phpMyAdmin. Em uma configuração de proxy reverso, definir isso para `true` não é suportado.

    Nota

    Em algumas instalações (como proxy SSL separado ou balanceador de carga) você pode ter que definir [`$cfg['PmaAbsoluteUri']`](#cfg_PmaAbsoluteUri) para redirecionamento correto.

`$cfg['MysqlSslWarningSafeHosts']`[¶](#cfg_MysqlSslWarningSafeHosts "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | `['127.0.0.1', 'localhost']` |

    This search is case-sensitive and will match the exact string only.
    If your setup does not use SSL but is safe because you are using a
    local connection or private network, you can add your hostname or [IP](glossary.md#term-ip) to the list.
    You can also remove the default entries to only include yours.

    This check uses the value of [`$cfg['Servers'][$i]['host']`](#cfg_Servers_host).

    Novo na versão 5.1.0.

    Examplo de configuração

    ```
    $cfg['MysqlSslWarningSafeHosts'] = ['127.0.0.1', 'localhost', 'mariadb.local'];
    ```

`$cfg['ExecTimeLimit']`[¶](#cfg_ExecTimeLimit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | inteiro [número de segundos] |
    | Valor padrão: | 300 |

    Define o número de segundos permitidos de execução de um script. Se estiver como zero segundos, nenhum limite de tempo é imposto. Essa configuração é usada quando importar/exportar arquivos de exportação mas não surte efeito quando o PHP estiver rodando em modo seguro.

`$cfg['SessionSavePath']`[¶](#cfg_SessionSavePath "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Caminho para armazenamento de dados de sessão ([parâmetro session\_save\_path do PHP](https://www.php.net/session_save_path)).

    Aviso

    Esta pasta não deve ser acessível publicamente por meio do servidor web, caso contrário você corre o risco de vazar dados privados da sua sessão.

`$cfg['MemoryLimit']`[¶](#cfg_MemoryLimit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string [número de bytes] |
    | Valor padrão: | `'-1'` |

    Define o número de bytes que um script pode alocar. Se definido como `'-1'`, nenhum limite é imposto. Se definido como `'0'`, nenhuma alteração é feita no limite de memória e o `php.ini` `memory_limit` é usado.

    Esta configuração é usada durante a importação/exportação de arquivos de despejo, então você definitivamente não vai querer colocar um valor muito baixo aqui. Não tem efeito quando o PHP está sendo executado em modo de segurança.

    Você também pode usar qualquer string como no arquivo `php.ini`, ex: ‘16M’. Certifique-se de não omitir o sufixo (16 significa 16 bytes!)

`$cfg['SkipLockedTables']`[¶](#cfg_SkipLockedTables "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Marca tabelas usadas e torna possível mostrar bancos de dados com tabelas travadas (desde o MySQL 3.23.30).

`$cfg['ShowSQL']`[¶](#cfg_ShowSQL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se as queries [SQL](glossary.md#term-sql) que são geradas pelo phpMyAdmin devem ser mostradas ou não.

`$cfg['RetainQueryBox']`[¶](#cfg_RetainQueryBox "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se a caixa de query [SQL](glossary.md#term-sql) deve continuar sendo mostrada após seu envio.

`$cfg['CodemirrorEnable']`[¶](#cfg_CodemirrorEnable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se usa um editor de código JavaScript para caixas de query SQL. CodeMirror apresenta um destacamento de sintaxe e número de linha. No entanto, o clique do meio para colar os conteúdos da área de transferência em algumas distribuições do Linux (como o Ubuntu) não é suportado por todos os navegadores.

`$cfg['LintEnable']`[¶](#cfg_LintEnable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Novo na versão 4.5.0.

    Defines whether to use the parser to find any errors in the query before executing.

`$cfg['DefaultForeignKeyChecks']`[¶](#cfg_DefaultForeignKeyChecks "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'default'` |

    Valor padrão da caixa de seleção para verificações de chaves estrangeiras, para desabilitar/habilitar verificações de chaves estrangeiras para certas consultas. Os valores possíveis são ‘default’`, `'enable'` ou `'disable'`. Se configurado para `'default'`, o valor da variável `FOREIGN_KEY_CHECKS` do MySQL é usado.

`$cfg['AllowUserDropDatabase']`[¶](#cfg_AllowUserDropDatabase "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Aviso

    Esta não é uma medida de segurança, pois sempre haverá maneiras de contornar isso. Se você deseja proibir que os usuários removam bancos de dados, revogue seus privilégios DROP correspondentes.

    Define se é permitido a usuários normais (não-administradores) deletar seus próprios bancos de dados ou não. Se definido como false, o link Drop Database não será mostrado, e um comando `DROP DATABASE mydatabase` será rejeitado. Bastante prático para [ISP](glossary.md#term-isp) s com muitos clientes.

    A limitação das queries [SQL](glossary.md#term-sql) não é tão estrita quando usado os privilégios MySQL. Isso é por causa da natureza das queries [SQL](glossary.md#term-sql) que pode ser bem complicada. Então esta escolha deveria ser vista como uma ajuda para evitar exclusão acidental em vez de limitação estrito de privilégios.

`$cfg['Confirm']`[¶](#cfg_Confirm "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se um aviso (“Você tem certeza…”) deve ser mostrado quando você está prestes a perder dados.

`$cfg['UseDbSearch']`[¶](#cfg_UseDbSearch "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se a “pesquisa por string dentro de banco de dados” está ativada ou não.

`$cfg['IgnoreMultiSubmitErrors']`[¶](#cfg_IgnoreMultiSubmitErrors "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se o phpMyAdmin irá continuar executando instruções multi-query se uma das queries falhar. O padrão é abortar a execução.

`$cfg['enable_drag_drop_import']`[¶](#cfg_enable_drag_drop_import "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se o recurso de importação com arrastar e soltar está ativado ou não. Quando ativado, um usuário pode arrastar um arquivo para o navegador e o phpMyAdmin tentará importar o arquivo.

`$cfg['URLQueryEncryption']`[¶](#cfg_URLQueryEncryption "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Novo na versão 4.9.8.

    Define whether phpMyAdmin will encrypt sensitive data (like database name
    and table name) from the URL query string. Default is to not encrypt the URL
    query string.

`$cfg['URLQueryEncryptionSecretKey']`[¶](#cfg_URLQueryEncryptionSecretKey "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Novo na versão 4.9.8.

    A secret key used to encrypt/decrypt the URL query string.
    Should be 32 bytes long.

    Ver também

    [2.10 How to generate a string of random bytes](faq.md#faq2-10)

`$cfg['maxRowPlotLimit']`[¶](#cfg_maxRowPlotLimit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 500 |

    Maximum number of rows retrieved for zoom search.

## Opções de autenticação por cookie[¶](#cookie-authentication-options "Link permanente para este título")

`$cfg['blowfish_secret']`[¶](#cfg_blowfish_secret "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    The “cookie” auth\_type uses the [Sodium](glossary.md#term-sodium) extension to encrypt the cookies (see [Cookie](glossary.md#term-cookie)). If you are
    using the “cookie” auth\_type, enter here a generated string of random bytes to be used as an encryption key. It
    will be used internally by the [Sodium](glossary.md#term-sodium) extension: you won’t be prompted for this encryption key.

    Since a binary string is usually not printable, it can be converted into a hexadecimal representation (using a
    function like [sodium\_bin2hex](https://www.php.net/sodium_bin2hex)) and then used in the configuration file. For
    example:

    ```
    // The string is a hexadecimal representation of a 32-bytes long string of random bytes.
    $cfg['blowfish_secret'] = sodium_hex2bin('f16ce59f45714194371b48fe362072dc3b019da7861558cd4ad29e4d6fb13851');
    ```

    Using a binary string is recommended. However, if all 32 bytes of the string are visible
    characters, then a function like [sodium\_bin2hex](https://www.php.net/sodium_bin2hex) is not required. For
    example:

    ```
    // A string of 32 characters.
    $cfg['blowfish_secret'] = 'JOFw435365IScA&Q!cDugr!lSfuAz*OW';
    ```

    Aviso

    The encryption key must be 32 bytes long. If it is longer than the length of bytes, only the first 32 bytes will
    be used, and if it is shorter, a new temporary key will be automatically generated for you. However, this
    temporary key will only last for the duration of the session.

    Nota

    A configuração é chamada blowfish\_secret por razões históricas como algoritmo Blowfish foi originalmente usado para fazer o encapsulamento.

    Alterado na versão 3.1.0: A partir da versão 3.1.0 o phpMyAdmin pode gerá-la automaticamente, mas ela torna-se um pouco fraca já que esta frase gerada é armazenada em sessão e além disto torna-se impossível resgatar o nome de usuário do cookie.

    Alterado na versão 5.2.0: Since version 5.2.0, phpMyAdmin uses the
    [sodium\_crypto\_secretbox](https://www.php.net/sodium_crypto_secretbox) and
    [sodium\_crypto\_secretbox\_open](https://www.php.net/sodium_crypto_secretbox_open) PHP functions to encrypt
    and decrypt cookies, respectively.

    Ver também

    [2.10 How to generate a string of random bytes](faq.md#faq2-10)

`$cfg['CookieSameSite']`[¶](#cfg_CookieSameSite "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'Strict'` |

    Novo na versão 5.1.0.

    It sets SameSite attribute of the Set-Cookie [HTTP](glossary.md#term-http) response header.
    Valid values are:

    - `Lax`
    - `Strict`
    - `None`

    Ver também

    [rfc6265 bis](https://datatracker.ietf.org/doc/html/draft-ietf-httpbis-rfc6265bis-03#section-5.3.7)

`$cfg['LoginCookieRecall']`[¶](#cfg_LoginCookieRecall "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se as autenticações anteriores devem ser relembradas ou não no modo de autenticação por cookie.

    Isso é automaticamente desativado se você não tiver configurado [`$cfg['blowfish_secret']`](#cfg_blowfish_secret).

`$cfg['LoginCookieValidity']`[¶](#cfg_LoginCookieValidity "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | inteiro [número de segundos] |
    | Valor padrão: | 1440 |

    Define quanto tempo um cookie de login é válido. Favor observar que a opção de configuração do PHP [session.gc\_maxlifetime](https://www.php.net/manual/pt_BR/session.configuration.php#ini.session.gc-maxlifetime) pode limitar a validade da sessão e se a sessão for perdida, a autenticação por cookie também é invalidada. Então é uma boa ideia definir `session.gc_maxlifetime` pelo menos para o mesmo valor que [`$cfg['LoginCookieValidity']`](#cfg_LoginCookieValidity).

`$cfg['LoginCookieStore']`[¶](#cfg_LoginCookieStore "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | inteiro [número de segundos] |
    | Valor padrão: | 0 |

    Define quanto tempo a autenticação por cookie deve ser armazenada no navegador. O padrão 0 quer dizer que ele será mantigo para a próxima sessão existente. Isso é recomendado para ambientes não confiáveis.

`$cfg['LoginCookieDeleteAll']`[¶](#cfg_LoginCookieDeleteAll "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se ativado (padrão), a saída deleta os cookies para todos os servidores, senão somente para o atual. Definir isso como false torna fácil esquecer de sair de outro servidor, quando você estiver usando mais de um.

`$cfg['AllowArbitraryServer']`[¶](#cfg_AllowArbitraryServer "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Se ativado, permite você se autenticar em servidores arbitrários usando autenticação por cookies.

    Nota

    Favor usar isso com cuidado, já que isso pode permitir que os usuários acessem aos servidores MySQL por trás do firewall onde seu servidor [HTTP](glossary.md#term-http) está localizado. Veja também [`$cfg['ArbitraryServerRegexp']`](#cfg_ArbitraryServerRegexp).

`$cfg['ArbitraryServerRegexp']`[¶](#cfg_ArbitraryServerRegexp "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Restringe os servidores MySQL para os quais o usuário pode fazer log in quando [`$cfg['AllowArbitraryServer']`](#cfg_AllowArbitraryServer) está habilitado ao corresponder o [IP](glossary.md#term-ip) ou o nome do host do servidor MySQL para a expressão regular dada. A expressão regular deve ser incluída com um caractere delimitador.

    Recomenda-se incluir símbolos de início e fim na expressão regular, de modo que você possa evitar correspondências parciais na string.

    **Exemplos:**

    ```
    // Allow connection to three listed servers:
    $cfg['ArbitraryServerRegexp'] = '/^(server|another|yetdifferent)$/';

    // Allow connection to range of IP addresses:
    $cfg['ArbitraryServerRegexp'] = '@^192\.168\.0\.[0-9]{1,}$@';

    // Allow connection to server name ending with -mysql:
    $cfg['ArbitraryServerRegexp'] = '@^[^:]\-mysql$@';
    ```

    Nota

    O nome completo do servidor foi correspondido, podendo incluir a porta também. Devido à maneira como o MySQL é permissivo nos parâmetros de conexão, é possível usar strings de conexão como `` `server:3306-mysql` ``. Isso pode ser usado para ignorar a expressão regular por sufixo, ao se conectar a outro servidor.

`$cfg['CaptchaMethod']`[¶](#cfg_CaptchaMethod "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'invisible'` |

    Os valores válidos são:

    - `'invisible'` Use um método de verificação de captcha invisível;
    - `'checkbox'` Use uma caixa de seleção para confirmar que o usuário não é um robô.

    Novo na versão 5.0.3.

`$cfg['CaptchaApi']`[¶](#cfg_CaptchaApi "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'https://www.google.com/recaptcha/api.js'` |

    Novo na versão 5.1.0.

    The URL for the reCaptcha v2 service’s API, either Google’s or a compatible one.

`$cfg['CaptchaCsp']`[¶](#cfg_CaptchaCsp "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'https://apis.google.com https://www.google.com/recaptcha/ https://www.gstatic.com/recaptcha/ https://ssl.gstatic.com/'` |

    Novo na versão 5.1.0.

    The Content-Security-Policy snippet (URLs from which to allow embedded content)
    for the reCaptcha v2 service, either Google’s or a compatible one.

`$cfg['CaptchaRequestParam']`[¶](#cfg_CaptchaRequestParam "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'g-recaptcha'` |

    Novo na versão 5.1.0.

    The request parameter used for the reCaptcha v2 service.

`$cfg['CaptchaResponseParam']`[¶](#cfg_CaptchaResponseParam "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'g-recaptcha-response'` |

    Novo na versão 5.1.0.

    The response parameter used for the reCaptcha v2 service.

`$cfg['CaptchaLoginPublicKey']`[¶](#cfg_CaptchaLoginPublicKey "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    The public key for the reCaptcha service that can be obtained from the
    “Admin Console” on <https://www.google.com/recaptcha/about/>.

    Ver também

    <<https://developers.google.com/recaptcha/docs/v3>>

    reCaptcha será usado em [Modo de autenticação por cookies](setup.md#cookie).

    Novo na versão 4.1.0.

`$cfg['CaptchaLoginPrivateKey']`[¶](#cfg_CaptchaLoginPrivateKey "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    The private key for the reCaptcha service that can be obtained from the
    “Admin Console” on <https://www.google.com/recaptcha/about/>.

    Ver também

    <<https://developers.google.com/recaptcha/docs/v3>>

    reCaptcha será usado em [Modo de autenticação por cookies](setup.md#cookie).

    Novo na versão 4.1.0.

`$cfg['CaptchaSiteVerifyURL']`[¶](#cfg_CaptchaSiteVerifyURL "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O URL para o serviço reCaptcha realizar a ação siteverify.

    reCaptcha será usado em [Modo de autenticação por cookies](setup.md#cookie).

    Novo na versão 5.1.0.

## Painel de navegação de instalação[¶](#navigation-panel-setup "Link permanente para este título")

`$cfg['ShowDatabasesNavigationAsTree']`[¶](#cfg_ShowDatabasesNavigationAsTree "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    No painel de navegação, substitui a base de dados em árvore com um seletor

`$cfg['FirstLevelNavigationItems']`[¶](#cfg_FirstLevelNavigationItems "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 100 |

    O número bases de dados de primeiro nível que pode ser mostrado em cada página da árvore de navegação.

`$cfg['MaxNavigationItems']`[¶](#cfg_MaxNavigationItems "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 50 |

    O número de itens (tabelas, colunas, índices) que pode ser mostrado em cada página da árvore de navegação.

`$cfg['NavigationTreeEnableGrouping']`[¶](#cfg_NavigationTreeEnableGrouping "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se aglomera os bancos de dados baseados em um prefixo comum em seus nomes: [`$cfg['NavigationTreeDbSeparator']`](#cfg_NavigationTreeDbSeparator).

`$cfg['NavigationTreeDbSeparator']`[¶](#cfg_NavigationTreeDbSeparator "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'_'` |

    A string usada para separar as partes do nome do banco de dados ao mostrá-los em uma árvore.

`$cfg['NavigationTreeTableSeparator']`[¶](#cfg_NavigationTreeTableSeparator "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string ou vetor |
    | Valor padrão: | `'__'` |

    Define uma string a ser usada para englobar espaços de tabela. Isso quer dizer que se você tem tables como `first_second_third` isso será mostrado como a hierarquia de três níveis como: primeiro > segundo > terceiro. Se definir como false ou vazio, a função será desativada. OBSERVAÇÃO: você não deveria usar esse separador no começo ou fim do nome de uma tabela ou múltiplas vezes uma após outra sem nenhum caractere entre elas.

`$cfg['NavigationTreeTableLevel']`[¶](#cfg_NavigationTreeTableLevel "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 1 |

    Define quantos subníveis serão mostrados quando separar tabelas com o separador acima.

`$cfg['NumRecentTables']`[¶](#cfg_NumRecentTables "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 10 |

    O número máximo de tabelas recentemente usadas no painel de navegação. Defina isso como 0 (zero) para desativar a listagem das tabelas recentes.

`$cfg['NumFavoriteTables']`[¶](#cfg_NumFavoriteTables "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 10 |

    O número máximo de tabelas favoritas mostradas no painel de navegação. Defina isto como 0 (zero) para desativar a listagem das tabelas favoritas.

`$cfg['ZeroConf']`[¶](#cfg_ZeroConf "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Habilite o modo de Configuração Zero em que o será oferecida ao usuário uma escolha para criar o armazenamento da configuração do phpMyAdmin no banco de dados atual ou usar o armazenamento de configuração existente, se já estiver presente.

    Essa configuração não tem efeito se o banco de dados de armazenamento da configuração do phpMyAdmin é propriamente criado e as diretivas de configuração relatadas (como [`$cfg['Servers'][$i]['pmadb']`](#cfg_Servers_pmadb) e assim por diante) são configuradas.

`$cfg['NavigationLinkWithMainPanel']`[¶](#cfg_NavigationLinkWithMainPanel "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se ou não conecta com o painel principal pelo destaque do banco de dados ou da tabela atual.

`$cfg['NavigationDisplayLogo']`[¶](#cfg_NavigationDisplayLogo "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra ou não o logo do phpMyAdmin no topo do painel de navegação.

`$cfg['NavigationLogoLink']`[¶](#cfg_NavigationLogoLink "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'index.php'` |

    Enter the [URL](glossary.md#term-url) where the logo in the navigation panel will point to.
    For use especially with self made theme which changes this.
    For relative/internal URLs, you need to have leading `` ./ `` or trailing characters `` ? `` such as `'./index.php?route=/server/sql?'`.
    For external URLs, you should include URL protocol schemes (`http` or `https`) with absolute URLs.

    You may want to make the link open in a new browser tab, for that you need to use [`$cfg['NavigationLogoLinkWindow']`](#cfg_NavigationLogoLinkWindow)

`$cfg['NavigationLogoLinkWindow']`[¶](#cfg_NavigationLogoLinkWindow "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'main'` |

    Define se abre o link na janela principal (`main`) ou em uma nova (`new`). Observação: use `new` se você estiver usando o link para `phpmyadmin.net`.

    To open the link in the main window you will need to add the value of [`$cfg['NavigationLogoLink']`](#cfg_NavigationLogoLink)
    to [`$cfg['CSPAllow']`](#cfg_CSPAllow) because of the [Content Security Policy](glossary.md#term-content-security-policy) header.

`$cfg['NavigationTreeDisplayItemFilterMinimum']`[¶](#cfg_NavigationTreeDisplayItemFilterMinimum "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 30 |

    Define o número mínimo de itens (tabelas, views, rotinas e eventos) a mostrar na caixa de filtro JavaScript acima da lista de itens na árvore de navegação.

    Para desativar o filtro completamente, use algum número alto (ex: 9999)

`$cfg['NavigationTreeDisplayDbFilterMinimum']`[¶](#cfg_NavigationTreeDisplayDbFilterMinimum "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 30 |

    Define o número mínimo de bancos de dados a mostrar na caixa de filtro JavaScript acima da lista de bancos de dados na árvore de navegação.

    Para desativar o filtro completamente, use algum número alto (ex: 9999)

`$cfg['NavigationDisplayServers']`[¶](#cfg_NavigationDisplayServers "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra ou não a escolha de servidor no topo do painel de navegação.

`$cfg['DisplayServersList']`[¶](#cfg_DisplayServersList "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se mostra a escolha de servidor como link em vez de um drop-down.

`$cfg['NavigationTreeDefaultTabTable']`[¶](#cfg_NavigationTreeDefaultTabTable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'structure'` |

    Define a aba exibida por padrão ao clicar no ícone pequeno ao lado de cada nome de tabela no painel de navegação. Os valores possíveis são o equivalente localizado de:

    - `structure`
    - `sql`
    - `search`
    - `insert`
    - `browse`

`$cfg['NavigationTreeDefaultTabTable2']`[¶](#cfg_NavigationTreeDefaultTabTable2 "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | nulo |

    Define a aba exibida por padrão ao clicar no segundo ícone pequeno ao lado de cada nome de tabela no painel de navegação. Os valores possíveis são o equivalente localizado de:

    - `(vazio)`
    - `structure`
    - `sql`
    - `search`
    - `insert`
    - `browse`

`$cfg['NavigationTreeEnableExpansion']`[¶](#cfg_NavigationTreeEnableExpansion "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se deseja oferecer a possibilidade de expansão de árvore no painel de navegação.

`$cfg['NavigationTreeShowTables']`[¶](#cfg_NavigationTreeShowTables "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se as tabelas do banco de dados devem ser mostradas no painel de navegação.

`$cfg['NavigationTreeShowViews']`[¶](#cfg_NavigationTreeShowViews "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se as visões do banco de dados devem ser mostradas no painel de navegação.

`$cfg['NavigationTreeShowFunctions']`[¶](#cfg_NavigationTreeShowFunctions "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se as funções do banco de dados devem ser mostradas no painel de navegação.

`$cfg['NavigationTreeShowProcedures']`[¶](#cfg_NavigationTreeShowProcedures "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se os procedimentos do banco de dados devem ser mostrados no painel de navegação.

`$cfg['NavigationTreeShowEvents']`[¶](#cfg_NavigationTreeShowEvents "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se os eventos do banco de dados devem ser mostrados no painel de navegação.

`$cfg['NavigationTreeAutoexpandSingleDb']`[¶](#cfg_NavigationTreeAutoexpandSingleDb "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se deseja expandir um banco de dados único na árvore de navegação automaticamente.

`$cfg['NavigationWidth']`[¶](#cfg_NavigationWidth "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 240 |

    Largura do painel de navegação, deixe como 0 para recolher por padrão.

## Painel principal[¶](#main-panel "Link permanente para este título")

`$cfg['ShowStats']`[¶](#cfg_ShowStats "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra ou não o uso de espaço e as estatísticas a respeito do bancos de dados e tabelas. Observer que as estatísticas exigem pelo menos o MySQL 3.23.3 e que, atualmente, o MySQL não oferece esse tipo de informação para tabelas Berkely DB.

`$cfg['ShowServerInfo']`[¶](#cfg_ShowServerInfo "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean|string |
    | Valor padrão: | true |

    Defines whether to display detailed server information on main page.
    Possible values are:

    - `true` to show all server information
    - `false` to hide server information
    - `'database-server'` to show only database server information
    - `'web-server'` to show only web server information

    You can additionally hide more information by using
    [`$cfg['Servers'][$i]['verbose']`](#cfg_Servers_verbose).

    Alterado na versão 6.0.0: Added `'database-server'` and `'web-server'` options.

`$cfg['ShowPhpInfo']`[¶](#cfg_ShowPhpInfo "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se mostra ou não o PHP information no quadro principal inicial (direito).

    Favor observar que para bloquear o uso de `phpinfo()` nos scripts, você tem que colocar isto no seu arquivo `php.ini`:

    ```
    disable_functions = phpinfo()
    ```

    Aviso

    Ativar a página phpinfo vazará muitas informações sobre a configuração do servidor. Não é recomendado ativar isso em instalações compartilhadas.

    Isso também pode facilitar alguns ataques remotos em suas instalações, então ative isso somente quando necessário.

`$cfg['ShowChgPassword']`[¶](#cfg_ShowChgPassword "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra ou não o link Change password no quadro principal inicial (direito). Esta configuração não verifica os comandos MySQL inseridos diretamente.

    Observe que habilitar o link Change password não tem efeito no modo de autenticação por configuração: devido ao valor da senha estar fixa no arquivo de configuração, os usuários finais não podem modificar suas senhas.

`$cfg['ShowCreateDb']`[¶](#cfg_ShowCreateDb "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra ou não o formulário para criação de banco de dados no quadro principal inicial (direito). Esta configuração não verifica os comandos MySQL inseridos diretamente.

`$cfg['ShowGitRevision']`[¶](#cfg_ShowGitRevision "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Defines whether to display information about the current Git revision (if
    applicable) on the main panel.

`$cfg['MysqlMinVersion']`[¶](#cfg_MysqlMinVersion "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |

    Define a versão mínima do MySQL suportada. O padrão é escolhido pela equipe do phpMyAdmin; no entanto, esta diretiva foi solicitada por um desenvolvedor do painel de controle Plesk para facilitar a integração com servidores MySQL mais antigos (onde a maioria dos recursos do phpMyAdmin funcionam).

## Estrutura de banco de dados[¶](#database-structure "Link permanente para este título")

`$cfg['ShowDbStructureCharset']`[¶](#cfg_ShowDbStructureCharset "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Defines whether to show a column displaying the charset for all tables in the database structure page.

`$cfg['ShowDbStructureComment']`[¶](#cfg_ShowDbStructureComment "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Defines whether to show a column displaying the comments for all tables in the database structure page.

`$cfg['ShowDbStructureCreation']`[¶](#cfg_ShowDbStructureCreation "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se a página de estrutura do banco de dados (lista de tabelas) tem uma coluna “Criação” que mostra quando cada tabela foi criada.

`$cfg['ShowDbStructureLastUpdate']`[¶](#cfg_ShowDbStructureLastUpdate "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se a página de estrutura do banco de dados (lista de tabelas) tem uma coluna de “Última atualização” que mostra quando foi a última atualização de cada tabela.

`$cfg['ShowDbStructureLastCheck']`[¶](#cfg_ShowDbStructureLastCheck "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se a página de estrutura do banco de dados (lista de tabelas) tem uma coluna “Última consulta” que mostra quando foi a última visualização de cada tabela.

`$cfg['HideStructureActions']`[¶](#cfg_HideStructureActions "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Defines whether the table structure actions are hidden under a “More”
    drop-down.

`$cfg['ShowColumnComments']`[¶](#cfg_ShowColumnComments "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se os comentários da coluna devem ser exibidos como uma coluna na tela da estrutura de tabela.

## Modo de navegação[¶](#browse-mode "Link permanente para este título")

`$cfg['TableNavigationLinksMode']`[¶](#cfg_TableNavigationLinksMode "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'ícones'` |

    Define se os links das abas de navegação contém “icones”, “texto” ou ambos.

`$cfg['ActionLinksMode']`[¶](#cfg_ActionLinksMode "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'ambos'` |

    Se definido como `ícones`, irá mostrar ícones em vez de texto para os links de propriedades do bd e tabelas (como Browse, Select, Insert, …). Pode ser definido como `'both'` se você quiser ícones E texto. Quando definido como `texto`, irá mostrar somente texto.

`$cfg['RowActionType']`[¶](#cfg_RowActionType "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'ambos'` |

    Se mostra ícones ou texto ou ambos no segmento de ação na linha da tabela. O valor pode ser `'icons'`, `'text'` ou `'both'`.

`$cfg['ShowAll']`[¶](#cfg_ShowAll "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Defines whether a user should be displayed a “Show all” button in browse
    mode or not in all cases. By default it is shown only on small tables (less
    than 500 rows) to avoid performance issues while getting too many rows.

`$cfg['MaxRows']`[¶](#cfg_MaxRows "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 25 |

    Number of rows displayed when browsing a result set and no LIMIT
    clause is used. If the result set contains more rows, “Previous” and
    “Next” links will be shown. Possible values: 25,50,100,250,500.

`$cfg['Order']`[¶](#cfg_Order "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'SMART'` |

    Define se as colunas são mostradas em ordem ascendente (`ASC`), em ordem descendente (`DESC`) ou em ordem (`SMART`) - ex: ordem descendente de colunas de tipo TIME, DATE, DATETIME e TIMESTAMP, ordem ascendente nas demais - por padrão.

    Alterado na versão 3.4.0: Desde o phpMyAdmin 3.4.0, o valor padrão é `'SMART'`.

`$cfg['DisplayBinaryAsHex']`[¶](#cfg_DisplayBinaryAsHex "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Defines whether the “Show binary contents as HEX” browse option is
    ticked by default.

    Novo na versão 3.3.0.

    Obsoleto desde a versão 4.3.0: This setting was removed.

`$cfg['GridEditing']`[¶](#cfg_GridEditing "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'clique-duplo'` |

    Define qual ação (`double-click` ou `click`) ativa a edição da grade. Pode ser desativada com o valor `disabled`.

`$cfg['RelationalDisplay']`[¶](#cfg_RelationalDisplay "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'K'` |

    Define o comportamento inicial para Opções > Relacional. `K`, que é o padrão, exibe a chave enquanto `D` mostra a coluna exibida.

`$cfg['SaveCellsAtOnce']`[¶](#cfg_SaveCellsAtOnce "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se salva ou não todas as células editadas de uma vez na edição de grade.

## Modo de edição[¶](#editing-mode "Link permanente para este título")

`$cfg['ProtectBinary']`[¶](#cfg_ProtectBinary "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean ou string |
    | Valor padrão: | `'blob'` |

    Define se as colunas `BLOB` ou `BINARY` são protegidas contra edição quando estiver navegando pelo conteúdo da tabela. Os valores válidos são:

    - `false` para permitir a edição de todas as colunas;
    - `'blob'` para permitir edição de todas as colunas exceto as `BLOB`;
    - `'noblob'` para desativar a edição de todas as colunas exceto as `BLOB` (o oposto de `'blob'`);
    - `'all'` para desativar a edição de todas as colunas `BINARY` ou `BLOB`.

`$cfg['ShowFunctionFields']`[¶](#cfg_ShowFunctionFields "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se os campos de função MySQL devem ser mostradas inicialmente no modo de edição/inserimento. Desde a versão 2.10, o usuário pode ativar/desativar essa configuração pela interface.

`$cfg['ShowFieldTypesInDataEditView']`[¶](#cfg_ShowFieldTypesInDataEditView "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se os tipos de campos são mostrados inicialmente ou não no modo de edição/inserimento. O usuário pode ativar/desativar essa configuração pela interface.

`$cfg['InsertRows']`[¶](#cfg_InsertRows "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 2 |

    Define o número padrão de linhas a serem inseridas na página Inserir. Os usuários podem mudar isso manualmente na parte inferior daquela página para adicionar ou remover linhas em branco.

`$cfg['ForeignKeyMaxLimit']`[¶](#cfg_ForeignKeyMaxLimit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 100 |

    Se houver menos itens que isto na seção de chaves estrangeiras, então uma caixa drop-down de chaves estrangeiras é apresentada, no estilo descrito pela configuração [`$cfg['ForeignKeyDropdownOrder']`](#cfg_ForeignKeyDropdownOrder).

`$cfg['ForeignKeyDropdownOrder']`[¶](#cfg_ForeignKeyDropdownOrder "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘content-id’, ‘id-content’) |

    Para os campos de chaves estrangeiras drop-down, há vários métodos de exibição, oferecendo ambos os dados da chave e do valor. Os conteúdos do array devem ser uma ou ambas as strings: `content-id`, `id-content`.

## Configurações de exportação e importação[¶](#export-and-import-settings "Link permanente para este título")

`$cfg['ZipDump']`[¶](#cfg_ZipDump "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

`$cfg['GZipDump']`[¶](#cfg_GZipDump "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

`$cfg['BZipDump']`[¶](#cfg_BZipDump "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se permite o uso de compressão zip/GZip/BZip2 quando criar um arquivo de despejo

`$cfg['CompressOnFly']`[¶](#cfg_CompressOnFly "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se permite exportações comprimidas em GZip/BZip2 em tempo de execução. Isso não afeta exportações menores e permite os usuários criar arquivos de exportação mais largos que não caberiam na memória caso contrário por causa do limite de memória do php. Arquivos produzidos contém mais cabeçalhos GZip/BZip2, mas todos os programas normais cuidam disso corretamente.

`$cfg['Export']`[¶](#cfg_Export "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(…) |

    Neste array são definidos os parâmetros padrão para exportação; os nomes de itens são similares a textos vistos na página de exportação, então você consegue identificar facilmente o que eles significam.

`$cfg['Export']['format']`[¶](#cfg_Export_format "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'sql'` |

    Formato de exportação padrão.

`$cfg['Export']['method']`[¶](#cfg_Export_method "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'rápido'` |

    Define como o formulário de exportação é mostrado quando carregado. Os valores válidos são:

    - `quick` (“Rápida”) para mostrar o número mínimo de opções para configurar
    - `custom` (“Personalizada”) para mostrar todas as opções disponíveis para configurar
    - `custom-no-form` (“Personalizada sem formulário”) é o mesmo que `custom` (“Personalizada”), mas não mostra a opção de usar a exportação rápida

`$cfg['Export']['compression']`[¶](#cfg_Export_compression "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'none'` |

    Default export compression method. Possible values are `'none'`, `'zip'` or `'gzip'`.

`$cfg['Export']['charset']`[¶](#cfg_Export_charset "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Define o charset para a exportação gerada. Por padrão, nenhuma conversão de charset é feita, assumindo UTF-8.

`$cfg['Export']['file_template_table']`[¶](#cfg_Export_file_template_table "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@TABLE@'` |

    Modelo de nome de arquivo padrão para exportação de tabelas.

    Ver também

    [6.27 Quais strings de formatação eu posso usar?](faq.md#faq6-27)

`$cfg['Export']['file_template_database']`[¶](#cfg_Export_file_template_database "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@DATABASE@'` |

    Modelo de nome de arquivo padrão para exportação de bancos de dados.

    Ver também

    [6.27 Quais strings de formatação eu posso usar?](faq.md#faq6-27)

`$cfg['Export']['file_template_server']`[¶](#cfg_Export_file_template_server "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@SERVER@'` |

    Modelo de nome de arquivo padrão para exportação de servidores.

    Ver também

    [6.27 Quais strings de formatação eu posso usar?](faq.md#faq6-27)

`$cfg['Export']['remove_definer_from_definitions']`[¶](#cfg_Export_remove_definer_from_definitions "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Remove DEFINER clause from the event, view and routine definitions.

    Novo na versão 5.2.0.

`$cfg['Import']`[¶](#cfg_Import "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(…) |

    Neste array estão definidos os parâmetros padrão para importação; os nomes de itens são similares a textos vistos na página de importação, então você consegue facilmente identificar o que eles significam.

`$cfg['Import']['charset']`[¶](#cfg_Import_charset "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Define o charset para importação. Por padrão, nenhuma conversão de charset é feita, assumindo UTF-8.

`$cfg['Schema']`[¶](#cfg_Schema "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(…) |

`$cfg['Schema']['format']`[¶](#cfg_Schema_format "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'pdf'` |

    Defines the default format for schema export. Possible values are `'pdf'`, `'eps'`, `'dia'` or `'svg'`.

## Configurações de apresentação de abas[¶](#tabs-display-settings "Link permanente para este título")

`$cfg['TabsMode']`[¶](#cfg_TabsMode "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'ambos'` |

    Define se o menu com abas contém “ícones”, “texto” ou ambos.

`$cfg['PropertiesNumColumns']`[¶](#cfg_PropertiesNumColumns "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 1 |

    Quantas colunas serão utilizadas para mostrar as tabelas na visualização de propriedades do banco de dados? Quando definir isso para um valor maior que 1, o tipo do banco de dados será omitido para obter mais espaço de exibição.

`$cfg['DefaultTabServer']`[¶](#cfg_DefaultTabServer "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'welcome'` |

    Define a aba mostrada por padrão na exibição do servidor. Os valores possíveis são o equivalente localizado de:

    - `welcome` (recomendado para instalações multi-usuário)
    - `databases`,
    - `status`
    - `variables`
    - `privileges`

`$cfg['DefaultTabDatabase']`[¶](#cfg_DefaultTabDatabase "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'structure'` |

    Define a aba mostrada por padrão na exibição do banco de dados. Os valores possíveis são o equivalente localizado de:

    - `structure`
    - `sql`
    - `search`
    - `operations`

`$cfg['DefaultTabTable']`[¶](#cfg_DefaultTabTable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'browse'` |

    Define a aba mostrada por padrão na exibição da tabela. Os valores possíveis são o equivalente localizado de:

    - `structure`
    - `sql`
    - `search`
    - `insert`
    - `browse`

## Opções de PDF[¶](#pdf-options "Link permanente para este título")

`$cfg['PDFPageSizes']`[¶](#cfg_PDFPageSizes "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | `array('A3','A4','A5','carta','legal')` |

    Vetor de tamanhos de papéis possíveis para criar páginas PDF.

    Você não deveria precisar mudar isso.

`$cfg['PDFDefaultPageSize']`[¶](#cfg_PDFDefaultPageSize "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'A4'` |

    Tamanho padrão de página a usar ao criar páginas PDF. Valores válidos estão listados em [`$cfg['PDFPageSizes']`](#cfg_PDFPageSizes).

## Linguagens[¶](#languages "Link permanente para este título")

`$cfg['DefaultLang']`[¶](#cfg_DefaultLang "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'en'` |

    Define a linguagem padrão a usar, se não for definida pelo navegador ou pelo usuário. O arquivo da linguagem correspondente precisa estar em locale/*code*/LC\_MESSAGES/phpmyadmin.mo.

`$cfg['DefaultConnectionCollation']`[¶](#cfg_DefaultConnectionCollation "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'utf8mb4_general_ci'` |

    Define a codificação de caracteres padrão a usar na conexão, se não for definida pelo usuário. Veja a documentação do MySQL para charsets <https://dev.mysql.com/doc/refman/5.7/en/charset-charsets.html> para ver a lista de valores disponíveis.

`$cfg['Lang']`[¶](#cfg_Lang "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | não definido |

    Força a linguagem a ser usada. O arquivo da linguagem correspondente precisa estar em locale/*code*/LC\_MESSAGES/phpmyadmin.mo.

`$cfg['FilterLanguages']`[¶](#cfg_FilterLanguages "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Limite de lista de linguagens disponívels para aquelas correspodentes à expressão regular dada. Por exemplo, se você quer Tcheco ou Inglês, você deve configurar o filtro para `'^(cs|en)'`.

`$cfg['RecodingEngine']`[¶](#cfg_RecodingEngine "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'auto'` |

    Você pode selecionar aqui quais funções serão usadas para conversão de conjunto de caracteres. Os valos disponíveis são:

    - `'auto'` - automatically use available one (first is tested iconv, then mbstring)
    - `'iconv'` - use iconv or libiconv functions
    - `'mb'` - use [mbstring](glossary.md#term-mbstring) extension
    - `'none'` - disable encoding conversion

    Ativar a conversão de conjunto de caracteres ativa um menu pull-down nas páginas Importar e Exportar, para escolher o conjunto de caracteres quando exportar um arquivo. O valor padrão neste menu vem de [`$cfg['Export']['charset']`](#cfg_Export_charset) e [`$cfg['Import']['charset']`](#cfg_Import_charset).

    Alterado na versão 6.0.0: Support for the Recode extension has been removed. The `'recode'` value is ignored and the
    default value (`'auto'`) is used instead.

`$cfg['IconvExtraParams']`[¶](#cfg_IconvExtraParams "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `` `'//TRANSLIT' `` |

    Especifica alguns parâmetros para o iconv, usados na conversão de caracteres. Veja a documentação do iconv <https://www.gnu.org/savannah-checkouts/gnu/libiconv/documentation/libiconv-1.15/iconv\_open.3.html> para mais detalhes. `//TRANSLIT` é usado por padrão para que os caracteres inválidos sejam transliterados.

`$cfg['AvailableCharsets']`[¶](#cfg_AvailableCharsets "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(…) |

    Available character sets for MySQL conversion. You can add your own
    (any of supported by mbstring/iconv) or remove these which you don’t
    use. Character sets will be shown in same order as here listed, so if
    you frequently use some of these move them to the top.

## Configurações de servidor web[¶](#web-server-settings "Link permanente para este título")

`$cfg['OBGzip']`[¶](#cfg_OBGzip "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string/boolean |
    | Valor padrão: | `'auto'` |

    Define se usa buffer de saída GZip para aumentar velocidade em transferências [HTTP](glossary.md#term-http). Defina para true/false para ativar/desativar. Quando definido como ‘auto’ (string), o phpMyAdmin tenta ativar o buffer de saída e irá automaticamente desativar se seu navegador tiver algum problema com buffering. O IE6 com um certo patch é conhecido por causar corrompimento de dados quando o buffering está ativado.

`$cfg['TrustedProxies']`[¶](#cfg_TrustedProxies "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array() |

    Lista os proxies e cabeçalhos HTTP que são confiáveis para [`$cfg['Servers'][$i]['AllowDeny']['order']`](#cfg_Servers_AllowDeny_order). Esta lista é vazia por padrão, então você precisa preencher com alguns servidores proxy confiáveis que você queira usar para regular endereços IP por trás de proxy.

    O exemplo a seguir especifica que o phpMyAdmin deveria confiar num cabeçalho HTTP\_X\_FORWARDED\_FOR (`X-Forwarded-For`) vindo do proxy 1.2.3.4:

    ```
    $cfg['TrustedProxies'] = ['1.2.3.4' => 'HTTP_X_FORWARDED_FOR'];
    ```

    A diretiva [`$cfg['Servers'][$i]['AllowDeny']['rules']`](#cfg_Servers_AllowDeny_rules) usa o endereço IP do cliente como sempre.

`$cfg['GD2Available']`[¶](#cfg_GD2Available "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'auto'` |

    Especifica se GD >= 2 está disponível. Se sim, ele pode ser usado para transformações MIME. Os valores disponíveis são:

    - auto - automaticamente detectado
    - yes - funções GD 2 podem ser usadas
    - no - funções GD 2 não podem ser usadas

`$cfg['CheckConfigurationPermissions']`[¶](#cfg_CheckConfigurationPermissions "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Nós normalmente verificamos as permissões no arquivo de configurações para garantir que ele não é globalmente editável. No entanto, o phpMyAdmin poderia ser instalado num sistema de arquivos NTFS montado num servidor não-Windows, nesse caso as permissões parecem erradas mas na realidade elas não podem ser detectadas. Neste caso um sysadmin iria definir este parâmetro como `false`.

`$cfg['LinkLengthLimit']`[¶](#cfg_LinkLengthLimit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 1000 |

    Limite para o comprimento dos links em [URL](glossary.md#term-url). Quando o comprimento ficar acima do limite, ele será substituído pelo formulário com botão. Isso é exigido já que alguns servidores web [IIS](glossary.md#term-iis) tem problemas com [URL](glossary.md#term-url) s longas.

`$cfg['CSPAllow']`[¶](#cfg_CSPAllow "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Linhas adicionais para incluir nos scripts permitidos e fontes de imagem na Política de Segurança de Conteúdo.

    This can be useful when you want to include some external JavaScript files
    in `config.footer.inc.php` or `config.header.inc.php`, which
    would be normally not allowed by [Content Security Policy](glossary.md#term-content-security-policy).

    Para permitir alguns sites, apenas liste-os dentro da string:

    ```
    $cfg['CSPAllow'] = 'example.com example.net';
    ```

    Novo na versão 4.0.4.

`$cfg['DisableMultiTableMaintenance']`[¶](#cfg_DisableMultiTableMaintenance "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Na página de Estrutura do banco de dados, é possível marcar algumas tabelas e então escolhar uma operação como otimizar para muitas tabelas. Isso pode atrasar um servidor, portanto, definir isso como `true` previne esse tipo de operação múltipla de manutenção.

## Configurações de tema[¶](#theme-settings "Link permanente para este título")

> Por favor, modifique diretamente o `themes/themename/scss/_variables.scss`, embora suas alterações vão ser substituídas na próxima atualização.

## Customização de design[¶](#design-customization "Link permanente para este título")

`$cfg['NavigationTreePointerEnable']`[¶](#cfg_NavigationTreePointerEnable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Quando configurado como verdadeiro, passar o mouse sobre um item no painel de Navegação faz com que aquele item seja marcado (o fundo é destacado).

`$cfg['BrowsePointerEnable']`[¶](#cfg_BrowsePointerEnable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Quando configurado como verdadeiro, passar sobre uma linha na página de Navegação faz com que aquela linha seja marcada (o fundo é destacado).

`$cfg['BrowseMarkerEnable']`[¶](#cfg_BrowseMarkerEnable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Quando configurado como verdadeiro, uma linha de dados é marcada (o fundo é destacado) quando a linha é selecionada com a caixa de seleção.

`$cfg['LimitChars']`[¶](#cfg_LimitChars "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 50 |

    Número máximo de caracteres mostrado em qualquer campo não-numério na visualização de naveador. Pode ser desligado pelo botão de ligar/desligar na página do navegador.

`$cfg['RowActionLinks']`[¶](#cfg_RowActionLinks "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'esquerda'` |

    Define o lugar onde os links de linhas de tabela (Editar, Copiar, Deletar) devem ser colocados quando os conteúdos da tabela são mostrados (você pode mostrá-los no lado esquerdo, direito, ambos ou em lugar nenhum).

`$cfg['RowActionLinksWithoutUnique']`[¶](#cfg_RowActionLinksWithoutUnique "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se deve mostrar os links de linha (Editar, Copiar, Excluir) e as caixas de seleção para operações em múltiplas linhas mesmo quando a seleção não possui uma [unique key](glossary.md#term-unique-key). O uso de ações de linha na ausência de uma chave única pode resultar em diferentes/mais linhas sendo afetadas, pois não há nenhuma forma garantida de selecionar a(s) linha(s) exata(s).

`$cfg['RememberSorting']`[¶](#cfg_RememberSorting "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Se ativado, lembra a ordenação de cada tabela quando navegar por elas.

`$cfg['TablePrimaryKeyOrder']`[¶](#cfg_TablePrimaryKeyOrder "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'NENHUM'` |

    Isso define a ordem de classificação padrão para as tabelas que tenham uma [primary key](glossary.md#term-primary-key) quando não há ordem de classificação definida externamente. Valores aceitáveis: [‘NONE’, ‘ASC’, ‘DESC’]

`$cfg['ShowBrowseComments']`[¶](#cfg_ShowBrowseComments "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

`$cfg['ShowPropertyComments']`[¶](#cfg_ShowPropertyComments "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Definindo a variável correspondente para `true` você pode ativar a exibição de comentários de coluna na págima Procurar e Estrutura. Em modo navegador, os comentários são exibidos dentro do cabeçalho. Em modo propriedade, os comentários são exibidos usando uma linha tracejada formatada por CSS abaixo do nome da coluna. O comentário é exibido como uma tool-tip para aquela coluna.

`$cfg['FirstDayOfCalendar']`[¶](#cfg_FirstDayOfCalendar "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 0 |

    This will define the first day of week in the calendar. The number
    can be set from 0 to 6, which represents the seven days of the week,
    Sunday to Saturday respectively. This value can also be configured by the user
    in Settings -> Features -> General -> First day of calendar field.

## Campos de texto[¶](#text-fields "Link permanente para este título")

`$cfg['CharEditing']`[¶](#cfg_CharEditing "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'entrada'` |

    Define qual o tipo de controles de edição devem ser usados para colunas CHAR e VARCHAR. Aplica-se à edição de dados e também aos valores-padrão na edição da estrutura. Os valores possíveis são:

    - input - isso permite limitar o tamanho do texto para o tamanho das colunas no MySQL, mas tem problemas com linhas novas em colunas
    - textarea - nenhum problema com novas linhas em colunas, mas também não oferece limitação de comprimento

`$cfg['MinSizeForInputField']`[¶](#cfg_MinSizeForInputField "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 4 |

    Define o tamanho mínimo para campos de entrada geradas por colunas CHAR e VARCHAR.

`$cfg['MaxSizeForInputField']`[¶](#cfg_MaxSizeForInputField "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 60 |

    Define o tamanho máximo para campos de entrada geradas por colunas CHAR e VARCHAR.

`$cfg['TextareaCols']`[¶](#cfg_TextareaCols "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 40 |

`$cfg['TextareaRows']`[¶](#cfg_TextareaRows "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 15 |

`$cfg['CharTextareaCols']`[¶](#cfg_CharTextareaCols "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 40 |

`$cfg['CharTextareaRows']`[¶](#cfg_CharTextareaRows "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 7 |

    Número de colunas e linhas para textareas. Esse valor será enfatizado 2x para textareas de queries [SQL](glossary.md#term-sql) e 1,25x para textareas [SQL](glossary.md#term-sql) dentro da janela de queries.

    Os valores char são usados para edição CHAR e VARCHAR (se configurados via [`$cfg['CharEditing']`](#cfg_CharEditing)).

    Alterado na versão 5.0.0: The default value was changed from 2 to 7.

`$cfg['LongtextDoubleTextarea']`[¶](#cfg_LongtextDoubleTextarea "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se as textareas para colunas LONGTEXT deverão ter tamanho dobrado.

`$cfg['TextareaAutoSelect']`[¶](#cfg_TextareaAutoSelect "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se o textarea inteiro da box de queries deverá ser selecionado quando clicado.

`$cfg['EnableAutocompleteForTablesAndColumns']`[¶](#cfg_EnableAutocompleteForTablesAndColumns "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se habilita o preenchimento automático para nomes de tabelas e colunas em qualquer caixa de consulta SQL.

## Configurações de caixa de query SQL[¶](#sql-query-box-settings "Link permanente para este título")

`$cfg['SQLQuery']['Edit']`[¶](#cfg_SQLQuery_Edit "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra um link de edição para mudar a query em qualquer caixa de query SQL.

`$cfg['SQLQuery']['Explain']`[¶](#cfg_SQLQuery_Explain "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra um link para explicar uma query SELECT em qualquer caixa de query SQL.

`$cfg['SQLQuery']['ShowAsPHP']`[¶](#cfg_SQLQuery_ShowAsPHP "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra um link para unir uma query em código PHP em qualquer caixa de query SQL.

`$cfg['SQLQuery']['Refresh']`[¶](#cfg_SQLQuery_Refresh "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Define se mostra um link para atualizar uma query em qualquer caixa de query SQL.

## Diretórios de importar/salvar/subir do servidor web[¶](#web-server-upload-save-import-directories "Link permanente para este título")

Se o PHP estiver rodando em modo de segurança, todos os diretórios devem ter como dono o mesmo usuário dono dos scripts phpMyAdmin.

Se o diretório onde o phpMyAdmin está instalado estiver sujeito a uma restrição `open_basedir`, você precisa criar um diretório temporário em algum diretório acessível ao interpretador PHP.

Por razões de segurança, todos os diretórios devem estar fora da árvore publicada pelo servidor web. Se você não puder evitar ter este diretório publicado pelo servidor web, limite o acesso a ele, seja pela configuração do servidor web (por exemplo, usando .htaccess ou arquivos web.config) ou colocando ao menos um arquivo `index.html` vazio lá, para que a listagem de diretórios não seja possível. No entanto, enquanto o diretório for acessível pelo servidor web, um invasor pode adivinhar nomes de arquivos para baixá-los.

`$cfg['UploadDir']`[¶](#cfg_UploadDir "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O nome do diretório onde os arquivos [SQL](glossary.md#term-sql) foram subidos por outros meios além do phpMyAdmin (por exemplo, FTP). Estes arquivos estão disponíveis sob uma caixa drop-down quando você clica no nome do banco de dados ou da tabela, então na aba Importar.

    Se você quiser um diretório diferente para cada usuário, %u será substituído pelo nome do usuário.

    Favor observar que os nomes dos arquivos devem ter sufixos “.sql” (ou “.sql.bz2” ou “.sql.gz” se o suporte para formatos comprimidos estiver ativado).

    Essa função é útil quando seu arquivo é grande demais para ser subido via [HTTP](glossary.md#term-http), ou quando o upload de arquivos estiver desativado no PHP.

    Aviso

    Por favor, consulte o topo deste capítulo ([Diretórios de importar/salvar/subir do servidor web](#web-dirs)) para obter instruções sobre como configurar este diretório e como tornar o seu uso seguro.

    Ver também

    Veja [1.16 Eu não consigo subir arquivos de exportação grandes (memória, HTTP ou problemas de timeout).](faq.md#faq1-16) para alternativas.

`$cfg['SaveDir']`[¶](#cfg_SaveDir "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    O nome do diretório do servidor web em que os arquivos exportados podem ser salvos.

    Se você quiser um diretório diferente para cada usuário, %u será substituído pelo nome do usuário.

    Favor notar que o diretório deve existir e tem que ser acessível para escrita para o usuário rodando o servidor web.

    Aviso

    Por favor, consulte o topo deste capítulo ([Diretórios de importar/salvar/subir do servidor web](#web-dirs)) para obter instruções sobre como configurar este diretório e como tornar o seu uso seguro.

`$cfg['TempDir']`[¶](#cfg_TempDir "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'./tmp/'` |

    O nome do diretório onde os arquivos temporários podem ser armazenados. É usado para várias finalidades, atualmente:

    - O cache de modelos que acelera o carregamento da página.
    - Importação de Shapefiles ESRI, veja [6.30 Importação: Como posso importar Shapefiles ESRI?](faq.md#faq6-30).
    - Para contornar limitações de `open_basedir` para arquivos carregados, veja [1.11 Eu recebo uma ‘restrição open\_basedir’ quando tento subir um arquivo a partir da aba de importação.](faq.md#faq1-11).

    Esse diretório deve ter as permissões estritas ao máximo possível para que o único usuário exigido para acessar esse diretório seja aquele que rodar o servidor web. Se você tiver privilégios raiz, simplesmente torne este usuário o dono deste diretório e torne-o acessível somente a ele:

    ```
    chown www-data:www-data tmp
    chmod 700 tmp
    ```

    Se você não puder mudar o dono do diretório, você pode conseguir uma instalação similar usando [ACL](glossary.md#term-acl):

    ```
    chmod 700 tmp
    setfacl -m "g:www-data:rwx" tmp
    setfacl -d -m "g:www-data:rwx" tmp
    ```

    Se nenhuma das opções acima funcionar para você, você ainda pode criar um diretório com **chmod 777**, mas isso pode impor um risco aos outros usuários no sistema lendo e escrevendo dados neste diretório.

    Aviso

    Por favor, consulte o topo deste capítulo ([Diretórios de importar/salvar/subir do servidor web](#web-dirs)) para obter instruções sobre como configurar este diretório e como tornar o seu uso seguro.

## Configurações de vários monitores[¶](#various-display-setting "Link permanente para este título")

`$cfg['RepeatCells']`[¶](#cfg_RepeatCells "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 100 |

    Repete os cabeçalhos a cada X células, ou 0 para desativar.

`$cfg['EditInWindow']`[¶](#cfg_EditInWindow "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Ver também

    [Feature request to add a pop-up window back](https://github.com/phpmyadmin/phpmyadmin/issues/11983)

    Obsoleto desde a versão 4.3.0: This setting was removed.

`$cfg['QueryWindowWidth']`[¶](#cfg_QueryWindowWidth "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 550 |

    Obsoleto desde a versão 4.3.0: This setting was removed.

`$cfg['QueryWindowHeight']`[¶](#cfg_QueryWindowHeight "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 310 |

    Obsoleto desde a versão 4.3.0: This setting was removed.

`$cfg['QueryHistoryDB']`[¶](#cfg_QueryHistoryDB "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

`$cfg['QueryWindowDefTab']`[¶](#cfg_QueryWindowDefTab "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'sql'` |

    Obsoleto desde a versão 4.3.0: This setting was removed.

`$cfg['QueryHistoryMax']`[¶](#cfg_QueryHistoryMax "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 25 |

    Se [`$cfg['QueryHistoryDB']`](#cfg_QueryHistoryDB) estiver definido como `true`, todas as queries são guardadas numa tabela, que tem que ser criada por você (veja [`$cfg['Servers'][$i]['history']`](#cfg_Servers_history)). Se definido como `false`, todas as suas queries serão adicionadas ao formulário, mas elas permanecerão salvas somente enquanto sua janela estiver aberta.

    Quando usar a janela de query baseada em JavaScript, ela sempre será atualizada quando você clicar numa nova tabela/bd para navegar e ela irá focar se você clicar em Edit SQL depois de usar uma query. Você pode suprimir a atualização da janela de query marcando na caixa :guilabel:Do not overwrite this query from outside the window` abaixo do textarea da query. Então você pode navegar tabelas/bds no fundo sem perder os conteúdos do textarea, então isso é especialmente útil quando estiver compondo uma query com tabelas que você primeiro precisa visualizar. O checkbox irá automaticamente ser marcado sempre que vocẽ mudar os conteúdos do textarea. Favor desmarcar o botão sempre que você definitivamente quiser que a janela de query seja atualiza embora você tenha feito alterações.

    Se [`$cfg['QueryHistoryDB']`](#cfg_QueryHistoryDB) estiver definido como `true`, você pode especificar a quantidade de itens de histórico guardada usando [`$cfg['QueryHistoryMax']`](#cfg_QueryHistoryMax).

`$cfg['AllowSharedBookmarks']`[¶](#cfg_AllowSharedBookmarks "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Novo na versão 6.0.0.

    Permitir que os usuários criem marcadores que estejam disponíveis para todos os outros usuários

`$cfg['BrowseMIME']`[¶](#cfg_BrowseMIME "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Ativa [Transformações](transformations.md#transformations).

`$cfg['MaxExactCount']`[¶](#cfg_MaxExactCount "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 50000 |

    Para tabelas InnoDB, determina quão grande as tabelas do phpMyAdmin devem ficar quando fizer uma contagem de linhas exata usando `SELECT COUNT`. Se a contagem de linhas aproximada que for retornada por `SHOW TABLE STATUS` for menor que este valor, `SELECT COUNT` será usado, caso contrário, o valor aproximado será usado.

    Alterado na versão 4.8.0: O valor padrão foi reduzido para 50000 por questões de desempenho.

    Alterado na versão 4.2.6: O valor padrão foi alterado para 500000.

    Ver também

    [3.11 O número de registros para as tabelas InnoDB não está correto.](faq.md#faq3-11)

`$cfg['MaxExactCountViews']`[¶](#cfg_MaxExactCountViews "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 0 |

    Para VIEWs, já que obter a contagem exata poderia causar um impacto no desempenho, esse valor é o máximo a ser mostrado, usando um `SELECT COUNT ... LIMIT`. Definir isso para 0 anula qualquer contagem de linhas.

`$cfg['NaturalOrder']`[¶](#cfg_NaturalOrder "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Ordena os nomes de bancos de dados e tabelas para a ordem natural (por exemplo, t1, t2 … t10). Atualmente implementada no painel de navegação e visualização do banco de dados, para a lista de tabelas.

`$cfg['InitialSlidersState']`[¶](#cfg_InitialSlidersState "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'fechado'` |

    Se definido como `'closed'`, os deslizadores visuais estão inicialmente num estado fechado. Um valor de `'open'` faz o contrário. Para desativar completamente todos os deslizadores visuais, use `'disabled'`.

`$cfg['UserprefsDisallow']`[¶](#cfg_UserprefsDisallow "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array() |

    Contains names of configuration options (keys in `$cfg` array) that
    users can’t set through user preferences. For possible values, refer
    to classes under `src/Config/Forms/User/`.

`$cfg['UserprefsDeveloperTab']`[¶](#cfg_UserprefsDeveloperTab "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Novo na versão 3.4.0.

    Ativa nas preferências de usuário uma aba contendo opções para desenvolvedores do phpMyAdmin.

## Títulos de páginas[¶](#page-titles "Link permanente para este título")

The page title displayed by your browser’s window or tab title bar can be customized. You can use [6.27 Quais strings de formatação eu posso usar?](faq.md#faq6-27).
The following four options allow customizing various parts of the phpMyAdmin interface. Note that the login page
title cannot be changed.

`$cfg['TitleTable']`[¶](#cfg_TitleTable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@HTTP_HOST@ / @VSERVER@ / @DATABASE@ / @TABLE@ | @PHPMYADMIN@'` |

`$cfg['TitleDatabase']`[¶](#cfg_TitleDatabase "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@HTTP_HOST@ / @VSERVER@ / @DATABASE@ | @PHPMYADMIN@'` |

`$cfg['TitleServer']`[¶](#cfg_TitleServer "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@HTTP_HOST@ / @VSERVER@ | @PHPMYADMIN@'` |

`$cfg['TitleDefault']`[¶](#cfg_TitleDefault "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'@HTTP_HOST@ | @PHPMYADMIN@'` |

## Configurações de gerente de temas[¶](#theme-manager-settings "Link permanente para este título")

`$cfg['ThemeManager']`[¶](#cfg_ThemeManager "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Ativa temas selecionáveis pelo usuário. Veja a referência [2.7 Usando e criando temas](faq.md#faqthemes).

`$cfg['ThemeDefault']`[¶](#cfg_ThemeDefault "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'pmahomme'` |

    The default theme (a subdirectory under `./public/themes/`).

`$cfg['ThemePerServer']`[¶](#cfg_ThemePerServer "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Define se ative um tema diferente para cada servidor.

`$cfg['FontSize']`[¶](#cfg_FontSize "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | ‘82%’ |

    Obsoleto desde a versão 5.0.0: Esta configuração foi removida pois o navegador é mais eficiente, assim não há necessidade dessa opção.

    Tamanho da fonte a ser usada, é aplicado no CSS.

## Queries padrão[¶](#default-queries "Link permanente para este título")

`$cfg['DefaultQueryTable']`[¶](#cfg_DefaultQueryTable "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'SELECT * FROM @TABLE@ WHERE 1'` |

`$cfg['DefaultQueryDatabase']`[¶](#cfg_DefaultQueryDatabase "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `''` |

    Queries padrão que serão mostradas nas caixas de query quando o usuário não especificar nenhuma. Você pode usar o padrão [6.27 Quais strings de formatação eu posso usar?](faq.md#faq6-27).

## Configurações MySQL[¶](#mysql-settings "Link permanente para este título")

`$cfg['DefaultFunctions']`[¶](#cfg_DefaultFunctions "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | `array('FUNC_CHAR' => '', 'FUNC_DATE' => '', 'FUNC_NUMBER' => '', 'FUNC_SPATIAL' => 'GeomFromText', 'FUNC_UUID' => 'UUID', 'first_timestamp' => 'NOW')` |

    Functions selected by default when inserting/changing row, Functions
    are defined for meta types as (`FUNC_NUMBER`, `FUNC_DATE`, `FUNC_CHAR`,
    `FUNC_SPATIAL`, `FUNC_UUID`) and for `first_timestamp`, which is used
    for first timestamp column in table.

    Examplo de configuração

    ```
    $cfg['DefaultFunctions'] = [
        'FUNC_CHAR' => '',
        'FUNC_DATE' => '',
        'FUNC_NUMBER' => '',
        'FUNC_SPATIAL' => 'ST_GeomFromText',
        'FUNC_UUID' => 'UUID',
        'first_timestamp' => 'UTC_TIMESTAMP',
    ];
    ```

## Opções padrão para Transformações[¶](#default-options-for-transformations "Link permanente para este título")

`$cfg['DefaultTransformations']`[¶](#cfg_DefaultTransformations "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | Um vetor com chaves-valores listados abaixo |

`$cfg['DefaultTransformations']['Substring']`[¶](#cfg_DefaultTransformations_Substring "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(0, ‘all’, ‘…’) |

`$cfg['DefaultTransformations']['Bool2Text']`[¶](#cfg_DefaultTransformations_Bool2Text "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘T’, ‘F’) |

`$cfg['DefaultTransformations']['External']`[¶](#cfg_DefaultTransformations_External "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(0, ‘-f /dev/null -i -wrap -q’, 1, 1) |

`$cfg['DefaultTransformations']['PreApPend']`[¶](#cfg_DefaultTransformations_PreApPend "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘’, ‘’) |

`$cfg['DefaultTransformations']['Hex']`[¶](#cfg_DefaultTransformations_Hex "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘2’) |

`$cfg['DefaultTransformations']['DateFormat']`[¶](#cfg_DefaultTransformations_DateFormat "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(0, ‘’, ‘local’) |

`$cfg['DefaultTransformations']['Inline']`[¶](#cfg_DefaultTransformations_Inline "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘100’, 100) |

`$cfg['DefaultTransformations']['TextImageLink']`[¶](#cfg_DefaultTransformations_TextImageLink "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘’, 100, 50) |

`$cfg['DefaultTransformations']['TextLink']`[¶](#cfg_DefaultTransformations_TextLink "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | array(‘’, ‘’, ‘’) |

## Configurações do console[¶](#console-settings "Link permanente para este título")

Nota

Essas configurações geralmente devem ser alteradas pelo usuário.

`$cfg['Console']['StartHistory']`[¶](#cfg_Console_StartHistory "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Mostrar histórico de consulta ao iniciar

`$cfg['Console']['AlwaysExpand']`[¶](#cfg_Console_AlwaysExpand "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Sempre expandir mensagens de consulta

`$cfg['Console']['CurrentQuery']`[¶](#cfg_Console_CurrentQuery "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | true |

    Mostrar consulta de navegação atual

`$cfg['Console']['EnterExecutes']`[¶](#cfg_Console_EnterExecutes "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Execute consultas com Enter e insira nova linha com Shift + Enter

`$cfg['Console']['DarkTheme']`[¶](#cfg_Console_DarkTheme "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Mudar para o tema escuro

`$cfg['Console']['Mode']`[¶](#cfg_Console_Mode "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | ‘info’ |

    Modo console

`$cfg['Console']['Height']`[¶](#cfg_Console_Height "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | integer |
    | Valor padrão: | 92 |

    Altura do console

## Desenvolvedor[¶](#developer "Link permanente para este título")

Aviso

Essas configurações podem causar um efeito gigante no desempenho ou na segurança.

`$cfg['environment']`[¶](#cfg_environment "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | string |
    | Valor padrão: | `'production'` |

    Definir o ambiente de trabalho.

    É necessário alterar apenas quando você estiver desenvolvendo o próprio phpMyAdmin. O modo `development` pode exibir informações de debug em certos lugares.

    Os valores possíveis são `'production'` ou `'development'`.

`$cfg['DBG']`[¶](#cfg_DBG "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | vetor |
    | Valor padrão: | [] |

`$cfg['DBG']['sql']`[¶](#cfg_DBG_sql "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Ativa a exibição dos logs de consultas e dos tempos de execução na aba Depuração SQL do console.

`$cfg['DBG']['sqllog']`[¶](#cfg_DBG_sqllog "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Ativa os logs de consultas e tempos de execução no syslog. Requer que [`$cfg['DBG']['sql']`](#cfg_DBG_sql) esteja habilitado.

`$cfg['DBG']['demo']`[¶](#cfg_DBG_demo "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Ative para permitir que o servidor se apresente como servidor de demonstração. Isso é usado pelo servidor de demonstração do phpMyAdmin <https://www.phpmyadmin.net/try/>.

    Atualmente muda o seguinte comportamento:

    - Há uma mensagem de boas-vindas na página principal.
    - There is footer information about demo server and used Git revision.
    - O script de configuração é habilitado mesmo com uma configuração existente.
    - A configuração não tenta se conectar ao servidor MySQL.

`$cfg['DBG']['simple2fa']`[¶](#cfg_DBG_simple2fa "Link permanente para esta definição")
:   |  |  |
    | --- | --- |
    | Tipo: | boolean |
    | Valor padrão: | false |

    Pode ser usado para testar a autenticação de dois fatores usando [Autenticação de dois fatores simples](two_factor.md#simple2fa).

## Exemplos[¶](#examples "Link permanente para este título")

Veja os seguintes trechos de configuração para configurações típicas do phpMyAdmin.

### Exemplo básico[¶](#basic-example "Link permanente para este título")

Exemplo de arquivo de configuração, que pode ser copiado para `config.inc.php` para obter um modelo de configuração básica; ele é distribuído com o phpMyAdmin como `config.sample.inc.php`. Observe que ele não contém todas as opções de configuração, apenas as mais utilizadas.

```
<?php
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

declare(strict_types=1);

/**
 * This is needed for cookie based authentication to encrypt the cookie.
 * Needs to be a 32-bytes long string of random bytes. See FAQ 2.10.
 */
$cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/**
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
// $cfg['Servers'][$i]['controluser'] = 'pma';
// $cfg['Servers'][$i]['controlpass'] = 'pmapass';

/* Storage database and tables */
// $cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
// $cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
// $cfg['Servers'][$i]['relation'] = 'pma__relation';
// $cfg['Servers'][$i]['table_info'] = 'pma__table_info';
// $cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
// $cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
// $cfg['Servers'][$i]['column_info'] = 'pma__column_info';
// $cfg['Servers'][$i]['history'] = 'pma__history';
// $cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
// $cfg['Servers'][$i]['tracking'] = 'pma__tracking';
// $cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
// $cfg['Servers'][$i]['recent'] = 'pma__recent';
// $cfg['Servers'][$i]['favorite'] = 'pma__favorite';
// $cfg['Servers'][$i]['users'] = 'pma__users';
// $cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
// $cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
// $cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
// $cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
// $cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
// $cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';

/**
 * End of servers configuration
 */

/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Whether to display icons or text or both icons and text in table row
 * action segment. Value can be either of 'icons', 'text' or 'both'.
 * default = 'both'
 */
//$cfg['RowActionType'] = 'icons';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 * default = false
 */
//$cfg['ShowAll'] = true;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * Possible values: 25, 50, 100, 250, 500
 * default = 25
 */
//$cfg['MaxRows'] = 50;

/**
 * Disallow editing of binary fields
 * valid values are:
 *   false    allow editing
 *   'blob'   allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'    disallow editing
 * default = 'blob'
 */
//$cfg['ProtectBinary'] = false;

/**
 * Default language to use, if not browser-defined or user-defined
 * (you find all languages in the locale folder)
 * uncomment the desired line:
 * default = 'en'
 */
//$cfg['DefaultLang'] = 'en';
//$cfg['DefaultLang'] = 'de';

/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 * default = 1
 */
//$cfg['PropertiesNumColumns'] = 2;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * This requires configuration storage enabled, see above.
 * default = false
 */
//$cfg['QueryHistoryDB'] = true;

/**
 * When using DB-based query history, how many entries should be kept?
 * default = 25
 */
//$cfg['QueryHistoryMax'] = 100;

/**
 * Whether or not to query the user before sending the error report to
 * the phpMyAdmin team when a JavaScript error occurs
 *
 * Available options
 * ('ask' | 'always' | 'never')
 * default = 'ask'
 */
//$cfg['SendErrorReports'] = 'always';

/**
 * 'URLQueryEncryption' defines whether phpMyAdmin will encrypt sensitive data from the URL query string.
 * 'URLQueryEncryptionSecretKey' is a 32 bytes long secret key used to encrypt/decrypt the URL query string.
 */
//$cfg['URLQueryEncryption'] = true;
//$cfg['URLQueryEncryptionSecretKey'] = '';

/**
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <https://docs.phpmyadmin.net/>.
 */
```

Aviso

Não use o usuário de controle ‘pma’ se ele ainda não existir e não use ‘pmapass’ como senha.

### Exemplo de autenticação de login[¶](#example-for-signon-authentication "Link permanente para este título")

Este exemplo usa `examples/signon.php` para demonstrar o uso do [Modo de autenticação tradicional](setup.md#auth-signon):

```
<?php
$i = 0;
$i++;
$cfg['Servers'][$i]['auth_type']     = 'signon';
$cfg['Servers'][$i]['SignonSession'] = 'SignonSession';
$cfg['Servers'][$i]['SignonURL']     = 'examples/signon.php';
```

### Exemplo de login automático limitado por endereço IP[¶](#example-for-ip-address-limited-autologin "Link permanente para este título")

Se você quiser se logar automaticamente ao acessar o phpMyAdmin localmente enquanto pede uma senha ao acessar remotamente, você pode fazê-lo usando o seguinte trecho:

```
if ($_SERVER['REMOTE_ADDR'] === '127.0.0.1') {
    $cfg['Servers'][$i]['auth_type'] = 'config';
    $cfg['Servers'][$i]['user'] = 'root';
    $cfg['Servers'][$i]['password'] = 'yourpassword';
} else {
    $cfg['Servers'][$i]['auth_type'] = 'cookie';
}
```

Nota

A filtragem baseada em endereços IP não é confiável pela internet, use-a apenas para endereços locais.

### Exemplo de uso de múltiplos servidores MySQL[¶](#example-for-using-multiple-mysql-servers "Link permanente para este título")

Você pode configurar um número qualquer de servidores usando [`$cfg['Servers']`](#cfg_Servers), o exemplo a seguir mostra dois deles:

```
<?php
// The string is a hexadecimal representation of a 32-bytes long string of random bytes.
$cfg['blowfish_secret'] = sodium_hex2bin('f16ce59f45714194371b48fe362072dc3b019da7861558cd4ad29e4d6fb13851');
$i = 0;

$i++; // server 1 :
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['verbose']   = 'no1';
$cfg['Servers'][$i]['host']      = 'localhost';
// more options for #1 ...

$i++; // server 2 :
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['verbose']   = 'no2';
$cfg['Servers'][$i]['host']      = 'remote.host.addr';//or ip:'10.9.8.1'
// this server must allow remote clients, e.g., host 10.9.8.%
// not only in mysql.host but also in the startup configuration
// more options for #2 ...

// end of server sections
$cfg['ServerDefault'] = 0; // to choose the server on startup

// further general options ...
```

### Google Cloud SQL com SSL[¶](#google-cloud-sql-with-ssl "Link permanente para este título")

To connect to Google Could SQL, you currently need to disable certificate
verification. This is caused by the certificate being issued for CN matching
your instance name, but you connect to an IP address and PHP tries to match
these two. With verification you end up with error message like:

```
Peer certificate CN=`api-project-851612429544:pmatest' did not match expected CN=`8.8.8.8'
```

Aviso

Com a verificação desabilitada seu tráfego é criptografado, mas você fica aberto a ataques man-in-the-middle.

Para conectar o phpMyAdmin ao Google Cloud SQL usando SSL, baixe os certificados do cliente e do servidor e informe o phpMyAdmin para usá-los:

```
// IP address of your instance
$cfg['Servers'][$i]['host'] = '8.8.8.8';
// Use SSL for connection
$cfg['Servers'][$i]['ssl'] = true;
// Client secret key
$cfg['Servers'][$i]['ssl_key'] = '../client-key.pem';
// Client certificate
$cfg['Servers'][$i]['ssl_cert'] = '../client-cert.pem';
// Server certification authority
$cfg['Servers'][$i]['ssl_ca'] = '../server-ca.pem';
// Disable SSL verification (see above note)
$cfg['Servers'][$i]['ssl_verify'] = false;
```

Ver também

[Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
[`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
[`$cfg['Servers'][$i]['ssl_key']`](#cfg_Servers_ssl_key),
[`$cfg['Servers'][$i]['ssl_cert']`](#cfg_Servers_ssl_cert),
[`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
[`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify),
<<https://bugs.php.net/bug.php?id=72048>>

### Amazon RDS Aurora with SSL[¶](#amazon-rds-aurora-with-ssl "Link permanente para este título")

To connect phpMyAdmin to an Amazon RDS Aurora MySQL database instance using SSL,
download the CA server certificate and tell phpMyAdmin to use it:

```
// Address of your instance
$cfg['Servers'][$i]['host'] = 'replace-me-cluster-name.cluster-replace-me-id.replace-me-region.rds.amazonaws.com';
// Use SSL for connection
$cfg['Servers'][$i]['ssl'] = true;
// You need to have the region CA file and the authority CA file (2019 edition CA for example) in the PEM bundle for it to work
$cfg['Servers'][$i]['ssl_ca'] = '../rds-combined-ca-bundle.pem';
// Enable SSL verification
$cfg['Servers'][$i]['ssl_verify'] = true;
```

Ver também

[Usando SSL para conexão ao servidor de banco de dados](setup.md#ssl),
[`$cfg['Servers'][$i]['ssl']`](#cfg_Servers_ssl),
[`$cfg['Servers'][$i]['ssl_ca']`](#cfg_Servers_ssl_ca),
[`$cfg['Servers'][$i]['ssl_verify']`](#cfg_Servers_ssl_verify)

Ver também

- Current RDS CA bundle for all regions <https://s3.amazonaws.com/rds-downloads/rds-combined-ca-bundle.pem>
- The RDS CA (2019 edition) for the region eu-west-3 without the parent CA <https://s3.amazonaws.com/rds-downloads/rds-ca-2019-eu-west-3.pem>
- [List of available Amazon RDS CA files](https://s3.amazonaws.com/rds-downloads/)
- [Amazon MySQL Aurora security guide](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/AuroraMySQL.Security.html)
- [Amazon certificates bundles per region](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/UsingWithRDS.SSL.html)

### reCaptcha using hCaptcha[¶](#recaptcha-using-hcaptcha "Link permanente para este título")

```
$cfg['CaptchaApi'] = 'https://www.hcaptcha.com/1/api.js';
$cfg['CaptchaCsp'] = 'https://hcaptcha.com https://*.hcaptcha.com';
$cfg['CaptchaRequestParam'] = 'h-captcha';
$cfg['CaptchaResponseParam'] = 'h-captcha-response';
$cfg['CaptchaSiteVerifyURL'] = 'https://hcaptcha.com/siteverify';
// This is the secret key from hCaptcha dashboard
$cfg['CaptchaLoginPrivateKey'] = '0xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
// This is the site key from hCaptcha dashboard
$cfg['CaptchaLoginPublicKey'] = 'xxx-xxx-xxx-xxx-xxxx';
```

Ver também

[hCaptcha website](https://www.hcaptcha.com/)

Ver também

[hCaptcha Developer Guide](https://docs.hcaptcha.com/)

### reCaptcha using Turnstile[¶](#recaptcha-using-turnstile "Link permanente para este título")

```
$cfg['CaptchaMethod'] = 'checkbox';
$cfg['CaptchaApi'] = 'https://challenges.cloudflare.com/turnstile/v0/api.js';
$cfg['CaptchaCsp'] = 'https://challenges.cloudflare.com https://static.cloudflareinsights.com';
$cfg['CaptchaRequestParam'] = 'cf-turnstile';
$cfg['CaptchaResponseParam'] = 'cf-turnstile-response';
$cfg['CaptchaLoginPublicKey'] = '0xxxxxxxxxxxxxxxxxxxxxx';
$cfg['CaptchaLoginPrivateKey'] = '0x4AAAAAAAA_xx_xxxxxxxxxxxxxxxxxxxx';
$cfg['CaptchaSiteVerifyURL'] = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
```

Ver também

[Cloudflare Dashboard](https://dash.cloudflare.com/)

Ver também

[Turnstile Developer Guide](https://developers.cloudflare.com/turnstile/get-started/)

### reCaptcha using Google reCaptcha v2/v3[¶](#recaptcha-using-google-recaptcha-v2-v3 "Link permanente para este título")

```
$cfg['CaptchaLoginPublicKey'] = 'xxxxxxxxxxxxxxxx-xxxxxxxxxxxx';
$cfg['CaptchaLoginPrivateKey'] = 'xxxxxxxxx-xxxxxxxxxxxxxx';
// Remove it if you dot not want the checkbox mode
$cfg['CaptchaMethod'] = 'checkbox';
```

Ver também

[Google reCaptcha Developer’s Guide](https://developers.google.com/recaptcha/intro)

Ver também

[Google reCaptcha types](https://developers.google.com/recaptcha/docs/versions)
