# Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.event.php

---

# Event

# Introdução

Esta é uma extensão para agendar com eficiência eventos baseados em E/S, horário e sinal,
usando o melhor mecanismo de notificação de E/S disponível para a plataforma específica.
Esta é uma porta do libevent para a infraestrutura PHP.

> **Nota**:
>
> Consulte o suporte do Windows introduzido
> em `event-1.9.0`.

A versão
*1.0.0*
introduz uma nova API orientada a objetos (quebrando a compatibilidade com versões anteriores) e
suporte de libevent 2+ incluindo HTTP, DNS, OpenSSL e o observador de eventos.

> **Nota**:
>
> Observe que
> `event-1.0.0`
> e superiores não é compatível com versões anteriores.

- [Instalação/Configuração](event.setup.md)
  - [Dependências](event.requirements.md)
  - [Instalação](event.installation.md)
- [Examples](event.examples.md)
- [Opção de Event](event.flags.md)
- [Sobre persistência de eventos](event.persistence.md)
- [Funções de retorno de eventos](event.callbacks.md)
- [Construindo eventos de sinalização](event.constructing.signal.events.md)
- [Event](class.event.md) — A classe Event
  - [Event::add](event.add.md) — Torna o evento pendente
  - [Event::addSignal](event.addsignal.md) — Sinônimo de Event::add
  - [Event::addTimer](event.addtimer.md) — Sinônimo de Event::add
  - [Event::\_\_construct](event.construct.md) — Constrói o objeto Event
  - [Event::del](event.del.md) — Torna o evento não pendente
  - [Event::delSignal](event.delsignal.md) — Sinônimo de Event::del
  - [Event::delTimer](event.deltimer.md) — Sinônimo de Event::del
  - [Event::free](event.free.md) — Torna o evento não pendente e libera recursos alocados para este
    evento
  - [Event::getSupportedMethods](event.getsupportedmethods.md) — Retorna um array com nomes de métodos suportados nesta versão do Libevent
  - [Event::pending](event.pending.md) — Detecta se o evento está pendente ou agendado
  - [Event::set](event.set.md) — Reconfigura o evento
  - [Event::setPriority](event.setpriority.md) — Define a prioridade do evento
  - [Event::setTimer](event.settimer.md) — Reconfigura o evento do temporizador
  - [Event::signal](event.signal.md) — Constrói objeto de evento de sinal
  - [Event::timer](event.timer.md) — Constrói objeto de evento de temporizador
- [EventBase](class.eventbase.md) — A classe EventBase
  - [EventBase::\_\_construct](eventbase.construct.md) — Constrói objeto EventBase
  - [EventBase::dispatch](eventbase.dispatch.md) — Despacha eventos pendentes
  - [EventBase::exit](eventbase.exit.md) — Para de despachar eventos
  - [EventBase::free](eventbase.free.md) — Libera recursos alocados para esta base de eventos
  - [EventBase::getFeatures](eventbase.getfeatures.md) — Retorna a máscara de bits dos recursos suportados
  - [EventBase::getMethod](eventbase.getmethod.md) — Retorna o método de evento em uso
  - [EventBase::getTimeOfDayCached](eventbase.gettimeofdaycached.md) — Retorna o horário base do evento atua
  - [EventBase::gotExit](eventbase.gotexit.md) — Verifica se o laço de eventos foi informado para sair
  - [EventBase::gotStop](eventbase.gotstop.md) — Verifica se o laço de eventos foi informado para sair
  - [EventBase::loop](eventbase.loop.md) — Despacha eventos pendentes
  - [EventBase::priorityInit](eventbase.priorityinit.md) — Define o número de prioridades por base de eventos
  - [EventBase::reInit](eventbase.reinit.md) — Reinicializa a base de eventos (após um "fork")
  - [EventBase::stop](eventbase.stop.md) — Informa ao event\_base para parar de despachar eventos
- [EventBuffer](class.eventbuffer.md) — A classe EventBuffer
  - [EventBuffer::add](eventbuffer.add.md) — Acrescenta dados ao final de um buffer de eventos
  - [EventBuffer::addBuffer](eventbuffer.addbuffer.md) — Move todos os dados de um buffer fornecido para a instância atual do EventBuffer
  - [EventBuffer::appendFrom](eventbuffer.appendfrom.md) — Move o número especificado de bytes de um buffer de origem para o
    fim do buffer atual
  - [EventBuffer::\_\_construct](eventbuffer.construct.md) — Constrói objeto EventBuffer
  - [EventBuffer::copyout](eventbuffer.copyout.md) — Copia um número especificado de bytes da frente do buffer
  - [EventBuffer::drain](eventbuffer.drain.md) — Remove o número especificado de bytes da frente do buffer
    sem copiá-lo para lugar nenhum
  - [EventBuffer::enableLocking](eventbuffer.enablelocking.md) — Habilita bloqueio
  - [EventBuffer::expand](eventbuffer.expand.md) — Reserva espaço no buffer
  - [EventBuffer::freeze](eventbuffer.freeze.md) — Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas
  - [EventBuffer::lock](eventbuffer.lock.md) — Adquire uma trava no buffer
  - [EventBuffer::prepend](eventbuffer.prepend.md) — Adiciona dados à frente do buffer
  - [EventBuffer::prependBuffer](eventbuffer.prependbuffer.md) — Move todos os dados do buffer de origem para a frente do buffer atual
  - [EventBuffer::pullup](eventbuffer.pullup.md) — Lineariza os dados dentro do buffer
    e retorna seu conteúdo como uma string
  - [EventBuffer::read](eventbuffer.read.md) — Lê dados de um evbuffer e drena os bytes lidos
  - [EventBuffer::readFrom](eventbuffer.readfrom.md) — Lê dados de um arquivo no final do buffer
  - [EventBuffer::readLine](eventbuffer.readline.md) — Extrai uma linha da frente do buffer
  - [EventBuffer::search](eventbuffer.search.md) — Verifica o buffer em busca de uma ocorrência de uma string
  - [EventBuffer::searchEol](eventbuffer.searcheol.md) — Verifica o buffer para detectar a ocorrência de um fim de linha
  - [EventBuffer::substr](eventbuffer.substr.md) — Subtrai uma parte dos dados do buffer
  - [EventBuffer::unfreeze](eventbuffer.unfreeze.md) — Reativa chamadas que modificam um buffer de eventos
  - [EventBuffer::unlock](eventbuffer.unlock.md) — Libera a trava adquirida por EventBuffer::lock
  - [EventBuffer::write](eventbuffer.write.md) — Grava o conteúdo do buffer em um arquivo ou soquete
- [EventBufferEvent](class.eventbufferevent.md) — A classe EventBufferEvent
  - [EventBufferEvent::close](eventbufferevent.close.md) — Fecha o descritor de arquivo associado ao evento de buffer atual
  - [EventBufferEvent::connect](eventbufferevent.connect.md) — Conecta o descritor de arquivo do evento de buffer ao endereço fornecido ou
    soquete UNIX
  - [EventBufferEvent::connectHost](eventbufferevent.connecthost.md) — Conecta-se a um nome de host com resolução DNS opcionalmente assíncrona
  - [EventBufferEvent::\_\_construct](eventbufferevent.construct.md) — Constrói objeto EventBufferEvent
  - [EventBufferEvent::createPair](eventbufferevent.createpair.md) — Cria dois eventos de buffer conectados um ao outro
  - [EventBufferEvent::disable](eventbufferevent.disable.md) — Desabilita eventos de leitura, escrita ou ambos em um evento de buffer
  - [EventBufferEvent::enable](eventbufferevent.enable.md) — Habilita eventos de leitura, escrita ou ambos em um evento de buffer
  - [EventBufferEvent::free](eventbufferevent.free.md) — Libera um evento de buffer
  - [EventBufferEvent::getDnsErrorString](eventbufferevent.getdnserrorstring.md) — Retorna uma string descrevendo a última tentativa de pesquisa de DNS com falha
  - [EventBufferEvent::getEnabled](eventbufferevent.getenabled.md) — Retorna a máscara de bits dos eventos atualmente habilitados no evento do buffer
  - [EventBufferEvent::getInput](eventbufferevent.getinput.md) — Retorna o buffer de entrada subjacente associado ao evento de buffer
    atual
  - [EventBufferEvent::getOutput](eventbufferevent.getoutput.md) — Retorna o buffer de saída subjacente associado ao evento de buffer
    atual
  - [EventBufferEvent::read](eventbufferevent.read.md) — Lê dados do buffer
  - [EventBufferEvent::readBuffer](eventbufferevent.readbuffer.md) — Drena todo o conteúdo do buffer de entrada e os coloca em um EventBuffer
  - [EventBufferEvent::setCallbacks](eventbufferevent.setcallbacks.md) — Atribui funções de retorno de leitura, escrita e evento (status)
  - [EventBufferEvent::setPriority](eventbufferevent.setpriority.md) — Atribui uma prioridade a um evento de buffer
  - [EventBufferEvent::setTimeouts](eventbufferevent.settimeouts.md) — Define o tempo limite de leitura e gravação para um evento de buffer
  - [EventBufferEvent::setWatermark](eventbufferevent.setwatermark.md) — Ajusta marcas d'água de leitura e/ou gravação
  - [EventBufferEvent::sslError](eventbufferevent.sslerror.md) — Retorna o erro OpenSSL mais recente relatado no evento de buffer
  - [EventBufferEvent::sslFilter](eventbufferevent.sslfilter.md) — Cria um novo evento de buffer SSL para enviar seus dados por outro evento de buffer
  - [EventBufferEvent::sslGetCipherInfo](eventbufferevent.sslgetcipherinfo.md) — Retorna uma descrição textual da cifra
  - [EventBufferEvent::sslGetCipherName](eventbufferevent.sslgetciphername.md) — Retorna o nome da cifra atual da conexão SSL
  - [EventBufferEvent::sslGetCipherVersion](eventbufferevent.sslgetcipherversion.md) — Retorna a versão da cifra usada pela conexão SSL atual
  - [EventBufferEvent::sslGetProtocol](eventbufferevent.sslgetprotocol.md) — Retorna o nome do protocolo usado para a conexão SSL atual
  - [EventBufferEvent::sslRenegotiate](eventbufferevent.sslrenegotiate.md) — Solicita a um evento de buffer que inicie a renegociação SSL
  - [EventBufferEvent::sslSocket](eventbufferevent.sslsocket.md) — Cria um novo evento de buffer SSL para enviar seus dados por meio de um SSL em um soquete
  - [EventBufferEvent::write](eventbufferevent.write.md) — Adiciona dados ao buffer de saída de um evento de buffer
  - [EventBufferEvent::writeBuffer](eventbufferevent.writebuffer.md) — Adiciona o conteúdo de todo o buffer à saída de um evento de buffer
    buffer
- [Sobre funções de retorno de eventos de buffer](eventbufferevent.about.callbacks.md)
- [EventConfig](class.eventconfig.md) — A classe EventConfig
  - [EventConfig::avoidMethod](eventconfig.avoidmethod.md) — Diz ao libvent para evitar um método de evento específico
  - [EventConfig::\_\_construct](eventconfig.construct.md) — Constrói objeto EventConfig
  - [EventConfig::requireFeatures](eventconfig.requirefeatures.md) — Insere um recurso de método de evento obrigatório que o aplicativo exige
  - [EventConfig::setFlags](eventconfig.setflags.md) — Define um ou mais sinalizadores que configuram como o EventBase eventual será inicializado
  - [EventConfig::setMaxDispatchInterval](eventconfig.setmaxdispatchinterval.md) — Evita inversão de prioridade
- [EventDnsBase](class.eventdnsbase.md) — A classe EventDnsBase
  - [EventDnsBase::addNameserverIp](eventdnsbase.addnameserverip.md) — Adiciona um servidor de nomes à base DNS
  - [EventDnsBase::addSearch](eventdnsbase.addsearch.md) — Adiciona um domínio à lista de domínios de pesquisa
  - [EventDnsBase::clearSearch](eventdnsbase.clearsearch.md) — Remove todos os sufixos de pesquisa atuais
  - [EventDnsBase::\_\_construct](eventdnsbase.construct.md) — Constrói objeto EventDnsBase
  - [EventDnsBase::countNameservers](eventdnsbase.countnameservers.md) — Obtém o número de servidores de nomes configurados
  - [EventDnsBase::loadHosts](eventdnsbase.loadhosts.md) — Carrega um arquivo hosts (no mesmo formato que /etc/hosts) do arquivo hosts
  - [EventDnsBase::parseResolvConf](eventdnsbase.parseresolvconf.md) — Verifica o arquivo formatado em resolv.conf
  - [EventDnsBase::setOption](eventdnsbase.setoption.md) — Define o valor de uma opção de configuração
  - [EventDnsBase::setSearchNdots](eventdnsbase.setsearchndots.md) — Define o parâmetro 'ndots' para pesquisas
- [EventHttp](class.eventhttp.md) — A classe EventHttp
  - [EventHttp::accept](eventhttp.accept.md) — Faz com que um servidor HTTP aceite conexões no recurso ou fluxo de soquete especificado
  - [EventHttp::addServerAlias](eventhttp.addserveralias.md) — Adiciona um sinônimo de servidor ao objeto do servidor HTTP
  - [EventHttp::bind](eventhttp.bind.md) — Vincula um servidor HTTP no endereço e porta especificados
  - [EventHttp::\_\_construct](eventhttp.construct.md) — Constrói objeto EventHttp (o servidor HTTP)
  - [EventHttp::removeServerAlias](eventhttp.removeserveralias.md) — Remove sinônimo do servidor
  - [EventHttp::setAllowedMethods](eventhttp.setallowedmethods.md) — Define quais métodos HTTP são suportados em solicitações aceitas por este servidor e passadas para funções de retorno do usuário
  - [EventHttp::setCallback](eventhttp.setcallback.md) — Define uma função de retorno para o URI especificado
  - [EventHttp::setDefaultCallback](eventhttp.setdefaultcallback.md) — Define a função de retorno padrão para lidar com solicitações que não são capturadas por funções de retorno específicas
  - [EventHttp::setMaxBodySize](eventhttp.setmaxbodysize.md) — Define o tamanho máximo do corpo da solicitação
  - [EventHttp::setMaxHeadersSize](eventhttp.setmaxheaderssize.md) — Define o tamanho máximo do cabeçalho HTTP
  - [EventHttp::setTimeout](eventhttp.settimeout.md) — Define o tempo limite para uma solicitação HTTP
- [EventHttpConnection](class.eventhttpconnection.md) — A classe EventHttpConnection
  - [EventHttpConnection::\_\_construct](eventhttpconnection.construct.md) — Constrói objeto EventHttpConnection
  - [EventHttpConnection::getBase](eventhttpconnection.getbase.md) — Retorna a base de eventos associada à conexão
  - [EventHttpConnection::getPeer](eventhttpconnection.getpeer.md) — Obtém o endereço remoto e a porta associados à conexão
  - [EventHttpConnection::makeRequest](eventhttpconnection.makerequest.md) — Faz uma requisição HTTP pela conexão especificada
  - [EventHttpConnection::setCloseCallback](eventhttpconnection.setclosecallback.md) — Define função de retorno para o fechamento da conexão
  - [EventHttpConnection::setLocalAddress](eventhttpconnection.setlocaladdress.md) — Define o endereço IP a partir do qual as conexões HTTP são feitas
  - [EventHttpConnection::setLocalPort](eventhttpconnection.setlocalport.md) — Define a porta local a partir da qual as conexões são feitas
  - [EventHttpConnection::setMaxBodySize](eventhttpconnection.setmaxbodysize.md) — Define o tamanho máximo do corpo para a conexão
  - [EventHttpConnection::setMaxHeadersSize](eventhttpconnection.setmaxheaderssize.md) — Define o tamanho máximo do cabeçalho
  - [EventHttpConnection::setRetries](eventhttpconnection.setretries.md) — Define o limite de novas tentativas para a conexão
  - [EventHttpConnection::setTimeout](eventhttpconnection.settimeout.md) — Define o tempo limite para a conexão
- [EventHttpRequest](class.eventhttprequest.md) — A classe EventHttpRequest
  - [EventHttpRequest::addHeader](eventhttprequest.addheader.md) — Adiciona um cabeçalho HTTP aos cabeçalhos da requisição
  - [EventHttpRequest::cancel](eventhttprequest.cancel.md) — Cancela uma requisição HTTP pendente
  - [EventHttpRequest::clearHeaders](eventhttprequest.clearheaders.md) — Remove todos os cabeçalhos de saída da lista de cabeçalhos da requisição
  - [EventHttpRequest::closeConnection](eventhttprequest.closeconnection.md) — Fecha a conexão HTTP associada
  - [EventHttpRequest::\_\_construct](eventhttprequest.construct.md) — Constrói objeto EventHttpRequest
  - [EventHttpRequest::findHeader](eventhttprequest.findheader.md) — Encontra o valor pertencente a um cabeçalho
  - [EventHttpRequest::free](eventhttprequest.free.md) — Libera o objeto e remove os eventos associados
  - [EventHttpRequest::getBufferEvent](eventhttprequest.getbufferevent.md) — Retorna o objeto EventBufferEvent
  - [EventHttpRequest::getCommand](eventhttprequest.getcommand.md) — Retorna o comando de requisição (método)
  - [EventHttpRequest::getConnection](eventhttprequest.getconnection.md) — Retorna objeto EventHttpConnection
  - [EventHttpRequest::getHost](eventhttprequest.gethost.md) — Retorna o host da requisição
  - [EventHttpRequest::getInputBuffer](eventhttprequest.getinputbuffer.md) — Retorna o buffer de entrada
  - [EventHttpRequest::getInputHeaders](eventhttprequest.getinputheaders.md) — Retorna um array associativo dos cabeçalhos de entrada
  - [EventHttpRequest::getOutputBuffer](eventhttprequest.getoutputbuffer.md) — Retorna o buffer de saída da requisição
  - [EventHttpRequest::getOutputHeaders](eventhttprequest.getoutputheaders.md) — Retorna um array associativo dos cabeçalhos de saída
  - [EventHttpRequest::getResponseCode](eventhttprequest.getresponsecode.md) — Retorna o código de resposta
  - [EventHttpRequest::getUri](eventhttprequest.geturi.md) — Retorna o URI da requisição
  - [EventHttpRequest::removeHeader](eventhttprequest.removeheader.md) — Remove um cabeçalho HTTP dos cabeçalhos da requisição
  - [EventHttpRequest::sendError](eventhttprequest.senderror.md) — Envia uma mensagem de erro HTML para o cliente
  - [EventHttpRequest::sendReply](eventhttprequest.sendreply.md) — Envia uma resposta HTML ao cliente
  - [EventHttpRequest::sendReplyChunk](eventhttprequest.sendreplychunk.md) — Envia outro bloco de dados como parte de uma resposta em bloco em andamento
  - [EventHttpRequest::sendReplyEnd](eventhttprequest.sendreplyend.md) — Conclui uma resposta em blocos, liberando a requisição conforme apropriado
  - [EventHttpRequest::sendReplyStart](eventhttprequest.sendreplystart.md) — Inicia uma resposta em blocos
- [EventListener](class.eventlistener.md) — A classe EventListener
  - [EventListener::\_\_construct](eventlistener.construct.md) — Cria um novo ouvinte de conexão associado a uma base de eventos
  - [EventListener::disable](eventlistener.disable.md) — Desabilita um objeto ouvinte de conexão de evento
  - [EventListener::enable](eventlistener.enable.md) — Habilita um objeto ouvinte de conexão de evento
  - [EventListener::getBase](eventlistener.getbase.md) — Retorna a base de eventos associada ao ouvinte de eventos
  - [EventListener::getSocketName](eventlistener.getsocketname.md) — Recupera o endereço atual ao qual o
    soquete do ouvinte está vinculado
  - [EventListener::setCallback](eventlistener.setcallback.md) — Define função de retorno
  - [EventListener::setErrorCallback](eventlistener.seterrorcallback.md) — Define a função de retorno de erro do ouvinte de eventos
- [EventSslContext](class.eventsslcontext.md) — A classe EventSslContext
  - [EventSslContext::\_\_construct](eventsslcontext.construct.md) — Constrói um contexto OpenSSL para uso com classes Event
- [EventUtil](class.eventutil.md) — A classe EventUtil
  - [EventUtil::\_\_construct](eventutil.construct.md) — O construtor abstrato
  - [EventUtil::getLastSocketErrno](eventutil.getlastsocketerrno.md) — Retorna o número de erro de soquete mais recente
  - [EventUtil::getLastSocketError](eventutil.getlastsocketerror.md) — Retorna o erro de soquete mais recente
  - [EventUtil::getSocketFd](eventutil.getsocketfd.md) — Retorna o descritor numérico de arquivo de um soquete ou fluxo
  - [EventUtil::getSocketName](eventutil.getsocketname.md) — Recupera o endereço atual ao qual o
    soquete está vinculado
  - [EventUtil::setSocketOption](eventutil.setsocketoption.md) — Define opções de soquete
  - [EventUtil::sslRandPoll](eventutil.sslrandpoll.md) — Gera entropia por meio de RAND\_poll() do OpenSSL
- [EventException](class.eventexception.md) — A classe EventException

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
