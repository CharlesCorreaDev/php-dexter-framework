# Manipulação de Sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.session.php

---

# Manipulação de Sessão

# Introdução

O suporte a sessões no PHP consiste em uma maneira de preservar certos dados
atráves dos acessos subsequentes.

Um visitante acessando o seu web site ganha um identificador único,
o assim chamado id de sessão. Ele é salvo em um cookie do lado do
usuário ou propagado via URL.

O suporte à sessão permite armazenar dados entre as requisições no
array super global [$\_SESSION](reserved.variables.session.md). Quando um visitante acessar
seu site, o PHP vai conferir automaticamente (se [session.auto\_start](session.configuration.md#ini.session.auto-start)
estiver definido como 1) ou quando você pedir (explicitamente atráves de
[session\_start()](function.session-start.md)) se um id de sessão específico
foi enviado com a requisição. Se este for o caso, o ambiente
anteriormente salvo é recriado.

**Cuidado**

Se você ativar [session.auto\_start](session.configuration.md#ini.session.auto-start), então a única maneira de colocar objetos
em suas sessões é carregando a definição da classe usando
[auto\_prepend\_file](ini.core.md#ini.auto-prepend-file),
onde você pode carregar a definição da classe, caso contrário você terá que
usar [serialize()](function.serialize.md) no objeto,
e [unserialize()](function.unserialize.md) nele
depois.

[$\_SESSION](reserved.variables.session.md) (e todas as variávels registradas) são serializadas
internamente pelo PHP usando o manipulador de serialização especificado pela
configuração INI [session.serialize\_handler](session.configuration.md#ini.session.serialize-handler)
depois que a requisição terminar. Variáveis registradas que estejam indefinidas são
marcadas como não definidas. Nos acessos subsequentes, elas não são definidas
pelo módulo da sessão, a menos que o usuário as definam posteriormente.

**Aviso**

Porque as variáveis de sessão são serializadas, variáveis [resource](language.types.resource.md) não podem
ser armazenadas em sessão.

Manipuladores de serialização (`php`
e `php_binary`) herdam as limitações de
register\_globals. Portanto, índices numéricos ou strings contendo
caracteres especiais (`|`
e `!`) não podem ser usados. Se usados, resultará em
erros na finalização do script. `php_serialize`
não possui tais limitações.

> **Nota**:
>
> Por favor, note que ao trabalhar com sessões, um registro de uma sessão
> não é criado até que uma variável tenha sindo registrada pela adição de uma nova
> chave ao array super global [$\_SESSION](reserved.variables.session.md). Isto
> continua valendo mesmo se uma sessão tenha sido iniciada usando a função
> [session\_start()](function.session-start.md).

- [Instalação/Configuração](session.setup.md)
  - [Dependências](session.requirements.md)
  - [Instalação](session.installation.md)
  - [Configurações de Execução](session.configuration.md)
- [Constantes predefinidas](session.constants.md)
- [Examples](session.examples.md)
  - [Uso básico](session.examples.basic.md)
  - [Passando o ID de sessão](session.idpassing.md)
  - [Manipuladores de Sessão Personalizados](session.customhandler.md)
- [Progresso de Upload em Sessão](session.upload-progress.md)
- [Sessões e Segurança](session.security.md)
  - [Gerencimento básico de sessão](features.session.security.management.md)
  - [Protegendo as configurações INI relacionadas à sessão](session.security.ini.md)
- [Funções para Sessão](ref.session.md)
  - [session\_abort](function.session-abort.md) — Descarta as alterações no array da sessão e encerra a sessão
  - [session\_cache\_expire](function.session-cache-expire.md) — Obter e/ou definir a expiração do cache atual
  - [session\_cache\_limiter](function.session-cache-limiter.md) — Obtém e/ou define o limitador do cache atual
  - [session\_commit](function.session-commit.md) — Sinônimo de session\_write\_close
  - [session\_create\_id](function.session-create-id.md) — Cria novo ID de sessão
  - [session\_decode](function.session-decode.md) — Decodifica dados de sessão de uma sessão codificada em formato string
  - [session\_destroy](function.session-destroy.md) — Destrói todos os dados registrados em uma sessão
  - [session\_encode](function.session-encode.md) — Codifica os dados atuais da sessão como uma sessão codificada em formato string
  - [session\_gc](function.session-gc.md) — Executa a coleta de lixo de dados da sessão
  - [session\_get\_cookie\_params](function.session-get-cookie-params.md) — Obtém os parâmetros do cookie da sessão
  - [session\_id](function.session-id.md) — Obtém e/ou define o id de sessão atual
  - [session\_module\_name](function.session-module-name.md) — Obtém e/ou define o módulo da sessão atual
  - [session\_name](function.session-name.md) — Obtém e/ou define o nome da sessão atual
  - [session\_regenerate\_id](function.session-regenerate-id.md) — Atualiza o id da sessão atual com um novo id gerado
  - [session\_register\_shutdown](function.session-register-shutdown.md) — Função de finalização da sessão
  - [session\_reset](function.session-reset.md) — Reinicializa um array de sessão com os valores originais
  - [session\_save\_path](function.session-save-path.md) — Obtém e/ou define o caminho para armazenamento da sessão atual
  - [session\_set\_cookie\_params](function.session-set-cookie-params.md) — Define os parâmetros do cookie de sessão
  - [session\_set\_save\_handler](function.session-set-save-handler.md) — Define funções de armazenamento de sessão à nível de usuário
  - [session\_start](function.session-start.md) — Inicia uma nova sessão ou continua uma sessão existente
  - [session\_status](function.session-status.md) — Retorna o status atual da sessão
  - [session\_unset](function.session-unset.md) — Libera todas as variáveis de sessão
  - [session\_write\_close](function.session-write-close.md) — Guarda os dados de sessão e fecha a sessão
- [SessionHandler](class.sessionhandler.md) — A classe SessionHandler
  - [SessionHandler::close](sessionhandler.close.md) — Fecha a sessão
  - [SessionHandler::create\_sid](sessionhandler.create-sid.md) — Retorna um novo ID de sessão
  - [SessionHandler::destroy](sessionhandler.destroy.md) — Destrói uma sessão
  - [SessionHandler::gc](sessionhandler.gc.md) — Apaga sessões antigas
  - [SessionHandler::open](sessionhandler.open.md) — Inicia uma sessão
  - [SessionHandler::read](sessionhandler.read.md) — Lê os dados de sessão
  - [SessionHandler::write](sessionhandler.write.md) — Escreve os dados de sessão
- [SessionHandlerInterface](class.sessionhandlerinterface.md) — A classe SessionHandlerInterface
  - [SessionHandlerInterface::close](sessionhandlerinterface.close.md) — Fecha a sessão
  - [SessionHandlerInterface::destroy](sessionhandlerinterface.destroy.md) — Destrói uma sessão
  - [SessionHandlerInterface::gc](sessionhandlerinterface.gc.md) — Remove sessões antigas
  - [SessionHandlerInterface::open](sessionhandlerinterface.open.md) — Inicializa uma sessão
  - [SessionHandlerInterface::read](sessionhandlerinterface.read.md) — Lê os dados de sessão
  - [SessionHandlerInterface::write](sessionhandlerinterface.write.md) — Escreve os dados de sessão
- [SessionIdInterface](class.sessionidinterface.md) — The SessionIdInterface interface
  - [SessionIdInterface::create\_sid](sessionidinterface.create-sid.md) — Cria um ID de sessão.
- [SessionUpdateTimestampHandlerInterface](class.sessionupdatetimestamphandlerinterface.md) — The SessionUpdateTimestampHandlerInterface interface
  - [SessionUpdateTimestampHandlerInterface::updateTimestamp](sessionupdatetimestamphandlerinterface.updatetimestamp.md) — Atualiza o timestamp
  - [SessionUpdateTimestampHandlerInterface::validateId](sessionupdatetimestamphandlerinterface.validateid.md) — Valida o ID

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
