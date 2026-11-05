# Executando o Apache - Servidor HTTP Apache Versão 2.4

> **Fonte / Source:** https://httpd.apache.org/docs/2.4/pt-br/invoking.html

---

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)

Servidor HTTP Apache Versão 2.4

![](./images/feather.png)

[![<-](./images/left.gif "<-")](index.md)

[Apache](https://www.apache.org/) > [Servidor HTTP](https://httpd.apache.org/) > [Documentação](https://httpd.apache.org/docs/) > [Versão 2.4](index.md)

# Executando o Apache

No Windows o Apache geralmente é executado como um serviço.
Para detalhes, consulte: [Executando o Apache como um Serviço](platform__windows.md#winsvc).

No Unix o programa `httpd`
é executado como um daemon em fica continuamente em
segundo plano para gerenciar as requisições. Este documento descreve como
executar o `httpd`.

- ![](./images/down.gif) [Como o Apache Inicia](#startup)
- ![](./images/down.gif) [Erros Durante a Inicialização](#errors)
- ![](./images/down.gif) [Começando na inicialização do sistema](#boot)
- ![](./images/down.gif) [Informações Adicionais](#info)

### Veja também

- [Interrompendo e Reiniciando](stopping.md)
- `httpd`
- `apachectl`

[![top](./images/up.gif)](#page-header)

## Como o Apache Inicia [¶](#startup "Link permanente")

Se a diretiva `Listen`
especificada no arquivo de configuração indicar o padrão 80 (ou qualquer outra
porta abaixo de 1024), será necessário ter privilégios de root
para iniciar o Apache, para que ele possa se vincular a esta porta privilegiada.
Depois que o servidor for iniciado e executar algumas atividades preliminares,
como abrir seus arquivos de registro, ele iniciará vários
processos filhos que realizam o trabalho de monitorar e
responder às requisições de clientes. O processo principal `httpd`
continua a ser executado como usuário root, mas os processos filhos
são executados como um usuário com menos privilégios. Isso é controlado pelo
[Módulo de Multiprocessamento](mpm.md) selecionado.

O método recomendado para chamar o executável `httpd`
é usar o script de controle `apachectl`. Este
script define certas variáveis ​​de ambiente necessárias para que
o `httpd` funcione corretamente em alguns sistemas operacionais
e, em seguida, chama o binário `httpd`.
O `apachectl` repassará quaisquer argumentos da linha de comando,
portanto, quaisquer opções do `httpd` também podem ser usadas com o
`apachectl`. Você também pode editar diretamente o
script `apachectl` alterando a variável `HTTPD`
no início para especificar o local correto do
binário `httpd` e quaisquer argumentos da linha de comando que você
deseje que estejam *sempre* presentes.

A primeira coisa que o `httpd` faz quando é
chamado é localizar e ler o [arquivo de configuração](configuring.md)
`httpd.conf`. A localização deste arquivo é definida no
momento da compilação, mas é possível especificar sua localização no momento da execução
usando a opção de linha de comando `-f` como em:

`/usr/local/apache2/bin/apachectl -f
/usr/local/apache2/conf/httpd.conf`

Se tudo correr bem durante a inicialização, o servidor se desconectará do
terminal e o prompt de comando retornará quase
imediatamente. Isso indica que o servidor está em funcionamento.
Você pode então usar seu navegador para se conectar ao servidor e visualizar
a página de teste no diretório `DocumentRoot`.

[![top](./images/up.gif)](#page-header)

## Erros Durante a Inicialização [¶](#errors "Link permanente")

Se o Apache sofrer um problema fatal durante a inicialização, ele
escreverá uma mensagem descrevendo o problema no console ou
no `ErrorLog` antes de
encerrar. Uma das mensagens de erro mais comuns é "`Não foi possível
vincular à porta ...`". Essa mensagem geralmente é causada por
um dos seguintes motivos:

- Tentativa de iniciar o servidor em uma porta privilegiada sem
  estar logado como usuário root; ou
- Tentativa de iniciar o servidor quando já existe outra instância
  do Apache ou de algum outro servidor web vinculada à mesma
  porta.

Para obter mais instruções sobre como solucionar problemas, consulte as
[Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) do Apache.

[![top](./images/up.gif)](#page-header)

## Começando na inicialização do sistema [¶](#boot "Link permanente")

Se você deseja que seu servidor continue em execução após uma reinicialização
do sistema, adicione uma chamada a `apachectl` aos seus
arquivos de inicialização do sistema (normalmente `rc.local` ou um arquivo em
um diretório `rc.N`). Isso iniciará o Apache como
root. Antes de fazer isso, certifique-se de que seu servidor esteja devidamente
configurado para restrições de segurança e acesso.

O script `apachectl` foi projetado para funcionar como um
script de inicialização SysV padrão; ele pode receber os argumentos
`start`, `restart` e `stop`
e traduzi-los nos sinais apropriados para
`httpd`. Portanto, a maioria das vezes é só adicionar
`apachectl` ao diretório de inicialização apropriado. Mas certifique-se
de verificar os requisitos exatos do seu sistema.

[![top](./images/up.gif)](#page-header)

## Informações Adicionais [¶](#info "Link permanente")

Informações adicionais sobre as opções de linha de comando de `httpd` e `apachectl`, bem como outros programas de suporte
incluídos com o servidor, estão disponíveis na página
[Servidor e Programas de Suporte](programs.md).
Há também documentação sobre todos os [módulos](mod.md) incluídos na distribuição do Apache
e as [diretivas](mod__directives.md) que eles
fornecem.

Línguas Disponíveis: [de](https://httpd.apache.org/docs/2.4/pt-br/de/invoking.html "Deutsch") |
[en](https://httpd.apache.org/docs/2.4/pt-br/en/invoking.html "English") |
[es](https://httpd.apache.org/docs/2.4/pt-br/es/invoking.html "Español") |
[fr](https://httpd.apache.org/docs/2.4/pt-br/fr/invoking.html "Français") |
[ja](https://httpd.apache.org/docs/2.4/pt-br/ja/invoking.html "Japanese") |
[ko](https://httpd.apache.org/docs/2.4/pt-br/ko/invoking.html "Korean") |
[pt-br](pt-br__invoking.md "Português (Brasil)") |
[tr](https://httpd.apache.org/docs/2.4/pt-br/tr/invoking.html "Türkçe")

Copyright 2026 The Apache Software Foundation.  
Licenciado sob a [Apache License, Version 2.0](https://www.apache.org/licenses/LICENSE-2.0).

[Módulos](mod.md) | [Diretivas](mod__quickreference.md) | [Perguntas Frequentes](https://cwiki.apache.org/confluence/display/httpd/FAQ) | [Glossário](glossary.md) | [Mapa do Site](sitemap.md) | [Relate um problema](https://bz.apache.org/bugzilla/enter_bug.cgi?product=Apache%20httpd-2)
