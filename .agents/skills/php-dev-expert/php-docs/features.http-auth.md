# Autenticação HTTP com PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/features.http-auth.php

---

# Autenticação HTTP com PHP

Pode-se utilizar a função
[header()](function.header.md) para enviar uma mensagem de `"Authentication Required"`
para o navegador cliente, causando o aparecimento de uma janela para a entrada de Nome de Usuário/Senha.
Uma vez que o usuário preencha um nome de usuário e uma senha,
a URL contendo o script PHP será chamada mais uma vez com as
[variáveis predefinidas](reserved.variables.md)
PHP\_AUTH\_USER, PHP\_AUTH\_PW,
e AUTH\_TYPE para determinar o nome de usuário, senha e
tipo da autenticação, respectivamente. Estas variáveis predefinidas são encontradas
no array [$\_SERVER](reserved.variables.server.md). *Somente*
o método de autenticação "Basic" é suportado. Consulte a função
[header()](function.header.md) para mais informações.

Um exemplo de fragmento de script que forçaria a autenticação
do cliente em uma página:

**Exemplo #1 Exemplo de Autenticação HTTP "Basic"**

```
<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="My Realm"');
    echo 'Texto enviado caso o usuário clique no botão Cancelar';
    exit;
} else {
    echo "<p>Olá, {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>Você digitou {$_SERVER['PHP_AUTH_PW']} como sua senha.</p>";
}
?>
```

> **Nota**:
> **Compatibilidade**  
>
> Por favor, seja cauteloso ao codificar as linhas do cabeçalho HTTP. Para garantir máxima
> compatibilidade com todos os clientes, a palavra-chave "Basic" deve ser escrita com um
> "B" maiúsculo, a string realm deve ser envolvida por aspas duplas (nunca por aspas simples),
> e apenas um espaço deve preceder o código *401* na linha do cabeçalho
> *HTTP/1.1 401*. Parâmetros de autenticação precisam ser separados por
> vírgula.

Ao invés de simplesmente exibir PHP\_AUTH\_USER
e PHP\_AUTH\_PW, como no exemplo acima,
talvez queira verificar a validade do nome de usuário e senha.
Talvez enviando uma consulta a um banco de dados, ou procurando
o usuário em um arquivo dbm.

> **Nota**:
> **Configuração do Apache**  
>
> O PHP usa uma diretiva chamada `AuthType`
> para determinar se a autenticação externa está em efeito.

Perceba, entretanto, que a diretiva citada acima não previne que alguém que
controle uma URL não autenticada roube senhas de
URLs autenticadas no mesmo servidor.

> **Nota**:
> **Comportamento do navegador**  
>
> A autenticação básica HTTP é realmente básica e não foi projetada para suportar
> logouts. Como o HTTP é um protocolo sem estado, a maioria dos navegadores armazena em cache as
> credenciais fornecidas assim que um código de status `2xx` é detectado,
> e as envia em todas as requisições, até que o navegador seja fechado. Não há
> uma maneira definida para um servidor solicitar uma nova solicitação de credenciais.
> Ao longo dos anos, várias soluções alternativas para isso se espalharam como conselhos na internet,
> mas todas dependem de como diferentes navegadores optaram por lidar com casos extremos indefinidos
> (ou mesmo violações do padrão HTTP). É melhor evitar essas
> soluções alternativas e não usar a autenticação básica para nada sério.

> **Nota**:
> **Configuração do IIS**  
>
> Para que a autenticação HTTP funcione no servidor IIS com a versão CGI do
> PHP, a diretiva php.ini [cgi.rfc2616\_headers](ini.core.md#ini.cgi.rfc2616-headers)
> deve ser definida como `0` (o valor padrão) e a configuração do IIS
> em "`Directory Security`" (ou "Segurança do Diretório" / "Autenticação") deve ser editada.
> Clique em "`Edit`" (ou "Editar") e marque apenas "`Anonymous Access`" (ou "Acesso Anônimo"),
> deixando todos os outros campos desmarcados.

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
