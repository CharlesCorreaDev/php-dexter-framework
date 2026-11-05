# Swoole

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.swoole.php

---

# Swoole

# Introdução

Swoole é um mecanismo de comunicação de rede paralelo baseado em eventos assíncronos e corrotinas,
escrito em C++, fornecendo corrotinas e suporte de programação de rede de alto desempenho para PHP.
Ele fornece vários módulos de servidor e cliente de rede para múltiplos protocolos de comunicação, facilitando a
implementação rápida de serviços TCP/UDP, Web de alto desempenho, serviços WebSocket, IoT, comunicação em tempo real, jogos,
microsserviços, etc., quebrando os limites do PHP em domínios web tradicionais.
Para começar, consulte a [» Documentação do Swoole](https://wiki.swoole.com/).

> **Nota**:
>
> Esta extensão não está
> disponível em plataformas Windows.

- [Instalação/Configuração](swoole.setup.md)
  - [Dependências](swoole.requirements.md)
  - [Instalação](swoole.installation.md)
  - [Configurações de Execução](swoole.configuration.md)
- [Constantes predefinidas](swoole.constants.md)
- [Funções Swoole](ref.swoole-funcs.md)
  - [swoole\_async\_dns\_lookup](function.swoole-async-dns-lookup.md) — Pesquisa de nome de host para IP assíncrona e não bloqueante
  - [swoole\_async\_read](function.swoole-async-read.md) — Lê o fluxo de arquivo de forma assíncrona
  - [swoole\_async\_readfile](function.swoole-async-readfile.md) — Lê um arquivo de forma assíncrona
  - [swoole\_async\_set](function.swoole-async-set.md) — Atualiza as opções de E/S assíncronas
  - [swoole\_async\_write](function.swoole-async-write.md) — Escreve dados em um fluxo de arquivo de forma assíncrona
  - [swoole\_async\_writefile](function.swoole-async-writefile.md) — Escreve dados em um arquivo de forma assíncrona
  - [swoole\_clear\_error](function.swoole-clear-error.md) — Limpa os erros no socket ou no último código de erro
  - [swoole\_client\_select](function.swoole-client-select.md) — Obtém a descrição do arquivo que está pronto para leitura/gravação ou erro
  - [swoole\_cpu\_num](function.swoole-cpu-num.md) — Obtém o número de CPUs
  - [swoole\_errno](function.swoole-errno.md) — Obtém o código de erro da última chamada de sistema
  - [swoole\_error\_log](function.swoole-error-log.md) — Retorna mensagens de erro para o log
  - [swoole\_event\_add](function.swoole-event-add.md) — Adiciona novas funções de retorno de chamada de um socket no EventLoop
  - [swoole\_event\_defer](function.swoole-event-defer.md) — Adiciona função de retorno de chamada para o próximo loop de eventos
  - [swoole\_event\_del](function.swoole-event-del.md) — Remove todas as funções de retorno de chamada de evento de um socket
  - [swoole\_event\_exit](function.swoole-event-exit.md) — Sai do eventloop, disponível apenas no lado do cliente
  - [swoole\_event\_set](function.swoole-event-set.md) — Atualiza as funções de retorno de chamada de evento de um socket
  - [swoole\_event\_wait](function.swoole-event-wait.md) — Inicia o loop de eventos
  - [swoole\_event\_write](function.swoole-event-write.md) — Escreve dados em um socket
  - [swoole\_get\_local\_ip](function.swoole-get-local-ip.md) — Obtém os endereços IP IPv4 de cada NIC na máquina
  - [swoole\_last\_error](function.swoole-last-error.md) — Obtém a mensagem de erro mais recente
  - [swoole\_load\_module](function.swoole-load-module.md) — Carrega uma extensão do Swoole
  - [swoole\_select](function.swoole-select.md) — Seleciona as descrições de arquivo que estão prontas para leitura/escrita ou erro no loop de eventos
  - [swoole\_set\_process\_name](function.swoole-set-process-name.md) — Define o nome do processo
  - [swoole\_strerror](function.swoole-strerror.md) — Converte o Errno em mensagens de erro
  - [swoole\_timer\_after](function.swoole-timer-after.md) — Aciona uma função de retorno de chamada única no futuro
  - [swoole\_timer\_exists](function.swoole-timer-exists.md) — Verifica se uma função de retorno de chamada de temporizador existe
  - [swoole\_timer\_tick](function.swoole-timer-tick.md) — Aciona uma função de retorno de chamada de temporizador por intervalo de tempo
  - [swoole\_version](function.swoole-version.md) — Obtém a versão do Swoole
- [Swoole\Async](class.swoole-async.md) — A classe Swoole\Async
  - [Swoole\Async::dnsLookup](swoole-async.dnslookup.md) — Pesquisa de host assíncrona e não bloqueante para IP.
  - [Swoole\Async::read](swoole-async.read.md) — Lê fluxo de arquivo de forma assíncrona.
  - [Swoole\Async::readFile](swoole-async.readfile.md) — Lê um arquivo de forma assíncrona.
  - [Swoole\Async::set](swoole-async.set.md) — Atualiza as opções de E/S assíncronas.
  - [Swoole\Async::write](swoole-async.write.md) — Escreve dados em um fluxo de arquivo de forma assíncrona.
  - [Swoole\Async::writeFile](swoole-async.writefile.md) — Escreve dados em um arquivo de forma assíncrona.
- [Swoole\Atomic](class.swoole-atomic.md) — A classe Swoole\Atomic
  - [Swoole\Atomic::add](swoole-atomic.add.md) — Adiciona um número ao valor do objeto atômico.
  - [Swoole\Atomic::cmpset](swoole-atomic.cmpset.md) — Compara e define o valor do objeto atômico.
  - [Swoole\Atomic::\_\_construct](swoole-atomic.construct.md) — Constrói um objeto atômico do Swoole
  - [Swoole\Atomic::get](swoole-atomic.get.md) — Obtém o valor atual do objeto atômico.
  - [Swoole\Atomic::set](swoole-atomic.set.md) — Define um novo valor para o objeto atômico.
  - [Swoole\Atomic::sub](swoole-atomic.sub.md) — Subtrai um número ao valor do objeto atômico.
- [Swoole\Buffer](class.swoole-buffer.md) — A classe Swoole\Buffer
  - [Swoole\Buffer::append](swoole-buffer.append.md) — Anexa a string ou dados binários ao final do buffer de memória e retorna o novo tamanho da memória alocada.
  - [Swoole\Buffer::clear](swoole-buffer.clear.md) — Limpa o buffer de memória.
  - [Swoole\Buffer::\_\_construct](swoole-buffer.construct.md) — Alocação de blocos de memória de tamanho fixo.
  - [Swoole\Buffer::\_\_destruct](swoole-buffer.destruct.md) — Destrói o buffer de memória do Swoole.
  - [Swoole\Buffer::expand](swoole-buffer.expand.md) — Expande o tamanho do buffer de memória.
  - [Swoole\Buffer::read](swoole-buffer.read.md) — Lê dados do buffer de memória com base no deslocamento e no comprimento.
  - [Swoole\Buffer::recycle](swoole-buffer.recycle.md) — Libera a memória para o sistema operacional que não está sendo usada pelo buffer de memória.
  - [Swoole\Buffer::substr](swoole-buffer.substr.md) — Lê dados do buffer de memória com base no deslocamento e no comprimento. Ou remove dados do buffer de memória.
  - [Swoole\Buffer::\_\_toString](swoole-buffer.tostring.md) — Obtém o valor da string do buffer de memória.
  - [Swoole\Buffer::write](swoole-buffer.write.md) — Escreve dados no buffer de memória. A memória alocada para o buffer não será alterada.
- [Swoole\Channel](class.swoole-channel.md) — A classe Swoole\Channel
  - [Swoole\Channel::\_\_construct](swoole-channel.construct.md) — Constrói um canal Swoole
  - [Swoole\Channel::\_\_destruct](swoole-channel.destruct.md) — Destrói um canal Swoole.
  - [Swoole\Channel::pop](swoole-channel.pop.md) — Lê e retira dados do canal Swoole.
  - [Swoole\Channel::push](swoole-channel.push.md) — Escreve e envia dados para o canal Swoole
  - [Swoole\Channel::stats](swoole-channel.stats.md) — Obtém estatísticas do canal Swoole.
- [Swoole\Client](class.swoole-client.md) — A classe Swoole\Client
  - [Swoole\Client::close](swoole-client.close.md) — Fecha a conexão estabelecida.
  - [Swoole\Client::connect](swoole-client.connect.md) — Conecta à porta TCP ou UDP remota
  - [Swoole\Client::\_\_construct](swoole-client.construct.md) — Criar um cliente TCP/UDP síncrono ou assíncrono do Swoole, com ou sem SSL.
  - [Swoole\Client::\_\_destruct](swoole-client.destruct.md) — Destrói o cliente Swoole.
  - [Swoole\Client::getpeername](swoole-client.getpeername.md) — Obtém o nome do socket remoto da conexão.
  - [Swoole\Client::getsockname](swoole-client.getsockname.md) — Obtém o nome do socket local da conexão.
  - [Swoole\Client::isConnected](swoole-client.isconnected.md) — Verifica se a conexão está estabelecida.
  - [Swoole\Client::on](swoole-client.on.md) — Adiciona funções de retorno de chamada acionadas por eventos.
  - [Swoole\Client::pause](swoole-client.pause.md) — Pausa a recepção de dados.
  - [Swoole\Client::pipe](swoole-client.pipe.md) — Redireciona os dados para outro descritor de arquivo.
  - [Swoole\Client::recv](swoole-client.recv.md) — Recebe dados do socket remoto.
  - [Swoole\Client::resume](swoole-client.resume.md) — Retoma a recepção de dados.
  - [Swoole\Client::send](swoole-client.send.md) — Envia dados para o socket TCP remoto.
  - [Swoole\Client::sendfile](swoole-client.sendfile.md) — Envia arquivo para o socket TCP remoto.
  - [Swoole\Client::sendto](swoole-client.sendto.md) — Envia dados para o endereço remoto UDP.
  - [Swoole\Client::set](swoole-client.set.md) — Define os parâmetros do cliente Swoole antes que a conexão seja estabelecida.
  - [Swoole\Client::sleep](swoole-client.sleep.md) — Remove o cliente TCP do loop de eventos do sistema.
  - [Swoole\Client::wakeup](swoole-client.wakeup.md) — Adiciona o cliente TCP de volta ao loop de eventos do sistema.
- [Swoole\Connection\Iterator](class.swoole-connection-iterator.md) — A classe Swoole\Connection\Iterator
  - [Swoole\Connection\Iterator::count](swoole-connection-iterator.count.md) — Conta conexões.
  - [Swoole\Connection\Iterator::current](swoole-connection-iterator.current.md) — Retorna a entrada de conexão atual.
  - [Swoole\Connection\Iterator::key](swoole-connection-iterator.key.md) — Retorna a chave da conexão atual.
  - [Swoole\Connection\Iterator::next](swoole-connection-iterator.next.md) — Move para a próxima conexão.
  - [Swoole\Connection\Iterator::offsetExists](swoole-connection-iterator.offsetexists.md) — Verifica se o deslocamento existe.
  - [Swoole\Connection\Iterator::offsetGet](swoole-connection-iterator.offsetget.md) — Deslocamento para recuperar.
  - [Swoole\Connection\Iterator::offsetSet](swoole-connection-iterator.offsetset.md) — tribui uma conexão ao deslocamento especificado.
  - [Swoole\Connection\Iterator::offsetUnset](swoole-connection-iterator.offsetunset.md) — Desfaz um deslocamento.
  - [Swoole\Connection\Iterator::rewind](swoole-connection-iterator.rewind.md) — Rebobina o iterador
  - [Swoole\Connection\Iterator::valid](swoole-connection-iterator.valid.md) — Verifica se a posição atual é válida.
- [Swoole\Coroutine](class.swoole-coroutine.md) — A classe Swoole\Coroutine
  - [Swoole\Coroutine::call\_user\_func](swoole-coroutine.call-user-func.md) — Chama um retorno de chamada fornecido pelo primeiro parâmetro
  - [Swoole\Coroutine::call\_user\_func\_array](swoole-coroutine.call-user-func-array.md) — Chama um retorno de chamada com um array de parâmetros
  - [Swoole\Coroutine::cli\_wait](swoole-coroutine.cli-wait.md) — Descrição
  - [Swoole\Coroutine::create](swoole-coroutine.create.md) — Descrição
  - [Swoole\Coroutine::getuid](swoole-coroutine.getuid.md) — Descrição
  - [Swoole\Coroutine::resume](swoole-coroutine.resume.md) — Descrição
  - [Swoole\Coroutine::suspend](swoole-coroutine.suspend.md) — Descrição
- [Swoole\Coroutine\Lock](class.swoole-coroutine-lock.md) — A classe Swoole\Coroutine\Lock
  - [Swoole\Coroutine\Lock::\_\_construct](swoole-coroutine-lock.construct.md) — Constrói um novo bloqueio de corrotina
  - [Swoole\Coroutine\Lock::lock](swoole-coroutine-lock.lock.md) — Adquire o bloqueio, bloqueando se necessário
  - [Swoole\Coroutine\Lock::trylock](swoole-coroutine-lock.trylock.md) — Tenta adquirir o bloqueio sem bloquear
  - [Swoole\Coroutine\Lock::unlock](swoole-coroutine-lock.unlock.md) — Libera o bloqueio
- [Swoole\Event](class.swoole-event.md) — A classe Swoole\Event
  - [Swoole\Event::add](swoole-event.add.md) — Adiciona um socket ao monitor de eventos subjacente
  - [Swoole\Event::cycle](swoole-event.cycle.md) — Define uma função a ser executada ao final de cada iteração do loop de eventos
  - [Swoole\Event::defer](swoole-event.defer.md) — Executa uma função no início do próximo ciclo de eventos
  - [Swoole\Event::del](swoole-event.del.md) — Remove um socket do monitor de eventos
  - [Swoole\Event::dispatch](swoole-event.dispatch.md) — Executa uma única iteração do loop de eventos
  - [Swoole\Event::isset](swoole-event.isset.md) — Verifica se um socket está sendo monitorado no loop de eventos
  - [Swoole\Event::set](swoole-event.set.md) — Modifica os callbacks e a máscara do listener de eventos
  - [Swoole\Event::wait](swoole-event.wait.md) — Inicia o loop de eventos
  - [Swoole\Event::write](swoole-event.write.md) — Escreve dados no socket de forma assíncrona
- [Swoole\Exception](class.swoole-exception.md) — A classe Swoole\Exception
- [Swoole\Http\Client](class.swoole-http-client.md) — A classe Swoole\Http\Client
  - [Swoole\Http\Client::addFile](swoole-http-client.addfile.md) — Adiciona um arquivo ao formulário de postagem.
  - [Swoole\Http\Client::close](swoole-http-client.close.md) — Fecha a conexão HTTP.
  - [Swoole\Http\Client::\_\_construct](swoole-http-client.construct.md) — Constrói o cliente HTTP assíncrono.
  - [Swoole\Http\Client::\_\_destruct](swoole-http-client.destruct.md) — Destrói o cliente HTTP.
  - [Swoole\Http\Client::download](swoole-http-client.download.md) — Baixa um arquivo do servidor remoto.
  - [Swoole\Http\Client::execute](swoole-http-client.execute.md) — Envia a solicitação HTTP após definir os parâmetros.
  - [Swoole\Http\Client::get](swoole-http-client.get.md) — Envia solicitação HTTP GET para o servidor remoto.
  - [Swoole\Http\Client::isConnected](swoole-http-client.isconnected.md) — Verifica se a conexão HTTP está conectada.
  - [Swoole\Http\Client::on](swoole-http-client.on.md) — Registra função de retorno de chamada pelo nome do evento.
  - [Swoole\Http\Client::post](swoole-http-client.post.md) — Enviar uma solicitação http POST para o servidor remoto.
  - [Swoole\Http\Client::push](swoole-http-client.push.md) — Envia dados para o cliente WebSocket.
  - [Swoole\Http\Client::set](swoole-http-client.set.md) — Atualiza os parâmetros do cliente HTTP.
  - [Swoole\Http\Client::setCookies](swoole-http-client.setcookies.md) — Define os cookies da requisição HTTP.
  - [Swoole\Http\Client::setData](swoole-http-client.setdata.md) — Define os dados do corpo da requisição HTTP.
  - [Swoole\Http\Client::setHeaders](swoole-http-client.setheaders.md) — Define os cabeçalhos da requisição HTTP.
  - [Swoole\Http\Client::setMethod](swoole-http-client.setmethod.md) — Define o método da requisição HTTP.
  - [Swoole\Http\Client::upgrade](swoole-http-client.upgrade.md) — Faz um upgrade para o protocolo websocket.
- [Swoole\Http\Request](class.swoole-http-request.md) — A classe Swoole\Http\Request
  - [Swoole\Http\Request::\_\_destruct](swoole-http-request.destruct.md) — Destrói a solicitação HTTP.
  - [Swoole\Http\Request::rawcontent](swoole-http-request.rawcontent.md) — Obtém o corpo HTTP POST bruto.
- [Swoole\Http\Response](class.swoole-http-response.md) — A classe Swoole\Http\Response
  - [Swoole\Http\Response::cookie](swoole-http-response.cookie.md) — Define os cookies da resposta HTTP.
  - [Swoole\Http\Response::\_\_destruct](swoole-http-response.destruct.md) — Destrói a resposta HTTP.
  - [Swoole\Http\Response::end](swoole-http-response.end.md) — Envia dados para a solicitação HTTP e finaliza a resposta.
  - [Swoole\Http\Response::gzip](swoole-http-response.gzip.md) — Habilita a compressão gzip do conteúdo da resposta.
  - [Swoole\Http\Response::header](swoole-http-response.header.md) — Define os cabeçalhos da resposta HTTP.
  - [Swoole\Http\Response::initHeader](swoole-http-response.initheader.md) — Inicializa o cabeçalho da resposta HTTP.
  - [Swoole\Http\Response::rawcookie](swoole-http-response.rawcookie.md) — Define cookies brutos na resposta HTTP.
  - [Swoole\Http\Response::sendfile](swoole-http-response.sendfile.md) — Envia um arquivo através da resposta HTTP.
  - [Swoole\Http\Response::status](swoole-http-response.status.md) — Define o código de status da resposta HTTP.
  - [Swoole\Http\Response::write](swoole-http-response.write.md) — Acrescenta conteúdo ao corpo da resposta HTTP.
- [Swoole\Http\Server](class.swoole-http-server.md) — A classe Swoole\Http\Server
  - [Swoole\Http\Server::on](swoole-http-server.on.md) — Vincula a função de retorno ao servidor HTTP pelo nome do evento
  - [Swoole\Http\Server::start](swoole-http-server.start.md) — Inicia o servidor HTTP Swoole
- [Swoole\Lock](class.swoole-lock.md) — A classe Swoole\Lock
  - [Swoole\Lock::\_\_construct](swoole-lock.construct.md) — Constrói uma trava de memória
  - [Swoole\Lock::\_\_destruct](swoole-lock.destruct.md) — Destrói um bloqueio de memória do Swoole.
  - [Swoole\Lock::lock](swoole-lock.lock.md) — Tenta adquirir o bloqueio. Ele vai bloquear se o bloqueio não estiver disponível.
  - [Swoole\Lock::lock\_read](swoole-lock.lock-read.md) — Bloqueia um bloqueio de leitura-escrita para leitura.
  - [Swoole\Lock::trylock](swoole-lock.trylock.md) — Tenta adquirir o bloqueio e retorna imediatamente mesmo que o bloqueio não esteja disponível.
  - [Swoole\Lock::trylock\_read](swoole-lock.trylock-read.md) — Tenta bloquear um bloqueio de leitura-escrita para leitura e retorna imediatamente mesmo que o bloqueio não esteja disponível.
  - [Swoole\Lock::unlock](swoole-lock.unlock.md) — Libera o bloqueio.
- [Swoole\Mmap](class.swoole-mmap.md) — A classe Swoole\Mmap
  - [Swoole\Mmap::open](swoole-mmap.open.md) — Mapeia um arquivo na memória e retorna o recurso de fluxo que pode ser usado pelas operações de fluxo do PHP.
- [Swoole\MySQL](class.swoole-mysql.md) — A classe Swoole\MySQL
  - [Swoole\MySQL::close](swoole-mysql.close.md) — Fecha a conexão assíncrona do MySQL.
  - [Swoole\MySQL::connect](swoole-mysql.connect.md) — Conecta-se ao servidor MySQL remoto.
  - [Swoole\MySQL::\_\_construct](swoole-mysql.construct.md) — Constrói um cliente assíncrono do MySQL.
  - [Swoole\MySQL::\_\_destruct](swoole-mysql.destruct.md) — Destrói o cliente assíncrono do MySQL.
  - [Swoole\MySQL::getBuffer](swoole-mysql.getbuffer.md) — Descrição
  - [Swoole\MySQL::on](swoole-mysql.on.md) — Registra uma função de retorno de chamada com base no nome do evento.
  - [Swoole\MySQL::query](swoole-mysql.query.md) — Executa a consulta SQL.
- [Swoole\MySQL\Exception](class.swoole-mysql-exception.md) — A classe Swoole\MySQL\Exception
- [Swoole\Process](class.swoole-process.md) — A classe Swoole\Process
  - [Swoole\Process::alarm](swoole-process.alarm.md) — Temporizador de alta precisão que dispara um sinal em intervalos fixos.
  - [Swoole\Process::close](swoole-process.close.md) — Fecha a conexão (pipe) para o processo filho.
  - [Swoole\Process::\_\_construct](swoole-process.construct.md) — Constrói um processo.
  - [Swoole\Process::daemon](swoole-process.daemon.md) — Transforma o processo em um processo daemon.
  - [Swoole\Process::\_\_destruct](swoole-process.destruct.md) — Destrói o processo.
  - [Swoole\Process::exec](swoole-process.exec.md) — Executa comandos do sistema.
  - [Swoole\Process::exit](swoole-process.exit.md) — Para os processos filhos.
  - [Swoole\Process::freeQueue](swoole-process.freequeue.md) — Destrói a fila de mensagens criada por swoole\_process::useQueue.
  - [Swoole\Process::kill](swoole-process.kill.md) — Envia sinal para o processo filho.
  - [Swoole\Process::name](swoole-process.name.md) — Define o nome do processo.
  - [Swoole\Process::pop](swoole-process.pop.md) — Lê e remove dados da fila de mensagens.
  - [Swoole\Process::push](swoole-process.push.md) — Escreve e insere dados na fila de mensagens.
  - [Swoole\Process::read](swoole-process.read.md) — Lê os dados enviados para o processo.
  - [Swoole\Process::signal](swoole-process.signal.md) — Envia sinal para os processos filhos.
  - [Swoole\Process::start](swoole-process.start.md) — Inicia o processo.
  - [Swoole\Process::statQueue](swoole-process.statqueue.md) — Obtém as estatísticas da fila de mensagens usada como método de comunicação entre processos.
  - [Swoole\Process::useQueue](swoole-process.usequeue.md) — Cria uma fila de mensagens como método de comunicação entre o processo pai e os processos filhos.
  - [Swoole\Process::wait](swoole-process.wait.md) — Aguarda os eventos dos processos filhos.
  - [Swoole\Process::write](swoole-process.write.md) — Escreve dados na conexão (pipe) e comunica com o processo pai ou processos filhos.
- [Swoole\Redis\Server](class.swoole-redis-server.md) — A classe Swoole\Redis\Server
  - [Swoole\Redis\Server::format](swoole-redis-server.format.md) — Descrição
  - [Swoole\Redis\Server::setHandler](swoole-redis-server.sethandler.md) — Descrição
  - [Swoole\Redis\Server::start](swoole-redis-server.start.md) — Descrição
- [Swoole\Runtime](class.swoole-runtime.md) — A classe Swoole\Runtime
  - [Swoole\Runtime::enableCoroutine](swoole-runtime.enable-coroutine.md) — Habilita corrotina para funções especificadas
  - [Swoole\Runtime::getHookFlags](swoole-runtime.get-hook-flags.md) — Obtém os sinalizadores de gancho atuais
  - [Swoole\Runtime::setHookFlags](swoole-runtime.set-hook-flags.md) — Define sinalizadores de gancho para corrotina
- [Swoole\Serialize](class.swoole-serialize.md) — A classe Swoole\Serialize
  - [Swoole\Serialize::pack](swoole-serialize.pack.md) — Serializa os dados.
  - [Swoole\Serialize::unpack](swoole-serialize.unpack.md) — Desserializa os dados.
- [Swoole\Server](class.swoole-server.md) — A classe Swoole\Server
  - [Swoole\Server::addlistener](swoole-server.addlistener.md) — Adiciona um novo ouvinte (listener) ao servidor.
  - [Swoole\Server::addProcess](swoole-server.addprocess.md) — Adiciona um processo definido pelo usuário (swoole\_process) ao servidor.
  - [Swoole\Server::after](swoole-server.after.md) — Aciona uma função de retorno de chamada após um período de tempo.
  - [Swoole\Server::bind](swoole-server.bind.md) — Vincula a conexão a um ID de usuário definido pelo usuário
  - [Swoole\Server::clearTimer](swoole-server.cleartimer.md) — Para e destrói um temporizador.
  - [Swoole\Server::close](swoole-server.close.md) — Fecha uma conexão com o cliente.
  - [Swoole\Server::confirm](swoole-server.confirm.md) — Verifica o status da conexão.
  - [Swoole\Server::connection\_info](swoole-server.connection-info.md) — Obtém informações da conexão pelo descritor de arquivo.
  - [Swoole\Server::connection\_list](swoole-server.connection-list.md) — Obtém todas as conexões estabelecidas.
  - [Swoole\Server::\_\_construct](swoole-server.construct.md) — Constrói um servidor Swoole.
  - [Swoole\Server::defer](swoole-server.defer.md) — Atrasa a execução da função de retorno de chamada até o final do EventLoop atual.
  - [Swoole\Server::exist](swoole-server.exist.md) — Verifica se a conexão existe.
  - [Swoole\Server::finish](swoole-server.finish.md) — Usado no processo de tarefa para enviar o resultado para o processo trabalhador quando a tarefa é concluída.
  - [Swoole\Server::getClientInfo](swoole-server.getclientinfo.md) — Obtém as informações da conexão pelo descritor de arquivo.
  - [Swoole\Server::getClientList](swoole-server.getclientlist.md) — Obtém todas as conexões estabelecidas.
  - [Swoole\Server::getLastError](swoole-server.getlasterror.md) — Obtém o código de erro do erro mais recente.
  - [Swoole\Server::heartbeat](swoole-server.heartbeat.md) — Verifica todas as conexões no servidor.
  - [Swoole\Server::listen](swoole-server.listen.md) — Ouve no IP, porta e tipo de socket fornecidos.
  - [Swoole\Server::on](swoole-server.on.md) — Registra uma função de retorno de chamada pelo nome do evento.
  - [Swoole\Server::pause](swoole-server.pause.md) — Para de receber dados da conexão.
  - [Swoole\Server::protect](swoole-server.protect.md) — Define a conexão para o modo protegido.
  - [Swoole\Server::reload](swoole-server.reload.md) — Reinicia todos os processos do trabalhador (worker).
  - [Swoole\Server::resume](swoole-server.resume.md) — Inicia a recepção de dados da conexão.
  - [Swoole\Server::send](swoole-server.send.md) — Envia dados para o cliente.
  - [Swoole\Server::sendfile](swoole-server.sendfile.md) — Envia arquivo para a conexão.
  - [Swoole\Server::sendMessage](swoole-server.sendmessage.md) — Envia mensagem para processos de trabalhador por ID.
  - [Swoole\Server::sendto](swoole-server.sendto.md) — Envia dados para o endereço UDP remoto.
  - [Swoole\Server::sendwait](swoole-server.sendwait.md) — Envia dados para o socket remoto de forma bloqueada.
  - [Swoole\Server::set](swoole-server.set.md) — Define as configurações em tempo de execução do servidor Swoole.
  - [Swoole\Server::shutdown](swoole-server.shutdown.md) — Desliga o processo mestre do servidor, esta função pode ser chamada nos processos de trabalho.
  - [Swoole\Server::start](swoole-server.start.md) — Inicia o servidor Swoole
  - [Swoole\Server::stats](swoole-server.stats.md) — Obtém as estatísticas do servidor Swoole.
  - [Swoole\Server::stop](swoole-server.stop.md) — Para o servidor Swoole.
  - [Swoole\Server::task](swoole-server.task.md) — Envia dados para os processos de trabalho de tarefa.
  - [Swoole\Server::taskwait](swoole-server.taskwait.md) — Envia dados para os processos de trabalho de tarefa de forma bloqueante.
  - [Swoole\Server::taskWaitMulti](swoole-server.taskwaitmulti.md) — Executa várias tarefas concorrentemente.
  - [Swoole\Server::tick](swoole-server.tick.md) — Repete uma função fornecida em cada intervalo de tempo especificado.
- [Swoole\Table](class.swoole-table.md) — A classe Swoole\Table
  - [Swoole\Table::column](swoole-table.column.md) — Define o tipo de dados e o tamanho das colunas.
  - [Swoole\Table::\_\_construct](swoole-table.construct.md) — Constrói uma tabela de memória Swoole com tamanho fixo
  - [Swoole\Table::count](swoole-table.count.md) — Conta as linhas na tabela, ou conta todos os elementos na tabela se $mode = 1
  - [Swoole\Table::create](swoole-table.create.md) — Cria a tabela de memória Swoole
  - [Swoole\Table::current](swoole-table.current.md) — Obtém a linha atual
  - [Swoole\Table::decr](swoole-table.decr.md) — Decrementa o valor na tabela Swoole pela chave e pela coluna
  - [Swoole\Table::del](swoole-table.del.md) — Exclui uma linha na tabela Swoole pela chave
  - [Swoole\Table::destroy](swoole-table.destroy.md) — Destrói a tabela Swoole
  - [Swoole\Table::exist](swoole-table.exist.md) — Verifica se uma linha informando a chave
  - [Swoole\Table::get](swoole-table.get.md) — Obtém o valor na tabela Swoole pela chave e pelo campo
  - [Swoole\Table::incr](swoole-table.incr.md) — Incrementa o valor pela chave e pela coluna
  - [Swoole\Table::key](swoole-table.key.md) — Obtém a chave da linha atual.
  - [Swoole\Table::next](swoole-table.next.md) — Avança o iterador para a próxima linha
  - [Swoole\Table::rewind](swoole-table.rewind.md) — Retrocede o iterador
  - [Swoole\Table::set](swoole-table.set.md) — Atualiza uma linha da tabela pela chave
  - [Swoole\Table::valid](swoole-table.valid.md) — Verifica se a linha atual é válida
- [Swoole\Timer](class.swoole-timer.md) — A classe Swoole\Timer
  - [Swoole\Timer::after](swoole-timer.after.md) — Aciona uma função de retorno de chamada após um período de tempo.
  - [Swoole\Timer::clear](swoole-timer.clear.md) — Exclui um temporizador pelo ID do temporizador.
  - [Swoole\Timer::clearAll](swoole-timer.clearall.md) — Clear all timers in the current process.
  - [Swoole\Timer::exists](swoole-timer.exists.md) — Verifica se um temporizador existe.
  - [Swoole\Timer::info](swoole-timer.info.md) — Get information about a timer.
  - [Swoole\Timer::list](swoole-timer.list.md) — Get an iterator over the timers of the current process
  - [Swoole\Timer::set](swoole-timer.set.md) — Set timer-related parameters
  - [Swoole\Timer::stats](swoole-timer.stats.md) — Get timer statistics.
  - [Swoole\Timer::tick](swoole-timer.tick.md) — Repete uma função fornecida em cada intervalo de tempo especificado.
- [Swoole\WebSocket\Frame](class.swoole-websocket-frame.md) — A classe Swoole\WebSocket\Frame
- [Swoole\WebSocket\Server](class.swoole-websocket-server.md) — A classe Swoole\WebSocket\Server
  - [Swoole\WebSocket\Server::exist](swoole-websocket-server.exist.md) — Verifica se o descritor de arquivo existe.
  - [Swoole\WebSocket\Server::on](swoole-websocket-server.on.md) — Registra função de retorno de chamada de evento
  - [Swoole\WebSocket\Server::pack](swoole-websocket-server.pack.md) — Obtém um pacote de dados binários para enviar em um único quadro.
  - [Swoole\WebSocket\Server::push](swoole-websocket-server.push.md) — Envia dados para o cliente remoto.
  - [Swoole\WebSocket\Server::unpack](swoole-websocket-server.unpack.md) — Desempacota os dados binários recebidos do cliente.

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
