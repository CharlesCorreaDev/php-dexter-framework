# Protegendo as configurações INI relacionadas à sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/session.security.ini.php

---

## Protegendo as configurações INI relacionadas à sessão

Ao proteger as configurações INI relacionadas à sessão, a segurança das sessões também aumenta.
Algumas configurações INI importantes não possuem recomendações. O desenvolvedor
é o responsável em garantir a segurança das configurações de sessão.

- [session.cookie\_lifetime](session.configuration.md#ini.session.cookie-lifetime)=0

  `0` tem um sentido especial. Ele diz para o navegador não armazenar cookies no
  armazenamento permanente. Sendo assim, quando o navegador é encerrado, o cookie com o
  ID de sessão é deletado imediatamente. Se o desenvolvedor configurar um valor diferente de "0", pode
  permitir que outros usuários utilizem o ID de sessão. A maioria das aplicações devem
  utilizar `0` para isto.

  Se a funcionalidade de login automático é necessária,
  o desenvolvedor deve implementá-la por conta própria e de forma segura.
  Não utilize um ID de sessão de longa vida para isso.
  Mais informações podem ser encontradas acima na seção sobre este assunto.
- [session.use\_cookies](session.configuration.md#ini.session.use-cookies)=On

  [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies)=On

  Embora o cookie HTTP tenha alguns problemas,
  ele é o modo preferido para gerenciar o ID de sessão.
  Utilize apenas cookies para o gerenciamento do ID de sessão quando
  possível. A maioria das aplicações devem utilizar cookie para o ID de sessão.

  Se [session.use\_only\_cookies](session.configuration.md#ini.session.use-only-cookies)=Off,
  o módulo de sessão usará valores para o ID de sessão definidos por
  GET ou POST desde que o cookie de ID de sessão não tenha sido inicializado.
- [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)=On

  Contudo, habilitar
  [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
  é obrigatório para sessões seguras. Essa opção está desabilitada por padrão.

  Essa opção evita que o módulo de sessão utilize um ID de sessão que não tenha sido inicializado.
  Em outras palavras, o módulo de sessão aceita apenas ID de sessão válido
  e que tenha sido gerado pelo módulo de sessão.
  O módulo de sessão rejeita o ID caso ele tenha sido fornecido pelo usuário.

  Por causa das especificações dos cookies, atacantes podem configurar cookies
  de ID de sessão indeletáveis por causa de configurações locais ou
  por injeção de JavaScript.
  [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode) pode evitar que um ID de sessão
  inicializado por um atacante seja utilizado.

  > **Nota**:
  >
  > Atacantes podem inicializar um ID de sessão utilizando os próprios computadores e depois configurá-lo
  > como o da vítima. No entanto, eles precisariam manter o ID de sessão ativo.
  > Também seria necessário alguns passos adicionais para executar um ataque nesse cenário.
  > Portanto, a opção
  > [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
  > funciona como prevenção.
- [session.cookie\_httponly](session.configuration.md#ini.session.cookie-httponly)=On

  Proíbe o acesso ao cookie de sessão através do JavaScript. Essa configuração
  evita o roubo de cookies por injeção de JavaScript.

  É possível usar um ID de sessão como chave de proteção contra CSRF, mas isso não é recomendado.
  Por exemplo, o código HTML pode ser salvo e enviado para outros usuários.
  Os desenvolvedores não devem escrever o ID de sessão nas páginas, para evitar problemas de segurança.
  Quase todas as aplicações devem utilizar o atributo httponly para o cookie do ID de sessão.

  > **Nota**:
  >
  > O token de proteção contra CSRF deve ser renovado periodicamente, exatamente como o ID de sessão.
- [session.cookie\_secure](session.configuration.md#ini.session.cookie-secure)=On

  Permite o acesso ao cookie de ID de sessão apenas quando o protocolo é HTTPS. Se
  seu website utiliza apenas HTTPS, então essa opção deve ser habilitada.

  O uso de HSTS deve ser considerado em websites que utilizem apenas HTTPS.
- [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)="Lax" ou
  [session.cookie\_samesite](session.configuration.md#ini.session.cookie-samesite)="Strict"

  A partir do PHP 7.3 o atributo `"SameSite"` pode ser definido para o cookie de ID de sessão.
  Este atributo é uma forma de se mitigar ataques CSRF (Cross Site Request Forgery).

  A diferença entre Lax e Strict é a acessibilidade do cookie em
  requisições que se original de outro domínio registrável empregando o método HTTP GET.
  Cookies usando Lax serão acessíveis em uma requisição GET originada de
  outro domínio registrável, enquanto que cookies que usam Strict não serão.
- [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime)=[choose smallest possible]

  [session.gc\_maxlifetime](session.configuration.md#ini.session.gc-maxlifetime)
  é a configuração para remoção de ID de sessão obsoleta. Depender dessa configuração
  *não* é recomendado. O gerenciamento do tempo de vida da sessão deve ser feito utilizando timestamp e
  por contra própria.

  É melhor que a coleta de lixo (garbage collection) da sessão seja feita pela função [session\_gc()](function.session-gc.md).
  [session\_gc()](function.session-gc.md) é recomendada ser executada pelos gerenciadores de
  tarefas, como, por exemplo, cron em sistemas tipo Unix.

  Por padrão, a coleta de lixo (GC) é executada por probabilidade.
  Essa configuração *não* garante a remoção de
  sessões antigas.
  Embora o desenvolvedor não possa depender dessa configuração,
  defini-la com o menor valor possível é recomendado.
  Ajuste
  [session.gc\_probability](session.configuration.md#ini.session.gc-probability)
  e
  [session.gc\_divisor](session.configuration.md#ini.session.gc-divisor) para
  que as sessões obsoletas sejam deletadas na frequência apropriada.
  Se a funcionalidade de login automático é necessária, o desenvolvedor deve
  implementá-la por contra própria e de forma segura, veja acima para mais informação.
  Nunca utilize ID de sessão de longa vida para isso.

  > **Nota**:
  >
  > Alguns módulos de manipuladores de armazenamento de sessão não utilizam essa configuração para
  > a expiração baseada em probabilidade, como, por exemplo, memcached e memcache.
  > Visite a documentação do manipulador de armazenamento de sessão para mais detalhes.
- [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid)=Off

  O uso de gerenciamento transparente do ID de sessão não é proibido. Ele
  pode ser utilizado quando necessário. Contudo, desabilitar o gerenciamento transparente
  do ID de sessão melhora a segurança geral do ID de sessão, pois
  remove a possibilidade de injeção e vazamento do ID de sessão.

  > **Nota**:
  >
  > O ID de sessão pode ser exposto através de uma URL salva nos Favoritos do navegador, uma URL enviada por e-mail ou mesmo caso o código-fonte HTML seja salvo.
- [session.trans\_sid\_tags](session.configuration.md#ini.session.trans-sid-tags)=[tags limitadas]

  (PHP 7.1.0 >=) Desenvolvedores não devem reescrever tags HTML sem necessidade. A configuração padrão
  é suficiente para a maioria dos casos.
  Versões anteriores do PHP utilizam a configuração
  [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags) para tal.
- [session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts)=[hosts limitados]

  (PHP 7.1.0 >=) Essa configuração INI define uma lista de hosts que permitem a reescrita do recurso
  trans sid. Nunca adicione hosts que não sejam confiáveis.
  O módulo de sessão permite apenas o valor de `$_SERVER['HTTP_HOST']`
  quando essa configuração está vazia.
- [session.referer\_check](session.configuration.md#ini.session.referer-check)=[sua URL de origem]

  Quando
  [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid)
  estiver habilitada, o uso dessa opção é recomendado.
  Ela reduz o risco de injeção do ID de sessão. Se seu site é
  `http://example.com/`,
  defina essa opção como `http://example.com/`.
  Note que quando HTTPS é utilizado, o navegador não enviará o cabeçalho relacionado ao "referer".
  O navegador também pode não enviar o "referer" dependendo da configuração.
  Portanto, essa configuração não é uma medida de segurança confiável.
  O uso desta configuração é recomendado.
- [session.cache\_limiter](session.configuration.md#ini.session.cache-limiter)=nocache

  Certifique-se de que o conteúdo HTTP não é armazenado em cache para sessões autenticadas.
  Permita o armazenamento em cache apenas quando o conteúdo não é privado.
  Caso contrário, o conteúdo pode ser exposto.
  `"private"` pode ser usado se o conteúdo HTTP não
  incluir dados sensíveis/confidenciais.
  Note que `"private"` pode fazer com que dados privados
  sejam armazenados em cache em clientes compartilhados.
  `"public"` pode ser usado somente quando o conteúdo HTTP não
  contém dados privados e ou confidenciais.
- [session.hash\_function](session.configuration.md#ini.session.hash-function)="sha256"

  (PHP 7.1.0 <) Funções de hash mais fortes também geram um ID de sessão mais
  forte. Embora a colisão de hash é pouco provável até mesmo com MD5, desenvolvedores
  devem usar SHA-2 ou funções de hash ainda mais fortes para essa tarefa. Os desenvolvedores podem
  usar um hash mais forte como sha384 ou sha512. Certifique-se de informar um valor suficientemente
  longo em [entropy](session.configuration.md#ini.session.entropy-length) para
  a função de hash usada.
- [session.save\_path](session.configuration.md#ini.session.save-path)=[diretório não público]

  Se for definido para um diretório público, como
  /tmp (o padrão), outros usuários no
  servidor podem ser capazes de sequestrar seções obtendo a lista de
  arquivos nesse diretório.

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
