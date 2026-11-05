# Informações e Opções do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.info.php

---

# Informações e Opções do PHP

# Introdução

Estas funções permitem obter muitas informações sobre o PHP em si,
por exemplo, configurações em tempo de execução, extensões carregadas, versão e muito mais.
Também podem ser encontradas funções para definir opções para o PHP em execução.
A função que é provavelmente a mais conhecida do PHP - [phpinfo()](function.phpinfo.md) -
pode ser encontrada aqui.

- [Instalação/Configuração](info.setup.md)
  - [Configurações de Execução](info.configuration.md)
- [Constantes predefinidas](info.constants.md)
- [Funções para Opções/Info do PHP](ref.info.md)
  - [assert](function.assert.md) — Executa uma asserção
  - [assert\_options](function.assert-options.md) — Define/obtém as várias opções de asserção
  - [cli\_get\_process\_title](function.cli-get-process-title.md) — Retorna o título do processo atual
  - [cli\_set\_process\_title](function.cli-set-process-title.md) — Define o título do processo
  - [dl](function.dl.md) — Carrega uma extensão do PHP durante a execução
  - [extension\_loaded](function.extension-loaded.md) — Descobre se uma extensão está carregada
  - [gc\_collect\_cycles](function.gc-collect-cycles.md) — Força a coleta de quaisquer ciclos de lixo existentes.
  - [gc\_disable](function.gc-disable.md) — Desativa o coletor de referência circular
  - [gc\_enable](function.gc-enable.md) — Ativa o coletor de referência circular
  - [gc\_enabled](function.gc-enabled.md) — Retorna o status do coletor de referência circular
  - [gc\_mem\_caches](function.gc-mem-caches.md) — Recupera memória usada pelo gerenciador de memória Zend Engine
  - [gc\_status](function.gc-status.md) — Obtém informações sobre o coletor de lixo
  - [get\_cfg\_var](function.get-cfg-var.md) — Obtém o valor de uma opção de configuração do PHP
  - [get\_current\_user](function.get-current-user.md) — Obtém o nome do proprietário do script PHP atual
  - [get\_defined\_constants](function.get-defined-constants.md) — Retorna um array associativo com os nomes de todas as constantes e seus valores
  - [get\_extension\_funcs](function.get-extension-funcs.md) — Retorna um array com os nomes das funções de um módulo
  - [get\_include\_path](function.get-include-path.md) — Obtém a opção de configuração include\_path atual
  - [get\_included\_files](function.get-included-files.md) — Retorna um array com os nomes dos arquivos incluídos ou requeridos
  - [get\_loaded\_extensions](function.get-loaded-extensions.md) — Retorna um array com os nomes de todos os módulos compilados e carregados
  - [get\_magic\_quotes\_gpc](function.get-magic-quotes-gpc.md) — Obtém a configuração atual de magic\_quotes\_gpc
  - [get\_magic\_quotes\_runtime](function.get-magic-quotes-runtime.md) — Obtém a configuração ativa para magic\_quotes\_runtime
  - [get\_required\_files](function.get-required-files.md) — Sinônimo de get\_included\_files
  - [get\_resources](function.get-resources.md) — Retorna recursos ativos
  - [getenv](function.getenv.md) — Obtém o valor de uma única ou de todas as variáveis ​​de ambiente
  - [getlastmod](function.getlastmod.md) — Obtém o horário da última modificação na página
  - [getmygid](function.getmygid.md) — Obtém o GID do proprietário do script PHP
  - [getmyinode](function.getmyinode.md) — Obtém o inode do script atual
  - [getmypid](function.getmypid.md) — Obtém o ID do processo PHP
  - [getmyuid](function.getmyuid.md) — Obtém o UID do proprietário do script PHP
  - [getopt](function.getopt.md) — Obtêm opções da linha de comando
  - [getrusage](function.getrusage.md) — Obtém os usos atuais de recursos
  - [ini\_alter](function.ini-alter.md) — Sinônimo de ini\_set
  - [ini\_get](function.ini-get.md) — Obtém o valor de uma opção de configuração
  - [ini\_get\_all](function.ini-get-all.md) — Obtém todas as opções de configuração
  - [ini\_parse\_quantity](function.ini-parse-quantity.md) — Obtém o tamanho interpretado da sintaxe abreviada do ini
  - [ini\_restore](function.ini-restore.md) — Restaura o valor de uma opção de configuração
  - [ini\_set](function.ini-set.md) — Define o valor de uma opção de configuração
  - [memory\_get\_peak\_usage](function.memory-get-peak-usage.md) — Retorna o pico de memória alocada pelo PHP
  - [memory\_get\_usage](function.memory-get-usage.md) — Retorna a quantidade de memória alocada para o PHP
  - [memory\_reset\_peak\_usage](function.memory-reset-peak-usage.md) — Redefine o pico de uso de memória
  - [php\_ini\_loaded\_file](function.php-ini-loaded-file.md) — Obtém o caminho para o arquivo php.ini carregado
  - [php\_ini\_scanned\_files](function.php-ini-scanned-files.md) — Retorna uma lista de arquivos .ini analisados ​​do diretório ini adicional
  - [php\_sapi\_name](function.php-sapi-name.md) — Retorna o tipo de interface entre o servidor web e o PHP
  - [php\_uname](function.php-uname.md) — Retorna informações sobre o sistema operacional em que o PHP está sendo executado
  - [phpcredits](function.phpcredits.md) — Mostra os créditos para o PHP
  - [phpinfo](function.phpinfo.md) — Mostra informações sobre a configuração do PHP
  - [phpversion](function.phpversion.md) — Obtém a versão atual do PHP
  - [putenv](function.putenv.md) — Define o valor de uma variável de ambiente
  - [restore\_include\_path](function.restore-include-path.md) — Restaura o valor da opção de configuração include\_path
  - [set\_include\_path](function.set-include-path.md) — Define a opção de configuração include\_path
  - [set\_time\_limit](function.set-time-limit.md) — Limita o máximo tempo de execução
  - [sys\_get\_temp\_dir](function.sys-get-temp-dir.md) — Retorna o caminho do diretório usado para arquivos temporários
  - [version\_compare](function.version-compare.md) — Compara duas strings de número de versão no "padrão PHP"
  - [zend\_thread\_id](function.zend-thread-id.md) — Retorna um identificador exclusivo para o thread atual
  - [zend\_version](function.zend-version.md) — Obtém a versão do motor Zend atual

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
